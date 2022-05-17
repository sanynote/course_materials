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
	<form action="#none" method="post">

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
	</form>

<?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];

	# echo "넘어오는값 확인:".$num1."/ ".$num2." / ".$num3.";

	$total = $num1 + $num2 + $num3; 
	$avg = round($total/3,2);

	echo "총합계는 ".$total."입니다.";
	echo "총평균은 ".$avg."입니다.";
	
	if($avg >=70){ echo "<p class='coms'>입력받은 값은 : ".$avg." 입니다.</p>";}
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
		
		<p>
			<label for="fruit">과일입력: </label>
			<input id="fruit" type="text" name="fruit"/>
		</p>
		<p>
			<input type="submit" value="전송" title="전송"/>
		</p>
	</form>

<?php
	$fruit = $_GET['fruit'];

	/*
		get방식이라면 넘어가는 정보를 주소줄을 통해 확인 가능

		: 위 만들어진 전송버튼으로 input,fruit는 넘기지 못함
	*/

	# echo $_GET['fruit'];
	
	if($fruit =="apple"){ echo "<p class=\"coms\">".$fruit." 과 일치합니다.</p>";}
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
				<label for="chara">캐릭터입력: </label>
				<input id="chara" type="text" name="chara"/>
			</p>
			<p>
				<input type="submit" value="전송" title="전송"/>
			</p>
		</fieldset>
	</form>

<?php
	$chara = $_GET['chara'];
	# echo $chara;
	
	if($chara =='captainA' || $chara =='ironman' || $chara =='hulk' || $chara =='thor'){ echo "<p class=\"coms\">선택한 캐릭터는".$chara." 입니다.</p>";}
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
	<form action="#none" method="post">
		<p>
			<label for="age">나이입력: </label>
			<input id="age" type="text" name="age"/>
		</p>
		<p>
			<input type="submit" value="전송" title="전송"/>
		</p>

	</form>

<?php
	$age = $_POST['age'];
	
	if($age >=0 &&  $age <8){ echo "<p class='coms'>나이는".$age."세로 입장이 가능합니다.</p>";}
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
		<p>
			<label for="chk">사이트에 방문한 적이 있습니까? </label>
			<input id="chk" type="checkbox" name="chk"/>
		</p>
		<p>
			<input type="submit" value="결과확인" title="결과확인"/>
		</p>
	</form>

<?php

/*

	[체크되어있는지 확인,비교]

	1) js에서는 대상.checked == true
		
		[정리]
			console.log(typeof(대상))
				+ string,number
				+ boolean (true(확인),false(취소))
				+ confirm (확인,취소)

	2) php에서는 on으로 확인가능

	[매우중요]

		string의 문제,
		cmd(shell)에서 테이블을 만들때 field 제작시 문자를 몇개까지 기입할 수 있는지 작성할 수 있음

	[db에 저장되지 않을때]
		* 체크박스는 하나고, 문자열을 하나로 만들면 on이 2글자이기때문에 field에 저장되지않음
		* db(database), table()

	[중요]

		1) js에서는 숫자나 변수일경우 더블 사용하지않음, 문자일때만 더블

		2) php ? 대입되는 값이라면
		문자숫자변수 모두 더블이나 싱글 사용

			* 대입되는값인지 예약어인지 구분이 필요함
			* mysql은 호출하는 구문이 굉장히 많기때문에 사용자가 만든 언어인지
			mysql 문법인지 구분하여 처리해야 함

*/
	$chk = $_GET['chk'];

	#echo "체크 확인:".gettype($chk)."<br/>";
	#echo "체크 확인:".var_dump($chk)."<br/>";
	
	if($chk == "on"){ echo "<a class='coms' href='http://www.google.com' title='구글'>구글</a>";}
	else{echo "<p>사이트에 방문한적이 없습니다.</p>";}


?>
 </body> 
</html>