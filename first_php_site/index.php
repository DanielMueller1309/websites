<!DOCTYPE html>
<html>
<body>

<p style=style="text-align: center;">
<?php
$output = shell_exec('cat index.php');
echo "cat ausgeführt: $output";
?>
</p>

</body>
</html>
