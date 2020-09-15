<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Main','main');
			$this->load->helper('text');
		}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['kontak'] 		= $this->main->get_data('mst_kontak');
		$data['berita'] 		= $this->main->get_data('mst_berita');
		$this->load->view('berita',$data);
	}
	public function detail($id){
		$data['kontak'] 		= $this->main->get_data('mst_kontak');
		$where					= ['id_berita' => $id];
		$data['berita']			= $this->main->get_data_where('mst_berita',$where);
		$this->load->view('detail',$data);
	}

}
