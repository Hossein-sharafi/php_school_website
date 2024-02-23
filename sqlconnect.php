<!-- PB Hossein Sharafi -->
<?php
//$hostsql = 'localhost';
//$usernamesql = 'root';
//$passwordsql = '';
//$databasesql = 'data';
$hostsql = 'localhost';
$usernamesql = 'root';
$passwordsql = '';
$databasesql = '****';

$sqlchecker = mysqli_connect($hostsql, $usernamesql, $passwordsql, $databasesql);
if ($sqlchecker == true) {
    $result = mysqli_query($sqlchecker,$sqlcode);
} else {
    echo ('fail');
} ?>
<!-- PB Hossein Sharafi -->




