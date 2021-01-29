<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<link rel="stylesheet" type="text/css" href="firstpage.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>
<body>
 
 
   <?php
     $page = "techpage.php";
    include 'NavBar/header.php' ?> 
 <?php 
    $side1 = "Top Smartphones";
    $side2 = "Top Earphones";
    $side3 = "Gaming Laptops";
    $side4 = "Business Laptops";
    $side5 = "Browsers";
    $side6 = "Must Have";
    $page1 = "getSoftware.php";
   include 'sidebar.php' ?>

  




<?php

if(isset($_POST["keywords"]) && $_POST["keywords"] != '')
 {
  $k = trim($_POST["keywords"]);
  $k = strtolower($k);
    $keywords = explode(' ', $k); 
    
   $query_string = "SELECT * FROM amazon WHERE ";
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
  $rating=$row['rating'];
  $Link=$row['link'];
  $category=$row['category'];
  $Description=$row['description'];
  $icon=$row['image'];
  $price=$row['price'];

 ?>

<div class="container">
	<div class="card" style="width:400px; height: 700px; border:2px solid grey;">
		<div class="row" style="height:60%; ">
			<img  class="container-fluid" style="width:40px; height: 5px;" > <?php echo ' <img src="data:image/jpg;base64,'.base64_encode($icon).'"/> ' ; ?>
			
			</div>
			<div class="row" style="height: 40%; ">
				<div class="card-body">
				<p class="text-muted"><?php echo $category; ?></p>
				<p><?php echo $Description; ?> </p>
				<p class="strong"><?php echo $price; ?>Rs</p>
				<button type="button" class="btn btn-primary"><a class="nav-link active" href="<?php echo $Link; ?>" target  = "_blank"></a>Buy</button>
			</div>
		</div>
	</div>

</div>

<?php  
 
 ?>



</tr>



<?php }
}
else
{
  $Keywords_array = array('earphone');
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
            FROM amazon
            Where keywords LIKE '%".$Variable."%' " ;

$Execute1=$Connection->query($ViewQuery1);


while($DataRows=mysqli_fetch_array($Execute1)){
	$name=$DataRows['name'];
  $rating=$DataRows['rating'];
  $Link=$$DataRows['link'];
  $category=$DataRows['category'];
  $Description=$DataRows['description'];
  $icon=$DataRows['image'];
  $price=$DataRows['price'];

?>


<div class="container">
	<div class="card" style="width:400px; height: 450px; border:2px solid grey;">
		<div class="row" style="height:60%; ">
			<img  class="container-fluid" style="width:40px; height: 5px;" > <?php echo ' <img src="data:image/jpg;base64,'.base64_encode($icon).'"/> ' ; ?>
			
			</div>
			<div class="row" style="height: 40%; ">
				<div class="card-body">
				<p class="text-muted"><?php echo $category; ?></p>
				<p><?php echo $Description; ?> </p>
				<p class="strong"><?php echo $price; ?>Rs</p>
				<button type="button" class="btn btn-primary"><a class="nav-link active" href="<?php echo $Link; ?>" target  = "_blank"></a>Buy</button>
			</div>
		</div>
	</div>

</div>


<?php }
}



?>
  
<?php
 }
 else
{
$Connection=mysqli_connect('localhost','root','');
$Selected= mysqli_select_db($Connection,'engineering_buddy');
$ViewQuery3="SELECT * 
            FROM amazon
            Where  id = 1" ;

$Execute3=$Connection->query($ViewQuery3);


while($DataRows3=mysqli_fetch_array($Execute3)){
  $name=$DataRows3['name'];
  $rating=$DataRows3['rating'];
  $Link=$DataRows3['link'];
  $category=$DataRows3['category'];
  $Description=$DataRows3['description'];
  $icon=$DataRows3['image'];
  $price=$DataRows3['price'];
  ?>
  

<section>
  <div class="container">
  <div class="card software" style="margin-left:15%;">
    <div class="row">
      <div class="col-sm-2 d-block w-100" style="text-align: center; padding-top:3%" >
       <img  > <?php echo ' <img style = "width: 150px; height: 200px;margin-top:-19px;margin-left: 3px;"  src="data:image/jpg;base64,'.base64_encode($icon).'"/> ' ; ?>
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




<?php }
}
 ?>


  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="sidebar.js"></script>
</body>
</html>