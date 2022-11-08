<?php
    $q = $_REQUEST["q"];
    $xml = simplexml_load_string($xmlResponse);
    $command = escapeshellcmd('py create_image.py '+ $xml);
    $output = shell_exec($command);
    echo true;
?>
