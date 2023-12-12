<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Curator extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CuratorM","cm");
	}

	public function index()
	{
		if (!isset($_SESSION['aname'])) 
		{
			redirect("admin/login");
		}
		$temp=array(
			"curators"=>$this->cm->selectAllCurator()
		);
		$this->load->view("admin/allCurator",$temp);
	}

}
?>