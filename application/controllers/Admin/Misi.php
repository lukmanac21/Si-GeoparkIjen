<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Misi extends CI_Controller {
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
        $data['misi'] = $this->main->get_data('mst_misi');
		$this->load->view('Admin/misi/index',$data);
    }
    public function add_data(){
        $this->load->view('Admin/misi/tambah');
    }
    public function save_data(){
        $data['ket_misi'] 	    = $this->input->post('ket_misi');


		$this->main->insert_data('mst_misi',$data);
		redirect('Admin/misi/index');
        
    }
    public function edit_data($id){
        $where 					= ['id_misi' => $id];
        $data['misi']         = $this->main->get_data_where('mst_misi',$where);

        $this->load->view('Admin/misi/Ubah',$data);

    }public function update_data(){
        $data['ket_misi'] 	    = $this->input->post('ket_misi');

        $where['id_misi']         = $this->input->post('id_misi');

        $this->main->update_data('mst_misi',$data,$where);
		redirect('Admin/misi/index');
    }
    public function delete_data(){
        $where['id_misi']         = $this->input->post('id_misi');

        $this->main->delete_data('mst_misi',$where);
		redirect('Admin/misi/index');
    }

}
