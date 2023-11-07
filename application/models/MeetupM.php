<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MeetupM extends CI_Model
{
	public function selectAllMeetUp()
	{
		return $this->db->select("m.*,u.Username,c.CityName")->from("tblmeetup m")->join("tbluser u","u.UserId=m.UserId")->join("tblcity c","c.CityId=m.CityId")->join("tblcommunity cm","cm.CommunityId=m.CommunityId")->get()->result();
	}

	public function selectMeetUpById($data)
	{
		return $this->db->select("m.*,u.*,c.CityName,cm.Title,cm.Description as des,cm.Address as add")->from("tblmeetup m")->join("tbluser u","u.UserId=m.UserId")->join("tblcity c","c.CityId=m.CityId")->join("tblcommunity cm","cm.CommunityId=m.CommunityId")->where($data)->get()->result()[0];
	}

	public function selectMeetUpMembersByMeetUpId($data)
	{
		return $this->db->select("m.*,u.Username,u.UserId as uid,u.ProfileImage,mp.*")->from("tblmeetupmembers m")->join("tbluser u","u.UserId=m.UserId")->join("tblmeetup mp","mp.MeetUpId=m.MeetUpId")->where_in("mp.MeetUpId",$data)->get()->result();	
	}

	public function selectRequestsByMeetUpId($data)
	{
		return $this->db->select("mr.*,u.Username,u.UserId as uid,u.Email,u.MobileNo,mp.*")->from("tblmeetuprequest mr")->join("tbluser u","u.UserId=mr.UserId")->join("tblmeetup mp","mp.MeetUpId=mr.MeetUpId")->where_in("mp.MeetUpId",$data)->get()->result();
	}

	public function selectAllCity()
	{
		return $this->db->get("tblcity")->result();
	}

	public function selectMeetUpMembersByUserId($data)
	{
		return $this->db->where($data)->get("tblmeetupmembers")->result();
	}

	public function selectMeetUpByCommunityId($data)
	{
		return $this->db->select("m.MeetUpId,c.UserId")->from("tblmeetup m")->join("tblcommunity c","c.CommunityId=m.CommunityId")->where($data)->get()->result();
	}
	
	public function insertMeetUpMember($data)
	{
		return $this->db->insert("tblmeetupmembers",$data);
	}

	public function deleteMeetUpRequest($data)
	{
		return $this->db->where($data)->delete("tblmeetuprequest");
	}

	public function insertMeetUpRequest($data)
	{
		return $this->db->insert("tblmeetuprequest",$data);
	}

	public function updateMeetUp($newdata,$where)
	{
		return $this->db->where($where)->update("tblmeetup",$newdata);
	}
}
?>