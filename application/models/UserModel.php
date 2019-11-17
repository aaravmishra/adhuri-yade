<?php 

class UserModel extends CI_Model{

    public function shayari(){

        $this->db->select('*');
        $this->db->from('quots');
        $query= $this->db->get();
        return $query->result(); 
    }


}