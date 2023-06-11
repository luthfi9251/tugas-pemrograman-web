<h3>TABEL STOK BARANG</h3>
<div class="card">
	<div class="card-header bg-info text-white ">
		DATA BARANG <a href="tambah.php" class="btn btn-sm btn-success float-right">Tambah</a>
	</div>
	<div class="card-body">
		<table class="table table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>Nama Barang</th>
					<th>Keterangan</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include('koneksi.php'); //memanggil file koneksi
					$datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));
					//script untuk menampilkan data barang

					$no = 1;//untuk pengurutan nomor

					//melakukan perulangan
					while($row = mysqli_fetch_assoc($datas)) {
				?>	

			<tr>
				<td><?= $no; ?></td>
				<td><img src="assets/img/<?= $row['foto'] ?>" style='width:100px;height:100px;'></img></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['keterangan']; ?></td>
				<td>Rp <?= $row['harga']; ?></td>
				<td><?= $row['jumlah']; ?></td>
				<td>
						<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning" >Edit</a>
						<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
				</td>
			</tr>

				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>


