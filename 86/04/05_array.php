<?php

	# 문자열이 깨지기때문에 필수로 셋팅하기
	header("content-type:text/html; charset=utf-8");

	echo "<h2>javascript에서의 배열</h2>";

	/*
		[javascript의 배열]

	
	*/

	echo "<h2>순차배열: 공간값이 있는 배열 ( 0 1 2 3 4 5)</h2>";

	$fruit = array("apple","banana","coconut");

	# 출력받기
	echo $fruit[0]."<br/>";


	echo "<h2>연관배열 : 관련이 있는 값이 한 쌍으로 묶이는 배열</h2>";
	#javascript,			var like={"a":"apple","b":"banana"}

	$like = array("me"=>"pizza", "friend"=>"snack");

	echo "내가 좋아하는것은?".$like['me']."<br/>";
	echo "친구가 좋아하는것은?".$like['friend']."<br/>";

	# 응용 1 - dog cat duck bear 공간 만들고 for문으로 출력받기(종료조건은 숫자로)
	$animal = array("dog","cat","duck","bear");

	for($i=0; $i<4; $i++){
		echo $animal[$i]."<br/><br/></br>";
	}
	

	# 응용 2 - 축구 아구 농구 .. sports 종류 7개 나열, for문 출력
	$sports = array("축구","농구","야구","수영","양궁","태권도","스케이트");

	for($i=0; $i<7; $i++){
		echo $sports[$i]."<br/><br/></br>";
	}


	# 응용 3 - ms explorer , webkit chrome, moz firefox, o opera [연관배열]

	$com = array("ms"=>"explorer","webkit"=>"chrome","moz"=>"firefox","o"=>"opera");

	echo $com['ms']."<br/>";
	echo $com['webkit']."<br/>";
	echo $com['moz']."<br/>";
	echo $com['o']."<br/>";
	
?>