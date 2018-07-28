
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
                          <h4>Keadaan Umum</h4>
                          </div>
                        </div>
                        <form class="" action="<?php echo base_url(); ?>inputMedic/addkeluhan" method="post">
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
                                <div class="form-check">
                                    <input class="form-check-input" name="flu" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Flu Like Syndrom
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="perut" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Keluhan Perut
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="sesak" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sesak
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="haemoroid" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Haemoroid Grade I/II/III
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="kulit" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Keluhan Kulit
                                    </label>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="mengandung" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                     Sedang Mengandung
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="nyeridada" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Nyeri Dada
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input"name="otot" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                       Keluhan Otot, Tulang Syaraf
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="hernia" type="checkbox" value="ya" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                       Hernia
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Lainnya</label>
                                <input type="text" class="form-control" name="lainnya">
                              </div>
                              </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                          </div>
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
            $("#or").hide();
            $("#orYes").click(function () {
                $("#or").show();
            });
            $("#orNO").click(function () {
                $("#or").hide();
            });
            $("#rok").hide();
            $("#rokYes").click(function () {
                $("#rok").show();
            });
            $("#rokNo").click(function () {
                $("#rok").hide();
            });
            $("#kop").hide();
            $("#kopiYes").click(function () {
                $("#kop").show();
            });
            $("#kopiNo").click(function () {
                $("#kop").hide();
            });
            $("#alk").hide();
            $("#alkoholYes").click(function () {
                $("#alk").show();
            });
            $("#alkoholNo").click(function () {
                $("#alk").hide();
            });
        });
        </script>