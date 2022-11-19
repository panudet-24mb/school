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
  array("ระบบแอนดรอยด์ จะใช้ภาษาใดเป็นหลัก" , array("ภาษาซี",0) , array("ภาษาจาวา",1) , array("ภาษาอังกฤษ",0) ,array("Php" ,0) , array(1,2,3,4,5) ),
  array("เครื่องมือที่ใช้ในการพัฒนาแอนดรอยด์ ใช้อะไรเป็นหลัก" , array("โค้ด",0) , array("เอกสาร" , 0) , array("แอนดรอยสตูดิโอ",0) ,array("ไม่มีข้อใดถูก" ,1), array(1,2,3,4,5)),
  array("ข้อใดไม่ใช่ขั้นตอนการพัฒนาแอพพลิเคชั่น" , array("การศึกษาความต้องการ",0) , array("การออกแบบ" , 0) , array("การสร้างแอพพลิเคชั่น",0) ,array("การจำหน่ายแอพ" ,1) , array(1,2,3,4,5)),
  array("Android คืออะไร" , array("เป็นระบบปฎิบัติการที่มีพื้นฐานอยู่บนลินุกซ์ถูกออกแบบมาสำหรับอุปกรณ์ที่ใช้จอสัมผัส",1) , array("เป็นระบบปฎิบัติการที่มีโนเกียเป็นหุ้นส่วนใหญ่" , 0) , array("เป็นระบบปฏิบัติการสำหรับสมาร์ทโฟนของ Apple",0) ,array("เป็นระบบปฏิบัติการที่มีการรักษาความปลอดภัยสูงนิมยมใช้งานในเชิงธุรกิจหลัก" ,0), array(1,2,3,4,5)),
  array("ชื่อของชุดพัฒนาโปรแกรมของแอนดรอยด์มีชือว่าอะไร" , array("Android SKD",0) , array("Android SDK" , 1) , array("Android DKS",0) ,array("Android DSK " ,0) , array(1,2,3,4,5) ),
  array("การพัฒนาโปรแกรมด้วย Eclipse เป็นโปรแกรมสำหรับการพัฒนาซอฟต์แวร์ภาษาใด" ,array("ภาษา C",0) , array("HTML" , 0) , array("JAVA",1) ,array("PHP" ,0) ,  array(1,2,3,4,5)),
  array("หน่วยประมวลผล CPU เปรียบเสมือนส่วนใดของมนุษย์" , array("แขน",0) , array("หัวใจ" , 1) , array("สมอง",0) ,array("ขา " ,0) ,  array(1,2,3,4,5)),
  array("การออกแบบและพัฒนาแอพพลิเคชั่นสำหรับอุปกรณ์เคลื่อนที่นั้นผู้พัฒนาจำเป็นต้องศึกษาคุณสมบัติของอุปกรณ์ในแต่ละประเภท ยกเว้นข้อใด" , array("ขนาดตัวเครื่อง",0) , array("ราคา" , 1) , array("หน่วยประมวลผล",0) ,array("หน่วยเก็บข้อมูล " ,0),  array(1,2,3,4,5)),
  array("คุณสมบัติของ Android Dev Tool เป็บแบบใด"  , array("Visually Design",1) , array("SymbianLtd" , 0) , array("Research In Motion",0) ,array("Google" ,0), array(1,2,3,4,5) ),
  array("แอนดรอยด์ เปิดตัวเป็นทางการเมื่อวันที่เท่าไหร่"  , array("28 พฤษภาคม 2550",1) , array("4 พฤษภาคม 2550" , 0) , array("5 พฤษภาคม 2550",0) ,array("6 พฤษภาคม 2550" ,0) , array(1,2,3,4,5)));



$QUESTION_POST  = array( 
  array("ส่วนในกรอบสีแดงคือส่วนใด ." , array("System variable ",1) , array("variable System",0) , array("variable ",0) ,array("System" ,0) , array(1,2,3,4,5) ,  array("2_1.png")),
  array("แอนดรอยด์สตูดิโอ ถูกพัฒนาโดยอะไร." , array("IOS",0) , array("Microsoft" , 0) , array("Google",1) ,array("Window" ,0), array(1,2,3,4,5)),
  array("เวอร์ชันที่ควรใช้ติดตั้งการพัฒนา คือเวอร์ชันใด." , array("2.3.2",1) , array("2.3.4" , 0) , array("2.3.6",0) ,array("2.3.1" ,0) , array(1,2,3,4,5)),
  array("ขั้นตอนใดคือเป้าหมายของการค้นหาข้อผิดพลาดของแอพพลิเคชั่น" , array("การศึกษาความต้องการ",0) , array("ออกแบบ" , 0) , array("การทดสอบ",1) ,array("การสร้างแอพพลิเคชัน" ,0), array(1,2,3,4,5)),
  array("การพัฒนาแอพพลิเคชัน มีกี่ขั้นตอน" , array("3 ขั้นตอน",0) , array("4 ขั้นตอน" , 1) , array("5 ขั้นตอน",0) ,array("10 ขั้นตอน" ,0) , array(1,2,3,4,5) ),
  array("Configure ใช้สำหรับอะไร" ,array("สำหรับเขียนโค้ด",0) , array("สำหรับสร้างแอพพลิเคชัน" , 0) , array("สำหรับตั้งค่าต่างๆ ",1) ,array("สำหรับออกแบบ" ,0) ,  array(1,2,3,4,5)),
  array("Configure มีกี่หน้าต่างย่อย" , array("1 หน้าต่าง",0) , array("6 หน้าต่าง" , 0) , array("8 หน้าต่าง",0) ,array("3 หน้าต่าง" ,1) ,  array(1,2,3,4,5)),
  array("การทดสอบการติดตั้งสำหรับ Window 10 ข้อใดถูกต้อง" , array("คลิกขวา > พิมพ์  run > cmd > กด Enter  ",1) , array("คลิกขวา > พิมพ์   run > cmd > " , 0) , array("พิมพ์  run > cmd > กด Enter ",0) ,array("คลิกขวา > พิมพ์  run " ,0),  array(1,2,3,4,5)),
  array("การทดสอบการติดตั้งสำหรับ Window 7 ข้อใดถูกต้อง"  , array("คลิก Start > พิมพ์ cmd ",0) , array("คลิก Start > พิมพ์ cmd > กด Enter" , 0) , array("พิมพ์ cmd > กด Enter",0) ,array("ไม่มีข้อใดถูกต้อง" ,1), array(1,2,3,4,5) ),
  array("ภาษา Java ถูกพัฒนาโดยบริษัทใด"  , array(" Sun Microsystems",1) , array("  Microsystems" , 0) , array("Unix",0) ,array("Notebook" ,0) , array(1,2,3,4,5)));


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
    <input type="hidden" name="test_ex" value="2" />
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
          
    
          <!-- Equal-width multi-row -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">แบบทดสอบ<?=$_pre?>หน่วยที่ 2</h3>
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
          if ($index == 0 && $is_pre_or_post == "post"){
            echo '<img src="assets/test/2_1.png" width="30%" height="30%" >     </br>     </br>' ;
        }
       
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

