<?php
//error_reporting(E_PARSE | E_ERROR);
use Ajaxray\PHPWatermark\Watermark;

include 'vendor/autoload.php';

$files = glob('pdf/*.{PDF,pdf}', GLOB_BRACE);

 foreach ($files as $file) {
$base = basename($file);
$pass= explode(' ', substr($base, 0, strpos($base, '.')));
//print_r($pass);
$TEST=$pass[0];
//print_r($pass);
 

$watermark = new Watermark(__DIR__ . '/pdf/'.$TEST.'.pdf');

// Watermark with text
$watermark->setFont('Arial');
$watermark->setFontSize(18);
$watermark->setStyle('RED');
$watermark->setRotate(345);
$watermark->setOffset(20, 60);
$watermark->setPosition(Watermark::POSITION_CENTER);

date_default_timezone_set("Africa/Nairobi");
//echo "The time is " . date("h:i:sa");
$d=mktime(11, 14, 54, 8, 12, 2014);
//echo "Created date is " . date("Y-m-d h:i:sa", $d);
$today = date("Y-m-d h:i:sa"); 
$text = "Invoice From Portal". date("Y-m-d h:i:sa");
$watermark->withText($text, __DIR__ . '/stamped/'.$TEST.'.pdf');



if (!unlink("C:/xampp/htdocs/stamp/php-watermark-master/stamp/pdf/".$TEST.".pdf")) 
{  
        echo ("$TEST cannot be deleted due to an error");  
    }  
    else {  
        echo ("$TEST has been successifly been stamped");  
 } }
// Watermarking with image
//$watermark->setPosition(Watermark::POSITION_TOP_RIGHT);
//$watermark->setOffset(50, 50);
//$watermark->setOpacity(.2);
//$watermark->setTiled();
//$watermark->withImage(__DIR__ . '/img/php.png', __DIR__ . '/stamped/'.$TEST.'.pdf');
