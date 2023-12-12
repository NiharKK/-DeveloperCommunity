<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/ArticleM","am");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"Articles"=>$this->am->selectAllArticle()
		);
		$this->load->view("admin/allArticle",$temp);
	}

	public function loadArticleImagesByArticleId($aid,$Title)
	{
		$data=array("ArticleId"=>$aid);
		$temp=array(
			"ArticleImages"=>$this->am->selectArticleImagesByArticleId($data),
			"Title"=>$Title
		);
		$this->load->view("admin/ArticleImages",$temp);
	}

}
?>