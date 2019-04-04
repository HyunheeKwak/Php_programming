<?php
/**
 * Created by PhpStorm.
 * User: hyunh
 * Date: 2019-03-28
 * Time: 오후 2:22
 */

$connect = mysql_connect("localhost","khh","1234"); // DB 연결
mysql_select_db("khh_db", $connect);                // DB 선택
/* echo $_POST[name];
 echo $_POST[password];,, 확인용*/


//$sql = "select * from business_card where name=$_POST[name]"; /* name 중복인지 확인 */
//$result = mysql_query($sql,$connect);

//$row = mysql_fetch_array($result);

//if(!$row) {
    $sql = "insert into business_card(name, password, email, company, side, jop, blog_url, facebook_id, twitter_id, github_id) values('$_POST[name]','$_POST[password]', '$_POST[email]','$_POST[company]','$_POST[side]','$_POST[jop]','$_POST[blog_url]','$_POST[facebook_id]','$_POST[twitter_id]','$_POST[giithub_id])'";
/* num 속성은 자동으로 설정했으니까 빼고 다른 속성들 정렬해줌 */

//}

$result = mysql_query($sql,$connect);

if(!$result){
    echo "<script> alert('에러입니다!');</script>" ;
}

mysql_close();
?>

<script>
    location.href="login_form.php"
</script>;
