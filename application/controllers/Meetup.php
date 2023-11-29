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

	public function addMeetUpMember($mid,$uid)
	{
		$data=array(
			"MeetUpId"=>$mid,
			"UserId"=>$uid
		);
		//print_r($data);
		$this->mm->insertMeetUpMember($data);
		$this->mm->deleteMeetUpRequest($data);
		redirect("Meetup/loadMeetUpById/$mid");
	}

	public function removeMeetUpRequest($mid,$uid)
	{
		$data=array(
			"MeetUpId"=>$mid,
			"UserId"=>$uid
		);
		//print_r($data);
		$this->mm->deleteMeetUpRequest($data);
		redirect("Meetup/loadMeetUpById/$mid");
	}

	public function addMeetUpRequest($mid)
	{
		$data=array(
			"MeetUpId"=>$mid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->mm->insertMeetUpRequest($data);
		redirect("Meetup/loadMeetUpById/$mid");
	}

	public function editMeetUp($cid,$mid)
	{
		$where=array(
			"CommunityId"=>$cid,
			"MeetUpId"=>$mid
		);
		$newdata=array(
			"Topic"=>$this->input->post('txttopic'),
			"Description"=>$this->input->post('txtdesc'),
			"MeetUpDate"=>$this->input->post('txtmdate'),
			"Address"=>$this->input->post('txtaddr'),
			"TotalSeats"=>$this->input->post('txttseat'),
			"TimingsFrom"=>$this->input->post('txttfrom'),
			"TimingsTo"=>$this->input->post('txttto'),
			"CityId"=>$this->input->post('txtcity')
		);

		$this->mm->updateMeetUp($newdata,$where);
		redirect("Meetup/loadMeetUpById/$mid");
	}
}
?>