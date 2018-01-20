<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home" class="site_title"><i class="fa fa-desktop"></i> <span>SIMPENGPRO</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <h3>Welcome, <?php echo $this->session->userdata('nama'); ?></h3>
                <ul class="nav side-menu">

                  <?php if($this->session->userdata('tingkatan') == "pjk") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('pjk/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('pjk/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('pjk/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('pjk/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('pjk/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('pjk/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('pjk/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('pjk/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('pjk/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('pjk/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('pjk/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                   <?php if($this->session->userdata('tingkatan') == "kajur_te") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_te/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_te/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_te/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_te/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kajur_te/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kajur_te/terkirim_jurusan'); ?>"><i class="fa fa-list"></i> Lihat Proposal Jurusan</a></li>
                       </ul>
                    </li>

                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_te/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_te/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_te/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_te/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_te/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kajur_te/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kajur_tjp") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tjp/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                       <li><a href="<?php echo site_url('kajur_tjp/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/terkirim_jurusan'); ?>"><i class="fa fa-list"></i> Lihat Proposal Jurusan</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tjp/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tjp/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kajur_tjp/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kajur_tk") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tk/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tk/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tk/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tk/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                       <li><a href="<?php echo site_url('kajur_tk/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                       <li><a href="<?php echo site_url('kajur_tk/terkirim_jurusan'); ?>"><i class="fa fa-list"></i> Lihat Proposal Jurusan</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tk/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tk/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tk/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tk/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tk/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kajur_tk/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>

                  <?php if($this->session->userdata('tingkatan') == "kajur_tm") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tm/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tm/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tm/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_tm/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                       <li><a href="<?php echo site_url('kajur_tm/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kajur_tm/terkirim_jurusan'); ?>"><i class="fa fa-list"></i> Lihat Proposal Jurusan</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tm/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tm/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tm/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_tm/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_tm/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kajur_tm/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kajur_ts") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_ts/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_ts/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_ts/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kajur_ts/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kajur_ts/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                       <li><a href="<?php echo site_url('kajur_ts/terkirim_jurusan'); ?>"><i class="fa fa-list"></i> Lihat Proposal Jurusan</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_ts/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_ts/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_ts/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kajur_ts/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kajur_ts/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kajur_ts/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_boga") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_boga/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_boga/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_boga/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_boga/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_busana") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_busana/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_busana/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_busana/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_busana/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_kecantikan") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_kecantikan/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_kecantikan/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                       <li><a href="<?php echo site_url('kaprodi_kecantikan/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_kecantikan/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_kecantikan/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_pkk") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pkk/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pkk/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pkk/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pkk/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                   <?php if($this->session->userdata('tingkatan') == "kaprodi_ptb") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptb/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptb/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptb/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptb/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_pte") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pte/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pte/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pte/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pte/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_ptik") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptik/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptik/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptik/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptik/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_ptm") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptm/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptm/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ptm/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ptm/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                    <?php if($this->session->userdata('tingkatan') == "kaprodi_pto") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pto/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pto/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_pto/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_pto/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_ta") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ta/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ta/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ta/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ta/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_te") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_te/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_te/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_te/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_te/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "kaprodi_tm") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_tm/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                       <li><a href="<?php echo site_url('kaprodi_tm/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_tm/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_tm/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tm/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>


                   <?php if($this->session->userdata('tingkatan') == "kaprodi_ts") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ts/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                       <li><a href="<?php echo site_url('kaprodi_ts/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ts/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_ts/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_ts/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>

                  <?php if($this->session->userdata('tingkatan') == "kaprodi_tk") { ?>
                  <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_tk/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/notifikasi_rab'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi RAB</a></li>
                       <li><a href="<?php echo site_url('kaprodi_tk/terkirim_prodi'); ?>"><i class="fa fa-list"></i> Lihat Proposal Prodi</a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_tk/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                  <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kaprodi_tk/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('kaprodi_tk/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>
                  <?php } ?>



                  <?php if($this->session->userdata('tingkatan') == "wd1") { ?>

                      <li><a href="<?php echo site_url('wd1/lihat'); ?>"><i class="fa fa-bar-chart-o"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('wd1/revisi'); ?>"><i class="fa fa-bar-chart-o"></i> Revisi Proposal</a></li>
                      <li><a href="<?php echo site_url('wd1/validasi'); ?>"><i class="fa fa-table"></i> Validasi Proposal</a></li>

                  <?php } ?>

                  <?php if($this->session->userdata('tingkatan') == "wd2") { ?>

                        
                      <li><a href="<?php echo site_url('wd2/lihat'); ?>" ><i class="fa fa-edit"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('wd2/revisi'); ?>"><i class="fa fa-bar-chart-o"></i> Revisi Proposal</a></li>
                      <li><a href="<?php echo site_url('wd2/rekomendasi'); ?>"><i class="fa fa-desktop"></i> Input Rekomendasi Item </a></li>
                      <li><a href="<?php echo site_url('wd2/validasi'); ?>"><i class="fa fa-table"></i> Validasi Proposal</a></li>
                                           
                  <?php } ?>

                  <?php if($this->session->userdata('tingkatan') == "wd3") { ?>
                      <li><a href="<?php echo site_url('wd3/lihat'); ?>"><i class="fa fa-edit"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('wd3/revisi'); ?>"><i class="fa fa-bar-chart-o"></i> Revisi Proposal</a></li>
                      <li><a href="<?php echo site_url('wd3/validasi'); ?>"><i class="fa fa-table"></i> Validasi Proposal</a></li>

                   <?php } ?>

                   <?php if($this->session->userdata('tingkatan') == "kabag_tu") { ?>
                      <li><a href="<?php echo site_url('kabag_tu/lihat'); ?>"><i class="fa fa-edit"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kabag_tu/revisi'); ?>"><i class="fa fa-bar-chart-o"></i> Revisi Proposal</a></li>
                      <li><a href="<?php echo site_url('kabag_tu/validasi'); ?>"><i class="fa fa-table"></i> Validasi Proposal</a></li>

                   <?php } ?>

                   <?php if($this->session->userdata('tingkatan') == "kabag_akun") { ?>
                      <li><a href="<?php echo site_url('kabag_akun/lihat'); ?>"><i class="fa fa-edit"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('kabag_akun/revisi'); ?>"><i class="fa fa-bar-chart-o"></i> Revisi Proposal</a></li>
                      <li><a href="<?php echo site_url('kabag_akun/validasi'); ?>"><i class="fa fa-table"></i> Validasi Proposal</a></li>

                   <?php } ?> 

                    <?php if($this->session->userdata('tingkatan') == "kabag_keu") { ?>
                      <li><a href="<?php echo site_url('kabag_keu/lihat'); ?>"><i class="fa fa-edit"></i> Lihat Proposal</a></li>
                       <li><a><i class="fa fa-clone"></i> Revisi <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('kabag_keu/revisi'); ?>"><i class="fa fa-table"></i> Revisi Proposal </a></li>
                      <li><a href="<?php echo site_url('kabag_keu/revisi_rab'); ?>"><i class="fa fa-table"></i> Revisi RAB </a></li>
                      </ul>
                    </li>
                      <li><a href="<?php echo site_url('kabag_keu/rekomendasi'); ?>"><i class="fa fa-desktop"></i> Input Rekomendasi RAB </a></li>
                      <li><a href="<?php echo site_url('kabag_keu/validasi'); ?>"><i class="fa fa-table"></i> Validasi Proposal</a></li>

                    <?php } ?>

                    <?php if($this->session->userdata('tingkatan') == "bendahara") { ?>
                      <li><a href="<?php echo site_url('bendahara/lihat_proposal'); ?>"><i class="fa fa-list"></i> Lihat Proposal Masuk</a></li>
                      <li><a href="<?php echo site_url('bendahara/lihat'); ?>"><i class="fa fa-edit"></i> Lihat Laporan Kegiatan</a></li>
                      <li><a href="<?php echo site_url('bendahara/revisi'); ?>"><i class="fa fa-bar-chart-o"></i> Revisi Laporan Kegiatan</a></li>
                      <li><a href="<?php echo site_url('bendahara/validasi'); ?>"><i class="fa fa-table"></i> Validasi Laporan Kegiatan</a></li>

                    <?php } ?>
                   

                    <?php if($this->session->userdata('tingkatan') == "dekan") { ?>
                    <li><a><i class="fa fa-clone"></i> Proposal Masuk <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('dekan/lihat'); ?>"><i class="fa fa-edit"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('dekan/revisi'); ?>"><i class="fa fa-bar-chart-o"></i> Revisi Proposal</a></li>
                      <li><a href="<?php echo site_url('dekan/validasi'); ?>"><i class="fa fa-table"></i> Validasi  Proposal</a></li>

                       </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i> Rekomendasi <span class="fa fa-chevron-down"></span></a>

                    <ul class="nav child_menu">
                    <li><a href="<?php echo site_url('dekan/rekomendasi_rab'); ?>"><i class="fa fa-edit"></i> Rekomendasi RAB</a></li>
                     <li><a href="<?php echo site_url('dekan/rekomendasi_item'); ?>"><i class="fa fa-edit"></i> Rekomendasi Item</a></li>

                    </ul>
                    <?php } ?>


                  <?php if($this->session->userdata('tingkatan') == "admin") { ?>


                    <li><a><i class="fa fa-edit"></i> Proposal <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('admin/input'); ?>"><i class="fa fa-list"></i> Input Proposal</a></li>
                      <li><a href="<?php echo site_url('admin/terkirim'); ?>"><i class="fa fa-list"></i> Lihat Proposal</a></li>
                      <li><a href="<?php echo site_url('admin/status'); ?>"><i class="fa fa-list"></i> Status Proposal</a></li>
                      <li><a href="<?php echo site_url('admin/notifikasi'); ?>"><i class="fa fa-list"></i> Notifikasi Revisi</a></li>
                      <li><a href="<?php echo site_url('admin/validasi'); ?>"><i class="fa fa-table"></i> Validasi Proposal</a></li>
                      <li><a href="<?php echo site_url('admin/rekomendasi_rab'); ?>"><i class="fa fa-desktop"></i> Input Rekomendasi RAB </a></li>
                      <li><a href="<?php echo site_url('admin/rekomendasi_item'); ?>"><i class="fa fa-desktop"></i> Input Rekomendasi Item </a></li>
                       </ul>
                    </li>
                  
                  <li><a><i class="fa fa-list"></i> Laporan Kegiatan <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('admin/input_laporan'); ?>"><i class="fa fa-table"></i> Input Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('admin/laporan_terkirim'); ?>"><i class="fa fa-table"></i> Lihat Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('admin/notifikasi_laporan'); ?>"><i class="fa fa-table"></i> Revisi Laporan Kegiatan </a></li>
                      <li><a href="<?php echo site_url('admin/status_laporan'); ?>"><i class="fa fa-table"></i> Status Laporan Kegiatan </a></li>
                      </ul>
                    </li>

                   
                    <li><a><i class="fa fa-clone"></i> Panjar Kerja <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">

                      <li><a href="<?php echo site_url('admin/pk'); ?>"><i class="fa fa-table"></i> Cetak Panjar Kerja </a></li>
                      <li><a href="<?php echo site_url('admin/spk'); ?>"><i class="fa fa-table"></i> Cetak Sisa Panjar Kerja </a></li>
                      </ul>
                    </li>

                    <li><a href="<?php echo site_url('user'); ?>"><i class="fa fa-user"></i> User</a></li>
                  <?php } ?>
                  
                      <li><a href="<?php echo site_url('logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                    
                </ul>
               
              </div>

            </div>
            <!-- /sidebar menu -->
            
            
          </div>
        </div>