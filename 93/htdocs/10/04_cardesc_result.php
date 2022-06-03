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

	# ? 방식으로 넘어오는 정보들 : nm=$carname && co=$carcolor
	
	$carname = $_GET['nm'];
	$carcolor = $_GET['co'];

	# echo "넘어오는 정보 확인: ".$carname." / ".$carcolor."<br/>";

	/*
		1) 요청할 sql문 작성하기
			전체 데이터 중에서 넘겨온 정보와 일치하는 정보만 조회하기

		2) 로그인이 되어 있다면 넘겨주기
	*/

	$sql = "SELECT * FROM cardesc WHERE carname='$carname' AND carcolor='$carcolor' ";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>cardesc_result</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<p>
		<label for="carname">모델명: </label>
		<input id="carname" type="text" value="<?=$row['carname']?>"/>
	</p>
	<p>
		<label for="carprice">가격: </label>
		<input id="carprice" type="text" value="<?=$row['carprice']?>"/>
	</p>
	<p>
		<label for="caryear">연도: </label>
		<input id="caryear" type="text" value="<?=$row['caryear']?>"/>
	</p>
	<p>
		<label for="carcolor">색상: </label>
		<input id="carcolor" type="text" value="<?=$row['carcolor']?>"/>
	</p>

 </body>
</html>