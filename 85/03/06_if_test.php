<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>if_test</title>
	<meta charset="utf-8"/>
	<style>
		h2{border-left:10px solid lightblue; text-indent:10px;}
		.coms{font-size:20px; color:#00f; text-decoration:underline;}
	</style>

 </head>
 <body>

	<h2>응용문제1</h2>

	<ol>
		<li>현재 ol태그가 끝난 부분 아래에 form 영역 만들기</li>
		<li>숫자입력1,숫자입력2,숫자입력3,input 공간 만들기</li>
		<li>submit버튼 누르면 input숫자 1 2 3 입력값 넘겨주기</li>
		<li>total avg 변수 만들어서 저장하기</li>
		<li>평균이 70점 이상이라면, 평균이 000으로 합격입니다. / 아니라며 불합격입니다. 출력받기</li>
		<li>중요) 소수점 2자리까지 표현하기, 참일경우 class coms 연결</li>
	</ol>
	<form action="#none" method="get">
		<fieldset>
			<legend>응용문제1</legend>
			<p>
				<label for="num1">숫자입력1: </label>
				<input id="num1" type="text" name="num1"/>
			</p>
			<p>
				<label for="num2">숫자입력2: </label>
				<input id="num2" type="text" name="num2"/>
			</p>
			<p>
				<label for="num3">숫자입력3: </label>
				<input id="num3" type="text" name="num3"/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>

<?php
	$total = $_GET['num1']+$_GET['num2']+$_GET['num3'];
	$avg = $total/3;

	echo "총합계는 ".$total."입니다.";
	echo "총평균은 ".$avg."입니다.";
	
	if($avg >=70){ echo "<p class='answer'>입력받은 값은 : ".round($avg,2)." 입니다.</p>";}
	else{echo "<p>값이 비어져있습니다. 확인해주세요</p>";}

?>
  
	<hr/>
	<h2>응용문제2</h2>
	<ol>
		<li>아래에 form 작성</li>
		<li>input공간 만들기</li>
		<li>전송버튼 만들고, 아래 php영역으로 넘기기</li>
		<li>
			만약 넘겨받은 과일이 apple이라면 apple과 일치합니다.
			아니라면 일치하지 않는 과일입니다. 출력받기
		</li>
		<li>참일경우, class coms 적용되도록 만들기</li>
	</ol>
	<form action="#none" method="get">
		<fieldset>
			<legend>응용문제2</legend>
			<p>
				<label for="fruits">과일입력: </label>
				<input id="fruits" type="text" name="fruits"/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>

<?php
	$fruits = $_GET['fruits'];
	
	if($fruits =="apple"){ echo "<p class='answer'>".$fruits." 과 일치합니다.</p>";}
	else{echo "<p>값이 비어져있습니다. 확인해주세요</p>";}

?>
	<hr/>

	<h2>응용문제3</h2>
	<ol>
		<li>아래에 form 작성</li>
		<li>input공간 만들고 캐릭터 입력받기</li>
		<li>전송버튼 만들고, 아래 php영역으로 넘기기</li>
		<li>
			만약 captainA ironman hulk thor 중 해당하는 캐릭터가 있다면
			선택한 캐릭터는 000입니다.
			없다면 해당하는 캐릭터가 없습니다. 출력받기
		</li>
		<li>참일경우, class coms 적용되도록 만들기</li>
	</ol>
	<form action="#none" method="get">
		<fieldset>
			<legend>응용문제3</legend>
			<p>
				<label for="car">캐릭터입력: </label>
				<input id="car" type="text" name="car"/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>

<?php
	$car = $_GET['car'];
	
	if($car =="captainA" || $car =="ironman" || $car =="hulk" || $car =="thor"){ echo "<p class='answer'>선택한 캐릭터는".$car." 입니다.</p>";}
	else{echo "<p>해당하는 캐릭터가 없습니다</p>";}

?>
	<hr/>

	<h2>응용문제4</h2>
	<ol>
		<li>아래에 form 작성</li>
		<li>input공간 만들고 나이 입력받기</li>
		<li>전송버튼 만들고, 아래 php영역으로 넘기기</li>
		<li>
			만약 0~7 사이의 아이라면 000세로 입장이 가능합니다.
			아니라면 범위 밖의 나이입니다. 출력받기
		</li>
		<li>참일경우, class coms 적용되도록 만들기</li>
	</ol>
	<hr/>
	<form action="#none" method="get">
		<fieldset>
			<legend>응용문제4</legend>
			<p>
				<label for="age">나이입력: </label>
				<input id="age" type="text" name="age"/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>

<?php
	$age = $_GET['age'];
	
	if($age >=0 &&  $age <=7){ echo "<p class='answer'>나이는".$age."세로 입장이 가능합니다.</p>";}
	else{echo "<p>범위 밖의 나이입니다.</p>";}

?>

	<h2>추가문제: checked ("on")</h2>
	<ol>
		<li>아래에 form 작성</li>
		<li>label에 사이트에 방문한 적이 있습니까? 작성하기</li>
		<li>checkbox input 만들기</li>
		<li>전송버튼 만들고, 아래 php영역으로 넘기기</li>
		<li>
			비교값과 비교하여 같다면 a태그로 구글에 링크 걸고 넘어갈 수 있도록 만들기
		</li>
		<li>아니라면 사이트에 방문한적이 없습니다 출력받기</li>
	</ol>
	<form action="#none" method="get">
		<fieldset>
			<legend>추가문제</legend>
			<p>
				<label for="chk">사이트에 방문한 적이 있습니까? </label>
				<input id="chk" type="checkbox" name="chk"/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>

<?php
	$chk = $_GET['chk'];
	
	if($chk == "on"){ echo "<a href='http://www.google.com' title='구글'>구글</a>";}
	else{echo "<p>사이트에 방문한적이 없습니다.</p>";}


?>
 </body> 
</html>