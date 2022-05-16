<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>form</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<form action="#" method="get">
		<input id="search" type="text" name="query" title="검색"/>
		<input type="submit" value="전송" title="전송"/>
	</form>
<?php
	
	echo "<h2>검색한 단어: </h2>";

	/*
		[매우중요]

			1) submit 버튼의 경우, 유일하게 action 통해서 넘겨줄 수 있는 전송버튼
			2) form의 action 줄에 input에 작성된 값을 name을 통해서 넘겨줄 수 있음!
			3) 
				: form에서 어떠한 방식으로 넘겨오는지 확인하기 (method 확인하기 / get)
				: input 태그에서 name 속성의 이름 확인하기!	
		[정리]
		
			: jQuery에서는 $로 대상을 선택할 수 있고, 변수에 담아서 표현할 수 있음..
			: jQuery에서는 jQuery로도 대상을 선택할 수 있음!
			
			: php에서는 변수를 만들거나 어떤 대상을 지정할 때 $(셀렉터)만 사용할 수 있음!
			: jQuery와 php 사용 영역이 겹치거나 대상선택이 겹친다면, 대상 선택에 문제가 생기기 때문에
				반드시 확인해야 한다.
	*/

	echo $_GET["query"];



?>
 </body> 
</html>