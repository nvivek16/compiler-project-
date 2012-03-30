<?php
	
if($handle=opendir('/Applications/MAMP/htdocs/compiler/mail')){
while(false!==($entry=readdir($handle))){
if($entry!="." && $entry!=".."){
	echo "<li><a href='#' id='$entry'>".$entry."</a></li>";
}
}
}
closedir($handle);
?>
