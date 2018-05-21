<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pelaporan Mutabaah ROIS FMIPA Unila</title>
	<link rel="stylesheet" type="text/css" href="view/style.css">
</head>
<body style="background-image: url(img/bulan.jpg);">

	<header>
		<h1>Sistem Pelaporan Mutabaah ROIS FMIPA Unila</h1>

		<nav>
		<?php 
			if  ( isset($_SESSION['nama']) ){
				if( cek_status ($_SESSION['nama']) ){?>
					<a href="index.php">Beranda</a>
					<a href="logout.php">Logout</a>
				<?php }else{ ?>
					<div class="menu">
						<ul>
							<a href="index.php"><li>Beranda</li></a>
							<a href="add.php"><li>Isi Mutabaah</li></a>
						</ul>
					</div>
					<div class="menu2">
						<ul>
							<a href="logout.php"><li>Logout</li></a>
							<a href="lihat.php"><li>Lihat Mutabaah</li></a>
							
						</ul>
					</div>
				<?php } 
			}else{ ?>
				
		<?php } ?>
		

		</nav>
	</header>

