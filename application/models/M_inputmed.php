<?php
  class M_inputmed extends CI_Model{
    public function getDataAnam(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('medicalanamnase','pasien.kdPasien = medicalanamnase.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }
    public function getDataRiwayat(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('medicalkeluarga','pasien.kdPasien = medicalkeluarga.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }
    public function getDataPeriksa(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('medicalpemeriksaan','pasien.kdPasien = medicalpemeriksaan.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }
    public function addanamnase($data){
      $this->db->select('Max(idAnamnase)+1 as id');
      $q = $this->db->get('medicalanamnase')->row()->id;
      if($q == NULL){
        $id = 0;
				$input = array(
					'idAnamnase' => $id+1,
					'kdPasien' => $data['kdPasien'],
					'Hepatitis' => $data['hepatitis'],
					'TBC' => $data['tbc'],
					'tbcTahun' => $data['tbcThn'],
					'Hipertensi' => $data['hipertensi'],
					'Diabetes' => $data['diabetes'],
					'Alergi' => $data['alergi'],
					'Operasi' => $data['operasi'],
					'Jantung' => $data['jantung'],
					'Inap' => $data['inap'],
					'PTulang' => $data['patah'],
					'ObatRutin' => $data['obat']
					
				);
				$this->db->insert('medicalanamnase', $input);

      }else{
        $input = array(
					'idAnamnase' => $q,
					'kdPasien' => $data['kdPasien'],
					'Hepatitis' => $data['hepatitis'],
					'TBC' => $data['tbc'],
					'tbcTahun' => $data['tbcThn'],
					'Hipertensi' => $data['hipertensi'],
					'Diabetes' => $data['diabetes'],
					'Alergi' => $data['alergi'],
					'Operasi' => $data['operasi'],
					'Jantung' => $data['jantung'],
					'Inap' => $data['inap'],
					'PTulang' => $data['patah'],
					'ObatRutin' => $data['obat']
					
				);
				$this->db->insert('medicalanamnase', $input);
      }
    }

    public function addkeluarga($data){
      $this->db->select('Max(idKeluarga)+1 as id');
      $q = $this->db->get('medicalkeluarga')->row()->id;
      if($q == NULL){
        $id = 0;
				$input = array(
					'idKeluarga' => $id+1,
					'kdPasien' => $data['kdPasien'],
					'jantung' => $data['jantung'],
					'dTinggi' => $data['dTinggi'],
					'kmanis' => $data['kmanis'],
					'stroke' => $data['stroke'],
					'paru' => $data['paru'],
					'kanker' => $data['kanker'],
					'gjiwa' => $data['gjiwa'],
					'ginjal' => $data['ginjal'],
					'scerna' => $data['scerna'],
					'lainnya' => $data['lainnya'],
					'detLainnya' => $data['detLainnya']
					
				);
        $this->db->insert('medicalkeluarga', $data);
      }else{
        $input = array(
					'idKeluarga' => $q,
					'kdPasien' => $data['kdPasien'],
					'jantung' => $data['jantung'],
					'dTinggi' => $data['dTinggi'],
					'kmanis' => $data['kmanis'],
					'stroke' => $data['stroke'],
					'paru' => $data['paru'],
					'kanker' => $data['kanker'],
					'gjiwa' => $data['gjiwa'],
					'ginjal' => $data['ginjal'],
					'scerna' => $data['scerna'],
					'lainnya' => $data['lainnya'],
					'detLainnya' => $data['detLainnya']
					
				);
        $this->db->insert('medicalkeluarga', $data);
      }
    }

    public function addpemeriksaan($data){
      $this->db->select('Max(idPemeriksaan)+1 as id');
      $q = $this->db->get('medicalpemeriksaan')->row()->id;
      if($q == NULL){
        $id = 0;
				$input = array(
					'idPemeriksaan' => $id+1,
					'kdPasien' => $data['kdPasien'],
					'tinggi' => $data['tinggi'],
					'berat' => $data['berat'],
					'nadi' => $data['nadi'],
					'napas' => $data['napas'],
					'tensi' => $data['tensi'],
					'hariankiri' => $data['hariankiri'],
					'hariankanan' => $data['hariankanan'],
					'periksakiri' => $data['periksakiri'],
					'periksakanan' => $data['periksakanan']
					
				);
        $this->db->insert('medicalpemeriksaan', $data);
      }else{
        $input = array(
					'idPemeriksaan' => $q,
          'kdPasien' => $data['kdPasien'],
					'tinggi' => $data['tinggi'],
					'berat' => $data['berat'],
					'nadi' => $data['nadi'],
					'napas' => $data['napas'],
					'tensi' => $data['tensi'],
					'hariankiri' => $data['hariankiri'],
					'hariankanan' => $data['hariankanan'],
					'periksakiri' => $data['periksakiri'],
					'periksakanan' => $data['periksakanan']
					
				);
        $this->db->insert('medicalpemeriksaan', $data);
      }
    
    }
    public function insertKebiasaan($data){
      $this->db->select('Max(idKebiasaan)+1 as id');
      $q = $this->db->get('medicalkebiasaan')->row()->id;
      if($q == NULL){
        $id = 0;
				$input = array(
					'idKebiasaan' => $id+1,
					'kdPasien' => $data['kdPasien'],
					'olahraga' => $data['olahraga'],
					'rokok' => $data['rokok'],
					'kopi' => $data['kopi'],
					'alkohol' => $data['alkohol']
					
				);
        $this->db->insert('medicalkebiasaan', $input);
      }else{
        $input = array(
					'idKebiasaan' => $q,
          'kdPasien' => $data['kdPasien'],
					'olahraga' => $data['olahraga'],
					'rokok' => $data['rokok'],
					'kopi' => $data['kopi'],
					'alkohol' => $data['alkohol']
				);
        $this->db->insert('medicalkebiasaan', $input);
      }
    
    }
  }
 ?>
