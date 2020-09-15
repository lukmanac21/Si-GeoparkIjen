<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Main','main');
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
		$data['kategori'] 		= $this->main->get_data('mst_kategori');
		$data['galeri'] 		= $this->main->get_data('mst_foto');
		$this->load->view('galeri',$data);

	}

}
