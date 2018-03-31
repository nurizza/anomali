				

					<div class="page-content">
						<!-- /.ace-settings-container -->

						

	
						<div class="page-header">
						<h1>
								Manage Hasil Rapat
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Anomali SUTT
								</small>
							</h1>
						</div><!-- /.page-header -->
								<div class="row">
								
									 
              						  <br>
										<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">No.</th>
													<th class="center">ID</th>
													<th class="center">Tanggal Temuan</th>
													<th class="center">Basecamp</th>
													<th class="center">Gardu Induk</th>
													<th class="center">Tempat</th>									
													<th class="center">Jenis Anomali</th>
													<th class="center">Foto</th>
													<th class="center">update</th>
												</tr>
											</thead>

											<tbody>
												<?php $nomor=1; foreach($karyawan as $data){ ?>
												
												<tr>
													<td class="center">
														<?php echo $nomor++ ?>
													</td>

													<td class="center">
														<?php echo $data['id_anomali']?>
													</td>

													<td class="center">
														<?php echo $data['tanggal_temuan']?>
													</td>

													<td class="center">
														<?php echo $data['nama_bc']?>
													</td>
													
													<td class="center">
														<?php echo $data['nama_gi']?>
													</td>

													<td class="center">
														<?php echo $data['penghantar']?>
													</td>
													<td class="center">
														<?php echo $data['nama_jenis']?>
													</td>
													<td class="center">
														<?php echo "<img src='".base_url("assets/gambar/".$data['foto'])."' width='80px'" ?>
													</td>
												<td class="center">
														<div class="hidden-sm hidden-xs btn-group">
															
															<a href="<?php echo base_url(); ?>index.php/admin/manage_anomali/ubah_anomali_SUTT/<?php echo $data['id_anomali']; ?>" class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</a>
															
														</div>

												
													</td>
												</tr>

												<?php } ?>

											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								
