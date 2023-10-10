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
	

}
?>