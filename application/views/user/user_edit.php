<!DOCTYPE html>
<html lang="en"> 
  
  <?php $this->view('template/head'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <?php $this->view('template/sidebar'); ?>

        <?php $this->view('template/top'); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          
          <h1 class="text-center text-info">Edit User</h1> <br />
        <?php foreach($data_user as $User) { ?>
       <?php echo form_open('user/edit_proses/'.$User->id_user,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
       <?php echo validation_errors(); ?>
       <br />
       <p class="text-danger" style="font-size:20px;"><?php echo $this->session->flashdata('pesan'); ?></p>
        
       
       <!-- Nama -->
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'nama', 'id' => 'nama', 'class' => 'form-control', 'placeholder' => 'Masukkan Username', 'value' => $User->nama, 'readonly' => 'true');
           echo form_input($data); ?>
          </div>
        </div>


        <!-- Username -->
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <?php 
           $data = array('name' => 'username', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Masukkan Username', 'value' => $User->username);
           echo form_input($data); ?>
          </div>
        </div>
        
        <!-- Tingkatan-->
        <div class="form-group">
          <label for="tingkatan" class="col-sm-2 control-label">Tingkatan</label>
         <div class="col-sm-6">
          <select class="form-control" name="tingkatan" onchange="change(this)">
            <option value="">--- Pilih Tingkatan User ---</option>
           <?php 
           foreach($data_tingkatan as $tingkatan)
            { 

                if($tingkatan->nama_tingkatan == $User->tingkatan)

                  echo '<option value="'.$tingkatan->nama_tingkatan.'" selected>'.$tingkatan->nama_tingkatan.'</option>';
                else
                  echo '<option value="'.$tingkatan->nama_tingkatan.'">'.$tingkatan->nama_tingkatan.'</option>';
            } ?>
            </select>
           
          </div>
        </div>

        <div class="well">
        <p style="color:red;"><strong>DI ISI BILA INGIN GANTI PASSWORD</strong></p>
        <!-- Jam -->
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
        </div>
        <br />
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="terkirim" class="btn btn-primary" value="1">Kirim</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </div>
        </div>
       <?php echo form_close(); ?>
       <?php } ?>
        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>

        <script type="text/javascript">

      //var jurusan = document.getElementById("jurusan");
      //jurusan.style.display = "none";
 
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
