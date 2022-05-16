<?php

	header("content-type:text/html; charset=utf-8");

	echo "<h2>합계와 평균 확인하기</h2>";

	$ko = $_GET['ko'];
	$en = $_GET['en'];
	$ma = $_GET['ma'];
	$total = $ko+$en+$ma;
	$avg = $total/3;

	echo "총합계는 ".$total."입니다.";
	echo "평균은 ".round($avg,2)."입니다.";

	#js에서는 고장을 확인하기위해 alert로 확인, alert,prompt,confirm모두 window창으로 무조건 활성화, 오류있으면 출력 x
	# php에서는 "주소줄"에 넘어가는 정보를 확인하거나 "echo를 활용" 하여 해당하는 값이 넘어오는지 확인한다.

	echo"<h2>반올림 함수</h2>";
	/*
		[*] 소수점 자리 표현하기

			javascript				:	대상.toFixed(2), javascript에서만 사용가능한 방법
			java c php jsp		: round 함수 사용 (반올림 함수)
	*/

	echo"<p>1) 반올림 함수: ".round(33.55555)."</p>";
	echo"<p>2) 반올림 함수: ".round(33.55555,3)."</p>";

?>