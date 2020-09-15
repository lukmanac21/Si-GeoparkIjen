<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {
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
        $data['pengurus']               = $this->main->get_data_wtwojoin('mst_pengurus','mst_bagian','mst_pengurus.id_bagian = mst_bagian.id_bagian','mst_pariwisata','mst_pariwisata.id_pariwisata = mst_pengurus.id_pariwisata');
       
        $this->load->view('admin/pengurus/index',$data);
    }
    public function add_data(){
        $data['bagian']                 = $this->main->get_data('mst_bagian');
        $data['pariwisata']             = $this->main->get_data('mst_pariwisata');
        $this->load->view('admin/pengurus/tambah',$data);
    }
    public function save_data(){
        $pengurus = $_POST['keterangan'] ? $_POST['keterangan'] : '';
        $data['id_pariwisata'] 	        = $this->input->post('id_pariwisata');
        $data['id_bagian']       	    = $this->input->post('id_bagian');
        $data['nama_pengurus']          = $this->input->post('nama_pengurus');
        $data['notelp_pengurus']        = $this->input->post('notelp_pengurus');
       
        $data['ket_pengurus']           = $pengurus;
        $images="";
        $upload = $this->main->upload_file_pengurus();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['img_pengurus'] = $images ? $images : '';
		$this->main->insert_data('mst_pengurus',$data);
		redirect('Admin/Pengurus/index');
        
    }
    public function edit_data($id){
        $data['bagian']                 = $this->main->get_data('mst_bagian');
        $data['pariwisata']             = $this->main->get_data('mst_pariwisata');
        $where 					        = ['id_pengurus' => $id];
        $data['pengurus']               = $this->main->get_data_where('mst_pengurus',$where);

        $this->load->view('admin/pengurus/ubah',$data);

    }public function update_data(){
        $pengurus = $_POST['keterangan'] ? $_POST['keterangan'] : '';
        $data['id_pariwisata'] 	        = $this->input->post('id_pariwisata');
        $data['id_bagian']       	    = $this->input->post('id_bagian');
        $data['nama_pengurus']          = $this->input->post('nama_pengurus');
        $data['notelp_pengurus']        = $this->input->post('notelp_pengurus');
       
        $data['ket_pengurus']           = $pengurus;
        $images="";
        $upload = $this->main->upload_file_pengurus();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['img_pengurus']           = $images ? $images : '';
        $where['id_pengurus']           = $this->input->post('id_pengurus');

        $this->main->update_data('mst_pengurus',$data,$where);
        // echo'<prev>';
        // print_r($this->db->last_query());
		redirect('Admin/Pengurus/index');
    }
    public function delete_data(){
        $where['id_pengurus']         = $this->input->post('id_pengurus');

        $this->main->delete_data('mst_pengurus',$where);
		redirect('Admin/Pengurus/index');
    }

}
