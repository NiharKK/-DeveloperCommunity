<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserDemo extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("UserDemoM","udm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("User");
		}
		$temp=array(
			"Cats"=>$this->udm->selectAllCategory()
		);
		$this->load->view("home",$temp);
	}

	public function loadCommunityByCategoryId($cid)
	{
		$data=array(
			"CategoryId"=>$cid
		);
		//$Member=$this->udm->selectCommunityMemberByCommunityId($data);
		//print_r($data);
		$temp=array(
			"Community"=>$this->udm->selectCommunityByCategoryId($data)
			// "Member"=>count($Member)
		);
		// echo "<pre>";
		// print_r($Member);
		// echo "</pre>";
		$this->load->view("CommunityByCategory",$temp);
	}

	public function loadProfile($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);

		$temp=array(
			"Community"=>$this->udm->selectCommunityById($data),
			"Members"=>$this->udm->selectCommunityMemberByCommunityId($data),
			"Request"=>$this->udm->selectCommunityCuratorRequestByCommunityId($data),
			"MeetUp"=>$this->udm->selectMeetupsByCommunityId($data),
			"Forum"=>$this->udm->selectForumByCommunityId($data),
			"cityData"=>$this->udm->selectAllCity()
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view('CommunityProfile',$temp);
	}
	
	public function addCommunityCurator($uid,$cid)
	{
		$data=array(
			"UserId"=>$uid,
			"CommunityId"=>$cid
		);
		//print_r($data);
		$this->udm->insertCommunityCuratorRequest($data);
		$this->udm->deleteCommunityCuratorRequest($data);
		redirect("UserDemo/loadProfile/$cid");
	}

	public function addMeetUp($cid)
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"Topic"=>$this->input->post('txttopic'),
			"Description"=>$this->input->post('txtdesc'),
			"MeetUpDate"=>$this->input->post('txtmdate'),
			"TotalSeats"=>$this->input->post('txttseat'),
			"Address"=>$this->input->post('txtaddr'),
			"CityId"=>$this->input->post('txtCity'),
			"UserId"=>$_SESSION['uid'],
			"TimingsFrom"=>$this->input->post('txttfrom'),
			"TimingsTo"=>$this->input->post('txttto'),
			"CommunityId"=>$cid,
			"CoverImage"=>$img,
			"Status"=>$this->input->post('txtStatus')
		);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->udm->insertMeetUp($data);
		redirect("UserDemo/loadProfile/$cid");
	}

	public function addForum($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$temp=array(
			"Title"=>$this->input->post('txtTitle'),
			"Description"=>$this->input->post('txtDesc'),
			"PostImage"=>$img,
			"CommunityId"=>$cid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->udm->insertForum($temp);
		redirect("UserDemo/loadProfile/$cid");
	}

	public function loadEditCommunity($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		$temp=array(
			"Community"=>$this->udm->selectCommunityById($data),
			"catData"=>$this->udm->selectAllCategory($data),
			"City"=>$this->udm->selectAllCity()
		);
		$this->load->view("EditCommunity",$temp);
	}

	public function editCommunity($cid)
	{
		$where=array(
			"CommunityId"=>$cid
		);
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$newdata=array(
			"Title"=>$this->input->post('txttitle'),
			//"Status"=>$this->input->post('txtStatus'),
			"CoverImage"=>$img,
			"Description"=>$this->input->post('txtdesc'),
			"CategoryId"=>$this->input->post('txtcatid'),
			"Address"=>$this->input->post('txtadd'),
			"CityId"=>$this->input->post('txtcityid')
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->udm->updateCommunity($newdata,$where);
		redirect("UserDemo/loadProfile/$cid");
	}

	public function addCommunityRequest($cid)
	{
		$data=array(
			"CommunityId"=>$cid,
			"UserId"=>$_SESSION['uid']
		);
		$this->udm->insertCommunityRequest($data);
		redirect("UserDemo/loadProfile/$cid");
	}

	public function addCrRequest($cid)
	{
		$data=array(
			"CommunityId"=>$cid,
			"UserId"=>$_SESSION['uid']
		);
		$this->udm->insertCommunityCuratorRequest($data);
		redirect("UserDemo/loadProfile/$cid");
	}
}
?>