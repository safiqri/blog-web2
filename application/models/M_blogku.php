<?php
class M_blogku extends CI_Model
{
    public function getBlogs()
    {
        $query = $this->db->get("blog");
        return $query->result_array();
    }
    public function getSingleBlog($url)
    {
        $this->db->where('url', $url);
        $query = $this->db->get('blog');
        return $query->row_array();
    }
}
