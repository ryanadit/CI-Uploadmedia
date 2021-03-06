
<html>
<head>
  <title>Learn Digital</title>
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <style>
  .file {
    visibility: hidden;
    position: absolute;
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
            <a class="navbar-brand" href="<?php echo base_url('index.php/membaca/data')?>">Media Pembelajaran SD</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url('index.php/membaca/data')?>">Data Materi Membaca</a></li>
              <li><a href="<?php echo base_url('index.php/membaca/input')?>">Input Materi Membaca</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
   <br><br><br><br><br>
   <div class="container">
     <h3 align="center"><b>Input Audio</b></h3>
 <div class="col-md-3">
 </div>
 <div class="jumbotron col-md-6">
   <?php foreach($membaca as $r) {?>
     <?=form_open_multipart('membaca_a/proses_ubah/'.$r->id_baca)?>
	 <div class="form-group">
      <label for="kode_baca">Kode :</label>
      <input type="text" name="kode_baca" class="form-control" placeholder="Masukan Kode Materi" id="kode_baca" value="<?php echo $r->kode_baca ?>" required>
    </div>
    <div class="form-group">
      <label for="judul">Judul Materi:</label>
      <input type="text" name="judul" class="form-control" placeholder="Masukan Judul Materi" id="judul" value="<?php echo $r->judul ?>" required>
    </div>
    <div class="form-group">
      <label for="keterangan">Keterangan :</label>
      <textarea name="keterangan" class="form-control" placeholder="Masukan Isi Materi" id="keterangan" 
	  value="<?php echo $r->keterangan ?>" required><?php echo $r->keterangan ?></textarea>
    </div>
    <div class="form-group">
      <label for="userfile">Audio :</label>
      <input type="file" name="userfile" class="file">
      <div class="input-group col-xs-12">
        <span class="input-group-addon"><i class="glyphicon glyphicon-music"></i></span>
        <input type="text" class="form-control input-lg" disabled placeholder="Upload Audio">
        <span class="input-group-btn">
          <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
        </span>
      </div><br>
    </div>
  <?php }?>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
 </div>

</div> <!-- /container -->
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
