<!DOCTYPE html>
<html>
<head>
	<title>Sidebar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>  <link rel="stylesheet" type="text/css" href="page2.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
<style type="text/css">
  .sidepanel {
  height: 100%; /* Specify a height */
  width: 17%; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  /*z-index: 1; *//* Stay on top */
  top: 0;
  left: 0;
  background-color: #D8D8D8; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px; /* Place content 60px from the top */
 /* 0.5 second transition effect to slide in the sidepanel */
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
</style>
<script type="text/javascript">
  function openNav() {
  document.getElementById("mySidepanel").style.width ="17%";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
</head>
<body onload="openNav()">


<section>
<div id="mySidepanel" class="sidepanel" style="margin-top:4.8%">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
  <!-- <div style="margin-top: 10%;"> -->
    <a >Movie/tvseries of the month</a>

<?php
$Connection=mysqli_connect('localhost','root','');
$Selected= mysqli_select_db($Connection,'engineering_buddy');
$ViewQuery1="SELECT * 
            FROM movies
            ORDER BY id DESC 
            LIMIT 2" ;

$Execute1=$Connection->query($ViewQuery1);


while($DataRows=mysqli_fetch_array($Execute1)){
  $Name=$DataRows['name'];
  $Link=$DataRows['link'];
  $Image=$DataRows['image'];
  $Description=$DataRows['description'];

   $newstring = $Image ; 

$newstring = substr($newstring, 0, strlen($newstring) - 17);
$newstring = substr($newstring, 32, strlen($newstring) - 0);

$Image = "https://drive.google.com/thumbnail?id=".$newstring;
?>
<div style="padding-top: 50px;">
  <a href="<?php echo $Link; ?>" class="active"><?php echo $Name; ?></a>
  <div class="row">
    <div class="col-sm-4">
  <img style="height: 150px;" src="<?php echo $Image; ?>" alt="Denim Jeans" style="width:150px; height: 250px; padding-left:3%; margin-bottom: 10px;"></div>
  <div class="col-sm-8">
  <p style="padding-left: 20px;">It is a mind fuck gaand faad movie.</p></div>
  <!-- <a href="<?php echo $Link; ?>" class="active"><?php echo $Description; ?></a> -->
  </div>
  <?php }?>
</div>
</div>
<div style="margin-top: 8%;"></div>

</section>



</body>
</html>