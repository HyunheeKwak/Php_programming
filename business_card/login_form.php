<!-- 구글 검색 : login form css => 59 Free HTML5 And CSS3 Login Form For Your Website 2019 - Colorlib -->
<!-- 출처: https://colorlib.com/wp/template/creative-login-form/ -->
<?php
$connect = mysql_connect("localhost","khh","1234"); // DB 연결
mysql_select_db("khh_db", $connect);                // DB 선택

$sql = "select * from business_card where name='$_POST[name]' and password= '$_POST[password]'";

$result = mysql_query($sql,$connect);

$row = mysql_fetch_array($result);
//echo $row[name];
//echo $row[password];
//echo $row[company];
if(!$row) {

    echo "<script> alert('회원 정보가 없습니다') </script>";
    echo "<script> location.href = 'login_form.php'</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="css/login_form.css" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/login_form.js"></script>

</head>
<body>

<div class="login-page">
    <div class="form">
        <form class="register-form" method="post" action="signup.php">
            <input type="text" placeholder="name (< 9 alphabet)" name="name"/> // 백그라운드 내용
            <input type="password" placeholder="password" name="password"/>
            <input type="text" placeholder="email address" name="email"/>
            <input type="text" placeholder="company (< 6 alphabet)" name="company"/>
            <input type="text" placeholder="side (ex, front-end web)" name="side"/>
            <input type="text" placeholder="jop (ex, developer)" name="jop"/>

            <input type="text" placeholder="blog url (ex, keithpickering.github.io)" name="blog_url"/>
            <input type="text" placeholder="facebook id" name="facebook_id"/>
            <input type="text" placeholder="twitter id" name="twitter_id"/>
            <input type="text" placeholder="github id" name="github_id"/>

            <!--<button>create</button>-->
            <input type="submit" value="create" />
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>

        <form class="login-form" method="post" action=""index.php">
            <input type="text" placeholder="username" name="name"/>
            <input type="password" placeholder="password"name="password"/>
            <input type="submit" value="login" />
            <!--<button>login</button>-->
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>

</body>
</html>