<?php

require './vendor/autoload.php';//

// die($_POST['eid']);

// Set the content type header
header('Content-Type: image/png; charset=utf8');

// Load the image
$image = imagecreatefrompng($_POST['eid']);
$image_width = imagesx($image); // Get the width of the image

// Set the font and text color
$font = 'bootstrap/font/Cairo/static/Cairo-Regular.ttf';
// Path to your font file
$textColor = imagecolorallocate($image, 5, 104, 57); // White color

// Set the text to be written on the image
// Render Arabic text using I18N_Arabic
$arabicText = $_POST['formSYO'];
$arabic = new \ArPHP\I18N\Arabic();
$renderedText = $arabic->utf8Glyphs($arabicText);

// Font size and angle
$fontSize = 30;
$angle = 0;

// Calculate text width and height
$bbox = imagettfbbox($fontSize, $angle, $font, $renderedText);
$textWidth = $bbox[2] - $bbox[0];
$textHeight = $bbox[7] - $bbox[1]; // In case you also want to vertically center


// Set the position where the text will be written to center it
$x = (int) round(($image_width - $textWidth) / 2);
$y = 780;
// You can adjust this similarly for vertical centering



// Write the text on the image
imagettftext($image, $fontSize, $angle, $x, $y, $textColor, $font, $renderedText);

// Encode the Arabic filename
$filename = rawurlencode('بطاقة التهنئة.png');

header("Content-Disposition: attachment; filename*=UTF-8''{$filename}");

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);

?>