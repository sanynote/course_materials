<?php
	
	# 01) 초기화
	include "00_conn.php";

	#02) userid userpass 변수로 만들고 넘어오는지 확인하기

	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];
	

	echo "넘어오는 값 확인 ".$userid."/".$userpass."<br/>";

	# 03) mysqli_query 구문으로 넘기기 전에 요청할 sql문 작성하기
	$sql = "SELECT * FROM members WHERE userid = '$userid' AND userpass='$userpass' ";

	# 04) 로그인이 되어있다면 sql문 넘겨주기
	$result = mysqli_query($conn,$sql);
	
	#05) 해당하는 정보 한줄씩 읽어주기
	$row = mysqli_fetch_array($result);

	# 06) 넘겨온 정보와 일치하는 정보가 있는지 확인하기
	# echo "아이디:".$row['userid']."/ 비밀번호 ".$row['userpass']."<br/> "

	/*
		07) input을 통해서 넘겨온 userid 정보와 userpass가 DB에 있는 정보와 일치한다면 다음 페이지로 넘겨주기
		(다음 페이지로 로그인하기 위해서 넘겨주기)

	
	*/

	if($row['userid'] == $userid && $row['userpass'] == $userpass){
		/*
			[정리]
				:session_start(), 세션을 사용하기 위하여 선언하기
					(어떤 네트워크 통로를 사용하기 위하여 작업 통로를 열어주는 작업)

				: $_SESSION['담아서 넘겨줄 이름'] = 담아줄 값
					: 네트워크 통로를 통해서 넘어가기 위한 수단


			[확인하기]

				1) 05_list_basic.php 파일에 로그인까지하고 확인하기
				2) 05_list_basic.php에서 검사창을 띄우기
				3) 오른쪽 메뉴들 중에 Application 항목 클릭
				4) 왼쪽 메뉴 중간의 Cookies 아래의 주소둘에서 session 값이 들어가있는것을 확인할 수 있음
				5) 

		
		*/
		session_start();
		$_SESSION['userid'] = $userid;

		echo "<p style='text-align:center; color:blue;'>'회원인증'이 완료되었습니다.</p>";
		echo "<meta http-equiv='Refresh' content='2; 05_list_basic.php'/>";

		#sesstion 고속도로를 탈 거라서 메타태그에서 ?는 안 타도 됨

	}
	else{
	
		echo"<script>alert('아이디 또는 비밀번호가 일지하지 않습니다.'); history.go(-1);</script>";

	}

?>