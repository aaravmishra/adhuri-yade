<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

	public function __construct()
    {
        parent:: __construct();
    
        $this->load->model('UserModel');
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
		$this->load->view('users/index');
	}
	public function shayari()
	{
        $result['data']=$this->UserModel->shayari();
        $this->load->view('users/shayari', $result);
	}
	public function image(){

		$result['data']=$this->UserModel->image();
		$this->load->view('users/image',$result);
	}


	public function poetry(){

		$result['data']=$this->UserModel->poetry();
		$this->load->view('users/poetry',$result);
	}

}
