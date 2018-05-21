<?php
	require_once "core/init.php";
	
	$error = "";

	if (isset($_SESSION['nama'])) header('Location:index.php');
	

	if ( isset($_POST['submit']) ){
		$username = $_POST['username'];
		$word = $_POST['password'];

		if(!empty( trim($username) ) && !empty( trim($word) ) ){
			if (cek_nama($username) != 0 ){
				if ( cek_data($username, $word) ){
					redirect_login($username);
				}else{
					$error = "username atau password anda ada yang salah";
				}
			}else{
				$error = "username belum terdaftar";
			}
				
		}else{
			$error = "tidak boleh kosong";
		}
			
	}

	require_once "view/header.php";
	

	if ( isset ($_SESSION['msg']) ){
		flash_msg( $_SESSION ['msg'] );
	}
?>

<div class="form-regist">
	

	<div class="head-regist">
		<head>Login</head>
	</div>

	<form action="login.php" method="post">
		<div>
			<input type="text" name="username" placeholder="Username"  class="form-input" > <br><br>
			<input type="password" name="password" placeholder=" Password"  class="form-input"><br><br>
		</div>
		<input type="submit" name="submit" value="LOGIN" class="btn-login">
		
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
<br>

<?php require_once "view/footer.php"; ?> 