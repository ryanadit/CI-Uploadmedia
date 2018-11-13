<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menulis_a extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_tulis');
        if($this->session->userdata('status') != "login"){
          redirect(base_url("index.php/login"));
          }
    }

    public function input($id){
    $data['tulis'] = $this->M_tulis->getid($id);
    $this->load->view('inputtulis_au', $data);
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
          $this->load->view('menulis_a/input', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['audio' => $file['file_name'],
		   'kode_tulis' => set_value('kode_tulis'),
           'judul' => set_value('judul'),
           'keterangan' => set_value('keterangan')
         ];
          $this->M_tulis->input($data); //memasukan data ke database
          redirect('menulis_a/data'); //mengalihkan halaman

      }
  }

  public function data(){
  $data['tulis'] = $this->M_tulis->data();
  $this->load->view('datatulis', $data);
}

public function ubah($id){
    $data['tulis'] = $this->M_tulis->getid($id);
    $this->load->view('updatetulis_au', $data);
  }
  
  public function search(){
		$keyword = $this->input->post('keyword');
		$data['tulis']=$this->M_tulis->get_tulis_keyword($keyword);
		$this->load->view('home',$data);
	}

  public function proses_ubah($id){
    $audio = $this->M_tulis->audio($id);
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
	  $data['kode_tulis']   = set_value('kode_tulis');
      $data['judul']   = set_value('judul');
      $data['keterangan']   = set_value('keterangan');
      $this->M_tulis->ubah($id, $data); //memasukan data ke database
      redirect('menulis/data'); //mengalihkan halaman
  }

  public function hapus($id){
  $audio = $this->M_tulis->audio($id);
  unlink('assets/images/'.$audio->audio);
  $this->M_tulis->hapus($id);
  redirect('menulis/data'); //mengalihkan halaman
}

}
