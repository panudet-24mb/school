<?php 
$is_pre_or_post  = $_GET["is_pre_or_post" ] ;

$_pre = "ก่อนเรียน" ;
if ($is_pre_or_post == "post") {
    $is_pre_or_post = "post";
    $_pre = "หลังเรียน";
} else {
    $is_pre_or_post = "pre";
}

$QUESTION_PRE = array( 
    array("ขั้นตอนการพัฒนาโปรแกรมคอมพิวเตอร์มีกี่ขั้นตอน" , array("3ขั้นตอน",0) , array("4ขั้นตอน",0) , array("5ขั้นตอน",1) ,array("6ขั้นตอน" ,0) , array(1,2,3,4,5) ),
    array("ข้อใดเรียงลำดับขั้นตอนการวิเคราะห์ปัญหาได้ถูกต้อง" , array("สิ่งที่ต้องการ=>รูปแบบผลลัพธ์=>ข้อมูลนำเข้า=>ตัวแปรที่ใช้=>วิธีการประมวลผล=>ภาษาที่ใช้",1) , array("สิ่งที่ต้องการ=>รูปแบบผลลัพธ์=>ตัวแปรที่ใช้=>ข้อมูลนำเข้า=>วิธีการประมวลผล=>ภาษาที่ใช้" , 0) , array("สิ่งที่ต้องการ=>รูปแบบผลลัพธ์=>ตัวแปรที่ใช้=>วิธีการประมวลผล=>ข้อมูลนำเข้า=>ภาษาที่ใช้",0) ,array("สิ่งที่ต้องการ=>ข้อมูลนำเข้า=>ตัวแปรที่ใช้=>รูปแบบผลลัพธ์=>วิธีการประมวลผล=>ภาษาที่ใช้" ,0), array(1,2,3,4,5)),
    array("การระบุข้อมูลเข้าข้อมูลออกอยู่ในกระบวนการใดของการแก้ปัญหา" , array("การวิเคราะห์และกำหนดรายละเอียดของการแก้ปัญหา",1) , array("การเลือกเครื่องมือและออกแบบวิธีขั้นตอน" , 0) , array("การดำเนินการแก้ปัญหา",0) ,array("การตรวจสอบและปรับปรุง" ,0) , array(1,2,3,4,5)),
    array("ข้อใด ไม่ใช่ สิ่งที่ได้จากการวิเคราะห์และกำหนดรายละเอียดของปัญหา" , array("รูปแบบผลลัพธ์ที่ต้องการ",1) , array("ข้อมูลที่ต้องนำเข้า" , 0) , array("ผลลัพธ์ที่ได้จากการหาคำตอบ ",0) ,array("ขั้นตอนหรือวิธีการที่ต้องใช้ในการหาคำตอบ" ,0), array(1,2,3,4,5)),
    array("การพิจารณาข้อมูลและเงื่อนไขที่กำหนดมาในปัญหา คือข้อใด" , array("การระบุข้อมูลเข้า",1) , array("การระบุข้อมูลออก" , 0) , array("การขจัด",0) ,array("การกำหนดวิธีการประมวลผล " ,0) , array(1,2,3,4,5) ),
    array("ข้อใดไม่ใช่ขั้นตอนการแก้ปัญหา" ,array("การดำเนินการแก้ปัญหา",0) , array("การเลือกเครื่องมือและออกแบบขั้นตอนและวิธีการแก้ปัญหา" , 0) , array("การวิเคราะห์และกำหนดรายละเอียดของปัญหา",0) ,array("การแจ้งปัญหาให้ผู้ดูแลตรวจสอบปรับปรุงระบบ" ,1) ,  array(1,2,3,4,5)),
    array("ข้อใดไม่ได้อยู่ในหลักเกณฑ์ที่ต้องการดำเนินวิเคราะห์ปัญหา" , array("รูปแบบผลลัพธ์",0) , array("ข้อมูลนำเข้า	" , 0) , array("ข้อมูลนำออก	",1) ,array("ตัวแปรที่ใช้ " ,0) ,  array(1,2,3,4,5)),
    array("เมื่อต้องการพัฒนาโปรแกรมจะต้องทำสิ่งใดก่อน" , array("วิเคราะห์ปัญหา",1) , array("เขียนโปรแกรม" , 0) , array("เลือกภาษาที่ต้องใช้เขียน",0) ,array("เขียน Flowchart " ,0),  array(1,2,3,4,5)),
    array("การวิเคราะห์และกำหนดรายละเอียดของปัญหาตรงกับข้อใด"  , array("เป็นการเลือกเครื่องมือและออกแบบขั้นตอนวิธี",0) , array("เป็นการทำคามเข้าใจกับปัญหาเพื่อแยกข้อมูลออกมา" , 1) , array("เป็นการตรวจสอบและปรับปรุง",0) ,array("เป็นการลงมือในการดำเนินการแก้ปัญหา" ,0), array(1,2,3,4,5) ),
    array("ข้อใดคือขั้นตอนสุดท้ายในการพัฒนาโปรแกรม"  , array("การวิเคราะห์ปัญหา",0) , array("ออกแบบวิธีการแก้ปัญหา" , 0) , array("จัดทำเอกสารประกอบ",1) ,array("เขียนโปรแกรม" ,0) , array(1,2,3,4,5)));
  
  
  
  $QUESTION_POST  = array( 
      array("ข้อใดเรียงลำดับขั้นตอนการพัฒนาโปรแกรมได้ถูกต้อง" , array("เขียนโปรแกรม > ทำเอกสาร > เขียนผังงานและซูโดโค้ด > ทดสอบและแก้ไขโปรแกรม > วิเคราะห์ปัญหา",0) , array("เขียนโปรแกรม > ทดสอบและแก้ไขโปรแกรม > วิเคราะห์ปัญหา > ทำเอกสาร > เขียนผังงานและซูโดโค้ด" , 0) , array("วิเคราะห์ปัญหา > เขียนผังงานและซูโดโค้ด > เขียนโปรแกรม > ทดสอบและแก้ไขโปรแกรม > ทำเอกสาร",1) ,array("วิเคราะห์ปัญหา > เขียนโปรแกรม > เขียนผังงานและซูโดโค้ด > ทดสอบและแก้ไขโปรแกรม > ทำเอกสาร" ,0), array(1,2,3,4,5)),
    array("โปรแกรมที่ ไม่ใช่ ในการพัฒนา" , array("โปรแกรมWebsite version 1.1",0) , array("โปรแกรม visual Basic version 4.0" , 1) , array("โปรแกรมMicrosoft  Access",0) ,array("โปรแกรม Photoshop" ,0), array(1,2,3,4,5)),
    array("โปรแกรมซอฟต์แวร์จะแบ่งออกเป็นประเภทใหญ่กี่ประเภท" , array("2 ประเภท",1) , array("3 ประเภท" , 0) , array("4 ประเภท",0) ,array("5 ประเภท" ,0) , array(1,2,3,4,5)),
    array("ข้อใด ไม่ใช่ การพัฒนาโปรแกรมที่ดี" , array("ออกแบบโปรแกรม",0) , array("เขียนเอกสารประกอบโปรแกรม" , 1) , array("การวางแผนและแก้ไขปัญหา",0) ,array("ทดสอบโปรแกรม" ,0), array(1,2,3,4,5)),
    array("วงจรการพัฒนาโปรแกรม คือข้อใด" , array("Program Development Live Cycle",1) , array("Programming Development Life Cycle " , 0) , array("Program Develop Live Cycle ",0) ,array("Program Development Life Cycle" ,0) , array(1,2,3,4,5) ),
    array("ข้อใดเป็นขั้นตอนที่สำคัญที่สุดในการพัฒนาโปรแกรม" ,array("ชั้นวิเคราะห์การต้องการ",1) , array("ชั้นวางแผนแก้ไขปัญหา" , 0) , array("ชั้นการดำเนินการเขียนโปรแกรม ",0) ,array("ชั้นทดสอบและแก้ไขโปรแกรม" ,0) ,  array(1,2,3,4,5)),
    array("การบำรุงรักษาโปรแกรมหมายถึงข้อใด" , array(" คู่มือการใช้งาน",0) , array("รักษาสื่อจัดเก็บโปรแกรม" , 0) , array("คู่มือการประกอบโปรแกรม",0) ,array("ปรับปรุงโปรแกรมให้ถูกต้องตามคู่มือใช้งาน" ,1) ,  array(1,2,3,4,5)),
    array("ข้อใดหมายถึงเอกสารประกอบโปรแกรม" , array("คู่มือการใช้งาน",0) , array("คู่มือการประกอบโปรแกรม" , 0) , array("ไม่มีคำตอบข้อใดถูก",0) ,array("ไม่มีคำตอบข้อใดถูก" ,1),  array(1,2,3,4,5)),
    array("ข้อใดคือการทดสอบและแก้ไขโปรแกรมสามารถแบ่งได้กี่ขั้นตอน"  , array("3 ขั้นตอน",0) , array("4 ขั้นตอน	" , 0) , array("5 ขั้นตอน",0) ,array("6 ขั้นตอน" ,1), array(1,2,3,4,5) ),
    array("การเขียน Flowchart มีความหมายตรงกับข้อใด"  , array("การใช้รูปภาพหรือสัญลักษณ์ ที่ใช้เขียนคำอธิบาย",1) , array("  การแสดงการทำงานองคอมพิวเตอร์" , 0) ,array("การดำเนินการแก้ปัญหาด้วยคำพูด " ,0) ,array("การเลือกเครื่องมือและออกแบบการแก้ปัญหา " ,0), array(1,2,3,4,5)));
  

