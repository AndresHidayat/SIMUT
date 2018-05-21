<?php

	require_once "core/init.php";

	$error='';
	
	if (isset($_SESSION['nama'])) header('Location:index.php');
	

	if ( isset($_POST['submit']) ){
		$username = $_POST['username'];
		$word = $_POST['password'];
		$nama = $_POST['nama'];
		$gender = $_POST['gender'];
		$amanah = $_POST['amanah'];
		$angkatan = $_POST['angkatan'];

		if(!empty( trim($username) ) && !empty( trim($word) ) ){
			if ( cek_nama ($username) == 0 ){
				if (register_user ($username, $word, $nama, $gender, $amanah, $angkatan)) redirect_login($username);
				else $error = "gagal daftar";
			}else{
				$error = "Username sudah terdaftar, silahkan gunakan username yang lain";
			}	
		}else{
			$error = "tidak boleh kosong";
		}	
	}
	require_once "view/header.php";
?>

<div class="form-regist">
	<form action="register.php" method="post">
		<div  class="head-regist">
			<head >Pendaftaran Akun</head><br>
		</div>
			<label for="">Username</label><br>
			<input type="text" name="username" class="in-regist"><br><br>

			<label for="">Password</label><br>
			<input type="password" name="password" class="in-regist"><br><br>

			<label for="">Nama</label><br>
			<input type="text" name="nama" class="in-regist"><br><br>

			<label>Jenis kelamin</label><br>
			<input type="radio" name="gender" value="Ikhwan">Ikhwan
			<input type="radio" name="gender" value="Akhwat">Akhwat<br><br>

			<label for="">Amanah</label><br>
			<input type="text" name="amanah" class="in-regist"><br><br>
			
			<label for="">Angkatan</label><br>
			<input type="text" name="angkatan" class="in-regist"><br><br>

		

			<input type="submit" name="submit" value="DAFTAR" class="btn-login">
			<br>

			<?php if ($error !=""){?>
				<div id="error">
					<?php echo $error; ?>
				</div>	
			<?php } ?>
			
		<div id="link-login">
			<a href="register.php">Register</a>
			<a href="login.php">Login</a>
		</div>
	</form>
</div>
<?php require_once "view/footer.php"; ?>