<?php
require_once('config.php');
shuffle($images);
$base_path_url = "https://eecs.iisc.ac.in/EECS2020/";
 header('X-Frame-Options: SAMEORIGIN'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
<section class="pt-1 pb-0">
        <div class="container" style="text-align:center;">
		<div class="am-container" id="am-container">
                                <?php foreach($images as $imageLink) {?>
                                        <a href="#"><img src="<?php echo $imageLink;?>"></img></a>
                                <?php }?>
                </div>
        </div>
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
