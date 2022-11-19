<?php
include("templates/header.php");
?>
<style>
  .videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
</style>
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
              <h3 class="mb-0">หน่วยที่ 5 การรับข้อมูลและแสดงข้อมูล ภาพ เสียง และวิดิโอ การแจ้งเตือนบนหน้าจอในรูปแบบต่างๆ </h3>
            </div>
            <div class="card-body">
            <div class="videoWrapper">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/5BYgF2UevMs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>




        
  
        
    <!-- Page content -->

   
  </div>
  
  
<?php include("templates/scripts.php"); ?>
</body>

</html>