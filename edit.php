<?php
	require_once "core/init.php";

	if( isset ($_POST['ubah']) ) {
		$id = $_POST['id'];
		$sholat = $_POST['sholat'];
		$tilawah = $_POST['tilawah'];
		$zikir = $_POST['zikir'];
		$istighfar = $_POST['istighfar'];
		$belajar = $_POST['belajar'];
		

		if ( edit_mutabaah ( $id, $sholat, $tilawah, $zikir, $istighfar, $belajar) ){
			header("Location:lihat.php");
		}else{
			echo "Data belum berhasil diedit";
		}
	}

	$id = $_GET['id'];
	$query = "SELECT * FROM mt_hari WHERE id=$id";
	$result = mysqli_query($link, $query);
	while($edit_data = mysqli_fetch_array($result)){
			//$nama		= $edit_data['nama'];
			$sholat		= $edit_data['sholat'];
			$tilawah	= $edit_data['tilawah'];
			$zikir		= $edit_data['matsurat'];
			$istighfar	= $edit_data['istighfar'];
			$belajar	= $edit_data['belajar'];
			//$waktu		= $edit_data['waktu'];
	}

	require_once "view/header.php";
?>
<div class="form-add">
<form method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td class="label">Sholat Wajib</td>
				<td><input type="text" name="sholat" class="in-add" value=<?php echo $sholat;?> ></td>
			</tr>
			<tr> 
				<td class="label">Tilawah</td>
				<td><input type="text" name="tilawah" class="in-add" value=<?php echo $tilawah;?> ></td>
			</tr>
			<tr> 
				<td class="label">Al-Matsurat</td>
				<td><input type="text" name="zikir" class="in-add" value=<?php echo $zikir;?> ></td>
			</tr>
			
			<tr>
				<td class="label">Istighfar 100x</td>
				<td><input type="radio" name="istighfar" value="Ya" <?php echo ($istighfar=='Ya')?'checked':'' ?> >Ya
				<input type="radio" name="istighfar" value="Tidak" <?php echo ($istighfar=='Tidak')?'checked':'' ?> >Tidak</td>
			</tr>

			<tr> 
				<td class="label">Belajar 1 Jam</td>
				<td><input type="radio" name="belajar" value="Ya" <?php echo ($belajar=='Ya')?'checked':'' ?> >Ya
				<input type="radio" name="belajar" value="Tidak" <?php echo ($belajar=='Tidak')?'checked':'' ?> >Tidak</td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value= <?php echo $_GET['id'];?> ></td>
				<td><input type="submit" name="ubah" value="Ubah Mutabaah" class="btn-login"></td>
			</tr>
		</table>
	</form>
</div>
 

<br>
<?php require_once "view/footer.php"; ?>