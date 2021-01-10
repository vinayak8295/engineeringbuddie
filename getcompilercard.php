<?php
 $page = "compilercard.php";
 include 'NavBar/header.php' ?>
 <?php 
    $side1 = "TurboC++";
    $side2 = "VScode";
    $side3 = "IntelliJ IDEA";
    $side4 = "Dreamweaver";
    $side5 = "PyCharm";
    $side6 = "MySQL";
    $page1 = "getcompilercard.php";
    include 'sidebar.php' ?>

 <?php

if(isset($_GET["keywords"]) && $_GET["keywords"] != '')
 {
  $k = trim($_GET["keywords"]);
  $k = strtolower($k);
    $keywords = explode(' ', $k); 
    
   $query_string = "SELECT * FROM compilers WHERE ";
   $display_words = "";
   $keywords = explode(' ', $k); 
   foreach($keywords as $word){
   $query_string .= " keywords LIKE '%".$word."%'  OR ";
    $display_words .= $word." ";
    }
      $query_string = substr($query_string, 0, strlen($query_string) - 3);
       
       $query_string .= " GROUP BY name ";
       

?>

<?php 
$Connection=mysqli_connect('localhost','root','');
$Selected= mysqli_select_db($Connection,'engineering_buddy');

  $query = mysqli_query($Connection, $query_string);
  $result_count = mysqli_num_rows($query);


if ($result_count){

$i=0;
while($row = mysqli_fetch_assoc($query)){
  $i++;
  $name=$row['name'];
  $Description=$row['description'];
  $Link=$row['link'];
  $image=$row['image'];
  $category=$row['category'];
  $rank=$row['rank'];

 $newstring = $image ; 

$newstring = substr($newstring, 0, strlen($newstring) - 17);
$newstring = substr($newstring, 32, strlen($newstring) - 0);

$image = "https://drive.google.com/thumbnail?id=".$newstring;

?>

<section>
<div class="container">
  <div class="card">
<div class="row">
<div class="col-lg-12 col-md-6">
  <h2><?php echo $i;?>)  <?php echo $name; ?> </h2> 
  <img src="<?php echo $image; ?>" alt="Denim Jeans" style="width:490px; height: 350px; padding: 10px;padding-left:20%; margin-bottom: 10px;">
  <p id="main-content"><?php echo $Description; ?></p>
  
</div>

</div>
<button type="button" class="download-button"><a href="<?php echo $Link; ?>">Download</a></button>
</div>
</div>
</section>
<div style="margin-bottom:15px "></div>

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
            Where keywords LIKE '%".$Variable."%' 
            GROUP BY name " ;

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
 ?>



   <?php
     
    include 'NavBar/footer.php' ?> 