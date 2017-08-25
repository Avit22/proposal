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
          <div class="text-center" style="font-size:30px;">Data Surat Pembuatan KTM</div><br />
          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama Mahasiswa</th>
              <th>NIM</th>
              <th>Prodi</th>
              <th>Tgl Masuk</th>
              <th>Cetak</th>
              <th>Edit</th>
              <th>Hapus</th>
            </tr>
            </thead>
            <tbody>
            <?php $i =1; if(!empty($data_ktm)) {
            foreach($data_ktm as $ktm) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
                <td><?php echo $ktm->nama; ?></td>
                <td><?php echo $ktm->nim; ?></td>
                <td><?php foreach($data_prodi as $prodi) {
                    if($prodi->id_prodi == $ktm->id_prodi)
                      echo $prodi->nama_prodi;
                } ?></td>
                <td><?php echo $ktm->tanggal; ?></td>
                <td><?php echo anchor("simft/ktm/pdf/$ktm->id_ktm",'<span class="glyphicon glyphicon-print text-primary fa-lg" aria-hidden="true" title="Cetak"></span>',array('target' => '_blank')); ?>   
                </td>
                <td><?php echo anchor("simft/ktm/edit/$ktm->id_ktm",'<span class="glyphicon glyphicon-edit text-primary fa-lg" aria-hidden="true" title="Edit"></span>'); ?>   
                </td>
                <td>
                <?php echo anchor("simft/ktm/hapus/$ktm->id_ktm",'<span class="glyphicon glyphicon-trash text-danger fa-lg" aria-hidden="true"></span>',array('onClick' => "return confirm('Anda yakin data ini akan di HAPUS ?')")); ?>

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
