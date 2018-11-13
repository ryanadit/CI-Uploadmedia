<html>
<head>
  <title>Learn Digital</title>
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <style>
  .kotak
 {
  padding:10px;
  border:1px solid #e8e8e8;
  margin-bottom:15px;
  background:#F4F4F4;
  border-radius:5px;
 }
  </style>
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
            <a class="navbar-brand" href="<?php echo base_url('index.php/menulis/data')?>">Media Pembelajaran SD</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url('index.php/menulis/data')?>">Data Materi Menulis</a></li>
              <li><a href="<?php echo base_url('index.php/menulis/input')?>">Input Materi Menulis</a></li>
			  <li><a href="<?php echo base_url('index.php/membaca/data')?>">Materi Membaca</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
   <br><br><br><br><br>
   <div class="container">
     <div class="row">
       
    
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Animasi</th>
      <th scope="col">Audio</th>
      <th scope="col">Judul Materi</th>
      <th scope="col">Kode Materi</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Operasi</th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach($tulis as $b){
        ?>
    <tr>
      <td><video width="100%" height="auto" controls>
	  <source src="<?php echo base_url() . 'assets/images/'.$b->foto  ?>" /></video></td>
      <td><audio width="100%" controls>
      <source src="<?php echo base_url() . 'assets/images/'.$b->audio  ?>"  type="audio/mpeg"></audio></td>
      <td><?php echo $b->judul ?></td>
      <td><?php echo $b->kode_tulis ?></td>
      <td><?php echo $b->keterangan ?></td>
      <td><a href="<?php echo base_url();?>index.php/menulis/ubah/<?php echo $b->id_tulis ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                <a href="<?php echo base_url();?>index.php/menulis/hapus/<?php echo $b->id_tulis ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                <a href="<?php echo base_url();?>index.php/menulis_a/input/<?php echo $b->id_tulis ?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-music"></i> Input Audio</a>
				
				</td>
        </tr>
        <?php } ?>
  </tbody>
</table>
</div>
</div> <!-- /container -->
<div class="copyright py-4 text-center text-black">
      <div class="container">
        <small>Copyright &copy; E-Learn 2018</small>
      </div>
    </div>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
</body>
</html>
