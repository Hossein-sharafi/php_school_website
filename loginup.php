<?php
error_reporting(0);
include 'cookiechecker.php';
if(isset($_COOKIE["shbsloginemail"]) and isset($_COOKIE["shbsloginuser"]) and isset($_COOKIE["shbsloginpas"]))
{header("Location:index.php");
}else{
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $pas = $_POST['pas'];
    $email = $_POST['email'];
    if (isset($pas) and isset($email)) {
        $sqlcode = "SELECT user FROM logindata WHERE email='$email' AND pas='$pas'";
        include 'sqlconnect.php';
    }
    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $username = $row['user'];
        setcookie('shbsloginemail',$email, time() + (3600*1));
        setcookie('shbsloginuser',$username, time() + (3600*1));
        setcookie('shbsloginpas',$pas, time() + (3600*1));
        header("Location:index.php");
    } else {
        echo "<script>alert('نام کاربری یا رمز عبور اشتباه است');</script>";
    }
}}
?>






<html lang="en">

<head>
    <!--PB Hossein Sharafi-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>ورود</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles.css">
    <script src="./script.js"></script>
</head>

<body dir="rtl" class="loginupbody" >

        <!--PB Hossein Sharafi-->
        <!--start body-->
        <div class="formdiv">
            <div id="loginup" class="loginup">
                <form action="./loginup.php" method="post" id="formsignup"><br>
                    <input require type="email" placeholder="پست الکترونیک" id="email" class="input" name="email"><br><br><br>
                    <input required type="password" placeholder="رمز عبور" id="pas" class="input" name="pas"><br><br><br>
                    <input required type="submit" class="input" value="ورود" name="submit">
                </form><br>
                <a style="font-weight: bolder;" href="./signup.php" id="linklogin">ثبت نام</a>
            </div>




        </div>

        <!--end body-->
</body>
<!--PB Hossein Sharafi-->

</html>