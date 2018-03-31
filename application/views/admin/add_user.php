<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">

						<div class="page-header">
							<h1>
								Manage Pegawai
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Input Pegawai
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-md-offset-3 col-md-6">

							<?php 
							ini_set('error_reporting', 0);
							if ($notif == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Pegawai Gagal !
								</div>
							<?php elseif ($notif == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Data Pegawai Berhasil !
								</div>
							<?php endif ?>

								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" method="post" id="add_user" action="<?php echo base_url();?>index.php/admin/manage_pegawai/simpan">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID </label>

										<div class="col-md-9">
											<input type="text" name="id" id="form-field-1" placeholder="ID" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Unit ID </label>

										<div class="col-md-9">
											<input type="text" name="unit_id" id="form-field-1" placeholder="Unit ID" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

										<div class="col-md-9">
											<input type="text" name="prev_no" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Lengkap </label>

										<div class="col-md-9">
											<input type="text" name="nama_lengkap" id="form-field-1" placeholder="Nama Lengkap" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Posisi</label>

										<div class="col-md-9">
											<input type="text" name="posisi" id="form-field-1" placeholder="Posisi" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Posisi Lengkap </label>

										<div class="col-md-9">
											<input type="text" name="posisi_lengkap" id="form-field-1" placeholder="Posisi Lengkap" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

										<div class="col-md-9">
											<input type="text" name="email" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

										<div class="col-md-9">
											<input type="text" name="password" id="form-field-1" placeholder="Password" class="col-xs-10 col-sm-12" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>

										<div class="col-md-9">
											<select class="form-control" name="status">
												<option value="pegawai">Pegawai</option>
											</select>
										</div>
									</div>
								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
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