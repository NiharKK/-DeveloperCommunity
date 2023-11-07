<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PostM extends CI_Model
{
	public function selectAllPost()
	{
		return $this->db->select("f.*,c.*,u.Username,u.UserId as uid,u.ProfileImage")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->join("tbluser u","u.UserId=f.UserId")->get()->result();
	}

	public function selectForumById($data)
	{
		return $this->db->select("f.*,f.Title as tlt,f.Description as desc,c.*,u.Username,u.UserId as uid,u.Email,u.ProfileImage")->from("tblforum f")->join("tblcommunity c","c.CommunityId=f.CommunityId")->join("tbluser u","u.UserId=f.UserId")->where($data)->get()->result();	
	}

	public function selectForumPostByForumId($data)
	{
		return $this->db->select("fp.*,u.Username,u.Email,u.ProfileImage")->from("tblforumpost fp")->join("tblforum f","f.forumid=fp.forumid")->join("tbluser u","u.UserId=fp.UserId")->where_in("f.forumid",$data)->get()->result();
	}

	public function selectPostLikeByForumPostId($data)
	{
		return $this->db->select("pl.*,u.Username,u.UserId as uid,u.ProfileImage,fp.*")->from("tblpostlike pl")->join("tbluser u","u.UserId=pl.UserId")->join("tblforumpost fp","fp.forumpostid=pl.forumpostid")->where_in("fp.forumpostid",$data)->get()->result();
	}

	public function selectForumPostByUserId($data)
	{
		return $this->db->select("fp.*,u.Username,u.Email,u.ProfileImage")->from("tblforumpost fp")->join("tblforum f","f.forumid=fp.forumid")->join("tbluser u","u.UserId=fp.UserId")->where_in("fp.forumpostid",$data)->get()->result();
	}
}
?>