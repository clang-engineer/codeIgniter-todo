<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('todo_m');
        $this->load->helper('url');
        $this->load->helper('date');
    }

    public function index()
    {
        $this->lists();
    }

    public function lists()
    {
        $data['list'] = $this->todo_m->get_lists();
        $this->load->view('todo/list_v', $data);
    }

    public function view()
    {
        $id=$this->uri->segment(3);
        $data['views']=$this->todo_m->get_view($id);
        $this->load->view('todo/view_v', $data);
    }
}
