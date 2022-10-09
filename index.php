<html>
<body>
<center>
<h1>
Create Barcode
</h1>
<form>
Enter barcode data <input type="" name="bar_code"><br>
<input type="submit" value="Create Barcode">
</form>
<?php
require ('vendor/autoload.php');
if(isset($_GET['bar_code'])){
	$bar_code=$_GET['bar_code'];
	include 'barcode128.php';
	echo bar128($bar_code);
	$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
	file_put_contents('barcode.jpg', $generator->getBarcode($bar_code, $generator::TYPE_CODE_128));
    $file = 'barcode.jpg';
    $image = imagecreatefromstring(file_get_contents($file));
    ob_start();
    imagejpeg($image, NULL, 100);
    $cont = ob_get_contents();
    ob_end_clean();
    imagedestroy($image);
	$content = imagecreatefromstring($cont);
    $output = 'output.webp';
    imagewebp($content, $output);
    imagedestroy($content);
    echo '<h4>Output Image Saved as ' . $output . '</h4>';
}	
?>
</center>
</body>
</html>