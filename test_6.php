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
  array("คีย์ฟิลด์(key field) เป็นฟิลด์ที่ใช้อ้างอิงข้อมูลในแต่ละระเบียนมีคุณสมบัติอย่างไร" , array("เป็นฟิลด์ที่มีค่าซ้ำกับฟิลด์ในระเบียนอื่น",0) , array("เป็นฟิลด์ที่มีค่าซ้ำกับฟิลด์ในระเบียนเดียวกัน",0) , array("เป็นฟิลด์ที่มีค่าไม่ซ้ำกับฟิลด์ในระเบียนอื่น",1) ,array("เป็นฟิลด์ที่มีค่าไม่ซ้ำกับฟิลด์ในระเบียนเดียวกัน" ,0) , array(1,2,3,4,5) ),
  array("แฟ้มข้อมูลต่อไปนี้แฟ้มข้อมูลใดที่มีค่าคงที่ " , array("แฟ้มข้อมูลหลัก",0) , array("แฟ้มข้อมูลรายการเปลี่ยนแปลง" , 0) , array("แฟ้มข้อมูลตาราง",1) ,array("แฟ้มข้อมูลเรียงลำดับ" ,0), array(1,2,3,4,5)),
  array("ในโครงสร้างแฟ้มข้อมูลแบบลำดับ การจัดเก็บข้อมูลแบบไม่มีระเบียนจะมีลักษณะอย่างไร" , array("เป็นการจัดเรียงระเบียนจากน้อยไปหามากตามค่าฟิลด์ใดฟิลด์หนึ่ง",0) , array("เป็นการจัดเรียงระเบียนจากมาไปหาน้อยตามค่าฟิลด์ใดฟิลด์หนึ่ง" , 1) , array("เป็นการจัดเรียงระเบียนจากน้อยไปหามากตามค่าคีย์ฟิลด์",0) ,array("เป็นการจัดเรียงระเบียนโดยไม่คำนึงถึงการเรียงระเบียนตามคีย์ฟิลด์ข้อมูล" ,0) , array(1,2,3,4,5)),
  array("หน่วยความจำสำรองใดที่เมื่อทำการบันทึกข้อมูลลงไปแล้ว จะไม่สามารถนำกลับมาบันทึกข้อมูลใหม่ได้" , array("ไมโครดิสก์	",0) , array("ซีดี-รอม" ,1) , array("แมคนิโต-ออปติคอลดิสก์",0) ,array("พีซีเอ็มซีไอเอ" ,0), array(1,2,3,4,5)),
  array("ข้อใดคือหน้าที่ของหน่วยความจำสำรอง" , array("เก็บข้อมูลเพื่อไว้ใช้ได้ในอนาคต",0) , array("เก็บข้อมูลและโปรแกรมเอาไว้อย่างถาวร" , 0) , array("ใช้ทำเป็นหน่วยความจำเสมือน",0) ,array("ถูกทุกข้อ" ,1) , array(1,2,3,4,5) ),
  array("โครงสร้างแฟ้มข้อมูลแบบลำดับตามดัชนีมีการจัดเรียงของระเบียนลักษณะอย่างไร" ,array("จัดเรียงลำดับอย่างต่อเนื่องตามลำดับ การบันทึกข้อมูล",0) , array("จัดเรียงลำดับตามค่าคีย์ฟิลด์" , 1) , array("จัดเรียงโดยมีส่วนประกอบคือ ดัชนี (index) ของแฟ้มข้อมูล และข้อมูลหลัก (data area)",0) ,array("ค่าคีย์ฟิลด์ของแต่ละระเบียนสามารถที่จะซ้ำกับค่าคีย์ในระเบียนอื่น ๆ" ,0) ,  array(1,2,3,4,5)),
  array("ข้อใด ไม่ใช่ ความสำคัญของระบบฐานข้อมูล" , array("ลดการเก็บข้อมูลที่ซ้ำซ้อน",0) , array("รักษาความถูกต้องของข้อมูล" , 0) , array("สามารถใช้ข้อมูลร่วมกันได้",0) ,array("ถูกทุกข้อ " ,1) ,  array(1,2,3,4,5)),
  array("ข้อใดต่อไปนี้เป็นความหมายของระบบจัดการฐานข้อมูลหรือDBMSที่ถูกต้องที่สุด" , array("ระบบโปรแกรมสร้างฐานข้อมูล",1) , array("ระบบโปรแกรมเรียกใช้ข้อมูลในฐานข้อมูล" , 0) , array("ซอฟต์แวร์ที่ช่วยในการสร้างและติดตามปรับปรุงความสัมพันธ์ของข้อมูลในฐานข้อมูล แทนการปฏิบัติงานของมนุษย์",0) ,array("โปรแกรมประยุกต์นี้ใช้กับงานบริหารโดยเฉพาะ " ,0),  array(1,2,3,4,5)),
  array("การดูแลการใช้งานให้กับผู้ใช้ในการติดต่อกับตัวจัดการระบบแฟ้มข้อมูลเป็นหน้าที่ของใคร"  , array("ผู้บริหารขององค์การ	 ",0) , array("โปรแกรมเมอร์" , 0) , array("โปรแกรมเมอร์",1) ,array("ฝ่ายบริการของศูนย์คอมพิวเตอร์" ,0), array(1,2,3,4,5) ),
  array("ลักษณะฐานข้อมูลที่มีความสัมพันธ์แบบ m ต่อ n เป็นลักษณะของฐานข้อมูลแบบใด"  , array("แบบเครือข่าย		",1) , array("แบบลำดับชั้น" , 0) , array("แบบสัมพันธ์		",0) ,array("แบบผสม " ,0) , array(1,2,3,4,5)));



