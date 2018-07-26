<?php
  class M_inputrad extends CI_Model{
    public function addthorax($data){
      $this->db->insert('radiothorax', $data);
    }

    public function addleher($data){
      $this->db->insert('radioleher', $data);
    }

    public function addtht($data){
      $this->db->insert('radiotht', $data);
    }

    public function addneurolog($data){
      $this->db->insert('radioneuro', $data);
    }

    public function addabdomen($data){
      $this->db->insert('radioabdomen', $data);
    }
    public function addextrim($data){
      $this->db->insert('radioextrim', $data);
      // var_dump($data);
    }

    public function getDataAbdomen(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('radioabdomen','pasien.kdPasien = radioabdomen.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }

    public function getDataExtrim(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('radioextrim','pasien.kdPasien = radioextrim.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }

    public function getDataNeuro(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('radioneuro','pasien.kdPasien = radioneuro.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }

    public function getDataThorax(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('radiothorax','pasien.kdPasien = radiothorax.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }

    public function getDataLeher(){
      $this->db->select('*');
      $this->db->from('pasien');
      $this->db->join('radioleher','pasien.kdPasien = radioleher.kdPasien');
      $query = $this->db->get()->result();
      return $query;
    }
    // tambahin get data yang lain
  }
 ?>
