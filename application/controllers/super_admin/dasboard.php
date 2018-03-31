<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login') == "sudah login") {
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = tempat.id";
				$join4 = "anomali.peralatan = peralatan_ano_bay.id_alat";
				$join5 = "anomali.jenis_anomali = ano.id";
				
				$data['karyawan'] = $this->model_data->select_join('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'tempat', $join3, 'peralatan_ano_bay', $join4, 'ano', $join5);
				$data['main_view'] = 'super_admin/dasboard_super';
				$this->load->view('super_admin/template_admin', $data);
	}else{
		redirect(base_url('index.php/user/auth'));
	}
	}

}

/* End of file dasboard.php */
/* Location: ./application/controllers/super_admin/dasboard.php */