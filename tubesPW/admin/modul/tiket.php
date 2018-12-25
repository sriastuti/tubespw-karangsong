<?php 
include '../database/koneksi.php';
switch(@$_GET['act']){
	//tampil tiket
	default:
	echo "<h2>Tiket</h2>
	<form method=post action='?module=tiket&act=tambahtiket'>
	<input class='btn btn-primary' type=submit value='Tambah Tiket'>
	</form>
	<table class='table'>
	<tr>
	<th scope='col'>No</th>
	<th scope='col'>Usia(Dewasa/Anak-anak)</th>
	<th scope='col'>Harga/Orang</th>

	</tr>";
	$tampil=mysqli_query($koneksi,"select * from tiket order by id_tiket asc");
	$no=1;
	while ($r=mysqli_fetch_array($tampil)) {
		echo "<tr>
		<td>$no</td>
		<td>$r[usia]</td>
		<td>$r[harga]</td>
		<td><a class='btn btn-primary' href=?module=tiket&act=edittiket&id=$r[id_tiket]>Edit</a>
		<a class='btn btn-danger' href=\"aksi.php?module=tiket&act=hapus&id=$r[id_tiket]\" onClick=\"return confirm('apakah anda benar akan menghapus tiket $r[id_tiket]?')\">Hapus</a>
		</td></tr>";
		$no++;
	}
	echo "</table>";
	break;
//tambah tiket
	case "tambahtiket":
	echo "<h2>Tambah Tiket</h2>
	<form method=post action='aksi.php?module=tiket&act=input'>
	<div class='col-md-5'>
	<div class='form-group'>
	<input class='form-control' name='usia' type='text' id='usia' placeholder='Usia Pengunjung'>
	</div>
	<div class='form-group'>
	<input type='text' class='form-control' name='harga' id='harga' placeholder='Rp.'>
	</div>
	<input type='submit' class='btn btn-primary' name='submit' value='simpan'>
	<input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
	</div>
	</form>";
	break;

//edit tiket
	case "edittiket":
	$edit=mysqli_query($koneksi,"select * from tiket where
		id_tiket='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	echo "<h2>Edit Tiket</h2>
	<form method=post action='aksi.php?module=tiket&act=update'>
	<div class='col-md-5'>
	<div class='form-group'>
	<input type=hidden name=id value='$r[id_tiket]'>
	<input class='form-control' name='usia' type='text' id='usia' value='$r[usia]'>
	</div>
	<div class='form-group'>
	<input type='text' class='form-control' name='harga' id='harga' placeholder='Rp.'>
	</div>
	<input type='submit' class='btn btn-primary' name='submit' value='Update'>
	<input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
	</div>
	</form>";
	break;
}
?>