<?php
require_once __DIR__ . '/require.php';
$gallery = new GalleryService(getConnection());
require(__DIR__ . '/contact.php');
require(__DIR__ . '/elements/header.html.php');
?>

<body>


<div class="header">
    <section id="header" class="appear">

        <div class="navbar navbar-fixed-top" role="navigation"
             data-0="line-height:60px; height:70px; background-color:rgba(0,0,0,0.3);"
             data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars color-white"></span>
                </button>

                <ul class="navbar-brand">
                    <li class="title">
                        <a href="index.html">
                            <img src="img/12.png" alt="Logo" class="logo">
                        </a>
                    </li>
                </ul>

            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#section-about">O mnie</a></li>
                    <li><a href="#services">Usługi</a></li>
                    <li><a href="#line-pricing">Cennik</a></li>
                    <li><a href="#section-works">Galeria</a></li>
                    <li><a href="#team">Serwis</a></li>
                    <li><a href="#section-contact">Kontakt</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>


    </section>
</div>
<section id="header">
<header>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    <script type="text/javascript" src="js1.js"></script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
</header>
<div id="page">
    <ul class="cb-slideshow">
        <li><span>Zdjęcie 01</span></li>
        <li><span>Zdjęcie 02</span><</li>
        <li><span>Zdjęcie 03</span></li>
        <li><span>Zdjęcie 04</span></li>
        <li><span>Zdjęcie 05</span></li>
        <li><span>Zdjęcie 06</span></li>
    </ul>
</div>
</section>

<!--about-->
<section id="section-about">
    <div class="container">
        <div class="about">
            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="title">
                        <div class="wow bounceIn">

                            <h2 class="section-heading animated" data-animation="bounceInUp" style="
    font-weight: bold;
">O MNIE</h2>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="row-slider">
                    <div class="col-lg-6 mar-bot30">
                        <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                            <div class="slides" data-group="slides">
                                <ul>

                                    <div class="slide-body" data-group="slide">
                                        <li><img alt="" class="img-responsive" src="img/666.jpg" width="100%"
                                                 height="350"/></li>
                                        <li><img alt="" class="img-responsive" src="img/777.jpg" width="100%"
                                                 height="350"/></li>
                                    </div>
                                </ul>
                                <a class="slider-control left" href="#" data-jump="prev"><i
                                        class="fa fa-angle-left fa-2x"></i></a>
                                <a class="slider-control right" href="#" data-jump="next"><i
                                        class="fa fa-angle-right fa-2x"></i></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <a class="company mar-left10">
                            <h4 style=" color: #595757;font-size: 20px;">Cześć, jestem Mariia Diachenko!</h4>
                            <a class="company mar-left10" style="
    color: #898989;
    padding-top: 10px;
    margin-top: 20px;
    text-align: justify;
">Nie urodziłem się z aparatem i, przyznaję, moją ulubioną zabawką z dzieciństwa była Barbie, nie Zenith czy Fad.
                                Jestem za młoda, by twierdzić, że fotografuję 10 lat lub dłużej, ale to prawda. Pierwszy
                                aparat dostałem od dziadka, gdy miałem 8 lat.
                                To był bardzo stary aparat, który robi zdjęcia na negatywy. Na tem czas miałam tylko
                                czarno-białe negatywy. Po zrobieniu kilku zdjęć zakochałam się w czarno-białe zdjęcia.
                                Fotografia czarno-biała wygląda bardziej dramatycznie i bardziej emocjonalnie niż kolor,
                                ponieważ fotografia czarno-biała pokazuje „duszę” obrazu.
                                Fotografuję na profesjonalnym, pełnoformatowym aparacie Canon 6D. Dane techniczne
                                umożliwiają wykonywanie wysokiej jakości zdjęć nawet w warunkach słabego oświetlenia
                                przy wysokich wartościach ISO.
                                Jest to bardzo ważne, na przykład podczas robienia zdjęć komunii lub podczas pracy z
                                bardzo małymi dziećmi. Wiedza, a przede wszystkim doświadczenie, które zdobyłam i ciągle
                                zdobywam pozwalają mi na oferowanie Wam usług fotograficznych wysokiej jakości. Jedyne
                                pytanie, na które Musicie sobie odpowiedzieć to to czy styl i estetyka moich prac
                                odpowiada Waszemu gustowi i Waszym oczekiwaniom. Jeżeli tak, bardzo mi miło! Zapraszam
                                Was do kontaktu.  </a>
                            </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!--/about-->

