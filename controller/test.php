<?php
    error_reporting(E_ERROR | E_PARSE);
?>

<?php 

$is_pre_or_post= $_POST['is_pre_or_post'];
$test_ex = $_POST["test_ex"];

$_pre = "ก่อนเรียน" ;
if ($is_pre_or_post == "post") {
    $is_pre_or_post = "post";
    $_pre = "หลังเรียน";
} else {
    $is_pre_or_post = "pre";
}
$total_score = 0; // คะแนนเริ่มต้น
for ($i=0; $i < 10 ; $i++) { // การไล่ array ข้อแรก ไปยันข้อสุดท้าย
  $Q[$i] = $_POST['Q'.$i]; // เช็คค่าของแต่ละข้อ
  if ($Q[$i] == 1) { // ถ้าเกิดตอบถูก
    $total_score++; // คะแนนก็จะบวก
  }
}



?>
<script type="text/javascript">
alert("คุณได้คะแนน <?php echo $total_score; ?> คะแนน เต็ม 10 ");
window.location.href = "../test_<?=$test_ex?>.php?is_pre_or_post=<?php echo $is_pre_or_post; ?>&show_ans=true&score=<?=$total_score?>";

</script>
