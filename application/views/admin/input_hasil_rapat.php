<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">

						<div class="page-header">
							<h1>
								Manage Hasil Rapat
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Anomali GI
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Input Hasil Rapat
								</small>
							</h1>
						</div>

						<div class="row">
							<div class="col-md-offset-3 col-md-6">
								<!-- <?php print_r($b); ?> -->
									
								<form class="form-horizontal" role="form" method="post" id="add_user" action="<?php echo base_url();?>index.php/admin/manage_anomali/updates_anomali/">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Temuan </label>

										<div class="col-md-9">
											<input type="hidden" name="id" value="<?php echo $key->id_anomali; ?>">
											<input disabled="true" type="text" name="unit_id" id="form-field-1" placeholder="Tanggal Temuan" class="col-xs-10 col-sm-12" value="<?php echo $key->tanggal_temuan; ?>" />
										</div>
									</div>
									<div class="space-4"></div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Basacamp</label>

										<div class="col-md-9">
											<input required type="text" name="prev_no" id="form-field-1" placeholder="Basacamp" class="col-xs-10 col-sm-12" disabled="true" value="<?php echo $key->nama_bc; ?>" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> GI </label>

										<div class="col-md-9">
											<input required type="text" name="nama_lengkap" id="form-field-1" disabled="true" placeholder="Nama Lengkap" class="col-xs-10 col-sm-12" value="<?php echo $key->nama_gi; ?>" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bay GI </label>

										<div class="col-md-9">
											<input required type="text" name="posisi_lengkap" id="form-field-1" disabled="true" placeholder="Posisi Lengkap" class="col-xs-10 col-sm-12" value="<?php echo $key->penghantar; ?>" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kategori </label>

										<div class="col-md-9">
											<input required type="text" name="email" id="form-field-1" placeholder="Email" disabled="true" class="col-xs-10 col-sm-12" value="<?php echo $key->kategori; ?>" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Peralatan </label>

										<div class="col-md-9">
											<input required type="text" name="password" id="form-field-1" disabled="true" placeholder="Password" class="col-xs-10 col-sm-12" value="<?php echo $key->alat; ?>" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Anomali </label>

										<div class="col-md-9">
											<input required type="text" name="password" id="form-field-1" disabled="true" placeholder="Password" class="col-xs-10 col-sm-12" value="<?php echo $key->nama_jenis; ?>" />
										</div>
									</div>
								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Detail Anomali </label>
										<div class="col-md-9">
											<textarea required placeholder="Detail Anomali" disabled="true" id="form-field-11" class="autosize-transition form-control" name="detail_anomali" value=""><?php echo $key->detail_anomali; ?></textarea>
										</div>
									</div>
								 		<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="id-date-range-picker-1">Range Handled</label>
															<div class="col-md-9">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>

																	<input class="form-control" data-date-format="dd-mm-yyyy"  type="text"  name="rencana_penanganan" value="<?php echo $key->rencana_penanganan; ?>" id="id-date-range-picker-1" />
																</div>
															</div>
									</div>
								 	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pelaksana </label>
										<div class="col-md-9">
											<textarea placeholder="Detail Anomali" id="form-field-11" class="autosize-transition form-control" name="keterangan" value=""><?php echo $key->keterangan; ?></textarea>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="update"><i class="ace-icon fa fa-check bigger-110"></i>Update</button>
											&nbsp;
											<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
										</div>
									</div>
									<div class="hr hr-24"></div>


									<div class="space-24"></div>


								</form>

							
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->