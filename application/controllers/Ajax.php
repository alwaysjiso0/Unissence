<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {
    public function fetch()
    {
		$this->load->model('post_model'); 
        $output = '';
        $query = '';
        if($this->input->get('query')){ 
            $query = $this->input->get('query'); // get search query send from ajax search form
        }
        $data = $this->post_model->fetch_data($query);
            if(!$data == null){
                echo json_encode ($data->result());
            }else{
                echo  "";
            }
    }

    // Not implemented
    function get_autocomplete(){
        $this->load->model('post_model'); 
        if (isset($_GET['term'])) {
            $result = $this->post_model->search_blog($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->title;
                echo json_encode($arr_result);
            }
        }
    }
}
?>