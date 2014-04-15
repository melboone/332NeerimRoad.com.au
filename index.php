<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<title>332 NEERIM ROAD, CARNEGIE</title>
<meta author="Julian" content="www.julian.id.au">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery.colorbox-min.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
</head>
<body>
	<div class="container">
	<div class="container-form">
		<div class="form-top">
			<img src="images/logo.png" alt="332 Neerim Road, Carnegie Logo" >
		</div>
		<div class="form">
			<?php include 'form.php'; ?>
		</div>
		<div class="form-bottom">
			<div class="form-display-suite">
					<span>Display Suite</span>
				<p><strong>SAT-SUN : 1-3 PM</strong></p>
				<span>332 Neerim Rd, Carnegie</span>
				<p class="phone-number">James Cirelli<br>0401 570 180</p>
				<img src="images/steller-logo.jpg" alt="Steller Logo" width="100px" >
			</div>
		<div class="form-map">
			<a href="images/map.png" class="group2"  title="332 Neerim Road Map"><img src="images/map.png" alt="332 neerim road map" ></a>
		</div>
		</div>
	</div>
	<div class="container-images">
		<img src="images/1.jpg" alt="" ><br>
		<img src="images/2.jpg" alt="" >
	</div>
	</div>
</div>
</body>
</html>