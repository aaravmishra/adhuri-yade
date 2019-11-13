<?php 

class AdminModel extends CI_Model{

            public function is_login($email, $password)
            {
                $query = $this->db->get_where('admin', array('email' => $email, 'password' => md5($password)));        
                //return $query->num_rows();
                return $query->row_array();
            }
    


            public function add_quots($data){
            $this->db->insert('quots',$data);
            }
    
        public function view_quots(){

            $this->db->select('*');
            $this->db->from('quots');
            $query= $this->db->get();
            return $query->result(); 
        }

        public function delete_quots($table,$id){

                $this->db->where('id',$id);
                $this->db->delete($table);
                return true;
            // $this->db->query("delete  from quots where id='".$id."'");
        } 
    public function fetch_id($id){

            $this->db->where('id',$id);
            $query=$this->db->get('quots');
            return $query->result();
           
    }

    public function update_quots($data,$id){

            $this->db->where('id',$id);
            $this->db->update('quots',$data);
    }
}


?>