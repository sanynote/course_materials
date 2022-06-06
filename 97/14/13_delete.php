<?php

	include "00_conn.php";

	# 02) 넘어오는 번호 확인하기
	# ?는 get 방식으로 처리

	$no = $_GET['no'];
	echo "넘어오는 번호 확인 : ".$no." <br/>";

?>



<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>login</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0; background-color:#f9f9f9;}


		#wrap{width:400px; margin:50px auto 0; padding:20px 40px; background-color:#fff;  box-shadow:3px 3px 3px rgba(0,0,0,0.3);
		}
		h2{text-align:center; padding-bottom:20px;}

		form {font-size:13px;}
		form p{margin-bottom:20px; padding:10px 0;}
		
		form label{width:80px; display:block; float:left; line-height:25px; text-align:center;}

		form input:not(.button){width:280px; height:25px; text-indent:10px;}

		form textarea{width:280px; height:200px; text-indent:10px;}
		form label[for="content"]{line-height:200px;}

		#btnArea{background-color:#fff; text-align:center;}
		#btnArea input{padding:5px 20px; background-color:#fff; border:1px solid #aaa;}
		#btnArea input:hover{background-color:#f00; color:#fff; cursor:pointer;}
	</style>
 </head>
 <body>
	<div id="wrap">
		<h2>FREE BOARD<span style="color:red;">DELETE</span></h2>
	
		<form action="08_write_control.php" method="post">
			
			
			<p>
				<label for="pass">비밀번호</label>
				<input id="pass" type="password" name="pass" value="" maxlength="10" placeholder="10자 까지 입력" required autocomplete="off"/>
			</p>
			
			</p>
			<p id="btnArea">
				<input class="button" type="submit" value="삭제" title="삭제"/>
				<input class="button" type="reset" value="다시쓰기" title="다시쓰기"/>
			</p>
			<!--
			
				*** label이 없을경우 title 사용한다.
				submit 버튼과 a 태그는 함께 사용할 수 없다.
			-->

		</form>
	</div>
 </body>
</html>
<!--
	[label (라벨,레이블)]

	: select, textarea, input, 대체텍스트 용도로 label을 사용한다.
	: label을 사용하지 못할 경우, title을 사용하여 대체한다
	: label이 있을 경우에도 title 사용은 가능하다

	form 안에서 a가 무조건 금지가 아니라, 타입이 submit이나 reset 처럼 기능이 있는 form 영역일 경우 금지(a의 href와 충돌)
	위처럼 타입이 button 일 경우에는 사용가능

	: video 태그에 a를 부모로 사용할 경우 href와 source가 충돌이 발생할 수 있음
	: video 태그에 a태그를 사용하여 링크 영역을 설정할 수 있음
	
	: 기능을 가지는 태그들은 a로 묶어줄때 "validator" 로 확인하기

-->