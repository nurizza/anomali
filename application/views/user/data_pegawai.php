				

					<div class="page-content">
						<!-- /.ace-settings-container -->

						

	
						<div class="page-header">
							<h1>
								Data Pegawai
							</h1>
						</div><!-- /.page-header -->
								<div class="row">
									<div class="col-xs-12">
									 
              						  <br>
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">ID</th>
													<th class="center">Unit ID</th>
													<th class="center">Nama</th>
													<th class="center">Posisi</th>
													<th class="center">Email</th>
													<th class="center">Status</th>
													<th class="center">Manage Pegawai</th>
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($karyawan as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['id']?>
													</td>

													<td class="center">
														<?php echo $data['unit_id']?>
													</td>

													<td class="center">
														<?php echo $data['nama_lengkap']?>
													</td>
													
													<td class="center">
														<?php echo $data['posisi_lengkap']?>
													</td>

													<td class="center">
														<?php echo $data['email']?>
												</td>
													<td class="center">
														<?php echo $data['status']?>
												</td>
												<td class="center">
														<div class="hidden-sm hidden-xs btn-group">
															
															<a href="<?php echo base_url(); ?>index.php/user/manage_pegawai/ubah_pegawai/<?php echo $data['id']; ?>" class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</a>

															<a href="<?php echo base_url(); ?>index.php/user/manage_pegawai/hapus_pegawai/<?php echo $data['id']; ?>" class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</a>
															
														</div>

												
													</td>
												</tr>

												<?php } ?>

											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								
