<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN KARYAWAN</title>
</head>
<body>

<center>
<?php if(strpos($this->session->userdata('previlage'), "input") > 0){ ?>
<a href="<?php echo base_url('home/input_data')?>">INPUT DATA</a>
<?php }else{ echo "";} ?>
<table border="1">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama Karyawan</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; foreach($karyawan as $data){ ?>
		<tr>
			<td><?php echo $nomor++ ?></td>
			<td><?php echo $data['nama_karyawan']?></td>
			<td>
				<?php if(strpos($this->session->userdata('previlage'), "edit") > 0){ ?>
				<a href="<?php echo base_url('home/edit_data')?>">EDIT</a>&nbsp&nbsp
				<?php }else{ echo "";} ?>

				<?php if(strpos($this->session->userdata('previlage'), "delete") > 0){ ?>
				<a href="<?php echo base_url('home/delete_data')?>">DELETE</a>
				<?php }else{ echo "";} ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</center>

</body>
</html>