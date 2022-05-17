1) mysql, mariaDB 문법 사용하기
2) 문법을 사용하기위하여 접ㄱ속하기 (로그인)

[접속하기]

mysql	-uroot	-p
+ mysql	문법을 사용하기 위하여 접속하기
+ uroot		u는 user의 약자 표현 , root (아이디)		, 닷홈 가입시 아이디 사용 (파일질라 사용시 아이디)
+ p			password의 약자표현						, 닷홈 가입시 비번 사용 (파일질라 사용시 비번)

3) Enter Password 비운채로 enter

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++

[db를 만드는 이유]

db는 database의 약자

	: 아이디 비밀번호 주소 우편번호 등등을 저장하기 위하여 사용
	: 외장하드, usb처럼 저장해두었다가 나중에 가져다 사용하기 위하여 db를 사용함
	: 은행으로 보면 은행역할


table은 통장의 역할 
	(필드명: 입금,출금,남은금액,날짜,거래은행)
	(필드명: userid userpass phone address)

[매우중요]

	input의 id name | label의 for | table의 field

	: input label table의 정보가 모두 같아야 저장할때 문제없이 저장될 수 있음
	: id만 봐도 name을 알 수 있어야하고, name을 보면 field로 어떤 명칭을 사용하는지 알 수 있어야 함

[javascript의 문제점]
	:: 스스로 저장할 수 있는 공간이 안전하지않기때문에 database를 활용함

+++++++++++++++++++++++++++++++++++++++++++++++++++

[매우중요]

	window		버전마다 언어지원의 문제가 발생함
	window7	버전은 한글지원이 가장 뛰어남
	window10	버전은 한글이 매우 불편함

[키보드에서 한글을 입력받기 위하여 셋팅하는 작업 _ 필수]

char (문자), character

* set character set euckr (한글이 적용되도록 셋팅하기)

