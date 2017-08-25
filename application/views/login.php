<html>
<title>SIPENGPRO</title>
<head>
    <link href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/login/login.css" rel="stylesheet">
</head>
<body>

<h1 class="text-center"><b>SIPENGPRO </b></h1> <br/><br/>
<h3 class="text-center"><b>Sistem Informasi Pengajuan Proposal Anggaran</b></h3> 
<div class="login-page" style="margin-top: -50px;">
  <div class="form">
    <?php $data = array('class' => 'login-form');
    echo form_open("login/auth");?>
      <input type="text" placeholder="username" name="username" id="username" autofocus/>
      <input type="password" placeholder="password" name="password" id="password"/>
      <button><b>login</b></button>
    <?php echo $this->session->flashdata('msg'); ?>
      <!--<p class="message">Not registered? <a href="#">Create an account</a></p> -->
    <?php echo form_close();?>
  </div>
</div>

<script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/login/login.js"></script>
</body>
</html>