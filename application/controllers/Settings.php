<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
 				$this->load->library('form_validation');
                $this->load->model('Db_model');
                $this->load->library('session');
                $this->load->model('Form_model');

        }

	public function index()
	{
			redirect('settings/dashboard');
	}


//------------------ FUNCTION FOR FILE UPLOAD ---------------------------------
   
  private function uploadFile($id,$path,$filename,$types,$width=0,$height=0)
  {
	$config=array(
		'upload_path'	=> $path,
		'allowed_types'	=> $types,
		'file_name' => $filename,
	);  
	$this->load->library("upload",$config);
	if($this->upload->do_upload($id))
	{
		$data=$this->upload->data();
		if($data['is_image']==1 && $width!=0 && $height!=0)
			$this->resizeImage($path.$data['file_name'],$width,$height);
		return $data['file_name'];
	}
	else
		return false;
  }
	
	
	private function resizeImage($path,$width,$height)
	{
		$config=array(
			'image_library' => 'gd2',
			'source_image'	=> $path,
			'quality'		=> 90,
			'maintain_ratio'=> FALSE,
			'width'			=> $width,
			'height'		=> $height
		);
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();	
	}
   
   //------------------- FUNCTION FOR FILE UPLOAD END -------------------------------
   
   


	private function is_session_set()
	{
		if(!isset($_SESSION['admin_id']))
			return false;
		else
			return true;
	}
	public function dashboard()
	{
		if(!$this->is_session_set())
		{
			redirect('settings/login');
			return;
		}
		$data=$this->get_data();
	
		$this->load->view('dashboard',$data);
	}

private function get_data()
{	
	$messages =null;
	$msgcount=0;
	$data['messages']=null;
	$whr =array(
			'msg_receiver' => $this->session->userdata('admin_id'),
			'status' => 1,
		);
		$messages = $this->Db_model->get_details('*','message',$whr);
		if($messages!=null)
		{
			foreach ($messages as $msg) {
				$st = array(
					'admin_id' => $msg['msg_sender'],
					'status' => 1
				);
				$senderinfo = $this->Db_model->get_details('count(admin_id) as ct,admin_id,admin_image,admin_name','tbl_admin',$st);
				if($senderinfo[0]['ct']==1)
				{
					$msg['sender_id']= $senderinfo[0]['admin_id'];
					$msg['sender_image']= $senderinfo[0]['admin_image'];
					$msg['sender_name']= $senderinfo[0]['admin_name'];
				}
				$msgcount++;
				$data['messages'][]=$msg;
			}
		}
		$data['msgcount']=$msgcount;
		$st= array(
			'admin_id' => $this->session->userdata('admin_id'),
		);
		$udata=$this->Db_model->get_details('*','tbl_admin',$st);
		$data['userdata']= $udata[0];
		return $data;
}





	public function message()
	{
		if(!$this->is_session_set())
		{
			redirect('settings/login');
			return;
		}
		$token=$this->uri->segment(3);
		
		$data=$this->get_data();
		if(isset($token))
		{
			$st=array('admin_id' => $token, 'status' => 1,);
			$reply=$this->Db_model->get_details('admin_uid as id','tbl_admin',$st);
			if($reply){
				$data['reply']=$reply[0]['id'];
			}
			
		}
		$this->load->view('message',$data);
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function signup()
	{
		$this->load->view('signup');
	}

	public function register()
	{
	  $postdata= $this->input->post();
	  unset($postdata['cpassword']);
	  $postdata['admin_password']=md5($postdata['admin_password']);
	  $postdata['last_ip_address']=$this->input->ip_address();
	  $postdata['created_on']=date('d-m-Y h:i:s a');
	  $filename=md5($postdata['admin_name']).date('dmY');
	$image=$this->uploadFile('admin_image','./uploads/admin/img/',$filename,'JPG|jpg|png|PNG|jpeg|JPEG',$width=500,$height=500);
	 if ($image)
	 	{
        $postdata['admin_image']=$image;
     	}
	  if($this->Db_model->insert('tbl_admin',$postdata))
	  {
	  	redirect('settings/login');
	  }
	  else
	  {
	  	redirect('settings/signup');
	  }
	}

	public function admin_login()
	{
		$postdata = $this->input->post();
		$this->Form_model->admin_log_val();
		if ($this->form_validation->run() == FALSE)
		{
			echo form_error('log_uid');
			//redirect('settings/login');
		}
		
		/*$whr = array(
			'admin_uid' => $postdata['log_uid'],
			'admin_password' => md5($postdata['log_password']),
			'status' => 1,
		);
		$logdata= $this->Db_model->get_details('*','tbl_admin',$whr);
		if($logdata)
		{
			$sess = $logdata[0];
			$ip = $this->input->ip_address();
			$lastlogin= array(
				'last_ip_address' => $ip,
				'last_login_date' => date('d-m-Y h:i:s a'),
				'is_logged_in' => 1,
			);
			$sess['last_ip_address']=$ip;
			$sess['last_login_date']=date('d-m-Y h:i:s a');
			$sess['is_logged_in'] = 1;
			$this->session->set_userdata($sess);
			$whr =array(
				'admin_id' => $sess['admin_id'],
			);
			$this->Db_model->update('tbl_admin',$lastlogin,$whr);
			
			redirect('settings/dashboard');
		}
		else
		{
			redirect('settings/login');
		}
	}
	public function logout()
	{
		$logclear= array(
				'is_logged_in' => '0',
			);
		$whr =array(
				'admin_id' => $this->session->userdata('admin_id'),
			);
		$this->Db_model->update('tbl_admin',$logclear,$whr);
		session_destroy();
		redirect('settings/login');*/
	}

	public function send_message()
	{
		$postdata=$this->input->post();
		$whr =array(
			'admin_uid' => $postdata['rid'],
			'status' => 1,
		);

		$rec=$this->Db_model->get_details('count(admin_id) as ct,admin_id','tbl_admin',$whr);
		if($rec[0]['ct']==1)
		{
			$msg = array(
				'msg_sender' => $this->session->userdata('admin_id'),
				'msg_receiver' => $rec[0]['admin_id'],
				'msg_content' => $postdata['msg'],
				'msg_send_on' => date('d-m-Y h:i:s a'),
			);
			$this->Db_model->insert('message',$msg);
			redirect('settings/message');
		}
		else
			redirect('settings/message');
	}

	public function profile()
	{
		if(!$this->is_session_set())
		{
			redirect('settings/login');
			return;
		}
		$data=$this->get_data();
	
		$this->load->view('profile',$data);
	}
	public function update_profile()
	{	$token = $this->uri->segment(3);
		$postdata=$this->input->post();
		if(!isset($token))
		{	
			echo false;
			return;
		}
		else
		{
			$data= array(
				'admin_name' => $postdata['admin_name'],
				'admin_email' => $postdata['admin_email'],
				'admin_phone' => $postdata['admin_phone'],
			);
			$whr= array(
				'admin_id' => $token,
			);
			$res= $this->Db_model->update('tbl_admin',$data,$whr);
			if($res)
					echo true;
			else
				echo false;
		}
	}

}
