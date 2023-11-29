<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MessagesM extends CI_Model
{
	public function selectCommunityMemberByUserId($data)
	{
		return $this->db->select("cm.*,u.Username,c.*,cat.CategoryName,ct.CityName")->from("tblcommunitymember cm")->join("tbluser u","u.UserId=cm.UserId")->join("tblcommunity c","c.CommunityId=cm.CommunityId")->join("tblcategory cat","cat.CategoryId=c.CategoryId")->join("tblcity ct","ct.CityId=c.CityId")->where_in("u.UserId",$data)->get()->result();
	}

	public function selectAllCommunityByUserId($data)
	{
		return $this->db->select("c.*,u.Username,u.ProfileImage,cat.CategoryName,ct.CityName")->from("tblcommunity c")->join("tbluser u","u.UserId=c.UserId")->join("tblcategory cat","cat.categoryId=c.CategoryId")->join("tblcity ct","ct.CityId=c.CityId")->where_in("u.UserId",$data)->get()->result();
	}
}
?>