<?php 

class AdminModel extends CI_Model{
    //login model functions 
            public function is_login($email, $password)
            {
                $query = $this->db->get_where('admin', array('email' => $email,'password' => md5($password)));        
               
                return $query->row_array();
               
            }
             
//-----------------quots  functions start------------------------------------------------ 

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
//-----------------Poetry  functions start-------------------------------------------------------- 
        public function add_poetry($data){
            $this->db->insert('poetry',$data);

        }

        public function view_poetry(){

            $this->db->select('*');
            $this->db->from('poetry');
            $query= $this->db->get();
            return $query->result(); 
        }

        public function delete_poetry($table,$id){

            $this->db->where('id',$id);
            $this->db->delete($table);
            return true;
      
        }
        
        public function fetch_poetry_id($id){

            $this->db->where('id',$id);
            $query=$this->db->get('poetry');
            return $query->result();
        
    }
    public function update_poetry($data,$id){

        $this->db->where('id',$id);
        $this->db->update('poetry',$data);
}
//-------------------------images------------------------------------------------------------
    public function add_image($data){

        $this->db->insert('photos', $data);
    }
    public function view_image(){

        
        $this->db->select('*');
        $this->db->from('photos');
        $query= $this->db->get();
        return $query->result(); 

    }
    
    public function delete_image($table,$id){

        $this->db->where('id',$id);
        $this->db->delete($table);
        return true;
  
    }
 }

?>