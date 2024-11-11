<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactdetails extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');

		$this->load->model('home');
		$data["name"] = $_POST["name"];
		$data["email"] = $_POST["email"];
		$data["title"] = $_POST["title"];
		$data["country_code"] = $_POST["countryCode"];
		$data["number"] = $_POST["number"];


		$this->home->insert_data($data);


		$this->load->view('Header');
		$this->load->view('Contactdetails');
		$this->load->model("home");
	}
}
