<?php
	
	///////////////////////////////////////////// [초기화] ///////////////////////////////////////////////

	# 01) 브라우저에서 띄울때 문자열이 깨지지 않도록 셋팅하기
	header("content-type:text/html; charset=utf-8");

	# 02) 접속환경 만들기
	# localhost == 127.0.0.1
	$conn = mysqli_connect("localhost","root","","db2");

	# 03) 에러코드 출력
	if( $conn -> connect_error ){
		echo $conn -> connect_errorno;
		exit;
	}

	# 04) cmd, shell 문자열이 셋팅이 되어서 들어오는지 확인
	$conn -> set_charset("utf8");

	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*
		[form에서 넘어오는 정보 확인하기]

			1)		method	: get
			2)		name:	carname, carprice, caryear, carcolor

			3)		변수로 만들기

	*/
	$carname = $_GET['carname'];
	$carprice = $_GET['carprice'];
	$caryear = $_GET['caryear'];

	# echo "넘어오는 정보 확인: ".$carname." / ".$carprice." / ".$caryear." / ".$carcolor." <br/>";

	/*
		[매우중요]
			: 앞에 insert.php 페이지에서 required를 작성했기 때문에 현재 페이지로 빈칸이 넘어올 확률이 없음!
			
			: control페이지에서 테스트를 돌릴경우, 현재 페이지로만 제작해야 하기 때문에 빈칸이 넘어갈 수 있음!
				: if를 사용하여 막아두는것이 필수는 아니지만 필요할 수 있음!
	*/

	if($carname !="" && $carprice !="" && $caryear !="" ){
		/*
			1) 요청할 sql 문 작성하기
				
				: 새로 기입하는 문법 : INSERT INTO 테이블명
				: 기존 정보를 바꾸는 문법 : UPDATE 테이블명
			
			2) 로그인이 잘 되어 있다면 sql문 넘겨주기
		*/

		$sql = "UPDATE cardesc SET carprice='$carprice' , caryear='$caryear' WHERE carname='$carname' ";

		mysqli_query($conn, $sql);
	}
	else{
		echo "<p style='text-align:center; color:red;'>값이 비어 있습니다. 확인해 주세요.</p>";
	}


	# 로그인 끊기
	mysqli_close($conn);

	# 다음 페이지로 넘겨주기
	echo "<meta http-equiv='Refresh' content='1; 17_cardesc_update_result.php?nm=$carname && pri=$carprice'/>";
?>