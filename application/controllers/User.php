<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("UserM","um");

		/*if (!isset($_SESSION['uname'])) 
		{
			redirect("login");
		}*/
	}

	public function index()
	{
		$this->load->view("login"); 	
	}

	public function validateLogin()
	{
		$data=array(
			"Username"=>$this->input->post('txtUname'),
			"Password"=>$this->input->post('txtPwd')
		);
		$newdata=array(
			"Status"=>"1"
		);
		$loggedData=$this->um->selectLoginData($data);
		if (count($loggedData)>0) 
		{
			$_SESSION['uid']=$loggedData[0]->UserId;
			$_SESSION['uname']=$loggedData[0]->Username;
			$_SESSION['propic']=$loggedData[0]->ProfileImage;

			$where=array("UserId"=>$_SESSION['uid']);
			$this->um->updateUser($newdata,$where);
			redirect("UserDemo");
		}
		else
		{
			$temp=array("loginErr"=>"Invalid UserName or Password");
			$this->load->view('login',$temp);
		}
	}


	public function loadAddUser()
	{
		$temp=array(
			"cities"=>$this->um->selectAllCity()
		);
		$this->load->view("reg",$temp);
	}

	public function registerUser()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "D:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"Username"=>$this->input->post('txtUname'),
			"Password"=>$this->input->post('txtPwd'),
			"Email"=>$this->input->post('txtEmail'),
			"Gender"=>$this->input->post('txtGender'),
			"DOB"=>$this->input->post('BirthDate'),
			"CityId"=>$this->input->post('txtCity'),
			//"Status"=>$this->input->post('txtStatus'),
			"MobileNo"=>$this->input->post('txtMobile'),
			"ProfileImage"=>$img
		);
		$x=$this->input->post('txtOTP');
		$a=$this->input->post('OTP');
		if ($x==$a) 
		{
			$this->um->insertUser($data);
			redirect("User");
		}
		else
		{
			redirect("User/loadAddUser");
		}
		
	}

	public function logout()
	{
		$where=array("UserId"=>$_SESSION['uid']);
		$newdata=array(
			"Status"=>"0"
		);
		$this->um->updateUser($newdata,$where);
		session_destroy();
		redirect("User");
	}

	public function send()
	{
		$this->load->library('Email');
		$config = array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.gmail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'a1products0007@gmail.com',
		    'smtp_pass' => 'fmeennrukopxtbpx',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1',
			'auth'=> true
		);
		$email=$this->input->post('e');
  		$OTP=rand("100000","900000");
		$this->email->initialize($config);
  			
		$this->email->from('a1products0007@gmail.com', 'Community System');
		$this->email->to($email);  
		$this->email->subject('One Time Password');  
		$this->email->message($OTP,"is your Community System Verification Code.");
		$this->email->set_newline("\r\n");
		if ($this->email->send()) 
		{
			echo $OTP;
		}
		else
		{
			echo $this->email->print_debugger();		
		}
	}

	public function loadForgetPassword()
	{
		$this->load->view("Forgotpassword");
	}

	public function ChangePassword()
	{
		$email=$this->input->post('txtEmail');
		$User=$this->um->selectUserByEmail($email);
		//print_r($User);
		$newPwd=$this->input->post('txtNewPwd');
		$conPwd=$this->input->post('txtConPwd');
		$x=$this->input->post('txtOTP');
		$a=$this->input->post('OTP');
		echo "<br>";
		echo "b=";
		print_r($x);
		echo "<br>";
		echo "a=";		
		print_r($a);
		echo "<br>";
		print_r($newPwd);
		echo "<br>";
		print_r($conPwd);
		/*if ($x==$a) 
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
		}*/
	}
}
?>