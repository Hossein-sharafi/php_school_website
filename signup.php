<?php
error_reporting(0);
include 'cookiechecker.php';
if (isset($_COOKIE["shbsloginemail"]) and isset($_COOKIE["shbsloginuser"]) and isset($_COOKIE["shbsloginpas"])) {
    header("Location:index.php");
} else {
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $pas = $_POST['pas'];
        $email = $_POST['email'];
        if (isset($username) and isset($pas) and isset($email)) {
            if ((strlen($username) >= 5 and strlen($username) <= 20)) {
                if (strlen($pas) >= 8 and strlen($pas) <= 30) {

                    try {
                        $sqlcode = 'INSERT INTO logindata (user,email,pas)
                    VALUES ("' . $username . '","' . $email . '","' . $pas . '");';
                        include 'sqlconnect.php';
                        echo "<script>alert('ثبت نام با موفقیت انجام شد لطفا وارد شوید');</script>";
                        if (!$result) {
                            throw new Exception(mysqli_error($connection));
                        }
                    } catch (Exception $e) {
                        echo "<script>alert('پست الکترونیکی از قبل استفاده شده');</script>";
                    }
                } else {
                    echo "<script>alert('طول رمز عبور باید بیشتر از  8 و کمتر از 30 رقم باشد');</script>";
                }
            } else {
                echo "<script>alert('طول نام کابری باید بیشتر از 5 و کمتز از 20 رقم باشد');</script>";
            }
        }
    }
}


?>




<html lang="en">

<head>
    <!--PB Hossein Sharafi-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>ثبت نام</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles.css">
    <script src="./script.js"></script>
</head>

<body dir="rtl" class="signupbody" >

    <!--PB Hossein Sharafi-->
    <!--start body-->
    <div class="formdiv">
        <div id="signup" class="signup">
            <form action="./signup.php" method="post" id="formsignup"><br>
                <input required type="text" placeholder="نام کاربری" id="user" class="input" name="user"><br><br><br>
                <input require type="email" placeholder="پست الکترونیک" id="email" class="input" name="email"><br><br><br>
                <input required type="password" placeholder="رمز عبور" id="pas" class="input" name="pas"><br><br><br>
                <input required type="submit" class="input" value="ثبت نام" name="submit" onclick="login()">
            </form><br>
            <a style="font-weight: bolder;" href="./loginup.php" id="linklogin">از قبل ثبت نام کرده اید (ورود)</a>
        </div>



    </div>

    <!--end body-->
</body>
<!--PB Hossein Sharafi-->

</html>