<?php
class Blogku extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('M_blogku');
    }
    public function index()
    {
        $data['blogs'] = $this->M_blogku->getBlogs();
        $this->load->view('blogku', $data);
    }
    public function detail($url)
    {
        $data['blogs'] = $this->M_blogku->getSingleBlog($url);
        $this->load->view('detail', $data);
    }
}