<section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">

                    </div>
                </div>
            </div>
        </div>
</section>
<!-- services -->
<section id="services" class="section pad-bot5 bg-white">
    <div class="container">
        <div class="row mar-bot5">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <div class="wow bounceIn" data-animation-delay="7.8s">

                        <h2 class="section-heading animated" data-animation="bounceInUp">USŁUGI</h2>
                        <h4 style="
    width: 900px;
    margin-left: -170px;
    color:rgba(117,118,117,0.62);
    font-size: 16px;
      line-height: 1.3em;
">Zajmuje się wieloma odmianami fotografii. Od fotografii portretowej przez fotografię reklamową, wizerunkową i
                            fotoreportaże. Zapraszam serdecznie na: sesje portretowe (plenerowe, studyjne), wizerunkowe,
                            reklamowe, dziecięce (sesje zdjęciowe dziecięce i noworodkowe), par (sesje zdjęciowe
                            narzeczeńskie), brzuszków (sesja ciążowa), okolicznościowe (fotoreportaże: chrzest,
                            komunia, studniówka, szkolenia, konferencje).</h4>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mar-bot40">
            <div class="col-md-4">
                <div class="wow bounceIn">
                    <div class="align-center">
                        <div class="wow rotateIn">
                            <div class="service-col">
                                <div class="profile-picture">
                                    <figure>
                                        <img src="img/team/1.jpg" alt="" style="max-width: 100%;"></figure>
                                    <div class="profile-overlay"></div>
                                </div>
                                <h2><a href="#">Sesje portretowe</a></h2>
                                <p>W fotografii portretowej staram się nawiązać z każdym indywidualną więź. Dzięki temu zdjęcia portretowe doskonale ukazują nie tylko wygląd portretowanej osoby ale charakter i wyjątkowość. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="align-center">
                    <div class="wow bounceIn">
                        <div class="wow rotateIn">
                            <div class="service-col">
                                <div class="profile-picture">
                                    <figure><img src="img/team/2.jpg" alt="" style="max-width: 100%;"></figure>
                                    <div class="profile-overlay"></div>
                                </div>
                                <h2><a href="#"> Sesje ślubne</a></h2>
                                <p>Sesja ślubna niezapomniana pamiątka. Zdjęcia ze ślubu w formie reportażu to wyjątkowy sposób upamiętnienia wszystkich wydarzeń i osób z tego wyjątkowego dla Was dnia. Sesja ślubna to niezapomniana pamiątka.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="align-center">
                    <div class="wow bounceIn">
                        <div class="service-col">
                            <div class="profile-picture">
                                <figure><img src="img/team/event.jpg" alt="" style="max-width: 100%;"></figure>
                                <div class="profile-overlay"></div>
                            </div>
                            <h2><a href="#">Sesje eventowe</a></h2>
                            <p>Fotografia podczas eventów firmowych, spotkań integracyjnych czy imprez wyjazdowych to
                                świetny materiał do portfolio firmy. Fotografuje zarówno duże wydarzenia jak i małe
                                imprezy klubowe. </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="align-center">
                    <div class="wow bounceIn">
                        <div class="service-col">
                            <div class="wow bounceIn" data-animation-delay="4.8s">
                                <div class="profile-picture">
                                    <figure><img src="img/team/studia.jpg" alt="" style="max-width: 100%;"></figure>
                                    <div class="profile-overlay"></div>
                                </div>
                            </div>
                            <h2><a href="#">Sesje studyjne</a></h2>
                            <p>Podczas sesji studyjnej istnieją dużo większe możliwości operowania światłem (zwykle
                                sztucznym) oraz intymną atmosferą, której w miejscach publicznych nie uda się osiągnąć.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

