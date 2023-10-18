<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MenuCategoryModel extends CI_Model
{
	public $table;
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->table = ['trl_menu-types', 'trl_menu-item_categories'];
		$this->data = [];
	}

	public function show(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		return json_encode($this->db->get($this->table[1])->result_array());
	}

	// INSERT FROM DB
	public function create()
	{
		$this->db->insert($this->table[1], $this->data);
	}
	// UPDATE FROM DB
	public function edit(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->update($this->table[1], $this->data);
	}
	// UPDATE FLAG FROM DB
	public function remove(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->where($where);
		$this->db->delete($this->table[1]);
	}
	// DELETE FROM DB
	public function delete(array $where = null)
	{
		if ($where != null) {
			$this->db->where($where);
		}
		$this->db->where($where);
		$this->db->delete($this->table[1]);
	}
}
