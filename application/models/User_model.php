<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class User_model extends CI_Model{

    public function __construct() {
        $this->load->database();
    }

    // Log in
    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    // Register validate username
    public function reg_validate_username($reg_username){
        $this->db->where('username', $reg_username);
        $result = $this->db->get('users');

        if($result->num_rows() == 0){
            return true;
        } else {
            return false;
        }
    }

    // Register validate email
    public function reg_validate_email($reg_email){
        $this->db->where('email', $reg_email);
        $result = $this->db->get('users');

        if($result->num_rows() == 0){
            return true;
        } else {
            return false;
        }
    }

    public function register_insert($data) {
        $this->db->insert('users',$data);
    }

    public function get_user($username) {
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row_array();
    }

    public function get_username($email) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);

        $query = $this->db->get();
        $query = $query->row();
        $username = $query->username;
        return $username;
    }

    public function get_email($username) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);

        $query = $this->db->get();
        $query = $query->row();
        $email = $query->email;
        return $email;
    }

    public function change_pwd($username, $new_pwd) {    
        $data = [
            'password' => $new_pwd
        ];
        $this->db->where('username', $username);
        $this->db->update('users',$data);
    }

    public function change_phone($username, $new_phone) {
        $data = [
            'phone' => $new_phone
        ];
        $this->db->where('username', $username);
        $this->db->update('users',$data);
    }

    public function verify_user($username) {
        $data = [
            'verified' => 'Yes'
        ];
        $this->db->where('username', $username);
        $this->db->update('users', $data);
    }

    public function delete_user($username) {
        $this -> db -> where('username', $username);
        $this -> db -> delete('users');
    }


}
?>
