<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
	     	$this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_admin');
          $this->load->model('m_data');
    }

	function index()
	{
	
                    $x['data']=$this->m_data->data1();
                    $this->load->view('admin/index',$x);
	}
    function tentang()
  {
  
                    $this->load->view('admin/tentang');
  }

    function admin()
  {
   
                    $x['data']=$this->m_vr->datavr();
                    $this->load->view('admin/index',$x);
  }

  	function proseslogin() {
     
            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
            
            $p = md5($psw);
            $cek = $this->m_admin->cek($usr, $p);
            if ($cek->num_rows() == 1) {
                //login berhasil, buat session
                foreach ($cek->result() as $data) {
                    $sess_data['fullname'] = $data->fullname;
                    $sess_data['username'] = $data->username;
                    $sess_data['password'] = $data->password;
                    $sess_data['gambar'] = $data->gambar;
                    $this->session->set_userdata($sess_data);

                    $x['data']=$this->m_data->data1();
                    $this->load->view('admin/index',$x);
                     }  
             }else{
                     echo "<script>alert('username atau password salah');</script>";
                      $this->load->view('login');
             }     


    }

    function logout() {
        $this->session->sess_destroy();
        redirect('admin/index');
    }

    function data_vr() {
      $this->load->view('admin/data-vr');
    }

}   