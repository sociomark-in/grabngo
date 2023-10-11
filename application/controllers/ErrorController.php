<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ErrorController extends CI_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
    }

    public function error_404()
    {
        $this->data['heading'] = "404 Page Not Found!";
        $this->data['message'] = "The page you requested was not found.";

        $this->load->view('errors/html/error_404', $this->data);
    }
}
