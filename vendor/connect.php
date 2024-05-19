<?php
$connect = mysqli_connect('localhost', 'root', '', 'tester');

if(!$connect){
    die('Error');
}