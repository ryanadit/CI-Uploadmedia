<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Membaca_a extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_baca');
        if($this->session->userdata('status') != "login"){
          redirect(base_url("index.php/login"));
          }
    }

    public function input($id){
    $data['membaca'] = $this->M_baca->getid($id);
    $this->load->view('inputbaca_au', $data);
    }
    public function proses_input(){
      //membuat konfigurasi
      $config = [
        'upload_path' => './assets/images/',
        'allowed_types' => 'mp3|mp4|docx|pdf|gif|jpg|png|jpeg|wmv|webm',
        'max_size' => 200000000, 'max_width' => 5000,
        'max_height' => 5000
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('membaca_a/input', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['audio' => $file['file_name'],
		   'kode_baca' => set_value('kode_baca'),
           'judul' => set_value('judul'),
           'keterangan' => set_value('keterangan')
         ];
          $this->M_baca->input($data); //memasukan data ke database
          redirect('membaca_a/data'); //mengalihkan halaman

      }
  }

  public function data(){
  $data['membaca'] = $this->M_baca->data();
  $this->load->view('data', $data);
}

public function ubah($id){
    $data['membaca'] = $this->M_baca->getid($id);
    $this->load->view('updatebaca_au', $data);
  }
  
   public function search(){
		$keyword = $this->input->post('keyword');
		$data['membaca']=$this->M_baca->get_baca_keyword($keyword);
		$this->load->view('home',$data);
	}

  public function proses_ubah($id){
    $audio = $this->M_baca->audio($id);
    if(isset($_FILES["userfile"]["name"]))
      {
        //membuat konfigurasi
        $config = [
          'upload_path' => './assets/images/',
          'allowed_types' => 'mp3|mp4|docx|pdf|gif|jpg|png|jpeg|wmv|webm',
          'max_size' => 200000000, 'max_width' => 5000,
          'max_height' => 5000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('update', $error);
        } else
        //jika berhasil upload
        {

            $file = $this->upload->data();
            //mengambil data di form
            $data = ['audio' =>$file['file_name']];
            unlink('assets/images/'.$audio->audio); //menghapus gambar yang lama
        }
      }
	  $data['kode_baca']   = set_value('kode_baca');
      $data['judul']   = set_value('judul');
      $data['keterangan']   = set_value('keterangan');
      $this->M_baca->ubah($id, $data); //memasukan data ke database
      redirect('membaca_a/data'); //mengalihkan halaman
  }

  public function hapus($id){
  $audio = $this->M_baca->audio($id);
  unlink('assets/images/'.$audio->audio);
  $this->M_baca->hapus($id);
  redirect('membaca/data'); //mengalihkan halaman
}

}
