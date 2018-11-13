<!DOCTYPE html>
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
            <a class="navbar-brand" href="">LOGIN</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            
          </div>
        </div>
      </nav>
   <br><br><br><br><br>
   <div class="container">
     <h3 align="center"><b>SILAHKAN LOGIN</b></h3>
 <div class="col-md-3">
 </div>
     <div class="jumbotron col-md-6">
   <?=form_open_multipart('login/aksi_login/')?>
    <div class="form-group">
      <label for="username">Username :</label>
      <input type="text" name="username" class="form-control" placeholder="Masukan Username" id="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password :</label>
      <input type="password" name="password" class="form-control" placeholder="Masukan Password" id="password" required>
    </div>
    
    
        <button type="submit" class="btn btn-primary"> Login</button>
 </div>
 </div>
 <div class="copyright py-4 text-center text-black">
      <div class="container">
        <small>Copyright &copy; E-Learn 2018</small>
      </div>
    </div>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
</body>
</html>
