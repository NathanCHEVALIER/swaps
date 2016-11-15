<?php
session_start();
unset($_SESSION['version']);
setcookie("lang", 'eng', time()-15);
session_destroy();

header("location: ../");
exit();

?>