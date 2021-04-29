<?php require '../../config/koneksi.php'; require '../../config/function.php'; ?>
<table class="table table-bordered table-hover data">
   <thead>
     <th width="5%">No</th>
     <th>Nama</th>
     <th>Alamat</th>
     <th>Tanggal Lahir</th>
     <th>Opsi</th>
   </thead>
   <tbody>
		<?php 
		$list= mysqli_query($con,"SELECT * FROM siswa order by nama asc ");
		$no=1; while($data= mysqli_fetch_array($list)){
		?>
		<tr>
		   <td><?php echo $no; ?></td>
		   <td><?php echo $data['nama']; ?></td>
		   <td><?php echo $data['alamat']; ?></td>
		   <td><?php echo tgl($data['tanggal_lahir']); ?></td>
		   <td><a href="#" onclick="edit(<?php echo $data['id_siswa']; ?>)" class="btn btn-secondary btn-sm"><i class="fa fa-pencil"></i> Edit</a> <a href="#" onclick="hapus(<?php echo $data['id_siswa']; ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a></td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>
<script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo $base; ?>template/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$('.data').DataTable();
</script>