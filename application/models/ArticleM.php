<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ArticleM extends CI_Model
{	
	public function selectAllArticle()
	{
		return $this->db->select("a.*,u.Username,u.ProfileImage")->from("tblarticle a")->join("tbluser u","u.UserId=a.UserId")->get()->result();
	}

	public function selectArticleById($data)
	{
		return $this->db->select("a.*,u.Username,u.ProfileImage")->from("tblarticle a")->join("tbluser u","u.UserId=a.UserId")->where($data)->get()->result();
	}

	public function selectArticleLikeByArticleId($data)
	{
		return $this->db->select("al.*,u.Username,u.ProfileImage,a.Title,a.Description,a.FeatureImage")->from("tblarticlelike al")->join("tbluser u","u.UserId=al.UserId")->join("tblarticle a","a.ArticleId=al.ArticleId")->where_in("a.ArticleId",$data)->get()->result();
	}

	public function checkLike($data)
	{
		return $this->db->where($data)->get("tblarticlelike")->result();
	}

	public function selectArticleImagesByArticleId($data)
	{
		return $this->db->select("ai.*,a.Title,a.Description,a.FeatureImage")->from("tblarticleimages ai")->join("tblarticle a","a.ArticleId=ai.ArticleId")->where_in("a.ArticleId",$data)->get()->result();
	}

	public function ArticleLike($data)
	{
		return $this->db->insert("tblarticlelike",$data);
	}

	public function ArticleUnlike($data)
	{
		return $this->db->delete("tblarticlelike",$data);
	}

	public function insertArticle($data)
	{
		return $this->db->insert("tblarticle",$data);
	}

	public function updateArticle($newdata,$where)
	{
		return $this->db->where($where)->update("tblarticle",$newdata);
	}

	public function insertArticleImages($data)
	{
		return $this->db->insert("tblarticleimages",$data);
	}

	public function updateArticleImages($newdata,$where)
	{
		return $this->db->where($where)->update("tblarticleimages",$newdata);
	}
}
?>