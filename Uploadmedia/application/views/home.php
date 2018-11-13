<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Learn Digital</title>
  

<!-- Then include bootstrap js -->

  
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <script href="<?php echo base_url('assets/bootstrap/css/jQuery.min.js'); ?>"> </script>
  
</head>
<body>
  <!-- INI ADALAH HEADER -->
     <nav class="navbar navbar-default navbar-fixed-top">
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
              <li><a href="<?php echo base_url('index.php/tulis/dataa/1')?>">Belajar Menulis yuk</a></li>
              <li><a href="<?php echo base_url('index.php/baca/dataa/1')?>">Belajar Membaca ya</a></li>
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
     <h3 align="center"><b>Media Pembelajaran angka dan huruf menggunakan framework 
CI dan metode Bubblesort
</b></h3>
 <div class="col-md-3">
 </div>
 
  <div class="row">
  <div class="col-md-9">
  <div class="jumbotron col-md-10">
 <div class="card text-white bg-primary mb-10">
  <div class="card-header"><h3>Mengenal huruf dan angka dengan penulisan dan pengucapan</h3></div>
  <div class="card-body">
   <p><h3 class="card-title">Aplikasi yang di buat khusus untuk anak-anak dalam pengenalan huruf dan angka, 
	dilengkapi cara menulis untuk huruf dan angka serta pengucapannya. Interaksi yang terjadi akan 
	membantu memudahkan orang tua tentunya juga anak-anak usia dini untuk mengenal dan memahami 
	huruf A-Z, a-z, serta angka 0-9. Tampilam yang menarik dan proses pembelajaran yang mudah ini di 
	akses menggunakan web, framework CI (CodeIgniter) dan metode sorting yaitu Bubblesorting. </h3></p>
    <p class="card-text">Aplikasi Web ini dikhususkan untuk adik adik murid kelas 1 Sekolah Dasar</p>
  </div>
</div>
</div>




</div>
<div class="col-md-3">

 <div class="card text-white bg-primary mb-10">
 <div class="card-header"><h3>Belajar Pangkal Pandai</h3></div>
 <div class="card-body">
 <img width="100%" src="<?php echo base_url('assets/img/belajar_doraemon.jpg');?>">
 </div>
 </div>
 <div class="card text-white bg-primary mb-10">
 <div class="card-header"><h3>Ayo Semangat Belajar</h3></div>
 <div class="card-body">
 <img width="100%" src="<?php echo base_url('assets/img/spongebob.jpg');?>">
 </div>
 </div>

 
</div>
</div>
</div>
 </section> <!-- /container -->
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
