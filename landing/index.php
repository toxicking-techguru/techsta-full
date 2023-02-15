

<?php

define('TITLE', "landing");
include '../assets/layouts/header.php';


?>








<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>welcome to techsta  home for  the shield  bug hunters and developrs</title>
		<meta name="description" content="Infinite WebGL tubes as seen on Fornasetti.com made with Three.js" />
		<meta name="keywords" content="webgl, effect, tube, infinite, interactive, threejs, background, canvas" />
		<meta name="author" content="Louis Hoebregts for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body class="demo-1 loading">
		<svg class="hidden">
			
			
		</svg>
		<main>
			<header class="codrops-header">
				
				<h1 class="codrops-header__title">welcome to techsta  home for  the shield  bug hunters and developrs</h1>
				



				
			





	<div class="container">
		<a class="navbar-brand" href="../home">


		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>


		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">

			</ul>

		   



			<script>


const text = "This is an example of an auto-typing text.";
let i = 0;

const type = () => {
  if (i < text.length) {
    document.querySelector(".text").innerHTML += text.charAt(i);
    i++;
    setTimeout(type, 50);
  }
};

type();



</script>

				<p class="codrops-header__tagline">Techsta bug bounty  , techsta ctfs  and other tech services chared by the shield admins </p>
			</header>
			<div class="content">
				<!-- The canvas where ThreeJs renders the WebGL -->
				<canvas id="scene"></canvas>
			</div>
		</main>
		<script src="js/vendors/three.min.js"></script>
		<script src="js/demo1.js"></script>
	</body>
</html>



<?php

include '../assets/layouts/footer.php'

?>