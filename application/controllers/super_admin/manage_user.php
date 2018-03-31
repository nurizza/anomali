<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_user extends CI_Controller {


	public function index(){
		if($this->session->userdata('login') == "sudah login") {
			if($this->session->userdata('status') == "super admin"){
		$data['main_view']= 'super_admin/add_user';
		$this->load->view('super_admin/template_admin', $data);
			}else{
		redirect(base_url('index.php/user/auth'));
			}
	}else{
		redirect(base_url('index.php/user/auth'));
	}
	}

	public function simpan()
	{	if ($this->session->userdata('login') == "sudah login") {
			if($this->session->userdata('status') == "super admin"){
			$data = array(
					'id' => $this->input->post('id'),
				 	'unit_id' => $this->input->post('unit_id'),
				 	'prev_no' =>  $this->input->post('prev_no'),
				 	'nama_lengkap' =>  $this->input->post('nama_lengkap'),
				 	'posisi' =>  $this->input->post('posisi'),
				 	'posisi_lengkap' =>  $this->input->post('posisi_lengkap'),
				 	'email' =>  $this->input->post('email'),
				 	'password' =>  $this->input->post('password'),
				 	'status' =>  $this->input->post('status'),	
				 	'previlage' => NULL
	 );

			$this->db->insert('pegawai', $data);

			if ($this->db->affected_rows() > 0){
					$data['notif'] = 'berhasil';
					$data['main_view'] = 'super_admin/add_user';
					$this->load->view('super_admin/template_admin', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'super_admin/add_user';
					$this->load->view('super_admin/template_admin', $data);
			}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
		}

		public function data_pegawai()
		{ 
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$where = array(
						'status !=' => "super admin",
						);
				$data['karyawan'] = $this->model_data->select_where('pegawai',$where);
				$data['main_view'] = 'super_admin/data_pegawai';
        		$this->load->view('super_admin/template_admin', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}	

		public function data_user()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$where = array(
						'aktivasi' => "Aktif",
						'status!=' => "super admin",
						);
				$data['karyawan'] = $this->model_data->select_where('pegawai',$where);
				$data['main_view'] = 'super_admin/data_user';
        		$this->load->view('super_admin/template_admin', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}

		public function kelola_user()
		{ 
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$where = array('status' => "admin" , );
				$data['karyawan'] = $this->model_data->select_where('pegawai',$where);
				$data['main_view'] = 'super_admin/kelola_user';
        		$this->load->view('super_admin/template_admin', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}	
		public function kelola_user_pegawai()
		{ 
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$where = array('status =' => "pegawai" , );
				$data['karyawan'] = $this->model_data->select_where('pegawai',$where);
				$data['main_view'] = 'super_admin/kelola_user_pegawai';
        		$this->load->view('super_admin/template_admin', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}
		public function ubah_pegawai() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getuser($a);
		$data['main_view']= 'super_admin/edit_pegawai';
		$this->load->view('super_admin/template_admin', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
		
		}

		public function hapus_pegawai() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$a = $this->uri->segment(4);
			$go = $this->model_data->hapususer($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('super_admin/manage_user/data_pegawai');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('super_admin/manage_user/data_pegawai');
			}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}

		public function updates_pegawai()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$id = $this->input->post('id');
			$data = array(
						'id' => $this->input->post('id'),
					 	'unit_id' => $this->input->post('unit_id'),
					 	'prev_no' =>  $this->input->post('prev_no'),
					 	'nama_lengkap' =>  $this->input->post('nama_lengkap'),
					 	'posisi' =>  $this->input->post('posisi'),
					 	'posisi_lengkap' =>  $this->input->post('posisi_lengkap'),
					 	'email' =>  $this->input->post('email'),
					 	'password' =>  $this->input->post('password'),
					 	'status' =>  $this->input->post('status'),	
					 	'previlage' => NULL
		 );

				$this->db->where('id', $id)
						 ->update('pegawai', $data);

				if ($this->db->affected_rows() > 0){
						$this->session->set_flashdata('notif', 'berhasil');
						redirect('super_admin/manage_user/data_pegawai');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('super_admin/manage_user/data_pegawai');
				}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}

		public function ubah_admin() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getuser($a);
		$data['main_view']= 'super_admin/edit_admin';
		$this->load->view('super_admin/template_admin', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
		
		}

		public function hapus_admin() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$a = $this->uri->segment(4);
			$go = $this->model_data->hapususer($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('super_admin/manage_user/data_admin');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('super_admin/manage_user/data_admin');
			}
				}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}else{
				redirect(base_url('index.php/user/auth'));
			}
		}		
		public function updates_admin()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$id = $this->input->post('id');
			$data = array(
				'id' => $this->input->post('id'),
				'unit_id' => $this->input->post('unit_id'),
				'prev_no' =>  $this->input->post('prev_no'),
				'nama_lengkap' =>  $this->input->post('nama_lengkap'),
				'posisi' =>  $this->input->post('posisi'),
				'posisi_lengkap' =>  $this->input->post('posisi_lengkap'),
				'email' =>  $this->input->post('email'),
				'password' =>  $this->input->post('password'),
				'status' =>  $this->input->post('status'),	
				'previlage' => NULL
		 	);

			$this->db->where('id', $id)
					 ->update('pegawai', $data);

			if ($this->db->affected_rows() > 0){
					$this->session->set_flashdata('notif', 'berhasil');
					redirect('super_admin/manage_user/data_admin');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('super_admin/manage_user/data_admin');
			}
		}else{
				redirect(base_url('index.php/user/auth'));
			}
			redirect(base_url('index.php/user/auth'));
		}
			
		}

		public function aktivasi()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$aksi = $this->uri->segment(4);
			$id = $this->uri->segment(5);

			if ($aksi == '' || $id == '') {
					$this->session->set_flashdata('aktif', 'kosong');
					redirect('super_admin/manage_user/kelola_user');
			} else {
				$do = $this->model_data->aktivasiuser($aksi, $id);
				if ($do) {
					if ($aksi == 'Aktif') {
						$this->session->set_flashdata('aktif', 'sukses');
						redirect('super_admin/manage_user/kelola_user');
					} else {
						$this->session->set_flashdata('nonaktif', 'sukses');
						redirect('super_admin/manage_user/kelola_user');
					}
				} else {
					if ($aksi == 'Aktif') {
						$this->session->set_flashdata('aktif', 'gagal');
						redirect('super_admin/manage_user/kelola_user');
					} else {
						$this->session->set_flashdata('nonaktif', 'gagal');
						redirect('super_admin/manage_user/kelola_user');
					}
				}
			}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}
		public function aktivasi_pegawai()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$aksi = $this->uri->segment(4);
			$id = $this->uri->segment(5);

			if ($aksi == '' || $id == '') {
					$this->session->set_flashdata('aktif', 'kosong');
					redirect('super_admin/manage_user/kelola_user_pegawai');
			} else {
				$do = $this->model_data->aktivasiuser($aksi, $id);
				if ($do) {
					if ($aksi == 'Aktif') {
						$this->session->set_flashdata('aktif', 'sukses');
						redirect('super_admin/manage_user/kelola_user_pegawai');
					} else {
						$this->session->set_flashdata('nonaktif', 'sukses');
						redirect('super_admin/manage_user/kelola_user_pegawai');
					}
				} else {
					if ($aksi == 'Aktif') {
						$this->session->set_flashdata('aktif', 'gagal');
						redirect('super_admin/manage_user/kelola_user_pegawai');
					} else {
						$this->session->set_flashdata('nonaktif', 'gagal');
						redirect('super_admin/manage_user/kelola_user_pegawai');
					}
				}
			}
				}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}				
	}

/* End of file add_user_controller.php */
/* Location: ./application/controllers/super_admin/add_user_controller.php */