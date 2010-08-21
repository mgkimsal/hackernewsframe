<style>
#left {float: left;}
#right{float: left;}
</style>
<?php
$u1 = base64_decode(urldecode($_GET['u1']));
$u2 = base64_decode(urldecode($_GET['u2']));
if($u1=="") { die(); } 
?>
<iframe id="left"  height="100%" width="48%" src="<?=$u1;?>"></iframe>
<iframe id="right" height="100%" width="50%" src="<?=$u2;?>"></iframe>
