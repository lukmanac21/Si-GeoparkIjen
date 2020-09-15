<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
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
        $data['slider'] = $this->main->get_data('mst_slider');
		$this->load->view('Admin/Slider/index',$data);
    }
    public function add_data(){

        $this->load->view('Admin/slider/tambah');
    }
    public function save_data(){
        $slider                       = $_POST['keterangan'] ? $_POST['keterangan'] : '';
        $data['judul_slider']         = $this->input->post('judul_slider');
        $data['status']               = $this->input->post('status');
       
        $data['keterangan']           = $slider;
        $images="";
        $upload = $this->main->upload_file_slider();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['img_slider'] = $images ? $images : '';
		$this->main->insert_data('mst_slider',$data);
		redirect('Admin/slider/index');
        
    }
    public function edit_data($id){
        $where 					        = ['id_slider' => $id];
        $data['slider']               = $this->main->get_data_where('mst_slider',$where);

        $this->load->view('Admin/slider/Ubah',$data);

    }public function update_data(){
        $slider                       = $_POST['keterangan'] ? $_POST['keterangan'] : '';
        $data['judul_slider']         = $this->input->post('judul_slider');
        $data['status']               = $this->input->post('status');
       
        $data['keterangan']           = $slider;
        $images="";
        $upload = $this->main->upload_file_slider();
              if ($upload['result'] == "success") { // Jika proses upload sukses
                 $images = $upload['file']['file_name'];
                 
              } else { // Jika proses upload gagal
                  $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
              }
        
        $data['img_slider'] = $images ? $images : '';
        $where['id_slider']           = $this->input->post('id_slider');

        $this->main->update_data('mst_slider',$data,$where);
        // echo'<prev>';
        // print_r($this->db->last_query());
		redirect('Admin/slider/index');
    }
    public function delete_data(){
        $where['id_slider']         = $this->input->post('id_slider');

        $this->main->delete_data('mst_slider',$where);
		redirect('Admin/slider/index');
    }

}
