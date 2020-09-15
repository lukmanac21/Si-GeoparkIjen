<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->session->userdata['logged_in'] == FALSE) {
            redirect(site_url("Admin/Login"));
        }
        $data['tentang'] = $this->main->get_data('mst_tentang');
        $this->load->view('admin/tentang/index', $data);
    }
    public function add_data()
    {
        $this->load->view('admin/tentang/tambah');
    }
    public function save_data()
    {
        $data['ket_tentang']            = $this->input->post('ket_tentang');
        $data['link_tentang']           = $this->input->post('link_tentang');

        $upload = $this->main->upload_file_tentang();
        if ($upload['result'] == "success") { // Jika proses upload sukses
            $images = $upload['file']['file_name'];
        } else { // Jika proses upload gagal
            $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
        }

        $data['img_tentang'] = $images ? $images : '';
        $this->main->insert_data('mst_tentang', $data);
        redirect('Admin/Tentang/index');
    }
    public function edit_data($id)
    {
        $where                     = ['id_tentang' => $id];
        $data['tentang']         = $this->main->get_data_where('mst_tentang', $where);

        $this->load->view('admin/tentang/ubah', $data);
    }
    public function update_data()
    {
        $data['ket_tentang']         = $this->input->post('ket_tentang');
        $data['link_tentang']        = $this->input->post('link_tentang');

        $imageLama                   = $this->input->post('imageLama');

        $upload = $this->main->upload_file_tentang();
        if ($upload['result'] == "success") { // Jika proses upload sukses
            $images = $upload['file']['file_name'];
            if (file_exists('./assets/img/tentang/' . $imageLama)) {
                unlink('./assets/img/tentang/' . $imageLama);
            }
        } else { // Jika proses upload gagal
            $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
        }

        $data['img_tentang'] = $images ? $images : $imageLama;

        $where['id_tentang']         = $this->input->post('id_tentang');

        $this->main->update_data('mst_tentang', $data, $where);
        redirect('Admin/Tentang/index');
    }
    public function delete_data()
    {
        $where['id_tentang']         = $this->input->post('id_tentang');
        $imageLama                   = $this->input->post('imageLama');

        if (file_exists('./assets/img/tentang/' . $imageLama)) {
            unlink('./assets/img/tentang/' . $imageLama);
        }

        $this->main->delete_data('mst_tentang', $where);
        redirect('Admin/Tentang/index');
    }
}
