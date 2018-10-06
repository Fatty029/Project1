<?php

$conn = mysqli_connect("localhost", "root", "", "loginnew");

if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
}