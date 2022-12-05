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
        <div class="col-lg-8 card-wrapper">
    
          <!-- Equal-width multi-row -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">สรุปเนื้อหาแต่ละบท</h3>
            </div>
            <div class="card-body">
            <a href="sum_unit_1.php">
              <div class="row row-example">
                <div class="col" >
                <a href="sum_unit_1.php" class="btn btn-primary my-2">หน่วยที่ 1</a>
            </a>
</div>
                <div class="col">
                <a href="sum_unit_2.php">
                <a href="sum_unit_2.php" class="btn btn-primary my-2">หน่วยที่ 2</a>
</div>
                <div class="w-100"></div>
                <div class="col"><a href="sum_unit_3.php">
                <a href="sum_unit_3.php" class="btn btn-primary my-2">หน่วยที่ 3</a>
</div>
                <div class="col"><a href="sum_unit_4.php"> <a href="sum_unit_4.php" class="btn btn-primary my-2">หน่วยที่ 4</a>
</div>
<div class="w-100"></div>
                <div class="col"><a href="sum_unit_5.php"> <a href="sum_unit_5.php" class="btn btn-primary my-2">หน่วยที่ 5</a></div>
                <div class="col"><a href="sum_unit_6.php"> <a href="sum_unit_6.php" class="btn btn-primary my-2">หน่วยที่ 6</a></div>
              </div>
            </div>
          </div>
          <!-- Mix and match -->
      
        </div>
      </div>
      <!-- Footer -->
 
    </div>

   
  </div>
  
  
<?php include("templates/scripts.php"); ?>
</body>

</html>