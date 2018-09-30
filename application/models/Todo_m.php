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

    public function get_view($id)
    {
        $sql="SELECT * FROM items WHERE id='".$id."'";
        $query=$this->db->query($sql);
        $result=$query->result();
        return $result;
    }

    public function insert_todo($content, $created_on, $due_date)
    {
        $sql="INSERT INTO items (content,created_on,due_date) VALUES ('".$content."', '".$created_on."', '".$due_date."')";
        $query=$this->db->query($sql);

    }

    function delete_todo($id)
    {
      $sql="DELETE FROM items WHERE id='".$id."'";
      $query=$this->db->query($sql);
    }
}
