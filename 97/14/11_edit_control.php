<?php
	
	# 01) 초기화 링크걸기
	include "00_conn.php";


	# 02) 넘어오는 번호 확인하기
	# ?로 넘어오는 값 변수에 담고 확인
	$no = $_GET['no'];
	
	echo "넘어오는 번호 확인: ".$no." <br/>";
	
	
	# 03) title, name, email, pass, content
	# 변수에 담고 넘어오는지 확인하기
	
	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$content = $_POST['content'];

	echo "넘어오는 값 확인: ".$title." / ".$name." / ".$email." / ".$pass." / ".$content." <br/>";

	# cmd, 콘솔에서 선수 작업: SELECT pass FROM freeboard WHERE no='3';

	
	# 04) 넘겨 받은 pass와 같은 pass 필드의 정보만 호출하기
	
	$pwSql = "SELECT pass FROM freeboard WHERE no='$no' ";
	$result = mysqli_query($conn, $pwSql);

	$row = mysqli_fetch_array($result);

	/*
		05) pass 필드 확인하기, 넘겨온 pass와 조회된 pass 필드의 값이 같다면 해당하는
		정보로 변경하기

		같지 않다면, 알림창 띄우기 (비밀번호가 맞지 않습니다. 확인해 주세요) , 
		history.go 사용하여 뒤로 돌아가도록 만들기
	*/

	if($row['pass'] == $pass){
		$sql = "UPDATE freeboard SET title='$title', name='$name', email='$email', content='$content', wdate=now() WHERE 
		no='$no' ";

		mysqli_query($conn, $sql);
		echo "<script>alert('수정이 완료되었습니다.');</script>";
	}
	else{
		echo "<script>alert('비밀번호가 맞지 않습니다. 확인해 주세요'); history.go(-1);</script>";
	}

	# 06 로그인 끊기 
	mysqli_close($conn);

	# 07) meta 이용하여 05_list_basic.php 파일로 넘어가도록 만들기
	echo "<meta http-equiv='Refresh' content='2; url=05_list_basic.php'/>";
?>