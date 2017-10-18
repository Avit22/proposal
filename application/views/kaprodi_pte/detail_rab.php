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
          <div class="text-center" style="font-size:30px;">DETAIL REKOMENDASI RAB</div><br />
          <div class="container">
  <h2>ID PROPOSAL : <?php echo $id_proposal;?></h2>
  <br />
  <p><strong> RAB DARI PJK</strong></p>
 <table class="table table-striped" id="myTable">
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
    if(isset($rab)){
      foreach ($rab as $row){
      echo "<tr>";
      echo "<td>".$row->barang."</td><td>".$row->harga."</td><td>".$row->jumlah."</td><td>".$row->total."</td>";
      echo "</tr>";
    }
    }
    if(isset($totalrab)){
      foreach ($totalrab as $row){
        echo '<tr><td colspan="3" align="right"><strong>TOTAL</strong></td><td><strong>'.$row->total_rab.'</strong></td></tr>';
      }
    }
    ?>
    </tbody>
  </table>

<p><strong>REKOMENDASI RAB DARI KABAG KEUANGAN</strong></p>
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
    if(isset($rab_keu)){
      foreach ($rab_keu as $row1){
      
      echo "<tr>";
      echo "<td>".$row1->barang."</td><td>".$row1->harga."</td><td>".$row1->jumlah."</td><td>".$row1->total."</td>";
      echo "</tr>";
    }
    }
    if(isset($totalrab_keu)){
      foreach ($totalrab_keu as $row1){
        echo '<tr><td colspan="3" align="right"><strong>TOTAL</strong></td><td><strong>'.$row1->total_rab.'</strong></td></tr>';
      }
    }
    ?>
    </tbody>
  </table>

  <p><strong>INPUT REVISI RAB</strong></p>

  <?php echo form_open('kaprodi_pte/insert_rab/add_rab1/'.$id_proposal,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
    <?php echo validation_errors(); ?>
      <input type="text" id="nb" placeholder="Nama Barang"  name="nb">
      <input type="text" id="harga" placeholder="Harga Barang"  name="harga">
      <input type="text" id="jumlah" placeholder="Jumlah Barang/Item"  name="jumlah">
      <input type="text" id="total" placeholder="Total Harga"  name="total">
    <button>ADD RAB</button>  
    </form>
 <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if(isset($rab)){
      foreach ($rab as $row){
      echo "<tr>";
      echo "<td>".$row->barang."</td><td>".$row->harga."</td><td>".$row->jumlah."</td><td>".$row->total."</td>"."<td><a href='".base_url('kaprodi_pte/insert_rab/update1/').'/'.$id_proposal.'/'.$row->id."'>UPDATE</a></td><td><a href='".base_url('kaprodi_pte/insert_rab/delete_rab1/').'/'.$id_proposal.'/'.$row->id."'>DELETE</a></td>";
      echo "</tr>";
    }
    }
    
    ?>
    </tbody>
  </table>
</div>

<p><strong>Catatan Revisi RAB Kepada Kasubag Keuangan </strong></p>
  <!-- Catatan Revisi -->
  <?php echo form_open('kaprodi_pte/insert_rab/tambah_catatan_rab/'.$id_proposal,array('id' => 'tambah','name' => 'tambah', 'class' => 'form-horizontal')); ?>
        <div class="form-group">
          <label for="catatan" class="col-sm-1 control-label">Catatan Dekan </label>
          <div class="col-sm-11">
            <?php 
           $data = array('name' => 'catatan', 'id' => 'catatan', 'class' => 'form-control', 'placeholder' => 'Masukkan Catatan','rows' => '2');
           echo form_textarea($data); ?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <button type="submit" class="btn btn-primary">Kirim</button>
            
          </div>
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
