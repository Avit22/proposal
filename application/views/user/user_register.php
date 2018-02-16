<!DOCTYPE html>
<html lang="en"> 
  
  <?php $this->view('template/head'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        

        <?php $this->view('template/top'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          
          <h1 class="text-center text-info">Daftar Akun</h1> <br />
       <?php echo form_open('user/tambah_proses',array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>
       <br />
       <p class="text-danger" style="font-size:20px;"><?php echo $this->session->flashdata('pesan'); ?></p>

       
       <!-- Nama -->
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama', 'id' => 'nama', 'class' => 'form-control', 'placeholder' => 'Masukkan Nama');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Username -->
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'username', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Masukkan Username');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <?php 
           $data = array('type' => 'password', 'name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password');
           echo form_input($data); ?>
          </div>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
          <label for="password2" class="col-sm-2 control-label">Konfirmasi Password</label>
          <div class="col-sm-10">
            <?php 
           $data = array('type' => 'password', 'name' => 'password2', 'id' => 'password2', 'class' => 'form-control', 'placeholder' => 'Konfirmasi Password');
           echo form_input($data); ?>
          </div>
        </div>
        
                  
        <input type="hidden" name="tingkatan" id="tingkatan" value="<?php echo "pjk" ?>">
        <br />
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="terkirim" class="btn btn-primary" value="1">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php echo form_close(); ?>

        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>

    <script type="text/javascript">

      var jurusan = document.getElementById("jurusan");
      jurusan.style.display = "none";
 
    function change(obj) {


      var selectBox = obj;
      var selected = selectBox.options[selectBox.selectedIndex].value;
      var jurusan = document.getElementById("jurusan");

      if(selected === 'borang_jurusan'){
          jurusan.style.display = "block";
      }
      else{
          jurusan.style.display = "none";
      }
  }
    </script>
</body>
</html>
