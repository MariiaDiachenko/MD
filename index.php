<?php
require_once __DIR__ . '/require.php';
$gallery = new GalleryService(getConnection());
require(__DIR__ . '/elements/header.html.php');
?>
<div class="header">
   <section id="header" class="appear">
      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">MD-Mariia Diachenko
               </a>
            </h1>
         </div>
         <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
               <li class="active"><a href="#index">Home</a></li>
               <li><a href="#section-about">O mnie</a></li>
               <li><a href="#section-works">Portfolio</a></li>
               <li><a href="#line-pricing">Ceny</a></li>
               <li><a href="#section-works">Blog</a></li>
               <li><a href="#section-contact">Kontakt</a></li>
            </ul>
         </div>
         <!--/.navbar-collapse -->
      </div>
   </section>
</div>
<header>
   <link rel="stylesheet" type="text/css" href="css2.css" />
   <script type="text/javascript" src="js1.js"></script>
   <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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
</body>
</html>
<!-- Responsive slider - END -->
<html>
   <body>
      <!--about-->
      <section id="section-about">
         <div class="container">
            <div class="omnie">
               <div class="row mar-bot40">
                  <div class="col-md-offset-3 col-md-6">
                     <div class="title">
                        <div class="wow bounceIn">
                           <h2 class="section-heading animated" data-animation="bounceInUp">O mnie</h2>
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
                                    <li><img alt="" class="img-responsive" src="img/777.jpg" width="100%" height="350"/></li>
                                    <li><img alt="" class="img-responsive" src="img/666.jpg" width="100%" height="350"/></li>
                                    <li><img alt="" class="img-responsive" src="img/34.jpg" width="100%" height="350"/></li>
                                 </div>
                              </ul>
                              <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                              <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 ">
                        <div class="company mar-left10">
                           <h4>Cześć!. Nazywam sie Mariia Diachenko i ja jestem fotografem</h4>
                           <p>oim hobby jest fotografia. Chciałambym w przyszłości zostać fotografem. Moje hobby odciąga mnie od spraw doczesnych, od życia doczesnego. Mogę, pokazać to, co czuję , co myślę. Inne osoby mogą oceniać moje prace negatywnie lub pozytywnie. Wzoruję się na elementach z powieści, czyli charakterystykach postaci opisach miejsc. Następnie odnajduję to miejsce i próbuje przekazać w jak najlepszym odbiciu.Myślę ze nie jest to tym czasowe zainteresowanie. Mam jeszcze drugie hobby, czyli taniec. Kocham to. Mogę przedstawić siebie, moje emocje. Gdy tańczę wchodzę w inny świat. Świat nie znamy ludziom. Nie odkryty, ale taki piękny. Znajdziesz tutaj kilka wpisów dotyczących ostatnich zdjęć, które wykonałam oraz dość obszerne portfolio, gdzie możesz zapoznać się z próbkami mojej twórczości..</p>
                        </div>
                        <div class="list-style">
                           <div class="row">
                              <div class="col-lg-6 col-sm-6 col-xs-12">
                                 <ul>
                                    <li>TekstTekst</li>
                                    <li>TekstTekst</li>
                                    <li>TekstTekst</li>
                                    <li>TekstTekst</li>
                                 </ul>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-xs-12">
                                 <ul>
                                    <li>TekstTekst</li>
                                    <li>TekstTekst</li>
                                    <li>TekstTekst</li>
                                    <li>TekstTekst</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--/about-->
      <!-- spacer section:testimonial -->
      <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="align-center">
                     <div class="testimonial pad-top40 pad-bot40 clearfix">
                        <h5>
                           Każdy może zrobić jedno dobre zdjęcie, mi poszło lepiej bo zrobiłem dwa.
                        </h5>
                        <br/>
                        <span class="author">&mdash; David Bailey &mdash;</span>
                     </div>
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
                     <div class="wow bounceIn"data-animation-delay="7.8s">
                        <h2 class="section-heading animated"  >Uslugi</h2>
                        <h4>Wykonuje zdjecia blablablabla.</h4>
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
                                 <figure><img src="img/team/1.jpg" alt=""></figure>
                                 <div class="profile-overlay"></div>
                              </div>
                              <h2><a href="#">Fotografia portretowa</a></h2>
                              <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
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
                                 <figure><img src="img/team/2.jpg" alt=""></figure>
                                 <div class="profile-overlay"></div>
                              </div>
                              <h2><a href="#"> Fotografia eventowa</a></h2>
                              <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
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
                              <figure><img src="img/team/4.jpg" alt=""></figure>
                              <div class="profile-overlay"></div>
                           </div>
                           <h2><a href="#">Fotografia studyjna</a></h2>
                           <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
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
                                 <figure><img src="img/team/3.jpg" alt=""></figure>
                                 <div class="profile-overlay"></div>
                              </div>
                           </div>
                           <h2><a href="#">Fotografia krajobrazowa</a></h2>
                           <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="image-second1"><img src="img/11.jpg"></div>
            <div class="image-second1"><img src="img/12.jpg"></div>
            <div class="image-second1"><img src="img/13.jpg"></div>
         </div>
      </section>
      <!--/services-->
      <!-- spacer section:stats -->
      <section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5">
         <div class="container ">
         </div>
      </section>
      <section id="line-pricing" class="line-section line-center">
         <div class="container pad-top50">
            <div class="row mar-bot10 ">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <div class="wow bounceIn">
                        <h2 class="section-heading animated" data-animation="bounceInUp">Pricing Table</h2>
                        <p>ceny blabla</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="line-wrap">
               <div class="line-pricing-table">
                  <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
                     <ul>
                        <li class="line-head-row">
                           Pakiet Minimum
                        </li>
                        <li class="line-price-row">
                           <p>
                              <span class="symbol">od </span>
                              <span> 50</span>
                              <span class="symbol">zł </span>
                           </p>
                           <small></small>
                        </li>
                        <li>
                           1 theme included
                        </li>
                        <li>
                           1 year of theme updates
                        </li>
                        <li>
                           20% off future purchases
                        </li>
                        <li class="line-btn-row">
                           <a href="section-contact" class="line-btn light">Wybierz</a>
                        </li>
                     </ul>
                  </div>
                  <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.5s">
                     <ul class="line-highlight">
                        <li class="line-head-row">
                           Pakiet Premium
                        </li>
                        <li class="line-price-row">
                           <p>
                              <span class="symbol">zł</span>
                              <span>150</span>
                           </p>
                           <small>Pakiet standardowy</small>
                        </li>
                        <li>
                           24 themes included
                        </li>
                        <li>
                           Lifetime of premium support
                        </li>
                        <li>
                           Access all new themes
                        </li>
                        <li class="line-btn-row">
                           <a href="" class="line-btn green">Get Started</a>
                        </li>
                     </ul>
                  </div>
                  <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.7s">
                     <ul>
                        <li class="line-head-row">
                           Pakiet Standardowy
                        </li>
                        <li class="line-price-row">
                           <p>
                              <span class="symbol">$</span>
                              <span>150</span>
                           </p>
                           <small>Per user / month</small>
                        </li>
                        <li>
                           12 themes included
                        </li>
                        <li>
                           1 year of theme updates
                        </li>
                        <li>
                           Access all new themes
                        </li>
                        <li class="line-btn-row">
                           <a href="" class="line-btn light">Get Started</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- spacer section:testimonial -->
      <section id="testimonials-2" class="section" data-stellar-background-ratio="0.5">
         <div class="container">
         <div class="row">
            <div class="col-lg-12">
            </div>
         </div>
      </section>
      <!-- section works -->
      <section id="section-works" class="section appear clearfix">
         <div clss="container">
            <div class="row mar-bot40">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <h2 class="section-heading animated" data-animation="bounceInUp">
                        Portfolio
                     </h2>
                     <p>blablablabla</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <nav id="filter" class="col-md-12 text-center">
                  <ul>
                     <li><a href="#" class="current btn-theme btn-small" data-filter="*">Wszystkie</a></li>
                     <li><a href="#"  class="btn-theme btn-small" data-filter=".portret" >Porttret</a></li>
                     <li><a href="#"  class="btn-theme btn-small" data-filter=".event">Event</a></li>
                     <li ><a href="#" class="btn-theme btn-small" data-filter=".studia">Studia</a></li>
                  </ul>
               </nav>
               <div class="col-md-12">
                  <div class="row">
                     <div class="portfolio-items isotopeWrapper clearfix" id="3">
                       <?php $gallery->showGallery(1, 300); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
      </section>
      <!-- contact -->
      <section id="section-contact" class="section appear clearfix">
         <div class="container">
            <div class="row mar-bot40">
               <div class="col-md-offset-3 col-md-6">
                  <div class="section-header">
                     <h2 class="section-heading animated" data-animation="bounceInUp">Contakt </h2>
                     <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="cform" id="contact-form">
                     <div id="sendmessage">
                        Your message has been sent. Thank you!
                     </div>
                     <form action="contact/contact.php" method="post" role="form" class="contactForm">
                        <div class="wow bounceIn">
                           <div class="form-group">
                              <label for="name">Your Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validation"></div>
                           </div>
                           <div class="form-group">
                              <label for="email">Your Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validation"></div>
                           </div>
                           <div class="form-group">
                              <label for="subject">Subject</label>
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                           </div>
                           <div class="form-group">
                              <label for="message">Message</label>
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                              <div class="validation"></div>
                           </div>
                        </div>
                        <button type="submit" class="line-btn green">SEND MESSAGE</button>
                     </form>
                  </div>
               </div>
               <!-- ./span12 -->
            </div>
         </div>
      </section>
      <!-- map -->
      <section id="section-map" class="clearfix">
         <div id="map"></div>
      </section>
      <section id="footer" class="section footer">
         <div class="container">
            <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
               <div class="col-sm-12 align-center">
                  <ul class="social-network social-circle">
                     <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                     <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                     <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
            <div class="row align-center copyright">
               <div class="col-sm-12">
                  <p>Copyright </a></p>
               </div>
            </div>
         </div>
      </section>
      <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<?php
require(__DIR__ . '/elements/footer.html.php');
