<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'bioskopmalam');

require "function/film.php";
require "function/user.php";
 ?>
