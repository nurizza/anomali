<div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">

						<div class="page-header">
							<h1>
								Manage Anomali
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Input Anomali
								</small>
							</h1>
						</div>

						<div class="row">

							<div class="col-md-offset-3 col-md-6">

							<?php 
							ini_set('error_reporting', 0);
							if ($notif == 'gagal'): ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Anomali Gagal !
								</div>
							<?php elseif ($notif == 'berhasil'): ?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									Penambahan Anomali Berhasil !
								</div>
							<?php endif ?>
									
								<form class="form-horizontal" role="form" method="post" enctype='multipart/form-data' id="add_user" action="<?php echo base_url();?>index.php/user/manage_anomali/simpan/">
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Tanggal Temuan</label>
										<div class="col-md-9">
											<div class="input-group">
																	<input class="form-control date-picker" id="id-date-picker-1" placeholder="Tanggal Temuan" type="text" data-date-format="dd-mm-yyyy" name="tanggal_temuan" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Basecamp </label>
										<div class="col-md-9">
											<select class="form-control" onchange="getbase($(this).val())" name="basecamp">
												<option value="">Pilih Basecamp</option>
												<?php foreach ($basecamp as $key): ?>
													<option value="<?php echo $key['id']; ?>"><?php echo $key['nama_bc']; ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> GI </label>
										<div class="col-md-9">
											<select class="form-control" name="gardu_induk" id="gi">
												<option value="">Pilih Basecamp Dulu</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lokasi </label>
										<div class="col-md-9">
											<select class="form-control" id="lokasi" name="lokasi" onchange="getopt($(this).val())">
												<option value="">Pilih Lokasi</option>
												<option value="Bay GI">GI</option>
												<option value="SUTT">SUTT</option>
											</select>
										</div>
									</div>
									<div id="lvl1">
									</div>
									
									<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-11">Detail Anomali</label>
										<div class="col-md-9">
											<textarea placeholder="Detail Anomali" id="form-field-11" class="autosize-transition form-control" name="detail_anomali"></textarea>
										</div>
											
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Foto Anomali</label>

										<div class="col-md-9">
											<input required type="file" id="id-input-file-2" name="foto" />		
										</div>
									</div> 
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
											&nbsp;
											<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
										</div>
									</div>								
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>