<?php 

class FormEnquiryModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data){
		if($this->db->insert("contact",$data)){
			return true;
		} else{
			return false;
		}
	}

	public function get(){
		
	}
}
