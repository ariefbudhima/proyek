
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
                          <h4>Pemeriksaan</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputMedic/addpemeriksaanmed" method="post">
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
                                  <label>Tinggi Badan</label>
                                  <input class="form-control" type="number" name="tinggi">
                              </div>
                              <div class="form-group">
                                  <label>Berat Badan</label>
                                  <input class="form-control" type="number" name="berat">
                              </div>
                              <div class="form-group">
                                  <label>Nadi</label>
                                  <input class="form-control" type="text" name="nadi">
                              </div>
                              <div class="form-group">
                                  <label>Pernapasan</label>
                                  <input class="form-control" type="text" name="napas">
                              </div>
                            </div>

                            <div class="col-lg-8">
                              <div class="row">
                                <div class="col-lg-10">  
                                    <div class="form-group">
                                        <label>Tensi</label>
                                        <input class="form-control" type="text" name="tensi">
                                    </div>
                                  </div>
                                </div>
                             <div class="row">
                              <div class="col-lg-7"> <label> Mata</label></div>
                             </div>
                             <div class="row">
                              <div class="col-lg-6">  <label>Kanan</label></div>
                              <div class="col-lg-6">  <label>Kiri</label></div>
                             </div>
                              <div class="row">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label>Sehari-hari</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hariankanan"  value="kacamata">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Kacamata
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hariankanan"  value="softlens">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Softlens
                                        </label>
                                    </div>    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hariankanan"  value="Tidak Menggunakan Keduanya">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Tidak Menggunakan Keduanya
                                        </label>
                                    </div>    
                                  </div>
                              </div> <!--End Of Kanan-->
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label>Sehari-hari</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hariankiri"  value="kacamata">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Kacamata
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hariankiri"  value="softlens">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Softlens
                                        </label>
                                    </div>    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hariankiri"  value="Tidak Menggunakan Keduanya">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Tidak Menggunakan Keduanya
                                        </label>
                                    </div>    
                                  </div>
                              </div><!--End Of Kiri-->
                              </div> <!--End Of Row-->
                              <div class="row">
                                <div class="col-lg-6">  <label>Ketika Diperiksa</label></div>
                              </div>
                              <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periksakanan"  value="kacamata">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Kacamata
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periksakanan"  value="softlens">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Softlens
                                        </label>
                                    </div>    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periksakanan"  value="Tidak Menggunakan Keduanya">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Tidak Menggunakan Keduanya
                                        </label>
                                    </div>    
                                  </div>
                              </div> <!--End Of Kanan-->
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periksakiri"  value="kacamata">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Kacamata
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periksakiri"  value="softlens">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Softlens
                                        </label>
                                    </div>    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periksakiri"  value="Tidak Menggunakan Keduanya">
                                        <label class="form-check-label" for="exampleRadios1">
                                        Tidak Menggunakan Keduanya
                                        </label>
                                    </div>    
                                  </div>
                              </div><!--End Of Kiri-->
                              </div>
                              
                             </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                          </div>
                            </div>
                        </form>

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
