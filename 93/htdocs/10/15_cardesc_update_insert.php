<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>cardesc_insert</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<h2>자동차 정보 입력받기</h2>
	<form action="16_cardesc_update_control.php" method="get">
		<p>
			<label for="carname">기존모델명 </label><input id="carname" type="text" name="carname" required/>
		</p>
		<p>
			<label for="caryear">바꿀 연도: </label><input id="caryear" type="text" name="caryear"/>
		</p>
		<p>
			<label for="carprice">바꿀 가격: </label><input id="carprice" type="text" name="carprice"/>
		</p>
		
		
		<p>
			<input type="submit" value="변경" title="변경"/>
		</p>
	</form>
 </body>
</html>
