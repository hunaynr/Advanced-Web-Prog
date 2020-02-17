<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index($name='fulan')
    {
        $data['title']='Home';
        $data['name']=$name;
        $this->load->view('template/header',$data);
        // echo "Selamat Datang di Halaman Home";
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>