<!DOCTYPE html>
<html>
<body>
<style>
table, th, td {

}
</style>

	<?php
    echo "<table>";
    for ($i = 1; $i <= 3; $i++){
    	echo "<tr>";
        switch ($i){
        	case 1:
  				for ($x = 1; $x <= 255; $x++){
        			echo "<td style='background-color:rgb($x, 0, 0);'>$x</td>";
  				};
            	break;

        	case 2:
            	for ($x = 1; $x <= 255; $x++){
        			echo "<td style='background-color:rgb(0, $x, 0);'>$x</td>";
  				};
            	break;

		case 3:
            	for ($x = 1; $x <= 255; $x++){
        			echo "<td style='background-color:rgb(0, 0, $x);'>$x</td>";
  				};
            	break;
        };
    }
	?>



</body>
</html>
