<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['teacher_name'])){
header('location:index.php');
}
?>