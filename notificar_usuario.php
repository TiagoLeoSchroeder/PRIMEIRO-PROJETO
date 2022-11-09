<?php

    $to = 'tiago@gmail.com';
    
    $subject = 'Olá';
    
    $message = 'Isto é um email teste.';
    
    mail($to, $subject, $message, [$headers], [$parameters]);
?>