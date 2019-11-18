<?php 

class UserModel extends CI_Model{

    public function shayari(){

        $this->db->select('*');
        $this->db->from('quots');
        $query= $this->db->get();
        return $query->result(); 
    }
    public function image(){
        $this->db->select('*');
        $this->db->from('photos');
        $query=$this->db->get();
        return $query->result();
    }
    public function poetry(){
        $this->db->select('*');
        $this->db->from('poetry');
        $query=$this->db->get();
        return $query->result();
    
    }


}