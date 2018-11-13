<?php
class M_tulis extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('tulis', $data);
      return true;
    }catch(Exception $e){
    }
  }
  
  public function get_tulis_keyword($keyword){
			$this->db->select('*');
			$this->db->from('tulis');
			$this->db->like('judul',$keyword);
			$this->db->or_like('kode_tulis',$keyword);
			return $this->db->get()->result();
		}


public function data(){
	//algoritma bubble sort dideklarasikan di dalam function data
	function bubble_Sort($array )
{
	do
	{
		$ganti = false;
		for( $i = 0, $c = count( $array ) - 1; $i < $c; $i++ )
		{
			if( $array[$i] > $array[$i + 1] )
			{
				list( $array[$i + 1], $array[$i] ) =
						array( $array[$i], $array[$i + 1] );
				$ganti = true;
			}
		}
	}
	while( $ganti );
return $array;
}
	
	
   $this->db->select('*');
   $this->db->from('tulis');
   $this->db->order_by('judul');
   $data = $this->db->get();
   //hasil query dari database diurutkan dengan algoritma bubble sort
   $urut = bubble_Sort($data);
   return $urut->result();
 }

 public function getid($id){
     $this->db->where('id_tulis', $id);
     return $this->db->get('tulis')->result();
   }

 public function foto($id)
   {
     $this->db->where('id_tulis', $id);
     return $this->db->get('tulis')->row();
   }
    public function audio($id)
   {
     $this->db->where('id_tulis', $id);
     return $this->db->get('tulis')->row('audio');
   }
 public function ubah($id, $data) {
     try{
       $this->db->where('id_tulis',$id)->limit(1)->update('tulis', $data);
       return true;
     }catch(Exception $e){}
 }

 public function hapus($id){
   $this->db->where('id_tulis', $id);
   $this->db->delete('tulis');
 }
 
  

}
?>
