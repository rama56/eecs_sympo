<?php
require_once('collage/display/config.php');
shuffle($images_details);
$base_path_url = "https://eecs.iisc.ac.in/EECS2021/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EECS RESEARCH STUDENTS SYMPOSIUM - 2021, Division of EECS (Electrical, Electronics and Computer Sciences), Indian Institute of Science, IISc Bangalore</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#343a40">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css ">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/newstyle_v4.css">
  <!-- Plugins -->
  <link rel="stylesheet" type="text/css" href="collage/display/css/style.css" />
  <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
  <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css' />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script> 
    // Set the date we're counting down to
    var countDownDate = new Date("May 8, 2021 19:10:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // // Time calculations for days, hours, minutes and seconds
      // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      // var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      // var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      // var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // // Display the result in the element with id="demo"
      // document.getElementById("countdown_timer_1").innerHTML = days + " days " + hours + " hours "
      // + minutes + " minutes ";
      // document.getElementById("countdown_timer_2").innerHTML = seconds + " seconds to go !";      

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        // document.getElementById("countdown_timer_1").innerHTML = "";
        // document.getElementById("countdown_timer_2").innerHTML = "";
        document.getElementById("countdown_message").innerHTML = "That's all folks !! <br> See you next year."
      }
    }, 1000);

    $( document ).ready(function() {
      var parent = $("#invited_talks");
      var children = parent.children();
      while (children.length) {
          parent.append(children.splice(Math.floor(Math.random() *  children.length), 1));
      }
    })

  </script>
