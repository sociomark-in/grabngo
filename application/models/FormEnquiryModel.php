<?php 

class FormEnquiryModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data){
		$this->db->insert("",$data);
	}

	public function get(){
		
	}
}
