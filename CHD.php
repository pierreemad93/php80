<?php 

session_start();
// echo $_SESSION['USER_NAME'];

echo "<pre>";
print_r($_SESSION);
echo "</pre>" ;


echo "<a href='logout.php'>logout</a>";
