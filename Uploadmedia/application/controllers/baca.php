<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Baca extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_baca');
        
    }

	public function tampil(){
	$data['membaca'] = $this->M_baca->data();
	$this->load->view('belajar_baca', $data);
	}
	
	public function tampilcoba(){
	$data['membaca'] = $this->M_baca->data();
	$this->load->view('coba_baca', $data);
	}
	
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['membaca']=$this->M_baca->get_baca_keyword($keyword);
		$this->load->view('search',$data);
	}
	
    
  public function data($id){
    $data['membaca'] = $this->M_baca->getid($id);
    $this->load->view('tampilbaca', $data);
    }
	public function dataa($id){
    $data['membaca'] = $this->M_baca->getid($id);
    $this->load->view('belajar_baca', $data);
  }
	
	
	public function index(){
      $this->load->view('home');
    }

}
