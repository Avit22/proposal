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
          <div class="text-center" style="font-size:30px;">Laporan Kegiatan Terkirim</div><br />
          <table id="example" class="table table-bordered table-striped header-fixed ">
            <thead>
            <tr>
              <th>No.</th>
              <th>Judul Kegiatan</th>
              <th>Nama PJK</th>
              <th>Tanggal Terkirim</th>
              <th>View Laporan </th>
              <th>Revisi Laporan </th>
              <th>Input Sisa Panjar Kerja</th>
              
           </tr>
            </thead>
            <tbody>
            <?php $i =1; if(!empty($laporane)) {
            foreach($laporane as $laporan) : { ?>
           <tr data-toggle="modal" data-target="myModal" class="noExl">
                <td><?php echo $i++; ?></td>
                
                <td><?php echo $laporan->judul; ?></td>
                <td><?php echo $laporan->nama_pjk; ?></td>
                <td><?php echo $laporan->tgl_input; ?></td>
                <td><?php echo '<a href="'.base_url('assets/image/').'/'.$laporan->file1.'"><span class="glyphicon glyphicon-book text-primary fa-lg" aria-hidden="true" title="View Proposal"></span></a>'; ?>   
                </td>
                <td><?php echo anchor("bendahara/laporan_terkirim/revisi/$laporan->id_laporan",'<span class="glyphicon glyphicon-tags text-primary fa-lg" aria-hidden="true" title="View Laporan"></span>'); ?>   
                </td>
                <td><?php echo anchor("bendahara/detail_proposal/input_sisa_panjar/$laporan->id_proposal",'<span class="glyphicon glyphicon-pencil text-primary fa-lg" aria-hidden="true" title="View Proposal"></span>'); ?>   
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
