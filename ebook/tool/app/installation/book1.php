<?php
$imageName = $_GET['name'];
switch ($_POST["format"])
{
	case 'jpg':
	header('Content-Type: image/jpeg');
	$imageName = $imageName.".jpg";
	break;
	
	case 'png':
	header('Content-Type: image/png');
	$imageName = $imageName.".png";
	break;
}

if ($_POST['action'] == 'prompt')
{
	header("Content-Disposition: attachment; filename=".$imageName);
}


//$zzzim = imagecreatefromstring(base64_decode($_POST["image"]));
//$w_zzz = imagesx($zzzim);
//$h_zzz = imagesy($zzzim);
#die("width :".$w_zzz."<br \>height: ".$h_zzz);
//$nex_zzzim = imagecreatetruecolor(565, 758);
//imagecopyresized($nex_zzzim, $zzzim, 0, 0, 0, 0, 565, 758, $w_zzz, $h_zzz);

//$nex_zzzim = imagecreatetruecolor(400, 554);
//imagecopyresized($nex_zzzim, $zzzim, 0, 0, 0, 0, 400, 554, $w_zzz, $h_zzz);

#imagecopyresampled($nex_zzzim, $zzzim, 0, 0, 0, 0, 602, 802, $w_zzz, $h_zzz);
#$new_width = 800;
#$new_height = 400;
#$img = imagecreatetruecolor($new_w,$new_h); 
#imagecopyresized($img,$im,0,0,0,0,$new_width,$new_height,$width,$height);

#imagepng($nex_zzzim, '../../covers/'. $ff .'.png',9);
//imagejpeg($nex_zzzim, '3d_covers/'. $imageName .'.jpeg',100);


//header( 'Location: success.php?imageName='. $imageName .'' ) ;
echo base64_decode($_POST["image"]);

?>


