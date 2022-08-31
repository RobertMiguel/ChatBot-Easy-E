<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>Eazy-E | Cadastro</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
	<link href="cadastro-style.css" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
	<div id="wrapper">
		<div class="owl-carousel" id="slider-area">
			<div style="background-image: url(1.png)"></div>
			<div style="background-image: url(2.png)"></div>
			<div style="background-image: url(3.png)"></div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
	<script>
	$('#slider-area').owlCarousel({
	   loop: true,
	   autoplay: true,
	   responsive: {
	       0: {
	           items: 1
	       },
	       600: {
	           items: 1
	       },
	       1000: {
	           items: 1
	       }
	   }
	})        
	</script>
</body>
</html>