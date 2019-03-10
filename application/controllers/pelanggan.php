<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page'] = "pelanggan/form";
        $this->load->view('main',$data);
    }

    public function submit()
    {
    	$this->load->model('pelanggan_model');
        $this->load->helpers('autoid_helper');
        $table = 'pelanggan';
        $fields = 'pelangganid';
        $inisial = 'pel';

    	$pelanggan = $this->input->post();
        $pelanggan['pelangganid'] = get_id($fields, $table, $inisial);

    	$this->pelanggan_model->add($pelanggan);

    }

    public function show_list_pelanggan()
    {
        $data['page'] = "pelanggan/list_pelanggan";
        $this->load->model('pelanggan_model');
        $data['pelanggan'] = $this->pelanggan_model->get_pelanggan();
        $this->load->view('main',$data);

    }

    public function hapus_pelanggan()
    {
        $data = $this->uri->segment(3);
        var_dump($data);
        
    }



}
