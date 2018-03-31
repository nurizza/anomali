<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">

						<div class="page-header">
							<h1>
								Dashboard
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
													<th class="center">Tanggal Temuan</th>
													<th class="center">Basecamp</th>
													<th class="center">Gardu Induk</th>
													<th class="center">Lokasi</th>
													<th class="center">Tempat</th>
													<th class="center">Jenis Anomali</th>
													<th class="center">Detail</th>
													<th class="center">Rencana Penanganan</th>
													<th class="center">Pelaksana</th>
													<th class="center">Tanggal Penanaganan</th>
													<th class="center">No Berita Acara</th>
											
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
														<?php echo $data['lokasi']?>
													</td>
													<td class="center">
														<?php echo $data['nm_penghantar']?>
													</td>													
													<td class="center">
														<?php echo $data['nama_jenis']?>
													</td>
													<td class="center">
														<?php echo $data['detail_anomali']?>
													</td>
													<td class="center">
														<?php echo $data['rencana_penanganan']?>
													</td>
													<td class="center">
														<?php echo $data['keterangan']?>
													</td>
													<td class="center">
														<?php echo $data['tanggal_penanganan']?>
													</td>
													<td class="center">
														<?php echo $data['no_ba']?>
													</td>
													
												
												
												</tr>

												<?php } ?>

											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								


								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><