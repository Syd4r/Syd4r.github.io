<?php
    $q = $_REQUEST["q"];
    echo $q;
    $command = escapeshellcmd('py create_image.py '+ $q);
    $output = shell_exec($command);
?>
