<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CuratorM extends CI_Model
{
	public function selectAllCurator()
	{
		return $this->db->select("cc.*,c.Title,u.UserName")->from("tblcommunitycurator cc")->join("tblcommunity c","c.CommunityId=cc.CommunityId")->join("tbluser u","u.UserId=cc.UserId")->get()->result();
	}

}
?>