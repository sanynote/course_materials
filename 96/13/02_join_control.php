<?php

	# 01) 초기화 링크 설정

	include "00_conn.php";

	# 02) 아이디, 비밀번호, 이름, 이메일, 전화번호 넘겨받기
	# userid, userpass, username, useremail, userphone
	
	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$userphone = $_POST['userphone'];

	# 03) 우편번호 조합하기
	# members 테이블에서 확인 해보면 상세 주소나 우편번호를 따로 보관하는 필드가 없음!
	# address 필드에 모두 저장될 수 있도록 만들기
	
	# 12345	무슨동	무슨아파트

	# post3 (우편번호)
	$post3 = $_POST['post3'];

	# add1	(기본주소)
	$add1 = $_POST['add1'];

	# add2 (상세주소)
	$add2 = $_POST['add2'];


	$address = $post3." ".$add1." ".$add2;

	/*
		echo "넘어오는 정보 확인하기 : ".$userid." / ".$userpass." / ".$username." / ".$useremail." / ".$userphone." / ".$address."<br/>";
	*/
	
	# 04) 회원가입 하기
	/*
		1) 넘겨받은 정보들이 빈칸이 아닐 경우, 필드에 맞춰서 members 테이블에 저장되도록 만들기
		2) 빈칸 표현, 비칸이 아닌 표현

			$post3 !=""		빈칸이 아닌경우
			$post3 ==""		빈칸인 경우
	
		
		3) 공간이 비어 있다 표현	, 공간이 비어 있지 않을때 표현!
			
			empty($post3)	, 공간이 비어 있음!
			!empty($post3), 공간이 비어 있지 않을때!
	*/

	if( !empty($userid) && !empty($userpass) && !empty($username) && !empty($useremail) && !empty($userphone) && !empty($address)){
		
		$sql = "INSERT INTO members (userid, userpass, username, useremail, userphone, address) 
		VALUES
		('$userid', '$userpass', '$username', '$useremail', '$userphone', '$address')";
		
		$result = mysqli_query($conn, $sql);
	}

	/*
		[정보가 넘어갔다면]
			
			$result 안에 정보가 담기지만 true도 같이 생성됨!
			* 정보가 잘 넘어갔다면 이라는 비교수식으로

			$result == true	, 정보가 넘어갔다는 표현!

		매우중요)
			$result만 작성해도 알아서 true 인식하기 때문에 
			비교수식을 만들지 않아도 문제없음!
	*/

	if($result){
		echo "<p style='text-align:center; color:blue;'>회원가입에 성공했습니다.</p>";
	}
	else{
		echo "<p style='text-align:center; color:red;'>회원가입에 실패했습니다.</p>";
	}

?>