<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		if ($this->session->userdata('login') == "sudah login") {
		
				if ($this->session->userdata('status') == "admin") {
					redirect('/admin/manage_anomali');
				}else if ($this->session->userdata('status') == "super admin"){
				redirect('/super_admin/manage_anomali');
				} 
				else {
				redirect('/user/manage_anomali');
				}
			
		} else {
			redirect('/user/auth');
		}
	}
	public function simpan_privilage()
	{
		if ($this->session->userdata('login') == "sudah login") {
			$id = $this->input->post('id');
			$manage_user= $this->input->post('manage_user');
			$manage_pegawai = $this->input->post('manage_pegawai');
			$manage_anomali = $this->input->post('manage_anomali');
			$input_hasil_rapat = $this->input->post('input_hasil_rapat');
			$handled_anomali = $this->input->post('handled_anomali');

			if ($manage_user == "") {
				$manage_user = ".";
			} else {
				$manage_user = $manage_user;
			}

			if ($manage_pegawai == "") {
				$manage_pegawai = ".";
			} else {
				$manage_pegawai = $manage_pegawai;
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
				'previlage' => "/".$manage_user."/".$manage_pegawai."/".$input_hasil_rapat."/".$handled_anomali,
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
		        		window.location.href = '".('/super_admin/manage_user/data_user')."'
		        		</script>";
			} else {
				echo "<script type='text/javascript'>
		        		alert('Data privilage user can not update') 
		        		</script>"; 
		        echo "<script type='text/javascript'>
		        		window.location.href = '".('/super_admin/manage_user/data_user')."'
		        		</script>";
			}
		} else {
			redirect();
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/home/login.php */