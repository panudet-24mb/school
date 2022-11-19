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
    array("การออกแบบส่วนต่อประสานกับผู้ใช้เรียกอีกชื่อว่าอะไร" , array("การออกแบบระบบ",0) , array("การออกแบบโครงสร้าง",1) , array("การออกแบบจอภาพ",1) ,array("การออกแบบขอบเขต" ,0) , array(1,2,3,4,5) ),
    array("การออกแบบส่วนต่อประสานกับผู้ใช้ เป็นการปฏิสัมพันธ์ระหว่างอะไรกับอะไร" , array("การปฏิสัมพันธ์ระหว่างผู้ใช้กับระบบ",1) , array("การปฏิสัมพันธ์ระหว่างผู้ใช้กับจอภาพ" , 0) , array("การปฏิสัมพันธ์ระหว่างผู้ใช้กับผู้ใช้",0) ,array("ถูกทุกข้อ" ,0), array(1,2,3,4,5)),
    array("รูปภาพนี้คือภาพแสดงอะไร" , array("กระบวนการของการออกแบบส่วนต่อประสานกับผู้ใช้",1) , array("กระบวนการของการออกแบบส่วนต่อประสานกับคอมพิวเตอร์" , 0) , array("กระบวนการของการออกแบบส่วนต่อประสานกับระบบ",0) ,array("ถูกทุกข้อ" ,1) , array(1,2,3,4,5)),
    array("ข้อใดไม่ใช่ความหมายของการวิเคราะห์เนื้อหา" , array("นักออกแบบระบบศึกษาเอกสารที่เกี่ยวข้อง",0) , array("นักออกแบบระบบศึกษารูปแบบของการแสดงผลที่ผู้ใช้ต้องการ" , 0) , array("นักออกแบบจัดลำดับงานทั้งหมด",1) ,array("เป็นระบบปฏิบัติการที่มีการรักษาความปลอดภัยสูงนิมยมใช้งานในเชิงธุรกิจหลัก" ,0), array(1,2,3,4,5)),
    array("การปฏิสัมพันธ์ระหว่างผู้ใช้กับระบบต้องอยู่บนพื้นฐานของการผสมผสานรวมกันระหว่างอะไร" , array("คอมพิวเตอร์,เทคโนโลยี,ระบบ",0) , array("จอภาพ,ระบบ,โครงสร้าง" , 0) , array("เออร์โกโนมิกส์,สุนทรียศาสตร์,เทคโนโลยี",1) ,array("มนุษย์,คอมพิวเตอร์,เทคโนโลยี" ,0) , array(1,2,3,4,5) ),
    array("ข้อใดต่อไปนี้ไม่ใช่ผู้พัฒนาแบบจำลอง GOMS" ,array("Stuart K. Card",0) , array("Nikola Tesla" , 1) , array("Thomas P. Moran",0) ,array("Allen Newell" ,0) ,  array(1,2,3,4,5)),
    array("ข้อใดต่อไปนี้ไม่ใช่ปัจจัยหลักของแบบจำลอง GOMS" , array("เป้าหมาย",0) , array("ตัวดำเนินการ" , 0) , array("ระเบียบวิธี",0) ,array("ความเป็นสากล " ,1) ,  array(1,2,3,4,5)),
    array("ข้อใดต่อไปนี้ไม่ใช่กฎบัญญัติ 3 ข้อ ของTheo Mandel" , array("ผู้ใช้สามารถติดต่อกับระบบปฏิบัติการโดยตรง",1) , array("ผู้ควบคุมการทำงานของระบบ" , 0) , array("ลดภาระการจดจำของผู้ใช้",0) ,array("สร้างส่วนต่อประสานให้สอดคล้องกัน " ,0),  array(1,2,3,4,5)),
    array("Command Language Interaction คืออะไร"  , array("การปฏิสัมพันธ์ด้วยรายการเลือกแบบข้อความ",0) , array("การปฏิสัมพันธ์ด้วยรายการเลือก" , 0) , array("การปฏิสัมพันธ์ด้วยแบบฟอร์ม",0) ,array("การปฏิสัมพันธ์ด้วยภาษาคำสั่ง" ,1), array(1,2,3,4,5) ),
    array("ข้อใดต่อไปนี้ไม่ใช่วัตถุประสงค์หลักของการออกแบบข้อมูลนำเข้า"  , array("การนำข้อมูลเข้าสู่ระบบ",0) , array("ลดภาระการจดจำของผู้ใช้" , 1) , array("การลดปริมาณข้อมูลนำเข้า",0) ,array("การออกแบบหน้าจอป้อนข้อมูล" ,0) , array(1,2,3,4,5)));
  
  
  
  $QUESTION_POST  = array( 
    array("การนำข้อมูลเข้าสู่ระบบ มีอะไรบ้าง " , array("ข้อมูลนำเข้าแบบย่อย, ข้อมูลนำเข้าแบบกลุ่ม",0) , array("ข้อมูลนำเข้าแบบเดียว, ข้อมูลนำเข้าแบบคู่",0) , array("ข้อมูลนำเข้าแบบกลุ่ม, ข้อมูลนำเข้าแบบออนไลน์ ",1) ,array("ข้อมูลนำเข้าแบบผสม" ,0) , array(1,2,3,4,5) ,  array("2_1.png")),
    array("การตรวจสอบส่วนต่อประสาน (Interface Validation) คืออะไร." , array("ประเมิน, ตรวจสอบต้นแบบ, และนำมาปรับปรุง",1) , array("ทำความเข้าใจออกแบบและประเมิน" , 0) , array("การแสดงผลลัพธ์หรือข้อมูลให้กับผู้ใช้ผ่านทางหน้าจอ",0) ,array("การวิเคราะห์และสร้างแบบจำลองส่วนต่อประสาร" ,0), array(1,2,3,4,5)),
    array("ข้อใดไม่ใช่ปัจจัยการวัดความสามารถในการใช้งานของผู้ใช้" , array("เวลาในการเรียนรู้",0) , array("ความเร็วการปฏิบัติการ" , 0) , array("อัตราความผิดพลาด",0) ,array("เพิ่มปริมาณงาน" ,1) , array(1,2,3,4,5)),
    array("ข้อใดไม่ใช่ลักษณะของผู้ใช้ จากการวิเคราะห์ผู้ใช้" , array("ผู้ใช้หน้าใหม่",0) , array("ผู้ใช้ชั่วคราว" , 1) , array("ผู้ใช้ที่มีประสบการณ์และความรู้ระดับกลาง",0) ,array("ผู้ใช้งานเป็นประจำหรือผู้เชี่ยวชาญ" ,0), array(1,2,3,4,5)),
    array("ข้อได้ไม่ใช่แบบจำลองการวิเคราะห์และการออกแบบส่วนต่อประสาน" , array("แบบจำลองการออกแบบ",0) , array("แบบจำลองจิตใจหรือการรับรู้ระบบ" ,0) , array("แบบจำลองผู้ตรวจสอบ",1) ,array("แบบจำลองการนำไปปฏิบัติ" ,0) , array(1,2,3,4,5) ),
    array("ข้อใดไม่ใช้กฎของ Shneiderman & Plaisant" ,array("สร้างปุ่มทางลัด และวางคำโต้ตอบใกล้กับข้อความ",0) , array("นำผลป้อนกลับไปปรับปรุงการออกแบบและมีการทำงานแบบยกเลิก" , 0) , array("นำผลป้อนกลับไปปรับปรุงการออกแบบและมีการทำงานแบบยกเลิก ",0) ,array("มีการจัดลำดับชั้นส่วนต่อประสานให้สลับซับซ้อน" ,1) ,  array(1,2,3,4,5)),
    array("ข้อใดไม่ใช่ทักษะของนักเขียนโปรแกรมที่ดี" , array("ทักษะด้านภาษาคอมพิวเตอร์ที่หลากหลาย",0) , array("ทักษะการคัดลอกและแก้ไขโปรแกรม" , 1) , array("ทักษะการเขียนคำอธิบายของโปรแกรม",0) ,array("ทักษะการวิเคราะห์และแก้ไขปัญหา" ,0) ,  array(1,2,3,4,5)),
    array("ข้อใดไม่ใช่การออกแบบเครื่องมือนำทาง" , array("แถบแสดงสถานะการทำงาน  ",1) , array("แถบเครื่องมือนำทาง" , 0) , array("การเชื่อมโยงหลายมิติ ",0) ,array("มุมมองต้นไม้หรือมุมมองเค้าโครง" ,0),  array(1,2,3,4,5)),
    array("ข้อใดไม่ใช่หลักเกณฑ์การออกแบบข้อมูลส่งออก"  , array("ข้อมูลส่งออกผ่านหน้าจอหรือรายงาน",0) , array("มีความสวยงามหลากหลาย" , 1) , array("เตรียมข้อมูลและความถี่ของการปรับปรุงข้อมูลให้ทันสมัย",0) ,array("มีข้อมูลตรงตามที่ผู้ใช้ต้องการ" ,0), array(1,2,3,4,5) ),
    array("ภาพนี้เป็นการออกแบบที่เหมาะสมกับข้อมูลแบบใด"  , array("กรณีมีให้เลือกมากกว่า 1 รายการ",0) , array("  กรณีที่มีพื้นที่แสดงข้อมูลจำกกัด" , 1) , array("กรณีให้ผู้ใช้พิมพ์ข้อความหรือทางเลือก",0) ,array("กรณีผู้ใช้ปรับค่าของข้อมูลได้ " ,0) , array(1,2,3,4,5)));
  
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
    <input type="hidden" name="test_ex" value="4" />
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
          
    
          <!-- Equal-width multi-row -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">แบบทดสอบ<?=$_pre?>หน่วยที่ 4</h3>
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

