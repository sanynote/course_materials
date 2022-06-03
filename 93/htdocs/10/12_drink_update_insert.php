<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>drink_update_insert</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<form action="13_drink_update_control.php" method="get">
		<fieldset>
			<legend>음료 가격 수정하기</legend>
			<p>
				<label for="name">기존제품: </label><input id="name" type="text" name="name" required/>
			</p>
			<p>
				<label for="price">바꿀가격: </label><input id="price" type="text" name="price" required/>
			</p>
		
			<p>
				<input type="submit" value="변경" title="변경"/>
			</p>
		</fieldset>
	</form>
 </body>
</html>
