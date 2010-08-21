<style>
#stories {
	overflow:auto;
	height:150px;
}
</style>
<div id="stories">
<?php
$rss = simplexml_load_file("http://news.ycombinator.com/rss");
foreach($rss->channel->item as $r) {
?>
<p>
<a href="#" onClick="
document.getElementById('f').src='f.php?u1=<?=urlencode(base64_encode($r->link));?>&u2=<?=urlencode(base64_encode($r->comments));?>';
"><?=$r->title;?></a>
</p>
<?php
}
?>
</div>
<iframe width="100%" height="500" src="f.php" id="f"></iframe>
