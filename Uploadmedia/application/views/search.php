<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Learn Digital</title>
  
  
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <script href="<?php echo base_url('assets/bootstrap/css/jquery-3.3.1.min.js'); ?>"> </script>
  
</head>
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
              <li><a href="<?php echo base_url('index.php/tulis/tampil')?>">Belajar Menulis yuk</a></li>
              <li><a href="<?php echo base_url('index.php/baca/tampil')?>">Belajar Membaca ya</a></li>
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
     <h3 align="center"><b>AYO BELAJAR MEMBACA DAN MENULIS</b></h3>
 <div class="col-md-3">
 </div>
 
  <div class="row">
  <div class="jumbotron col-md-12">
  <center><h4>Hasil Pencarian</h4>
 <div class="card text-white bg-primary mb-12">
  <div class="card-header"></div>
  <div class="card-body">
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Animasi</th>
      <th scope="col">Audio</th>
      <th scope="col">Judul Materi</th>
      <th scope="col">Kode Materi</th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach($membaca as $searchs) {
        ?>
    <tr>
      <td><video width="240" height="auto" controls>
	  <source src="<?php echo base_url() . 'assets/images/'.$searchs->foto  ?>" /></video></td>
      <td><audio width="100" controls>
      <source src="<?php echo base_url() . 'assets/images/'.$searchs->audio  ?>"  type="audio/mpeg"></audio></td>
      <td><?php echo $searchs->judul ?></td>
      <td><?php echo $searchs->kode_baca ?></td>
        </tr>
        <?php } ?>
  </tbody>
</table>
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
