<?php
class inputLaborat extends APT_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('M_inputlab');
}

public function index(){
  if (!$this->session->userdata("masuk")){
          redirect("/");
      }
  $role = $this->session->userdata('akses');
  redirect('Dashboard','refresh');
}

public function inputlaborathema(){
  $data['pasien'] = $this->M_inputlab->getdatapas();
  $this->laman('laman/laboratorium/v_inputlabHema', $data);
}
public function dataurinalis(){
  $data['urin'] = $this->M_inputlab->getDataUrin();
  $this->laman('laman/laboratorium/v_dataUrin', $data);
}
public function datahema(){
  $data['hema'] = $this->M_inputlab->getDataHema();
  $this->laman('laman/laboratorium/v_dataHema', $data);
}
public function dataserologi(){
  $data['sero'] = $this->M_inputlab->getDataSero();
  $this->laman('laman/laboratorium/v_dataSero', $data);
}

public function inputlaboraturin(){
  $data['pasien'] = $this->M_inputlab->getdatapas();
  $this->laman('laman/laboratorium/v_inputlaburin', $data);
}

public function inputlaboratsero(){
  $data['pasien'] = $this->M_inputlab->getdatapas();
  $this->laman('laman/laboratorium/v_inputlabsero', $data);
}

public function addhemalab(){

    $data = array(
      'kdPasien' => $this->input->post('kdPasien'),
      'hemoglobin' => $this->input->post('hemoglobin'),
      'eritrosit' => $this->input->post('eritrosit'),
      'hematokrit' => $this->input->post('hematokrit'),
      'leukosit' => $this->input->post('leukosit'),
      'laju' => $this->input->post('laju'),
      'trombosit' => $this->input->post('trombosit'),
      'mcv' => $this->input->post('mcv'),
      'mch' => $this->input->post('mch'),
      'mchc' => $this->input->post('mchc'),
      'basofil' => $this->input->post('basofil'),
      'eosinofil' => $this->input->post('eosinofil'),
      'batang' => $this->input->post('batang'),
      'segmen' => $this->input->post('segmen'),
      'limposit' => $this->input->post('limposit'),
      'monosit' => $this->input->post('monosit')
    );
  $this->M_inputlab->addhema($data);
  redirect('inputLaborat/datahema');

}

public function addurinlab(){
  $data = array(
    'kdPasien' => $this->input->post('kdPasien'),
    'warna' => $this->input->post('wurin'),
    'jernih' => $this->input->post('jernihan'),
    'bj' => $this->input->post('BJ'),
    'ph' => $this->input->post('pH'),
    'protein' => $this->input->post('protein'),
    'glukosa' => $this->input->post('glukosa'),
    'keton' => $this->input->post('keton'),
    'bilirubin' => $this->input->post('bilirubin'),
    'urobilinogen' => $this->input->post('urobilinogen'),
    'nitrit' => $this->input->post('nitrit'),
    'darah' => $this->input->post('darah'),
    'leukosit' => $this->input->post('leukosit'),
    'sEritrosit' => $this->input->post('sEritrosit'),
    'sLeukosit' => $this->input->post('sLeukosit'),
    'sEpitel' => $this->input->post('sEpitel'),
    'kristal' => $this->input->post('kristal')
  );

  $this->M_inputlab->addurin($data);

  redirect('inputLaborat/dataurinalis');
}

public function addserolab(){
  $data = array(
    'kdPasien' => $this->input->post('kdPasien'),
    'vdrl' => $this->input->post('vdrl'),
    'hbasg' => $this->input->post('hbasg'),
    'widal' => $this->input->post('widal')
  );

  $this->M_inputlab->addsero($data);
  redirect('inputLaborat/dataserologi');
}

}
 ?>
