<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class AdminController extends CI_Controller
{
    public function __construct()
    {
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
    //login  functions start
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function dashboard()
    {
        $this->load->view('admin/index');
    }
    
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        
        

        if ($this->form_validation->run() === false) {
            if (isset($this->session->userdata['logged_in'])) {
                redirect('dashboard');
            } else {
                $this->load->view('admin/login');
            }
        } else {
            if ($user = $this->AdminModel->is_login($email, $password)) {
                $session_data = array(
                    'email' => isset($user[0]),
                    
                    );
                
                $this->session->set_userdata('email', $email);
            
                $this->session->set_userdata('logged_in', $session_data);
                $this->session->set_userdata('is_login', true);
                $this->session->set_flashdata('msg_success', 'Login Successful!');
                $this->load->view('admin/index');
            } else {
                $this->session->set_flashdata('msg_error', 'Login credentials does not match!');

                $this->load->view('admin/login');
            }
        }
    }

    public function logout()
    {
        $session_data = array(

                    'email'=>'',
                    'logged_in'=>false,
                );
                
        $this->session->unset_userdata($session_data);
        $this->session->sess_destroy();
        redirect('admin');
    }
    //end
    //---------------------------------------------------------------------------------------------------------------
    // quots  functions start
    public function add_quots()
    {
        $this->form_validation->set_rules('tittle', 'tittle', 'required');
        $this->form_validation->set_rules('quots', 'quots', 'required');
        if ($this->form_validation->run()==true) {
            $tittle=$this->input->post('tittle');
            $quots=$this->input->post('quots');

            $data=array(
                'tittle'=>$tittle,
                    'quots'=>$quots,
                  );
            //update function condtion
                
            if ($this->input->post("update")==true) {
                $this->AdminModel->update_quots($data, $this->input->post("hidden_id"));
                redirect(base_url()."admin/Admincontroller/view_quots_quots");
            } else {
                //update function condtion  ends
                $this->AdminModel->add_quots($data);
                $this->load->view('admin/add-quots');
            }
        } else {
            $this->load->view('admin/add-quots');
        }
    }

    public function view_quots()
    {
        $result['data']=$this->AdminModel->view_quots();
        $this->load->view('admin/view-quots', $result);
    }
    public function delete_quots()
    {
        $id= $this->uri->segment(4);
        $this->AdminModel->delete_quots('quots', $id);
        redirect("view_quots");
    }

    public function fetch_update_id()
    {
        $id= $this->uri->segment(4);
        $result['data']=$this->AdminModel->fetch_id($id);
        $this->load->view('admin/update-quots', $result);
    }

    public function update_quots()
    {
        $this->form_validation->set_rules('tittle', 'tittle', 'required');
        $this->form_validation->set_rules('quots', 'quots', 'required');
        if ($this->form_validation->run()==true) {
            $tittle=$this->input->post('tittle');
            $quots=$this->input->post('quots');
        
            $data=array(
                'tittle'=>$tittle,
                'quots'=>$quots,
                );
           
            $this->AdminModel->update_quots($data, $this->input->post("hidden_id"));
            redirect("view_quots");
        //    }else{
            // 	   //update function condtion  ends
            // 	   $this->AdminModel->add_quots($data);
            // 	   $this->load->view('admin/add-quots');
            //    }
        } else {
            $this->load->view('admin/update-quots');
        }
    }
    //end
    //--------------------------------------------------------------------------------------------------------
    //poetry functions start
    public function add_poetry()
    {
        $this->form_validation->set_rules('tittle', 'tittle', 'required');
        $this->form_validation->set_rules('poetry', 'poetry', 'required');
        if ($this->form_validation->run()==true) {
            $tittle=$this->input->post('tittle');
            $poetry=$this->input->post('poetry');

            $data=array(
                'tittle'=>$tittle,
                'poetry'=>$poetry,
                  );
            //update function condtion
                
            if ($this->input->post("update")==true) {
                $this->AdminModel->update_quots($data, $this->input->post("hidden_id"));
                redirect(base_url()."admin/Admincontroller/view_quots_quots");
            } else {
                //update function	 condtion  ends
                $this->AdminModel->add_poetry($data);
                $this->load->view('admin/add-poetry');
            }
        } else {
            $this->load->view('admin/add-poetry');
        }
    }
    public function view_poetry()
    {
        $result['data']=$this->AdminModel->view_poetry();
        $this->load->view('admin/view-poetry', $result);
    }

    public function delete_poetry()
    {
        $id= $this->uri->segment(4);
        $this->AdminModel->delete_poetry('poetry', $id);
        redirect("view_poetry");
    }


    public function fetch_poetry_id()
    {
        $id= $this->uri->segment(4);
        $result['data']=$this->AdminModel->fetch_poetry_id($id);
        $this->load->view('admin/update-poetry', $result);
    }

    
    public function update_poetry()
    {
        $this->form_validation->set_rules('tittle', 'tittle', 'required');
        $this->form_validation->set_rules('poetry', 'poetry', 'required');
        if ($this->form_validation->run()==true) {
            $tittle=$this->input->post('tittle');
            $poetry=$this->input->post('poetry');
        
            $data=array(
                'tittle'=>$tittle,
                'poetry'=>$poetry,
                );
           
            $this->AdminModel->update_poetry($data, $this->input->post("hidden_id"));
            redirect("view_poetry");
        //    }else{
            // 	   //update function condtion  ends
            // 	   $this->AdminModel->add_quots($data);
            // 	   $this->load->view('admin/add-quots');
            //    }
        } else {
            $this->load->view('admin/update-poetry');
        }
    }
    
    //end
    //---------------------------------------------------------------------------------------------------------
    //photos functions start
    public function do_upload()
    {
     
        $this->load->view('admin/add-image');	
        if (isset($_POST['submit'])) {
            $url = "../assets/uploads";
       
            $image=basename($_FILES['pic']['name']);
            $image=str_replace(' ', '|', $image);
            $type = explode(".", $image);
        
            $type = $type[count($type)-1];
       
            if (in_array($type, array('jpg','jpeg','png','gif'))) {
                $tmppath="assets/uploads/".uniqid(rand()).".".$type;
                if (is_uploaded_file($_FILES["pic"]["tmp_name"])) {
                    move_uploaded_file($_FILES['pic']['tmp_name'], $tmppath);
                    return $tmppath;
                }
            } else {
            }
        }

	}
	
	function image_upload()
	{
        $data ['image_url']= $this->do_upload();
        $data ['alt']= $this->input->post('alt');
        $this->AdminModel->add_image($data);	
    }

    public function view_image()
    {
            $result['data']=$this->AdminModel->view_image();
        $this->load->view('admin/view-image', $result);
    }
    public function delete_image()
    {
        $id= $this->uri->segment(4);
        $this->AdminModel->delete_image('photos', $id);
        redirect("admin/view-image");
    }
    
}