if ($is_pre_or_post == "pre"){
   $QUESTION_ARR = $QUESTION_PRE;
}else{
    $QUESTION_ARR = $QUESTION_POST;
}

?>





<?php
include("templates/header.php");
?>
<body>
   <?php include("templates/menu.php") ?>
  <div class="main-content" id="panel">
    <?php include("templates/topnav.php") ?>
    <?php include("templates/content_header.php") ?>

    <!-- Page content -->

   <!-- Page content -->
  <form method="post"  action="controller/test.php"  >
    <input type="hidden" name="is_pre_or_post" value="<?php echo $is_pre_or_post; ?>" />
    <input type="hidden" name="test_ex" value="3" />
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
          
    
          <!-- Equal-width multi-row -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">แบบทดสอบ<?=$_pre?>หน่วยที่ 3</h3>
            </div>
 <?php  if(isset( $_GET["show_ans"]) != null && isset($_GET["score"])){
           echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!</strong> คุณได้คะแนน '.$_GET["score"].'</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
 }
              ?>
            <?php 
      for ($index = 0 ; $index < count($QUESTION_ARR); $index++  ){
        echo ' 
        <div class="row row-example">
          <div class="col" ><span > <b>'.$QUESTION_ARR[$index][0].'</b>  <br>   <br>
            <div class="row">
              <div class="col-md-6">
              <div class="custom-control custom-radio mb-3">
                 ';
                  if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][1][1] == 1) {
                    echo ' <input name="Q'.$index.'"   disabled class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][0].'" value="'.$QUESTION_ARR[$index][1][1].'" type="radio" >';
                        echo ' <label class="custom-control-label text-success" for="'.$index.'_'.$QUESTION_ARR[$index][5][0].'">'.$QUESTION_ARR[$index][1][0].'</label>';
                  } if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][1][1] == 0) {
                    echo'
                    <label class="custom-control-label text-danger  disabled" for="'.$index.'_'.$QUESTION_ARR[$index][5][0].'">'.$QUESTION_ARR[$index][1][0].'</label>
                  ';} 
                  if(isset( $_GET["show_ans"]) == null){
                  echo ' <input name="Q'.$index.'"  class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][0].'" value="'.$QUESTION_ARR[$index][1][1].'" type="radio" >';
                  echo ' <label class="custom-control-label" for="'.$index.'_'.$QUESTION_ARR[$index][5][0].'">'.$QUESTION_ARR[$index][1][0].'</label>';

                }


                echo ' </div>

                <div class="custom-control custom-radio mb-3">
                 ';
                  if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][2][1] == 1) {
                    echo ' <input name="Q'.$index.'"   disabled class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][1].'" value="'.$QUESTION_ARR[$index][2][1].'" type="radio" >';
                        echo ' <label class="custom-control-label text-success" for="'.$index.'_'.$QUESTION_ARR[$index][5][1].'">'.$QUESTION_ARR[$index][2][0].'</label>';
                  } if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][2][1] == 0) {
                    echo'
                    <label class="custom-control-label text-danger  disabled" for="'.$index.'_'.$QUESTION_ARR[$index][5][1].'">'.$QUESTION_ARR[$index][2][0].'</label>
                  ';} 
                  if(isset( $_GET["show_ans"]) == null){
                  echo ' <input name="Q'.$index.'"  class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][1].'" value="'.$QUESTION_ARR[$index][2][1].'" type="radio" >';
                  echo ' <label class="custom-control-label" for="'.$index.'_'.$QUESTION_ARR[$index][5][1].'">'.$QUESTION_ARR[$index][2][0].'</label>';

                }


                echo ' </div>
                

                <div class="custom-control custom-radio mb-3">
                ';
                 if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][3][1] == 1) {
                   echo ' <input name="Q'.$index.'"   disabled class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][2].'" value="'.$QUESTION_ARR[$index][3][1].'" type="radio" >';
                       echo ' <label class="custom-control-label text-success" for="'.$index.'_'.$QUESTION_ARR[$index][5][2].'">'.$QUESTION_ARR[$index][3][0].'</label>';
                 } if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][3][1] == 0) {
                   echo'
                   <label class="custom-control-label text-danger  disabled" for="'.$index.'_'.$QUESTION_ARR[$index][5][2].'">'.$QUESTION_ARR[$index][3][0].'</label>
                 ';} 
                 if(isset( $_GET["show_ans"]) == null){
                 echo ' <input name="Q'.$index.'"  class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][2].'" value="'.$QUESTION_ARR[$index][3][1].'" type="radio" >';
                 echo ' <label class="custom-control-label" for="'.$index.'_'.$QUESTION_ARR[$index][5][2].'">'.$QUESTION_ARR[$index][3][0].'</label>';

               }


               echo ' </div>
               
               
                
    
             
               <div class="custom-control custom-radio mb-3">
               ';
                if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][4][1] == 1) {
                  echo ' <input name="Q'.$index.'"   disabled class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][3].'" value="'.$QUESTION_ARR[$index][4][1].'" type="radio" >';
                      echo ' <label class="custom-control-label text-success" for="'.$index.'_'.$QUESTION_ARR[$index][5][3].'">'.$QUESTION_ARR[$index][4][0].'</label>';
                } if(isset( $_GET["show_ans"]) == "true" && $QUESTION_ARR[$index][4][1] == 0) {
                  echo'
                  <label class="custom-control-label text-danger  disabled" for="'.$index.'_'.$QUESTION_ARR[$index][5][3].'">'.$QUESTION_ARR[$index][4][0].'</label>
                ';} 
                if(isset( $_GET["show_ans"]) == null){
                echo ' <input name="Q'.$index.'"  class="custom-control-input" id="'.$index.'_'.$QUESTION_ARR[$index][5][3].'" value="'.$QUESTION_ARR[$index][4][1].'" type="radio" >';
                echo ' <label class="custom-control-label" for="'.$index.'_'.$QUESTION_ARR[$index][5][3].'">'.$QUESTION_ARR[$index][4][0].'</label>';

              }


              echo ' </div>
              


                  </div>
            </div>
      </span>
      
      <div class="w-100"></div>
      
      ';

      
      }

?>
      

 <?php 
  if(isset( $_GET["show_ans"]) == null){
    echo ' <button type="submit" class="btn btn-primary">Submit</button>';
  }else{
    echo ' <a href="index.php" class="btn btn-primary">Back</a>';
  }
 
 ?>
              

                
    
    </div>

    </form>

   
  </div>
  
  
<?php include("templates/scripts.php"); ?>
</body>

</html>

