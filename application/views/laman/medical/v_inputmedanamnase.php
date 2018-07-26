
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
                           Selamat Datang, <?php echo $this->session->userdata('nama');?> | <?php echo $this->session->userdata('username');?> | <?php echo ucfirst($this->session->userdata('akses'));?>
                        </h3>

                    </div>
                    <div class="block block-fx-shadow px-4 py-4">
                      <div class="row">
                        <div class="col-sm-3">
                          <h4>Anamnase</h4>
                        </div>
                      </div>
                        <form action="<?php echo base_url(); ?>inputMedic/addanamnasemed" method="post" class="col-lg-12" >
                       <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Pilih Pasien</label>
                                <select name="kdPasien" class="form-control">
                                    <option value=""> - Pilih Pasien -</option>
                                    <?php
                                    foreach($pasien as $data):
                                    ?>
                                    <option value="<?php echo $data->kdPasien;?>"><?php echo $data->nmPasien;?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                              <label>Riwayat Penyakit Hepatitis A/B/C</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hepatitis" value="A">
                                    <label class="form-check-label" for="exampleRadios1">
                                        A
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hepatitis"  value="B">
                                    <label class="form-check-label" for="exampleRadios1">
                                        B
                                    </label>
                                </div>    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hepatitis"  value="C">
                                    <label class="form-check-label" for="exampleRadios1">
                                        C
                                    </label>
                                </div>    
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hepatitis"  value="Tidak Ada">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Tidak Ada
                                    </label>
                                </div>    
                            </div>
                            <div class="form-group">
                                <label>Riwayat Pengobatan TBC</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tbc" id="tbcYes" value="Ya">
                                    <label class="form-check-label" for="exampleRadios1">
                                       Ya
                                    </label>
                                    <input class="form-control" type="text" id="tahun" name="tbcTahun" placeholder="Tahun">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tbc" id="tbcNo" value="Tidak">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Tidak
                                    </label>
                                </div>    
                            </div>
                            <div class="form-group">
                                <label>Hipertensi</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hipertensi"  value="ya">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hipertensi"  value="tidak">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Tidak
                                    </label>
                                </div>    
                            </div>
                          </div> <!--END OF ROW-->
                            <div class="col-lg-4">
                              <div class="form-group">
                                  <label>Diabetes Melitus</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="diabetes"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="diabetes"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                              <div class="form-group">
                                  <label>Alergi</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="alergi"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="alergi"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                              <div class="form-group">
                                  <label>Riwayat Rawat Operasi</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="operasi"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="operasi"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                              <div class="form-group">
                                  <label>Riwayat Penyakit Jantung</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jantung"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jantung"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                  <label>Pengobatan Rawat Inap</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="inap"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="inap"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                              <div class="form-group">
                                  <label>Patah Tulang</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="patah"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="patah"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                              <div class="form-group">
                                  <label>Obat Yang Rutin Dikonsumsi</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="obat"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="obat"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
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
        <script src="<?php echo base_url();?>assets/js/core/jquery.min.js"></script>
        <script>
          $(document).ready(function () {
            $("#tahun").hide();
            $("#tbcYes").click(function () {
                $("#tahun").show();
            });
            $("#tbcNo").click(function () {
                $("#tahun").hide();
            });
        });
        </script>
