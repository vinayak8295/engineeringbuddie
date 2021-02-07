<html>
  
  <head>
    <title>Some Title</title>
    <link href="insta.css" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
     <!-- external CSS -->
  </head>
  <body>
    <!-- main content -->
 <?php
    include 'NavBar/header.php' ?> 
   <?php include 'sidebar_movies.php' ?>
   <?php include 'moviesidebar.php' ?>

<?php 
// query the user media
$fields = "id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username";
$token = "IGQVJYRng2ZAU1sdG1CS19jaHBkZAjlmR1JpT201X2FpLVVRY3Jhem9RYUlkVnYtd09EWW1KbmxPT1FtMENDbzd0SmlSNjhXYkNObXlVR1NISjNTNFgyRnl1VHBSQ0Y2emRtaVUtdWpHZAzVyYnNLQ2x2MQZDZD";
$limit = 30;
 
$json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
$json_feed = @file_get_contents($json_feed_url);
$contents = json_decode($json_feed, true, 512, JSON_BIGINT_AS_STRING);
 
echo "<div class='card' style='width:50%;margin-left:18%;'>";
    foreach($contents["data"] as $post){
        $username = isset($post["username"]) ? $post["username"] : "";
         $caption =      isset($post["caption"]) ? $post["caption"] : "";
        $media_url = isset($post["media_url"]) ? $post["media_url"] : "";
        $permalink =    isset($post["permalink"]) ? $post["permalink"] : "";
        $media_type =   isset($post["media_type"]) ? $post["media_type"] : "";
       
         
        echo "
        
               ";
 
                    if($media_type=="VIDEO"){
                        echo "<video controls class='card-img-top' style='width:100%; display: block !important;'>
                            <source src='{$media_url}' type='video/mp4'>
                            Your browser does not support the video tag.
                        </video>";
                    }
 
                    else{
                        echo "<img class='card-img-top' src='{$media_url}' />";
                    }
                 
                echo "
               
                    
                    <div class='card-body'>
                    <a class='card-title' href='{$permalink}' target='_blank'>View more on instagram</a>
                    <p class='card-text'> $caption </p>
                    <a href='#' class='btn btn-primary'>@{$username}</a>
                    </div>
            
            
        ";
   
    echo "<hr>";
    }
echo "</div>
</div>"
?>



</body>
