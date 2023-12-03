<?php

$con = mysqli_connect('localhost','root', '', 'car_rental','3306');

if(!$con){
    die(mysqli_error($con));
}
?>