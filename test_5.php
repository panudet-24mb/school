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
  array("อุปกรณ์รับข้อมูลแบ่งออกเป็นกี่ประเภท" , array("2 ประเภท",0) , array("3 ประเภท",0) , array("4 ประเภท",0) ,array("5 ประเภท" ,0) , array(1,2,3,4,5) ),
  array("ข้อใดไม่ใช่หน่วยแสดงผล" , array("จอภาพ",0) , array("กล้องถ่ายรูป" , 1) , array("เครื่องพิมพ์",0) ,array("ลำโพง" ,0), array(1,2,3,4,5)),
  array("อุปกรณ์ใดจัดอยู่ในหน่วยแสดงผล" , array(" จอภาพ ลำโพง",1) , array("แป้นพิมพ์ จอภาพ" , 0) , array("ลำโพง แป้นพิมพ์",0) ,array("ซีดี ฮาร์ดดิสก์" ,0) , array(1,2,3,4,5)),
  array("หน่วยความจำหลักมีกี่ประเภท" , array("1 ประเภท",0) , array("2 ประเภท" ,1) , array("3 ประเภท",1) ,array("4 ประเภท" ,0), array(1,2,3,4,5)),
  array("อุปกรณ์คอมพิวเตอร์ต่อไปนี้ จัดเป็นหน่วยรับเข้าและส่งออก" , array("จอภาพ",1) , array("เมาส์" , 0) , array("ฮาร์ดดิสก์",0) ,array("ซีดี" ,0) , array(1,2,3,4,5) ),
  array("อุปกรณ์ในภาพ จัดอยู่ในหน่วยใด" ,array("หน่วยประมวลผลกลาง",0) , array("หน่วยความจำรอง" , 1) , array("หน่วยแสดงผล",0) ,array("หน่วยรับข้อมูล" ,0) ,  array(1,2,3,4,5)),
  array("อุปกรณ์ในภาพจัดอยู่ในหน่วยแสดงผลใด" , array("เป้าหมาย",0) , array("ตัวดำเนินการ" , 0) , array("ระเบียบวิธี",0) ,array("ความเป็นสากล " ,1) ,  array(1,2,3,4,5)),
  array("อุปกรณ์ในภาพจัดอยู่ในหน่วยแสดงผลใด" , array("หน่วยประมวลผลกลาง",0) , array("หน่วยรับข้อมูล" , 0) , array("หน่วยความจำรอง",0) ,array("หน่วยแสดงผล " ,1),  array(1,2,3,4,5)),
  array("อุปกรณ์ใดคือหัวใจหลักของคอมพิวเตอร์"  , array("จอภาพ ",0) , array("เครื่องพิมพ์" , 0) , array("ซีพียู",1) ,array("เมาส์" ,0), array(1,2,3,4,5) ),
  array("หน่วยรับข้อมูลทำหน้าที่อะไร"  , array("รับข้อมูลหรือคำสั่งต่างๆ จากผู้ใช้ผ่านอุปกรณ์รับข้อมูล",1) , array("รับข้อมูลหรือคำสั่งต่างๆ จากโปรแกรม" , 0) , array("รับข้อมูลหรือคำสั่งจากเจ้าของคอมพิวเตอร์",0) ,array("รับข้อมูลหรือคำสั่ง " ,0) , array(1,2,3,4,5)));



$QUESTION_POST  = array( 
  array("การแสดงผลทางจอภาพเรียกอีกอย่างว่าอะไร " , array("Memory",0) , array("Monitor",1) , array("Hard Copy ",1) ,array("Soft Copy" ,0) , array(1,2,3,4,5) ,  array("2_1.png")),
  array("การทำงานของคอมพิวเตอร์แบ่งออกเป็นกี่ส่วน" , array("2 ส่วน",0) , array("3 ส่วน" , 1) , array("4 ส่วน",0) ,array("5 ส่วน" ,0), array(1,2,3,4,5)),
  array("ข้อใดคืออุปกรณ์การป้อนข้อมูล" , array("จอภาพ",0) , array("เมาส์" , 1) , array("ลำโพง",0) ,array("ซีพียู" ,0) , array(1,2,3,4,5)),
  array("ระบบปฏิบัติการถูกพัฒนาขึ้นมาเพื่อควบคุมสิ่งใด" , array("หน่วยความจำ",0) , array("ความปลอดภัย" , 0) , array("ฮาร์ดแวร์",1) ,array("ผู้ใช้" ,0), array(1,2,3,4,5)),
  array("ข้อใดคือหน้าที่ของระบบปฏิบัติการ" , array("จัดสรรทรัพยากรของระบบ",1) , array("จัดการด้านความปลอดภัย" ,0) , array("ควบคุมฮาร์ดแวร์",0) ,array("จัดการหน่วยความจำ" ,0) , array(1,2,3,4,5) ),
  array("ข้อใดเป็นระบบปฏิบัติการแบบฝัง" ,array("Dos",1) , array("Linux" , 0) , array("Ubuntu ",0) ,array("Sysbian OS" ,0) ,  array(1,2,3,4,5)),
  array("อุปกรณ์ชี้ตำแหน่งที่ได้รับความนิยมคือข้อใด" , array("เมาส์",0) , array("ออปติคอลเมาส์" , 1) , array("ลูกกลมควบคุม",0) ,array("จอยสติ๊ก" ,0) ,  array(1,2,3,4,5)),
  array("อุปกรณ์กวาดข้อมูล แบ่งออกเป็นกี่ประเภท" , array("2 ประเภท  ",0) , array("3 ประเภท" , 1) , array("4 ประเภท ",0) ,array("6 ประเภท" ,0),  array(1,2,3,4,5)),
  array("อุปกรณ์รับข้อมูล แบ่งออกเป็นกี่ประเภท"  , array("4 ประเภท",1) , array("6 ประเภท" , 0) , array("10 ประเภท",0) ,array("15 ประเภท" ,0), array(1,2,3,4,5) ),
  array("อุปกรณ์รับข้อมูล เรียกอีกอย่างว่าอะไร"  , array("Input",1) , array("  Output" , 0) , array("Linux",0) ,array("System " ,0) , array(1,2,3,4,5)));

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
    <input type="hidden" name="test_ex" value="5" />
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper">
          
    
          <!-- Equal-width multi-row -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">แบบทดสอบ<?=$_pre?>หน่วยที่ 5</h3>
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

          if ($index == 6 && $is_pre_or_post == "pre"){
            echo '<img src="assets/test/5_1.jpg" width="30%" height="30%" >     </br>     </br>' ;
        }
        if ($index == 7 && $is_pre_or_post == "pre"){
            echo '<img src="assets/test/5_2.jpg" width="30%" height="30%" >     </br>     </br>' ;
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

