<?php 

class Input extends CI_Controller{

	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));

            $this->load->library('session');
              $this->load->model('m_data');
          
	}

	public function index(){
		$this->load->view('admin/inputdata', array('error' => ' ' ));
	}

	public function input_data(){
		
             
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');


		//upload photo
		$config['max_size']='100000';
		$config['allowed_types']="png|jpg|jpeg|gif";
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;
		$config['max_width']= 60000;
        $config['max_height']= 40000;
		$config['upload_path']=FCPATH.'assets/gambar_user';

		$this->load->library('upload');
		$this->upload->initialize($config);

		//ambil data image
		$this->upload->do_upload('file');
		$data_image=$this->upload->data('file_name');
		$location=base_url().'assets/gambar_user/';
		$pict=$location.$data_image;
		if($this->upload->do_upload('file')){ 
			
				$data=array(
			'id'=>$id,
			'nama'=>$nama,
			'file'=>$data_image
			);
		//simpan data 
		$this->m_data->inputdata($data);

		$this->session->set_flashdata('sukses', 'anda berhasil menginput data');
		redirect('admin/index');

		}
		else{
		$this->session->set_flashdata('error', 'anda gagal menginput data');
		redirect('admin/index');
		}
	
	}
	public function hapus($id){
        $this->m_data->hapus($id);
      $this->session->set_flashdata('sukses', 'anda berhasil menghapus data');
            redirect('admin/index');

      }  

     public function edit($id){
        $x['data']=$this->m_data->edit($id);

       $this->load->view('admin/editdata',$x);

     
     }  	
public function update(){
			$id=$this->input->post('id');
	  		$nama=$this->input->post('nama');
			

			

			//upload photo
			$config['max_size']='100000';
			$config['allowed_types']="png|jpg|jpeg|gif";
			$config['remove_spaces']=TRUE;
			$config['overwrite']=TRUE;
			$config['max_width']= 60000;
	        $config['max_height']= 4000;
			$config['upload_path']=FCPATH.'assets/gambar_user';

			$this->load->library('upload');
			$this->upload->initialize($config);

		if ($this->upload->do_upload('file')){
			//ambil data image
			$this->upload->do_upload('file');
			$data_image=$this->upload->data('file_name');
			$location=base_url().'assets/gambar_user/';
			$pict=$location.$data_image;

			if($this->upload->do_upload('file')){ 

			$this->m_data->update($id,$nama,$data_image);
				
				$this->session->set_flashdata('sukses', 'anda berhasil menginput data');
	

		
		redirect('admin/index');
				
			

			}else{
				    echo "gagal";
			}

		}else{
				$this->m_data->update2($id,$nama);
				
				$this->session->set_flashdata('sukses', 'anda berhasil menginput data');
				
	     
		}

	  
		}

		function showdata(){
         $x['data']=$this->m_data->data();
         $this->load->view('showdata',$x);

      }
      		function stop(){
         $x['data']=$this->m_data->data();
         $this->load->view('stop',$x);

      }

}