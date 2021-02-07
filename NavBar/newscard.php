<!DOCTYPE html>
<html>
<head>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

  <title></title>
</head>
<body>

<?php 
$Connection=mysqli_connect('localhost','root','','engineering_buddy');
if($Connection){
  echo "ABCD";
}

  $query ="SELECT * 
          FROM technews
           ORDER BY id DESC   ";
  $result = mysqli_query($Connection,$query);

  if(!$result){
    die('Query failed'.maysqli_error());
  }
  $i=0;
 ?>



  
  <div class="card fixed-top" style="width: 300px; height: 100%; margin-top: 6%; margin-left: 79%; border: 2px solid black; float: right; ">

<?php

while ($row=mysqli_fetch_assoc($result)) {
  $id=$row['id'];
  $headline=$row['heading'];
  $image=$row['image'];
  $link=$row['link'];
  $i++;
?>
  <?php if($i<=5){ ?>
    <div class="row" style="height:12%; border-top: 1px solid #e0e0e0;;">
      <div class="col-sm-2" style="">
        <img ><?php echo ' <img style="width:70px; height:40px;  " src="data:image/jpg;base64,'.base64_encode($image).'"/> ' ; ?>
      </div>
      <div class="col-sm-10" >
      <ul>
        <a href="<?php echo $link; ?>"> <?php echo $headline;?> </a>
      </ul>
      </div>
    </div>


<?php }}
?>
  </div>


</body>
</html>

