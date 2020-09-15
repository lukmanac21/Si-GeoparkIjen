<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
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
        $data['kategori'] = $this->main->get_data('mst_kategori');
		$this->load->view('admin/kategori/index',$data);
    }
    public function add_data(){
        $this->load->view('admin/kategori/tambah');
    }
    public function save_data(){
        $data['nama_kategori'] 	    = $this->input->post('nama_kategori');


		$this->main->insert_data('mst_kategori',$data);
		redirect('admin/kategori/index');
        
    }
    public function edit_data($id){
        $where 					= ['id_kategori' => $id];
        $data['kategori']         = $this->main->get_data_where('mst_kategori',$where);

        $this->load->view('admin/kategori/ubah',$data);

    }public function update_data(){
        $data['nama_kategori'] 	    = $this->input->post('nama_kategori');

        $where['id_kategori']         = $this->input->post('id_kategori');

        $this->main->update_data('mst_kategori',$data,$where);
		redirect('Admin/Kategori/index');
    }
    public function delete_data(){
        $where['id_kategori']         = $this->input->post('id_kategori');

        $this->main->delete_data('mst_kategori',$where);
		redirect('Admin/Kategori/index');
    }

}
