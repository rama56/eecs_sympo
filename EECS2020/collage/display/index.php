<?php
require_once('config.php');
shuffle($images);
$base_path_url = "https://eecs.iisc.ac.in/EECS2020/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $data['title'];?> | EECS RESEARCH STUDENTS SYMPOSIUM - 2020, Division of EECS (Electrical, Electronics and Computer Sciences), Indian Institute of Science, IISc Bangalore</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#343a40">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css ">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_path_url;?>css/newstyle_v3.css">
  <!-- Plugins -->
                <link rel="stylesheet" type="text/css" href="css/style.css" />
                <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
                <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css' />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top " style="padding: 0px!important;padding-left:2px!important;">
    <div class="container">
      <a class="navbar-brand mr-1" href="index.html">
        <img src="<?php echo $base_path_url?>images/iisc-seal.jpg" alt="" style="width: 60px;"> <strong>EECS 2020 </strong><!--  <span>Indian Institute of Science Bangalore</span> --><span class="content-desktop"> | IISc Bangalore</span><span class="content-mobile">IISc Bangalore</span> 
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
              <a class="dropdown-item" href="<?php echo $base_path_url?>index.html#about">About</a>
              <a class="dropdown-item" href="<?php echo $base_path_url?>index.html#participating_departments">Participating departments</a>
              <a class="dropdown-item" href="<?php echo $base_path_url?>index.html#themes">Themes</a>
            </div>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="<?php echo $base_path_url?>index.html#speakers">Speakers</a>
          </li>
	  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Schedule</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown20">
              <a class="dropdown-item" href="<?php echo $base_path_url?>schedule-jul10.html">Symposium on Advances in Communication Networks</a>
              <a class="dropdown-item" href="http://www.rbccps.org/cyphyss2020/schedule/">Cyber-Physical Systems Symposium - 2020</a>
              <a class="dropdown-item" href="<?php echo $base_path_url?>schedule-july12.html">EECS Research Students' Symposium</a>
            </div>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="<?php echo $base_path_url?>cfs.html">Sponsors</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="<?php echo $base_path_url?>index.html#contact">Contacts</a>
          </li>
	  <li class="nav-item">
	    <a href="https://forms.microsoft.com/Pages/ResponsePage.aspx?id=l80Vb6f240Gyxa1Bk5dkdozRGpqKdiJDiqeJABPctyFUMTY2UjlNTDZNRjZCSUZVMzJNMEsyQ1RDNi4u" target="_blank" class="btn btn-primary nav-link text-white">Register &gt;</a>
	</li>	
          </div>
        </div>
      </nav>
<section class="pt-1 pb-0">
        <div class="container" style="text-align:center;">
		<h1 class="text-center">Speakers</h1>
		<hr>
		<div class="am-container" id="am-container">
                                <?php foreach($images as $imageLink) {?>
                                        <a href="#"><img src="<?php echo $imageLink;?>"></img></a>
                                <?php }?>
                </div>
        </div>
</section>
<section class="mb-0 mt-3" style="float:left; width: 100%; ">
  <div class="footer text-dark">
    <div class="   bg-light pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-4">
            <a href="#">
             <img src="<?php echo $base_path_url;?>images/IISc_Logo.png" height="100px">
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
                <a href="<?php echo $base_path_url?>cfs.html">Call for Sponsorship</a>
              </span>
            </li>
          </ul>
        </div>
              </div>
              <hr>
              <div class="row f-flex justify-content-between" style="justify-content: space-between;">
                <div class="col-md-8 text-xs-center  text-left text-secondary my-1">
                  <p class="mt-2  text-dark"> &copy; Copyright 2020 • All Rights Reserved |
                    <a class=" " href="http://eecs.iisc.ac.in" target="_blank">Division of EECS</a> <!-- |
                    <a class=" " href="#">Contact</a> -->
                  </p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div></div>
      </section>

      <!-- jQuery is required -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
      <script type="text/javascript">
      window.addEventListener("hashchange", function () {
          window.scrollTo(window.scrollX, window.scrollY - 80);
      });
      </script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.montage.min.js"></script>
		<script type="text/javascript">
			$(function() {
				/* 
				 * just for this demo:
				 */
				$('#showcode').toggle(
					function() {
						$(this).addClass('up').removeClass('down').next().slideDown();
					},
					function() {
						$(this).addClass('down').removeClass('up').next().slideUp();
					}
				);
				$('#panel').toggle(
					function() {
						$(this).addClass('show').removeClass('hide');
						$('#overlay').stop().animate( { left : - $('#overlay').width() + 20 + 'px' }, 300 );
					},
					function() {
						$(this).addClass('hide').removeClass('show');
						$('#overlay').stop().animate( { left : '0px' }, 300 );
					}
				);
				
				var $container 	= $('#am-container'),
					$imgs		= $container.find('img').hide(),
					totalImgs	= $imgs.length,
					cnt			= 0;
				
				$imgs.each(function(i) {
					var $img	= $(this);
					$('<img/>').load(function() {
						++cnt;
						if( cnt === totalImgs ) {
							$imgs.show();
							$container.montage({
								fillLastRow				: false,
								alternateHeight			:false,
								alternateHeightRange	: {
									min	: 90,
									max	: 240
								}
							});
							
							/* 
							 * just for this demo:
							 */
							$('#overlay').fadeIn(500);
						}
					}).attr('src',$img.attr('src'));
				});	
				
			});
		</script>

    </body>

</html>
