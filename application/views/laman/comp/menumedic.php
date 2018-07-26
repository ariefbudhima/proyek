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
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-plus-square"></i><span class="sidebar-mini-hide">Manajamen Data Medical</span></a>
            <ul>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Anamnase</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputMedic/dataanamnase">Lihat Data Anamnase</a></li>
                        <li> <a href="<?php echo base_url();?>inputMedic/anamnase">Tambah Anamnase</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Riwayat Keluarga</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputMedic/datariwayatkeluarga">Lihat Data Riwayat Keluarga</a></li>
                        <li> <a href="<?php echo base_url(); ?>inputMedic/riwayatkeluarga">Tambah Riwayat Penyakit Keluarga</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Pemeriksaan</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputMedic/datapemeriksaan">Lihat Data Pemeriksaan</a></li>
                        <li>  <a href="<?php echo base_url(); ?>inputMedic/pemeriksaanmed">Tambah Pemeriksaan</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Kebiasaan</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputMedic/datapemeriksaan">Lihat Data Kebiasaan</a></li>
                        <li>  <a href="<?php echo base_url(); ?>inputMedic/pemeriksaanmed">Tambah Kebiasaan</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Keadaan Umum</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputMedic/datapemeriksaan">Lihat Data Keadaan Umum</a></li>
                        <li>  <a href="<?php echo base_url(); ?>inputMedic/pemeriksaanmed">Tambah Keadaan Umum</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Keluhan</a>
                    <ul>
                        <li><a href="<?php echo base_url();?>inputMedic/datapemeriksaan">Lihat Data Keluhan</a></li>
                        <li>  <a href="<?php echo base_url(); ?>inputMedic/pemeriksaanmed">Tambah Keluhan</a></li>
                    </ul>
                </li>

            </ul>
        </li>
    </ul>
</div>
