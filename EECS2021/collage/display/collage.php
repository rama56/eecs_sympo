<?php 
require_once('config.php');
shuffle($images);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Automatic Image Montage with jQuery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Automatic Image Montage with jQuery" />
        <meta name="keywords" content="jquery, images, montage, fullscreen, floating, grid, automatic" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css' />
    </head>
    <body>
		<div class="container">
			<div class="am-container" id="am-container">
				<?php foreach($images as $imageLink) {?>
					<a href="#"><img src="<?php echo $imageLink;?>"></img></a>
				<?php }?>
			</div>
		</div>
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
