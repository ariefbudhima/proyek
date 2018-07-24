<?php
  class M_inputlab  extends CI_Model{
    public function getdatapas(){
      $this->db->select('kdPasien,nmPasien');
      $this->db->from('pasien');
      $query = $this->db->get()->result();
      return $query;
    }
    public function getDataHema(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('labhema','pasien.kdPasien = labhema.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }
    public function getDataUrin(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('laburin','pasien.kdPasien = laburin.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }
    public function getDataSero(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('labsero','pasien.kdPasien = labsero.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }

    public function addhema($data){
      $this->db->select('Max(idHema)+1 as id');
      $q = $this->db->get('labhema')->row()->id;
      if($q == NULL){
        $id = 0;
				$input = array(
					'idHema' => $id+1,
					'kdPasien' => $data['kdPasien'],
					'eritrosit' => $data['eritrosit'],
					'hemoglobin' => $data['hemoglobin'],
					'hematokrit' => $data['hematokrit'],
					'leukosit' => $data['leukosit'],
					'laju' => $data['laju'],
					'trombosit' => $data['trombosit'],
					'mcv' => $data['mcv'],
					'mch' => $data['mch'],
					'mchc' => $data['mchc'],
					'basofil' => $data['basofil'],
					'eosinofil' => $data['eosinofil'],
					'batang' => $data['batang'],
					'segmen' => $data['segmen'],
					'limposit' => $data['limposit'],
					'monosit' => $data['monosit'],
        );
        $this->db->insert('labhema', $input);
      }
      else{
        $input = array(
					'idHema' => $q,
          'kdPasien' => $data['kdPasien'],
          'eritrosit' => $data['eritrosit'],
					'hemoglobin' => $data['hemoglobin'],
					'hematokrit' => $data['hematokrit'],
					'leukosit' => $data['leukosit'],
					'laju' => $data['laju'],
					'trombosit' => $data['trombosit'],
					'mcv' => $data['mcv'],
					'mch' => $data['mch'],
					'mchc' => $data['mchc'],
					'basofil' => $data['basofil'],
					'eosinofil' => $data['eosinofil'],
					'batang' => $data['batang'],
					'segmen' => $data['segmen'],
					'limposit' => $data['limposit'],
					'monosit' => $data['monosit'],
        );
        $this->db->insert('labhema', $input);
      }
    
    }

    public function addurin($data){
      $this->db->select('Max(idUrin)+1 as id');
      $q = $this->db->get('laburin')->row()->id;
      if($q == NULL){
        $id = 0;
				$input = array(
					'idUrin' => $id+1,
					'kdPasien' => $data['kdPasien'],
					'warna' => $data['warna'],
					'jernih' => $data['jernih'],
					'bj' => $data['bj'],
					'ph' => $data['ph'],
					'protein' => $data['protein'],
					'glukosa' => $data['glukosa'],
					'bilirubin' => $data['bilirubin'],
					'urobilinogen' => $data['urobilinogen'],
					'nitrit' => $data['nitrit'],
					'darah' => $data['darah'],
					'leukosit' => $data['leukosit'],
					'sEritrosit' => $data['sEritrosit'],
					'sLeukosit' => $data['sLeukosit'],
					'sEpitel' => $data['sEpitel'],
					'kristal' => $data['kristal'],
        );
        $this->db->insert('laburin', $input);
      }
      else{
        $input = array(
					'idUrin' => $q,
					'kdPasien' => $data['kdPasien'],
					'warna' => $data['warna'],
					'jernih' => $data['jernih'],
					'bj' => $data['bj'],
					'ph' => $data['ph'],
					'protein' => $data['protein'],
					'glukosa' => $data['glukosa'],
					'bilirubin' => $data['bilirubin'],
					'urobilinogen' => $data['urobilinogen'],
					'nitrit' => $data['nitrit'],
					'darah' => $data['darah'],
					'leukosit' => $data['leukosit'],
					'sEritrosit' => $data['sEritrosit'],
					'sLeukosit' => $data['sLeukosit'],
					'sEpitel' => $data['sEpitel'],
					'kristal' => $data['kristal'],
        );
        $this->db->insert('laburin', $input);
      }
    }

    public function addsero($data){
			$this->db->select('Max(idSero)+1 as id');
      $q = $this->db->get('labsero')->row()->id;
      if($q == NULL){
				$id = 0;
				$input = array(
					'idSero' => $id+1,
					'kdPasien' => $data['kdPasien'],
					'vdrl' => $data['vdrl'],
					'hbasg' => $data['hbasg'],
					'widal' => $data['widal']
					
				);
				$this->db->insert('labsero', $input);
			}
			else{
				$input = array(
					'idSero' => $q,
					'kdPasien' => $data['kdPasien'],
					'vdrl' => $data['vdrl'],
					'hbasg' => $data['hbasg'],
					'widal' => $data['widal']
				);
				$this->db->insert('labsero', $input);
			}
	}
}

 ?>
