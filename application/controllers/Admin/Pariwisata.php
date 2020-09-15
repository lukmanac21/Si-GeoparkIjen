<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pariwisata extends CI_Controller {
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
        $data['pariwisata'] = $this->main->get_data_join('mst_pariwisata','mst_kategori','mst_pariwisata.id_kategori = mst_kategori.id_kategori');
		$this->load->view('Admin/Pariwisata/index',$data);
    }
    public function add_data(){
        $data['kategori'] = $this->main->get_data('mst_kategori');
        $this->load->view('Admin/Pariwisata/tambah',$data);
    }
    public function save_data(){
        $data['id_kategori'] 	        = $this->input->post('id_kategori');
        $data['nama_pariwisata'] 	    = $this->input->post('nama_pariwisata');
        $data['alamat_pariwisata'] 	    = $this->input->post('alamat_pariwisata');
        $data['email_pariwisata']       = $this->input->post('email_pariwisata');
        $data['notelp_pariwisata']      = $this->input->post('notelp_pariwisata');
        $data['lattitude']              = $this->input->post('lattitude');
        $data['longitude']              = $this->input->post('longitude');
        $images                         ="";
        $upload                         = $this->main->upload_file_wisata();
                                            if ($upload['result'] == "success") { // Jika proses upload sukses
                                                $images = $upload['file']['file_name'];
                                                
                                            } else { // Jika proses upload gagal
                                                $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                                            }
        
        $data['img_pariwisata']         = $images ? $images : '';


		$this->main->insert_data('mst_pariwisata',$data);
		redirect('Admin/Pariwisata/index');
        
    }
    public function edit_data($id){
        $where 					= ['id_pariwisata' => $id];
        $data['kategori']       = $this->main->get_data('mst_kategori');
        $data['pariwisata']     = $this->main->get_data_where('mst_pariwisata',$where);

        $this->load->view('Admin/Pariwisata/Ubah',$data);

    }public function update_data(){
        $data['id_kategori'] 	        = $this->input->post('id_kategori');
        $data['nama_pariwisata'] 	    = $this->input->post('nama_pariwisata');
        $data['alamat_pariwisata'] 	    = $this->input->post('nama_pariwisata');
        $data['email_pariwisata']       = $this->input->post('nama_pariwisata');
        $data['notelp_pariwisata']      = $this->input->post('notelp_pariwisata');
        $data['lattitude']              = $this->input->post('lattitude');
        $data['longitude']              = $this->input->post('longitude');
        $images="";
        $upload                         = $this->main->upload_file_wisata();
                                            if ($upload['result'] == "success") { // Jika proses upload sukses
                                                $images = $upload['file']['file_name'];
                                            } else { // Jika proses upload gagal
                                                $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                                            }
        
        $data['img_pariwisata']         = $images ? $images : '';

        $where['id_pariwisata']         = $this->input->post('id_pariwisata');

        $this->main->update_data('mst_pariwisata',$data,$where);
		redirect('Admin/Pariwisata/index');
    }
    public function delete_data(){
        $where['id_pariwisata']         = $this->input->post('id_pariwisata');

        $this->main->delete_data('mst_pariwisata',$where);
		redirect('Admin/Pariwisata/index');
    }

}
