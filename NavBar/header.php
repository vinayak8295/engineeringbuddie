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

 
<link rel="stylesheet" type="text/css" href="compilercard.css"> 
<link rel="stylesheet" type="text/css" href="udemy.css"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
 <style >
   .navbar-custom{
background-color: #D8D8D8;
}
.navbar-custom .navbar-item{
    color: green;
}


#card-spacing{
  margin-bottom: -3px;
}

.card {
    /*font-size: 1em;*/
    overflow: hidden;
    /*padding: 5;*/
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    /*margin-top:20px;*/
    margin-left: 18%;
   width:700px;
}


.download-button{
 width:20%; 
 border-radius:10px; 
 font-size:15px; 
 background-color:#4CAF50;
}


.sidepanel {
  height: 100%; /* Specify a height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  /*z-index: 1; *//* Stay on top */
  top: 0;
  left: 0;
  background-color: #D8D8D8; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px; /* Place content 60px from the top */
  transition: 0.3s; /* 0.5 second transition effect to slide in the sidepanel */
}

/* The sidepanel links */
.sidepanel a {
  padding: 5px 5px 5px 20px;
  text-decoration: none;
  font-size:20px;
  color: #8A0868;
  display: block;
  transition: 0.3s;
   font-family: 'Syne Tactile';
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  outline: none;

  color: red;
}

/* Position and style the close button (top right corner) */

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 30px;
  cursor: pointer;
  background-color: #424242;
  color: white;
  /*padding: 10px 15px;*/
  border: none;
}

.openbtn:hover {
  background-color: #424242;
}
#mainnavbar .nav-link{
    color: #8A0868;
  font-size: 1.2rem;
  font-weight: 50;
 font-family: 'Syne Tactile';
}

#mainnavbar .nav-link:hover{
  color: red;
}
.dorpdown-menu{
  background-color: #D8D8D8;
}

.searchbar{
  padding-left: 200px;
}

.search-focus {
        background: url(https://img.icons8.com/pastel-glyph/48/000000/search--v1.png) no-repeat left;
        border: 1px solid #8A0868;
        outline: none;
        background-size: 22px;
        background-position: 13px;
        border-radius: 20px;
        width: 50px;
        height: 50px;
        padding: 2px;
        transition: all .3s;
    }
    .search-focus:focus{
        width: 300px;
        padding-left: 50px;
    }

    .search-hover {
        background: url(https://img.icons8.com/pastel-glyph/48/000000/search--v1.png) no-repeat left;
        border: 1px solid #8A0868;
        outline: none;
        background-size: 22px;
        background-position: 13px;
        border-radius: 50px;
        width: 50px;
        height: 50px;
        padding: 25px;
        transition: all .5s;
    }
    .search-hover:hover{
        width: 500px;
        padding-left: 50px;
    }

.search-click {
    position: relative;
    overflow: hidden;
    height: 50px;
}  
.search-click input {
    background: transparent;
    border: 1px solid red;
    outline: none;
    position: absolute;
    width: 500px;
    height: 50px;
    left: 0%;
    padding: 10px;
}

 </style>
</head>
<body onload="openNav()">

 

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
            <li><a class="dropdown-item" href="compilercard.php">Best Compilers</a></li>
            <li><a class="dropdown-item" href="Software.php">Useful Softwares</a></li>
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
        <a class="nav-link active" href="contact/contact.php" target  = "_blank">Contact US</a></li>

      </ul>

  </div>
  </div>
</nav>


