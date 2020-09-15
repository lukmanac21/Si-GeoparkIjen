<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
		$data['slider'] 		= $this->main->get_data('mst_slider');
		$data['tentang'] 		= $this->main->get_data_home('mst_tentang');
		$data['visi'] 			= $this->main->get_data_home('mst_visi');
		$data['misi'] 			= $this->main->get_data('mst_misi');
		$data['layanan'] 		= $this->main->get_data('mst_layanan');
		$this->load->view('home',$data);
	}

}
