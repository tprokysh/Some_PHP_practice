<?php
$login = "login";
if (strlen($login))
    echo strlen($login) . "<br>" . substr($login, 0, 3);
else
    echo "strlen ". '$login = ' . strlen($login);
?>