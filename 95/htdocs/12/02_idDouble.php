<?php
	
	include "00_conn.php";

	$q = $_REQUEST['q'];
	
	# echo "넘어온 정보 확인하기 : ".$q;
	
	/*
		[REQUEST , 슈퍼 전역변수]
			
			: 전역, 위에서 아래로 모두 영향을 주는 값	 전역 이라고 한다!
			: 지역, 해당하는 지역에서만 영향을 주는 값을 지역이라고 한다!

			: 슈퍼 전역변수
				연결 되어 있는 페이지까지 모두 영향을 주는 변수!
				(GET, POST의 성질을 가지지만, GET과 흡사함!)

		* form을 통해서 method를 확인할 수 없기 때문에 요청한다는 의미로 
			request를 사용한다!

		* ajax 파트에서 주로 사용!
	*/
	

	/* [매우중요] 넘겨온 id와 일치하는 정보가 있는지 조회하기*/
	/*
		1) 조회를 했을 경우, 일치하는 정보가 있다면 아이디가 중복
		2) 조회를 했을 경우, 일치하는 정보가 없다면 아디기가 중복되지 않음!
	*/
	
	$sql = "SELECT * FROM members WHERE userid='$q' ";
	$result = mysqli_query($conn, $sql);

	
	# 한줄씩 읽어주기!
	$row = mysqli_fetch_array($result);

	/*
		[문제점]
			: Notice : Trying to access array offset on value of type "null"
			: NULL, "알 수 없는 공간값"이 있기때문에 확인이 필요함
	
		[정리]

			+ isNaN(대상), 알 수 없는 문자를 발견했을때 사용하는 함수
			+ isset 함수, 해당하는 정보에 NULL 값이 있는지 확인하는 함수

		[풀이]
			1) isset($row['userid']), 담고있는 대상의 값에 NULL 이 있는지 없는지 확인하기
			2) NULL이 발견되지 않았다면 ? 뒤에 $row['userid']를 반환함
			3) NULL이 발견된다면 ..? 뒤에 'no'를 반환함

			NULL이 발견되면 알 수 없는 공간이기때문에 not null을 처리하는 방법으로 채워야 함
	*/


	$row['userid'] = isset($row['userid']) ? $row['userid'] : 'no';

	if($row['userid'] == $q){
		echo "<strong style='color:red;'>중복된 아이디, 사용 불가능</strong>";
	}
	else{
		echo "<strong style='color:blue'>사용 가능한 아이디</strong>";
	}

?>