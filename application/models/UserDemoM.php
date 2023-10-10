<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserDemoM extends CI_Model
{
	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();
	}

	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();
	}

}
?>