$QUESTION_POST  = array( 
  array("อุปกรณ์ในข้อใดที่นิยมใช้เก็บข้อมูลสำหรับเครื่องคอมพิวเตอร์ทั่วๆไป " , array("Diskette",0) , array("CD-ROM",1) , array("Tape",0) ,array("VCD" ,0) , array(1,2,3,4,5) ,  array("2_1.png")),
  array("อุปกรณ์อิเล็กทรอนิกส์ เป็นอุปกรณ์หน่วยใด" , array("หน่วยประมวลผล",1) , array("หน่วยแสดงผล" , 0) , array("หน่วยความจำ",0) ,array("หน่วยรับข้อมูล" ,0), array(1,2,3,4,5)),
  array("หน่วยความจำแบ่งได้เป็นกี่ประเภท" , array("4 ประเภท",0) , array("3 ประเภท" , 0) , array("2 ประเภท",1) ,array("1 ประเภท" ,0) , array(1,2,3,4,5)),
  array("หน่วยความจำเป็นทำหน้าที่อะไร" , array("ทำหน้าที่เก็บข้อมูลและโปรแกรมต่าง ๆ",1) , array("ทำหน้าที่แสดงผลลัพธ์จากคอมพิวเตอร์" , 0) , array("ทำหน้าที่แสดงผลลัพธ์จากคอมพิวเตอร์",0) ,array("ทำหน้าที่รับข้อมูลจากผู้ใช้เข้าสู่หน่วยความจำหลัก ปัจจุบันมีสื่อต่าง ๆ" ,0), array(1,2,3,4,5)),
  array("รอม ROMเป็นหน่วยความจำประเภทใด" , array("เป็นหน่วยความจำประเภทไม่สามารถลบเลือนได้",1) , array("เป็นหน่วยความจำประเภทสามารถลบเลือนได้" ,0) , array(" เป็นหน่วยความจำทุกประเภทถูกทุกข้อ",0) ,array("ถูกทุกข้อ" ,0) , array(1,2,3,4,5) ),
  array("เเรม  RAM คืออะไร" ,array("เมโมรี่แบบธรรมดาที่สุด ซึ่งความเร็วขึ้นอยู่กับค่า Access Tim",0) , array("เมโมรี่แบบไม่ธรรมดาที่สุด ซึ่งความเร็วขึ้นอยู่กับค่า Access Tim" , 0) , array("เมโมรี่แบบธรรมดาที่สุด ซึ่งความช้าขึ้นอยู่กับค่า Access Tim ",0) ,array("ไม่มีข้อใดถูก" ,1) ,  array(1,2,3,4,5)),
  array("รอม ROM: Read-only Memory โดยทั่วไปจะใช้เก็บข้อมูลที่ไม่ต้องมีการแก้ไขอีกแล้ว เช่นข้อใด" , array("ใช้เก็บโปรแกรมของคอมพิวเตอร์ที่ทำงานเฉพาะด้าน",0) , array("ใช้เก็บโปรแกรมการทำงานสำหรับเครื่องคิดเลข" , 0) , array("เก็บโปรแกรมไบออส (Basic Input output System : BIOS)   ",1) ,array("ถูกต้องทุกข้อ" ,0) ,  array(1,2,3,4,5)),
  array("ข้อมูลส่วนใดที่มีหน้าที่ในการเก็บรวมข้อมูลหลายๆไฟล์ที่เกี่ยวข้องมารวมเข้าด้วยกัน " , array("ฟิลด์   ",0) , array("เรคคอร์ด " , 0) , array("ฐานข้อมูล	",1) ,array("ไฟล์ " ,0),  array(1,2,3,4,5)),
  array("ข้อใดคือหน่วยความจำหลัก"  , array(" แรม (RAM)	",0) , array("รอม (ROM)" , 0) , array("lash Bios",0) ,array("ถูกทั้งข้อ 1 และ 2" ,1), array(1,2,3,4,5) ),
  array("ข้อใดคือคุณสมบัติของคอมพิวเตอร์"  , array("ความน่าเชื่อถือ",0) , array("  ก้าวทันเทคโนโลยี" , 0) , array("ความเร็ว",0) ,array("ถูกทั้งข้อ 1 และ 3 " ,1) , array(1,2,3,4,5)));

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
    <input type="hidden" name="test_ex" value="6" />
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
          
    
          <!-- Equal-width multi-row -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">แบบทดสอบ<?=$_pre?>หน่วยที่ 6</h3>
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
          ';

         
echo' 

        
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

