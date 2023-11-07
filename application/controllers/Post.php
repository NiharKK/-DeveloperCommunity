<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("PostM","pm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("User");
		}
		//$this->load->view("");
	}

	public function loadAllPost()
	{
		$temp=array(
			"Posts"=>$this->pm->selectAllPost()
		);
		$this->load->view("allPosts",$temp);
	}

	public function loadPostInfo($fid)
	{
		$data=array(
			"forumid"=>$fid
		);
		$temp=array(
			"pInfo"=>$this->pm->selectForumById($data),
			"Message"=>$this->pm->selectForumPostByForumId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("PostInfo",$temp);
	}
}
?>