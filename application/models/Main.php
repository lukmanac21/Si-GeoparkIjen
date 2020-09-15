<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_MODEL{
    function check_login($table,$where){
        return $this->db->get_where($table,$where);
    }
    function get_login_data($table,$where){
        $query = $this->db->get_where($table,$where);
		return $query->row_array();
    }
    function get_data($table){
        $query = $this->db->get($table);
        return $query->result();
    }
    function get_data_where($table,$where){
        $query = $this->db->get_where($table,$where);
        return $query->result();
    }
    function get_data_join($table,$table_join,$where){
        $query = $this->db->select('*')->from($table)->join($table_join,$where)->get();
        return $query->result();
    }
    function get_data_wtwojoin($table,$table_join_one,$where_one,$table_join_two,$where_two){
        $query = $this->db->select('*')->from($table)->join($table_join_one,$where_one)->join($table_join_two,$where_two)->get();
        return $query->result();
    }
    function get_data_join_where($table,$table_join,$where_join,$where){
        $query = $this->db->select('*')->from($table)->join($table_join,$where_join)->where($where)->get();
        return $query->result();
    }
    function get_data_dashboard($field,$asfield,$table){
        $query = $this->db->query("SELECT COUNT($field) AS $asfield FROM $table");
        return $query->row_array();
    }
    function get_data_home($table){
        $query = $this->db->query("SELECT * FROM $table");
        return $query->row_array();
    }
    function insert_data($table,$data){
        $this->db->insert($table,$data);
    }
    function update_data($table,$data,$where){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_data($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function upload_file_wisata(){
         
        $this->load->library('upload'); // Load librari upload
        
        
        $config['upload_path'] = './assets/img/wisata/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
                $this->upload->initialize($config); // Load konfigurasi uploadnya
                if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    public function upload_file_pengurus(){
         
        $this->load->library('upload'); // Load librari upload
        
        
        $config['upload_path'] = './assets/img/pengurus/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
                $this->upload->initialize($config); // Load konfigurasi uploadnya
                if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    public function upload_file_galeri(){
         
        $this->load->library('upload'); // Load librari upload
        
        
        $config['upload_path'] = './assets/img/galeri/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
                $this->upload->initialize($config); // Load konfigurasi uploadnya
                if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    public function upload_file_berita(){
         
        $this->load->library('upload'); // Load librari upload
        
        
        $config['upload_path'] = './assets/img/berita/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
                $this->upload->initialize($config); // Load konfigurasi uploadnya
                if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    public function upload_file_slider(){
         
        $this->load->library('upload'); // Load librari upload
        
        
        $config['upload_path'] = './assets/img/slider/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['file_name'] = '';
                $this->upload->initialize($config); // Load konfigurasi uploadnya
                if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

}
?>