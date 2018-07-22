
<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                         <?php $this->load->view('laman/comp/profil');?>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <?php
                        if ($this->session->userdata('akses')=='Laborat'){
                          $this->load->view('laman/comp/menulaborat');
                        }
                        elseif ($this->session->userdata('akses')=='Radio') {
                          $this->load->view('laman/comp/menuradio');
                        }
                        elseif ($this->session->userdata('akses')=='Medical') {
                          $this->load->view('laman/comp/menumedic');
                        }
                          ?>
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
                        <h2 class="font-w700 text-black mb-10"><?php echo $this->session->userdata('jabatan');?></h2>
                        <h3 class="h5 text-muted mb-0">
                           Selamat Datang, <?php echo $this->session->userdata('nama');?> | <?php echo $this->session->userdata('username');?> | <?php echo ucfirst($this->session->userdata('level'));?>
                        </h3>

                    </div>

                    <script>
                    // script berfungsi dengan baik
                      function funct(id, ket){
                          document.getElementById(id).value = document.getElementById(ket).value;


                      }

                      function radioclick(id){
                        document.getElementById(id).checked = true;
                      }
                    </script>
                    <div class="block block-fx-shadow px-4 py-4">
                          <div class="row">
                            <form class="col-lg-8" action="<?php echo base_url();?>inputRadio/addthoraxrad" method="post">
                            <h4>Thorax</h4>
                            <div class="row">
                            <div class="col-lg-4">
                              <?php echo "Pilih Pasien" ?> <br>
                              <div class="tabelku">
                                <?php
                                  echo "<select name = 'pasien'>";
                                  foreach ($pasien as $key) {
                                    echo "<option value = '".$key->kdPasien."'>".$key->nmPasien."</option>>";
                                  }
                                  echo "</select>";
                                 ?>
                              </div>
                              <br>
                              <?php echo "Bentuk" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Bentuk" value="Normal"> Normal <br>
                                <input type="radio" name="Bentuk" id="bentuk" value=""> Tidak Normal <input type="text" id="ket1" name="keterangan1" value="" onclick="radioclick('bentuk');" onchange="funct('bentuk', 'ket1');">
                              </div>
                              <br>
                              <?php echo "Ekspansi" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Ekspansi" value="Normal"> Normal <br>
                                <input type="radio" name="Ekspansi" id="ekspansi" value=""> Tidak Normal <input type="text" id="ket2" name="keterangan2" value="" onclick="radioclick('ekspansi');" onchange="funct('ekspansi', 'ket2');">
                              </div>
                              <br>
                              <?php echo "Palpasi" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Palpasi" value="Normal"> Normal <br>
                                <input type="radio" name="Palpasi" id="palpasi" value=""> Tidak Normal <input type="text" id="ket3" name="keterangan3" value="" onclick="radioclick('palpasi');" onchange="funct('palpasi', 'ket3');">
                              </div>
                              <br>
                            </div>

                            <div class="col-lg-4">
                              <?php echo "Perkusi" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Perkusi" value="Normal"> Normal <br>
                                <input type="radio" name="Perkusi" id="perkusi" value=""> Tidak Normal <input type="text" id="ket4" name="keterangan4" value="" onclick="radioclick('perkusi');" onchange="funct('perkusi', 'ket4');">
                              </div>
                              <br>
                              <?php echo "Auskultasi" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Auskultasi" value="Normal"> Normal <br>
                                <input type="radio" name="Auskultasi" id="auskultasi" value=""> Tidak Normal <input type="text" id="ket5" name="keterangan5" value="" onclick="radioclick('auskultasi');" onchange="funct('auskultasi', 'ket5');">
                              </div>
                              <br>
                              <?php echo "Lainnya" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Lainnya" id="lainnyanormal" value="" checked> Normal <input type="text" id="ket6" name="keterangan6" value="" onclick="radioclick('lainnyanormal')" onchange="funct('lainnyanormal', 'ket6');"><br>
                                <input type="radio" name="Lainnya" id="lainnyatidak" value=""> Tidak Normal <input type="text" id="ket7" name="keterangan7" value="" onclick="radioclick('lainnyatidak');" onchange="funct('lainnyatidak', 'ket7');">
                              </div>
                              <br>
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <br>
                            <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
                            </div>
                          </form>

                          <form class="col-lg-4" action="<?php echo base_url();?>inputRadio/addleherrad" method="post">
                            <h4>Leher</h4>
                            <div class="row">
                              <div class="col-lg-4">
                                <?php echo "Pilih Pasien" ?> <br>
                                <div class="tabelku">
                                  <?php
                                    echo "<select name = 'pasien'>";
                                    foreach ($pasien as $key) {
                                      echo "<option value = '".$key->kdPasien."'>".$key->nmPasien."</option>>";
                                    }
                                    echo "</select>";
                                   ?>
                                </div>
                                <br>
                                <div>
                                  <?php echo "Leher" ?> <br>
                                  <div class="tabelku">
                                    <input type="radio" name="LNormal" value="Normal"> Normal <br>
                                    <input type="radio" name="LNormal" value="Tidak Normal"> Tidak Normal
                                  </div>
                                </div>
                              </div>
                              </div>
                              <br><br>
                              <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
                              </form>

                        </div>

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
