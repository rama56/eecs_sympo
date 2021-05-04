<?php 
$talkId=$_GET['id'];
if($talkId == "" || !is_numeric($talkId)) {
	echo "Content not found.";
	die;
}
$file_to_read = "";
$base_file = "resources/talk_files/";
if(!file_exists($base_file . $talkId . ".json")) {
	echo file_get_contents("404.html");
	die;
}

$data = file_get_contents($base_file . $talkId . ".json");
$data = json_decode($data , true);
$base_path_url = "https://eecs.iisc.ac.in/EECS2021/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $data['title'];?> | EECS RESEARCH STUDENTS SYMPOSIUM - 2021, Division of EECS (Electrical, Electronics and Computer Sciences), Indian Institute of Science, IISc Bangalore</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#343a40">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css ">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/newstyle_v3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Plugins -->
</head>
<body>
  <div id='header_bar'> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top " style="padding: 0px!important;">
      <div class="container">
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
              <a class="nav-link" target="_blank" href="resources/EECS_2021_brochure.pdf">Info. Brochure</a>
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

  <!-- LINKS TO HOME, SCHEDULE PAGE : TODOO DOESN'T MAKE SENSE -->
  <!-- <section class="pt-3 pb-0">
    <nav aria-label="breadcrumb">
      <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="/schedule-may09.html">Schedule</a></li> 
        <li class="breadcrumb-item active" aria-current="page"><?php echo $data['title'];?></li>
      </ol>
      </div>
    </nav>
  </section> -->
  
  <!-- TALK DETAILS -->
  </section>
  <section class="pt-1 pb-0 below_header">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-4">
          <a class="story-img" href="#">
            <img src="<?php echo $data['photo_link'];?>" style="height:100px" class="mb-3 img-fluid">
          </a>
        </div>
        <div class="col-md-10 col-sm-9">
          <h3><?php echo $data['title'];?> </h3>
          <p class="text-h3">
            Speaker: <?php if($data['speaker_link'] != "") { echo "<a href='".$data['speaker_link']."'>";} ?>
            <?php echo $data['speaker'];?>
            <?php if($data['speaker_link'] != "") { echo "</a>";};?>
          </p>
        </div>
      </div>
      <hr>
    </div>
  </section>
  <?php if($data['abstract'] != "") {?>
    <section class="pt-0 pb-0 mt-0 mb-0">
      <div class="container">
        <div class="row">
          <div class="col col-sm-12 col-md-12 text-left">
           <h3>Abstract</h3>
           <p class="text-h3"><?php echo $data['abstract'];?></p>
         </div>
       </div>
     </div>
   </section>
  <?php }?>
  <section class="pt-0 pb-0 mt-0 mb-0">
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 col-md-12 text-left">
          <h3>Bio</h3>
          <p class="text-h3"><?php echo $data['bio'];?></p>
        </div>
      </div>
    </div>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    window.addEventListener("hashchange", function () {
      window.scrollTo(window.scrollX, window.scrollY - 80);
    });
  </script>
</body>
</html>
