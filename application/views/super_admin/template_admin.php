<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Super Admin-Anomali App</title>
		<link href="<?php echo base_url();?>assets/gambar/logo.png" rel="shortcut icon">
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/font-awesome/4.5.0/css/font-awesome.min.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-duallistbox.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-multiselect.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/select2.min.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/chosen.min.css" />
		
		<link href="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-colorpicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/colorbox.min.css" />

		<!-- text fonts -->
		

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url();?>assets/admin/admin/js/ace-extra.min.js"></script>

		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/fonts.googleapis.com.css" />

		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	
			<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-part2.min.css" class="ace-main-stylesheet" />
	
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-rtl.min.css" />

	
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/ace-ie.min.css" />
		

		<script src="<?php echo base_url();?>assets/admin/admin/js/ace-extra.min.js"></script>

		
		<script src="<?php echo base_url();?>assets/admin/admin/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/admin/js/respond.min.js"></script>
		
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small><i class="fa fa-bar-chart"></i>Anomali Application</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('nama_lengkap'); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<a href="<?php echo base_url('index.php/user/auth/logout') ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

			<ul class="nav nav-list">
					

					<li>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Manage User </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_user/data_user">
									<i class="menu-icon fa fa-caret-right"></i>
									Data User
								</a>

								<b class="arrow"></b>
							</li>

							<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-caret-right"></i>
								<span class="menu-text"> Kelola User </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
							<ul class="submenu">
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_user/kelola_user">
									<i class="menu-icon fa fa-caret-right"></i>
									Admin
								</a>

								<b class="arrow"></b>
							</li>
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_user/kelola_user_pegawai">
									<i class="menu-icon fa fa-caret-right"></i>
									Pegawai
								</a>

								<b class="arrow"></b>
							</li>
							</ul>
							</li>
						</ul>
					</li>
				
					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-black-tie"></i>
							<span class="menu-text"> Manage Pegawai </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_user">
									<i class="menu-icon fa fa-caret-right"></i>
									Input Pegawai
								</a>

								<b class="arrow"></b>
							</li>

							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_user/data_pegawai">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Pegawai
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bar-chart"></i>
							<span class="menu-text"> Manage Anomali </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>


						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali">
									<i class="menu-icon fa fa-caret-right"></i>
									Input Anomali
								</a>

								<b class="arrow"></b>
							</li>
							<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-caret-right"></i>
								<span class="menu-text"> Data Anomali </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
							<ul class="submenu">
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/anomali_gi">
									<i class="menu-icon fa fa-caret-right"></i>
									Anomali GI
								</a>

								<b class="arrow"></b>
							</li>
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/anomali_SUTT">
									<i class="menu-icon fa fa-caret-right"></i>
									Anomali SUTT
								</a>

								<b class="arrow"></b>
							</li>
							</ul>
							</li>
							
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Manage Hasil Rapat </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
							<ul class="submenu">
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/rapat_gi">
									<i class="menu-icon fa fa-caret-right"></i>
									Anomali GI
								</a>

								<b class="arrow"></b>
							</li>
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/rapat_SUTT">
									<i class="menu-icon fa fa-caret-right"></i>
									Anomali SUTT
								</a>

								<b class="arrow"></b>
							</li>
							</ul>
							</li>
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-flag"></i>
							<span class="menu-text"> Handled Anomali</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/handled_gi">
									<i class="menu-icon fa fa-caret-right"></i>
									Anomali GI
								</a>

								<b class="arrow"></b>
							</li>

							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/handled_SUTT">
									<i class="menu-icon fa fa-fla"></i>
									Anoamli SUTT
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
						
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Report</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/report_gi">
									<i class="menu-icon fa fa-caret-right"></i>
									Report GI
								</a>

								<b class="arrow"></b>
							</li>

							<li >
								<a href="<?php echo base_url();?>index.php/super_admin/manage_anomali/report_sutt">
									<i class="menu-icon fa fa-fla"></i>
									Report SUTT
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
				<?php			
				$this->load->view( $main_view);
				?>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							&copy; TJBTB APP MALANG
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

	<script src="<?php echo base_url();?>assets/admin/js/jquery-2.1.4.min.js"></script>
	 <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>

    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/admin/js/pages/tables/jquery-datatable.js"></script>
	</script>
		<script type="text/javascript">
			function getbase(val) {
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/super_admin/manage_anomali/getgardu',
					type: 'POST',
					dataType: 'html',
					data: "param="+val,
					success: function(r) {
						$("#gi").html(r);
					}
				});
			}
			function getopt(val) {
				var data = $("#gi").val();
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/super_admin/manage_anomali/getopt',
					type: 'POST',
					dataType: 'html',
					data: "param="+val+"&data="+data,
					success: function(r) {
						$("#lvl1").html(r);
					}
				});
			}
			function gettipe(data) {
				var id = $("#lokasi").val();
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/super_admin/manage_anomali/gettype',
					type: 'POST',
					dataType: 'html',
					data: "data="+data+"&lokasi="+id,
					success: function(r) {
						$("#lvl2").html(r);
					}
				});
			}
		</script>
		
		

		

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/admin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>assets/admin/js/excanvas.min.js"></script>
		<![endif]-->
		<!-- <script src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/dataTables.select.min.js"></script> -->

		<script src="<?php echo base_url();?>assets/admin/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/spinbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/moment.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/daterangepicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/autosize.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.inputlimiter.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/bootstrap-tag.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.colorbox.min.js"></script>
		<!-- ace scripts -->
		<script src="<?php echo base_url();?>assets/admin/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {


				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
			
				autosize($('textarea[class*=autosize]'));
				
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop images here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-picture-o',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
					
					
					/**
					file_input
					.off('file.preview.ace')
					.on('file.preview.ace', function(e, info) {
						console.log(info.file.width);
						console.log(info.file.height);
						e.preventDefault();//to prevent preview
					});
					*/
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//console.log($('#spinner1').val())
				}); 
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
			
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=rencana_penanganan]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('#timepicker1').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				
			
				
				if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
				//$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add/remove a tag
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
					
					var index = $tag_obj.inValues('some tag');
					$tag_obj.remove(index);
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//autosize($('#form-field-tags'));
				}
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});

				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable();
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			});
		</script>
		<script type="text/javascript">
			jQuery(function($) {
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });
})
		</script>
	</body>
	</body>
</html>
