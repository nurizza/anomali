<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_anomali extends CI_Controller {
	private $msg;
	public function index()
	{	
		if ($this->session->userdata('login') == "sudah login") {
			if($this->session->userdata('status') == "super admin"){
				$data['basecamp'] = $this->model_data->select('basecamp');
		$data['main_view'] = 'super_admin/input_anomali_super_admin';
		$this->load->view('super_admin/template_admin', $data);
			}else{
				redirect(base_url('index.php/user/auth'));
			}
		
		}else{
			redirect(base_url('index.php/user/auth'));
		}
	}
	public function getgardu()
	{
		$key = $this->input->post("param");
		$do = $this->model_data->select_wheres('gardu_induk', array('basecamp_id' => $key));
		$this->msg = '';
		foreach ($do as $key) {
			$this->msg .= '<option value="'.$key->id.'">'.$key->nama_gi.'</option>';
		}
		echo $this->msg;
	}
	public function getopt()
	{
		$key = $this->input->post("param");
		$data = $this->input->post("data");
		if ($key == 'Bay GI') {
			$keys = 'bay';
			$keys2 = 'ano_gi';
			$opt = '
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kategori </label>
					<div class="col-md-9">
						<select class="form-control" name="kategori" onchange="gettipe($(this).val())">
							<option value="">Pilih Kategori</option>
							<option value="Primer">Primer</option>
							<option value="Sekunder">Sekunder</option>
						</select>
					</div>
				</div>
			';
		} elseif ($key == 'SUTT') {
			$keys = 'sutet';
			$keys2 = 'ano_sutet';
			$opt = '';
		}
		$do = $this->model_data->select_wheres($keys, array('gardu_induk_id' => $data));
		$this->msg = '
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> '.$key.'  </label>
					<div class="col-md-9">
					<select class="form-control" name="tempat">
					<option value="">Pilih Tipe '.$key.'</option>
		';
		foreach ($do as $a) {
			$this->msg .= '<option value="'.$a->id.'">'.$a->penghantar.'</option>';
		}
		$this->msg .= '
					</select>
				</div>
			</div>
		';
		$this->msg .= $opt;

		$this->msg .= '
			<div id="lvl2"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Anomali </label>
					<div class="col-md-9">
					<select class="form-control" name="jenis_anomali">
					<option value="">Pilih Jenis Anomali '.$key.'</option>
		';
		$go = $this->model_data->selects($keys2);
		foreach ($go as $b) {
			$this->msg .= '<option value="'.$b->id.'">'.$b->nama_jenis.'</option>';
		}
		$this->msg .= '
					</select>
				</div>
			</div>
		';
		echo $this->msg;
	}
	public function gettype()
	{
		$data = $this->input->post("data");
		$lokasi = $this->input->post("lokasi");
		$this->msg = '
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alat '.$data.' </label>
					<div class="col-md-9">
					<select class="form-control" name="peralatan">
					<option value="">Pilih Tipe Alat '.$data.'</option>
		';
		if ($data == 'Primer') {
			$data = 'primer';
		} elseif ($data == 'Sekunder') {
			$data = 'sekunder';
		}
		$do = $this->model_data->selects($data);
		foreach ($do as $key) {
			$this->msg .= '<option value="'.$key->id.'">'.$key->alat.'</option>';
		}
		$this->msg .= '
					</select>
				</div>
			</div>
		';
		echo $this->msg;
	}

	
	public function simpan()
	{
		if ($this->session->userdata('login') == "sudah login") {
			if($this->session->userdata('status') == "super admin"){
			$foto = $this->upload();
			$data = array(
					'id_anomali' => $this->input->post('id_anomlai'),
				 	'tanggal_temuan' => $this->input->post('tanggal_temuan'),
				 	'basecamp' =>  $this->input->post('basecamp'),
				 	'gardu_induk' =>  $this->input->post('gardu_induk'),
				 	'lokasi' =>  $this->input->post('lokasi'),
				 	'tempat' =>  $this->input->post('tempat'),
				 	'kategori' =>  $this->input->post('kategori'),
				 	'peralatan' =>  $this->input->post('peralatan'),
				 	'jenis_anomali' =>  $this->input->post('jenis_anomali'),	
				 	'detail_anomali' =>  $this->input->post('detail_anomali'),
				 	'foto' => $foto
	 );

			$this->db->insert('anomali', $data);

			if ($this->db->affected_rows() > 0){
					$data['notif'] = 'berhasil';
					$data['main_view'] = 'super_admin/input_anomali_super_admin';
					$this->load->view('super_admin/template_admin', $data);
			}else{
					$data['notif'] = 'gagal';
					$data['main_view'] = 'super_admin/input_anomali_super_admin';
					$this->load->view('super_admin/template_admin', $data);
			}
			}else{
				redirect(base_url('index.php/user/auth'));
			} 
		}else{
			redirect(base_url('index.php/user/auth'));
		}

		}

		function upload(){
			$type = explode('.', $_FILES["foto"]["name"]);
			$type = $type[count($type)-1];
			$url = uniqid(rand()).'.'.$type;
			if(in_array($type, array("jpg","jpeg","png","PNG")))
				if(is_uploaded_file($_FILES["foto"]["tmp_name"]))
					if(move_uploaded_file($_FILES["foto"]["tmp_name"],"./assets/gambar/".$url))
						return $url;
					return "";
		}

		public function anomali_gi()
		{ 		
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = bay.id";
				$join4 = "anomali.peralatan = peralatan_ano_bay.id_alat";
				$join5 = "anomali.jenis_anomali = ano_gi.id";
				$where = array(
						'lokasi' => "Bay GI",
						);
				$data['karyawan'] = $this->model_data->select_join_where('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'bay', $join3, 'peralatan_ano_bay', $join4, 'ano_gi', $join5, $where);
				$data['main_view'] = 'super_admin/anomali';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
				
		}
		public function report_gi()
		{ 		
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = bay.id";
				$join4 = "anomali.peralatan = peralatan_ano_bay.id_alat";
				$join5 = "anomali.jenis_anomali = ano_gi.id";
				$where = array(
						'lokasi' => "Bay GI",
						'no_ba !=' => NULL ,
						);
				$data['karyawan'] = $this->model_data->select_join_where('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'bay', $join3, 'peralatan_ano_bay', $join4, 'ano_gi', $join5, $where);
				$data['main_view'] = 'super_admin/report_gi';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
				
		}
		public function anomali_sutt()
		{ 	
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = sutet.id";
				$join4 = "anomali.jenis_anomali = ano_sutet.id";
				
				$where = array(
						'lokasi' => "SUTT",
						);
				$data['karyawan'] = $this->model_data->select_join_where_SUTT('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'sutet', $join3, 'ano_sutet', $join4, $where);
				$data['main_view'] = 'super_admin/anomali_SUTT';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
				
		}
		public function report_sutt()
		{ 	
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = sutet.id";
				$join4 = "anomali.jenis_anomali = ano_sutet.id";
				
				$where = array(
						'lokasi' => "SUTT",
						);
				$data['karyawan'] = $this->model_data->select_join_where_SUTT('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'sutet', $join3, 'ano_sutet', $join4, $where);
				$data['main_view'] = 'super_admin/report_SUTT';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
				
		}
		public function rapat_gi()
		{ 		
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = bay.id";
				$join4 = "anomali.peralatan = peralatan_ano_bay.id_alat";
				$join5 = "anomali.jenis_anomali = ano_gi.id";
				$where = array(
						'lokasi' => "Bay GI",
						'rencana_penanganan' => "",
						);
				$data['karyawan'] = $this->model_data->select_join_where('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'bay', $join3, 'peralatan_ano_bay', $join4, 'ano_gi', $join5, $where);
				$data['main_view'] = 'super_admin/anomali';
				$data['main_view'] = 'super_admin/rapat_anomali_gi';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
				
		}
		public function rapat_sutt()
		{ 
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = sutet.id";
				$join4 = "anomali.jenis_anomali = ano_sutet.id";
				
				$where = array(
						'lokasi' => "SUTT",
						'rencana_penanganan' => "",);
				$data['karyawan'] = $this->model_data->select_join_where_SUTT('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'sutet', $join3, 'ano_sutet', $join4, $where);
				$data['main_view'] = 'super_admin/rapat_anomali_SUTT';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}

		public function ubah_anomali() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getanomali($a);
		$data['main_view']= 'super_admin/input_hasil_rapat.php';
		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}

	
		}

		public function updates_anomali()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$id = $this->input->post('id');
			$data = array(
				 	'rencana_penanganan' =>  $this->input->post('rencana_penanganan'),	
				 	'keterangan' =>  $this->input->post('keterangan'),
		 );

				$this->db->where('id_anomali', $id)
						 ->update('anomali', $data);

				if ($this->db->affected_rows() > 0){
						$this->session->set_flashdata('notif', 'berhasil');
						redirect('super_admin/manage_anomali/rapat_gi');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('super_admin/manage_anomali/rapat_gi');
				}}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}

		public function ubah_anomali_SUTT() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getanomali_sutt($a);
		$data['main_view']= 'super_admin/input_hasil_rapat_SUTT.php';
		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
		}
		public function updates_anomali_SUTT()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$id = $this->input->post('id');
			$data = array(
				 	'rencana_penanganan' =>  $this->input->post('rencana_penanganan'),	
				 	'keterangan' =>  $this->input->post('keterangan'),
		 );

				$this->db->where('id_anomali', $id)
						 ->update('anomali', $data);

				if ($this->db->affected_rows() > 0){
						$this->session->set_flashdata('notif', 'berhasil');
						redirect('super_admin/manage_anomali/rapat_SUTT');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('super_admin/manage_anomali/rapat_SUTT');
				}}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}
		public function hapus_anomali_report_gi() {
			
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$a = $this->uri->segment(4);
			$go = $this->model_data->hapusanomali($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('super_admin/manage_anomali/report_gi');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('super_admin/manage_anomali/report_gi');
			}
				}else{
					redirect(base_url('index.php/user/auth'));
				}
				
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}
		public function hapus_anomali_report_sutt() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$a = $this->uri->segment(4);
			$go = $this->model_data->hapusanomali($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('super_admin/manage_anomali/report_sutt');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('super_admin/manage_anomali/report_sutt');
			}
		}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}
		public function hapus_anomali_gi() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$a = $this->uri->segment(4);
			$go = $this->model_data->hapusanomali($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('super_admin/manage_anomali/anomali_gi');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('super_admin/manage_anomali/anomali_gi');
			}}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}
		public function hapus_anomali_SUTT() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$a = $this->uri->segment(4);
			$go = $this->model_data->hapusanomali($a);
			if ($go) {
				$this->session->set_flashdata('hapus', 'berhasil');
				redirect('super_admin/manage_anomali/anomali_SUTT');
			} else {
				$this->session->set_flashdata('hapus', 'gagal');
				redirect('super_admin/manage_anomali/anomali_SUTT');
			}
				}else{
					redirect(base_url('index.php/user/auth'));
				}
				
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}
		public function handled_anomali_gi() {
			if($this->session->userdata('status') == "super admin"){
						$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getanomali($a);
		$data['main_view']= 'super_admin/input_handled_gi.php';
		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			if ($this->session->userdata('login') == "sudah login") {
			}else{
				redirect(base_url('index.php/user/auth'));
			}

		}

		public function updates_handled_anomali()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$id = $this->input->post('id');
			$data = array(
				 	'tanggal_penanganan' =>  $this->input->post('tanggal_penanganan'),	
				 	'no_ba' =>  $this->input->post('no_ba'),
		 );

				$this->db->where('id_anomali', $id)
						 ->update('anomali', $data);

				if ($this->db->affected_rows() > 0){
						$this->session->set_flashdata('notif', 'berhasil');
						redirect('super_admin/manage_anomali/handled_gi');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('super_admin/manage_anomali/handled_gi');
				}}
				
			else{
					redirect(base_url('index.php/user/auth'));
			}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}

		public function handled_gi()
		{ 
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = bay.id";
				$join4 = "anomali.peralatan = peralatan_ano_bay.id_alat";
				$join5 = "anomali.jenis_anomali = ano_gi.id";
			$where = array(
						'lokasi' => "Bay GI",
						'rencana_penanganan !=' => "",
						'tanggal_penanganan' => "" ,
						);
				$data['karyawan'] = $this->model_data->select_join_where('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'bay', $join3, 'peralatan_ano_bay', $join4, 'ano_gi', $join5, $where);
				$data['main_view'] = 'super_admin/handled_gi';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
				
		}

		public function handled_SUTT()
		{ 	
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$join = "anomali.basecamp = basecamp.id";
				$join2 = "anomali.gardu_induk = gardu_induk.id";
				$join3 = "anomali.tempat = sutet.id";
				$join4 = "anomali.jenis_anomali = ano_sutet.id";
			$where = array(
						'lokasi' => "SUTT",
						'rencana_penanganan!=' => "" ,
						'tanggal_penanganan' => "",
						);
				$data['karyawan'] = $this->model_data->select_join_where_SUTT('anomali', 'basecamp', $join, 'gardu_induk', $join2, 'sutet', $join3, 'ano_sutet', $join4, $where);
				$data['main_view'] = 'super_admin/handled_SUTT';
        		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}

		public function handled_anomali_SUTT() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$a = $this->uri->segment(4);
		$data['key'] = $this->model_data->getanomali_sutt($a);
		$data['main_view']= 'super_admin/input_handled_SUTT.php';
		$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}

		
		}

		public function updates_handled_anomali_SUTT()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
			$id = $this->input->post('id');
			$data = array(
				 	'tanggal_penanganan' =>  $this->input->post('tanggal_penanganan'),	
				 	'no_ba' =>  $this->input->post('no_ba'),
		 );

				$this->db->where('id_anomali', $id)
						 ->update('anomali', $data);

				if ($this->db->affected_rows() > 0){
						$this->session->set_flashdata('notif', 'berhasil');
						redirect('super_admin/manage_anomali/handled_SUTT');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('super_admin/manage_anomali/handled_SUTT');
				}}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}

		public function ubah_report_gi() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
				$a = $this->uri->segment(4);
				$data['key'] = $this->model_data->getanomali($a);
				$data['main_view']= 'super_admin/edit_report_gi.php';
				$this->load->view('super_admin/template_admin', $data);}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
		
		}
		public function ubah_report_sutt() {
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$a = $this->uri->segment(4);
				$data['key'] = $this->model_data->getanomali_sutt($a);
				$data['main_view']= 'super_admin/edit_report_sutt.php';
				$this->load->view('super_admin/template_admin', $data);
				}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
		
		}
		public function updates_report_gi()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$id = $this->input->post('id');
					$data = array(
				 	'rencana_penanganan' =>  $this->input->post('rencana_penanganan'),	
				 	'keterangan' =>  $this->input->post('keterangan'),
				 	'tanggal_penanganan' =>  $this->input->post('tanggal_penanganan'),	
				 	'no_ba' =>  $this->input->post('no_ba')
				 );

				$this->db->where('id_anomali', $id)
						 ->update('anomali', $data);

				if ($this->db->affected_rows() > 0){
						$this->session->set_flashdata('notif', 'berhasil');
						redirect('super_admin/manage_anomali/report_gi');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('super_admin/manage_anomali/report_gi');
				}
				}else{
					redirect(base_url('index.php/user/auth'));
				}
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}
		public function updates_report_sutt()
		{
			if ($this->session->userdata('login') == "sudah login") {
				if($this->session->userdata('status') == "super admin"){
					$id = $this->input->post('id');
					$data = array(
				 	'rencana_penanganan' =>  $this->input->post('rencana_penanganan'),	
				 	'keterangan' =>  $this->input->post('keterangan'),
				 	'tanggal_penanganan' =>  $this->input->post('tanggal_penanganan'),	
				 	'no_ba' =>  $this->input->post('no_ba')
				 );

				$this->db->where('id_anomali', $id)
						 ->update('anomali', $data);

				if ($this->db->affected_rows() > 0){
						$this->session->set_flashdata('notif', 'berhasil');
						redirect('super_admin/manage_anomali/report_sutt');
				}else{
						$this->session->set_flashdata('notif', 'gagal');
						redirect('super_admin/manage_anomali/report_sutt');
				}
				}else{
					redirect(base_url('index.php/user/auth'));
				}
					
			}else{
				redirect(base_url('index.php/user/auth'));
			}
			
		}
	
}


/* End of file manage_anomali.php */
/* Location: ./application/controllers/super_admin/manage_anomali.php */