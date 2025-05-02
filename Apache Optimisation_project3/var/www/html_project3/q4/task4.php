<?php
$client_ip = $_SERVER['REMOTE_ADDR'];

if (preg_match('/^192\.168\.100\./', $client_ip)) {
    echo "<h2>Hello my friend!</h2>";
} else {
    echo "<h2>Hello stranger!</h2>";
}
?>
