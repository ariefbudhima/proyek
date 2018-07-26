
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
                      <div class="body col-sm-12">
                        <div class="col-sm-3">
                        </div>
                        <div class="col-sm-6">
                          <h4>Riwayat Penyakit Keluarga</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputMedic/addkeluargamed" method="post">
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
                                  <label>Penyakit Jantung</label>
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
                              <div class="form-group">
                                  <label>Penyakit Darah Tinggi</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="dtinggi"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="dtinggi"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                              <div class="form-group">
                                  <label>Penyakit Kencing Manis</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="kmanis"  value="ya">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Ya
                                      </label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="kmanis"  value="tidak">
                                      <label class="form-check-label" for="exampleRadios1">
                                          Tidak
                                      </label>
                                  </div>    
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                    <label>Penyakit Stroke</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="stroke"  value="ya">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="stroke"  value="tidak">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Tidak
                                        </label>
                                    </div>    
                                </div>
                              <div class="form-group">
                                    <label>Penyakit Paru/Asma/TBC</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paru"  value="ya">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paru"  value="tidak">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Tidak
                                        </label>
                                    </div>    
                              </div>
                              <div class="form-group">
                                    <label>Penyakit Kanker</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kanker"  value="ya">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kanker"  value="tidak">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Tidak
                                        </label>
                                    </div>    
                              </div>
                              <div class="form-group">
                                    <label>Penyakit Gangguan Jiwa</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gjiwa"  value="ya">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gjiwa"  value="tidak">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Tidak
                                        </label>
                                    </div>    
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="form-group">
                                      <label>Penyakit Ginjal</label>
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="ginjal"  value="ya">
                                          <label class="form-check-label" for="exampleRadios1">
                                              Ya
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="ginjal"  value="tidak">
                                          <label class="form-check-label" for="exampleRadios1">
                                              Tidak
                                          </label>
                                      </div>    
                                </div>
                              <div class="form-group">
                                      <label>Penyakit Saluran Cerna</label>
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="scerna"  value="ya">
                                          <label class="form-check-label" for="exampleRadios1">
                                              Ya
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="scerna"  value="tidak">
                                          <label class="form-check-label" for="exampleRadios1">
                                              Tidak
                                          </label>
                                      </div>    
                                </div>
                                <div class="form-group">
                                <label>Penyakit Lainnya</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="lainnya" id="lainYes" value="Ya">
                                    <label class="form-check-label" for="exampleRadios1">
                                       Ya
                                    </label>
                                    <input class="form-control" type="text" id="detail" name="detLainnya" placeholder="Nama Penyakit">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="lainnya" id="lainNo" value="Tidak">
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
            $("#detail").hide();
            $("#lainYes").click(function () {
                $("#detail").show();
            });
            $("#lainNo").click(function () {
                $("#detail").hide();
            });
        });
        </script>
