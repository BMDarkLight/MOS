<?php

$path = $_REQUEST['path'];
$link = file_get_contents("../../../$path");

echo "<script>window.location.assign('read.php?path=$link');</script>";