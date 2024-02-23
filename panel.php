<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="6b27c243-2b81-4581-8cf5-17e00a3b976d";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

<?php
error_reporting(0);
include 'cookiechecker.php';
if (isset($_COOKIE["shbsloginemail"]) and isset($_COOKIE["shbsloginuser"]) and isset($_COOKIE["shbsloginpas"])) {
    $username = $_COOKIE["shbsloginuser"];
    $pas = $_COOKIE["shbsloginpas"];
    $email = $_COOKIE["shbsloginemail"];
    $usershow = '<a href="./panel.php" class="userheader"> ' . $username . '</a>';
    if (isset($_POST['submitpas'])) {
        $oldpas = $_POST['oldpas'];
        $newpas = $_POST['newpas'];
        if (strlen($newpas) >= 8 and strlen($newpas) <= 30) {
            $sqlcode = "SELECT user FROM logindata WHERE email='$email' AND pas='$oldpas'";
            include 'sqlconnect.php';
            if (mysqli_num_rows($result) == 1) {
                $sqlcode = "UPDATE logindata
            SET pas = '$newpas'
            WHERE email = '$email';";
                include 'sqlconnect.php';
                echo "<script>alert('رمز عبور با موفقیت تغییر کرد');</script>";
                setcookie('shbsloginemail', $email, time() + (3600 * 1));
                setcookie('shbsloginuser', $username, time() + (3600 * 1));
                setcookie('shbsloginpas', $newpas, time() + (3600 * 1));
            } else {
                echo "<script>alert('رمز عبور اشتباه است');</script>";
            }
        } else {
            echo "<script>alert('طول رمز عبور باید بیشتر از  8 و کمتر از 30 رقم باشد');</script>";
        }
    }

    if (isset($_POST['submitticket'])) {
        $tickettitle = $_POST['tickettitle'];
        $ticketmessage = $_POST['ticketmessage'];
        if (strlen($tickettitle) >= 4 and strlen($ticketmessage) >= 6) {
            $sqlcode = "insert INTO ticket (user,email,title,message) VALUES ('$username','$email','$tickettitle','$ticketmessage')";
            include 'sqlconnect.php';
            echo "<script>alert('با موفقیت ثبت شد');</script>";
        } else {
            echo "<script>alert('طول عنوان  باید بیشتر از  4 و طول متن بیشتر از 6 رقم باشد');</script>";
        }
    }
} else {
    header("Location:signup.php");
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
    <title>مدرسه شهید بهشتی</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles.css">
    <script src="./script.js"></script>
</head>

<body class="bodySetting body" dir="rtl">

    <div>
        <!--PB Hossein Sharafi-->
        <!--start header-->
        <div class="header">
            <ul id="logoul">
                <h1 id="weblogo">مدرسه شهید بهشتی</h1>
                <a onclick="showmenu()">
                    <img width="30" class="hidden" id="webmenu" src="./img/menu.png" alt="menu">
                </a>
            </ul>
            <span id="libox">
                <a href="./index.php" class="headli">
                    <li>خانه</li>
                </a>
                <a href="./teacher.php" class="headli">
                    <li>لیست مدرسین</li>
                </a>
                <a href="./historysociety.php" class="headli">
                    <li>انجمن تاریخ</li>
                </a>
                <a href="./map.php" class="headli">
                    <li>آدرس</li>
                </a>
                <a class="headli" href="http://www.chap.sch.ir">
                    <li> پی دی اف درس ها</li>
                </a>

            </span>
            <h2 class="headeruser">
                <?php echo ($usershow) ?>
            </h2>
        </div>

        <!--end header-->
        <!--PB Hossein Sharafi-->

        <!--start menu-->
        <div>
            <div id="phonemenu" class="hidden phonemenu">
                <h2>منو</h2>
                <a href="./index.php">
                    <li>خانه</li>
                </a>
                <a href="./map.php">
                    <li>آدرس</li>
                </a>
                <a href="./teacher.php">
                    <li>لیست مدرسین</li>
                </a>
                <a href="./news.php">
                    <li>اخبار</li>
                </a>
                <a href="./historysociety.php">
                    <li>انجمن تاریخ</li>
                </a>
                <a href="http://www.chap.sch.ir">
                    <li> پی دی اف درس ها</li>
                </a>
                <a href="./developer.php">
                    <li>درباره ما (توسعه دهنده)</li>
                </a>
            </div>
        </div>
        <!--end menu-->
        <div>
            <div class="infobox">
                <div class="info">
                    <h1>اطلاعات :</h1>
                    <h2>پست الکترونیک : </h2>
                    <li><?php echo ($email); ?></li>
                    <h2>نام کابری : </h2>
                    <li><?php echo ($username); ?></li>
                </div>
            </div>
            <div class="infobox">
                <h1> ثبت درخواست و پشنهادات :</h1>
                <form style="text-align: center;" action="./panel.php" method="post">
                    <input required type="text" placeholder="عنوان" id="tickettitle" class="input" name="tickettitle"><br><br><br>
                    <input required type="text" placeholder="متن پیام" id="ticketmessage" class="input" name="ticketmessage"><br><br><br>
                    <input required type="submit" class="input" value="ثبت" name="submitticket">

                </form>




            </div>
            <div class="infobox">
                <h1>تغییر رمز عبور :</h1>
                <form style="text-align: center;" action="./panel.php" method="post">
                    <input required type="password" placeholder="رمز عبور" id="oldpas" class="input" name="oldpas"><br><br><br>
                    <input required type="password" placeholder="رمز عبور جدید" id="newpas" class="input" name="newpas"><br><br><br>
                    <input required type="submit" class="input" value="تغییر" name="submitpas">

                </form>




            </div>




        </div>
        <!--end body-->
        <!--PB Hossein Sharafi-->
        <!--start footer -->
        <div class="footer">
            <div id="flogo">
                <img src="./img/logo.png" width="100%" class="flogo">
            </div>
            <div id="page">
                <h2>صفحات اصلی</h2>
                <a href="./index.php">
                    <li>خانه</li>
                </a>
                <a href="./map.php">
                    <li>آدرس</li>
                </a>
                <a href="./teacher.php">
                    <li>لیست مدرسین</li>
                </a>
                <a href="./news.php">
                    <li>اخبار</li>
                </a>
            </div>
            <div id="develope">
                <h2>توسعه دهندگان </h2>
                <a href="./developer.php">
                    <li>درباره ما</li>
                </a>
            </div>
            <div id="us">
                <h2>راه های ارتباطی</h2>
                <a>
                    <li>083-38232190</li>
                </a>
                <br>
                <a>
                    <li>083-38248225</li>
                </a>
            </div>

        </div>
        <!--end footer-->
        <div class="copyright">
        <h2>تمامی حقوق مربوط به شخص <a href="https://hosseinsharafi.lol/"> حسین شرفی </a>می باشد</h2>
        <h2>copyright ©2024</h2>
    </div>
    </div>
</body>
<!--PB Hossein Sharafi-->

</html>