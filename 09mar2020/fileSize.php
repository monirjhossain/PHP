<?php

	$drive = 'files';

	$dir = dirname($drive);

	$bytes = disk_free_space($dir);

	$kb = round($bytes/1024,2);

	echo $gb = $kb/1024/1024;

	echo "<br>";

	echo disk_total_space($dir)/1024/1024/1024;

?>