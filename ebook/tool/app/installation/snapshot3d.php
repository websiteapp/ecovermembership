<?php
#die("!!!");
// switch ($_POST["format"])
// {
	// case 'jpg':
	// header('Content-Type: image/jpeg');
	// break;
// 	
	// case 'png':
	// header('Content-Type: image/png');
	// break;
// }
// 
// if ($_POST['action'] == 'prompt')
// {
	// header("Content-Disposition: attachment; filename=".$_POST['fileName']);
// }
// 
// echo base64_decode($_POST["image"]);
$coverBG = "FFFFFF";
$swfName = $_POST["swfName"];
$rawdata = base64_decode($_POST["image"]);
$imageName = "3d_".date(U).""; 
$fp = fopen('3d_covers/'. $imageName .'.jpg','w');
fwrite($fp, $rawdata); 
fclose($fp);
header('Location: 3dcover.php?imageName='. $imageName .'&coverBG='. $coverBG .'&swfName='. $swfName .'');
?>