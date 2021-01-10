<!DOCTYPE html>
<html>
<head>
	<title>Navbar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>  
  <link rel="stylesheet" type="text/css" href="NavBar.css">
  <link rel="stylesheet" type="text/css" href="firstpage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
</head>
<body>

 

  <nav id="mainnavbar" class="navbar navbar-expand-md navbar-dark fixed-top px-0 navbar-custom"  >
  <div class="container-fluid"> 
     <a class="navbar-brand" style="font-family: 'Bungee Outline', cursive;"  href="#"><p><strong style="font-size: 30px;color:#8A0868; font-family: 'Audiowide', cursive;">E</strong><strong style="color: #6E6E6E; font-family: 'Audiowide', cursive;">gineering</strong><strong style="font-size: 30px; font-family: 'Audiowide', cursive;color: #8A0868">B</strong><strong style="font-family: 'Audiowide', cursive;color: #6E6E6E">uddy</strong></p>
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span>
    </button>
    
  
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

      <ul class="navbar-nav ">
        <form class="d-flex searchbar justify-content-center" action="chrometypecard.php" method="POST" >
        <input type="search" class="search-hover d-flex justify-content-end searchbar" name="keywords" aria-label="search" placeholder="search here...">
        
    </form>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Top Courses</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Softwares</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Best Compilers</a></li>
            <li><a class="dropdown-item" href="#">VPN</a></li>
            <li><a class="dropdown-item" href="#">Antivirus</a></li>
            <li><a class="dropdown-item" href="#">Useful Softwares</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Study Material
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Books</a></li>
            <li><a class="dropdown-item" href="#">Video Lectures</a></li>
            <li><a class="dropdown-item" href="#">Notes</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
        <a class="nav-link active" href="#">Register</a></li>

      </ul>

  </div>
  </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>