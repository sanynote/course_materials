<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>total</title>
	<meta charset="utf-8"/>

 </head>
 <body>
	<form action="04_total_control.php" method="get">
		<fieldset>
			<legend>PHP_total</legend>
			<p>
				<label for="ko">국어점수: </label>
				<input id="ko" type="text" name="ko"/>
			</p>
			<p>
				<label for="en">영어점수: </label>
				<input id="en" type="text" name="en"/>
			</p>
			<p>
				<label for="ma">수학점수: </label>
				<input id="ma" type="text" name="ma"/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>
  
 </body> 
</html>
<!--
	M (module, 데이터베이스)
		: 데이터베이스는 "저장"하거나 "재사용" 하기위하여 사용하는 공간

	V (view, 보여지는 영역)
		: index페이지, 상품페이지, 회원가입 양식서, 로그인 페이지 등등
		화면에 보여지는 영역, 또는 페이지를 작업

	C (control, 처리하는 영역)
		: view에서 넘겨준 정보, db에서 넘겨준 정보를 비교하거나 서로 넘겨주고,
		화면에 출력받을 수 있도록 처리하는 역할을 담당함 (물론 입력도 가능)

	[처리과정]
		view(form) 화면에서 (아이디 넘기기)-> control (view에서 넘겨온 정보 == db에서 넘겨온 정보) <- db(저장된 아이디 확인)
			: 처리과정에서 같은 아이디가 발견되면, "이미 사용중인 아이디입니다." 처리할 수 있음
			: 처리과정에서 같은 아이디가 없다면 .. "사용가능한 아이디입니다." 처리할 수 있음

-->