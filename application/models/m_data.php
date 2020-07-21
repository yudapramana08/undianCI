<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model {

    function data() {
       $hasil=$this->db->query("SELECT * FROM db_user order by RAND() limit 1");

            return $hasil;
    }
        function data1() {
       $hasil=$this->db->query("SELECT * FROM db_user ");

            return $hasil;
    }

    function inputdata($data){
                  $this->db->insert('db_user', $data);
       }

    function hapus($id){
      $hasil=$this->db->query("DELETE from db_user where id='$id'");

            return $hasil;
        }
    function edit($id){

            $hasil=$this->db->query("SELECT * from db_user where id='$id'");

            return $hasil;

      }          

	 function update($id,$nama,$data_image){
          $hasil=$this->db->query("UPDATE db_user SET nama='$nama',file='$data_image' WHERE id='$id'");

            return $hasil;
      }
     function update2($id,$nama){
          $hasil=$this->db->query("UPDATE db_user SET nama='$nama' WHERE id='$id'");

            return $hasil;
      }
}