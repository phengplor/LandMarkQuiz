<!doctype html>
<?php include "includes/functions.php"; ?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= @$pageTitle ?: 'My Site Name'; ?></title>
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link href="css/multiColumnTemplate.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
  <header>
    <div class="primary_header">
    <br>
      <h1 class="title"> FAMOUS LANDMARKS</h1>
    </div>
  	<!-- TABS -->
      	<ul class="tabNavigation">
        	<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a></li>
            <li><a href="landmark.php"><i class="fas fa-globe" aria-hidden="true"></i>&nbsp; Landmarks</a></li>
            <li><a href="quiz.php"><i class="far fa-star" aria-hidden="true"></i>&nbsp;Quiz</a></li>
            <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="http://www.twitter.com"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
      	</ul>
    </nav>
  </header>

  
