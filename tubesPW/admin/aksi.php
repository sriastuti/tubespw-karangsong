<?php
include "../database/koneksi.php";
$module=$_GET['module'];
$act=$_GET['act'];
//$id=$_GET['id'];

if ($module=='galeri' AND $act=='hapus') {
	mysqli_query($koneksi,"delete from tabel_image where
		id_image='$_GET[id]'");
	header('location:server.php?module=galeri');
}
elseif ($module=='galeri' and $act=='input')
{
	$set = true;
	$msg = "";
//tentukan variabel file yg diupload dan tipe file
	$tipe_file	= $_FILES['gambar']['type'];
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$nama_file	= $_FILES['gambar']['name'];
	$save_file =move_uploaded_file($lokasi_file,"galeri/$nama_file");

	if(empty($lokasi_file))
	{
		$set=false;
		$msg= $msg.'Upload gagal, Anda Lupa Mengambil Gambar..';
	}
	else
	{
//tentukan tipe file harus image 
		if ($tipe_file != "image/gif" and
			$tipe_file != "image/jpeg" and
			$tipe_file != "image/jpg" and
			$tipe_file != "image/pjpeg" and
			$tipe_file != "image/png")
		{
			$set=false;
			$msg= $msg. 'Upload gagal, tipe file harus image..';
		}
		else
		{
			isset($save_file);
		}
//replace di server 
		if($save_file)
		{
			chmod("galeri/$nama_file", 0777);
		}
		else
		{
			$msg = $msg.'Upload Image gagal..';
			$set =	false;
		}
	}
	if($set)
	{
		$nm_galeri=$_POST['nama_gambar'];
		$ket=$_POST['ket'];
		$sql=mysqli_query($koneksi,"insert into tabel_image(nama_gambar,gambar,ket)values('$nm_galeri','$nama_file','$ket')");
		$msg= $msg.'Upload Galeri Sukses..';
		print "<meta http-equiv=\"refresh\" content=\"1;URL=server.php?module=galeri\">";
	}
	echo "$msg";
}

//Update galeri
elseif ($module=='galeri' and $act=='update')
{
	$set = true;
	$msg = "";

//tentukan variabel file yg diupload dan tipe file
	$tipe_file	= $_FILES['gam_baru']['type'];
	$lokasi_file = $_FILES['gam_baru']['tmp_name'];
	$nama_file	= $_FILES['gam_baru']['name'];
	$save_file =move_uploaded_file($lokasi_file,"galeri/$nama_file");

	if(empty($lokasi_file))
	{
		isset($set);
	}
	else
	{
//tentukan tipe file harus image 
		if ($tipe_file != "image/gif" and
			$tipe_file != "image/jpeg" and
			$tipe_file != "image/jpg" and
			$tipe_file != "image/pjpeg" and
			$tipe_file != "image/png")
		{
			$set=false;
			$msg= $msg. 'Upload gagal, tipe file harus image..';
		}
		else
		{
			$unlink=mysqli_query($koneksi, "select * from tabel_image where id_image='$_POST[id]'");
			$CekLink=mysqli_fetch_array($unlink); 
			if(!empty($CekLink['gambar']));
			{
				unlink("galeri/$CekLink[gambar]");
			}
			isset($save_file);
		}

//replace di server 
		if($save_file)
		{
			chmod("galeri/$nama_file", 0777);
		}
		else
		{
			$msg = $msg.'Upload Image gagal..';
			$set =	false;
		}
	}
	if($set)
	{
		$id=$_POST['id'];
		$nm_galeri=$_POST['nama_gambar'];
		$ket=$_POST['ket'];

		if(empty($lokasi_file))
		{
			mysqli_query($koneksi, "update tabel_image set nama_gambar='$nm_galeri',ket='$ket'where id_image='$id'");}
			else{mysqli_query($koneksi, "update tabel_image set nama_gambar='$nm_galeri',ket='$ket', gambar='$nama_file' where id_image='$id'");
		}
		$msg= $msg.'Update Galeri Sukses..'; print "<meta http-equiv=\"refresh\"
		content=\"1;URL=server.php?module=galeri\">";
	}
	echo "$msg";
}

elseif ($module == 'tiket' AND $act == 'hapus' ) {
	mysqli_query($koneksi,"delete from tiket where
		id_tiket='$_GET[id]'");
	header('location:server.php?module=tiket');
}
elseif ($module=='tiket' and $act=='input')
{
	$set = true;
	$msg = "";{
		if($set)
		{
			$usia = $_POST['usia'];
			$harga = $_POST['harga'];

			$sql=mysqli_query($koneksi,"insert into tiket(usia,harga)values('$usia','$harga')");
			$msg= $msg.'Tambah Tiket Sukses..';
			print "<meta http-equiv=\"refresh\" content=\"1;URL=server.php?module=tiket\">";
		}
		echo "$msg";
	}
}
elseif ($module=='tiket' and $act=='update')
{
	$set = true;
	$msg = "";

	if($set)
	{
		$id=$_POST['id'];
		$usia=$_POST['usia'];
		$harga=$_POST['harga'];
		mysqli_query($koneksi, "update tiket set usia='$usia',harga='$harga'where id_tiket='$id'");
		$msg= $msg.'Update Galeri Sukses..'; print "<meta http-equiv=\"refresh\"
		content=\"1;URL=server.php?module=tiket\">";
	}
	echo "$msg";
}

elseif ($module=='user' and $act=='update')
{
	$set = true;
	$msg = "";

	if($set)
	{
		$id=$_POST['id'];
		$user_admin=$_POST['user_admin'];
		$pass_admin=$_POST['pass_admin'];
		mysqli_query($koneksi, "update tiket set user_admin='$user_admin',pass_admin='$pass_admin'where id_admin='$id'");
		$msg= $msg.'Update Galeri Sukses..'; print "<meta http-equiv=\"refresh\"
		content=\"1;URL=server.php?module=user\">";
	}
	echo "$msg";
}

elseif ($module=='user' and $act=='gantipwd') {
	$set = true;
	$msg = "";

	$id=$_POST['id'];
	$lama=$_POST['pwd_lama1'];
	$lama2=$_POST['pwd_lama2'];
	$baru=$_POST['pwd_baru1'];
	$baru2=$_POST['pwd_baru2'];
	$baru_banget=$baru; 
	if ( $lama == $lama2)
	{
		if ($baru == $baru2)
		{
			if($set)
			{
				mysqli_query($koneksi, "UPDATE admin SET pass_admin='$baru_banget' WHERE user_admin='$id'");
				$msg= $msg.'Ganti Password Sukses..'; print "<meta http-equiv=\"refresh\"
				content=\"1;URL=server.php?module=home\">";
			}
		}
		else
		{
			$set=false;
			$msg= $msg.'Password Baru tidak sama..!!';
		}
	}
	else
	{
		$set=false;
		$msg= $msg.'Password Lama tidak sama..!!';
	}
	echo "$msg";
	print "<br><br><a href = \"javascript:history.go(-1)\"> Back</a>";
}
?>

