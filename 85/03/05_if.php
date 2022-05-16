<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>if</title>
	<meta charset="utf-8"/>
	<style>
		h2{border-left:10px solid #05c; text-indent:10px;}
		.answer{font-size:20px; color:#00f; text-decoration:underline;}
	</style>

 </head>
 <body>
 <h2>입력받기 (input)</h2>
	<form action="#" method="get">
		<label for="ans">입력받기: </label>
		<input id="ans" type="text" name="ans"/>
		<input type="submit" value="결과확인" title="결과확인"/>
	</form>

<?php

	# 01) 어떤 방식으로 넘어오는지 확인 get
	# 02) name 값은? ans

	$ans = $_GET['ans'];
	echo "입력받은 값은 ".$ans."입니다.";

?>

	<h2>if를 사용한 입력값 출력받기</h2>
	<form action="#" method="post">
		<label for="ifCom">입력받기: </label>
		<input id="ifCom" type="text" name="ifCom"/>
		<input type="submit" value="결과확인" title="결과확인"/>
	</form>

<?php
	# 01) 어떤 방식으로 넘어오는지 확인 post
	# 02) name 값은? ifCom

	$ifCom = $_GET['ifCom'];
	
	if($ifCom !=""){ echo "<p class='answer'>입력받은 값은 : ".$ifCom." 입니다.</p>";}
	else{echo "<p>값이 비어져있습니다. 확인해주세요</p>";}

?>
  
 </body> 
</html>