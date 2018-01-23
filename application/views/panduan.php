<!DOCTYPE html>
<html lang="en"> 
  
<?php $this->view('template/head'); ?>
  
    
  <body class="nav-md">
  <div class="container body">
      <div class="main_container">

      <?php $this->view('template/sidebar_panduan'); ?>

      <div class="right_col" role="main">

      <div style="font-size:25px;"><center><strong>Panduan Penggunaan Sistem Informasi Manajemen Pengajuan Proposal Anggaran</strong></center> <br></div>

  1. Login Menggunakan Username dan Password Sikadu. <br><br>
  2. Pengajuan Proposal Anggaran Baru Melalui Menu Input Proposal. <br><br>
  3. Pjk Bisa Melihat Proposal Yang Telah Diinput Pada Menu Lihat Proposal. <br><br>
  4. Pemantauan Proposal Bisa Dilakukan Melalui Menu Status Proposal. <br><br>
  5. Proposal Yang Telah Disetujui Ditandai Dengan Status Proposal Yang Telah Disetujui Oleh Dekan. <br><br>
  6. PJK Bisa Melakukan Pencetakan Panjar Kerja Sebagai Bukti Pencairan Dana Sebesar 70%  Dari Total Dana Yang Diberikan. <br><br>
  7. Setelah Melakukan Kegiatan, PJK Diwajibkan Melakukan Upload Laporan Kegiatan Yang Berisi Rincian Dana, Bukti Penggunaan Dana, Serta Dokumentasi Kegiatan. <br><br>
  8. Laporan Kegiatan Yang Telah Diterima dan Distejui Dapat Dilihat Pada Menu Status Laporan Kegiatan <br> <br>
  9. PJK Bisa Mencetak Sisa Panjar Kerja Untuk Melakukan Pencairan Sisa Dana Sebesar 30%. <br><br>
 10. Dalam menginputkan nilai uang jangan menggunakan tanda titik(.) ataupun koma (,), inputkan angka saja misal 1000 maka akan dikonversi secara otomatis menjadi Rp. 1.000,- <br><br>
 11. Berikut Adalah Alur Pengajuan Proposal Anggaran Fakultas Teknik Universitas Negeri Semarang.<br><br>
     <img width=700 height=450 src='assets/image/alur.png' /> 
 </div>
</div>
<?php $this->view('template/footer'); ?>

 </div>
 </div>
 <?php $this->view('template/js'); ?>
  </body>
  </html>