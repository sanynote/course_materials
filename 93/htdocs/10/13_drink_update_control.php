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

	$name = $_GET['name'];
	$price = $_GET['price'];

	/*
		[매우중요_정리]

			1) 새로 기입하는 INSERT INTO의 경우 기존의 데이터가 없어도 새로 기입이 가능함
			2) UPDATE는 기존에 있는 정보를 기준으로 값들을 바꾸기때문에 반드시 해당하는 정보가
			하나는 있어야한다.

			* price만 바꾸는것이 아니라 total도 바뀌어야함
			* 가격이 바뀌면 해당하는 총 합계도 바뀌어야함
	*/
	


	if($name !="" && $price !=""){
		
		$sql = "UPDATE drink SET price='$price' , total=num*price WHERE name='$name' ";

		mysqli_query($conn, $sql);
		# 연결이 된 자료를 넘겨주겠습니다

		echo "<p style='text-align:center; color:blue;'>데이터가 변경되었습니다.</p>";
		# 다음 페이지로 넘겨주기
		echo "<meta http-equiv='Refresh' content='1; 14_drink_update_result.php?nm=$name && pri=$price'/>";
	}
	else{
		echo "<p style='text-align:center; color:red;'>값이 비어 있습니다. 확인해 주세요.</p>";
	}
?>