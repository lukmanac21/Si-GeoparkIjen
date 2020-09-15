<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
        if ($this->session->userdata['logged_in'] == FALSE)
        {
            redirect(site_url("Admin/Login"));
        }
        $data['layanan'] = $this->main->get_data('mst_layanan');
		$this->load->view('Admin/layanan/index',$data);
    }
    public function add_data(){
        $this->load->view('Admin/layanan/tambah');
    }
    public function save_data(){
        $data['nama_layanan'] 	    = $this->input->post('nama_layanan');
        $data['keterangan'] 	    = $this->input->post('keterangan');
        $data['icon'] 	            = $this->input->post('icon');


		$this->main->insert_data('mst_layanan',$data);
		redirect('Admin/layanan/index');
        
    }
    public function edit_data($id){
        $where 					    = ['id_layanan' => $id];
        $data['layanan']            = $this->main->get_data_where('mst_layanan',$where);

        $this->load->view('Admin/layanan/Ubah',$data);

    }public function update_data(){
        $data['nama_layanan'] 	    = $this->input->post('nama_layanan');
        $data['keterangan'] 	    = $this->input->post('keterangan');
        $data['icon'] 	            = $this->input->post('icon');


        $where['id_layanan']        = $this->input->post('id_layanan');

        $this->main->update_data('mst_layanan',$data,$where);
		redirect('Admin/layanan/index');
    }
    public function delete_data(){
        $where['id_layanan']         = $this->input->post('id_layanan');

        $this->main->delete_data('mst_layanan',$where);
		redirect('Admin/layanan/index');
    }

}