</head>
<body>
  <div id='header_bar'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top " style="padding: 0px!important;">
      <div class="container" style="max-width: 90%;">
        <a class="navbar-brand mr-1" href="index.php">
          <img src="resources/images/logos/iisc-seal.jpg" alt="" style="width: 60px;">
          <strong>EECS 2021 </strong>
          <!--  <span>Indian Institute of Science Bangalore</span> -->
          <span class="content-desktop"> | IISc Bangalore</span>
          <span class="content-mobile">IISc Bangalore</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active mr-3">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">About</a>
              <div class="dropdown-menu" aria-labelledby="dropdown19">
                <a class="dropdown-item" href="index.php#about">About</a>
                <a class="dropdown-item" href="index.php#participating_departments">Participating departments</a>
                <a class="dropdown-item" href="index.php#themes">Themes</a>
              </div>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="index.php#speakers">Speakers</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Schedule</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown20">
                <a class="dropdown-item" href="schedule-may7.html">Day 1 (May 7)</a>
                <!-- <a class="dropdown-item" href="http://www.rbccps.org/cyphyss2020/schedule/">Cyber-Physical Systems Symposium - 2020</a> -->
                <a class="dropdown-item" href="schedule-may8.html">Day 2 (May 8)</a>
              </div>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sponsors</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown21">
                <a class="dropdown-item" href="index.php#sponsors">Current Sponsors</a>
                <a class="dropdown-item" href="cfs.html">Call for Sponsorship</a>
              </div>
            </li> -->
            <li class="nav-item mr-3">
              <a class="nav-link" href="index.php#sponsors">Sponsors</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="index.php#contact">Contacts</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="legacy.html">Legacy</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" target="_blank" href="resources/EECS_2021_symposium_program.pdf">Program</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" target="_blank" href="resources/EECS_2021_brochure.pdf">Info. Brochure</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" target="_blank" href="resources/EECS_2021_BookofAbstracts.pdf">Book of Abstracts</a>
            </li>
            <li class="nav-item">
              <a href="https://forms.office.com/r/pgZj93WrPD" target="_blank" class="btn btn-primary nav-link text-white">Register &gt;</a>
            </li> 
          </ul> 
        </div>
      </div>
      <!-- SPONSOR LOGO -->
      <!-- <a class="nav-item" href="https://www.cisco.com/c/en_in/about/csr.html" target="_blank">
        <img src="resources/images/logos/cisco-final.png" height="60px"/>
      </a> -->
    </nav>
  </div>

  <section class="pt-2 pb-2 mt-0 align-items-center d-flex bg-dark image-container below_header" style="min-height: 100vh; background-size: cover; background-image: url('resources/images/others/iisc-bg.jpg');position: relative; ">
    <div class="layer" style="background-color: black; opacity:0.5;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;"></div>
    <div class="container ">
      
      <!-- TITLE OF SYMPOSIUM AND DATES -->
      <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
        <div class="col-12 col-md-12 h-50 ">
          <h1 class="font-weight-bold   text-white  mb-2 mt-0"> EECS RESEARCH STUDENTS SYMPOSIUM - 2021</h1>
          <h4 class=" text-white">May 7 and 8, 2021</h4>
          <!--<p>
                <a href="schedule.html" class="btn btn-info btn-lg mt-5 mb-5 ">View Full Schedule &gt;</a>
              </p>-->

              <!--RAMA: TO BE ENABLED WHEN CLOSE TO THE DATES OF SYMPOSIUM-->
              <!-- <div class="col-12 col-md-12 text-white text-bold pt-2 pb-2 mt-3" style="background: transperent;;border-radius: 20px;">
              We confirm the registration of all those who have submitted the registration form. <br> <a class="btn btn-danger mt-3" href="note-to-registrants.html">View Details</a>
            </div> 
          -->
        </div>
      </div>
      
      <!-- DAYS AND LINKS -->
      <div class="row text-left text-white align-items-start mt-5">
        <div class="col-12 col-md-6 col-lg-4">
          <h3 style="text-align: center;">May 7 (Day 1)
            <!-- <span class="btn btn-danger" style="float:right;">Live link To Be Updated</span> -->
            <!-- <a class="btn btn-danger" href="https://zoom.us/j/98101873619?pwd=L1BwSzdaWDkwVVE1SkR1aldyd3pVUT09" target="_blank" style="float:right;">Join Live !</a> -->
            <!-- <a class="btn btn-danger" href="https://drive.google.com/drive/folders/1xDlqFCdR8ulgkv8mDFygUEX741oYCtGW?usp=sharing" style="float:right;">Watch Recorded Videos</a> -->
          </h3>
          <hr style="height: 1px;background-color: #ccc;border: none;">
          <h3  style="text-align: center; color: red" class="text-h3">
            <a href="schedule-may7.html" target="_blank" style="color: yellow">Schedule &<br> Live Session Links</a>
          </h3>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pt-4 pt-md-0">
          <h3 style="text-align: center;">May 8 (Day 2)
            <!-- <span class="btn btn-danger" style="float:right;">Live link To Be Updated</span> -->
            <!-- <a class="btn btn-danger" href="https://zoom.us/j/98101873619?pwd=L1BwSzdaWDkwVVE1SkR1aldyd3pVUT09" style="float:right;">Join Live !</a> -->
            <!-- <a class="btn btn-danger" href="https://drive.google.com/drive/folders/1sEh1xTL8uysvE0zC7uvrgO-pWBvgMHt0?usp=sharing" style="float:right;">Watch Recorded Videos</a> -->
          </h3>
          <hr style="height: 1px;background-color: #ccc;border: none;">
          <h3  style="text-align: center; " class="text-h3">
            <a href="schedule-may8.html" target="_blank" style="color: yellow">Schedule &<br> Live Session Links</a>
          </h3>
          <!-- SECTION : STUDENT BEST PAPER AWARD -->
          <!-- <h5 class="text-h4">
            <a href="awards.html" class="btn text-white btn-outline-success" target="_blank">Student best paper awards</a>
          </h5> -->
        </div>
        <div class="col-12 col-md-8 m-auto m-lg-0 col-lg-4 pt-5 pt-lg-0">
          <h3 style="text-align: center;">
            <br>
            <span class='glow stylish' id='countdown_message'>WE ARE LIVE!!</span> <br>
            <!-- <span class='glow stylish' id='countdown_timer_1'></span><br>
            <span class='glow stylish' id='countdown_timer_2'></span> -->
          </h3>
        </div>
      </div>
      <br><br>
      <!-- buttons for pdfs -->
      <div class="row text-center text-white align-items-center mt-5">
        <!-- <div class="col-12 col-md-3 col-lg-3">
        </div> -->
        <div class="col-12 col-md-3 col-lg-3">
          <h3  style="text-align: center; " class="text-h3 btn btn-outline-success">
            <a href="resources/EECS_2021_brochure.pdf" target="_blank" style="color: white">EECS 2021 Brochure</a>
          </h3>
        </div>
        <div class="col-12 col-md-3 col-lg-3">
          <h3  style="text-align: center;" class="text-h3 btn btn-outline-success">
            <a href="resources/EECS_2021_BookofAbstracts.pdf" target="_blank" style="color: white">Book of Abstracts</a>
          </h3>
        </div>
        <div class="col-12 col-md-3 col-lg-3">
          <h3  style="text-align: center; " class="text-h3 btn btn-outline-success">
            <a href="resources/EECS_2021_symposium_program.pdf" target="_blank" style="color: white">Symposium Program</a>
          </h3>
        </div>
        <div class="col-12 col-md-3 col-lg-3">
          <h3  style="text-align: center; " class="text-h3 btn btn-outline-success">
            <a href="awards.html" target="_blank" style="color: white">Best Presentation Awards</a>
          </h3>
        </div>
        <!-- <div class="col-12 col-md-3 col-lg-3">
        </div> -->
      </div>

    </section>

    <!-- AT A GLANCE -->
    <!-- <section class="bg-white text-dark pt-0 pb-3 mb-0" id="about" style="color:black!important;">
      <div class="container">
        <div class="row">
          <div class='col-sm-12 text-center'><h2>At a glance...</h2></div>
        </div>
        <div class="row mt-0 mb-2 pt-5 d-flex justify-content-center">
          <div class="col-md-12 col-sm-12">
            <img src="resources/at_a_glance.png" style="max-width: 100%;">
          </div>
        </div>
        <hr>
      </div>
    </section> -->

    <!-- ABOUT & TWITTER -->
    <section class="bg-white text-dark pt-0 pb-3 mb-0" id="about" style="color:black!important;">
      <div class="container" style="max-width: 95%">
        <!-- style="max-width: 1680px;" -->
        <div class="row mt-0 mb-2 pt-5 d-flex justify-content-center">
          <div class="col-md-3 col-sm-12">
            <img src="resources/images/others/EECS_2021_Flyer.jpg" style="max-width: 100%;">
          </div>
          <div class="col-md-4 col-sm-12 " style="text-align: center;">
            <h1 class="blog-post-title">About</h1>
            <p class="lead text-justify">
             Welcome to the twelfth EECS Research Students Symposium. This year, the symposium will happen online.
            </p>
            <p class="lead text-justify">
               EECS-2021 is an initiative of the <a href="https://eecs.iisc.ac.in">Division of EECS</a> and is primarily a forum for presentations by senior research students (expecting to graduate in 2021) involving the Departments of Computational and Data Sciences <a href="http://cds.iisc.ac.in/">(CDS)</a>, Computer Science and Automation <a href="http://csa.iisc.ac.in">(CSA)</a>, Electrical Communication Engineering <a href="https://ece.iisc.ac.in/">(ECE)</a>, Electrical Engineering <a href="http://www.ee.iisc.ac.in/">(EE)</a>, Electronic Systems Engineering <a href="http://dese.iisc.ac.in">(ESE)</a> and the Robert Bosch Centre for Cyber-Physical Systems (<a href="http://www.rbccps.org/">RBCCPS</a>).
            </p>
            <p class="lead text-justify">
              We invite researchers, faculty members, industry professionals, and research students working in EECS to participate and provide their feedback. We especially invite the alumni of the division to join us for this event.
            </p>
            <br>
            <a href="https://forms.office.com/r/pgZj93WrPD" target="_blank" class="btn btn-primary shadow-lg btn-lg">Register &gt;</a>
          </div>
          <div class="col-md-4 col-sm-12" style="overflow: auto; max-height: 570px">
            <!--  -->
            <!-- <a class="twitter-timeline" href="https://twitter.com/PMOIndia?ref_src=twsrc%5Etfw">Tweets by PMOIndia</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
            <a class="twitter-timeline" href="https://twitter.com/EecsIisc?ref_src=twsrc%5Etfw">Tweets by EecsIisc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <!-- <div class="col-md-12 col-sm-12 text-lg-right text-right">
            <a href="https://forms.office.com/r/pgZj93WrPD" target="_blank" class="btn btn-primary shadow-lg btn-lg">Register &gt;</a>
          </div> -->
        </div>
        <hr>
      </div>
    </section>

    <section class="pt-3 pb-3" id="participating_departments">
      <div class="container">
        <div class="row">
          <div class='col-sm-12 text-center'><h2>Participating Departments</h2></div>
        </div>
        <!-- <hr> -->
        <div class='row'>
          <div class="col-lg-2 col-md-4">
            <div class="member">
              <div class="pic"><img src="resources/images/logos/cds.png" alt=""></div>
              <span><a href="http://cds.iisc.ac.in/">Computational and Data Science </a></span>
            </div>
          </div>
        <div class="col-lg-2 col-md-4">
          <div class="member">
            <div class="pic"><img src="resources/images/logos/csa.png" alt=""></div>
            <!-- https://events.csa.iisc.ac.in/images/csa-logo-color.png -->
            <span><a href="http://csa.iisc.ac.in/">Computer Science and Automation</a></span>
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <div class="member">
            <div class="pic"><img src="resources/images/logos/ee.png" alt=""></div>
            <span><a href="http://www.ee.iisc.ac.in/">Electrical Engineering</a></span>
          </div>
        </div>

        <div class="col-lg-2 col-md-4">
          <div class="member">
            <div class="pic"><img src="resources/images/logos/ece.jpg" alt=""></div>
            <span><a href="http://ece.iisc.ac.in/">Electrical Communication Engineering</a></span>
          </div>
        </div>

        <div class="col-lg-2 col-md-4">
          <div class="member">
            <div class="pic"><img src="resources/images/logos/dese.jpg" alt=""></div>
            <span><a href="http://dese.iisc.ac.in/">Electronic Systems Engineering</a></span>
          </div>
        </div>

        <div class="col-lg-2 col-md-4">
          <div class="member">
            <div class="pic"><img src="resources/images/logos/rbccps.png" alt=""></div>
            <span><a href="http://www.rbccps.org/">Robert Bosch Centre for Cyber-Physical Systems </a></span>
          </div>
        </div>
        <hr>
      </div> 
    </div>
  </section>
  <section class="pt-5 pb-5" id="themes">
    <div class="container">
      <div class="row">
        <div class='col-sm-12 text-center'><h2>Research clusters</h2></div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-around">
        <div class="col-12 col-md-4   ">
          <div class="media mt-4 pb-3 d-flex   align-items-center">
            <div class="order-2 order-md-1  media-body small">
              <h5 class="mt-0">AI & Machine Learning</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex   align-items-center">
            <div class="order-2 order-md-1  media-body small">
              <h5 class="mt-0">Nanodevices, VLSI Circuits and Microsystems</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex   align-items-center">
            <div class="order-2 order-md-1  media-body small">
              <h5 class="mt-0">Signal Processing and Communications</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex   align-items-center">
            <div class="order-2 order-md-1  media-body small">
              <h5 class="mt-0">Security and Cryptography</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex   align-items-center">
            <div class="order-2 order-md-1  media-body small">
              <h5 class="mt-0">Visual Analytics</h5>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4   mt-4 mt-md-0">
          <img alt="image" class="d-none d-md-block img-fluid mx-auto  rounded" src="resources/images/others/themes.jpg">
        </div>
        <div class="col-12 col-md-4">
          <div class="media mt-4 pb-3 d-flex align-items-center">
            <div class="media-body small">
              <h5 class="mt-0">Computational Sciences</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex align-items-center">
            <div class="media-body small">
              <h5 class="mt-0">Brain, Computation, and Data</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex align-items-center">
            <div class="media-body small">
              <h5 class="mt-0">Computer Systems</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex align-items-center">
            <div class="media-body small">
              <h5 class="mt-0">Cyber-Physical Systems</h5>
            </div>
          </div>
          <div class="media mt-4 pb-3 d-flex align-items-center">
            <div class="media-body small">
              <h5 class="mt-0">Power Engineering</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- pt-1 pb-0 -->
  <section class="pt-5 pb-5" id="speakers">
    
    <!-- PLENARY TALKS -->
    <div class="container" style="text-align:center;">
      <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
          <h2> Plenary Speakers </h2>
        </div>
      </div>
      <hr>
      <div class="row text-center justify-content-sm-center no-gutters">
        
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/plenary_speakers/lalitesh_new.jpg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=7">Lalitesh Katragadda</a></h4>
            <span>Founder, Indihood</span>
          </div>
        </div>

        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/plenary_speakers/malik.gif" alt=""></div>
            <h4><a href="speaker_redirect.php?id=9"> Jitendra Malik </a></h4>
            <span>UC-Berkeley & Facebook AI Research</span>
            <!-- <span>Facebook AI Research</span> -->
          </div>
        </div>

        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/plenary_speakers/madhav.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=10"> Madhav Marathe </a></h4>
            <span> University of Virginia</span>
          </div>
        </div>

        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/plenary_speakers/tambe.jpg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=8"> Milind Tambe </a></h4>
            <span>Harvard University & Google Research India</span>
            <!-- <span> Google Research India</span> -->
          </div>
        </div>

      </div>
      <hr>
    </div>

    <!-- FACULTY TALKS -->
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class='col-sm-12 text-center'><h2>Faculty Speakers</h2></div>
      </div>
      <hr>
      <!-- <hr style="height: 1px;background-color: #ccc;border: none;"> -->
      <div class="row text-center justify-content-sm-center no-gutters">
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/phanim_cds.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=1"> Phani Motamarri </a></h4>
            <span>CDS</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/chaya_csa.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=2"> Chaya Ganesh </a></h4>
            <span>CSA</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/sundeep_ece.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=3">Sundeep Prabhakar Chepuri</a></h4>
            <span>ECE</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/vishnu_ee.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=4">Vishnu Mahadeva Iyer</a></h4>
            <span>EE</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/arup_ese.jpg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=5"> Arup Polley</a></h4>
            <span>ESE</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/jishnu_rbccps.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=6">Jishnu Keshavan</a></h4>
            <span>RBCCPS</span>
          </div>
        </div>
      </div>
      <hr style="height: 1px;background-color: #ccc;border: none;">
    </div>
    
    <!-- INVITED TALKS -->
    <div class="container" style="max-width: 90%;">
      <div class="row">
        <div class='col-sm-12 text-center'><h2>Keynote & Industry Speakers</h2></div>
      </div>
      <hr>
      <!-- <hr style="height: 1px;background-color: #ccc;border: none;"> -->
      <div id="invited_talks" class="row text-center justify-content-sm-center no-gutters">
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.cse.iitb.ac.in/~sunita/mugshot2018.png" alt=""></div>
            <h4><a href="https://www.cse.iitb.ac.in/~sunita/">Sunita Sarawagi</a></h4>
            <span>IIT Bombay</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.prateekjain.org/images/newpic.jpg" alt=""></div>
            <h4><a href="https://www.prateekjain.org/"> Prateek Jain </a></h4>
            <span>Google</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/invited_speakers/martin_kuball.jpeg" alt=""></div>
            <h4><a href="https://research-information.bris.ac.uk/en/persons/martin-h-h-kuball">Martin Kuball</a></h4>
            <span>University of Bristol, UK</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://acme.dei.unipd.it/wp-content/uploads/2020/02/48562d5a-99d1-4054-860f-1c5203ef3fff-1358x1536.jpg" alt=""></div>
            <h4><a href="https://acme.dei.unipd.it/team/matteo-meneghini/">Matteo Meneghini</a></h4>
            <span>University of Padua, Italy</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C4E03AQGwoATivWIPBQ/profile-displayphoto-shrink_400_400/0/1517731962675?e=1625702400&v=beta&t=jVb1MkpVi871RjRkMlsTlq9OAo6VP89U-95P-dA6dbA" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/harald-gossner-5512025/"> Harald Gossner</a></h4>
            <span>Intel Corporation, Germany</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="http://home.iitk.ac.in/~chauhan/ysc_web10.jpeg" alt=""></div>
            <h4><a href="http://home.iitk.ac.in/~chauhan/">Yogesh Chauhan</a></h4>
            <span>IIT Kanpur</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.comp.nus.edu.sg/~mohan/IMG1C_20_5_2013.jpg" alt=""></div>
            <h4><a href="https://www.comp.nus.edu.sg/~mohan/">Mohan Kankanhalli</a></h4>
            <span>NUS Singapore</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.cse.iitb.ac.in/~ajitvr/ajit.jpg" alt=""></div>
            <h4><a href="https://www.cse.iitb.ac.in/~ajitvr/">Ajit Rajwade</a></h4>
            <span>IIT Bombay</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C4D03AQGP8KldAX-sEA/profile-displayphoto-shrink_800_800/0/1517561302009?e=1625702400&v=beta&t=NvIBtCiJ71rJD_w1RkqoB8IDlCdryd8VJpz337K8q-M" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/adrian-sharples-25876929/?originalSubdomain=uk">Adrian Sharples</a></h4>
            <span>British Telecom</span>
          </div>
        </div>

        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.ee.iitb.ac.in/web/images/stallur" alt=""></div>
            <h4><a href="https://www.ee.iitb.ac.in/web/people/faculty/home/stallur">Siddharth Tallur</a></h4>
            <span>IIT Bombay</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.research.manchester.ac.uk/portal/files/47911121/Aravind1.jpg" alt=""></div>
            <h4><a href="https://www.research.manchester.ac.uk/portal/aravind.html">Aravind Vijayaraghavan</a></h4>
            <span>Manchester University, UK</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C5603AQEJT_s6NKcCzg/profile-displayphoto-shrink_800_800/0/1517699313197?e=1625702400&v=beta&t=Ex0P2elF5VFQJ50qu1_6LomkShzL59kKHAD0D6kCfsw" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/suparna-bhattacharya-5a7798b/?originalSubdomain=in">Suparna Bhattacharyya</a></h4>
            <span>Hewlett-Packard Enterprise</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.cse.iitm.ac.in/~rangan/pandu.gif" alt=""></div>
            <h4><a href="https://www.cse.iitm.ac.in/~rangan/">C. Pandu Rangan</a></h4>
            <span>IIT Madras</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="http://sanneck.net/sanneck.jpg" alt=""></div>
            <h4><a href="http://sanneck.net/">Henning Sanneck</a></h4>
            <span>Nokia Strategy and Technology, Germany</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://researcher.watson.ibm.com/researcher/photos/4641.jpg" alt=""></div>
            <h4><a href="https://researcher.watson.ibm.com/researcher/view.php?person=in-asinghee">Amith Singhee</a></h4>
            <span>IBM Research, India</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.cs.ksu.edu/people/faculty/prabhakar/prabhakar_pavithra_med.jpg" alt=""></div>
            <h4><a href="https://www.cs.ksu.edu/people/faculty/prabhakar/">Pavithra Prabhakar</a></h4>
            <span>Kansas State University, USA</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.ee.iitb.ac.in/~agarwal/index_files/agarwal.jpg" alt=""></div>
            <h4><a href="https://www.ee.iitb.ac.in/~agarwal/">Vivek Agarwal</a></h4>
            <span>IIT Bombay</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C4E03AQEBQhU7B09YXg/profile-displayphoto-shrink_800_800/0/1517747937877?e=1625702400&v=beta&t=rEGI7-OQJMHQI_uA_k1XJrFaNtb-xbTXLXuDyh11pKc" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/ranganathan-gurunathan-a67b508/">Ranganathan Gurunathan</a></h4>
            <span>Bloom Energy</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C5603AQFA08CBTMyHTw/profile-displayphoto-shrink_400_400/0/1517655425200?e=1625702400&v=beta&t=tLxFTJ8hyFRsWpqRiT3JTnMF8K6cvmqEw8X9Eza6GmY" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/shailesh-ghotgalkar-97a4239/?originalSubdomain=in">Shailesh Ghotgalkar</a></h4>
            <span>Texas Instruments</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C5103AQE4rgtVsXn6gw/profile-displayphoto-shrink_800_800/0/1516945530338?e=1625702400&v=beta&t=C_rwqztI7dRiNiQSDoaSmXAES_JlucHXom2Ti1cLgKY" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/utsab-kundu-014a2956/?originalSubdomain=in">Utsab Kundu</a></h4>
            <span>EE, IISc</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://phfi.org/wp-content/uploads/2021/05/Giri.jpg" alt=""></div>
            <h4><a href="https://phfi.org/member/giridhar-r-babu/">Giridhara R Babu</a></h4>
            <span>PHFI</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/invited_speakers/deepak_subramani.png" alt=""></div>
            <h4><a href="http://cds.iisc.ac.in/faculty/deepakns/">Deepak Subramani</a></h4>
            <span>CDS, IISc</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://ashoka.edu.in/static/images/media/2019/08/06/t1565066093_123_small.jpg" alt=""></div>
            <h4><a href="https://ashoka.edu.in/faculty#!/gautam-menon-1526">Gautam Menon</a></h4>
            <span>Ashoka University</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://engineering.virginia.edu/sites/default/files/styles/faculty_headshot/public/anil-cropped.jpg?itok=rzmC0AEr" alt=""></div>
            <h4><a href="https://engineering.virginia.edu/faculty/anil-vullikanti">Anil Vullikanti</a></h4>
            <span>Virginia Tech</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C5103AQFNWUDsZDfukw/profile-displayphoto-shrink_800_800/0/1517364927318?e=1625702400&v=beta&t=qcjoOGvZfcSPg8RDaED4q_qu8IXfhILbv58D644K8B8" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/suvarna-alladi-71621a5a/?originalSubdomain=in">Suvarna Alladi</a></h4>
            <span>NIMHANS</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://media-exp1.licdn.com/dms/image/C5603AQExMtjcg7kxtg/profile-displayphoto-shrink_800_800/0/1516270461290?e=1625702400&v=beta&t=3bQLOvV1xoUgg3azBdSfCP7qiOkRlvexrXJCkIHrVnw" alt=""></div>
            <h4><a href="https://www.linkedin.com/in/gurpreet-singh-kalsi-bb75302/?originalSubdomain=in">Gurpreet Singh Kalsi</a></h4>
            <span>Intel Labs India</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://neerajww.github.io/images/neeks_01.jpg" alt=""></div>
            <h4><a href="https://neerajww.github.io/#home">Neeraj Sharma</a></h4>
            <span>EE, IISc</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://www.microsoft.com/en-us/research/wp-content/uploads/2016/06/avatar_user__1465570784-360x360.jpg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=14">Kapil Vaswani</a></h4>
            <span>Microsoft Research</span>
          </div>
        </div>
        <!-- <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/jishnu_rbccps.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=1">Pankaj Dayama</a></h4>
            <span>RBCCPS</span>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="resources/images/faculty_speakers/jishnu_rbccps.jpeg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=16">JishnuKeshavan</a></h4>
            <span>RBCCPS</span>
          </div>
        </div> -->
        <div class="col-12 col-sm-8 col-md-2 m-auto">
          <div class="member">
            <div class="pic"><img src="https://researcher.watson.ibm.com/researcher/photos/3077.jpg" alt=""></div>
            <h4><a href="speaker_redirect.php?id=17">Pankaj Dayama</a></h4>
            <span>IBM Research</span>
          </div>
        </div>

      </div>
      <hr style="height: 1px;background-color: #ccc;border: none;">
    </div>
  </section>
  
  <section class="bg-light text-dark pt-5 pb-5" id="sponsors">
    <div class="row">
      <div class='col-sm-12 text-center'><h2>Sponsors</h2></div>
    </div>
    <hr>
    <div class="container  ">
      <div class="row   ">
        <div class="col-md-10 col-12 ">
          <p class="lead mb-3 mt-3 text-h3">Institutional Sponsor</p>
          <p class="text-h3 lead"><h5><a target="_blank" href="https://www.iisc.ac.in">Indian Institute of Science</a><h5></p>
        </div>
        <div class="col-md-2 col-6 text-right">
          <div class="card">
            <img class="card-img-top shadow" src="resources/images/logos/IISc_Seal.jpg" alt="Profile">
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-md-10 col-12">
          <p class="lead mb-3 mt-3 text-h3">Industry Sponsor</p>
          <p class="text-h3 lead"><h5><a target="_blank" href="https://accel.com/india-home">Accel Ventures</a><h5></p>
        </div> 
        <div class="col-md-2 col-6 text-right">
          <div class="card">
            <img class="card-img-top shadow" src="resources/images/logos/Accel_Logo_Black.png" alt="Profile">
          </div>
        </div>   
        <hr>
      </div>
    </div>

  </section>

  <section class="text-light bg-dark pt-5 pb-5" id="contact">
    <div class="container">
      <div class="row">
        <div class='col-sm-12 text-center'><h2>Contacts</h2></div>
      </div>
      <hr style="height: 1px;background-color: #ccc;border: none;">
      <div class="row text-center justify-content-sm-center no-gutters">
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <h5 class="mt-5">Dipanjan Gope</h5>
          <p>dipanjan@iisc.ac.in</p>
        </div>
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <h5 class="mt-5">Konduri Aditya</h5>
          <p>konduriadi@iisc.ac.in</p>
        </div>
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <h5 class="mt-5">Rahul Saladi</h5>
          <p>saladi@iisc.ac.in</p>
        </div>
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <h5 class="mt-5">Sundeep Prabhakar Chepuri</h5>
          <p>spchepuri@iisc.ac.in</p>
        </div>
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <h5 class="mt-5">Sriram Ganapathy</h5>
          <p>sriramg@iisc.ac.in</p>
        </div>
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <h5 class="mt-5">Ramachandran Ponnuswamy</h5>
          <p>prama@iisc.ac.in</p>
        </div>
        <div class="col-12 col-sm-8 col-md-3 m-auto">
          <h5 class="mt-5">Vaibhav Katewa</h5>
          <p>vkatewa@iisc.ac.in</p>
        </div>
      </div>
      <hr style="height: 1px;background-color: #ccc;border: none;">
    </div>
  </section>
  <section class="mb-0 text-dark pt-5 pb-5 bg-light"  id="volunteers">
    <div class="row">
      <div class='col-sm-12 text-center'><h3>Hosts & Volunteers</h3></div>
    </div>
    <hr>
    <footer class="container pt-0 my-md-1 pt-md-3 text-center">
      <div class="row">
        <div class="col-md-3 col-sm-12 text-left">
          <h5>Faculty Hosts</h5>
          <ul class="list-unstyled  ">
            <li>Sashikumaar Ganesan (CDS)</li>
            <li>Chiranjib Bhattacharyya (CSA)</li>
            <li>K.J. Vinoy (ECE)</li>
            <li>Udaya Kumar (EE)</li>
            <li>L. Umanand (ESE)</li>
            <li>Bharadwaj Amrutur (RBCCPS)</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-12 text-left">
          <h5>Faculty Volunteers</h5>
          <ul class="list-unstyled  ">
            <li>Dipanjan Gope (ECE)</li>
            <li>Konduri Aditya (CDS)</li>
            <li>Rahul Saladi (CSA)</li>
            <li>Sundeep Prabhakar Chepuri (ECE)</li>
            <li>Sriram Ganapathy (EE)</li>
            <li>Ramachandran P (ESE)</li>
            <li>Vaibhav Katewa (RBCCPS/ECE)</li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
          <h5 style="text-align: center">Student Volunteers</h5>
          <div class="row">
            <div class="col-md-6 col-sm-12 text-left">
              <ul class="list-unstyled  text-center">
                <li>Aditya Rastogi (CDS)</li>
                <li>Tejan Karmali (CDS)</li>
                <li>Ramakrishnan K (CSA)</li>
                <li>Rameesh Paul (CSA)</li>
                <li>Alok Joshi (ECE)</li>
                <li>Anand Kumar (ECE)</li>
                <li>Varun Krishna (EE)</li> 
              </ul>
            </div>
            <div class="col-md-6 col-sm-12 text-left">
              <ul class="list-unstyled  text-center">
                <li>Anand Kumar R (EE)</li>
                <li>Himanshu Bhusan (EE)</li>
                <li>Tutan Debnath (ESE)</li>
                <li>Prerna Arote (ESE)<li>
                <li>Nishchal Hoysal (RBCCPS)</li>
                <li>Dhanaprakaash G (RBCCPS)</li>
                <li>Aniruddh Sanjoy Sikdar (RBCCPS)</li>
                <li>Harini V (RBCCPS)</li>
              </ul>
            </div>
          </div>
          <!-- <ul class="list-unstyled  text-left">
            <li>Aditya Rastogi (CDS)</li>
            <li>Tejan Karmali (CDS)</li>
            <li>Ramakrishnan K (CSA)</li>
            <li>Rameesh Paul (CSA)</li>
            <li>Alok Joshi (ECE)</li>
            <li>Anand Kumar (ECE)</li>
            <li>Varun Krishna (EE)</li>
            <li>Anand Kumar R (EE)</li>
            <li>Himanshu Bhusan (EE)</li>
            <li>Tutan Debnath (ESE)</li>
            <li>Prerna Arote (ESE)<li>
            <li>Nishchal Hoysal (RBCCPS)</li>
            <li>Dhanaprakaash G (RBCCPS)</li>
            <li>Aniruddh Sanjoy Sikdar (RBCCPS)</li>
            <li>Harini V (RBCCPS)</li> 
          </ul> -->
        </div>
      </div>
      <hr>
    </footer>
  </section>
  <div id='footer_space'>
    <section class="mb-0 mt-0">
      <div class="footer text-dark">
        <div class="   bg-light pt-5 pb-5">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-sm-4">
                <a href="#">
                 <img src="resources/images/logos/IISc_Seal.jpg" height="158px">
                </a>
                <address class="color-light-20">
                  <a href="https://eecs.iisc.ac.in/"> Division of EECS
                  <br> Electrical, Electronics and Computer Sciences </a>
                  <br> Indian Institute of Science, Bangalore
                </address>
              </div>
              <div class="col-xs-6 col-sm-5">
                <h5 class="my-2">Participating Departments</h5>
                <ul class="list-unstyled list-light">
                  <li>
                    <a href="http://cds.iisc.ac.in" target="_blank">Computational and Data Sciences</a>
                  </li>
                  <li>
                    <a href="https://csa.iisc.ac.in/" target="_blank">Computer Science and Automation</a>
                  </li>
                  <li>
                    <a href="http://www.ee.iisc.ac.in/" target="_blank">Electrical Engineering</a>
                  </li>
                  <li>
                    <a href="http://ece.iisc.ac.in" target="_blank">Electrical Communication Engineering</a>
                  </li>
                  <li>
                    <a href="http://dese.iisc.ac.in/" target="_blank">Electronic Systems Engineering</a>
                  </li>
                  <li>
                    <a href="http://www.rbccps.org/" target="_blank">Robert Bosch Centre for Cyber-Physical Systems</a>
                  </li>
                </ul>
            </div>
            <br style="clear:both" class="hidden-sm-up">
            <div class="col-xs-4 col-sm-3">
              <h5 class="my-2">Important Links</h5>
              <ul class="list-unstyled list-light">
                <li>
                  <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Registration Link">
                    <a href="https://forms.office.com/r/pgZj93WrPD">Registration</a>
                  </span>
                </li>
                <!-- <li>
                  <span class="d-inline-block" tabindex="0">
                    <a href="cfs.html">Call for Sponsorship</a>
                  </span>
                </li> -->
              </ul>
            </div>
          </div>
          <hr>
          <div class="row f-flex justify-content-between" style="justify-content: space-between;">
            <div class="col-md-8 text-xs-center  text-left text-secondary my-1">
              <p class="mt-2  text-dark"> &copy; Copyright 2021  All Rights Reserved |
                <a class=" " href="http://eecs.iisc.ac.in" target="_blank">Division of EECS</a>
              </p>
            </div>
            
            <div class="col-md-4 text-xs-center   text-lg-right text-secondary my-1">
              <div class="btn-container  mt-1 text-md-right text-sm-center">
                <div class="mb-1 mr-3 align-self-right pt-0 d-inline-block">
                  <a href="https://twitter.com/eecsiisc" role="button" class=" p-2 m-2 btn btn-light">
                    <i class="fab fa-twitter fa-lg  " aria-hidden="true"></i>
                  </a>
                  <a href="https://www.facebook.com/EECS-IISc-Research-Students-Symposium-2021-105756351649015" role="button" class=" p-2 m-2 btn btn-light">
                    <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
                  </a>
                  <a href=" https://www.linkedin.com/company/eecs-iisc-research-students-symposium" role="button" class=" p-2 m-2 btn btn-light">
                    <i class="fab fa-linkedin fa-lg" aria-hidden="true"></i>
                  </a>
                  <!-- <a href="#" role="button" class=" p-2 m-2 btn btn-light">
                    <i class="fab fa-google-plus fa-lg" aria-hidden="true"></i>
                  </a> -->
                </div>
              </div> 
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- jQuery is required -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>   
  <script type="text/javascript" src="collage/display/js/jquery.montage.min.js"></script>
  <script type="text/javascript" src="js/image-speakers.js"></script>

  <script type="text/javascript">
    window.addEventListener("hashchange", function () {
      window.scrollTo(window.scrollX, window.scrollY - 80);
    });
  </script>
</body>
</html>
