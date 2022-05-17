<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>switch</title>
	<meta charset="utf-8"/>
	<style>
		h2{border-left:10px solid lightblue; text-indent:10px;}
		.coms{font-size:20px; color:#00f; text-decoration:underline;}
	</style>

 </head>
 <body>

	<h2>switch</h2>

	
	<form action="#" method="get">
		<label for="text">a b c 확인: </label>
		<input id="text" type="text" name="text"/>
		<input type="submit" value="확인" title="확인"/>

	</form>

<?php
	$text = $_GET['text'];

	echo $text;

	switch($text){
		case "a" : echo "입력받은 글자는 a입니다."; break;
		case "b" : echo "입력받은 글자는 b입니다."; break;
		case "c" : echo "입력받은 글자는 c입니다."; break;
		default: echo "해당하는 값이 없습니다."; break;
	}

?>

<hr/>
<!--
	응용문제1 (숫자표현 중요)

	1 입력받으면 step1 입니다.(2,3)
	일치하는 값이 없습니다.
-->
<h2>응용문제1</h2>

	
	<form action="#" method="get">
		<label for="test1">숫자입력: </label>
		<input id="test1" type="text" name="test1"/>
		<input type="submit" value="확인" title="확인"/>

	</form>

<?php
	$test1 = $_GET['test1'];

	# echo $test1;

	switch($test1){
		case 1 : echo "step1 입니다."; break;
		case 2 : echo "step2 입니다"; break;
		case 3 : echo "step3 입니다"; break;
		default: echo "일치하는 값이 없습니다."; break;
	}

?>



<hr/>
<!--
	응용문제2 

	a A apple입니다. (b banana c coconut)
	일치하는 값이 없습니다.
-->
<h2>응용문제2</h2>

	
	<form action="#" method="get">
		<label for="test2">스펠링 입력: </label>
		<input id="test2" type="text" name="test2"/>
		<input type="submit" value="확인" title="확인"/>

	</form>

<?php
	$test2 = $_GET['test2'];

	# echo $test2;

	switch($test2){
		case "a" : 
		case "A" : echo "apple 입니다."; break;
		case "b" : 
		case "B" : echo "banana 입니다."; break;
		case "c" : 
		case "C" : echo "coconut 입니다."; break;
		
		default: echo "일치하는 값이 없습니다."; break;
	}

?>


<hr/>
<!--
	응용문제3

	naver a링크로 네이버 이동 (google,daum)
	일치하는 값이 없으면 default 제외
-->
<h2>응용문제3</h2>

	
	<form action="#" method="get">
		<label for="test3">사이트 입력: </label>
		<input id="test3" type="text" name="test3"/>
		<input type="submit" value="확인" title="확인"/>

	</form>

<?php
	$test3 = $_GET['test3'];

	# echo $test3;

	switch($test3){
		case "naver" : echo "<a href='http://naver.com' title='네이버'>네이버</a>"; break;
		case "google" : echo "<a href='http://google.com' title='구글'>구글</a>"; break;
		case "daum" : echo "<a href='http://daum.net' title='다음'>다음</a>"; break;
	}

?>


<hr/>
<!--
	응용문제4

	1 3 5 7 8 10 12 라면 31일까지 있습니다.
	4 6 9 11 이라면 30까지 있습니다.
	2 28 29까지 있습니다.
-->

<h2>응용문제4</h2>

	
	<form action="#" method="get">
		<label for="test4">1~12중(월) 하나 입력: </label>
		<input id="test4" type="text" name="test4"/>
		<input type="submit" value="확인" title="확인"/>

	</form>

<?php
	$test4 = $_GET['test4'];

	# echo $test4;

	switch($test4){
		case 1 : case 3 : case 5 : case 7 : case 8 : case 10 :
		case 12 : echo "<p>31일까지 있습니다.</p>"; break;

		case 4 : case 6 : case 9 : case 11 : echo "<p>30일까지 있습니다.</p>"; break;

		case 2:echo"<p>28,29일까지 있습니다.</p>"; break;
		
	}

?>
  
	
 </body> 
</html>