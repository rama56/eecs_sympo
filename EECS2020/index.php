<?php
require_once('collage/display/config.php');
shuffle($images_details);
$base_path_url = "https://eecs.iisc.ac.in/EECS2020/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EECS RESEARCH STUDENTS SYMPOSIUM - 2020, Division of EECS (Electrical, Electronics and Computer Sciences), Indian Institute of Science, IISc Bangalore</title>
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
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top " style="padding: 0px!important;padding-left:2px!important;">
    <div class="container">
      <a class="navbar-brand mr-1" href="index.html">
        <img src="images/iisc-seal.jpg" alt="" style="width: 60px;"> <strong>EECS 2020 </strong><!--  <span>Indian Institute of Science Bangalore</span> --><span class="content-desktop"> | IISc Bangalore</span><span class="content-mobile">IISc Bangalore</span> 
      </a>
      <!-- <a class="navbar-brand mr-1" style="margin-top:-7px;" href="index.html">
       <span class="content-desktop"> | Indian Institute of Science Bangalore</span>
       <span class="content-mobile">IISc Bangalore</span>
      </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">About</a>
            <div class="dropdown-menu" aria-labelledby="dropdown19">
              <a class="dropdown-item" href="#about">About</a>
              <a class="dropdown-item" href="#participating_departments">Participating departments</a>
              <a class="dropdown-item" href="#themes">Themes</a>
            </div>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="#speakers">Speakers</a>
          </li>
	  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Schedule</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown20">
              <a class="dropdown-item" href="schedule-jul10.html">Symposium on Advances in Communication Networks</a>
              <a class="dropdown-item" href="http://www.rbccps.org/cyphyss2020/schedule/">Cyber-Physical Systems Symposium - 2020</a>
              <a class="dropdown-item" href="schedule-july12.html">EECS Research Students' Symposium</a>
            </div>
          </li>
	  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sponsors</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown21">
              <a class="dropdown-item" href="#sponsors">Current Sponsors</a>
              <a class="dropdown-item" href="cfs.html">Call for Sponsorship</a>
            </div>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="#contact">Contacts</a>
          </li>
	  <li class="nav-item mr-3">
            <a class="nav-link" target="_blank" href="EECS_Brochure.pdf">EECS Info Brochure</a>
          </li>
	  <li class="nav-item">
	    <a href="https://forms.microsoft.com/Pages/ResponsePage.aspx?id=l80Vb6f240Gyxa1Bk5dkdozRGpqKdiJDiqeJABPctyFUMTY2UjlNTDZNRjZCSUZVMzJNMEsyQ1RDNi4u" target="_blank" class="btn btn-primary nav-link text-white">Register &gt;</a>
	</li>	
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search">
              <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
      <section class="pt-2 pb-2 mt-0 align-items-center d-flex bg-dark image-container" style="min-height: 100vh; background-size: cover; background-image: url('images/iisc-bg.jpg');position: relative;">
        <div class="layer" style="background-color: black; opacity:0.5;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;"></div>
        <div class="container ">
          <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-12 col-md-12 h-50 ">
              <h1 class="font-weight-bold   text-white  mb-2 mt-0"> EECS RESEARCH STUDENTS SYMPOSIUM - 2020</h1>
              <h4 class=" text-white">July 10 to July 12, 2020</h4>
