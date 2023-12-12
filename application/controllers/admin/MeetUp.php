<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MeetUp extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/MeetUpM","mm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"meetup"=>$this->mm->selectAllMeetUp()
		);
		$this->load->view("admin/allMeetUp",$temp);
	}

}
?>