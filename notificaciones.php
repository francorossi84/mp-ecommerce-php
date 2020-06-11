<?php
    header("HTTP/1.1 200 OK");
    $notificacion = file_get_contents('php://input');
    $file = fopen("notificacion.txt","a");
    fwrite($file,"".$notificacion." \r\n");
?>