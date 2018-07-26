<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a href="<?php echo base_url();?>Lihatdata/lookdata"><i class="fa fa-book fa-fw"></i>Daftar Pasien</a>
        </li>

        <!-- <li>
            <a href="<?php echo base_url();?>"><i class="fa fa-plus-square"></i>Tambah Data Laborat</a>
        </li> -->
<!-- bagian tambah laborat harus bisa diedit, jadi kalo ada data pasien yang sama, fungsi yang dipanggil update, bukan add -->
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Tambah Data Radio</span></a>
            <ul>
              <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#">Manajemen Abdomen</a>
                  <ul>
                      <li><a href="<?php echo base_url();?>InputRadio/dataabdomen">Lihat Data Abdomen</a></li>
                      <li><a href="<?php echo base_url();?>InputRadio/inputradabdomen">Tambah Abdomen</a></li>
                  </ul>
              </li>

              <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#">Manajemen Extrimitas</a>
                  <ul>
                      <li><a href="<?php echo base_url();?>InputRadio/dataextrim">Lihat Data Extrimitas</a></li>
                      <li><a href="<?php echo base_url();?>InputRadio/inputradextrim">Tambah Extrimitas</a></li>
                  </ul>
              </li>

              <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#">Manajemen Neurologis</a>
                  <ul>
                      <li><a href="<?php echo base_url();?>InputRadio/dataneuro">Lihat Data Neurologis</a></li>
                      <li><a href="<?php echo base_url();?>InputRadio/inputradneuro">Tambah Neurologis</a></li>
                  </ul>
              </li>

              <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#">Manajemen Thorax dan Leher</a>
                  <ul>
                      <li><a href="<?php echo base_url();?>InputRadio/datathorax">Lihat Data Thorax dan Leher</a></li>
                      <li><a href="<?php echo base_url();?>InputRadio/inputradthorax">Tambah Thorax dan Leher</a></li>
                  </ul>
              </li>

                <!-- <li>
                    <a href="<?php echo base_url();?>InputRadio/inputradthorax">Thorax & Leher</a>
                </li> -->
                <!-- <li>
                    <a href="<?php echo base_url(); ?>InputRadio/inputradabdomen">Abdomen</a>
                </li> -->
                <!-- <li>
                    <a href="<?php echo base_url(); ?>InputRadio/inputradneuro">Neurologis</a>
                </li> -->
                <!-- <li>
                    <a href="<?php echo base_url(); ?>InputRadio/inputradextrim">Extrimitas</a>
                </li> -->


            </ul>
        </li>
    </ul>
</div>
