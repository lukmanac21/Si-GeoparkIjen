<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller {
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
        $data['travel'] = $this->main->get_data('mst_travel');
		$this->load->view('Admin/Travel/index',$data);
    }
    public function add_data(){
        $this->load->view('Admin/Travel/tambah');
    }
    public function save_data(){
        $data['nama_travel'] 	    = $this->input->post('nama_travel');
        $data['alamat_travel'] 	    = $this->input->post('alamat_travel');
        $data['email_travel']       = $this->input->post('email_travel');
        $data['notelp_travel']      = $this->input->post('notelp_travel');

        $this->main->insert_data('mst_travel',$data);
        // echo '<prev>';
        // print_r($this->db->last_query());
		redirect('Admin/Travel/index');
        
    }
    public function edit_data($id){
        $where 					= ['id_travel' => $id];
        $data['travel']     = $this->main->get_data_where('mst_travel',$where);

        $this->load->view('Admin/Travel/Ubah',$data);

    }public function update_data(){
        $data['nama_travel'] 	    = $this->input->post('nama_travel');
        $data['alamat_travel'] 	    = $this->input->post('alamat_travel');
        $data['email_travel']       = $this->input->post('email_travel');
        $data['notelp_travel']      = $this->input->post('notelp_travel');

        $where['id_travel']         = $this->input->post('id_travel');

        $this->main->update_data('mst_travel',$data,$where);
		redirect('Admin/travel/index');
    }
    public function delete_data(){
        $where['id_travel']         = $this->input->post('id_travel');

        $this->main->delete_data('mst_travel',$where);
		redirect('Admin/travel/index');
    }

}
