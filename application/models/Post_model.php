<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Post_model extends CI_Model{

    public function new_post($data) {
        $this->db->insert('post',$data);
    }

    public function fetch_data($query)
    {
        if($query == '')
        {
            return null;
        }else{
            $this->db->select("*");
            $this->db->from('post');
            $this->db->like('title', $query);
            $this->db->or_like('username', $query);
            $this->db->order_by('title', 'DESC');
            return $this->db->get();
        }
    }

    function search_blog($title){
        $this->db->like('title', $title , 'both');
        $this->db->order_by('title', 'DESC');
        $this->db->limit(10);
        return $this->db->get('post')->result();
    }


}
?>
