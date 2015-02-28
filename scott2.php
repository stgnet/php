<!DOCTYPE html>
<html lang="en">
<body>
   <pre>
<?php

	$dir ='.';
    $dh = opendir($dir);
	while (($file = readdir($dh)) !== false)
	{
		if (substr($file, 0, 1) == '.') {
			continue;
		}
		echo "$file\n";
	}
	closedir($dh);

?>
  </body>
</html>
