<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CommunityM extends CI_Model
{
	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();	
	}

	public function selectAllCategory()
	{
		return $this->db->get("tblcategory")->result();	
	}

	public function insertCommunity($data)
	{
		$this->db->insert("tblcommunity",$data);
		return $this->db->insert_id();
	}

	public function insertCommunityCurator($d2)
	{
		return $this->db->insert("tblcommunitycurator",$d2);	
	}

	public function insertCommunityMember($data)
	{
		return $this->db->insert("tblcommunityMember",$data);
	}

	public function selectAllCommunity()
	{
		return $this->db->select("c.*,u.Username")->from("tblcommunity c")->join("tbluser u","u.UserId=c.UserId")->get()->result();
	}

	public function selectCommunityMemberByCommunityId($data)
	{
		return $this->db->select("cm.*,u.Username,u.UserId as uid,c.*")->from("tblcommunitymember cm")->join("tbluser u","u.UserId=cm.UserId")->join("tblcommunity c","c.CommunityId=cm.CommunityId")->where_in("c.CommunityId",$data)->get()->result();
	}

	public function selectCommunitybyId($data)
	{
		return $this->db->select("c.*,u.Username,u.ProfileImage,ct.CityName")->from("tblcommunity c")->join("tbluser u","u.UserId=c.UserId")->join("tblcity ct","ct.CityId=u.CityId")->where($data)->get()->result();
	}

	public function selectCommunityMemberByUserId($data)
	{
		return $this->db->where($data)->get("tblcommunitymember")->result();
	}

	public function selectCommunityMember($data,$d2)
	{
		return $this->db->where($data)->get("tblcommunitymember",$d2)->result();
	}

	public function selectCommunitybyUserId($data)
	{
		return $this->db->where($data)->get("tblcommunity")->result();
	}

	public function selectCommunityRequestByCommunityId($data)
	{
		return $this->db->select("ccr.*,u.Username,c.CoverImage,c.Title")->from("tblcommunityrequest ccr")->join("tbluser u","u.UserId=ccr.UserId")->join("tblcommunity c","c.CommunityId=ccr.CommunityId")->where_in("c.CommunityId",$data)->get()->result();
	}

	public function selectCommunityRequestByUserId($data)
	{
		return $this->db->where($data)->get("tblcommunityrequest")->result();
	}

	public function insertCommunityRequest($data)
	{
		return $this->db->insert("tblcommunityrequest",$data);
	}

	public function deleteCommunityRequest($data)
	{
		return $this->db->where($data)->delete("tblcommunityrequest");
	}

	public function selectForumByCommunityId($data)
	{
		return $this->db->select("f.*,u.Username,u.ProfileImage")->from("tblforum f")->join("tbluser u","u.UserId=f.UserId")->where($data)->get()->result();
	}

	public function selectAllForumPost()
	{
		return $this->db->get("tblforumpost")->result();
	}

	public function selectAllForumPostByForumId($data)
	{
		return $this->db->select("fp.*,u.Username,u.UserId as uid,u.ProfileImage,f.*")->from("tblforumpost fp")->join("tbluser u","u.UserId=fp.UserId")->join("tblforum f","f.ForumId=fp.ForumId")->where_in("f.ForumId",$data)->get()->result();
	}

	public function insertForumPost($data)
	{
		return $this->db->insert("tblforumpost",$data);
	}

	public function selectPostLikeByForumPostId($data)
	{
		return $this->db->select("pl.*,f.*,u.Username,u.UserId as uid,u.ProfileImage")->from("tblpostlike pl")->join("tblforumpost f","f.forumpostid=pl.forumpostid")->join("tbluser u","u.UserId=pl.UserId")->where_in("f.ForumPostId",$data)->get()->result();
	}

	public function checkLike($data)
	{
		return $this->db->where($data)->get("tblpostlike")->result();
	}

	public function LikePost($data)
	{
		return $this->db->insert("tblpostlike",$data);
	}

	public function UnlikePost($data)
	{
		return $this->db->delete("tblpostlike",$data);
	}

	public function selectForumPostByUserId($data)
	{
		return $this->db->get("tblforumpost",$data)->result();
	}

	public function selectCommunityQuestionsByCommunityId($data)
	{
		return $this->db->select("cq.*,cq.Title as tle,u.Username,u.UserId as uid,u.ProfileImage,c.*")->from("tblcommunityquestions cq")->join("tbluser u","u.UserId=cq.UserId")->join("tblcommunity c","c.CommunityId=cq.CommunityId")->where_in("c.CommunityId",$data)->get()->result();
	}

	public function selectCommQuesAnsByCommunityQuestionId($data)
	{
		return $this->db->select("ca.*,u.Username,u.UserId as uid,u.ProfileImage,cq.*")->from("tblcommquesans ca")->join("tbluser u","u.UserId=ca.UserId")->join("tblcommunityquestions cq","cq.CommunityQuestionId=ca.CommunityQuestionId")->where_in("cq.CommunityQuestionId",$data)->get()->result();
	}
	public function selectCommunityQuestionsById($data)
	{
		return $this->db->select("cq.*,u.Username,u.UserId as uid,u.ProfileImage,c.*")->from("tblcommunityquestions cq")->join("tbluser u","u.UserId=cq.UserId")->join("tblcommunity c","c.CommunityId=cq.CommunityId")->where($data)->get()->result();
	}

	public function insertCommunityQuestions($data)
	{
		return $this->db->insert("tblcommunityquestions",$data);
	}

	public function insertCommQuesAns($data)
	{
		return $this->db->insert("tblcommquesans",$data);
	}

	public function selectPostByUserId($data)
	{
		return $this->db->select("fp.*,f.*,u.Username,u.Email,u.ProfileImage")->from("tblforumpost fp")->join("tblforum f","f.forumid=fp.forumid")->join("tbluser u","u.UserId=fp.UserId")->where_in("fp.forumpostid",$data)->get()->result();
	}
}
?>