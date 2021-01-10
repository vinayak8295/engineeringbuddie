<!DOCTYPE html>
<html>
<head>
  <title>Software</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Hanalei+Fill&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/software.css"> 
<!-- <link rel="stylesheet" type="text/css" href="page2.css">
 <link rel="stylesheet" type="text/css" href="sidebar.css"> -->
</head>
<body onload="openNav()">


   <?php
     $page = "Software.php";
    include 'NavBar/header.php' ?> 
   <?php 
    $side1 = "Google Chrome";
    $side2 = "VLC";
    $side3 = "Streaming";
    $side4 = "Must Have";
    $side5 = "Browsers";
    $side6 = "Games";
    $page1 = "getSoftware.php";
   include 'sidebar.php' ?>





<?php

if(isset($_GET["keywords"]) && $_GET["keywords"] != '')
 {
  $k = trim($_GET["keywords"]);
  $k = strtolower($k);
    $keywords = explode(' ', $k); 
    
   $query_string = "SELECT * FROM softwares WHERE ";
   $display_words = "";
   $keywords = explode(' ', $k); 
   foreach($keywords as $word){
   $query_string .= " keywords LIKE '%".$word."%'  OR ";
    $display_words .= $word." ";
    }
      $query_string = substr($query_string, 0, strlen($query_string) - 3);
       
       

?>

<?php 
$Connection=mysqli_connect('localhost','root','');
$Selected= mysqli_select_db($Connection,'engineering_buddy');

  $query = mysqli_query($Connection, $query_string);
  $result_count = mysqli_num_rows($query);


if ($result_count){


while($row = mysqli_fetch_assoc($query)){
  $name=$row['name'];
  $Description=$row['description'];
  $Link=$row['link'];
  $icon=$row['icon'];
  $category=$row['category'];


 ?>

<section>
  <div class="container">
  <div class="card software">
    <div class="row">
      <div class="col-sm-2 d-block w-100" style="text-align: center; padding-top:3%" >
       <img   > <?php echo ' <img src="data:image/jpg;base64,'.base64_encode($icon).'"/> ' ; ?>
      </div>
      <div class="col-sm-10">
        <!-- <div class="card-block"> -->
                      <h1 id="card-spacing" class="card-title"> <?php echo $name; ?> </h1>
                      <small class="text-muted"><?php echo $category; ?> </small>
          <p id="card-spacing"><?php echo $Description; ?> </p>
          
        </div>


      </div>

              <div style="text-align:right; padding-right:10px; padding-top: 5px;">
            <button type="button" class="download-button"><a href="<?php echo $Link; ?>">Download</a></button>
</div>
          
  </div>
  <div style="padding: 10px;"></div>
</div>
</section>

<?php  
 
 ?>



</tr>



<?php }
}
else
{
  $Keywords_array = array('vlc','media','player','mediaplayer','mozila','edge','firefox','browsing','browser','google','uc','opera','safari','keepnote','notes','must','whatsapp','telegram','messenger','idm','download','mp3','converter','games','epic','gta5','fortnite','steam','chrome');
  $num =  count($Keywords_array) ;
  $i = 0;
  $Keywords1 =  $keywords[0];
  

  while ($i<$num) {
     $string1 = $Keywords_array[$i]; 
     $string2 = $keywords[0] ;
 similar_text( $string1, $string2, $percent);
  if ($percent>60) {
    $Keywords1 = $string1;
  

  
  }
  $i = $i + 1;
  
  }


 $Variable =  $Keywords1;
$ViewQuery1="SELECT * 
            FROM softwares
            Where keywords LIKE '%".$Variable."%' " ;

$Execute1=$Connection->query($ViewQuery1);


while($DataRows=mysqli_fetch_array($Execute1)){
  $name=$DataRows['name'];
  $Description=$DataRows['description'];
  $Link=$DataRows['link'];
  $icon=$DataRows['icon'];
  $category=$DataRows['category'];
?>


<section>
  <div class="container">
  <div class="card software">
    <div class="row">
      <div class="col-sm-2 d-block w-100" style="text-align: center; padding-top:3%" >
       <img   > <?php echo ' <img src="data:image/jpg;base64,'.base64_encode($icon).'"/> ' ; ?>
      </div>
      <div class="col-sm-10">
        <!-- <div class="card-block"> -->
                      <h1 id="card-spacing" class="card-title"> <?php echo $name; ?> </h1>
                      <small class="text-muted"><?php echo $category; ?> </small>
          <p id="card-spacing"><?php echo $Description; ?> </p>
          
        </div>
         
      </div>

              <div style="text-align:right; padding-right:10px; padding-top: 5px;">
            <button type="button" class="download-button"><a href="<?php echo $Link; ?>"></a> Download</button>
</div>
          
  </div>
   <div style="padding:10px;"></div>
</div>
</section>

<?php }
}



?>
  
<?php
 }
 else
{?>
  <section>
  <div class="container">
  <div class="card software">
    <div class="row">
      <div class="col-sm-2 d-block w-100" style="text-align: center; padding-top:3%" >
        <img src="https://drive.google.com/thumbnail?id=1448axfXVFoi0izt17KZAcrellTl7qcVx" alt="Denim Jeans">
      </div>
      <div class="col-sm-10">
        <!-- <div class="card-block"> -->
                      <h1 id="card-spacing" class="card-title"> VLC </h1>
                      <small class="text-muted">STREAMING </small>
          <p id="card-spacing">SOUIUSGDUGAG ASGIDHIAHSIO SAFHIOHWRA SHAPHDPHAWPHDH HASOHDH </p>
          
        </div>
         
      </div>

              <div style="text-align:right; padding-right:10px; padding-top: 5px;">
            <button type="button" class="download-button"><a href="https//www.google.com"></a> Download</button>
</div>
          
  </div>
   <div style="padding:10px;"></div>
</div>
</section>
<?php }
 ?>


  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="sidebar.js"></script>
</body>
</html>