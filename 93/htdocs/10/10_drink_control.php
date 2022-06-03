<?php
	
	///////////////////////////////////////////// [초기화] ///////////////////////////////////////////////

	# 01) 브라우저에서 띄울때 문자열이 깨지지 않도록 셋팅하기
	header("content-type:text/html; charset=utf-8");

	# 02) 접속환경 만들기
	# localhost == 127.0.0.1
	$conn = mysqli_connect("localhost","root","","db1");

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
			2)		name:	name, price, num
			3)		변수로 만들기

	*/
	$name = $_GET['name'];
	$price = $_GET['price'];
	$num = $_GET['num'];

	$total = $price*$num;

	# echo "넘어오는 정보 확인: ".$name." / ".$price." / ".$num." / ".$total." <br/>";


	if($name !="" && $price !="" && $num !=""){
		
		$sql = "INSERT INTO drink (name, price, num, total) VALUES ('$name', '$price', 
		'$num', '$total')";

		mysqli_query($conn, $sql);
		# 연결이 된 자료를 넘겨주겠습니다

		echo "<p style='text-align:center; color:blue;'>데이터가 입력되었습니다.</p>";
		# 다음 페이지로 넘겨주기
		echo "<meta http-equiv='Refresh' content='1; 11_drink_result.php?nm=$name && pri=$price'/>";
	}
	else{
		echo "<p style='text-align:center; color:red;'>값이 비어 있습니다. 확인해 주세요.</p>";
	}
?>