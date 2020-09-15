<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('Admin/Login');
	}
	public function login_action(){
        $email         =   $this->input->post('email');
        $password      =   $this->input->post('password');
        $where              =   array(
                                    'email_admin' => $email,
                                    'password_admin' => sha1($password)
                                    );
                            // echo '<prev>';
                            // print_r($where);die();
        $check              =   $this->main->check_login("mst_admin",$where)->num_rows();
        // echo '<prev>';
        // print_r($check);die();
        if($check){

            $data           =   $this->main->get_login_data("mst_admin",$where);
                                $this->session->set_userdata('logged_in', TRUE);
                                $this->session->set_userdata('name_admin',$data['name_admin']);


                                redirect(site_url('Admin/Dashboard'));
        }else{
                                ?>
                                <script type="text/javascript">alert("Email atau Password salah!");
                                window.location.href = "http://localhost/Geopark/index.php/Admin/Login/index";
                                </script>
                                <?php
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("Admin/Login"));
    }
}
