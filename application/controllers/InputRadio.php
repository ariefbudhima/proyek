<?php
class inputRadio extends APT_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('M_inputrad');
      $this->load->model('M_inputlab');
}

public function index(){
  if (!$this->session->userdata("masuk")){
          redirect("/");
      }
  $role = $this->session->userdata('akses');
  // $this->load->view('laman/radiologi/v_inputradthorax');
  redirect('Dashboard','refresh');
}

public function inputradthorax(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradthorax', $data);
  // $this->load->view('laman/radiologi/v_inputradthorax');
}

public function inputradabdomen(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradabdomen', $data);
}

public function inputradleher(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradleher', $data);
}

public function inputradneuro(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradneurologi', $data);
}

public function addthoraxrad(){
  $idobs = $this->db->query('SELECT * FROM observasi');
  $idobs = $idobs->num_rows();
  $cekprk = $this->db->query('SELECT MAX(pemeriksaan_ke) from observasi where idPasien ='.'"'.$this->input->post('pasien').'"');
  $cekprk = $cekprk->result();
  if (!$cekprk) {
    $cekprk =0;
  }

  $try = ['Bentuk','Ekspansi','Palpasi','Perkusi','Auskultasi','Lainnya'];

  $dt = array(
    '0' => $this->input->post('pasien'),
    '1' => $this->input->post('Bentuk'),
    '2' => $this->input->post('Ekspansi'),
    '3' => $this->input->post('Palpasi'),
    '4' => $this->input->post('Perkusi'),
    '5' => $this->input->post('Auskultasi'),
    '6' => $this->input->post('Lainnya'),
  );

  for ($i=0; $i < 7; $i++) {
    if ($dt[$i]) {
      $iddet = $this->db->query('SELECT * FROM det_pemeriksaan as D join pemeriksaan as P where D.nm_detpemeriksaan = '.'"'.$try[$i].'" and P.nmpemeriksaan = "Thorax"');
      $iddet = $iddet->result();
      var_dump($iddet);
      $data = array(
          'idObservasi' => $idobs+=1,
          'tglObservasi' => date('Y-m-d'),
          'id_detpemeriksaan' => $iddet[0]->id_detpemeriksaan,
          'idPemeriksaan' => $iddet[0]->idPemeriksaan,
          'idPerawat' => $this->session->userdata('Id'),
          'idDokter' => 'SMG',
          'idPasien' => $this->input->post('pasien'),
          'pemeriksaan_ke' => (int)$cekprk+1
        );
          // var_dump($data);
          $this->M_inputrad->addthorax($data);
    }
  }
    redirect('/');
}

public function addleherrad(){
  $data = array(
    'IdPasien' => $this->input->post('pasien'),
    'leher' => $this->input->post('LNormal')
  );

  $this->M_inputrad->addleher($data);
  redirect('/');
}

public function addthtrad(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'dtelinga' => $this->input->post('DTelinga'),
    'ltelinga' => $this->input->post('LTelinga'),
    'tympani' => $this->input->post('Tympani'),
    'hidung' => $this->input->post('Hidung'),
    'sinus' => $this->input->post('Sinus'),
    'faring' => $this->input->post('Faring'),
    'tensil' => $this->input->post('Tensil'),
    'lidah' => $this->input->post('Lidah'),
    'gusi' => $this->input->post('Gusi'),
    'gigi' => $this->input->post('Gigi'),
    'karang' => $this->input->post('karang'),
    'lubanggigi' => $this->input->post('Gberlubang'),
    'tambalgigi' => $this->input->post('TGigi'),
    'gigitanggal' => $this->input->post('GigiTanggal'),
    'gigimiring' => $this->input->post('GigiMiring'),
    'radix' => $this->input->post('Radix')
  );

  $this->M_inputrad->addtht($data);
  redirect('/');
}

public function addabdomenrad(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Bentuk' => $this->input->post('Bentuk'),
    'Palpasi' => $this->input->post('Palpasi'),
    'Hati' => $this->input->post('Hati'),
    'Limpa' => $this->input->post('Limpa'),
    'Ginjal' => $this->input->post('Ginjal'),
    'Rectal' => $this->input->post('Rectal'),
    'Hernia' => $this->input->post('Hernia'),
    'Haemoroid' => $this->input->post('Haemoroid'),
    'Lainnya' => $this->input->post('Lainnya')
  );
  $this->M_inputrad->addabdomen($data);
  redirect('/');
}

public function addneurolograd(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Fisiologi' => $this->input->post('Fisiologi'),
    'Patologis' => $this->input->post('Patologis'),
    'Motor' => $this->input->post('Motor'),
    'Pusat' => $this->input->post('Pusat'),
    'Tepi' => $this->input->post('Tepi'),
    'Lidah' => $this->input->post('Lidah'),
    'Lainnya' => $this->input->post('Lainnya')
  );
  $this->M_inputrad->addneurolog($data);
  redirect('/');
}

public function inputradextrim(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradextrimitas', $data);
}

public function addextrimrad(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Tulang' => $this->input->post('Tulang'),
    'Otot' => $this->input->post('Otot'),
    'jtangan' => $this->input->post('jtangan'),
    'jkaki' => $this->input->post('jkaki'),
    'Lainnya' => $this->input->post('Lainnya')
  );
  $this->M_inputrad->addextrim($data);
  redirect('/');
}

}
 ?>
