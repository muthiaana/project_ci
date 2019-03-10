<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page'] = "produk/form";
        $this->load->view('main',$data);
    }
}
