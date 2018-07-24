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

    public function addhema($data){
      $this->db->select('Max(idHema)+1 as id');
      $q = $this->db->get('labhema')->row()->id;
      print_r($data);
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
      $this->db->insert('laburin', $data);
    }

    public function addsero($data){
      $this->db->insert('labsero', $data);
    }
  }

 ?>
