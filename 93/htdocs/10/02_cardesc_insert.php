<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>cardesc_insert</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<h2>자동차 정보 입력받기</h2>
	<form action="03_cardesc_control.php" method="get">
		<p>
			<label for="carname">모델명: </label><input id="carname" type="text" name="carname" required/>
		</p>
		<p>
			<label for="carprice">가격: </label><input id="carprice" type="text" name="carprice"/>
		</p>
		<p>
			<label for="caryear">연도: </label><input id="caryear" type="text" name="caryear"/>
		</p>
		<p>
			<label for="carcolor">색상: </label><input id="carcolor" type="text" name="carcolor"/>
		</p>
		
		<p>
			<input type="submit" value="전송" title="전송"/>
		</p>
	</form>
 </body>
</html>
