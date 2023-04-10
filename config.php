<?php
$db = mysqli_connect('localhost', 'root', '', 'tima5_skd');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
