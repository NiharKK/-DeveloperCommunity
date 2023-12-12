<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CommunityM extends CI_Model
{
	public function selectAllCommunity()
	{
		return $this->db->order_by("CommunityId","asc")->select("c.*,u.UserName,ct.CategoryName,cty.CityName")->from("tblcommunity c")->join("tbluser u","u.UserId=c.UserId")->join("tblcategory ct","ct.CategoryId=c.CategoryId")->join("tblcity cty","cty.CityId=c.CityId")->get()->result();
	}

	public function deleteCommunity($data)
	{
		return $this->db->delete("tblcommunity",$data);
	}

	public function deleteCommunityMemberByCommunityId($data)
	{
		return $this->db->delete("tblcommunitymember",$data);
	}
}
?>