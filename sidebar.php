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
  <div style="margin-top: 10%;">
  <a href="<?php echo $page1; ?>?keywords=<?php echo $side1; ?>" class="active"><?php echo $side1; ?></a>
  <a href="<?php echo $page1; ?>?keywords=<?php echo $side2; ?>" class="active"><?php echo $side2; ?></a>
  <a href="<?php echo $page1; ?>?keywords=<?php echo $side3; ?>" class="active"><?php echo $side3; ?></a>
  <a href="<?php echo $page1; ?>?keywords=<?php echo $side4; ?>" class="active"><?php echo $side4; ?></a>
  <a href="<?php echo $page1; ?>?keywords=<?php echo $side5; ?>" class="active"><?php echo $side5; ?></a>
  <a href="<?php echo $page1; ?>?keywords=<?php echo $side6; ?>" class="active"><?php echo $side6; ?></a>
</div>
</div>
<div style="margin-top: 8%;"></div>


</div>


</section>



<script type="text/javascript" src="sidebar.js"></script>
</body>
</html>