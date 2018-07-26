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
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Manajemen Laborat</span></a>
            <ul>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Manajemen Hematologi</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputLaborat/datahema">Lihat Data Hematologi</a></li>
                        <li><a href="<?php echo base_url();?>inputLaborat/inputlaborathema">Tambah Hematologi</a></li>
                    </ul>
                </li>
                <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Manajemen Urinalis</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputLaborat/dataurinalis">Lihat Data Urinalis</a></li>
                        <li>  <a href="<?php echo base_url(); ?>inputLaborat/inputlaboraturin">Tambah Urinalis</a></li>
                    </ul>
                  
                </li>
                <!-- <li>
                    <a href="<?php echo base_url(); ?>inputLaborat/inputlaboratpara">Parasitologi</a>
                </li> -->
                <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Manajemen Serologi</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputLaborat/dataserologi">Lihat Data Serologi</a></li>
                        <li><a href="<?php echo base_url(); ?>inputLaborat/inputlaboratsero">Tambah Serologi</a></li>
                    </ul>
                  
                </li>

            </ul>
        </li>
    </ul>
</div>
