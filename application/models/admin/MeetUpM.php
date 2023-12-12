<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MeetUpM extends CI_Model
{
	public function selectAllMeetUp()
	{
		return $this->db->order_by("MeetUpId","asc")->select("m.*,u.UserName,ct.Title,cty.CityName")->from("tblmeetup m")->join("tbluser u","u.UserId=m.UserId")->join("tblcommunity ct","ct.CommunityId=m.CommunityId")->join("tblcity cty","cty.CityId=m.CityId")->get()->result();
	}

}
?>