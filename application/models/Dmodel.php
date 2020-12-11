<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DModel extends CI_Model {

	public function getAll()
	{
		return $this->db->get('d_tabel')->result();
	}

	public function store($object)
	{
		return $this->db->insert('d_tabel',$object);
	}

}

