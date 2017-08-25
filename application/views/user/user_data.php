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
          <div class="text-center" style="font-size:30px;">Data User</div><br />
          <div><a href="user/tambah"><button type="button" class="btn btn-primary" aria-label="Left Align">
            <span class="glyphicon glyphicon-plus" aria-hidden="true">Tambah User</span>
          </button></a></div><br />

          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Tingkatan</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
            <?php $i =1; if(!empty($data_user)) {
            foreach($data_user as $user) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
                <td><?php echo $user->nama; ?></td>
                <td><?php echo $user->username; ?></td>
                <td><?php echo ucfirst($user->tingkatan); ?></td>
                </td>
                <td><?php echo anchor("user/edit/$user->id_user",'<span class="glyphicon glyphicon-edit text-primary fa-lg" aria-hidden="true" title="Edit"></span>'); ?>   
                </td>
                <td>
                <?php echo anchor("user/hapus/$user->id_user",'<span class="glyphicon glyphicon-trash text-danger fa-lg" aria-hidden="true"></span>',array('onClick' => "return confirm('Anda yakin data ini akan di HAPUS ?')")); ?>

                </td>
      
            </tr>
            <?php } endforeach; } ?>
                  
          </table>

        </div>
        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      </div>
    </div>

    <?php $this->view('template/js'); ?>
    <script src="<?=base_url()?>asset/datatable/js/jquery-1.11.1.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>asset/datatable/js/dataTables.bootstrap.js"></script>


    <script type="text/javascript">
    $(document).ready( function () {
        $('#example').dataTable();
      } );
</script>
</body>
</html>
