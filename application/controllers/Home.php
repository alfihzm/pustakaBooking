<?php

class Home extends CI_Controller {
    public function index() {
        $data['judul'] = 'Halaman Home';

        $this->load->view('templates/header.php', $data);
        $this->load->view('home/home.php');
        $this->load->view('templates/footer.php');
    }
}