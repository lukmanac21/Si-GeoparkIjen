<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Main');
        $this->load->library('session');
    }
	public function index()
	{
        if ($this->session->userdata['logged_in'] == FALSE)
        {
            redirect(site_url("Admin/Login"));
        }
        $data['bagian'] = $this->main->get_data('mst_bagian');
		$this->load->view('admin/bagian/index',$data);
    }
    public function add_data(){
        $this->load->view('admin/bagian/tambah');
    }
    public function save_data(){
        $data['nama_bagian'] 	    = $this->input->post('nama_bagian');


		$this->main->insert_data('mst_bagian',$data);
		redirect('Admin/Bagian/index');
        
    }
    public function edit_data($id){
        $where 					= ['id_bagian' => $id];
        $data['bagian']         = $this->main->get_data_where('mst_bagian',$where);

        $this->load->view('admin/bagian/ubah',$data);

    }public function update_data(){
        $data['nama_bagian'] 	    = $this->input->post('nama_bagian');

        $where['id_bagian']         = $this->input->post('id_bagian');

        $this->main->update_data('mst_bagian',$data,$where);
		redirect('Admin/Bagian/index');
    }
    public function delete_data(){
        $where['id_bagian']         = $this->input->post('id_bagian');

        $this->main->delete_data('mst_bagian',$where);
		redirect('Admin/Bagian/index');
    }

}
