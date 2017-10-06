<!DOCTYPE html>
<head>
<style>
table, td {
    border: 1px solid black;
}
</style>
</head>
<html lang="en"> 
  <?php $this->view('template/head'); ?>   

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">        
        <?php $this->view('template/sidebar'); ?>
        <?php $this->view('template/top'); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="text-center" style="font-size:30px;">DETAIL REKOMENDASI ITEM</div><br />
          <div class="container">
  <h2>ID PROPOSAL : <?php echo $id_proposal;?></h2>
  <br />
  

<p><strong>REKOMENDASI ITEM DARI STAF PPK</strong></p>
<table class="table table-striped" id="myTable1">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if(isset($item_wd2)){
      foreach ($item_wd2 as $row1){
      
      echo "<tr>";
      echo "<td>".$row1->barang."</td><td>".$row1->harga."</td><td>".$row1->jumlah."</td><td>".$row1->total."</td>";
      echo "</tr>";
    }
    }
    if(isset($totalitem)){
      foreach ($totalitem as $row1){
        echo '<tr><td colspan="3" align="right"><strong>TOTAL</strong></td><td><strong>'.$row1->total_rab.'</strong></td></tr>';
      }
    }
    ?>
    </tbody>
  </table>




</div>

          </div>

        <!-- /page content -->

        <?php $this->view('template/footer'); ?>
      
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
