<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Learn Digital</title>
  
  
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <script href="<?php echo base_url('assets/bootstrap/css/jquery-3.3.1.min.js'); ?>"> </script>
  <?php
  //algoritma bubble sort
  
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
  
  ?>
  
  
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
              <li class="active"><a href="<?php echo base_url('index.php/baca/tampil')?>">Belajar Membaca ya</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
			<?=form_open_multipart('baca/search/') ?> 
			<form class="form-inline ">
      <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  <?php echo form_close() ?>
    </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('index.php/login/index'); ?>">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
   <br><br><br><br><br>
    <section>
   <div class="container">
     <h3 align="center"><b>AYO BELAJAR MEMBACA</b></h3>
 <div class="col-md-3">
 </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Judul Materi</th>
      <th scope="col">Kode Materi</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
  
 <?php
 $coba=array();
        foreach($baca as $b){
			$coba[]=bubble_Sort($b);
			//$cobakode[]=$b->kode_baca;
			//$cobakode[]=$b->kode_baca;
			//$cobaketerangan[]=$b->keterangan;
		}
			?>
			<tr>
			<td></td>
		<td><?php echo implode("<br>",bubble_Sort($coba)).PHP_EOL ;?></td>
		<td></td>
			</tr>
		
		</tbody>
</table>
			
 </div>
 </div>
 </section>
 <br><br> <!-- /container -->
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
 
 