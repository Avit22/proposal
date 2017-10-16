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
            <?php foreach ($rab as $row) {
  ?>
          <div class="text-center" style="font-size:30px;">INSERT RAB</div><br />
          <div class="container">
  <h2>ID PROPOSAL : <?php echo $id_proposal;?></h2>
  <br />
  <?php echo form_open('kaprodi_pkk/insert_rab/update_rab/'.$row->id.'/'.$id_proposal,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>

    <?php echo validation_errors(); ?>
      <input type="text" id="nb" value="<?php echo $row->barang ?>" placeholder="Nama Barang"  name="nb">
      <input type="text" id="harga" value="<?php echo $row->harga ?>" placeholder="Harga Barang"  name="harga">
      <input type="text" id="jumlah" value="<?php echo $row->jumlah ?>" placeholder="Jumlah Barang/Item"  name="jumlah">
      <input type="text" id="total" value="<?php echo $row->total ?>" placeholder="Total Harga"  name="total">
      <?php } ?>
    <button>UPDATE RAB</button>  
    </form>
</div>
<br>
<script>
function myFunction() {
    var table = document.getElementById("myTable");    
    var rows = table.rows.length;
    console.log("lihat logging"+rows);
    var row = table.insertRow(rows);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var barang = document.getElementById('nb').value;
    var harga = document.getElementById('harga').value;
    var jumlah = document.getElementById('jumlah').value;
    var total = document.getElementById('total').value;
    cell1.innerHTML = barang;
    cell2.innerHTML = harga;
    cell3.innerHTML = jumlah;
    cell4.innerHTML = total;
    document.getElementById('nb').value="";
    document.getElementById('harga').value="";
    document.getElementById('jumlah').value="";
    document.getElementById('total').value="";
    document.getElementById("total_nilai").innerHTML=total_nilai;
}
</script>
<script>
	    function delete_row(){
    	var table = document.getElementById("myTable");
    	var rows = table.rows.length-1;
    	console.log("lihat logging delete"+rows);
    	table.deleteRow(rows);
    }
</script>
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
