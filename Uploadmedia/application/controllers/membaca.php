<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Membaca extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_baca');
        if($this->session->userdata('status') != "login"){
          redirect(base_url("index.php/login"));
          }
    }

    public function input(){
      $this->load->view('input');
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
          $this->load->view('membaca/input', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['foto' => $file['file_name'],
		   'kode_baca' => set_value('kode_baca'),
           'judul' => set_value('judul'),
           'keterangan' => set_value('keterangan')
         ];
          $this->M_baca->input($data); //memasukan data ke database
          redirect('membaca/input'); //mengalihkan halaman

      }
  }

  public function data(){
  $data['membaca'] = $this->M_baca->data();
  $this->load->view('data', $data);
}

  public function search(){
		$keyword = $this->input->post('keyword');
		$data['membaca']=$this->M_baca->get_baca_keyword($keyword);
		$this->load->view('search',$data);
	}

public function ubah($id){
    $data['membaca'] = $this->M_baca->getid($id);
    $this->load->view('update', $data);
  }

  public function proses_ubah($id){
    $foto = $this->M_baca->foto($id);
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
            $data = ['foto' => $file['file_name']];
            unlink('assets/images/'.$foto->foto); //menghapus gambar yang lama
        }
      }
	  $data['kode_baca']   = set_value('kode_baca');
      $data['judul']   = set_value('judul');
      $data['keterangan']   = set_value('keterangan');
      $this->M_baca->ubah($id, $data); //memasukan data ke database
      redirect('membaca/data'); //mengalihkan halaman
  }

  public function hapus($id){
  $foto = $this->M_baca->foto($id);
  unlink('assets/images/'.$foto->foto);
  $this->M_baca->hapus($id);
  redirect('membaca/data'); //mengalihkan halaman
}

}
