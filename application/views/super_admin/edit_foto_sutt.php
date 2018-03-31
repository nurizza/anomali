

		<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							
							
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Edit Foto Anomali
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="widget-body">
												<form class="form-horizontal" role="form" method="post" enctype='multipart/form-data' 
												id="add_user" action="<?php echo base_url();?>index.php/super_admin/manage_anomali/simpan_foto_sutt">
														<div class="form-group">
															<div class="col-xs-12">
																<input required type="hidden" name="id" value="<?php echo $key->id_anomali; ?>">
																<input name="foto" type="file" id="id-input-file-3" />
															</div>
														</div>
														<div class="clearfix form-actions">
										<div class="center">
											<button class="btn btn-info" type="submit" name="update"><i class="ace-icon fa fa-check bigger-110"></i>Update</button>
											
										</div>
												</form>
													</div>
												</div>
								

							</div><!-- /.col -->
							
									</div>
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->