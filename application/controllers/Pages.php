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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MenuMasterModel', 'MenuMaster');
	}
	public function index()
	{
		$this->load->view('pages/index');
	}

	public function about()
	{
		$this->load->view('pages/about');
	}

	public function contact()
	{
		$this->load->helper('captcha');

		$vals = array(
			'img_path'      => './captcha/',
			'img_url'       => base_url('captcha/'),
			'font_path'     => './assets/fonts/JMH Typewriter.ttf',
			'img_width'     => 150,
			'img_height'    => 40,
			'expiration'    => 7200,
			'word_length'   => 5,
			'font_size'     => 18,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			'colors'        => array(
				'background' => array(255, 255, 255),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40)
			)
		);

		$data['captcha'] = create_captcha($vals);
		$this->session->set_flashdata('captcha_text', $data['captcha']['word']);
		$this->load->view('pages/contact', $data);
	}

	public function menu($cat)
	{
		switch ($cat) {
			case 'pdf':
				redirect(base_url('assets/uploads/') . 'menu_2023.pdf');
				break;
			case 'drinks':
				# code...
				redirect('food-menu');
				break;

			default:
				# code...
				$data['page']['menu'] = json_decode($this->MenuMaster->get_master_menu(), true);
				$this->load->view('pages/drinks-menu', $data);
				// $this->load->view('pages/food-menu');
				break;
		}
	}

	public function gallery()
	{
		$data['gallery']['gallery'] = directory_map(FCPATH . "assets/media/images/gallery");
		$data['gallery']['thumbnails'] = directory_map(FCPATH . "assets/media/images/gallery/thumbnails");
		$this->load->view('pages/gallery', $data);
	}
}
