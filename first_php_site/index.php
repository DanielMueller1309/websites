<!DOCTYPE html>
<html>
<body>

<?php
$output = shell_exec('cat index.php');
echo "cat ausgeführt: $output";
?>

</body>
</html>
