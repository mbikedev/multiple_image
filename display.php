<?php //display.php 
include "config.php";
$i="";
$query="select images from test";
$fire=mysqli_query($con,$query);
$data=mysqli_fetch_array($fire);
$res=$data['images'];
$res=explode(" ",$res);
$count=count($res)-1;
for($i=0;$i<$count;++$i)
{
	?>
	<img src="upload/<?= $res[$i]?>" height="100px" width="100px"/>
	<?php
}
echo "<p style='color:green;font-size:26px'>Total ".$count." images found.";
?>





