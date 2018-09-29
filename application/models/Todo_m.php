<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todo_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_lists()
    {
        $sql="SELECT * FROM items";
        $query=$this->db->query($sql);
        $result=$query->result();
        return $result;
    }

    function get_view($id)
    {
      $sql="SELECT * FROM items WHERE id='".$id."'";
      $query=$this->db->query($sql);
      $result=$query->result();
      return $result;
    }
}
