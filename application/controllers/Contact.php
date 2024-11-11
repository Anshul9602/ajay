<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('contact');
		$this->load->view('footer');
	}


	public function insert_data()
	{
		print_r($_POST);
		
		// $this->load->model('home');
		// $data['name'] =$this->input->post('name');
		
		// $data['mobile']=$this->input->post('mobile');
		// $data['email']=$this->input->post('email');
		// $data['district']=$this->input->post('district');
		// $data['assembly']=$this->input->post('assembly');
		// $data['facebook']=$this->input->post('facebook');
		// $data['twitter']=$this->input->post('twitter');
		// $data['instagram']=$this->input->post('instagram');
		
		// $this->home->insert_data($data); 
	  }
 
}
