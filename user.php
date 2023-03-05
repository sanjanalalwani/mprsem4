<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['student_name'])){
header('location:index.php');
}
?>