</section>
<!--/services-->

<!-- spacer section:testimonial -->
<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>

    </div>

</section>


<!-- spacer section:stats -->

<section id="line-pricing" class="line-section line-center">
    <div class="container pad-top50">
        <div class="row mar-bot10 ">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <div class="wow bounceIn">

                        <h2 class="section-heading animated" data-animation="bounceInUp">Cennik</h2>
                        <p style="width: 600px;color: #727171;">Poniższe ceny dotyczą wzięcia udziału w sesji zdjęciowej jednej modelki/modela, nie dotyczy
                            sesji ślubnej i eventowej większa ilość osób, koszt do ustalenia. Miejsce przeprowadzenia
                            zdjęć Kraków i w całej Polski. Istnieje możliwość dojazdu do klienta koszt transportu do
                            ustalenia.
                        </p>

                    </div>
                </div>
            </div>
        </div>


        <div class="demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <h3 class="title">Pakiet
                                Mini</h3>
                            <div class="price-value"> Od 50zł
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>1 godzina fotosesji</li>
                                    <li>100 zdjęć na pendrive</li>
                                    <li>10 zdjęć retuszowanych</li>
                                    <li>1 lokacja</li>

                                </ul>
                                <a href="#section-contact"" class="pricingTable-signup">Wybierz</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <h3 class="title">Pakiet Standart</h3>
                            <div class="price-value">od 200zł

                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li> 2 godziny fotosesji</li>
                                    <li>250 zdjęć na pendrive</li>
                                    <li>50 zdjęć retuszowanych</li>
                                    <li>2 lokacji </li>

                                </ul>
                                <a href="#section-contact"" class="pricingTable-signup">Wybierz</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <h3 class="title">Pakiet pełny </h3>
                            <div class="price-value"> od 400 zł

                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>5 godzin fotosesji</li>
                                    <li>400 zdjęć na pendrive</li>
                                    <li>100 zdjęć retuszowanych</li>
                                    <li>3-4 lokacji</li>
                                </ul>
                                <a href="#section-contact"" class="pricingTable-signup">Wybierz</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable">
                            <h3 class="title">Pakiet Gold</h3>
                            <div class="price-value">od 700 żl
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    <li>8 godzin fotosesji</li>
                                    <li>600 zdjęć na pendrive</li>
                                    <li>200 zdjęć retuszowanych</li>
                                    <li>Fotoksiążka</li>
                                </ul>
                                <a href="#section-contact"" class="pricingTable-signup">Wybierz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5" >
    <div class="container ">
    </div>
</section>


<!-- section works -->
<div class="gallery-btn text-center text-uppercase">
<section id="section-works" class="section appear clearfix">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Galeria</h2>
                    <p style="
    width: 650px;
    color: #979797;
    font-family: initial;
    font-size: 17px;
">Zapraszam do swojej galerii. Chciałam pokazać Wam jak najwięcej zdjęć, które wykonała,ale że jest ich naprawdę wiele, musiałam się mocno ograniczyć.
                        Dla ułatwienia zdjęcia podzielono na kategorie. Miłego oglądania:)</p>
                </div>
            </div>
        </div>

        <div class="row">
            <nav id="filter" class="col-md-12 text-center">
                <ul>
                    <div class="gallery-btn text-center text-uppercase">
                        <a href="#" class="active btn btn-trans" data-filter="*">ALL</a>
                        <a href="#" class="btn btn-trans" data-filter=".webdesign">PORTRET</a>
                        <a href="#" class="btn btn-trans" data-filter=".photography">ŚLUB</a>
                        <a href="#" class="btn btn-trans" data-filter=".studia">STUDIA</a>
                        <a href="#" class="btn btn-trans" data-filter=".print">EVENT</a>
                        <a href="#" class="btn btn-trans" data-filter=".love">LOVE-STORY</a>

                    </div>
                </ul>

            </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">
                      <?php $gallery->showGallery(1,300); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot30">
