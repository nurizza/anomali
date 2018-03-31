					<div class="page-content">
								<?php 
							ini_set('error_reporting', 0);
							if ($this->session->flashdata('notif') == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Pegawai Gagal !
								</div>
							<?php elseif ($this->session->flashdata('notif') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Update Data Pegawai Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Hapus Data Pegawai Berhasil !
								</div>
							<?php elseif ($this->session->flashdata('hapus') == 'gagal'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									hapus Data Pegawai Berhasil !
								</div>
							<?php endif ?>
						<div class="page-header">
							<h1>
								Manage User
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Data User
								</small>
							</h1>
						</div>
								<div class="row">
									<div class="col-xs-12">
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">Nama Lengkap</th>
													<th class="center">Username</th>
													<th class="center">Password</th>
													<th class="center">Auth</th>
													<th class="center">Previlage</th>
													
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($karyawan as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['nama_lengkap']?>
													</td>

													<td class="center">
														<?php echo $data['password']?>
													</td>

													<td class="center">
														<?php echo $data['prev_no']?>
													</td>
													
													<td class="center">
														<?php echo $data['status']?>
													</td>
													<td class="center">
														<?php echo $data['previlage']?>
													</td>
													
												</tr>

												<?php } ?>

											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								
