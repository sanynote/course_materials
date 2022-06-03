<?php

	header("content-type:text/html; charset=utf-8");

	/*
		[정리]
			DB에서 무언가를 가져오거나 호출할 정보가 없기때문에 00_conn.php 자료가 필요없음
			네트워크에 있는 SESSION 정보만 삭제하기
	
	*/

	#01) 세션 시작하기
	session_start();

	#02) 세션 삭제하기
	session_unset();

	#02) 세션 삭제하기
	session_destroy();

	echo "<p style='text-align:center; color:red; '>로그아웃 되었습니다.</p>";
	echo "<meta http-equiv='Refresh' content='2; url=03_login.php'/>";

?>