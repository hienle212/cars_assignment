<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {


	public function index(){
		$this->load->view('process_form');
	}
	public function form(){
		if($this->session->userdata('counter')){
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else{
			$this->session->set_userdata('counter',1);
		}

	 $name = $this->input->post('name');
	 $location = $this->input->post('location');
		$language = $this->input->post('language');
		$comments = $this->input->post('comment');
		$this->load->view('result', [
			"counter" => $counter,
			"name" => $name, 
			"location" => $location, 
			"language" => $language,
			"comments" => $comments ]);

	function result(){
		redirect('/');
	}

}
}
