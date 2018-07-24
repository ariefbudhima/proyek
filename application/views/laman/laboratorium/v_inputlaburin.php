
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
                      <div class="container-fluid">
      <div class="body col-lg-12">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-6">
            <div class="row">
                <h4>URINALIS</h4>
            </div>
        </div>
          <!-- action ke controller yang seharusnya untuk menginputkan data dan akan memanggil model yang bersangkutan -->
        <form action="<?php echo base_url();?>inputLaborat/addurinlab" method="post" class="col-lg-12">
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
                    <label>Warna Urin</label>    
                    <select class="form-control" name="wurin">
                        <option value="">- Pilih Warna Urin - </option>
                        <option value="putih">Putih</option>
                        <option value="bening">Bening</option>
                        <option value="kuning">Kuning Pucat</option>
                        <option value="hijau">Hijau</option>
                        <option value="coklat">Coklat</option>
                        <option value="biru">Biru</option>
                        <option value="hitam">Hitam</option>
                        <option value="berbusa">Berbusa</option>
                        <option value="kemerahan">Kemerahan</option>
                     </select>
                </div>

                 <div class="form-group">
                    <label>Kejernihan</label>   
                    <select class="form-control" name="jernihan" >
                        <option value="jernih">Jernih</option>
                        <option value="keruh">Keruh</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>BJ</label>  
                    <input type="text" name="BJ" class="form-control">
                </div>    
                <div class="form-group">
                    <label>pH</label>  
                    <input type="text" name="pH"  class="form-control"> 
                </div>

                <div class="form-group">
                    <label>Protein</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="protein" id="exampleRadios1" value="positif">
                        <label class="form-check-label" for="exampleRadios1">
                            Positif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="protein" id="exampleRadios1" value="negatif">
                        <label class="form-check-label" for="exampleRadios1">
                            Negatif
                        </label>
                    </div>    
                </div>
                <div class="form-group">
                    <label>Glukosa</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="glukosa"  value="positif">
                        <label class="form-check-label" for="exampleRadios1">
                            Positif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="glukosa"  value="negatif">
                        <label class="form-check-label" for="exampleRadios1">
                            Negatif
                        </label>
                    </div>    
                </div>
        </div> 
           

          <div class="col-lg-4">
            <div class="form-group">
                <label>Keton</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keton" value="positif">
                    <label class="form-check-label" for="exampleRadios1">
                        Positif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keton"  value="negatif">
                    <label class="form-check-label" for="exampleRadios1">
                        Negatif
                    </label>
                </div>    
            </div>
            <div class="form-group">
                <label>Bilirubin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bilirubin" value="positif">
                    <label class="form-check-label" for="exampleRadios1">
                        Positif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bilirubin"  value="negatif">
                    <label class="form-check-label" for="exampleRadios1">
                        Negatif
                    </label>
                </div>    
            </div>
            <div class="form-group">
                <label>Urobilinogen</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="urobilinogen" value="positif">
                    <label class="form-check-label" for="exampleRadios1">
                        Positif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="urobilinogen"  value="negatif">
                    <label class="form-check-label" for="exampleRadios1">
                        Negatif
                    </label>
                </div>    
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="urobilinogen"  value="meningkat">
                    <label class="form-check-label" for="exampleRadios1">
                        Meningkat
                    </label>
                </div>    
            </div>
            <div class="form-group">
                <label>Nitrit</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nitrit" value="positif">
                    <label class="form-check-label" for="exampleRadios1">
                        Positif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="nitrit"  value="negatif">
                    <label class="form-check-label" for="exampleRadios1">
                        Negatif
                    </label>
                </div>    
            </div>
            <div class="form-group">
                <label>Darah</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="darah" value="positif">
                    <label class="form-check-label" for="exampleRadios1">
                        Positif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="darah"  value="negatif">
                    <label class="form-check-label" for="exampleRadios1">
                        Negatif
                    </label>
                </div>    
            </div>
        </div>
          <div class="col-lg-4">
            <div class="form-group">
                    <label>Leukosit</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leukosit" value="positif">
                        <label class="form-check-label" for="exampleRadios1">
                            Positif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leukosit"  value="negatif">
                        <label class="form-check-label" for="exampleRadios1">
                            Negatif
                        </label>
                    </div>    
            </div>
            <div class="form-group">
                <label>Sedimen</label>
            </div>
            <div class="form-group">
                <label>Eritrosit</label>
                <input type="text" name="sEritrosit" class="form-control" placeholder="cth: 0-2"> <br>
            </div>
            <div class="form-group">
                <label>Leukosit</label>
                <input type="text" name="sLeukosit" class="form-control" placeholder="cth: 0-2"> <br>
            </div>
            <div class="form-group">
                <label>Epitel</label>
                <input type="text" name="sEpitel" class="form-control"> <br>
            </div>
            <div class="form-group">
                <label>Kristal</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kristal" value="positif">
                    <label class="form-check-label" for="exampleRadios1">
                        Positif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kristal"  value="negatif">
                    <label class="form-check-label" for="exampleRadios1">
                        Negatif
                    </label>
                </div>    
            </div>
          </div>
          <div class="col-lg-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
          </div>
          </div>
        </form>
      </div>
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
