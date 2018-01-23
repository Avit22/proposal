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
          
          <div style="font-size:25px;"><center><p class="text-danger well" style="font-size:20px;"><?php echo $this->session->flashdata('pesan'); ?></p></center></div><br />
          <div style="font-size:25px;"><center>Selamat Datang di Sistem Informasi Manajemen Pengajuan Proposal</center></div>

        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>
    
    <?php $this->view('template/js'); ?>
</body>
</html>
