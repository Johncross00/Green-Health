<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (extension_loaded('pdo')) {
    echo "PDO is loaded.<br>";
} else {
    echo "PDO is not loaded.<br>";
}

if (extension_loaded('pdo_mysql')) {
    echo "PDO MySQL is loaded.<br>";
} else {
    echo "PDO MySQL is not loaded.<br>";
}

phpinfo();
?>
