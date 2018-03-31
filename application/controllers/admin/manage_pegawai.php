<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_Pegawai extends CI_Controller {


	public function index(){
		if($this->session->userdata('login') == "sudah login") {
			if($this->session->userdata('status') == "admin"){
		$data['main_view']= 'admin/add_user';
		$this->load->view('admin/template', $data);
			}else{
				redirect(base_url('index.php/user/auth'));
			}
		}else{
				redirect(base_url('index.php/user/auth'));
			}
	}

	public function simpan()
	{	if ($this->session->userdata('login') == "sudah login") {
		if($this->session->userdata('status') == "admin"){
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
					$data['main_view'] = 'admin/add_user';
					$this->load->view('admin/template', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'admin/add_user';
					$this->load->view('admin/template', $data);
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
				if($this->session->userdata('status') == "admin"){
			$where = array(
						'status' => "pegawai",
						);
				$data['karyawan'] = $this->model_data->select_where('pegawai',$where);
				$data['main_view'] = 'admin/data_pegawai';
        		$this->load->view('admin/template', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}	

		public function data_user()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "admin"){
			$where = array(
						'aktivasi' => "Aktif",
						'status' => "pegawai",
						);
				$data['karyawan'] = $this->model_data->select_where('pegawai',$where);
				$data['main_view'] = 'admin/data_user';
        		$this->load->view('admin/template', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}

		public function kelola_user()
		{ 
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "admin"){
			$where = array('status' => "pegawai" , );
				$data['karyawan'] = $this->model_data->select_where('pegawai',$where);
				$data['main_view'] = 'admin/kelola_user';
        		$this->load->view('admin/template', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}	

		public function ubah_pegawai() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "admin"){
			$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getuser($a);
		$data['main_view']= 'admin/edit_pegawai';
		$this->load->view('admin/template', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
		
		}

		public function hapus_pegawai() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "admin"){
			$a = $this->uri->segment(4);
			$go = $this->model_data->hapususer($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('admin/manage_pegawai/data_pegawai');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('admin/manage_pegawai/data_pegawai');
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
				if($this->session->userdata('status') == "admin"){
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
						redirect('admin/manage_pegawai/data_pegawai');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('admin/manage_pegawai/data_pegawai');
				}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}

		public function ubah_admin() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "admin"){
			$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getuser($a);
		$data['main_view']= 'admin/edit_admin';
		$this->load->view('admin/template', $data);}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
		
		}

		public function hapus_admin() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "admin"){
					$a = $this->uri->segment(4);
			$go = $this->model_data->hapususer($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('admin/manage_pegawai/data_admin');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('admin/manage_pegawai/data_admin');
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
				if($this->session->userdata('status') == "admin"){
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
					redirect('admin/manage_pegawai/data_admin');
			}else{
					$this->session->set_flashdata('notif', 'gagal');
					redirect('admin/manage_pegawai/data_admin');
			}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}

		public function aktivasi()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "admin"){
			$aksi = $this->uri->segment(4);
			$id = $this->uri->segment(5);

			if ($aksi == '' || $id == '') {
					$this->session->set_flashdata('aktif', 'kosong');
					redirect('admin/manage_pegawai/kelola_user');
			} else {
				$do = $this->model_data->aktivasiuser($aksi, $id);
				if ($do) {
					if ($aksi == 'Aktif') {
						$this->session->set_flashdata('aktif', 'sukses');
						redirect('admin/manage_pegawai/kelola_user');
					} else {
						$this->session->set_flashdata('nonaktif', 'sukses');
						redirect('admin/manage_pegawai/kelola_user');
					}
				} else {
					if ($aksi == 'Aktif') {
						$this->session->set_flashdata('aktif', 'gagal');
						redirect('admin/manage_pegawai/kelola_user');
					} else {
						$this->session->set_flashdata('nonaktif', 'gagal');
						redirect('admin/manage_pegawai/kelola_user');
					}
				}
			}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url('index.php/user/auth'));
		}
			
		}	
			public function simpan_privilage()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if($this->session->userdata('status') == "admin"){
			$id = $this->input->post('id');
			$data_pegawai = $this->input->post('data_pegawai');
			$manage_anomali = $this->input->post('manage_anomali');
			$input_hasil_rapat = $this->input->post('input_hasil_rapat');
			$handled_anomali = $this->input->post('handled_anomali');


			if ($data_pegawai == "") {
				$data_pegawai = ".";
			} else {
				$data_pegawai = $data_pegawai;
			}
			
			if ($input_hasil_rapat == "") {
				$input_hasil_rapat = ".";
			} else {
				$input_hasil_rapat = $input_hasil_rapat;
			}
			if ($handled_anomali == "") {
				$handled_anomali = ".";
			} else {
				$handled_anomali = $handled_anomali;
			}

			$privilage = array(
				'previlage' => "/".$data_pegawai."/".$input_hasil_rapat."/".$handled_anomali,
				);
			$where = array(
				'id' => $id
				);
			$update_privilage = $this->model_data->update_where('pegawai',$privilage,$where);
			if ($update_privilage == true) {
				echo "<script type='text/javascript'>
		        		alert('Data privilage user updated') 
		        		</script>"; 
		        echo "<script type='text/javascript'>
		        		window.location.href = '".base_url('index.php/admin/manage_pegawai/data_user')."'
		        		</script>";
			} else {
				echo "<script type='text/javascript'>
		        		alert('Data privilage user can not update') 
		        		</script>"; 
		        echo "<script type='text/javascript'>
		        		window.location.href = '".base_url('index.php/admin/manage_pegawai/data_user')."'
		        		</script>";
			}}else{
				redirect(base_url('index.php/user/auth'));
			}
		} else {
			redirect(base_url());
		}
	}	
	}

/* End of file add_user_controller.php */
/* Location: ./application/controllers/admin/add_user_controller.php */