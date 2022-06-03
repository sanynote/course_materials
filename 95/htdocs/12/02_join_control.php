<?php
	
	include "00_conn.php";

	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*
		[form에서 넘어오는 정보 확인하기]

			1)		method	: get
			2)		name:	name, price, num
			3)		변수로 만들기

	*/
	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$userphone = $_POST['userphone'];

	# 03) 우편번호 조합하기
	# members 테이블에서 확인해보면 상세주소, 우편번호를 따로 보관하는 필드가 없음
	# address 필드에 모두 저장될 수 있도록 만들기

	# 12345 무슨동 무슨 아파트

	$post3 = $_POST['post3'];
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];

	$address = $post3." ".$add1." ".$add2;
	
	echo "넘어오는 정보 확인: ".$userid." / ".$userpass." / ".$username." / ".$useremail."/ ".$userphone."/ ".$address." <br/>";

	# 04) 회원가입하기
	/*
		1) 넘겨받은 정보들이 빈칸이 아닐 경우, 필드에 맞춰서 members 테이블에 저장되도록 만들기
		2) 빈칸표현, 빈칸이 아닌 표현

			$post3 !=""		빈칸이 아닌 경우
			$post3 ==""		빈칸인 경우

		3) 공간이 비어있다 표현, 공간이 비어있지 않을때 표현

			empty($post3)	,	공간이 비어있음
			!empty($post3)	,	공간이 비어있지 않을때
	
	*/

/*
	if($userid !="" && $userpass !="" && $username !="" && $useremail !="" && $userphone !=""){*/

	if(!empty($userid) && !empty($userpass) && !empty($username) && !empty($useremail) && !empty($userphone) && !empty($address)){
		
		$sql = "INSERT INTO members (userid, userpass, username, useremail,userphone,address) VALUES ('$userid', '$userpass', 
		'$username', '$useremail','$userphone','$address')";

		$result = mysqli_query($conn, $sql);
	}

	if($result){
	
		echo "<p style='text-align:center; color:blue;'>회원가입에 성공했습니다</p>";
	}
	
	else{
		echo "<p style='text-align:center; color:red;'>회원가입에 실패했습니다.</p>";
	}
	
?>