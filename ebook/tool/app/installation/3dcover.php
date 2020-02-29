<?php

$imageName = $_GET['imageName'];

$coverBG = $_GET['coverBG'];

$swfName = $_GET['swfName'];


?>


<embed type="application/x-shockwave-flash"   width="0" height="0" src="<?php echo $swfName; ?>.swf?imageName=<?php echo $imageName; ?>&imagePath=3d_covers/<?php echo $imageName; ?>.jpg&s=save&coverBG=<?php echo $coverBG; ?>"></embed>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wizard</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>



</head>

<body>

<div>

<!--<div id="headerArea" style="margin-left:-40px; margin-top:20px;">
 	<img src="images/LogoHQ.png"/>
</div>-->

<div id="stepArea" style="margin:0 auto;">


	<div class="step1" >
        
        <div class="contentWizard" style="height:250px;">
        
       	<p align="center" style="padding-top:0px; ">
        
        <span style="font-size:14px; font-weight:bold; color:#666; ">Creating 3D Image In Progress...</span><br /><br />
        <img src="images/ajax-loader.gif" /></p>
		<p align="center" style="padding-top:0px; ">
        <span style="font-size:11px; font-weight:bold; color:#666; ">You may close this window when download is complate.</span><br /><br /></p>
        </div>
        
        <div class="buttonArea">
        	
        </div>

	</div>
    

</div>



</div>

</body>
</html>