<?php 



$comment = $_POST["comment"];


//save on txt  append
$myfile = fopen("comment.txt", "a") or die("Unable to open file!");
$txt = '<br>'.$comment .' เวลา ' .$date = date('Y-m-d H:i:s');
fwrite($myfile, $txt);
fclose($myfile);

echo "บันทึกข้อมูลเรียบร้อยแล้ว";