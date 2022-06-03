<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>drink_insert</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<form action="10_drink_control.php" method="get">
		<fieldset>
			<legend>음료 정보 입력받기</legend>
			<p>
				<label for="name">이름: </label><input id="name" type="text" name="name" required/>
			</p>
			<p>
				<label for="price">가격: </label><input id="price" type="text" name="price" required/>
			</p>
			<p>
				<label for="num">수량: </label><input id="num" type="text" name="num" required/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>
 </body>
</html>