<!--              <p>
                <a href="schedule.html" class="btn btn-info btn-lg mt-5 mb-5 ">View Full Schedule &gt;</a>
              </p>-->
              <div class="col-12 col-md-12 text-white text-bold pt-2 pb-2 mt-3" style="background: transperent;;border-radius: 20px;">
		We confirm the registration of all those who have submitted the registration form. <br> <a class="btn btn-danger mt-3" href="note-to-registrants.html">View Details</a>
              </div>
            </div>
          </div>
          <div class="row text-left text-white align-items-start mt-5">
            <div class="col-12 col-md-6 col-lg-4">
              <h3>July 10 <a class="btn btn-danger" href="https://drive.google.com/drive/folders/1xDlqFCdR8ulgkv8mDFygUEX741oYCtGW?usp=sharing" style="float:right;">Watch Recorded Videos</a></h3>
              <hr style="height: 1px;background-color: #ccc;border: none;">
              <h4 class="text-h3"><a href="schedule-jul10.html" target="_blank">Symposium on Advances in Communication Networks</a></h4>
            </div>
            <div class="col-12 col-md-6 col-lg-4 pt-4 pt-md-0">
              <h3>July 11 <a class="btn btn-danger" href="https://drive.google.com/drive/folders/1E6uwql5DpOe9zf051lvGB0-ybrMU9D9o?usp=sharing" style="float:right;">Watch Recorded Videos</a></h3>
              <hr style="height: 1px;background-color: #ccc;border: none;">
              <h4 class="text-h3"><a href="http://www.rbccps.org/cyphyss2020" target="_blank">Cyber-Physical Systems Symposium - 2020</a></h4>
            </div>
            <div class="col-12 col-md-8 m-auto m-lg-0 col-lg-4 pt-5 pt-lg-0">
              <h3>July 12 <a class="btn btn-danger" href="https://drive.google.com/drive/folders/1sEh1xTL8uysvE0zC7uvrgO-pWBvgMHt0?usp=sharing" style="float:right;">Watch Recorded Videos</a></h3>
              <hr style="height: 1px;background-color: #ccc;border: none;">
              <h4 class="text-h3"><a href="https://eecs.iisc.ac.in/EECS2020/schedule-july12.html" target="_blank">EECS Research Students' Symposium</a></h4>
	      <h5 class="text-h4"><a href="https://eecs.iisc.ac.in/EECS2020/awards.html" class="btn text-white btn-outline-success" target="_blank">Student best paper awards</a></h4>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-white text-dark pt-0 pb-3 mb-0" id="about" style="color:black!important;">
        <div class="container">
          <div class="row mt-0 mb-2 pt-5 d-flex justify-content-center">
            <div class="col-md-12 col-sm-12 ">
              <h1 class="blog-post-title">About</h1>
              <p class="lead text-justify">
               Welcome to the Eleventh EECS Research Students Symposium. This year, the symposium will happen online.
             </p>
             <p class="lead text-justify">
               EECS-2020 is an initiative of the <a href="https://eecs.iisc.ac.in">Division of EECS</a> and is primarily a forum for presentations by senior research students (expecting to graduate in 2020) involving the Departments of Computational and Data Sciences <a href="http://cds.iisc.ac.in/">(CDS)</a>, Computer Science and Automation <a href="http://csa.iisc.ac.in">(CSA)</a>, Electrical Communication Engineering <a href="https://ece.iisc.ac.in/">(ECE)</a>, Electrical Engineering <a href="http://www.ee.iisc.ac.in/">(EE)</a>, Electronic Systems Engineering <a href="http://dese.iisc.ac.in">(ESE)</a> and the Robert Bosch Centre for Cyber-Physical Systems (<a href="http://www.rbccps.org/">RBCCPS</a>).
             </p>
             <p class="lead text-justify">
               We invite researchers, faculty members, industry professionals, and research students working in EECS to participate and provide their feedback. We especially invite the alumni of the division to join us for this event.
             </p>
           </div>
           <div class="col-md-12 col-sm-12 text-lg-right text-right">
                <a href="https://forms.microsoft.com/Pages/ResponsePage.aspx?id=l80Vb6f240Gyxa1Bk5dkdozRGpqKdiJDiqeJABPctyFUMTY2UjlNTDZNRjZCSUZVMzJNMEsyQ1RDNi4u" target="_blank" class="btn btn-primary shadow-lg btn-lg">Register &gt;</a>
           </div>
         </div>
	<hr>
       </div>
     </section>

     <section class="pt-3 pb-3" id="participating_departments">
      <div class="container">
        <div class="row">
          <div class='col-sm-12 text-center'><h2>Participating Departments</h2></div>
        </div>
        <hr>
        <div class='row'>
           <div class="col-lg-2 col-md-4">
            <div class="member">
              <div class="pic"><img src="img/cds.png" alt=""></div>
              <span><a href="http://cds.iisc.ac.in/">Computational and Data Science </a></span>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="member">
              <div class="pic"><img src="https://events.csa.iisc.ac.in/images/csa-logo-color.png" alt=""></div>
              <span><a href="http://csa.iisc.ac.in/">Computer Science and Automation</a></span>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="member">
              <div class="pic"><img src="img/ee.png" alt=""></div>
              <span><a href="http://www.ee.iisc.ac.in/">Electrical Engineering</a></span>
            </div>
          </div>

          <div class="col-lg-2 col-md-4">
            <div class="member">
              <div class="pic"><img src="img/ece.jpg" alt=""></div>
              <span><a href="http://ece.iisc.ac.in/">Electrical Communication Engineering</a></span>
            </div>
          </div>

          <div class="col-lg-2 col-md-4">
            <div class="member">
              <div class="pic"><img src="img/dese.jpg" alt=""></div>
              <span><a href="http://dese.iisc.ac.in/">Electronic Systems Engineering</a></span>
            </div>
          </div>

          <div class="col-lg-2 col-md-4">
            <div class="member">
              <div class="pic"><img src="img/rbccps.png" alt=""></div>
              <span><a href="http://www.rbccps.org/">Robert Bosch Centre for Cyber-Physical Systems </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-5 pb-5" id="themes">
      <div class="container">
        <div class="row">
          <div class='col-sm-12 text-center'><h2>Themes</h2></div>
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
                <h5 class="mt-0">Data Science</h5>
              </div>
            </div>
            <div class="media mt-4 pb-3 d-flex   align-items-center">
              <div class="order-2 order-md-1  media-body small">
                <h5 class="mt-0">Communication and Signal Processing</h5>
              </div>
            </div>
            <div class="media mt-4 pb-3 d-flex   align-items-center">
              <div class="order-2 order-md-1  media-body small">
                <h5 class="mt-0">Networks</h5>
              </div>
            </div>
            <div class="media mt-4 pb-3 d-flex   align-items-center">
              <div class="order-2 order-md-1  media-body small">
                <h5 class="mt-0">Computer Systems and Software</h5>
              </div>
            </div>
            <div class="media mt-4 pb-3 d-flex   align-items-center">
              <div class="order-2 order-md-1  media-body small">
                <h5 class="mt-0">Computational Science</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4   mt-4 mt-md-0">
            <img alt="image" class="d-none d-md-block img-fluid mx-auto  rounded" src="images/themes.jpg">
          </div>
          <div class="col-12 col-md-4">
            <div class="media mt-4 pb-3 d-flex align-items-center">
              <div class="media-body small">
                <h5 class="mt-0">Theoretical Computer Science</h5>
              </div>
            </div>
            <div class="media mt-4 pb-3 d-flex align-items-center">
              <div class="media-body small">
                <h5 class="mt-0">Electronic Design</h5>
              </div>
            </div>
            <div class="media mt-4 pb-3 d-flex align-items-center">
              <div class="media-body small">
                <h5 class="mt-0">Image and Video processing</h5>
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
            <div class="media mt-4 pb-3 d-flex align-items-center">
              <div class="media-body small">
                <h5 class="mt-0">Autonomous Systems and Robotics</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="pt-1 pb-0" id="speakers">
        <div class="container" style="text-align:center;">
                <h1 class="text-center">Speakers</h1>
                <hr>
                <div class="am-container" id="am-container">
                                <?php foreach($images_details as $imageLink) {?>
                                        <a href="<?php echo $imageLink['webpage'];?>" target="_blank"><img src="<?php echo $imageLink['photo'];?>"></img></a>
                                <?php }?>
                </div>
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
                <img class="card-img-top shadow" src="images/IISc_Logo.png" alt="Profile">
              </div>
            </div>
          </div>
          <hr>
        </div>
        <div class="container pb-3">
          <div class="row">
            <div class="col-md-10 col-12">
              <p class="lead mb-3 mt-3 text-h3">Award Sponsor</p>
              <p class="text-h3 lead"><h5><a  target="_blank" href="https://btirc.iisc.ac.in/">British Telecom India Research Centre, IISc</a><h5></p>
            </div>	  
	    <div class="col-md-2 col-6 text-right">
              <div class="card">
                <img class="card-img-top shadow" src="images/BT_Logo_Indigo_RGB.jpg" alt="Profile">
              </div>
            </div>
          </div>

          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-12">
              <p class="lead mt-3 text-h3">"Advances in Communication Networks" Symposium Sponsor</p>
              <p class="text-h3 lead"><h5><a target="_blank" href="https://eecs.iisc.ac.in/centre-for-networked-intelligence-iisc-a-cisco-csr-initiative/">Centre for Networked Intelligence</a><h5></p>
            </div>
	    <div class="col-md-4 col-6 text-right">
              <div class="card">
                <img class="card-img-top shadow" src="images/cisco-final.png" alt="Profile">
              </div>
            </div>
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
        <h5 class="mt-5 mb-4">Dr. Varun Raghunathan</h5>
        <p>varunr@iisc.ac.in</p>
      </div>
      <div class="col-12 col-sm-8 col-md-3 m-auto">
        <h5 class="mt-5 mb-4">Dr. Chandramani Singh</h5>
        <p>chandra@iisc.ac.in</p>
      </div>
      <div class="col-12 col-sm-8 col-md-3 m-auto">
        <h5 class="mt-5 mb-4">Dr. Shishir Kolathaya</h5>
        <p>shishirk@iisc.ac.in</p>
      </div>
    </div>
	<hr style="height: 1px;background-color: #ccc;border: none;">
  </div>
