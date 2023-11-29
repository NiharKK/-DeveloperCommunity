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

	public function loadLikes($fpid,$fid,$uid)
	{
		$data=array("forumpostid"=>$fpid);
		$d2=array(
			"forumid"=>$fid
		);
		$d3=array(
			"forumpostid"=>$fpid,
			"UserId"=>$uid
		);
		$message=$this->pm->selectForumPostByUserId($data);
		$temp=array(
			"Likes"=>$this->pm->selectPostLikeByForumPostId($data),
			"pInfo"=>$this->pm->selectForumById($d2),
			"Message"=>$this->pm->selectForumPostByForumId($d2),
			"Msg"=>$message
		);
		// echo "<pre>";
		// print_r($message);
		// echo "</pre>";
		$this->load->view("PostLikeInfo",$temp);
	}
}
?>