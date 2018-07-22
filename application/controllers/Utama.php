<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends APT_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    public function index()
    {
      if ($this->session->userdata('masuk')){
        redirect('Dashboard','refresh');
      }
      $this->laman('v_login');
    }

    public function login(){
        $uname = $this->input->post('uname');
        $pass = $this->input->post('pass');
        $log = $this->User->verify($uname,$pass);
        if ($log->num_rows()>0){
            $this->session->set_userdata('masuk',TRUE);
		        $this->session->set_userdata('username',$uname);
				    $role = $log->row_array();
            $jabat = $role['jabatan'];
            $this->session->set_userdata('jabatan', $jabat);

            // $this->session->set_userdata('jabatan',$role['jabatan']);
				    if ($role['jabatan']=='Laboratorium') {
    		        $this->session->set_userdata('akses', 'Laborat');
    		        $nama = $role['nama'];
    		        $this->session->set_userdata('nama',$nama);
    		        $Id = $role['id_perawat'];
    		        $this->session->set_userdata('Id',$Id);
				     }
    				else if ($role['jabatan']=='Radiologi') {
      					$this->session->set_userdata('akses', 'Radio');
      					$nama = $role['nama'];
      					$this->session->set_userdata('nama',$nama);
                $Id = $role['id_perawat'];
    		        $this->session->set_userdata('Id',$Id);
    				}
    				else if ($role['jabatan']=='Medical'){
      					$this->session->set_userdata('akses', 'Medical');
      					$nama = $role['nama'];
      					$this->session->set_userdata('nama',$nama);
                $Id = $role['id_perawat'];
    		        $this->session->set_userdata('Id',$Id);
    				}
            redirect('Dashboard','refresh');
            }
          redirect('Utama');
    }

    public function reg(){
        $this->Register->awal();
    }
}
