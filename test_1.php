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
  array("ข้อใดไม่ใช่ระบบปฏิบัติการที่นำมาใช้บนอุปกรณ์พกพาประเภท Smartphone." , array("Ubuntu",1) , array("Iphone os",0) , array("Android",0) ,array("Symbian" ,0) , array(1,2,3,4,5)),
  array("ข้อใดเป็นเทคโนโลยีการเชื่อมต่อข้อมูลไร้สายทั้งหมด." , array("Wi-Fi , IP",0) , array("Wi-Fi ,Bluetooth" , 1) , array("3G ADSL",0) ,array("3G Ethernet" ,0), array(1,2,3,4,5)),
  array("Face-to-Face คือการสื่อสารแบบใด." , array("การสื่อสารกันแบบเผชิญหน้า",1) , array("การสื่อสารกันแบบใช้เสียง" , 0) , array("การสื่อสารแบบใช้อุปกรณ์อิเล็กทรอนิกส์",0) ,array("การสื่อสารผ่านคอมพิวเตอร์" ,0) , array(1,2,3,4,5)),
  array("Computer Mediated Communication คืออะไร" , array("การสื่อสารกันแบบเผชิญหน้า",0) , array("การสื่อสารกันแบบใช้เสียง" , 0) , array("การสื่อสารแบบใช้อุปกรณ์อิเล็กทรอนิกส์",1) ,array("การสื่อสารผ่านคอมพิวเตอร์" ,0), array(1,2,3,4,5)),
  array("Android Inc. ถูกพัฒนาโดยบริษัทใด" , array("บริษัทGoogle",1) , array("บริษัทAndroid" , 0) , array("บริษัทSamsung",0) ,array("บริษัทMicrosoft" ,0) , array(1,2,3,4,5) ),
  array("Windows Phone ถูกพัฒนาโดยบริษัทใด" ,array("บริษัทGoogle",0) , array("บริษัทAndroid" , 0) , array("บริษัทSamsung",0) ,array("บริษัทMicrosoft" ,1) ,  array(1,2,3,4,5)),
  array("ระบบปฏิบัติการ iOS รองรับอุปกรณ์พกพาชนิดใด" , array("Iphone",1) , array("Tablet" , 0) , array("Smartphone",0) ,array("Notebook" ,0) ,  array(1,2,3,4,5)),
  array("ข้อใดไม่ใช่อุปกรณ์พกพา " , array("Tablet",01) , array("วิทยุ" , 0) , array("โทรศัพท์",0) ,array("คอมพิวเตอร์ PC" ,1),  array(1,2,3,4,5)),
  array("Google Play Store เป็น Application ของระบบปฏิบัติการใด"  , array("Android",1) , array("SymbianLtd" , 0) , array("Research In Motion",0) ,array("Google" ,0), array(1,2,3,4,5) ),
  array("ระบบปฏิบัติการ Android ไม่รองรับอุปกรณ์พกพาชนิดใด"  , array("iPhone",1) , array("Tablet" , 0) , array("Smartphone",0) ,array("Notebook" ,0) , array(1,2,3,4,5)));



$QUESTION_POST  = array( 
  array("ข้อใดไม่ใช่ระบบปฏิบัติการที่นำมาใช้บนอุปกรณ์พกพาประเภท Smartphone." , array("Ubuntu",1) , array("Iphone os",0) , array("Android",0) ,array("Symbian" ,0) , array(1,2,3,4,5)),
  array("ข้อใดเป็นเทคโนโลยีการเชื่อมต่อข้อมูลไร้สายทั้งหมด." , array("Wi-Fi , IP",0) , array("Wi-Fi ,Bluetooth" , 1) , array("3G ADSL",0) ,array("3G Ethernet" ,0), array(1,2,3,4,5)),
  array("Face-to-Face คือการสื่อสารแบบใด." , array("การสื่อสารกันแบบเผชิญหน้า",1) , array("การสื่อสารกันแบบใช้เสียง" , 0) , array("การสื่อสารแบบใช้อุปกรณ์อิเล็กทรอนิกส์",0) ,array("การสื่อสารผ่านคอมพิวเตอร์" ,0) , array(1,2,3,4,5)),
  array("Computer Mediated Communication คืออะไร" , array("การสื่อสารกันแบบเผชิญหน้า",0) , array("การสื่อสารกันแบบใช้เสียง" , 0) , array("การสื่อสารแบบใช้อุปกรณ์อิเล็กทรอนิกส์",1) ,array("การสื่อสารผ่านคอมพิวเตอร์" ,0), array(1,2,3,4,5)),
  array("Android Inc. ถูกพัฒนาโดยบริษัทใด" , array("บริษัทGoogle",1) , array("บริษัทAndroid" , 0) , array("บริษัทSamsung",0) ,array("บริษัทMicrosoft" ,0) , array(1,2,3,4,5) ),
  array("Windows Phone ถูกพัฒนาโดยบริษัทใด" ,array("บริษัทGoogle",0) , array("บริษัทAndroid" , 0) , array("บริษัทSamsung",0) ,array("บริษัทMicrosoft" ,1) ,  array(1,2,3,4,5)),
  array("ระบบปฏิบัติการ iOS รองรับอุปกรณ์พกพาชนิดใด" , array("Iphone",1) , array("Tablet" , 0) , array("Smartphone",0) ,array("Notebook" ,0) ,  array(1,2,3,4,5)),
  array("ข้อใดไม่ใช่อุปกรณ์พกพา " , array("Tablet",01) , array("วิทยุ" , 0) , array("โทรศัพท์",0) ,array("คอมพิวเตอร์ PC" ,1),  array(1,2,3,4,5)),
  array("Google Play Store เป็น Application ของระบบปฏิบัติการใด"  , array("Android",1) , array("SymbianLtd" , 0) , array("Research In Motion",0) ,array("Google" ,0), array(1,2,3,4,5) ),
  array("ระบบปฏิบัติการ Android ไม่รองรับอุปกรณ์พกพาชนิดใด"  , array("iPhone",1) , array("Tablet" , 0) , array("Smartphone",0) ,array("Notebook" ,0) , array(1,2,3,4,5)));

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
    <input type="hidden" name="test_ex" value="1" />
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
          
    
          <!-- Equal-width multi-row -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">แบบทดสอบ<?=$_pre?>หน่วยที่ 1</h3>
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

