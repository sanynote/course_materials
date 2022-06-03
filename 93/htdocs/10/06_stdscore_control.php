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
		[form에서 넘어오는 값 확인하기]
			
			1) method :	post
			2) name :		name, kor, eng, math
			
			3) 변수에 담기:
			4) 넘어오는 값 확인하기:
	*/
	

	$name = $_POST['name'];
	$kor = $_POST['kor'];
	$eng = $_POST['eng'];
	$math = $_POST['math'];

	echo "넘어오는 정보 확인하기: ".$name." / ".$kor." / ".$eng." / ".$math." <br/>";

	# 총점
	$total = $kor+$eng+$math;

	# 평균
	$avg = $total/3;


	if($name !="" && $kor !="" && $eng !="" && $math !=""){
	
		/*
			1) 요청할 sql문 작성하기
			2) 로그인이 되어 있다면 sql문 넘겨주기
		*/

		$sql = "INSERT INTO stdscore (name, kor, eng, math, total, avg) 
		VALUES ('$name', '$kor', '$eng', '$math', '$total', '$avg')";

		mysqli_query($conn, $sql);

	}
	else{
		echo "<p style='text-align:center; color:red;'>값이 비어 있습니다. 확인해 주세요.</p>";
	}

	# 로그인 끊기
	mysqli_close($conn);

	# 다음페이지 넘겨주기
	echo "<meta http-equiv='Refresh' content='1; 07_stdscore_result.php?nm=$name && kor=$kor && eng=$eng'/>";
?>