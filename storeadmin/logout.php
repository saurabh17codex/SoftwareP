<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
session_unset();
session_destroy();
header("Location: http://localhost/SoftwareP/storeadmin/index.php"); 
exit();
?>

</body>
</html>
