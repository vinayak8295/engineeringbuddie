<!DOCTYPE html>
<html>
<head>
<title>Navbar</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Hanalei+Fill&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="NavBar.css">
<link rel="stylesheet" type="text/css" href="style.css"> 
<link rel="stylesheet" type="text/css" href="compilercard.css"> 
<link rel="stylesheet" type="text/css" href="udemy.css"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
 
</head>
<body onload="openNav()" >

 

  <nav id="mainnavbar" class="navbar navbar-expand-md navbar-dark fixed-top px-0 navbar-custom"  >
  <div class="container-fluid"> 
     <a class="navbar-brand" style="font-family: 'Bungee Outline', cursive;"  href="#"><p><strong style="font-size: 30px;color:#8A0868; font-family: 'Audiowide', cursive;">E</strong><strong style="color: #6E6E6E; font-family: 'Audiowide', cursive;">gineering</strong><strong style="font-size: 30px; font-family: 'Audiowide', cursive;color: #8A0868">B</strong><strong style="font-family: 'Audiowide', cursive;color: #6E6E6E">uddy</strong></p>
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span>
    </button>
    
  
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

      <ul class="navbar-nav ">
        <form class="d-flex searchbar justify-content-center" action="<?php echo $page;?>" method="POST" >
        <input type="search" class="search-hover d-flex justify-content-end searchbar" name="keywords" aria-label="search" placeholder="search here...">
    </form>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="www.youtube.com">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="udemy.php">Top Courses</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Softwares</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="compilers.php">Best Compilers</a></li>
            <li><a class="dropdown-item" href="softwares.php">Useful Softwares</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funtypes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="movie.php">movie</a></li>
            <li><a class="dropdown-item" href="insta.php">memes</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
        <a class="nav-link active" href="contact.php">Contact US</a></li>

      </ul>

  </div>
  </div>
</nav>


