<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_m extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function get_lists()
	{
    $sql="SELECT * FROM items";
    $query=$this->db->query($sql);
    $result=$query->result();
    return $result;
	}
}
