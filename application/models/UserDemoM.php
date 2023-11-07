<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserDemoM extends CI_Model
{
	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();
	}

	public function selectCommunityByCategoryId($data)
	{
		return $this->db->select("cm.*,u.Username,u.ProfileImage,c.CategoryName")->from("tblcommunity cm")->join("tbluser u","u.UserId=cm.UserId")->join("tblcategory c","c.CategoryId=cm.CategoryId")->where_in("c.CategoryId",$data)->get()->result();
	}

	public function selectCommunityMemberByCommunityId($cid)
	{
		return $this->db->select("cm.*,c.*,u.Username,u.UserId as uid,u.ProfileImage")->from("tblcommunitymember cm")->join("tblcommunity c","c.CommunityId=cm.CommunityId")->join("tbluser u","u.UserId=cm.UserId")->where_in("c.CommunityId",$cid)->get()->result();
	}

	public function selectMeetupsByCommunityId($cid)
	{
		return $this->db->select("m.*,u.Username")->from("tblmeetup m")->join("tblcommunity c","c.CommunityId=m.CommunityId")->join("tbluser u","u.UserId=m.UserId")->where_in("c.CommunityId",$cid)->get()->result();
	}

	public function selectForumByCommunityId($cid)
	{
		return $this->db->select("f.*")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->where_in("c.CommunityId",$cid)->get()->result();
	}

	public function selectCommunityById($data)
	{
		return $this->db->select("c.*,u.Username,u.ProfileImage,u.Email,ct.CityName")->from("tblcommunity c")->join("tbluser u","u.UserId=c.UserId")->join("tblcity ct","ct.CityId=u.CityId")->where($data)->get()->result();
	}

	public function checkAvailability($cid)
	{
		$data=array(
				"CommunityId"=>$cid,
				"UserId"=>$_SESSION['uid']
		);
		return $this->db->where($data)->get('tblcommunitymember')->num_rows();
	}

	public function checkCuratorRequest($cid)
	{
		$data=array(
				"CommunityId"=>$cid,
				"UserId"=>$_SESSION['uid']
		);
		return $this->db->where($data)->get('tblcommunityrequest')->num_rows();
	}

	public function checkUserType($cid)
	{
		$data=array(
			"CommunityId"=>$cid,
			"UserId"=>$_SESSION['uid']
		);
		return $this->db->where($data)->get('tblcommunitycurator')->num_rows();
	}

	public function selectCommunityCuratorRequestByCommunityId($data)
	{
		return $this->db->select("c.*,u.*")->from('tblcommunitycuratorrequest c')->join('tbluser u','u.UserId=c.UserId')->join("tblcommunity cm","cm.CommunityId=c.CommunityId")->where_in("cm.CommunityId",$data)->get()->result();
	}

	public function insertCommunityCuratorRequest($data)
	{
		return $this->db->insert("tblcommunitycuratorrequest",$data);
	}

	public function deleteCommunityCuratorRequest($data)
	{
		return $this->db->delete("tblcommunitycuratorrequest",$data);
	}

	public function insertMeetUp($data)
	{
		return $this->db->insert("tblmeetup",$data);
	}

	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();
	}

	public function insertForum($data)
	{
		return $this->db->insert("tblforum",$data);
	}

	public function updateCommunity($newdata,$where)
	{
		return $this->db->where($where)->update("tblcommunity",$newdata);
	}

	public function insertCommunityRequest($data)
	{
		return $this->db->insert("tblcommunityrequest",$data);
	}

}
?>