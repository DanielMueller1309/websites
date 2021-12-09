<!DOCTYPE html>
<html>
<body>
<p style=style="text-align: center;">

<?php

$output = shell_exec('cat index.php');
echo "cat ausgeführt: $output";

echo "<br>";
?>
</p>

</body>
</html>
