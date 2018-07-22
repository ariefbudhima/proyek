
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
                        // document.getElementById('bentuk').value = ada;
                          document.getElementById(id).value = document.getElementById(ket).value;
                        // if (document.getElementById('ekspansi').checked) {
                          // document.getElementById('ekspansi').value = document.getElementById('ket2').value;
                          // alert(document.getElementById(ket).value);
                        // }

                      }

                      function radioclick(id){
                        document.getElementById(id).checked = true;
                      }
                    </script>

                    <div class="block block-fx-shadow px-4 py-4">
                      <div class="body col-sm-6">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-3">
                          <h4>Extrimitas</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputRadio/addextrimrad" method="post">
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
                              <?php echo "Kelainan Tulang/Syaraf" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Tulang" value="Normal"> Normal <br>
                                <input type="radio" name="Tulang" id="Tulang" value="Tidak"> Tidak Normal <input type="text" name="keterangan" id="ket1" value="" onclick="radioclick('Fisiologi');" onchange="funct('Fisiologi','ket1');">
                              </div>
                              <br>
                              <?php echo "Kelainan Otot" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Otot" value="Normal"> Normal <br>
                                <input type="radio" name="Otot" id="Otot" value="Tidak"> Tidak Normal <input type="text" name="keterangan" id="ket2" value="" onclick="radioclick('Patologis');" onchange="funct('Patologis','ket2');">
                              </div>
                              <br>
                              <?php echo "Kelainan Jari Tangan" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="jtangan" value="Normal"> Normal <br>
                                <input type="radio" name="jtangan" id="Jtangan" value="Tidak"> Tidak Normal <input type="text" name="keterangan" id="ket3" value="" onclick="radioclick('Motor');" onchange="funct('Motor', 'ket3');">
                              </div>
                              <br>
                            </div>

                            <div class="col-lg-4">
                              <?php echo "Kelainan Jari Kaki" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="jkaki" value="Normal"> Normal <br>
                                <input type="radio" name="jkaki" id="jkaki" value="Tidak"> Tidak Normal <input type="text" name="keterangan" id="ket4" value="" onclick="radioclick('Pusat');" onchange="funct('Pusat', 'ket4');">
                              </div>
                              <br>
                              <?php echo "Lainnya" ?><br>
                              <div class="tabelku">
                                <input type="radio" name="Lainnya" id="lainnyaN" value="Normal"> Normal <input type="text" name="keterangan" id="ket7" value="" onclick="radioclick('lainnyaN');" onchange="funct('lainnyaN', 'ket7');"><br>
                                <input type="radio" name="Lainnya" id="lainnyaT" value="Tidak"> Tidak Normal <input type="text" name="keterangan" id="ket8" value="" onclick="radioclick('lainnyaT');" onchange="funct('lainnyaT','ket8');">
                              </div>
                              <br>
                            </div>
                            <div class="col-lg-6">
                              <br>
                              <input type="submit" value="Submit" style="text-align : center; position : absolute;"> <br>
                            </div>
                          </form>
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
