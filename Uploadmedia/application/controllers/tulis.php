<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tulis extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_tulis');
        
    }

    public function input(){
      $this->load->view('input');
    }
	
	public function tampil(){
	$data['tulis'] = $this->M_tulis->data();
	$this->load->view('belajar_tulis', $data);
	}
	
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['tulis']=$this->M_tulis->get_tulis_keyword($keyword);
		$this->load->view('searchtulis',$data);
	}
    
  public function data(){
    $data['tulis'] = $this->M_tulis->data();
    $this->load->view('belajar_tulis', $data);
    }
	public function dataa($id){
    $data['tulis'] = $this->M_tulis->getid($id);
    $this->load->view('belajar_tulis', $data);
  }

	public function lihat($id){
    $data['tulis'] = $this->M_tulis->getid($id);
    $this->load->view('belajar_tulis', $data);
  }
}
