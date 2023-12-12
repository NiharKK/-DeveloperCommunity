<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ArticleM extends CI_Model
{
	public function selectAllArticle()
	{
		return $this->db->order_by("ArticleId","asc")->select("a.*,u.*")->from("tblarticle a")->join("tbluser u","u.UserId=a.UserId")->get()->result();
	}

	public function selectArticleImagesByArticleId($data)
	{
		return $this->db->where($data)->get("tblarticleimages")->result();
	}

}
?>