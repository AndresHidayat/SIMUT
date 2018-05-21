<?php
	require_once "core/init.php";

	if( isset ($_POST['isi']) ) {

		$sholat = $_POST['sholat'];
		$tilawah = $_POST['tilawah'];
		$zikir = $_POST['zikir'];
		$istighfar = $_POST['istighfar'];
		$belajar = $_POST['belajar'];
		

		if ( isi_mutabaah ( $sholat, $tilawah, $zikir, $istighfar, $belajar) ){
			echo "Selamat data mutabaah anda behasil diisi, silahkan lihat di <a href='lihat.php'>Lihat Mutabaah</a>";
		}else{
			echo "Data belum berhasil diisi";
		}
	}
	require_once "view/header.php";
?>
<div class="form-add">
<form action="add.php" method="post">
		<table  border="0">
			<tr> 
				<td class="label">Sholat Wajib</td>
				<td><input type="text" name="sholat" class="in-add"></td>
			</tr>
			<tr> 
				<td class="label">Tilawah</td>
				<td><input type="text" name="tilawah" class="in-add"></td>
			</tr>
			<tr> 
				<td class="label">Al-Matsurat</td>
				<td><input type="text" name="zikir" class="in-add"></td>
			</tr>
			<tr> 
				<td class="label">Istighfar 100x</td>
				<td><input type="radio" name="istighfar" value="Ya">Ya
				<input type="radio" name="istighfar" value="Tidak">Tidak</td>
			</tr>
			<tr> 
				<td class="label">Belajar 1 Jam</td>
				<td><input type="radio" name="belajar" value="Ya">Ya
				<input type="radio" name="belajar" value="Tidak">Tidak</td>
			</tr>		
			<tr> 
				<td></td>
				<td><input type="submit" name="isi" value="Isi Mutabaah" class="btn-login"></td>
			</tr>
		</table>
	</form>
</div>

<?php require_once "view/footer.php"; ?>