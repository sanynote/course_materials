<?php
	
	# 01) 초기화
	include "00_conn.php";

	$title = $_POST['title'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$content = $_POST['content'];
	

	echo "넘어오는 값 확인 ".$title."/".$name."/".$email."/".$pass."/".$content."<br/>";

	/*
		[01]
			members 테이블은 회원가입용
			freeboard 테이블은 게시글 작성

			* freeboard의 필드순서 매우 중요
			* 앞 form에서 만든 input과 순서가 다르기때문에 꼭 확인하기
			* name, email, pass, title, content, wdate (view는 제외, 다른 페이지에서 작업)

		[02]
			넘어오는 input의 정보들이 비어있지 않다면 입력받은 값들 freeboard, 테이블에 넘겨주기
			아니라면 필수입력입니다. 기입해주세요 문구 띄우고 이전 페이지로 돌아가도록 만들기
			새로 기입하는 부분이기때문에 INSERT INTO sql문 작성하기

		* 중요
			1) 순서 바뀌어도 상관은 없으나 주로 테이블에 나열된 필드 순서대로 작업함
			2) input 공간의 순서대로 작업해도 상관없으나..
				db에 저장되는 table 필드는 마음대로 바꾸기 어렵기때문에 맞춰주는것이 안전함

	
	*/

/*
	if(!empty($title) && !empty($username) && !empty($useremail) && !empty($userpass) && !empty($content) ){
		
		$sql = "INSERT INTO freeboard (title, username, useremail, userpass,content) VALUES ('$title', '$username', 
		'$useremail', '$userpass','$content')";

		$result = mysqli_query($conn, $sql);
	}

	if($result){
	
		echo "<p style='text-align:center; color:blue;'>회원가입에 성공했습니다</p>";
	}
	
	else{
		echo "<p style='text-align:center; color:red;'>회원가입에 실패했습니다.</p>";
	}

	name, email, pass, title, content, wdate
*/

	if(!empty($name) && !empty($email) && !empty($pass) && !empty($title) && !empty($content) ){
		
		$sql = "INSERT INTO freeboard (name, email, pass, title, content, wdate) VALUES ('$name', '$email', '$pass', 
		'$title', '$content', now())";
		
		mysqli_query($conn, $sql);

	}
	
	else{
		echo "<script>alert('필수 입력 정보입니다. 기입해주세요'); history.go(-1);</script>";
	}

	# 로그인 끊어주기
	mysqli_close($conn);

	# 05_list_basic.php 페이지로 넘어가도록 설정하기
	echo "<meta http-equiv='Refresh' content='1; url=05_list_basic.php'/>";

?>