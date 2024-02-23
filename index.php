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
    <script src="./script.js"></script>
    <link rel="stylesheet" href="./styles.css">

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
            <div class="sinfo">


                <h1>مدرسه شهید بهشتی</h1>
                <h3 style="margin-right: 1%;">تارنمای مدرسه شیدبهشتی در راستی اطلاع رسانی و بالا بردن سرعت عملکرد برای دانش اموزش , والدین , و افرادی که قصد ورود به مدرسه را دارند ساخته شده</h3>
                <h3 style="margin-right: 1%;">توجه تارنما به طور کامل تکمیل نشده و درآینده بخش های کاربردی جدیدی به تارنما اضافه خواهد شد</h3>
            </div>
            <h1 class="newstitle">سامانه ها</h1>
            <div class="site">
                <a href="https://web.shad.ir/">
                    <div><img src="./img/site/shad.png" width="100%" alt="siteicon">
                        <h3 class="fontsize">شاد تحت وب</h3>
                    </div>
                </a>
                <hr class="phonehr">

                <a href="https://my.medu.ir/">
                    <div><img src="./img//site/medu.png" width="100%" alt="siteicon">
                        <h3 class="fontsize">سامانه آموزش و پروزش (my medu)</h3>
                    </div>
                </a>
                <hr class="phonehr"><a href="https://sampad.gov.ir/">
                    <div><img src="./img/logo.png" width="100%" alt="siteicon">
                        <h3 class="fontsize">سامانه سمپاد</h3>
                    </div>
                </a>


            </div>
            <h1 class="newstitle">اخبار</h1>
            <div class="news">
                <a onclick="showmessage(),newsn9();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 9 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn8();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 8 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn7();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 7 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn6();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 6 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn5();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 5 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn4();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 4 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn3();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 3 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn2();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 2 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
                <a onclick="showmessage(),newsn1();">
                    <div class="newsbox"><img src="./img/news/kh.jpg" width="100%" alt="newsimg">
                        <h3>اطلاعیه 1 جشنواره خوارزمی</h3>
                    </div>
                </a>
                <hr class="phonehr">
            </div><br>
            <h1 class="newstitle">گالری تصاویر</h1>
            <div class="sinfo">
                <a href="./img/photo/img1.jpg">
                    <div class="gallery"><img src="./img/photo/img1.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img2.jpg">
                    <div class="gallery"><img src="./img/photo/img2.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img3.jpg">
                    <div class="gallery"><img src="./img/photo/img3.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img4.jpg">
                    <div class="gallery"><img src="./img/photo/img4.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img5.jpg">
                    <div class="gallery"><img src="./img/photo/img5.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img6.jpg">
                    <div class="gallery"><img src="./img/photo/img6.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img7.jpg">
                    <div class="gallery"><img src="./img/photo/img7.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img8.jpg">
                    <div class="gallery"><img src="./img/photo/img8.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img9.jpg">
                    <div class="gallery"><img src="./img/photo/img9.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img10.jpg">
                    <div class="gallery"><img src="./img/photo/img10.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img11.jpg">
                    <div class="gallery"><img src="./img/photo/img11.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img12.jpg">
                    <div class="gallery"><img src="./img/photo/img12.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img13.jpg">
                    <div class="gallery"><img src="./img/photo/img13.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img14.jpg">
                    <div class="gallery"><img src="./img/photo/img14.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img15.jpg">
                    <div class="gallery"><img src="./img/photo/img15.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img16.jpg">
                    <div class="gallery"><img src="./img/photo/img16.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img17.jpg">
                    <div class="gallery"><img src="./img/photo/img17.jpg" width="100%" alt="gallery">
                    </div>
                </a><a href="./img/photo/img18.jpg">
                    <div class="gallery"><img src="./img/photo/img18.jpg" width="100%" alt="gallery">
                    </div>
                </a>

            </div>



        </div>
        <!--start message-->
        <div id="messageBox" class="hidden messageBox">
            <h1>متن اطلاعیه</h1>
            <h3 id="title1"></h3>
            <h5 id="message1"></h5>
            <h5 id="message2"></h5>
            <h5 id="message3"></h5>
            <h5 id="message4"></h5>
            <button class="button" onclick="hidemessage()">بستن پیام</button>
        </div>
        <!--end message-->
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
    <div class="copyright">
        <h2>تمامی حقوق مربوط به شخص <a href="https://hosseinsharafi.lol/"> حسین شرفی </a>می باشد</h2>
        <h2>copyright ©2024</h2>
    </div>
    <!--end footer-->


</body>
<!--PB Hossein Sharafi-->

</html>