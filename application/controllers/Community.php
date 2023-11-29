<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Community extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model("CommunityM","cm");
	}

	public function index()
	{
		if (!isset($_SESSION['uname'])) 
		{
			redirect("User");
		}
		//$this->load->view("");
	}

	public function loadAddCommunity()
	{
		$temp=array(
			"cities"=>$this->cm->selectAllCity(),
			"cats"=>$this->cm->selectAllCategory()
		);
		$this->load->view("addCommunity",$temp);
	}

	public function addCommunity()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/xampp/htdocs/DeveloperCommunity/resources/shared/images/".$img) or die("cannot upload image");
		$data=array(
			"Title"=>$this->input->post('txtTitle'),
			//"Status"=>$this->input->post('txtStatus'),
			"CreatedDt"=>$this->input->post('Dateofcreate'),
			"UserId"=>$this->input->post('txtUsrid'),
			"Description"=>$this->input->post('txtDesc'),
			"CategoryId"=>$this->input->post('txtCategory'),
			"Address"=>$this->input->post('txtAddress'),
			"CityId"=>$this->input->post('txtCity'),
			"CoverImage"=>$img
		);
		$cid=$this->cm->insertCommunity($data);

		$d2=array(
			"CommunityId"=>$cid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($d2);
		$this->cm->insertCommunityCurator($d2);
		//$this->cm->insertCommunityMember($d2);
		
		redirect("UserDemo");
	}

	public function loadAllCommunity()
	{
		$temp=array(
			"communities"=>$this->cm->selectAllCommunity()
		);
		$this->load->view("allCommunity",$temp);
	}

	public function loadAllCommunityMembersByCommunityId($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		$d2=array(
			"UserId"=>$_SESSION['uid']
		);
		$user=$this->cm->selectCommunityMemberByUserId($d2);

		$communities=$this->cm->selectCommunityMemberByCommunityId($data);
		/*echo "<pre>";
		print_r($communities);
		echo "</pre>";*/
		$com=$this->cm->selectCommunityMember($data,$d2);
		$member=$this->cm->selectCommunityMemberByCommunityId($data);
		$Community=$this->cm->selectCommunityByUserId($d2);
		
		// echo "<pre>";
		// print_r($member);
		// echo "</pre>";
		//print_r($member);

		foreach ($member as $m)
		{	
			if($m->UserId==$_SESSION['uid'] || $m->Username==$_SESSION['uname'])
			{
				$temp=array(
					"communities"=>$this->cm->selectCommunityMemberByCommunityId($data),
					"comminfo"=>$this->cm->selectCommunitybyId($data),
					"userErr"=>"You are Already in this Community",
					"Msg"=>"Hello"
				);
				
				$this->load->view("moreinfoaboutCommunity",$temp);
				break;
			}
			else
			{
				$temp=array(
					"communities"=>$this->cm->selectCommunityMemberByCommunityId($data),
					"comminfo"=>$this->cm->selectCommunitybyId($data),
					"userinfo"=>$this->cm->selectCommunityMemberByUserId($data)
				);
				
				$this->load->view("moreinfoaboutCommunity",$temp);
				break;
			}
		}	
	}

	public function loadAllRequest($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		//print_r($data);
		$temp=array(
			"curatorrequest"=>$this->cm->selectCommunityRequestByCommunityId($data)
		);
		/*echo "<pre>";
		print_r($temp);
		echo "</pre>";*/
		$this->load->view("Request",$temp);
	}

	public function addCommunityMember($uid,$cid)
	{
		$data=array(
			"CommunityId"=>$cid,
			"UserId"=>$uid
		);
		//print_r($d2);
		$this->cm->insertCommunityMember($data);
		$this->cm->deleteCommunityRequest($data);

		redirect("Community/loadAllRequest/$cid");
	}

	public function addCommunityRequest($cid)
	{
		$data=array(
			"CommunityId"=>$cid,
			"UserId"=>$_SESSION['uid']
		);
		//print_r($data);
		$this->cm->insertCommunityRequest($data);
		redirect("Community/loadAllCommunityMembersByCommunityId/$cid");
	}

	public function removeCommunityRequest($uid,$cid)
	{
		$data=array(
			"UserId"=>$uid,
			"CommunityId"=>$cid
		);
		$this->cm->deleteCommunityRequest($data);
		
		redirect("Community/loadAllRequest/$cid");
	}

	public function loadForumByCommunityId($cid)
	{
		$data=array(
			"CommunityId"=>$cid
		);
		
		$post=$this->cm->selectForumByCommunityId($data);
		$member=$this->cm->selectCommunityMemberByCommunityId($data);
		$Community=$this->cm->selectCommunitybyUserId($data);
		//$User=$Community->UserId;
		// echo "<pre>";
		// print_r($User);
		// echo $_SESSION['uid'];
		// echo "</pre>";
		
		foreach ($member as $m)
		{	
			if($m->UserId==$_SESSION['uid'] || $m->Username==$_SESSION['uname'])
			{
				$temp=array(
					"Post"=>$this->cm->selectForumByCommunityId($data),
					"CommunityId"=>$cid
				);
				// echo "<pre>";
				// print_r($temp);
				// echo "</pre>";
				$this->load->view("Forum",$temp);
				break;
			}
			else
			{
				$temp=array(
					"Err"=>"You are NOt Member of this Community"
				);
				// echo "<pre>";
				// print_r($temp);
				// echo "</pre>";
				$this->load->view("Forum",$temp);
			}
		}

		
	}

	public function loadForumPost($fid,$cid)
	{
		$data=array(
			"ForumId"=>$fid
		);

		$d2=array("CommunityId"=>$cid);
		$temp=array(
			"Messages"=>$this->cm->selectAllForumPostByForumId($data),
			"Likes"=>count($this->cm->selectPostLikeByForumPostId($data)),
			"Post"=>$this->cm->selectForumByCommunityId($data),
			"CommunityId"=>$cid
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";

		$this->load->view("Comments",$temp);
	}

	public function addMessage($fid,$cid)
	{
		$Msg=$this->input->post('txtMsg');
		if ($Msg=="") 
		{
			
		}
		else
		{
			$data=array(
				"UserId"=>$_SESSION['uid'],
				"ForumId"=>$fid,
				"Messages"=>$Msg
			);
			$this->cm->insertForumPost($data);
		}	
		//print_r($data);
		redirect("Community/loadForumPost/$fid/$cid");
	}

	public function loadLikes($fpid,$fid,$uid)
	{
		$data=array(
			"ForumPostId"=>$fpid,
			"UserId"=>$uid
		);

		$d2=array(
			"ForumId"=>$fid
		);

		$d3=array(
			"ForumPostId"=>$fpid
		);

		$d4=array(
			"UserId"=>$_SESSION['uid'],
			"ForumId"=>$fid
		);
		//$Msg=$m;
		//$a=$this->cm->selectForumPostByUserId($d4);
		$a=$this->cm->selectPostByUserId($d3);
		// $d5=array(
		// 	"UserId"=>$_SESSION['uid'],
		// 	"ForumPostId"=>$fpid
		// );
		$count=count($this->cm->checkLike($data));

		if ($count==0)
		{
			$likeStatus="No";
		}
		else
		{
			$likeStatus="Yes";	
		}

		$temp=array(
			"Likers"=>$this->cm->selectPostLikeByForumPostId($d3),
			"Likes"=>count($this->cm->selectPostLikeByForumPostId($d3)),
			"Messages"=>$this->cm->selectAllForumPostByForumId($d2),
			"likeStatus"=>$likeStatus,
			"ForumPostId"=>$fpid,
			"Msg"=>$a
		);
		// echo "<pre>";
		// print_r($a);
		// echo "</pre>";
		$this->load->view("Likes",$temp);
	}

	public function like($fpid,$fid,$uid)
	{
		$data=array(
			"ForumPostId"=>$fpid,
			"UserId"=>$uid
		);
		// print_r($data);
		$this->cm->LikePost($data);
		redirect("Community/loadLikes/$fpid/$fid/$uid");
	}

	public function unlike($fpid,$fid,$uid)
	{
		$data=array(
			"ForumPostId"=>$fpid,
			"UserId"=>$uid
		);
		//print_r($data);
		$this->cm->UnlikePost($data);
		redirect("Community/loadLikes/$fpid/$fid/$uid");
	}

	public function loadCommunityQuestionsByCommunityId($cid)
	{
		$data=array("CommunityId"=>$cid);
		$d2=array("UserId"=>$_SESSION['uid']);
		
		$Community=$this->cm->selectCommunitybyUserId($d2);
		// echo "<pre>";
		// print_r($Community);
		// echo "</pre>";
		if ($Community[0]->UserId==$_SESSION['uid']) 
		{
			$temp=array(
				"Questions"=>$this->cm->selectCommunityQuestionsByCommunityId($data),
				"CommunityId"=>$cid,
				"Msg"=>"Ok"
			);
			$this->load->view("Query",$temp);
		}
		else
		{
			$temp=array(
				"Questions"=>$this->cm->selectCommunityQuestionsByCommunityId($data),
				"CommunityId"=>$cid
			);
			$this->load->view("Query",$temp);
		}
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		//$this->load->view("Query",$temp);
	}

	public function loadAllAnswersByCommunityQuestion($cqid,$cid)
	{
		$data=array("CommunityQuestionId"=>$cqid);
		$temp=array(
			"Answers"=>$this->cm->selectCommQuesAnsByCommunityQuestionId($data),
			"Questions"=>$this->cm->selectCommunityQuestionsById($data),
			"CommunityId"=>$cid
		);
		// echo "<pre>";
		// print_r($temp);
		// echo "</pre>";
		$this->load->view("Answers",$temp);
	}
	
	public function loadAddCommunityQuestion($cid)
	{
		$data=array("CommunityId"=>$cid);
		$this->load->view("AddQuestion",$data);
	}

	public function addCommunityQuestion($cid)
	{
		$data=array(
			"CommunityId"=>$this->input->post('txtCID'),
			"UserId"=>$this->input->post('txtUserid'),
			"Title"=>$this->input->post('txtTitle'),
			"Question"=>$this->input->post('txtQuestion')
		);
		$this->cm->insertCommunityQuestions($data);
		redirect("Community/loadAllCommunityMembersByCommunityId/$cid");
		//print_r($data);
	}

	public function loadAddReply($cqid,$cid)
	{
		$data=array("CommunityQuestionId"=>$cqid,"CommunityId"=>$cid);
		$this->load->view("Reply",$data);
	}

	public function addCommQuesAns($cqid,$cid)
	{
		$ans=$this->input->post('txtAnswer');
		
		if($ans=="") 
		{
			$data=array(
				"Err"=>"Enter Your Answer",
				"CommunityQuestionId"=>$cqid,
				"CommunityId"=>$cid
			);
			$this->load->view("Reply",$data);
		}
		else
		{
			$data=array(
				"CommunityQuestionId"=>$cqid,
				"UserId"=>$this->input->post('txtUserid'),
				"Answer"=>$ans
			);
			$this->cm->insertCommQuesAns($data);
			redirect("Community/loadAllCommunityMembersByCommunityId/$cid");
		}
	}
}
?>