//PB Hossein Sharafi
function showmessage() {
     document.getElementById('messageBox').classList.remove('hidden');
}

function hidemessage() {
     document.getElementById('messageBox').classList.add('hidden');
}
function showmenu() {

     if (document.getElementById('phonemenu').classList.contains('hidden')) { document.getElementById('phonemenu').classList.remove('hidden'); }
     else { document.getElementById('phonemenu').classList.add('hidden'); }

}
function newsn9() {
     message1 = 'با توجه به آمار پایین ثبت اثر، توسط دانش آموزان و پایان زمان باقی‌مانده در این مرحله، ضروری است؛ تمامی دانش آموزان شرکت کننده هرچه سریع‌تر نسبت به بارگذاری اثر در سامانه my.medu.ir نهایتا تا روز سه شنبه مورخ 1402/12/15 مطابق مراحل زیر اقدام نمایند';
     message2 = '1- تکمیل فرم نظر سنجی';
     message3 = '2- دریافت و مطالعه شیوه‌نامه در صورت نیاز به آگاهی بیشتر ';
     message4 = '3- بارگذاری اثر (مطابق حجم اعلام شده در جدول پیوست)';
     title = 'زمان بارگذاری آثار:';
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}
function newsn8() {
     message1 = ' با توجه به فعال شدن بارگذاری آثار توسط دانش‌آموزان در سامانه جشنواره نوجوان خوارزمی، ثبت آثار تا پایان بهمن ماه ادامه دارد.';
     message2 = 'همچنین با توجه به مشارکت پایین ثبت اثر و زمان باقی مانده در این مرحله، هرچه سریع‌تر نسبت به بارگذاری اثر در سامانه my.medu.ir اقدام نمائید';
     message3 = 'دانش‌آموزان عزیز توجه داشته باشند، درصورتی که رمز ورود منقضی شده است می‌توانند از طریق درگاه دولت من و شماره پدر یا مادر(شماره‌ای که موقع ثبت‌نام به مدرسه داده شده است) و یا از مدیر مدرسه(از سامانه سیدا) نسبت به دریافت رمز جدید اقدام نمایند.';
     message4 = '';
     title = ''
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}
function newsn7() {
     message1 = 'نظر به درخواست خانواده ها، مدیران، ناظران و معلمان راهنمای عزیز، زمان برگزاری گام های مرحله‌ مدرسه ای به شرح زیر خواهد بود';
     message2 = ' با توجه به فعال شدن بارگذاری آثار توسط دانش‌آموزان در سامانه جشنواره نوجوان خوارزمی، ثبت آثار تا پایان بهمن ماه ادامه دارد.';
     message3 = '';
     message4 = '';
     title = ''
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}
function newsn6() {
     message1 = 'پیرو درخواست مکرر همکاران فرهنگی و دانش‌آموزان عزیز دوره اول متوسطه، ثبت‌نام دانش‌آموزان در سامانه جشنواره نوجوان خوارزمی تا روز  شنبه مورخ ۳۰ دی‌ماه ۱۴۰۲ فعال نگه داشته شد.';
     message2 = 'اما با توجه به تسهیل فرایند ثبت‌نام در مدت زمان کوتاه (حدودا ۵ دقیقه) توسط خود دانش‌آموز، همکاران عزیز تمام مدارس دوره اول متوسطه، در هفته پیش رو ضمن  معرفی اجمالی محورها، دانش‌آموزان را در انجام فرآیند ثبت‌نام در محورهای مورد علاقه‌شان یاری نمایند.';
     message3 = 'لذا ضروری است ضمن اطلاع‌رسانی سریع و وسیع از سوی ادارات کل استان‌ها به تمامی مدارس متوسطه اول و فراهم کردن زمینه ثبت‌نام همه دانش‌آموزان علاقمند، با پیگیری ناظران محترم مناطق، مدیران محترم و رابطین مدارس، از تضییع حق دانش‌آموزان جلوگیری شود.';
     message4 = '';
     title = ''
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;
}
function newsn5() {
     message1 = 'آخرین مهلت ثبت نام در سامانه جشنواره نوجوان خوارزمی، روز جمعه 22 دی ماه 1402 ساعت 24:00 است.'
     message2 = 'لذا به دلیل تسهیل در بارگذاری آثار دانش آموزان و جلوگیری از افزایش بار ترافیکی این زمان به هیچ عنوان تمدید نخواهد شد.';
     message3 = 'امکان بارگذاری آثار دانش آموزان عزیز شرکت کننده از صبح روز یکشنبه 24 دی ماه فعال خواهد شد.';
     message4 = '';
     title = 'خبر بسیار مهم و فوری'
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}
function newsn4() {
     message1 = 'دانش‌آموزی انفرادی شرکت کرده اما الان تصمیم گرفته به صورت گروهی ثبت‌نام کند؟';
     message2 = 'در پنل مدیر مدرسه حذف کارت انفرادی امکان پذیر است. بعد از حذف می‌توان مجدد به صورت گروهی ثبت‌نام کرد.      ';
     message3 = 'ورود به پنل مدیریتی از سکوی هوشمند مدیران برای معلم راهنما و مدیر امکان پذیر نیست؟';
     message4 = 'ورود به سامانه فقط از درگاه دولت من با شماره تلفن و کد یک‌بار مصرف امکان پذیر است';
     title = 'سؤالات پرتکرار همکاران و دانش‌آموزان'
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}
function newsn3() {
     message1 = 'به علت غیرفعال شدن سرور سامانه ثبت نام در هفته گذشته و همچنین درخواست مکرر شما دانش آموزان عزیز دوره اول متوسطه مبنی بر تمدید مهلت ثبت نام جشنواره نوجوان خوارزمی به اطلاع می رساند ';

     message2 = 'ثبت نام دانش‌آموزان در سامانه My.medu.ir تا ۱۵ دی ماه ۱۴۰۲ تمدید شد. ';
     message3 = 'توصیه می‌شود با توجه به ازدحام ثبت نام در روزهای پایانی و احتمال ایجاد اختلال، ثبت نام را به روز های پایانی موکول نکنید. ';
     message4 = '';
     title = ''
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}
function newsn2() {
     message1 = 'اشکالات سامانه ثبت نام درجشنواره نوجوان خوارزمی رفع شد و مجدد فعال شده است';
     message2 = 'توجه داشته باشید حتماً قبل ثبت نام با معلمان مدرسه مشورت کنید، با دوستان خود هماهنگ شوید بعد ثبت نام خود را نهایی کنید.';
     message3 = '';
     message4 = '';
     title = ''
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}
function newsn1() {
     message1 = 'ثبت نام دانش آموزان از درگاه ملی my.medu.ir از ۲۸ آبان ماه ۱۴۰۲ فعال شده است';
     message2 = 'مدیران محترم مدارس ضمن اطلاع رسانی از طریق کانال ها و گروه های دانش آموزی، والدین و معلمان، پاور پوینت نحوه ثبت نام را در اختیار مخاطبان قرار دهند';
     message3 = 'مهلت ثبت نام تا پایان آذرماه و مبنای انجام پروژه ها شیوه نامه نهم هست.';
     message4 = 'شیوه نامه دو زیرمحور جدید (محور برنامه نویسی و هوش مصنوعی) به همراه تغییرات جزئی و یا اصلاحات موردی تا ۱۰ آذرماه به اطلاع شما عزیزان می رسد.';
     title = 'آغاز ثبت نام جشنواره نوجوان خوارزمی'
     document.getElementById("message1").innerHTML = message1;
     document.getElementById("message2").innerHTML = message2;
     document.getElementById("message3").innerHTML = message3;
     document.getElementById("message4").innerHTML = message4;
     document.getElementById("title1").innerHTML = title;

}




//PB Hossein Sharafi