<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $this->load->view('users/index');
    }
    public function getList(){
        $users = $this->db->get("user")->result();
        echo json_encode($users);
    }
    public function add(){
        $this->load->view('users/add');
    }
    public function save(){
        $request_body = json_decode(file_get_contents('php://input'), true);
        if(isset($request_body['id']) && $request_body['id'] > 0){
            $this->db->where("id", $request_body['id']);
            unset($request_body['id']);
            $this->db->update('user', $request_body);
        }else{
            $this->db->insert('user', $request_body);
        }
        
        echo json_encode(array('responce' => "success"));
    }
    function remove($userId = 0){
        $this->db->where("id",$userId );
        $this->db->limit(1);
        $this->db->delete("user");
    }
    
}
