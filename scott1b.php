<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
  </head>

  <body>
	  <?php $loop = 3;
			while ($loop--)
			{
	?>
	  <h1>Your IP address is <?php echo $_SERVER['REMOTE_ADDRx']; ?></h1>
	  <?php
			}
		?>
    <p> The date is 
	  
		<?php 
				$loop = 3;
				while ($loop--)
				{
					echo "<p> Loop is $loop </p>";
				}
				echo '<pre>';
				print_r($_SERVER);
				echo '</pre>';
		?>
	  
	  </p>
  </body>

</html>
