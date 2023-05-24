<?php

$conn = mysqli_connect("localhost", "root", '', "blogs");

if (mysqli_connect_error()) {
    echo "Cannot connect to database";
}
