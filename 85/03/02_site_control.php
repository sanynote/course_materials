<?php

	/* 01) 브라우저에서 확인할때 문자열이 깨지지 않도록 셋팅하기
	
		: header 부분에서 오타나 잘못 기입되었을때?

			1) 무한으로 현재 페이지를 다운받음
			2) 문자열이 깨지는 문제 발생

		tip) 
			: utf-8, 브라우저에서 셋팅한 문자열을 확인할때는 -(하이픈) 넣고 확인
			: utf8, (하이픈) 없음, cmd(shell)에서 넘어오는 문자열을 깨지지 않도록 셋팅 시 작성

			: 두벌씩 표현, euc-kr ("한글 입력시" 매우 중요 문자열 표현)
	
	*/
	
	header("content-type:text/html; charset=utf-8");

	echo "<h2>넘어오는 정보 확인하기 </h2>";

	/*
		02) 01_site.php에서 넘어오는 정보 확인하기

			: method 방식 확인하기
				: get 확인하기

			: name 값 확인하기
				: naver
				: daum
	*/

	# 03) 앞 페이지에서 넘어오는 name 값 확인하기
	# 정리) 줄이 바뀌어서 출력받을때는 echo 를 띄우고 출력받기

	/*
	echo $_GET["naver"]."<br/>";
	echo $_GET["daum"];
	*/

	# 04) 변수 사용하기

	$naver = $_GET["naver"];
	$daum = $_GET["daum"];

	echo "넘겨받은 웹 사이트는 ".$naver."과 ".$daum."입니다.";


	


?>