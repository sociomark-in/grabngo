<?php

class DataController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('FormEnquiryModel', 'FormEnquiry');
	}

	public function get_data(){
		$data = [
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message'),
		];
		if($this->input->post('captcha_text') == $this->session->captcha_text){
			if($this->FormEnquiry->insert($data)){
				$this->session->set_flashdata('contact_form_submit_status', 'success');
				redirect($this->agent->referrer());
			} else{
				$this->session->set_flashdata('contact_form_submit_status', 'fail');
			}
		} else{
			echo "<pre>";
			print_r(json_encode(array(
				'error' => "Captcha Mismatch Error"
			)));
			echo "</pre>";
		}
	}
}
