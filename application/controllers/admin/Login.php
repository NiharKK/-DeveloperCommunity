<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/LoginM","lm");
	}

	public function index()
	{
		$this->load->view("admin/login");
	}

	public function validateLogin()
	{
		$data=array(
			"Username"=>$this->input->post('txtUname'),
			"Password"=>$this->input->post('txtPwd')
		);
		//print_r($data);
		$loggedData=$this->lm->selectLoginData($data);
		/*echo "<br>";
		print_r($loggedData);*/
		if (count($loggedData)>0)
		{
			$_SESSION['aid']=$loggedData[0]->AdminId;
			$_SESSION['aname']=$loggedData[0]->Username;
			$_SESSION['propic']=$loggedData[0]->ProfilePic;

			redirect("admin/Demo");
		}
		else
		{
			$temp=array("loginErr"=>"Invalid Username or Password");
			$this->load->view("admin/login",$temp);
		}
	}

	public function Logout()
	{
		session_destroy();
		redirect("admin/login");
	}

	public function send()
	{
		$this->load->library('Email');
		$config = array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.gmail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'communitysystem007@gmail.com',
		    'smtp_pass' => 'community@007'
		    //'mailtype'  => 'html', 
		    //'charset'   => 'iso-8859-1'
		);
		$email=$this->input->post('e');
  		$OTP=rand("100000","900000");
		$this->email->initialize($config);
  			
		$this->email->from('communitysystem007@gmail.com', 'Community System');
		$this->email->to($email);  
		$this->email->subject('One Time Password');  
		$this->email->message($OTP,"is your Community System Verification Code.");
		$this->email->set_newline("\r\n");
		if ($this->email->send()) 
		{
			echo $OTP;
			//die();
		}
		else
		{
			echo $this->email->print_debugger();		
		}
		//echo $OTP;
	}

	public function loadForgetPassword()
	{
		$this->load->view("admin/Forgotpassword");
	}

	/*public function ChangePassword()
	{
		$email=$this->input->post('txtEmail');
		$admin=$this->lm->selectAdminByEmail($email);
		//print_r($admin);
		$newPwd=$this->input->post('txtNewPwd');
		$conPwd=$this->input->post('txtConPwd');
		$b=$this->input->post('txtOTP');
		$a=$this->input->post('OTP');
		echo "<br>";
		echo "b=";
		print_r($b);
		echo "<br>";
		echo "a=";		
		print_r($a);
		echo "<br>";
		print_r($newPwd);
		echo "<br>";
		print_r($conPwd);
		if ($x==$a) 
		{
			if ($newPwd==$conPwd) 
			{
				$data=array(
					"Password"=>$newPwd
				);
				$where=array(
					"AdminId"=>$admin[0]->AdminId
				);
				// print_r($data);
				// print_r($where);
				$this->lm->updateAdmin($data,$where);
				redirect("admin/Login");
				
			}
			else
			{
				$temp=array(
					"Err"=>"New Password & Confirm Password Does not Match"
				);
				$this->load->view("admin/Forgotpassword",$temp);
			}
		}
		else
		{
			$temp=array(
				"Msg"=>"OTP is incorrect"
			);
			$this->load->view("admin/Forgotpassword",$temp);
		}
	}*/
}
?>