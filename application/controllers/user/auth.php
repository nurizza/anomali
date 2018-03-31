<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('login') != "sudah login"){
			$this->load->view('home/login');
		}else{
			redirect('/home/home'); 
		}
	} //apabila user belum login maka akan ditampilkan halaman login yang berada di folder home(home/login) jika user sudah melakukan tindakan untuk login, maka dia akan di redirect ke controller home yang berada di folder home (/home/home) untuk di cek

	public function login(){
		if($this->session->userdata('login') != "sudah login"){
			$prev_no = $this->input->post('prev_no');
			$password = $this->input->post('password');
			//apabila userdata mengidentifikasi belum login, bilamana user mengisi prev_no harus sama dg isinya database yang prev_no, begitu juga dengan password yang harus sama dengan isinya database yang password

			$auth = array('prev_no' => $prev_no,
						  'password' => $password,
						  'aktivasi' => 'Aktif'
						  );
			//disini mendeklarasikan bahwa $auth isinya adalah prev_no untuk pengisian $prev_no, begitu juga dengan password

			$cek = $this->model_data->select_where('pegawai', $auth);
			
			//$cek digunakan untuk mengecek database apakah di database tabel pegawai ada data yang sama dengan data yang ada di variable $auth yaitu prev_nonya sesuai prev_no, password sesuai password

			if(count($cek) > 0){
				$data_session = array(
					'id' => $cek[0]['id'],
					'unit_id' => $cek[0]['unit_id'],
					'prev_no' => $cek[0]['prev_no'], //untuk username
					'nama_lengkap' => $cek[0]['nama_lengkap'], 
					'posisi' => $cek[0]['posisi'],
					'posisi_lengkap' => $cek[0]['posisi_lengkap'],
					'email' => $cek[0]['email'],
					'password' => $cek[0]['password'], //password
					'previlage' => $cek[0]['previlage'], //prev
					'status' => $cek[0]['status'],//admin atau pegawai
					'login' => "sudah login" , );
		
				$this->session->set_userdata( $data_session );
				redirect('/home/home'); //apabila sudah dicek dengan yang diatas, dan dia memenuhi maka dia akan di teruskan ke controller home untuk d proses
				} else {
					echo "<script type='text/javascript'>
		        		alert('Data user not found!') 
		        		</script>"; 
		        echo "<script type='text/javascript'>
		        		window.location.href = '".('/user/auth')."'
		        		</script>"; //apabila tidak memenuhi akan tampil notif Data not found dan halaman window akan tetap di halaman login ini
				}

		} else {
			redirect('/home/home');
		}

	}

	public function logout()
	{
		if ($this->session->userdata('login') == "sudah login") {
			$this->session->sess_destroy();
			redirect('/user/auth');
		} else {
			redirect('/user/auth');
		}

	}

}

/* End of file auth.php */
/* Location: ./application/controllers/user/auth.php */
