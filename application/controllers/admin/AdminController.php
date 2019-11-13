<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {


	public function __construct(){

		parent:: __construct();
	
		$this->load->model('AdminModel');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		public function index()
		{
			$this->load->view('admin/login');
		}
		public function dashboard()
		{
			$this->load->view('admin/index');
		}
	
	public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');

        

        if ($this->form_validation->run() === FALSE) {
		
			
			$this->load->view('admin/login');

		}
		 else {
            if ($user = $this->AdminModel->is_login($email, $password)) {
                $this->session->set_userdata('email', $email);
               
                $this->session->set_userdata('is_login', true);

                $this->session->set_flashdata('msg_success', 'Login Successful!');
                  $this->load->view('admin/index');
            } else {



                $this->session->set_flashdata('msg_error', 'Login credentials does not match!');

                $this->load->view('admin/login');
               
            }
        }
    }

	

    public function add_quots(){
		
   		    $this->form_validation->set_rules('tittle', 'tittle', 'required');
            $this->form_validation->set_rules('quots', 'quots', 'required');
            if($this->form_validation->run()==true) {
                $tittle=$this->input->post('tittle');
                $quots=$this->input->post('quots');

                $data=array(
				'tittle'=>$tittle,
                    'quots'=>$quots,
				  );
				  //update function condtion 
				
                      if($this->input->post("update")==true){
							echo "hii"; die;
							$this->AdminModel->update_quots($data,$this->input->post("hidden_id"));
								redirect(base_url()."admin/Admincontroller/view_quots_quots");
					  }else{
                          //update function condtion  ends
                          $this->AdminModel->add_quots($data);
                          $this->load->view('admin/add-quots');
                      }
            }else{
				$this->load->view('admin/add-quots');
            }
        
    }

    public function view_quots(){
	
			$result['data']=$this->AdminModel->view_quots();
			$this->load->view('admin/view-quots',$result);

	}
	public function delete_quots(){
		    $id= $this->uri->segment(4);
			$this->AdminModel->delete_quots('quots',$id);
			redirect("view_quots");

	}

	public function fetch_update_id(){

		$id= $this->uri->segment(4);
		$result['data']=$this->AdminModel->fetch_id($id);
		$this->load->view('admin/update-quots',$result);

	}

	public function update_quots(){
		
		$this->form_validation->set_rules('tittle', 'tittle', 'required');
	    $this->form_validation->set_rules('quots', 'quots', 'required');
	       if($this->form_validation->run()==true) {
				$tittle=$this->input->post('tittle');
				$quots=$this->input->post('quots');
		
				$data=array(		
				'tittle'=>$tittle,
					'quots'=>$quots,
				);
		   
		  $this->AdminModel->update_quots($data,$this->input->post("hidden_id"));
			redirect("view_quots");
			//    }else{
			// 	   //update function condtion  ends
			// 	   $this->AdminModel->add_quots($data);
			// 	   $this->load->view('admin/add-quots');
			//    }
	 }else{
		 $this->load->view('admin/update-quots');
	 }
 
}


	public function add_images() { 

		$this->load->view('admin/add-image'); 
		// $config['upload_path']   = './uploads/'; 
		// $config['allowed_types'] = 'gif|jpg|png'; 
		// $config['max_size']      = 100; 
		// $config['max_width']     = 1024; 
		// $config['max_height']    = 768;  
		// $this->load->library('upload', $config);
		   
		// if ( ! $this->upload->do_upload('userfile')) {
		//    $error = array('error' => $this->upload->display_errors()); 
		//    $this->load->view('upload_form', $error); 
		// }
		   
		// else { 
		//    $data = array('upload_data' => $this->upload->data()); 
		//    $this->load->view('upload_success', $data); 
		// } 
			


	
} 

}