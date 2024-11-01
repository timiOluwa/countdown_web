<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'eventdb2';

$connection =mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if(!$connection){
    die(mysqli_error($connection));

}
?>