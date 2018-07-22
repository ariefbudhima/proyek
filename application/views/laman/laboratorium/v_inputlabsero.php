
<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                         <?php $this->load->view('laman/comp/profil');?>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <?php $this->load->view('laman/comp/menulaborat');?>

                        <!-- END Side Navigation -->
                    </div>
                </div>
            </nav>
    <?php $this->load->view('laman/comp/header');?>

            <!-- Main Container -->
<!--             <main id="main-container">-->

                <!-- Page Content -->
                <div class="content">
                    <div class="my-1 ">
                        <h2 class="font-w700 text-black mb-10">Laboratorium</h2>
                        <h3 class="h5 text-muted mb-0">
                           Selamat Datang, <?php echo $this->session->userdata('nama');?> | <?php echo $this->session->userdata('username');?> | <?php echo ucfirst($this->session->userdata('level'));?>
                        </h3>
                    </div>

                    <div class="block block-fx-shadow px-4 py-4">
                      <!-- <div class="container-fluid"> -->
                      <form class="" action="<?php echo base_url(); ?>inputLaborat/addserolab" method="post">
                      <div class="row">
                        <div class="col-lg-4">
                          <?php echo "Pilih Pasien" ?> <br>
                          <div class="tabelku">
                            <?php
                              echo "<select name = 'pasien'>";
                              foreach ($pasien as $key) {
                                echo "<option value = '".$key->idPasien."'>".$key->idPasien."</option>>";
                              }
                              echo "</select>";
                             ?>
                          </div>
                          <br>
                          <?php echo "VDRL/syphilis" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Syphilis" value="Normal"> Normal <br>
                            <input type="radio" name="Syphilis" value="Tidak Normal"> Tidak Normal
                          </div>
                          <br>
                          <?php echo "HbsAg" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="HbsAg" value="Normal"> Normal <br>
                            <input type="radio" name="HbsAg" value="Tidak Normal"> Tidak Normal
                          </div>
                          <br>
                          <?php echo "Widal" ?><br>
                          <div class="tabelku">
                            <input type="radio" name="Widal" value="Normal"> Normal <br>
                            <input type="radio" name="Widal" value="Tidak Normal"> Tidak Normal
                          <br>
                        </div>
                        <br>
                        <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
                    </form>
    <!-- </div> -->
  </div>
</div>
                <!-- END Page Content -->
<!--             </main>-->
            <!-- END Main Container -->

            <!-- Footer -->
            <footer>
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 2.0</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
