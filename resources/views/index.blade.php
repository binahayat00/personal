@extends('layouts.master')

@section('title')
Amir Zare - Professional web developer and programmer
@endsection

@section('content')
<body id="top">

    <!-- ****************************** Preloader ************************** -->
    <div id="preloader"></div>


        <!-- ==========================
      HEADER SECTION 
      =========================== -->
      <header id="home">
          <!-- creative menu -->
          <div class="container-fluid">
            <div class="row">
              <div class="menu-wrap">
              <nav class="menu">
                  <!-- Menu Links -->
                  <div class="icon-list">
                      <a href="#home"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
                      <a href="#about"><i class="fa fa-fw fa-quote-left"></i><span>About</span></a>
                      <a href="#education"><i class="fa fa-fw fa-university"></i><span>Education</span></a>
                      <a href="#skills"><i class="fa fa-fw fa-user-md"></i><span>Skill</span></a>
                      <a href="#cetificate"><i class="fa fa-fw fa-certificate"></i><span>cetificate</span></a>
                      <a href="#Project"><i class="fa fa-fw fa-tasks"></i><span>Project</span></a>
                      <a href="#contact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
                  </div>
              </nav>
              </div>
              <button class="menu-button" id="open-button"></button><!-- menu button -->
            </div><!--/row-->
          </div><!--/container-->
        <!-- Header Image -->
        <section class="hero" id="hero">
          <div class="container">

            <div class="row">
              <div class="col-md-12 text-right navicon">
                <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
              </div>
            </div>
            <!-- HEADER HEADLINE -->
            <div class="row">
              <div class="col-md-8 col-md-offset-1 inner">
                <h1 class="animated fadeInDown">
                  <span style="color:#E04343;">A</span>MI<span style="color:#E04343;">R</span><br/>
                  <span>Z<span style="color:#FFE800">AR</span>E</span>
                </h1><!-- Title -->
                <h3 class="animated fadeInUp delay-05s"><span class="rotate">Web Developer,Programmer,AI Developer
</span></h3><!-- Text Rotator -->
              </div>
            </div>
            <!-- Learn More Button -->
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <a href="#about" class="scrollto wow fadeInUp delay-5s ">
                      <p>SEE MORE</p>
                      <p class="scrollto--arrow"><img src="img/scroll-down.png" alt="scroll down arrow"></p>
                  </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Header Image End -->
      </header>
      <!-- ==========================
      HEADER SECTION END  
      =========================== -->
      
      
      
      
      <!-- ==========================
      ABOUT SECTION  
      =========================== -->
      <section class="intro text-center section-padding color-bg" id="about">
        <div class="container">
          <!-- WELCOME TEXT -->
          <div class="row">
            <div class="col-md-8 col-md-offset-2 wp1">
              <h1 class="arrow">A little <span>about</span> me</h1>
              <!-- about / welcome text -->
            <p>Mid Level Backend Developer with almost 3 years of experience in programming.
               Experience in Mahya company with PHP, javascript language, and
                Laravel framework, QA platform in Paziresh24 company and
                 Laravel Framework, Vue js in Glass company and
                  Working with Artificial Intelligence at the University
            </p>
            </div>
          </div>
        </div>
      </section>




