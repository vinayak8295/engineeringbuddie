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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>  <link rel="stylesheet" type="text/css" href="NavBar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
</head>
<body>


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
  <a href="<?php echo $Link; ?>" class="active"><?php echo $Name; ?></a>
  <img src="<?php echo $Image; ?>" alt="Denim Jeans" style="width:150px; height: 250px; padding-left:3%; margin-bottom: 10px;">
  <!-- <a href="<?php echo $Link; ?>" class="active"><?php echo $Description; ?></a> -->
  
  <?php }?>
</div>
</div>
<div style="margin-top: 8%;"></div>

</section>



<script type="text/javascript" src="sidebar.js"></script>
</body>
</html>