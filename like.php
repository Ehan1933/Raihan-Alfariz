<?php
	include "koneksi.php";
	session_start ();
	
	if (!isset($_SESSION['UserID'])){
		//Untuk bisa like harus login dulu
		header("location:index.php?alert=login terlebih dahulu");
	}else{
			$FotoID=$_GET['FotoID'];
			$UserID=$_SESSION['UserID'];
		//Cek apakah user pernah like foto ini apa belum
		
		$sql=mysqli_query($koneksi, "select * from likefoto where FotoID='$FotoID' and UserID='$UserID'");
		
	if(mysqli_num_rows($sql)==1){
		//User sudah pernah like foto ini
		echo '<script>alert("Anda sudah menyukai foto ini"); document.location="index.php";</script>';
		
	}else{
		$TanggalLike=date('Y-m-d');
		mysqli_query($koneksi, "insert into likefoto values('','$FotoID','$UserID','$TanggalLike')");
		echo '<script>alert("Terimakasih"); document.location="index.php";</script>';
		}
	}
	
?>