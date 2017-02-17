<?php
$num=intval(mt_rand(1000,9999));//产生一个4位的随机数
for($i=0;$i<4;$i++){
	echo "<img src=image/code/".substr(strval($num),$i,1).".gif>";//通过循环将随机数以图片的形式显示出来
}
?>