</section>
<section class="mb-0 text-dark pt-5 pb-5 bg-light"  id="volunteers">
      <div class="row">
        <div class='col-sm-12 text-center'><h3>Volunteers</h3></div>
        </div>
        <footer class="container pt-0 my-md-1 pt-md-3 text-center border-top">
          <div class="row">
            <div class="col-md-2 col-sm-12"></div>
            <div class="col-md-4 col-sm-12 text-left">
              <h5>Faculty Volunteers</h5>
              <ul class="list-unstyled  ">
		<li>Varun Raghunathan (ECE) [Coordinator]</li>
                <li>Anirban Chakraborty (CDS)</li>
                <li>Arkaprava Basu (CSA)</li>
                <li>Chandramani Singh (ESE)</li>
                <!--<li>Varun Raghunathan (ECE)</li>-->
                <li>Shishir Kolathaya (RBCCPS/CSA)</li>
                <li>Vaibhav Katewa (RBCCPS/ECE)</li>
                <li>Pavan Tallapragada (EE)</li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-12 text-left">
              <h5>Student Volunteers</h5>
              <ul class="list-unstyled  text-left">
                <li>Aditya Sagi (CPS)</li>
                <li>Akash Panda (CSA)<li>
                <li>Ajay Nayak (CSA)</li>
                <li>Chaitra Sheshgiri Jambigi (CDS)</li>
                <li>G. Darshan (EE)</li>
                <li>Jyothsna KM (ECE)</li>
                <li>Nirabhra Mandal (EE)</li>
                <li>Rabindra Biswas (ECE)</li>
                <li>Rajath R. Dani (CDS)</li>
              </ul>
            </div>
          </div>
        <hr>
      </footer>
    </div>
