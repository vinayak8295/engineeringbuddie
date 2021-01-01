<!DOCTYPE html>
<html>
<head>
  <title>Second page</title>
  <!-- CSS only -->
<<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>  <link rel="stylesheet" type="text/css" href="page2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


  <!-- <section> -->
<nav id="mainnavbar" class="navbar navbar-expand-md navbar-dark fixed-top px-0"  >
  <div class="container-fluid"> 
    <a class="navbar-brand" href="#">Engeneering Buddy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex searchbar justify-content-center" action="SearchFile.php" method="POST" >
        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" name= "keywords" >
        <button class="btn btn-outline-success" type="Submit" name="Submit" >Search</button>
    </form>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="nav-item ">
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
            <li><a class="dropdown-item" href="softwares.php">Useful Softwares</a></li>
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
        <a class="nav-link active" href="#">Contact Us</a></li>
        <li class="nav-item">
        <a class="nav-link active" href="#">Register</a></li>
      </ul>

  </div>
  </div>
</nav>



 <!--  <div class="container">
 -->    

<?php

if(isset($_POST["keywords"]) && $_POST["keywords"] != '')
 {
  $k = trim($_POST["keywords"]);
    $keywords = explode(' ', $k); 
   $query_string = "SELECT * FROM udemy WHERE ";
   $display_words = "";
   $keywords = explode(' ', $k); 
   foreach($keywords as $word){
   $query_string .= " keywords LIKE '%".$word."%'  OR ";
    $display_words .= $word." ";
    }
       
      $query_string = substr($query_string, 0, strlen($query_string) - 3);
       
       $query_string .= "ORDER BY rating DESC";

?>

<?php 




$Connection=mysqli_connect('localhost','root','');
$Selected= mysqli_select_db($Connection,'engineering_buddy');

  $query = mysqli_query($Connection, $query_string);
$result_count = mysqli_num_rows($query);


if (1==1) {


while($row = mysqli_fetch_assoc($query)){
  $CourseName=$row['course_name'];
  $Link=$row['link'];
  $AuthorName=$row['author_name'];
  $Hours=$row['hours'];
  $Rating=$row['rating'];
  $Image=$row['image'];


 ?>
 <section> 
 <div class="container">
  <div class="card">
    <div class="row ">
      <div class="col-sm-4">
        <img   > <?php echo ' <img style = "width: 300px; height: 190px"  src="data:image/jpg;base64,'.base64_encode($Image).'"/> ' ; ?>
      </div>

      <div class="col-sm-8">
        <div class="card-block">
                  <h3 id="card-spacing" class="card-title"><?php echo $CourseName ;?></h3>
          <p id="card-spacing"><?php echo $Link ;?><br><small class="text-muted"><?php echo  $AuthorName ;?></small>  </p>
        <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
          <p id="card-spacing"><small class="text-muted"><?php echo $Rating ;?></small></p>
          <a href="<?php echo $Link ;?>" class="stretched-link"></a>
     </div>
      </div>

      
    </div>
  </div>
</div>
   </section> 

<?php  
 
 ?>



</tr>



<?php }
}
else
{
  $Keywords_array = array('bing','youtube','google');
  $k =  count($Keywords_array) ;
  $i = 0;
  $Keywords1 =  $Keywords[0];

  while ($i<$k) {
     $string1 = $Keywords_array[$i]; 
     $string2 = $Keywords[0] ;
 similar_text( $string1, $string2, $percent);
  if ($percent>40) {
    $Keywords1 = $string1;
  

  
  }
  $i = $i + 1;
  
  }


 $Variable =  $Keywords1;

$ViewQuery1="SELECT * 
            FROM udemy
            Where keywords LIKE '%{$Variable}%' " ;

$Execute1=$Connection->query($ViewQuery1);


while($DataRows=mysqli_fetch_array($Execute1)){
  $CourseName=$DataRows['course_name'];
  $Link=$DataRows['link'];
  $AuthorName=$DataRows['author_name'];
  $Hours=$DataRows['hours'];
  $Rating=$DataRows['rating'];
?>
 
<div class="container">
  <div class="card float-left">
    <div class="row ">
      <div class="col-sm-5">
        <img class="d-block w-100" style="width: 100%;" src="udemy_laptop.jpg" alt="">
      </div>

      <div class="col-sm-7">
        <div class="card-block">
                  <h2 class="card-title"><?php echo $CourseName ;?></h2>
          <p><strong><?php echo $Link ;?></strong></p>
          <p class="text-muted"><?php echo  $AuthorName ;?></p>
          <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
          <p class="text-muted"><?php echo $Hours ;?></p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>

      
    </div>
  </div>
</div>



<?php }
}



?>
  
<?php
 }
 ?>


<!-- JavaScript Bundle with Popper -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>