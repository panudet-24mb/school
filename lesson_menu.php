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
              <h3 class="mb-0">แผนจัดการเรียนรู้</h3>
            </div>
            <div class="card-body">
            <a href="unit_1.php">
              <div class="row row-example">
                <div class="col" ><span > <b>หน่วยที่ 1  </b>
            การพัฒนาโปรแกรมบนอุปกรณ์มือถือ
            </span>
            </a>
</div>
                <div class="col">
                <a href="unit_2.php">
                    <span><b>หน่วยที่ 2  </b>
ติดตั้งและใช้งานเครื่องมือที่ใช้ในการพัฒนา
</span> </a>
</div>
                <div class="w-100"></div>
                <div class="col"><a href="unit_3.php"> <span><b>หน่วยที่ 3  </b>
ลำดับขั้นตอนในการพัฒนาโปรแกรมองค์ประกอบและคุณสมบัติส่วนติดต่อกับผู้ใช้บนหน้าจอ
</span> </a></div>
                <div class="col"><a href="unit_4.php"><span><b>หน่วยที่ 4  </b>
การออกแบบส่วนการติดต่อกับผู้ใช้งาน
</span></a>
</div>
<div class="w-100"></div>
                <div class="col"><a href="unit_5.php"><span><b>หน่วยที่ 5  </b>
การรับข้อมูลและแสดงข้อมูล ภาพ เสียง และวิดิโอ การแจ้งเตือนบนหน้าจอในรูปแบบต่างๆ

</span></a></div>
                <div class="col"><a href="unit_6.php"><span><b>หน่วยที่ 6  </b> 
การจัดการแฟ้มข้อมูลและหน่วยความจำ

</span></a></div>
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