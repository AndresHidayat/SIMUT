<?php
	require_once "core/init.php";

	if (!isset($_SESSION['nama'])){
		$_SESSION['msg'] = "Anda harus login dahulu untuk mengkases halaman ini";
		header('Location:login.php');
	}

	require_once "view/header.php";
?>

<div class="content2">
					<p class="paragraf1">Ahlan wa Sahlan <?php echo $_SESSION['nama']; ?></p>
					<p class="paragraf2">Pada suatu hari Rasulullah shallallahu alaihi wasallam memerintahkan kepada 
					kita untuk bersedekah, dan hal itu sangat bertepatan sekali dengan adanya hartaku, lalu saya bergumam,
					Hari ini saya pasti melampaui Abu Bakar radhiallahu  	anhu apabila saya mendahuluinya suatu saat nanti,
					 lalu saya menginfakkan setengah dari hartaku, maka Rasulullah shallallahu ‘alaihi wasallam bersabda, 
					Tidakkah ada yang engkau sisakan buat keluargamu? Saya menjawab, Saya telah menyisakan buat mereka 
					semisal harta itu (setengah lagi) kemudian Abu Bakar menginfakkan seluruh hartanya, lalu Rasulullah 
					shallallahu alaihi wasallam bersabda, Wahai Abu Bakar, tidakkah ada yang engkau sisakan buat 
					keluargamu? Dia menjawab, ‘Saya telah menyisakan Allah dan RasulNya buat mereka, saya berkata, 
					Demi Allah, saya tidak akan mampu melampauinya untuk mencapai keutamaan, selamanya.
										</p>
				</div>


<br><br>

<?php if (cek_status ($_SESSION['nama']) ) {?>
	<div>Halo Admin</div>
<?php } ?>

<?php require_once "view/footer.php"; ?>