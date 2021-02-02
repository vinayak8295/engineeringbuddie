 
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
     
.card{
    /*font-size: 1em;*/
    overflow: hidden;
    /*padding: 5;*/
  
   
    /*margin-top:20px;*/
    margin-left: 3%;
    width: 800px;
   }
  </style>
  <title></title>
</head>
<body>


<?php include 'freecoursecard.php'?>
 <?php
     $page = "udemy.php";
    include 'NavBar/header.php' ?> 
   <?php 
    $side1 = "Web Development";
    $side2 = "Ds Algo";
    $side3 = "Python";
    $side4 = "Machine Learning";
    $side5 = "Java";
    $side6 = "App Development";
    $page1 = "getudemy.php";
   include 'sidebar.php' ?>




<?php

if(isset($_POST["keywords"]) && $_POST["keywords"] != '')
 {
  $k = trim($_POST["keywords"]);
  $k = strtolower($k);
    $keywords = explode(' ', $k); 
   $query_string = "SELECT * FROM udemy WHERE ";
   $display_words = "";
   $keywords = explode(' ', $k); 
   foreach($keywords as $word){
   $query_string .= " keywords LIKE '%".$word."%'  OR ";
    $display_words .= $word." ";
    }
      $query_string = substr($query_string, 0, strlen($query_string) - 3);
       $query_string1 = $query_string;
       $word = $keywords[0];
       $query_string1 .= "AND keywords LIKE '%".$word."%'";
       $query_string .= "ORDER BY rating DESC";
       $query_string1 .= "ORDER BY rating DESC";
       

?>

<?php 




$Connection=mysqli_connect('localhost','root','');
$Selected= mysqli_select_db($Connection,'engineering_buddy');

  $query1 = mysqli_query($Connection, $query_string1);
  $query = mysqli_query($Connection, $query_string);
$result_count = mysqli_num_rows($query1);
$result_count1 = mysqli_num_rows($query);


if ($result_count) {
while($row = mysqli_fetch_assoc($query1)){
  $CourseName=$row['course_name'];
  $Link=$row['link'];
  $AuthorName=$row['author_name'];
  $Hours=$row['hours'];
  $Rating=$row['rating'];
  $Image=$row['image'];
  $Description=$row['description'];


 ?>
 <section> 
 <div class="container">
  <div class="card" id="udemy" style="width:900px;">
    <div class="row ">
      <div class="col-sm-4">
        <img  > <?php echo ' <img style = "width: 300px; height: 190px;margin-top:-19px;margin-left: 3px;"  src="data:image/jpg;base64,'.base64_encode($Image).'"/> ' ; ?>
      </div>

      <div class="col-sm-8">
        <div class="card-block">
                  <h3 id="card-spacing" class="card-title"><?php echo $CourseName ;?></h3>
          <p id="card-spacing"><?php echo $Description ;?><br><small class="text-muted"><?php echo  $AuthorName ;?></small>  </p>
          <div style="margin-top: 10px; margin-bottom:7px;" > 
          <p class="fa fa-star checked"></p><?php echo $Rating ;?></div>
        
          <p id="card-spacing" style="margin-bottom: 3px;"><small class="text-muted"><?php echo $Hours ;?> total hours</small></p>
          <a href="<?php echo $Link ;?>" class="stretched-link"></a>
     </div>
      </div>

      
    </div>
  </div>
  <div style="padding-bottom: 10px;"></div>
</div>
   </section> 







<?php }



}
elseif ($result_count1) {

  while($row1 = mysqli_fetch_assoc($query)){
  $CourseName=$row1['course_name'];
  $Link=$row1['link'];
  $AuthorName=$row1['author_name'];
  $Hours=$row1['hours'];
  $Rating=$row1['rating'];
  $Image=$row1['image'];
  $Description=$row1['description'];


 ?>
 <section> 
 <div class="container">
  <div class="card" style="width:900px;">
    <div class="row ">
      <div class="col-sm-4">
        <img  > <?php echo ' <img style = "width: 300px; height: 190px;margin-top:-19px;margin-left: 3px;"  src="data:image/jpg;base64,'.base64_encode($Image).'"/> ' ; ?>
      </div>

      <div class="col-sm-8">
        <div class="card-block">
                  <h3 id="card-spacing" class="card-title"><?php echo $CourseName ;?></h3>
          <p id="card-spacing"><?php echo $Description ;?><br><small class="text-muted"><?php echo  $AuthorName ;?></small>  </p>
          <div style="margin-top: 10px; margin-bottom:7px;" > 
          <p class="fa fa-star checked"></p><?php echo $Rating ;?></div>
        
          <p id="card-spacing" style="margin-bottom: 3px;"><small class="text-muted"><?php echo $Hours ;?> total hours</small></p>
          <a href="<?php echo $Link ;?>" class="stretched-link"></a>
     </div>
      </div>

      
    </div>
  </div>
  <div style="padding-bottom: 10px;"></div>
</div>
   </section>  
 <?php  }
  
}
else
{
  $Keywords_array = array('development','python','java','app','web','hacking','javascript','nodejs','ethical','colt','steele','ai','ml','machine','science','spoofing','arp','phishing','coding','kotlin','swift','appdevelopment','flutter','dart','angular','django','flexbox','animation','redux','data','structures','algorithms');
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
            FROM udemy
            Where keywords LIKE '%".$Variable."%' " ;

$Execute1=$Connection->query($ViewQuery1);


while($DataRows=mysqli_fetch_array($Execute1)){
  $CourseName=$DataRows['course_name'];
  $Link=$DataRows['link'];
  $AuthorName=$DataRows['author_name'];
  $Hours=$DataRows['hours'];
  $Rating=$DataRows['rating'];
  $Image=$DataRows['image'];
  $Description=$DataRows['description'];
?>
 
 <section> 
 <div class="container">
  <div class="card" style="width:900px;">
    <div class="row ">
      <div class="col-sm-4">
        <img  > <?php echo ' <img style = "width: 300px; height: 190px;margin-top:-19px;margin-left: 3px;"  src="data:image/jpg;base64,'.base64_encode($Image).'"/> ' ; ?>
      </div>

      <div class="col-sm-8">
        <div class="card-block">
                  <h3 id="card-spacing" class="card-title"><?php echo $CourseName ;?></h3>
          <p id="card-spacing"><?php echo $Description ;?><br><small class="text-muted"><?php echo  $AuthorName ;?></small>  </p>
          <div style="margin-top: 10px; margin-bottom:7px;" > 
          <p class="fa fa-star checked"></p><?php echo $Rating ;?></div>
        
          <p id="card-spacing" style="margin-bottom: 3px;"><small class="text-muted"><?php echo $Hours ;?> total hours</small></p>
          <a href="<?php echo $Link ;?>" class="stretched-link"></a>
     </div>
      </div>

      
    </div>
  </div>
  <div style="padding-bottom: 10px;"></div>
</div>
   </section> 

<?php }
}



?>
  
<?php
 }
 else{
 ?>

  </body>
  </html>
   
<?php
  $Connection=mysqli_connect('localhost','root','');
$Selected= mysqli_select_db($Connection,'engineering_buddy');

$ViewQuery6="SELECT * 
            FROM udemy
            Where id = 4 OR id = 26 OR id = 77 OR id = 55 OR id = 52" ;

$Execute6=$Connection->query($ViewQuery6);

while($DataRows6=mysqli_fetch_array($Execute6)){
  $CourseName=$DataRows6['course_name'];
  $Link=$DataRows6['link'];
  $AuthorName=$DataRows6['author_name'];
  $Hours=$DataRows6['hours'];
  $Rating=$DataRows6['rating'];
  $Image=$DataRows6['image'];
  $Description=$DataRows6['description'];

 ?>

  <section> 
 <div class="container">
  <div class="card" style="width:900px;">
    <div class="row ">
      <div class="col-sm-4">
        <img  > <?php echo ' <img style = "width: 300px; height: 190px;margin-top:-19px;margin-left: 3px;"  src="data:image/jpg;base64,'.base64_encode($Image).'"/> ' ; ?>
      </div>

      <div class="col-sm-8">
        <div class="card-block">
                  <h3 id="card-spacing" class="card-title"><?php echo $CourseName ;?></h3>
          <p id="card-spacing"><?php echo $Description ;?><br><small class="text-muted"><?php echo  $AuthorName ;?></small>  </p>
          <div style="margin-top: 10px; margin-bottom:7px;" > 
          <p class="fa fa-star checked"></p><?php echo $Rating ;?></div>
        
          <p id="card-spacing" style="margin-bottom: 3px;"><small class="text-muted"><?php echo $Hours ;?> total hours</small></p>
          <a href="<?php echo $Link ;?>" class="stretched-link"></a>
     </div>
      </div>

      
    </div>
  </div>
  <div style="padding-bottom: 10px;"></div>
</div>
   </section> 

   <?php
 }}
 ?>




   <?php
     
    include 'NavBar/footer.php' ?> 