</section>

    <section id="team" class="section appear clearfix">
    <!-- team -->
        <h2 class="section-heading animated" data-animation="bounceInUp" style="
    font-weight: 800;
">SERWIS</h2>
        <p style="
    color: #828080;
    font-size: 20px;
    /* width: 773px; */
    font-family: sans-serif;
    /* margin-left: 372px; */
    margin-top: 45px;
    inline-size: 30p;
">Autorem niniejszego serwisu jest Mariia Diachenko.</p>
        <p style="
    /* width: 797px; */
    color: #aeaeae;
    font-family: initial;
    font-size: 18px;
    /* margin-left: 105px; */
    margin-top: 20px;
    inline-size: -1px;
    width: 99%;
">Serwis ten stanowi integralną część pracy licencjackiej (kierunek: Elektroniczne Przetwarzanie Informacji), przygotowanej pod kierunkiem prof. dr. Piotra Śliwińskiego na Wydziale Zarządzania i Komunikacji Społecznej Uniwersytetu Jagiellońskiego.
            Za pomoc w przygotowaniu serwisu oraz konsultacje dziękuję promotorowi dr. Piotrowi Śliwińskiemu ta całej rodzinie za wsparcie ta pomoc.</p>




    <section id="parallax4" class="section parallax" data-stellar-background-ratio="0.5" style="margin-top: 140px;background-position: 0% 1004.04px;">
        <div class="align-center pad-top40 pad-bot30">
        </div>
    </section>
<!-- contact -->
<section id="section-contact" class="section appear clearfix">
    <div class="container">

        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Kontakt</h2>
                    <p>W razie jakich kolwiek pytań peoszę o kontakt.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="sendmessage">Wiadomość wyslana, dziękuje!</div>
                <div id="errormessage"></div>
                <?php $messages->show(); ?>
                <form action="#sendmessage" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                               data-rule="minlen:4"
                               data-msg="Please enter at least 4 chars"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                               data-rule="email"
                               data-msg="Please enter a valid email"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                               data-rule="minlen:4"
                               data-msg="Please enter at least 8 chars of subject"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required"
                        data-msg="Please write something for us"
                        placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Napisz"/>
                    </div>
                </form>
            </div>
            <!-- ./span12 -->
        </div>

    </div>
    <section id="footer" class="section footer" style="
    margin-top: -129px;
    height: 251px;
">
        <div class="container">
            <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <div class="container">
                            <div class="row text-center" style="
    margin-left: 211px;
">
                                <div class="col-sm-3 col-xs-6 first-box" style="
    /* margin-top: -37px; */


                                    <h1><span class="earphone"></span></h1>
                                    <h3>Telefon</h3>
                                <p style="
                                     color: white; ">+478576109155</p>
                                </div>
                                <div class="col-sm-3 col-xs-6 second-box">
                                    <h1><span class="home"></span></h1>
                                    <h3>Lokalizacja</h3>
                                    <p style="
                                     color: white; ">Kraków</p>
                                </div>
                                <div class="col-sm-3 col-xs-6 third-box">
                                    <h1><span class="send"></span></h1>
                                    <h3>E-mail</h3>
                                    <p style="
                                     color: white; ">M_sha@ukr.net</p>
                                </div>
                            </div>
                        </div>
                    </ul></div></div></div></section>

</section>
<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

<?php
require(__DIR__ . '/elements/footer.html.php');
