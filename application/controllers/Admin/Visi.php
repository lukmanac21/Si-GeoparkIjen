<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {
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
        $data['visi'] = $this->main->get_data('mst_visi');
		$this->load->view('Admin/visi/index',$data);
    }
    public function add_data(){
        $this->load->view('Admin/visi/tambah');
    }
    public function save_data(){
        $data['ket_visi'] 	    = $this->input->post('ket_visi');


		$this->main->insert_data('mst_visi',$data);
		redirect('Admin/visi/index');
        
    }
    public function edit_data($id){
        $where 					= ['id_visi' => $id];
        $data['visi']         = $this->main->get_data_where('mst_visi',$where);

        $this->load->view('Admin/visi/Ubah',$data);

    }public function update_data(){
        $data['ket_visi'] 	    = $this->input->post('ket_visi');

        $where['id_visi']         = $this->input->post('id_visi');

        $this->main->update_data('mst_visi',$data,$where);
		redirect('Admin/visi/index');
    }
    public function delete_data(){
        $where['id_visi']         = $this->input->post('id_visi');

        $this->main->delete_data('mst_visi',$where);
		redirect('Admin/visi/index');
    }

}
