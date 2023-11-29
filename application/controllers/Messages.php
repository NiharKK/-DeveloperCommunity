<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Messages extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("MessagesM","mm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("User");
		}
		$this->load->view("Messages");
	}

	public function loadCommunityByUserId($id)
	{
		$data=array(
			"UserId"=>$id
		);
		$temp=array(
			"Cominfo"=>$this->mm->selectCommunityMemberByUserId($data),
			"Com"=>$this->mm->selectAllCommunityByUserId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("Messages",$temp);
	}
}
?>