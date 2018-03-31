<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sebelum_login extends CI_Controller {

	public function index()
	{
		$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$data['karyawan'] = $this->model_data->select_join_home('anomali', 'basecamp', $join, 'gardu_induk', $join2);
		$this->load->view('home/sebelum_login', $data);
	}

}

/* End of file sebelum_login.php */
/* Location: ./application/controllers/home/sebelum_login.php */