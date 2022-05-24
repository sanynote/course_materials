<?php

	#01) 브라우저를 실행했을 때 문자열이 깨지지 않도록 셋팅하기!
	header("content-type:text/html; charset=utf-8");


	#02) DB와 현재 페이지 연결하기 (milk테이블 연동하기)

	echo "<h2>DB와 페이지 연결하기, milk 테이블 이용하기</h2>";
	/*
		[cmd, "shell", 터미널, 로그인시]
		
		1) mysql 언어를 사용하기 위하여 cmd  , shell 창과 연결
			
			로그인	
				mysql -uroot -p

		2) 매우중요) 
				현재 페이지와 cmd(shell) 영역 연결하기

				[로그인을 위하여 작성해야 하는 값]
					
					1) 주소 (127.0.0.1	 == localhost )
					2) 아이디 uroot (u == user)		, 실제 아이디명 root
					3) 비밀번호 p		(p == password)	, 빈칸: ""
					4) 접속할 db 명 입력
	*/

	$conn = mysqli_connect("localhost","root","","db1");
	
	#03) 접속에 문제가 생겼을 때 에러코드 띄우기
	if($conn->connect_error){
		echo $conn-> connect_errorno;	# 에러 났을 때 출력번호
		exit;
	}

	#04) DB와 연결될 때 문자열 셋팅!
	/*
		#01) 브라우저에서 확인할 때 문자열이 깨지지 않도록 셋팅	utf-8
		#04) shell, cmd에서 테이블을 호출하여 현재 페이지로 가져올 때 문자열 셋팅! utf8 
	*/

	$conn -> set_charset("utf8");
	
	/////////////////////////////// 01~04 까지 초기화 셋팅 ////////////////////////////

	# 01) db에 요청할 sql 문 작성하기
	# 요청할 쿼리문을 미리 작성함!

	$sql = "SELECT * FROM milk";

	# 02) 로그인이 잘 되어 있다면, 미리 작성해둔 sql문 요청하기
	$result = mysqli_query($conn, $sql);

	# 03) 호출한 테이블의 정보를 가로로 한줄 씩 읽고 출력받기
	/*
		[중요]
			
			출력받을 때 표현방법 : MYSQLI_NUM			:	 필드를 공간으로 세어줄때  like[0]	, like[1]...
			출력받을 때 표현방법 : MYSQLI_ASSOC		:	 필드를 연관배열 형태로 가져올때	like[a]
	
	
		* 나열된 정보 가로로 한줄 씩 읽기!
	*/
	
	$row = mysqli_fetch_array($result, MYSQLI_NUM);		// 한줄씩 읽기
	echo "우유 이름: ".$row[1]." / 우유가격: ".$row[2]." <br/>";

	$row = mysqli_fetch_array($result, MYSQLI_NUM);		// 한줄씩 읽기
	echo "우유 이름: ".$row[1]." / 우유가격: ".$row[2]." <br/>";

	$row = mysqli_fetch_array($result, MYSQLI_NUM);		// 한줄씩 읽기
	echo "우유 이름: ".$row[1]." / 우유가격: ".$row[2]." <br/>";

	$row = mysqli_fetch_array($result, MYSQLI_NUM);		// 한줄씩 읽기
	echo "우유 이름: ".$row[1]." / 우유가격: ".$row[2]." <br/>";

	$row = mysqli_fetch_array($result, MYSQLI_NUM);		// 한줄씩 읽기
	echo "우유 이름: ".$row[1]." / 우유가격: ".$row[2]." <br/>";

	$row = mysqli_fetch_array($result, MYSQLI_NUM);		// 한줄씩 읽기
	echo "우유 이름: ".$row[1]." / 우유가격: ".$row[2]." <br/>";

	$row = mysqli_fetch_array($result, MYSQLI_NUM);		// 한줄씩 읽기
	echo "우유 이름: ".$row[1]." / 우유가격: ".$row[2]." <br/>";


?>