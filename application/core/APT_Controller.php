<?php
	Class APT_Controller extends CI_Controller{
		function laman($konten,$data = NULL){
			$data['konten'] = $this->load->view($konten, $data, TRUE);
			$data['title'] = $this->uri->segment(2);
			$this->load->view('template/index', $data, FALSE);
		}


	}
?>
