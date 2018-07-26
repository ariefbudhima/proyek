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
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/medical/v_inputmedkeluarga', $data);
}

public function pemeriksaanmed(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
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
  redirect('/');
}

public function addkeluargamed(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Jantung' => $this->input->post('jantung'),
    'DTinggi' => $this->input->post('dtinggi'),
    'Kmanis' => $this->input->post('kmanis'),
    'Stroke' => $this->input->post('Stroke'),
    'Paru' => $this->input->post('Paru'),
    'Kanker' => $this->input->post('Kanker'),
    'GJiwa' => $this->input->post('gjiwa'),
    'Ginjal' => $this->input->post('Ginjal'),
    'SCerna' => $this->input->post('scerna'),
    'Lainnya' => $this->input->post('Lainnya')
  );
  $this->M_inputmed->addkeluarga($data);
  redirect('/');
}

public function addpemeriksaanmed(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Tinggi' => $this->input->post('tinggi'),
    'Berat' => $this->input->post('Berat'),
    'Nadi' => $this->input->post('Nadi'),
    'Pernapasan' => $this->input->post('Pernapasan'),
    'Tensi' => $this->input->post('tensi'),
    'Harihari' => $this->input->post('Harihari'),
    'Periksa' => $this->input->post('Periksa')
  );
  $this->M_inputmed->addpemeriksaan($data);
  redirect('/');
}

public function dataabdomen(){
  $data['abdomen'] = $this->M_inputlab->getDataHema();
  $this->laman('laman/laboratorium/v_dataHema', $data);
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