<!-- ==========================
      SERVICE SECTION 
      =========================== -->
      <section class="features text-center section-padding" id="service">
        <div class="container">
      
          <div class="row">
            <div class="col-md-12">
              <h1 class="arrow">I do amazing things for clients</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
        <div class="services">
        <!-- Service Box 1 -->
                <div class="col-md-4 wp2 item">
                  <div class="icon">
                    <i class="fa fa-camera"></i><!-- Icon -->
                  </div>
                  <h2>Programmer</h2><!-- Title -->
                </div>
        <!-- Service Box 2 -->
                <div class="col-md-4 wp2 item delay-05s">
                  <div class="icon">
                    <i class="fa fa-desktop"></i><!-- Icon -->
                  </div>
                  <h2>Web Developer</h2><!-- Title -->
                </div>
        <!-- Service Box 3 -->
                <div class="col-md-4 wp2 item delay-1s">
                  <div class="icon">
                    <i class="fa fa-cubes"></i><!-- Icon -->
                  </div>
                  <h2>AI Developer</h2><!-- Title -->
                </div>
        </div>
                <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </section>




      <section id="education">
        <div class="container-fluid">
            <!-- About 1 -->
            <div class="row color-bg">
                <div class="col-md-6 nopadding features-intro-img">
                    <div class="about-image" style="background-image:url(img/about1.png)"></div><!-- about image 1 -->
                </div>
                <div class="col-md-6 about-text">
                    <h1>EDUCATION</h1><hr>
                    <h6>Bachelor Degree</h6>
                    <h6>Software Engineering</h6>
                    <h6><a href="http://meybod.ac.ir/default/lang/En" target="_blank">Meybod University</a></h6>
                    <p>2018 - 2022</p><br>
                </div>
            </div>
        </div>
      </section>
      <!-- ==========================
      ABOUT SECTION END
      =========================== -->	
      <section class="swag text-center" id="skills">
        <div class="container">
          
          <div class="row">
            <h1 class="arrow">
              My <span>Skills</span>
            </h1>
          </div>
        </div>
      </section>
      <div class="spacer-cta text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="outline-btn">PHP</p>
              <p class="outline-btn">Laravel</p>
              <p class="outline-btn">Python</p>
              <p class="outline-btn">Cakephp</p>
              <p class="outline-btn">Django</p>
              <p class="outline-btn"><small>process maker</small></p>
            
            </div>
            <div class="col-md-4">
              <p class="outline-btn">Javascript </p>
              <p class="outline-btn">jQuery</p>
              <p class="outline-btn">html</p>
              <p class="outline-btn">Vue Js</p>
              <p class="outline-btn">Git</p>
              <p class="outline-btn">MySQL</p>
            </div>
            <div class="col-md-4">
              <p class="outline-btn">pandas</p>
              <p class="outline-btn">matplotlib</p>
              <p class="outline-btn">keras</p>
              <p class="outline-btn">tensorflow</p>
              <p class="outline-btn">opencv</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- ==========================
      PORTFOLIO SECTION
  =========================== -->
      <section class="swag text-center" id="cetificate">
        <div class="container">
          
          <div class="row">
            <h1 class="arrow">
              My <span>Certificates</span>
            </h1>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="row row-offset-0">
                 
        <!-- PORTFOLIO ITEM 1 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-01-large.jpg') }}" data-lightbox="roadtrip" title="Certificate One - Mastering Visual Studio Code"><img class="grayscale" src="img/portfolio/portfolio-01-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
    
        <!-- PORTFOLIO ITEM 2 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-02-large.jpg') }}" data-lightbox="roadtrip" title="Certificate Two - Complete PYTHON Programming for Beginners - 2021"><img class="grayscale" src="img/portfolio/portfolio-02-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
                    
        <!-- PORTFOLIO ITEM 3 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-03-large.jpg') }}" data-lightbox="roadtrip" title="Certificate Three - Make Laravel and Laravel 8 APIs and Apps fast with blueprint"><img class="grayscale" src="img/portfolio/portfolio-03-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
                    
        <!-- PORTFOLIO ITEM 4 -->
        <div class="col-md-3 col-sm-6 ">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-04-large.jpg') }}" data-lightbox="roadtrip" title="Certificate Four - Learn Basic Data science and Python Libraries"><img class="grayscale" src="img/portfolio/portfolio-04-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
                 
        <!-- PORTFOLIO ITEM 5 -->
        <div class="col-md-3 col-sm-6 ">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-05-large.jpg') }}" data-lightbox="roadtrip" title="Certificate Five - The SQL Programming Essentials 2021 Immersive Training"><img class="grayscale" src="img/portfolio/portfolio-05-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
    
        <!-- PORTFOLIO ITEM 6 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-06-large.jpg') }}" data-lightbox="roadtrip" title="Certificate Six - Git & GitHub For Beginners - Master Git and GitHub (2021)"><img class="grayscale" src="img/portfolio/portfolio-06-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
                    
        <!-- PORTFOLIO ITEM 7 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-07-large.jpg') }}" data-lightbox="roadtrip" title="Certificate Seven - Python Django Full Social Media Course"><img class="grayscale" src="img/portfolio/portfolio-07-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
                    
        <!-- PORTFOLIO ITEM 8 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img certificate">
                    <a href="{{ asset('img/portfolio/portfolio-08-large.jpg') }}" data-lightbox="roadtrip" title="Certificate Eight - member of university scientific association"><img class="grayscale" src="img/portfolio/portfolio-08-thumbnail.jpg" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
      </div><!--/row-->
    </div><!--/.container-->
      <!-- ==========================
      PORTFOLIO SECTION END
      =========================== -->
          


          
      <!-- ==========================
      CUSTOM SPACER
      =========================== -->
      <div class="spacer-cta text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a href="#contact" class="outline-btn">hire Amir Zare</a>
              <a href="{{ asset('files/AmirRezaZare.pdf') }}" class="outline-btn" target="_blank">See My Full Resume</a>
            </div>
          </div>
        </div>
      </div>
      <!-- ==========================
      CUSTOM SPACER END
      =========================== -->
      
      

  <!-- ==========================
      Project SECTION 
      =========================== -->
  <section class="text-center section-padding" id="Project">
        <div class="container">
      
      <div class="row">
            <div class="col-md-12">
              <h1 class="arrow">My <span>last</span> Projects</h1>
            </div>
          </div><br><br>
    
          <div class="row">
            <div id="blogSlider">
              <ul class="slides">
                <li>
          <!-- Project Entry 1 -->
                  <div class="col-md-4 wp4">
                    <div class="overlay-effect effects clearfix">
                      <div class="img">
                        <img src="img/blog1.jpg" class="grayscale" alt="Project Item">
                      </div>
                    </div>
          <br>
                    <h2>Social Media</h2>
                    <p>This project was Wrote With the Django framework.This is a Simple Social Media.</p><!-- Description-->
                  </div>
        <!-- Blog Entry 2 -->
                  <div class="col-md-4 wp4 delay-05s">
                    <div class="overlay-effect effects clearfix">
                      <div class="img">
                        <img src="img/blog2.jpg" class="grayscale" alt="Project Item">
                      </div>
                    </div>
          <br>
                    <h2>Laravel Project</h2>
                    <p>The Simple PhoneBook With The Laravel FrameWork And PHP.</p><!-- Description -->
                  </div>
        <!-- Blog Entry 3 -->
                  <div class="col-md-4 wp4 delay-1s">
                    <div class="overlay-effect effects clearfix">
                      <div class="img">
                        <img src="img/blog3.jpg"  class="grayscale" alt="Project Item">
                      </div>
                    </div>
          <br>
                    <h2>Glass Company</h2>
                    <p>It is a project for the laboratory of the Glass Company.
                      This project was Wrote With the Laravel framework
                    </p><!-- Description-->
                  </div>
                </li>
                <li>
          <!-- Blog Entry 4 -->
                  <div class="col-md-4 wp4">
                    <div class="overlay-effect effects clearfix">
                      <div class="img">
                        <img src="img/blog4.jpg" class="grayscale" alt="Project Item">
                      </div>
                    </div>
          <br>
                    <h2>Guess Images</h2>
                    <p>Was Used Keras and VGG16.</p><!-- Description -->
                  </div>
        <!-- Project Entry 5 -->
                  <div class="col-md-4 wp4 delay-05s">
                    <div class="overlay-effect effects clearfix">
                      <div class="img">
                        <img src="img/blog5.jpg" class="grayscale" alt="Project Item">
                      </div>
                    </div>
          <br>
                    <h2>Create Model</h2>
                    <p>Was Used Keras,Models,Layers,...</p>
                  </div>
        <!-- Project Entry 6 -->
                  <div class="col-md-4 wp4 delay-1s">
                    <div class="overlay-effect effects clearfix">
                      <div class="img">
                        <img src="img/blog6.jpg" class="grayscale" alt="Project Item">
                      </div>
                    </div>
          <br>
                    <h2>Detect Pictures</h2>
                    <p>Was Used Keras And Xception.</p><!-- Description -->
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
  <!-- ==========================
      Project SECTION END
      =========================== -->
  
      
      
      <!-- ==========================
      CLIENT SECTION 
      =========================== -->
      <div class="container-fluid">
          <div class="row color-bg">
              <!-- Left Image -->
              <div class="col-md-6 nopadding features-intro-img wow fadeInLeft">
                  <div class="about-image" style="background-image:url(img/clients.png)"></div>
              </div>
              <div class="col-md-6 nopadding about-text">
              <h6>Paziresh24 Team</h6>
                  <div id="clientSlider">
                     <ul class="slides">
                         <li><p>In the paziresh24 Company, we were a team that solved problems, we worked with PHP, Laravel, Zend framework and  JavaScript, JQuery.
                          We had a health app, that helps people to be safer. 
                          <br><small>-2021</small></p></li>
                         <li><p> +500k downloaded in Google Play<br>Best App in health field in iran <br>	Programming with Laravel framework<br>Development with QA platform<br></p></li>
                     </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- ==========================
      CLIENTS SECTION END
      =========================== -->
      
      
      
      
      
      <!-- ==========================
      NEWSLETTER SECTION 
      =========================== -->
      <section>
      <div class="container-fluid">
              <div class="row color-bg">
                <div class="col-md-6 nopadding about-text">
                  <h6>Mahya Team</h6>
                      <div id="clientSlider">
                         <ul class="slides">
                             <li><p>In the MahyaPardaz Company, We had so many challenges to solve. <br>-Programming with Cakephp framework<br>-Programming with JavaScript,jQuery<br>-Working with ProcessMaker<br>-Cooperation with municipalities<br><small>2019-2021</small></p></li>
                         </ul>
                      </div>
                  </div>
                  <div class="col-md-6 nopadding features-intro-img">
                       <div class="about-image" style="background-image:url(img/newsletter.png)"></div><!-- Right Image -->
                  </div>
              </div>
          </div>
      </section>
      <!-- ==========================
      NEWSLETTER SECTION END
      =========================== -->

      
      
      <!-- ==========================
      CONTACT SECTION
      =========================== -->
      <section class="text-center section-padding contact-wrap" id="contact">
        <!-- To Top Button -->
        <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
        <div class="container">
          
          <div class="row">
            <div class="col-md-12">
              <h1 class="arrow">Drop <span>me</span> a line</h1>
            </div>
          </div>
          <div class="row contact-details">
            <!-- Adress Box -->
            <div class="col-md-4">
              <div class="dark-box box-hover">
                <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                <p>Yazd, Iran</p>
              </div>
            </div>
            <!-- Phone Number Box -->
            <div class="col-md-4">
              <div class="dark-box box-hover">
                <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                <p>+98 913 5291501</p>
              </div>
            </div>
            <!-- E-Mail Box -->
            <div class="col-md-4">
              <div class="dark-box box-hover">
                <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                <p><a href="mailto: amirjoun2@gmail.com">amirjoun2@gmail.com</a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            </div>
            <!-- Contact Form -->
            
          </div>
          <br>
          <!-- Social Buttons - use font-awesome, past in what you want -->
          <div class="row">
            <div class="col-md-12">
              <ul class="social-buttons">
                <li><a href="https://www.instagram.com/mr_programmig/" target="_blank" class="social-btn"><i class="fa fa-instagram"></i></a></li><!-- facebook -->
                <li><a href="https://www.linkedin.com/in/binahayat00/" target="_blank" class="social-btn"><i class="fa fa-linkedin"></i></a></li><!-- deviantart -->
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- ==========================
      CONTACT SECTION END
      =========================== -->
      
      
      
      <!-- ==========================
      FOOTER SECTION
      =========================== -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <p>All Rights Reserved. &copy; 2022 <a href="#">Mr Programmer</a>
            </div>
          </div>
        </div>
      </footer>
      <!-- ==========================
      FOOTER SECTION END
      =========================== -->		
      
      
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- SmoothScroll -->           
  <script type="text/javascript" src="{{ asset('assets/smoothscroll/smoothscroll.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- Waypoints -->
  <script src="{{ asset('js/waypoints.min.js') }}"></script>
  <!-- classie.js -->
  <script src="{{ asset('js/classie.js') }}"></script>
  <!-- FlexSlider -->
  <script src="{{ asset('assets/flexslider/jquery.flexslider.js') }}"></script>
  <!-- Modernizr -->
  <script src="{{ asset('js/modernizr.js') }}"></script>
  <!-- Text Rotator -->
  <script src="{{ asset('assets/textrotator/jquery.simple-text-rotator.js') }}"></script>
  <!-- Lightbox.js -->
  <script src="{{ asset('assets/lightbox/js/lightbox.min.js') }}"></script>
  <!-- Google Maps --> 
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
  <!-- Theme JavaScript Core -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

  <!-- GOOGLE MAPS DATA -->
  <script type="text/javascript">
  // When the window has finished loading create our google map below
      google.maps.event.addDomListener(window, 'load', init);
  
      function init() {
          // Basic options for a simple Google Map
          // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
          var mapOptions = {
              // How zoomed in you want the map to start at (always required)
              zoom: 15,
              
              scrollwheel: false,

              // The latitude and longitude to center the map (always required)
              center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York 

              // How you would like to style the map. 
              // This is where you would paste any style found on Snazzy Maps.
              styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
          };
      }
  
  </script>
  
  <!-- TEXT ROTATOR SETTINGS -->
  <script type="text/javascript">
  $(".rotate").textrotator({
    animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
    separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
    speed: 2000 // How many milliseconds until the next word show.
  });
  </script>
  
  </body>
@endsection

