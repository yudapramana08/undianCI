<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


  function __construct(){

            parent::__construct();
       
       		  $this->load->helper('url');
     		  $this->load->model('m_data');


      }

        function index(){
         $x['data']=$this->m_data->data();
         $this->load->view('undian',$x);

      }
}
