<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Meetup extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("MeetupM","mm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("User");
		}
		//$this->load->view("MeetUp");
	}

	public function loadAllMeetUp()
	{
		$temp=array(
			"meetups"=>$this->mm->selectAllMeetUp()
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("MeetUp",$temp);
	}

	public function loadMeetUpById($mid)
	{
		$data=array(
			"MeetUpId"=>$mid
		);
		$d2=array(
			"MeetUpId"=>$mid,
			"UserId"=>$_SESSION['uid']
		);
		$check=$this->mm->selectMeetUpByCommunityId($data);
		$mem=$this->mm->selectMeetUpMembersByUserId($d2);
		if (count($mem)>0 || $check[0]->UserId==$_SESSION['uid']) 
		{
			$temp=array(
				"mInfo"=>$this->mm->selectMeetUpById($data),
				"members"=>$this->mm->selectMeetUpMembersByMeetUpId($data),
				"requests"=>$this->mm->selectRequestsByMeetUpId($data),
				"cityData"=>$this->mm->selectAllCity(),
				"Err"=>"Welcome"
			);
			$this->load->view("MeetUpMoreinfo",$temp);
		}
		else 
		{
			$temp=array(
				"mInfo"=>$this->mm->selectMeetUpById($data),
				"members"=>$this->mm->selectMeetUpMembersByMeetUpId($data),
				"requests"=>$this->mm->selectRequestsByMeetUpId($data),
				"cityData"=>$this->mm->selectAllCity(),
				"Msg"=>"Hello"
			);
			$this->load->view("MeetUpMoreinfo",$temp);
		}
		// echo "<pre>";
		// print_r($check);
		// echo "</pre>";
		
	}
	
}
?>