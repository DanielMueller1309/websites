<!DOCTYPE html>
<html>
<body>
<p style=style="text-align: center;">

<?php

$output = shell_exec('cat index.php');
echo "<pre>cat ausgeführt: $output</pre>";

echo "<br>";
?>
</p>

</body>
</html>
