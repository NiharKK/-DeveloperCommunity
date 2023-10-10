<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ProfileM","pm");
	}

	public function index($uid)
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("User");
		}
		$data=array(
			"UserId"=>$uid
		);
		$temp=array(
			"User"=>$this->pm->selectUserById($data),
			"Community"=>$this->pm->selectCommunityByUserId($data),
			"City"=>$this->pm->selectAllCity(),
			"Members"=>$this->pm->selectCommunityMemberByUserId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("MyProfile",$temp);
	}

	public function editInfo($uid)
	{
		$where=array(
			"UserId"=>$uid
		);
		$newdata=array(
			"Email"=>$this->input->post('txtemail'),
			"Gender"=>$this->input->post('txtgender'),
			"DOB"=>$this->input->post('txtdob'),
			"CityId"=>$this->input->post('txtcityid'),
			"MobileNo"=>$this->input->post('txtmob')
		);
		// echo "<pre>";
		// print_r($newdata);
		// echo "</pre>";
		$this->pm->updateUser($newdata,$where);
		redirect("Profile/index/$uid");
	}

	public function editPassword($uid)
	{
		$where=array(
			"UserId"=>$uid
		);
		$User=$this->pm->selectUserById($where);
		$oldpass=$this->input->post('txtoldpassword');
		if ($oldpass==$User[0]->Password) 
		{
			$newdata=array(
				"Password"=>$this->input->post('txtPwd')
			);
			$temp=array(
				"User"=>$this->pm->selectUserById($where),
				"Community"=>$this->pm->selectCommunityByUserId($where),
				"City"=>$this->pm->selectAllCity(),
				"Members"=>$this->pm->selectCommunityMemberByUserId($where),
				"UserId"=>$uid,
				"Err"=>"Password Changed Successfully"
			);
			$this->pm->updateUser($newdata,$where);
			$this->load->view("MyProfile",$temp);
		}
		else
		{
			$newdata=array(
				"Msg"=>"Old Password is Incorrect",
				"User"=>$this->pm->selectUserById($where),
				"Community"=>$this->pm->selectCommunityByUserId($where),
				"City"=>$this->pm->selectAllCity(),
				"Members"=>$this->pm->selectCommunityMemberByUserId($where),
				"UserId"=>$uid
		);
			$this->load->view("MyProfile",$newdata);
		}
		
		// echo "<pre>";
		// print_r($newdata);
		// echo "</pre>";
	}

	public function editImage($uid)
	{
		$where=array(
			"UserId"=>$uid
		);
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "D:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		if ($img=="") 
		{
			redirect("Profile/index/$uid");
		}
		else
		{
			$newdata=array(
				"ProfileImage"=>$img
			);
			$this->pm->updateUser($newdata,$where);
			$_SESSION['propic']=$img;
			redirect("Profile/index/$uid");
		}
	}
}
?>