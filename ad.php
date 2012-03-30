<?php 
	$myfile="o";
	$category=array();
	$list=array("education","sports","health");
	$group=array(0,0,0);
	$fp=fopen($myfile,"r");
	while($data=fgets($fp))
	{
		array_push($category,$data);
	}
	foreach($category as $value)
	{
	$group[$value-1]+=1;
	}
	$maxpos=0;
	$max=0;
	foreach($group as $key=>$value)
	{
		if($max<=$value)
		{	$max=$value;
			$maxpos=$key;
		}
	}
	$imagelist=array();
	array_push($imagelist,$list[$maxpos]);
	if ($handle = opendir('/Applications/MAMP/htdocs/compiler/'.$list[$maxpos])) {
   	while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {	array_push($imagelist,$entry);
		}
    		}
	
		    }
   	closedir($handle);

	echo json_encode($imagelist,JSON_FORCE_OBJECT);
?>
