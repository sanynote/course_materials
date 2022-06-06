<?php
	
	include "00_conn.php";


	$no = $_GET['no'];


	echo "넘어온 정보 확인하기 : ".$no."<br/>";


	$sql = "SELECT * FROM freeboard WHERE no='$no' ";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);
	
	# echo "넘어온 값 확인: ".$no['no']." <br/>";

?>
<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>read</title>
	<meta charset="utf-8"/>

	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0; background-color:#f9f9f9;}

		#wrap{width:400px; margin:50px quto 0; background-color:#fff;
		box-shadow:3px 3px 3px rgba(0,0,0,0.3); padding:20px 40px;}

		h2{text-align:center; padding-bottom:20px;}
		form{font-size:13px;}

		form p{padding:10px 0; margin-bottom:20px;}
		form label{display:block; float:left; width:80px; text-align:center; line-height:25px;}
		form input:not(.button){width:280px; height:25px; text-indent:10px;}

		form textarea{width:280px; height:200px; text-indent:10px;}
		form label[for="content"]{line-height:200px;}

		#btnArea{background-color:#fff; text-align:center;}
		#btnArea input{padding:5px 20px; background-color:#fff; border:1px solid #aaa;}
		#btnArea input:hover{background-color:#f00; color:#fff; cursor:pointer;}


	</style>

 </head>
 <body>
	<div id="wrap">
		<h2>FREE BOARD <span style="color:red;">READ</span></h2>
		<form action="#none" method="post">
			<p>
				<label for="title">제목 </label>
				<input id="title" type="text" value="<?=$row['title']?>" readonly/>
			</p>
			<p>
				<label for="name">이름 </label>
				<input id="name" type="text" value="<?=$row['name']?>"readonly/>
			</p>
			<p>
				<label for="email">이메일</label>
				<input id="email" type="email" value="<?=$row['email']?>"readonly/>
			</p>
			<p>
				<label for="view">조회</label>
				<input id="view" type="text" value="<?=$row['view']?>"readonly/>
			</p>
			<p>
				<label for="wdate">날짜</label>
				<input id="wdate" type="text" value="<?=$row['wdate']?>"readonly/>
			</p>
			<p class="content">
				<label for="content">내용</label>
<textarea id="content">
<?=$row['content']?>
</textarea>
			</p>
			<p id="btnArea">
				<a href="05_list_basic.php" title="목록"><input class="button" type="button" value="목록"/></a>
				<a href="10_edit.php?no=<?=$row['no']?>" title="수정"><input class="button" type="button" value="수정"/></a>
				<a href="13_delete.php?no=<?=$row['no']?>" title="삭제"><input class="button" type="button" value="삭제"/></a>
			</p>
		</form>
	
	</div>
<?php
	$upSql = "UPDATE freeboard SET view=view+1 WHERE no='$no' ";

	mysqli_query($conn,$upSql);
	mysqli_close($conn);

?>
 </body>
</html>

<!--

[form에서 사용하는 문서 구분하기]

	1) 07_write.php

		: 전체 내용을 새로 기입하는 페이지로 기존에 만들었었던 milk_insert 페이지와 종류가 같다
		: 페이지 구분시, 입력을 만드는 파트인지, 출력을 만드는 파트인지 구분하기
		: 입력을 받는 화면을 구성한다면...
			input태그의 name 속성을 이용하여 다음 control 페이지로 넘겨줄 수 있어야한다.
			유일하게 action 줄을 탈 수 있는 중요 속성이 name이다

	2) 09_read.php

		: name은 작성된 글을 넘겨주는 속성이기때문에 출력을 받기에는 어렵다.
		: placeholder, value, title 보여줄 수 있는 속성이라면 어느 속성이든 출력은 가능하다.

		: placeholder는 임시적인 값으로 클릭하는 순간 또는 기입되는 순간 내용이 사라짐
		: value는 화면에 확실하게 인식되는 값으로 계산식 페이지를 만들거나 중요내용을 표기할 때 많이 사용된다.

		: title은 "대체 텍스트 용도"로 사용되기때문에 화면에 직접적으로 보여주지는 않는다.
			(title은 메인을 대체하는 수단)

		: read.php의 경우엔 milk_result.php 처럼 결과를 보여주는 페이지로 사용된다.

	[중요]
		1) 페이지 분석시, 정보를 새로 기입하는 페이지라면 INSERT INTO로 만들어지는 페이지이다.
		(주로 화면단에서 name 속성으로 넘겨받음)

		2) 기존의 정보를 수정하는 페이지라면 UPDATE로 만들어진 페이지이다.
		(정보를 넘겨받아야하기때문에 name 속성으로 넘겨받아야함)

		3) 화면에 결과만 보여줄 경우, 조회해서 화면에 분산해주는 작업 (result)
			(넘겨받은 정보를 화면에 출력받기때문에 name 속성이 필요없음)
			(name 속성은 기입되어진 정보를 넘겨줄때만 사용)

	[input 사용하기]
		* id, type, name 필수로 사용된다.

		* id는 꾸며주기 위해서 사용하기보다 javascript나 jQuery 등에서 컨트롤하기위해서 사용되는 중요속성이다.
		컨트롤 할 값이 없다면 id 제외 가능함

		* type도 text를 제외하고 특별한 상황이 아니라면 제외시키는 경우가 많음

			: submit, reset, checkbox처럼 목적을 가질때만 type 사용

		* name과 value로만 사용되는 경우가 많음
			: name은 넘겨주기위하여 사용하고, value는 출력받기위하여 사용되는 경우가 많다.

	[form]

		현재 read.php의 경우 name 속성으로 넘겨줄 자료가 없고, 더 이상의 control.php 파일이
		존재ㅏ지않기때문에 form 영역이 필요없음
		(단, 언제 다시 입력파트로 사용할지 모르기때문에 form을 작성해둠)

-->