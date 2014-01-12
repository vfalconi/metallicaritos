<?php
	$tracks = json_decode(file_get_contents('./assets/json/metallica-tracks.json'));
	$flavors = json_decode(file_get_contents('./assets/json/doritos2.json'));

	$randomTrack = rand(0, count($tracks));
	$randomFlavor = rand(0, count($flavors));

	$name = $tracks[$randomTrack] . ' ' . $flavors[$randomFlavor];
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Metallicaritos | Metallica Songs + Doritos Flavors</title>
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://metallicaritos.vincefalconi.com" />
  <meta property="og:title" content="Metallicaritos | Metallica Songs + Doritos Flavors" />
  <meta property="og:image" content="http://metallicaritos.vincefalconi.com/assets/img/og-cover.jpg" />
  <meta property="og:description" content="" />
  <meta name="description" content="Metallica Songs + Doritos Flavors. Because internet.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  	body {
  		background: #444;
  		color: #ccc;
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   		font-weight: 300;
   		font-size: 100%;
  	}
  	p {
  		text-transform: uppercase;
   		text-align: center;
   		font-size: 3em;
  	}
  </style>
</head>

<body>
	<p><?php echo $name; ?></p>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47017252-1', 'vincefalconi.com');
	  ga('send', 'pageview');

	</script>
</body>
</html>