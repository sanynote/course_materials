<?php
	
	/////////////////////////////// [초기화] /////////////////////////////
	header("content-type:text/html; charset=utf-8");
	$conn = mysqli_connect("localhost","root","","inboard");
	//$conn = mysqli_connect("localhost","sunnyjuice94","Sunny1120!","sunnyjuice94");
	
	// 바꾸고 00_conn.php 파일만 파일질라에 업로드
	

	if($conn->connect_error){
		echo $conn-> connect_errorno;
		exit;
	}

	$conn -> set_charset("utf8");
	
	/////////////////////////////////////////////////////////////////////////////////

?>