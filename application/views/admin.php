<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN ADMIN</title>
</head>
<body>

<center>
<table border="1">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama Karyawan</td>
			<td>Privilage</td>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; foreach($karyawan as $data){ ?>
		<tr>
			<td><?php echo $nomor++ ?></td>
			<td><?php echo $data['nama_karyawan']?></td>
			<td>
				<form action="<?php echo base_url('home/simpan_privilage')?>" method="post">
					<input type="hidden" name="id" value="<?php echo $data['id']?>">

					<?php if((strpos($data['previlage'],"input")) > 0){?>
					<input type="checkbox" name="input" value="input" checked> INPUT &nbsp&nbsp&nbsp
					<?php } else{?>
					<input type="checkbox" name="input" value="input"> INPUT &nbsp&nbsp&nbsp
					<?php } ?>

					<?php if(strpos($data['previlage'],"edit") > 0){?>
					<input type="checkbox" name="edit" value="edit" checked> EDIT &nbsp&nbsp&nbsp
					<?php } else{?>
					<input type="checkbox" name="edit" value="edit"> EDIT &nbsp&nbsp&nbsp
					<?php } ?>

					<?php if(strpos($data['previlage'],"delete") > 0){?>
					<input type="checkbox" name="delete" value="delete" checked> DELETE &nbsp&nbsp&nbsp
					<?php } else{?>
					<input type="checkbox" name="delete" value="delete"> DELETE &nbsp&nbsp&nbsp
					<?php } ?>
					
					<input type="submit" value="SIMPAN">
				</form>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</center>

</body>
</html>