<?php
	//fungsi buat daftar dan insert data ke database
	function register_user ($username, $word, $nama, $gender, $amanah, $angkatan){
		global $link;

		$username		= esc( $username );
		$word			= esc( $word);
		$nama 			= esc( $nama );
		$gender 		= esc( $gender );
		$amanah 		= esc( $amanah );
		$angkatan 		= esc( $angkatan );
		$word			= password_hash($word, PASSWORD_DEFAULT);	

		$query = "INSERT INTO akun (username, password, nama, gender, amanah, angkatan) VALUES ('$username','$word', '$nama', '$gender', '$amanah' , '$angkatan')";

		if ( mysqli_query ($link, $query) ) return true;
		else return false;
	}
	//fungsi cek jumlah username didatabase
	function cek_nama($username){
		global $link;

		$username		= esc( $username );
		$query 			= "SELECT * FROM akun WHERE username='$username' ";
		if ( $result = mysqli_query($link, $query) ) return mysqli_num_rows($result);
		
	}


	//untuk login

	function cek_data($username, $word){
		global $link;

		$username		= esc( $username );
		$word			= esc( $word);

		$query = "SELECT password FROM akun WHERE username='$username' ";
		$result = mysqli_query ($link, $query);
		$hash =mysqli_fetch_assoc($result)['password'];
		if ( password_verify($word,$hash)) return true;
		else return false;
		
	}

	//deklarasi mysqli_real_escape_string
	function esc($data){
		global $link;
		return mysqli_real_escape_string($link,$data);
	}
	//fungsi redirect login
	function redirect_login($username){
		$_SESSION['nama']=$username;
		header('Location:index.php');
	}

	//fungsi flash message
	function flash_msg($username){
		echo $_SESSION['msg'];
		unset ($_SESSION['msg']);
	}

	//fungsi cek status admin user
	function cek_status($username){
		global $link;
		$nama = esc($username);

		$query = "SELECT role FROM akun WHERE username = '$username' ";

		$result = mysqli_query($link, $query);
		$status = mysqli_fetch_assoc($result)['role'];

		if ($status == 1) return true;
		else false;
	}

	function isi_mutabaah($sholat, $tilawah, $zikir, $istighfar, $belajar){
		global $link;
		$nama = $_SESSION['nama'];
		$waktu = date('d-M-Y');
		$query = "INSERT INTO mt_hari (nama, sholat, tilawah, matsurat, istighfar, belajar, waktu) VALUES ('$nama','$sholat', '$tilawah', '$zikir', '$istighfar', '$belajar', '$waktu')";

		if (mysqli_query ($link, $query) ){
			return true;
		}else{
			return false;
		}
	}

	function lihat_mutabaah(){
		global $link;
		$query = "SELECT * FROM mt_hari ORDER BY id DESC";
		$result = mysqli_query($link, $query);
		return $result;
	}

	function del_mutabaah($id){
		global $link;
		$query = "DELETE FROM mt_hari WHERE id=$id";
		$result = mysqli_query($link, $query);
 		header("Location:lihat.php"); 
	}

	function edit_mutabaah ( $id, $sholat, $tilawah, $zikir, $istighfar, $belajar){
		global $link;
		$waktu = date('d-M-Y');
		$query = "UPDATE mt_hari SET sholat = '$sholat' ,tilawah = '$tilawah' , matsurat = '$zikir' , istighfar= '$istighfar', belajar = '$belajar' , waktu = '$waktu' WHERE id='$id' ";
		
		if (mysqli_query ($link, $query) ){
			return true;
		}else{
			return false;
		}
		
	}
?>
