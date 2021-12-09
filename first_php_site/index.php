<!DOCTYPE html>
<html>
<body>

<?php
$output = shell_exec('touch ./test.txt');
echo "<pre>touch ausgeführt: $output</pre>";

echo "<br>";

$output = shell_exec('ls -lart');
echo "<pre>ls -lart ausgeführt: $output</pre>";

echo "<br>";

$output = shell_exec('history');
echo "<pre>history ausgeführt: $output</pre>";

echo "<br>";

$output = shell_exec('pwd');
echo "<pre>pwd ausgeführt: $output</pre>";

echo "<br>";
$output = shell_exec('users');
echo "<pre>users ausgeführt: $output</pre>";

echo "<br>";

$output = shell_exec('groups');
echo "<pre>groups ausgeführt: $output</pre>";

echo "<br>";

$output = shell_exec('cat index.php');
echo "<pre>cat ausgeführt: $output</pre>";

echo "<br>";
?>


</body>
</html>
