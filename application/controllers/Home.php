<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PT Sinergi Aset Jagat Integrasi';

        $this->load->view('template-frontend/header', $data);
        $this->load->view('frontend/home', $data);
        $this->load->view('template-frontend/footer', $data);
    }
}