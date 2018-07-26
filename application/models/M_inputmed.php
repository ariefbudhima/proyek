<?php
  class M_inputmed extends CI_Model{
    public function getDataAnam(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('medicalanamnase','pasien.kdPasien = medicalanamnase.kdPasien');
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
      $this->db->insert('medicalkeluarga', $data);
    }

    public function addpemeriksaan($data){
      $this->db->insert('medicalpemeriksaan', $data);
    }
  }
 ?>
