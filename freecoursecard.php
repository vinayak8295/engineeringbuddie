  <div class="card fixed-top" style="width: 300px; height:100%; margin-top: 6%; margin-left: 79%; border: 2px solid black; float: right; ">
    <h1>Free Courses</h1>
    <div class="row" style="height: 20%; border-top: 1px solid #e0e0e0;;">
      <div class="col-sm-2" style="">
        <img ><?php echo ' <img style="width:70px; height:40px;  " src="data:image/jpg;base64,'.base64_encode($Image).'"/> ' ; ?>
      </div>
      <div class="col-sm-10" >
      <ul>
        <a href="<?php echo $Link; ?>" style="color: black;"> <?php echo $CourseName;?> </a>
      </ul>
      </div>
    </div>
  </div>