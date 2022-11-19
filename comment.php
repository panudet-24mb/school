<?php
include("templates/header.php");
?>
<body>
   <?php include("templates/menu.php") ?>
  <div class="main-content" id="panel">
    <?php include("templates/topnav.php") ?>
    <?php include("templates/content_header.php") ?>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-12 card-wrapper">

        <div class="card">
            <div class="card-header">
              <h3 class="mb-0">สมุดเยี่ยมชม     </h3>
            </div>
            <div class="card-body" style=" overflow-y: scroll;">

            <!-- html here -->
            <!-- comment -->
            <form action="controller/comment.php" method="post">
            <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            


            </div>
        </div>


        <?php 
    
        $myfile = fopen("controller/comment.txt", "r") or die("Unable to open file!");
        echo '<div class="card">';
        echo '<div>'. fread($myfile,filesize("controller/comment.txt")).' </div>';
        fclose($myfile);
        echo '</div>';

 
        ?>



        
  
        
    <!-- Page content -->

   
  </div>
  
  
<?php include("templates/scripts.php"); ?>
</body>

</html>