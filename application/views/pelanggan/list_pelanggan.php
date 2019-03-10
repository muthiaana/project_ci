<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
<table border="1px" class="table table-hover">
	<tr class="table-active">
		<th>No</th>
		<th>Nama Pelanggan</th>
		<th>Email</th>
		<th>Telefon</th>
		<th>Alamat</th>
		<th>Action</th>
	</tr>
	<tr>
	</tr>

	<?php
	$no=1;
	foreach ($pelanggan as $value) {
		# code...
	?>
		<tr class="table-dark">
		<td><?php echo $no++;?></td>
		<td><?php echo $value->namapelanggan;?></td>	
		<td><?php echo $value->email;?></td>
		<td><?php echo $value->telefon;?></td>
		<td><?php echo $value->alamat;?></td>
		<td>
			<a class="btn btn-warning btn-link" href="<?php echo site_url('pelanggan/hapus_pelanggan/').$value->pelangganid; ?>">Delete</a>
			<a class="btn btn-warning btn-link" href="<?php echo site_url('pelanggan/hapus_pelanggan/').$value->pelangganid; ?>">Edit</a>
		</td>
	 <?php } ?>
	</tr>
</table>
</body>
</html>