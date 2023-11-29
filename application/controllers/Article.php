<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("ArticleM","am");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("User");
		}
		$temp=array(
			"Articles"=>$this->am->selectAllArticle()
		);
		//print_r($temp);
		$this->load->view("allArticles",$temp);
	}

	public function loadArticleById($arid)
	{
		$data=array("ArticleId"=>$arid);

		$d2=array(
			"ArticleId"=>$arid,
			"UserId"=>$_SESSION['uid']
		);
		$count=count($this->am->checkLike($d2));

		if ($count==0)
		{
			$likeStatus="No";
		}
		else
		{
			$likeStatus="Yes";	
		}

		$temp=array(
			"Article"=>$this->am->selectArticleById($data),
			"Likes"=>$this->am->selectArticleLikeByArticleId($data),
			"likeStatus"=>$likeStatus,
			"ArticleImages"=>$this->am->selectArticleImagesByArticleId($data)
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("ArticleMoreInfo",$temp);
	}

	public function Like($arid)
	{
		$data=array(
			"ArticleId"=>$arid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->am->ArticleLike($data);
		redirect("Article/loadArticleById/$arid");
	}

	public function Unlike($arid)
	{
		$data=array(
			"ArticleId"=>$arid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->am->ArticleUnlike($data);
		redirect("Article/loadArticleById/$arid");
	}

	public function loadAddArticle()
	{
		$this->load->view("AddArticle");
	}

	public function addArticle()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"Title"=>$this->input->post('txtTitle'),
			"Description"=>$this->input->post('txtDesc'),
			"FeatureImage"=>$img,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->am->insertArticle($data);
		redirect("Article");
	}

	public function loadEditArticle($arid)
	{
		$data=array(
			"ArticleId"=>$arid
		);
		//print_r($data);
		$temp=array(
			"Article"=>$this->am->selectArticleById($data)
		);
		$this->load->view("updArticle",$temp);
	}

	public function editArticle($arid)
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$newdata=array(
			"Title"=>$this->input->post('txtTitle'),
			"Description"=>$this->input->post('txtDesc'),
			"FeatureImage"=>$img,
			"UserId"=>$_SESSION['uid']
		);
		$where=array(
			"ArticleId"=>$arid
		);
		$this->am->updateArticle($newdata,$where);
		redirect("Article");
	}

	public function loadAddImage($arid)
	{
		$data=array(
			"ArticleId"=>$arid
		);
		$this->load->view("AddImage",$data);
	}

	public function AddArticleImages($arid)
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"ArticleId"=>$arid,
			"ImageURL"=>$img
		);
		//print_r($data);
		$this->am->insertArticleImages($data);
		redirect("Article/loadArticleById/$arid");
	}

	public function loadEditImage($arid,$img)
	{
		$temp=array(
			"ArticleId"=>$arid,
			"ImageURL"=>$img
		);
		$this->load->view("updImage",$temp);
		//print_r($where);
	}

	public function editImage($arid,$img)
	{
		$where=array(
			"ArticleId"=>$arid,
			"ImageURL"=>$img
		);
		$image=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$image) or die("cannot upload image");
		$newdata=array(
			"ArticleId"=>$arid,
			"ImageURL"=>$image
		);
		$this->am->updateArticleImages($newdata,$where);
		redirect("Article/loadArticleById/$arid");
	}
}
?>