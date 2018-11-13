<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Learn Digital</title>
  
  
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <script href="<?php echo base_url('assets/bootstrap/css/jquery-3.3.1.min.js'); ?>"> </script>
  
</head>
<?php
$datatulis= $this->db->query("select id_tulis,kode_tulis,judul,keterangan,foto,audio from tulis");
if($datatulis->num_rows()>0){
	
	$hasil = $datatulis->row_array();
}

?>

<body>
  <!-- INI ADALAH HEADER -->
     <nav bgcolor="yellow" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('index.php/baca/index') ?>">Ayo Belajar Baca & Tulis</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url('index.php/tulis/dataa/1')?>">Belajar Menulis yuk</a></li>
              <li><a href="<?php echo base_url('index.php/baca/dataa/1')?>">Belajar Membaca ya</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
			 <?=form_open_multipart('tulis/search/') ?> 
			<form class="form-inline ">
      <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  <?php echo form_close() ?>
    </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li> <a href="<?php echo base_url('index.php/login/index'); ?>" class="glyphicon glyphicon-log-in"> Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
   <br><br><br><br><br>
    <section>
   <div class="container">
     <h3 align="center"><b>AYO BELAJAR MENULIS</b></h3>
 <div class="col-md-3">
 </div>
 </div>
 <div class="container">
  <div class="row">
  <div class="col-md-8">
  <?php foreach($tulis as $r) {?>
     <?=form_open_multipart('tulis/proses_ubah/'.$r->id_tulis)?>
 <div class="card text-white bg-primary mb-10">
  <div class="card-header"><center><h3>===<?php echo $r->judul ?>==== </h3><br>Putar videonya dibawah ini</div>
  <div class="card-body"><center>
    <video width="90%" height="auto" controls>
	  <source src="<?php echo base_url() . 'assets/images/'.$r->foto ?>" /></video>
    
  </div><br><hr class="mb-5">
  <div class="card text-white bg-primary mb-4">
<div class="card-header"><center><h4> Putar Audio nya dibawah ini </h4></div>
<div class="card-body"><center>
<h4><p class="card-text">Silahkan Putar Suaranya dibawah ini</p></h4><br>
	<audio width="100" controls>
      <source src="<?php echo base_url() . 'assets/images/'.$r->audio ?>"  type="audio/mpeg"></audio>
<?php ?>
</div>
</div>
  <?php } ?>
</div>

</div>
  
   <div class="col-md-4">
   <?php 
   foreach($datatulis->result_array() as $row){
   ?>
 
 <div class="card text-white bg-primary mb-10">
  <div class="card-header"><center><h3>===<?php echo $row['judul']; ?>==== </h3><br>Klik videonya ditombol bawah</div>
  <div class="card-body"><center>
    <video width="90%" height="auto" controls>
	  <source src="<?php echo base_url() . 'assets/images/'.$row['foto'];  ?>" /></video>
    
  </div><br><hr class="mb-5">
  <div class="card text-white bg-primary mb-4">
<div class="card-header"><center><h4> Putar Audio nya dibawah ini </h4></div>
<div class="card-body"><center>
<h4><p class="card-text">Silahkan Putar Suaranya dibawah ini</p></h4><br>
	<audio width="100" controls>
      <source src="<?php echo base_url() . 'assets/images/'.$row['audio'];  ?>"  type="audio/mpeg"></audio><br><br>
	  <a href="<?php echo base_url();?>index.php/tulis/dataa/<?php echo $row['id_tulis']; ?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-music"></i> Pilih</a>
	  
</div>
</div>
</div>
   <?php } ?>
</div>
  

<br><br>





</div>
</div>


 </section><br><br> <!-- /container -->
<div class="copyright py-4 text-center text-black">
      <div class="container">
        <small>Copyright &copy; E-Learn 2018</small>
      </div>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
  <script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>
</body>
</html>
