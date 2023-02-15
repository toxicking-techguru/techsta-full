<?php

define('TITLE', "Login");
include '../assets/layouts/header.php';
check_logged_out();
?>

<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Infinite Tubes with Three.js | Demo 1 | Codrops</title>
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
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>







<div class="container">
          <div class="row">
              <div class="col-sm-4">
      
              </div>
              <div class="col-sm-4">
                  <form class="form-auh" action="includes/login.inc.php" method="post">
      
                      <?php insert_csrf_token(); ?>
      
                      <div class="text-center">
                          <img class="mb-1" src="../assets/images/logo.png" alt="" width="130" height="130">
                      </div>
      
                      <h6 class="h3 mb-3 font-weight-normal text-muted text-center">Login to your Account</h6>
      
                      <div class="text-center mb-3">
                          <small class="text-success font-weight-bold">
                              <?php
                                  if (isset($_SESSION['STATUS']['loginstatus']))
                                      echo $_SESSION['STATUS']['loginstatus'];
      
                              ?>
                          </small>
                      </div>
      
                      <div class="form-group">
                          <label for="username" class="sr-only">Username</label>
                          <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                          <sub class="text-danger">
                              <?php
                                  if (isset($_SESSION['ERRORS']['nouser']))
                                      echo $_SESSION['ERRORS']['nouser'];
                              ?>
                          </sub>
                      </div>
      
                      <div class="form-group">
                          <label for="password" class="sr-only">Password</label>
                          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                          <sub class="text-danger">
                              <?php
                                  if (isset($_SESSION['ERRORS']['wrongpassword']))
                                      echo $_SESSION['ERRORS']['wrongpassword'];
                              ?>
                          </sub>
                      </div>
      
                      <div class="col-auto my-1 mb-4">
                          <div class="custom-control custom-checkbox mr-sm-2">
                              <input type="checkbox" class="custom-control-input" id="rememberme" name="rememberme">
                              <label class="custom-control-label" for="rememberme">Remember me</label>
                          </div>
                      </div>
      
                      <button class="btn btn-lg btn-primary btn-block" type="submit" value="loginsubmit" name="loginsubmit">Login</button>
      
                      <p class="mt-3 text-muted text-center"><a href="../reset-password/">forgot password?</a></p>
      
                      
                  </form>
              </div>
              <div class="col-sm-4">
      
              </div>
          </div>
      </div>













			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
		</svg>
		<main>
			
			<div class="content">
				<!-- The canvas where ThreeJs renders the WebGL -->
				<canvas id="scene"></canvas>
			</div>
		</main>
		<script src="js/vendors/three.min.js"></script>
		<script src="js/demo1.js"></script>
	</body>
</html>














      

