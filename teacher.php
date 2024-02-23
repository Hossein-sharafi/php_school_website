<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="6b27c243-2b81-4581-8cf5-17e00a3b976d";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


<?php
error_reporting(0);
include 'cookiechecker.php';
if (isset($_COOKIE["shbsloginemail"]) and isset($_COOKIE["shbsloginuser"]) and isset($_COOKIE["shbsloginpas"])) {
    $username = $_COOKIE["shbsloginuser"];
    $pas = $_COOKIE["shbsloginpas"];
    $email = $_COOKIE["shbsloginemail"];
    $usershow = '<a href="./panel.php" class="userheader"> ' . $username . '</a>';
} else {
    $usershow = '<a href="./signup.php" class="userheader">ثبت نام</a>';
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
        <div class="teacherlist">
            <h2>لیست معلمین مدرسه</h2>

            <table>
                <tr>
                    <th>نام معلم</th>
                    <th>درس مربوطه</th>
                    <th>پایه مربوطه</th>
                </tr>
                <tr>
                    <td>جعفر مرادی</td>
                    <td>ریاضی</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>علی اکبری</td>
                    <td>ریاضی</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>عطاالله اسدی</td>
                    <td>ریاضی</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>امید اویسی</td>
                    <td>ریاضی</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>رضا سلیمانی</td>
                    <td>زیست شناسی</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>فرشاد نجفی</td>
                    <td>فیزیک</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>یونس مجاهد کیش</td>
                    <td>شیمی</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>فردین حیدری</td>
                    <td>مطالعات اجتماعی</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>برهان عبدی</td>
                    <td>مطالعات اجتماعی</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>بهمن جلیلیان</td>
                    <td>مطالعات اجتماعی</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>یاسر صفری</td>
                    <td>پیام های آسمانی</td>
                    <td>7-8</td>
                </tr>
                <tr>
                    <td>بهروز رزم آرا</td>
                    <td>پیام های آسمانی</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>پیمان زنگنه</td>
                    <td>قرآن</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>اسماعیل یوسفی</td>
                    <td>قرآن</td>
                    <td>7-8</td>
                </tr>
                <tr>
                    <td>مهدی داوری نژاد</td>
                    <td>عربی</td>
                    <td>8-9</td>
                </tr>
                <tr>
                    <td>احمد محمدی</td>
                    <td>عربی</td>
                    <td>7-8</td>
                </tr>
                <tr>
                    <td>افشین بایگانه</td>
                    <td>فرهنگ و هنر</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>مهران نظری</td>
                    <td>تربیت بدنی</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>محمد سرحوی</td>
                    <td>تربیت بدنی</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>بهمن اسماعیلی</td>
                    <td>ادبیات فارسی</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>سید محمد حیات الغیب</td>
                    <td>نگارش</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>محسن خدا کرمی</td>
                    <td>ادبیات فارسی</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>علی جانی</td>
                    <td>زبان انگلیسی</td>
                    <td>8-9</td>
                </tr>
                <tr>
                    <td>شهسوار کریمی</td>
                    <td>زبان انگلیسی</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>امیر ناصری</td>
                    <td>کار و فناوری</td>
                    <td>7-8-9</td>
                </tr>
                <tr>
                    <td>افشین حسن آبادی</td>
                    <td>تفکر و سبک زندگی</td>
                    <td>7-8</td>
                </tr>
                <tr>
                    <td>پرویز هاشمی</td>
                    <td>آمادگی دفاعی</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>مسعود سلیمی</td>
                    <td>آزمایشگاه علوم</td>
                    <td>7-8-9</td>
                </tr>
            </table>
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