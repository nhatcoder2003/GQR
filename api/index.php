<?php
error_reporting(0);
include_once('./QRcode.php');


$content = $_GET['c'] ? $_GET['c'] : 'https://nhatcoder2k3.name.vn/';
$size = $_GET['s'] ? $_GET['s'] : 7;
$background = $_GET['bc']?explode(',',$_GET['bc']):array(255, 255, 255, 0);
$foreground = $_GET['fc']?explode(',',$_GET['fc']):array(0, 0, 0, 0);

header("Content-type: image/jpg");
echo Toplib_Lib_QRcode::png($content,false,QR_ECLEVEL_L,$size,1,false,$background,$foreground);
