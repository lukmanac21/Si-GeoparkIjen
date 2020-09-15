<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
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
        $data['kontak'] = $this->main->get_data('mst_kontak');
		$this->load->view('admin/kontak/index',$data);
    }
    public function add_data(){
        $this->load->view('admin/kontak/tambah');
    }
    public function save_data(){
        $data['alamat_kontak'] 	    = $this->input->post('alamat_kontak');
        $data['telp_kontak'] 	    = $this->input->post('telp_kontak');
        $data['email_kontak'] 	    = $this->input->post('email_kontak');
        $data['instagram_kontak']   = $this->input->post('instagram_kontak');


		$this->main->insert_data('mst_kontak',$data);
		redirect('Admin/Kontak/index');
        
    }
    public function edit_data($id){
        $where 					= ['id_kontak' => $id];
        $data['kontak']         = $this->main->get_data_where('mst_kontak',$where);

        $this->load->view('admin/kontak/ubah',$data);

    }public function update_data(){
        $data['alamat_kontak'] 	    = $this->input->post('alamat_kontak');
        $data['telp_kontak'] 	    = $this->input->post('telp_kontak');
        $data['email_kontak'] 	    = $this->input->post('email_kontak');
        $data['instagram_kontak']   = $this->input->post('instagram_kontak');

        $where['id_kontak']         = $this->input->post('id_kontak');

        $this->main->update_data('mst_kontak',$data,$where);
		redirect('Admin/Kontak/index');
    }
    public function delete_data(){
        $where['id_kontak']         = $this->input->post('id_kontak');

        $this->main->delete_data('mst_kontak',$where);
        // echo'<prev>';
        // print_r($this->db->last_query());
		redirect('Admin/Kontak/index');
    }

}
