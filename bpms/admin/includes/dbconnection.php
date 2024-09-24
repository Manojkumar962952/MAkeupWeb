<?php
$con = mysqli_connect("localhost", "bpmsuser", "strong_password", "bpmsdb");
if (mysqli_connect_errno()) {
    echo "Connection Fail: " . mysqli_connect_error();
}
?>
