<?php
ob_start();
session_start();?>
<html lang="en">
<head>
  <title>Jeddah pc's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="../assets/css/myfoo.css" rel="stylesheet">
 <link href="../assets/css/indix.css" rel="stylesheet">
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 </head>
 <body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" img src="../assets/img/m1.png"  alt="Smiley face" height="42" width="42"></a>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li class="active"><a href="../php/index.php">Home</a></li>
        <li><a href="../php/about.php">About</a></li>
        <li><a href="../php/contact.php">Contact</a></li>
        
        
          <?php	if(isset($_SESSION['type']) && $_SESSION['type']==1 ){?>
        <li><a href="../php/admin.php">admin</a></li>
       
        
     <?php  }?>
     <?php
     if(isset($_SESSION['authuser'])){?>
      	<li>
			<a href='../php/login.php'>Logout</a>
		</li>
	
  <?php  } ?>
  
    <?php if(isset($_SESSION['authuser'])&& $_SESSION['type']==0){?>
      	
			<li><a href='../php/myaccount.php'>my account</a>	</li>

		</li>
  <?php  } ?>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <?php if(!isset($_SESSION['authuser'])){?>
        <li><a href="../php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       <?php } ?>
        <li><a href="../php/register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
         
       
      </ul>

    </div>
  </div>
</nav>
<script>
  (function() {
    var cx = '010779054765016835804:sugzsmpthpa';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>




 <div class="row">
    <div class="col-sm-12 ">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active" style="margin-left:500px;">
      <img src="../assets/img/hp.jpg" alt="Los Angeles">
    </div>

    <div class="item" style="margin-left:500px;">
      <img src="../assets/img/acer.jpg" alt="Chicago">
    </div>

    <div class="item" style="margin-left:500px;">
      <img src="../assets/img/apple-laptop.png" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
 