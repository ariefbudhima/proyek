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
public function datahema(){
  $data['hema'] = $this->M_inputlab->getDataHema();
  $this->laman('laman/laboratorium/v_dataHema', $data);
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
    'idPasien' => $this->input->post('pasien'),
    'Warna' => $this->input->post('wurin'),
    'Kejernihan' => $this->input->post('jernihan'),
    'BJ' => $this->input->post('BJ'),
    'PH' => $this->input->post('pH'),
    'Protein' => $this->input->post('protein'),
    'Glukosa' => $this->input->post('glukosa'),
    'Keton' => $this->input->post('keton'),
    'Bilirubin' => $this->input->post('bilirubin'),
    'Urobilinogen' => $this->input->post('urobilinogen'),
    'Nitrit' => $this->input->post('nitrit'),
    'Darah' => $this->input->post('darah'),
    'Lekosit' => $this->input->post('lekosit'),
    'sEritrosit' => $this->input->post('sEritrosit'),
    'sLekosit' => $this->input->post('sLekosit'),
    'sEpitel' => $this->input->post('sEpitel'),
    'Kristal' => $this->input->post('kristal')
  );

  $this->M_inputlab->addurin($data);
  // $data['idPasien'] = $this->input->post('protein');
  // $this->load->view('laman/v_dashboard', $data); redirect ke model
  redirect('/');
}

public function addserolab(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Syphilis' => $this->input->post('Syphilis'),
    'HbsAg' => $this->input->post('HbsAg'),
    'Widal' => $this->input->post('Widal')
  );

  $this->M_inputlab->addsero($data);
  redirect('/');
}

}
 ?>
