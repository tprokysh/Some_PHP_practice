<?php
function autoLoader($class) {
    if (file_exists($class . ".php")) {
        require_once $class . ".php";
    }
}
spl_autoload_register("autoLoader");
?>