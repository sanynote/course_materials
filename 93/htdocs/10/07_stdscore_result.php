<?php

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

	# ? 넘어온 정보 확인하기: nm=$name && kor=$kor && eng=$eng

	$name = $_GET['nm'];
	$kor = $_GET['kor'];
	$eng = $_GET['eng'];
	
	# echo "넘어오는 정보 확인하기: ".$name." / ".$kor." / ".$eng;

	# 넘겨온 정보와 일치하는 모든 데이터 조회하기 
	$sql = "SELECT * FROM stdscore WHERE name='$name' AND kor='$kor' AND eng='$eng' ";

	# 로그인이 되어 있다면 넘겨주기
	$result = mysqli_query($conn, $sql);


	# 조회된 테이블을 한줄씩 읽기
	$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>stdscore_result</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<h2>이름, 국어점수, 영어점수, 수학점수, 총점, 평균 출력받기</h2>
	<p>
		<label for="name">이름</label>
		<input id="name" type="text" value="<?=$row['name']?>"/>
	</p>
	<p>
		<label for="kor">국어점수</label>
		<input id="kor" type="text" value="<?=$row['kor']?>"/>
	</p>
	<p>
		<label for="eng">영어점수</label>
		<input id="eng" type="text" value="<?=$row['eng']?>"/>
	</p>
	<p>
		<label for="math">수학점수</label>
		<input id="math" type="text" value="<?=$row['math']?>"/>
	</p>
	<p>
		<label for="total">총점</label>
		<input id="total" type="text" value="<?=$row['total']?>"/>
	</p>
	<p>
		<label for="avg">평균</label>
		<input id="avg" type="text" value="<?=$row['avg']?>"/>
	</p>
 </body>
</html>