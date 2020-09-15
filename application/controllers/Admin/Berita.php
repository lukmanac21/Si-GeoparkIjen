<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
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
        $data['berita']               = $this->main->get_data('mst_berita');
       
        $this->load->view('admin/berita/index',$data);
    }
    public function add_data(){
        $this->load->view('admin/berita/tambah');
    }
    public function save_data(){
        $isi_berita                     = $_POST['isi_berita'] ? $_POST['isi_berita'] : '';
        $data['judul_berita']       	= $this->input->post('judul_berita');
        $data['tgl_berita']       	    = $this->input->post('tgl_berita');
       
        $data['isi_berita']             = $isi_berita;
        $images="";
        $upload = $this->main->upload_file_berita();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['img_berita'] = $images ? $images : '';
		$this->main->insert_data('mst_berita',$data);
		redirect('Admin/Berita/index');
        
    }
    public function edit_data($id){
        $where 					        = ['id_berita' => $id];
        $data['berita']                 = $this->main->get_data_where('mst_berita',$where);

        $this->load->view('admin/berita/ubah',$data);

    }public function update_data(){
        $isi_berita                     = $_POST['isi_berita'] ? $_POST['isi_berita'] : '';
        $data['judul_berita']       	= $this->input->post('judul_berita');
        $data['tgl_berita']       	    = $this->input->post('tgl_berita');
       
        $data['isi_berita']             = $isi_berita;
        $images="";
        $upload = $this->main->upload_file_berita();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['img_berita'] = $images ? $images : '';

        $where['id_berita']           = $this->input->post('id_berita');

        $this->main->update_data('mst_berita',$data,$where);
		redirect('Admin/Berita/index');
    }
    public function delete_data(){
        $where['id_berita']         = $this->input->post('id_berita');

        $this->main->delete_data('mst_berita',$where);
		redirect('Admin/Berita/index');
    }

}
