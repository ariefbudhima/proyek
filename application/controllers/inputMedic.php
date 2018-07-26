<?php
class inputMEdic extends APT_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('M_inputrad');
      $this->load->model('M_inputlab');
      $this->load->model('M_inputmed');
}

public function index(){
  if (!$this->session->userdata("masuk")){
          redirect("/");
      }
  $role = $this->session->userdata('akses');
  // $this->load->view('laman/radiologi/v_inputradthorax');
  redirect('Dashboard','refresh');
}
public function dataanamnase(){
  $data['anam'] = $this->M_inputmed->getDataAnam();
  $this->laman('laman/medical/v_dataAnam', $data);
}
public function datariwayatkeluarga(){
  $data['riwayat'] = $this->M_inputmed->getDataRiwayat();
  $this->laman('laman/medical/v_dataKeluarga', $data);
}
public function datapemeriksaan(){
  $data['periksa'] = $this->M_inputmed->getDataPeriksa();
  $this->laman('laman/medical/v_dataPemeriksaan', $data);
}


public function inputmedtht(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/medical/v_inputmedtht', $data);
}

public function anamnase(){
  $data['pasien'] = $this->M_inputlab->getdatapas();
  $this->laman('laman/medical/v_inputmedanamnase', $data);
  // $this->load->view('laman/radiologi/v_inputradthorax');
}

public function riwayatkeluarga(){
  $data['pasien'] =  $this->M_inputlab->getdatapas();
  $this->laman('laman/medical/v_inputmedkeluarga', $data);
}

public function pemeriksaanmed(){
  $data['pasien'] = $this->M_inputlab->getdatapas();
  $this->laman('laman/medical/v_inputmedpemeriksaan', $data);
}

public function addanamnasemed(){
  $data = array(
    'kdPasien' => $this->input->post('kdPasien'),
    'hepatitis' => $this->input->post('hepatitis'),
    'tbc' => $this->input->post('tbc'),
    'tbcThn' => $this->input->post('tbcTahun'),
    'hipertensi' => $this->input->post('hipertensi'),
    'diabetes' => $this->input->post('diabetes'),
    'alergi' => $this->input->post('alergi'),
    'operasi' => $this->input->post('operasi'),
    'jantung' => $this->input->post('jantung'),
    'inap' => $this->input->post('inap'),
    'patah' => $this->input->post('patah'),
    'obat' => $this->input->post('obat')
  );
  $this->M_inputmed->addanamnase($data);
  redirect('inputMedic/dataanamnase');
}

public function addkeluargamed(){
  $data = array(
    'kdPasien' => $this->input->post('kdPasien'),
    'jantung' => $this->input->post('jantung'),
    'dtinggi' => $this->input->post('dtinggi'),
    'kmanis' => $this->input->post('kmanis'),
    'stroke' => $this->input->post('stroke'),
    'paru' => $this->input->post('paru'),
    'kanker' => $this->input->post('kanker'),
    'gjiwa' => $this->input->post('gjiwa'),
    'ginjal' => $this->input->post('ginjal'),
    'scerna' => $this->input->post('scerna'),
    'lainnya' => $this->input->post('lainnya'),
    'detLainnya' => $this->input->post('detLainnya')
  );
  $this->M_inputmed->addkeluarga($data);
  redirect('inputMedic/datariwayatkeluarga');
}

public function addpemeriksaanmed(){
  $data = array(
    'kdPasien' => $this->input->post('kdPasien'),
    'tinggi' => $this->input->post('tinggi'),
    'berat' => $this->input->post('berat'),
    'nadi' => $this->input->post('nadi'),
    'napas' => $this->input->post('napas'),
    'tensi' => $this->input->post('tensi'),
    'hariankanan' => $this->input->post('hariankanan'),
    'hariankiri' => $this->input->post('hariankiri'),
    'periksakanan' => $this->input->post('periksakanan'),
    'periksakiri' => $this->input->post('periksakiri')
  );
  $this->M_inputmed->addpemeriksaan($data);
  redirect('inputMedic/datapemeriksaan');
}

//
// public function inputradleher(){
//   $query = $this->M_inputlab->getdatapas();
//   $data['pasien'] = $query->result();
//   $this->laman('laman/radiologi/v_inputradleher', $data);
// }
//
// public function inputradneuro(){
//   $query = $this->M_inputlab->getdatapas();
//   $data['pasien'] = $query->result();
//   $this->laman('laman/radiologi/v_inputradneurologi', $data);
// }

}
 ?>
