# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!
Note: 
- create table tableboard_shop(
    - num int not null,
    - date date not null,
    - order_id int(20),
    - name char(50),
    - price char(20),
    - quantity int,
    - primary key(num) );
    
## index.php 수정
- MySQL 데이터베이스 연결 및 레코드 가져오기
    - mysql_connect 와 mysql_select_db를 사용하여 데이터베이스와 연동하였다.
    - mysql_query를 통해 쿼리 스트링을 전송하고 while 문과 mysql_fetch_array 함수를 이용하여 출력하였다. 
    
## board_form.php 수정
- primary 값인 num을 get 방식으로 받아 가져왔다. 

## function
### insert.php 수정
- insert into 문으로 입력값을 POST 방식으로 전송하였다. 
- 결과가 false 일 경우 에러메세지를 출력한다. 

### update.php 수정
- update set 문에서 POST 방식의 변수값을 전달하였다. 
- 결과가 false 일 경우 에러메세지를 출력한다.

### delete.php 수정
- delete from으로 num 에 해당하는 레코드를 삭제하였다. 
- 결과가 false 일 경우 에러메세지를 출력한다.