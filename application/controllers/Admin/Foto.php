<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {
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
        $data['foto']               = $this->main->get_data('mst_foto');
       
        $this->load->view('admin/foto/index',$data);
    }
    public function add_data(){
        $this->load->view('admin/foto/tambah');
    }
    public function save_data(){
        $ket_foto                   = $_POST['keterangan'] ? $_POST['keterangan'] : '';
        $data['judul_foto']       	= $this->input->post('judul_foto');
       
        $data['keterangan']           = $ket_foto;
        $images="";
        $upload = $this->main->upload_file_galeri();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['nama_foto'] = $images ? $images : '';
		$this->main->insert_data('mst_foto',$data);
		redirect('Admin/Foto/index');
        
    }
    public function edit_data($id){
        $where 					    = ['id_foto' => $id];
        $data['foto']               = $this->main->get_data_where('mst_foto',$where);

        $this->load->view('admin/foto/ubah',$data);

    }public function update_data(){
        $ket_foto                   = $_POST['keterangan'] ? $_POST['keterangan'] : '';
        $data['judul_foto']       	= $this->input->post('judul_foto');
       
        $data['keterangan']           = $ket_foto;
        $images="";
        $upload = $this->main->upload_file_galeri();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['nama_foto'] = $images ? $images : '';

        $where['id_foto']           = $this->input->post('id_foto');

        $this->main->update_data('mst_foto',$data,$where);
        // echo '<prev>';
        // print_r($this->db->last_query());
		redirect('Admin/Foto/index');
    }
    public function delete_data(){
        $where['id_foto']         = $this->input->post('id_foto');

        $this->main->delete_data('mst_foto',$where);
		redirect('Admin/Foto/index');
    }

}
