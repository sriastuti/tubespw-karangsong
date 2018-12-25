<?php 
include '../database/koneksi.php';
switch(@$_GET['act']){
  default:
  echo "<h2>Galeri</h2>
  <form method=post action='?module=galeri&act=tambahgaleri'>
  <input class='btn btn-primary' type=submit value='Tambah Galeri'>
  </form>
  <table class='table'>
  <tr>
  <th scope='col'>No</th>
  <th scope='col'>Nama Galeri</th>
  <th scope='col'>Gambar</th>
  <th scope='col'>Keterangan</th>
  </tr>";
  $tampil=mysqli_query($koneksi, "select * from tabel_image order by id_image");
  $no=1;
  while 
   ($r=mysqli_fetch_array($tampil))
 {
  echo "<tr><td>$no</td>
  <td>$r[nama_gambar]</td>
  <td><img src='galeri/$r[gambar]' width='50'></td>
  <td>$r[ket]</td>
  <td><a class='btn btn-primary' href=?module=galeri&act=editgaleri&id=$r[id_image]>Edit</a>
  <a class='btn btn-danger' href=\"aksi.php?module=galeri&act=hapus&id=$r[id_image]\"onClick=\"return confirm('apakah anda benar akan menghapus galeri $r[id_image]?')\">Hapus</a>
  </td></tr>";
  $no++;
}
echo "</table>";
break;
//tambah galeri
case "tambahgaleri":
echo "<h2>Tambah galeri</h2>
<form name='form1' method='post' action='aksi.php?module=galeri&act=input' enctype='multipart/form-data'>
<div class='col-md-5'>
<div class='form-group'>
<input class='form-control' name='nama_gambar' type='text' size='35' placeholder='Enter Name Galeri'>
</div>
<div class='form-group'>
<input name='gambar' type=file >
</div>
<div class='form-group'>
<textarea id='mytextarea' name='ket'></textarea>
</div>
<input type='submit' class='btn btn-primary' name='submit' value='Simpan'>
<input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
</div>
</form>";
break;
//edit galeri
case "editgaleri":
$edit=mysqli_query($koneksi, "select * from tabel_image where id_image='$_GET[id]'");
$r=mysqli_fetch_array($edit);
echo "<h2>Edit galeri</h2>
<form name='form1' method='post' action='aksi.php?module=galeri&act=update' enctype='multipart/form-data'>
<div class='col-md-5'>
<div class='form-group'>
<input type=hidden name=id value='$r[id_image]'>
<input class='form-control' name='nama_gambar' type='text' size='35' value='$r[nama_gambar]'>
</div>
<div class='form-group'>
<div class='form-group'>
<img src='galeri/$r[gambar]' width='50'><br>
<input name='gam_baru' type=file size='30'>
</div>
<textarea id='mytextarea' class='form-control' name='ket' cols='35' rows='4' placeholder='Enter Keterangan'>$r[ket]</textarea>
</div>
<input type='submit' class='btn btn-primary' value='Update'>
<input type=button class='btn btn-danger' value=Batal onclick=self.history.back()>
</div>
</form>";
break;}
?>
<script type="text/javascript" src="../tinymce/tiny_mce.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: "#mytextarea"
  });
</script>