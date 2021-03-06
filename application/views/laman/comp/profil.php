<div class="content-header content-header-fullrow px-15">
    <!-- Mini Mode -->
    <div class="content-header-section sidebar-mini-visible-b">
        <!-- Logo -->
        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
            <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
        </span>
        <!-- END Logo -->
    </div>
    <!-- END Mini Mode -->
    <!-- Normal Mode -->
    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-times text-danger"></i>
        </button>
        <!-- END Close Sidebar -->

        <!-- Logo -->
        <div class="content-header-item">
            <a class="link-effect font-w700" href="<?php echo base_url(); ?>">
                <i class="si si-fire text-primary"></i>
                <span class="font-size-xl text-dual-primary-dark">Bri</span><span class="font-size-xl text-primary">Medika</span>
            </a>
        </div>
        <!-- END Logo -->
    </div>
    <!-- END Normal Mode -->
</div>

<div class="content-side content-side-full content-side-user px-10 align-parent">
    <!-- Visible only in normal mode -->
    <div class="sidebar-mini-hidden-b text-center">
        <a class="img-link" href="be_pages_generic_profile.html">
            <img class="img-avatar" src="<?php echo base_url(); ?>assets/img/avatars/avatar15.jpg" alt="">
        </a>
        <ul class="list-inline mt-10">
            <li class="list-inline-item">
                <a class="text-dual-primary-dark font-size-xs font-w600 text-uppercase">
                    <?php echo $this->session->userdata('nama');?>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="link-effect text-dual-primary-dark" href="<?php echo base_url().'Dashboard/logout';?>">
                    <i class="si si-logout"></i> Keluar
                </a>
            </li>
        </ul>
    </div>
    <!-- END Visible only in normal mode -->
</div>
