<?php
session_start();
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Villa Ivica</title>

    <!-- Bootstrap core CSS -->
    <link href="../static/css/bootstrap.css" rel="stylesheet">
    <link href="../static/css/bootstrap-theme.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="../static/css/main.css" rel="stylesheet">

</head>

<body>
         
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Ime ville -->
                  <a class="navbar-brand" href="index.php">VILLA IVICA</a>
                </div>
               
               <!-- Linkovi po stranici -->
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                    
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="accomodation.php">ACCOMODATION</a></li>
                    <li><a href="situation.php">SITUATION</a></li>
                    <li><a href="reservation.php">RESERVATION</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    
                  </ul>
                  
                  <!-- Odabir jezika -->                    
                  <ul class="nav navbar-nav navbar-right flags">
                      <li id="lit"><a class="nav-a" href="javascript:it;"><img src="../static/img/i.png"></a></li>
                      <li id="lfr"><a class="nav-a" href="javascript:fr;"><img src="../static/img/fr.png"></a></li>
                      <li id="lde"><a class="nav-a" href="javascript:de;"><img src="../static/img/de.png"></a></li>
                      <li id="len"><a class="nav-a" href="javascript:en;"><img src="../static/img/en.png"></a></li>
                      <li id="lhr"><a class="nav-a" href="javascript:hr;"><img src="../static/img/cro.png"></a></li>   
                  </ul>
            
            
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
<div class="all">  
<div class="container main">
            
          
