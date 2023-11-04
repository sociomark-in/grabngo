<?php

class MenuMasterModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_master_menu()
	{
		$master = $this->db->get('trl_menu-categories')->result_array();
		for ($i=0; $i <count($master) ; $i++) {
			$this->db->where('cat_id', $master[$i]['id']);
			$master[$i]['menu_items'] = $this->db->get('trl_menu-items')->result_array();
		}
		return json_encode($master);
	}
}
