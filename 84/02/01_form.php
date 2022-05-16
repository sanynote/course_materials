<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>form</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<form action="#" method="get">
		<input id="search" type="text" title="검색" name="query"/>
		<input type="submit" title="전송" value="전송"/>
	</form>
<?php

	echo "<h2>검색한 단어: </h2>";
	/*
		1) 무슨 방식? GET
		2) name 속성 이름 확인하기 query
	
	*/

	echo $_GET["query"];


?>
  
 </body> 
</html>