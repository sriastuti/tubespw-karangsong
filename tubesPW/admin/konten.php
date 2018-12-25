<?php
include "../database/koneksi.php";
//bagian home admin
if ($_GET['module']=='home') {

	echo "<ol class='breadcrumb'>
		<li class='breadcrumb-item'>
			<a href='server.php?module=home'>Dashboard</a>
		</li>
		<li class='breadcrumb-item active'>Overview</li>
	</ol>
	<h2>Halaman Utama</h2>
	<p class=welcome>Selamat Datang <b> $_SESSION[namauser]</b>,
		Silakan klik menu pilihan disebelah kiri untuk mengelola konten
		website<br> Terima Kasih</p>";
	}

//bagian user
		elseif ($_GET['module']=='user') {
			include "modul/user.php";
		}
//bagian galeri
		elseif ($_GET['module']=='galeri') {
			include "modul/galeri.php";
		}
//bagian tiket
		elseif ($_GET['module']=='tiket') {
			include "modul/tiket.php";
		}
// Apabila modul tidak ditemukan
		else{
			echo "<p><b>MODUL BELUM ADA</b></p>";
		}
		?>