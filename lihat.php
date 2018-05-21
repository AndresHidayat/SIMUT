<?php
	require_once "core/init.php";
	if (!isset($_SESSION['nama'])){
		$_SESSION['msg'] = "Anda harus login dahulu untuk mengkases halaman ini";
		header('Location:login.php');
	}
	
	require_once "view/header.php";
?>
<div class="form-lihat">
	<table width='80%' border=1 class="tabel-lihat">
 
    <tr>
        <th>Username</th> <th>Sholat</th> <th>Tilawah</th> <th>Al-Matsurat</th> <th>Istighfar</th> <th>belajar</th> <th>waktu</th> <th>Ubah</th>
    </tr>
     <?php  
    	$result = lihat_mutabaah();
	    while($data = mysqli_fetch_array($result)) {         
	        echo "<tr>";
	        echo "<td>".$data['nama']."</td>";
	        echo "<td>".$data['sholat']."</td>";
	        echo "<td>".$data['tilawah']."</td>";  
	        echo "<td>".$data['matsurat']."</td>";  
	        echo "<td>".$data['istighfar']."</td>";  
	        echo "<td>".$data['belajar']."</td>";    
	        echo "<td>".$data['waktu']."</td>";
	        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='del.php?id=$data[id]'>Delete</a></td></tr>";        
	    }
    ?>
    </table>
 </div>  
    <br>


 <?php require_once "view/footer.php"; ?>