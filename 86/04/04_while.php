<?php

	# 문자열이 깨지기때문에 필수로 셋팅하기
	header("content-type:text/html; charset=utf-8");

	echo "<h2>php에서 사용하는 for문</h2>";

	# 1 2 3 4 5 출력받기

	# 참고) animal.length 처럼 어디전까지 표현하는것은 db에서 할 수 있음
	# 현재 페이지에서는 어디전까지 표현하기

	$i=0;
	while($i<6){
		echo $i." ,";
		$i++;
	}



	/*########### 응용문제1 ##########*/
	# 1-9
	$i=1;
	while($i<10){
		echo $i.",";
		$i++;
	}


	/*########### 응용문제2 ##########*/
	# 2 4 6 8 
	$i=2;
	while($i<10){
		echo $i.",";
		$i+=2;
	}


	/*########### 응용문제3 ##########*/
	# happy 다섯번
	$i=0;
	while($i<5){
		echo "happy".' ,';
		$i++;
	}


	/*########## 태그 반복하기 ###########*/

	/*####### li 반복하기 #######*/
	echo "<h2>li 반복하기</h2>";

	echo "<ul>";
		
		$i=1;
		while($i<6){
			echo "<li><strong>li태그'.$i.'</strong></li>";
			$i++;
		}
	echo "</ul>";



?>