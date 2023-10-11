<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pages/index');
	}

	public function contact()
	{
		$this->load->view('pages/contact');
	}

	public function menu($cat)
	{
		switch ($cat) {
			case 'drinks':
				# code...
				$this->load->view('pages/menu');
				break;

			default:
				# code...
				$this->load->view('pages/menu');
				break;
		}
	}

	public function gallery()
	{
		$data['gallery']['gallery'] = directory_map(FCPATH. "assets/media/images/gallery");
		$data['gallery']['thumbnails'] = directory_map(FCPATH. "assets/media/images/gallery/thumbnails");
		$this->load->view('pages/gallery', $data);
	}
}
