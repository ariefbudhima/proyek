
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
                           Selamat Datang, <?php echo $this->session->userdata('nama');?> | <?php echo $this->session->userdata('username');?> | <?php echo ucfirst($this->session->userdata('akses'));?>
                        </h3>

                    </div>

                    <div class="block block-fx-shadow px-4 py-4">
                      <!-- <div class="container-fluid"> -->
      <div class="body col-sm-6">
        <div class="col-sm-3">
          <h4>HEMATOLOGI</h4>
          </div>
        </div>
          <!-- action ke controller yang seharusnya untuk menginputkan data dan akan memanggil model yang bersangkutan -->
        <form action="<?php echo base_url(); ?>inputLaborat/addhemalab" method="post"class="col-lg-12" >
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
               <!-- <br> -->
               <div class="form-group">        
                <label>Hemoglobin</label>
                <input type="text" name="hemoglobin" class=" form-control">
               </div> 
               <div class="form-group">
                  <label>Eritrosit</label>
                  <input type="text" name="eritrosit" class="form-control">
               </div>
               <div class="form-group">
                  <label>Hematokrit</label>
                  <input type="text" name="hematokrit" class="form-control">
               </div>
               <div class="form-group">
                  <label>Lekosit</label>
                  <input type="text" name="leukosit" class="form-control">
               </div>
               <div class="form-group">
                  <label>Laju Endap Darah</label>
                  <input type="text" name="laju" class="form-control">
               </div>
            </div>

            <div class="col-lg-4">
               <div class="form-group">
                  <label>Thrombosit</label>
                  <input type="text" name="trombosit" class="form-control">
               </div>
               <div class="form-group">
                  <label>MCV</label>
                  <input type="text" name="mcv" class="form-control">
               </div>
               <div class="form-group">
                  <label>MCH</label>
                  <input type="text" name="mch" class="form-control">
               </div>
               <div class="form-group">
                  <label>MCHC</label>
                  <input type="text" name="mchc" class="form-control">
               </div>
               <div class="form-group">
                  <label>Basofil</label>
                  <input type="text" name="basofil" class="form-control">
               </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                  <label>Eosinofil</label>
                  <input type="text" name="eosinofil" class="form-control">
              </div>
              <div class="form-group">
                  <label>Batang</label>
                  <input type="text" name="batang" class="form-control">
              </div>
              <div class="form-group">
                  <label>Segmen</label>
                  <input type="text" name="segmen" class="form-control">
              </div>
              <div class="form-group">
                  <label>Limposit</label>
                  <input type="text" name="limposit" class="form-control">
              </div>
              <div class="form-group">
                  <label>Monosit</label>
                  <input type="text" name="monosit" class="form-control">
              </div>
          </div>
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
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
