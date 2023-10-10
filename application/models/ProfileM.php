<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProfileM extends CI_Model
{
	public function selectUserById($data)
	{
		return $this->db->select("u.*,c.CityName")->from("tbluser u")->join("tblcity c","c.CityId=u.CityId")->where($data)->get()->result();
	}

	public function selectCommunityByUserId($data)
	{
		return $this->db->select("c.*,u.Username,ct.*,cy.CityName")->from("tblcommunity c")->join("tbluser u","u.UserId=c.UserId")->join("tblcategory ct","ct.CategoryId=c.CategoryId")->join("tblcity cy","cy.CityId=c.CityId")->where_in("u.UserId",$data)->get()->result();
	}

	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();
	}

	public function updateUser($newdata,$where)
	{
		return $this->db->where($where)->update("tbluser",$newdata);
	}

	public function selectCommunityMemberByUserId($data)
	{
		return $this->db->select("cm.*,u.UserId as uid,u.Username,c.*")->from("tblcommunitymember cm")->join("tbluser u","u.UserId=cm.UserId")->join("tblcommunity c","c.CommunityId=cm.CommunityId")->where_in("u.UserId",$data)->get()->result();
	}
}
//return $this->db->select()->from()->join()->get()->result();
?>