</section>
<section class="mb-0 mt-0">
  <div class="footer text-dark">
    <div class="   bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-4">
            <a href="#">
             <img src="images/IISc_Logo.png" height="100px">
           </a>
           <address class="color-light-20">
            Division of EECS
            <br> Electrical, Electronics and Computer Sciences
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
              <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Link to be updated later">
                <a href="https://forms.microsoft.com/Pages/ResponsePage.aspx?id=l80Vb6f240Gyxa1Bk5dkdozRGpqKdiJDiqeJABPctyFUMTY2UjlNTDZNRjZCSUZVMzJNMEsyQ1RDNi4u"  target="_blank" >Registration</a>
              </span>
            </li>
	    <li>
              <span class="d-inline-block" tabindex="0">
                <a href="cfs.html">Call for Sponsorship</a>
              </span>
            </li>
          </ul>
        </div>
                <!-- <div class="col-xs-6 col-sm-3">
                  <h4 class="my-2">Connect</h4>
                  <ul class="list-unstyled list-light">
                    <li>
                      <a href="#">Support</a>
                    </li>
                    <li>
                      <a href="#">Social</a>
                    </li>
                    <li>
                      <a href="#">Community</a>
                    </li>
                  </ul>
                  <p class="color-light mt-2">Stay up-to-date!</p>
                  <form>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary btn-sm" type="button">Ok</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div> -->
              </div>
              <hr>
              <div class="row f-flex justify-content-between" style="justify-content: space-between;">
                <div class="col-md-8 text-xs-center  text-left text-secondary my-1">
                  <p class="mt-2  text-dark"> &copy; Copyright 2020 ??? All Rights Reserved |
                    <a class=" " href="http://eecs.iisc.ac.in" target="_blank">Division of EECS</a> <!-- |
                    <a class=" " href="#">Contact</a> -->
                  </p>
                </div>
                <!-- <div class="col-md-4 text-xs-center   text-lg-right text-secondary my-1">
                  <div class="btn-container  mt-1 text-md-right text-sm-center">
                    <div class="mb-1 mr-3 align-self-right pt-0 d-inline-block">
                      <a href="#" role="button" class=" p-2 m-2 btn btn-light">
                        <i class="fab fa-twitter fa-lg  " aria-hidden="true"></i>
                      </a>
                      <a href="#" role="button" class=" p-2 m-2 btn btn-light">
                        <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
                      </a>
                      <a href="#" role="button" class=" p-2 m-2 btn btn-light">
                        <i class="fab fa-linkedin fa-lg" aria-hidden="true"></i>
                      </a>
                      <a href="#" role="button" class=" p-2 m-2 btn btn-light">
                        <i class="fab fa-google-plus fa-lg" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- jQuery is required -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>	 
	<script type="text/javascript" src="collage/display/js/jquery.montage.min.js"></script>
        <script type="text/javascript" src="image-speakers.js"></script>

      <script type="text/javascript">
      window.addEventListener("hashchange", function () {
          window.scrollTo(window.scrollX, window.scrollY - 80);
      });
      </script>
    </body>
    </html>
