<?php

	#01) 브라우저를 실행했을 때 문자열이 깨지지 않도록 셋팅하기!
	header("content-type:text/html; charset=utf-8");

	$conn = mysqli_connect("localhost","root","","db1");
	
	if($conn->connect_error){
		echo $conn-> connect_errorno;
		exit;
	}


	$conn -> set_charset("utf8");

	$_GET[mSelect] = $_GET['mSelect'];

	echo "넘겨받은 번호 확인하기:".$mSelect."<br/>";

?>