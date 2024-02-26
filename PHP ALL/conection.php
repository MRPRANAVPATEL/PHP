<?php
$conection = mysqli_connect('localhost', 'root', '','phpdata');

if (!empty($conection->error)) {
    die("Conection could not establish");
};
?>