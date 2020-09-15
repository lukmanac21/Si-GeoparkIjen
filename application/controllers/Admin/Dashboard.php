<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
        $name_admin 			= $this->session->userdata('name_admin');
        $data['wisata']         = $this->main->get_data_dashboard('id_pariwisata','wisata','mst_pariwisata');
        $data['pengurus']         = $this->main->get_data_dashboard('id_pengurus','pengurus','mst_pengurus');
        $data['travel']         = $this->main->get_data_dashboard('id_travel','travel','mst_travel');
        $data['berita']         = $this->main->get_data_dashboard('id_berita','berita','mst_berita');
		$this->load->view('Admin/dashboard',$data);
	}

}
