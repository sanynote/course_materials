<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>stdscore_insert</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<h2>성적표 입력받기</h2>
	<form action="06_stdscore_control.php" method="post">
		<p>
			<label for="name">이름: </label><input id="name" type="text" name="name" required/>
		</p>
		<p>
			<label for="kor">국어점수: </label><input id="kor" type="text" name="kor" required/>
		</p>
		<p>
			<label for="eng">영어점수: </label><input id="eng" type="text" name="eng" required/>
		</p>
		<p>
			<label for="math">수학점수: </label><input id="math" type="text" name="math" required/>
		</p>
		<p>
			<input type="submit" value="전송" title="전송"/>
		</p>
	</form>
 </body>
</html>

