<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['teacher_name'])){
header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <nav>
            <div class="logo">
                <img src="Student Performance Tracker final.png" alt="" width="130px" class="center">
            </div>
            <ul>
                <li class="home"><a href="index.php">Home</a></li>
            </ul>
            <ul>
                <li class="about"><a href="about.html">About</a></li>
            </ul>
            <ul>
                <li class="contact"><a href="contact.html">Contact</a></li>
            </ul>
            <ul>
                <li>
                    <div class="dropdown">
                    <button class="dropbtn">My Profile</button>
                    <div class="dropdown-content">
                        <a href="index.php">Login</a>
                        <a href="">Help</a>
                        <a href="">Settings</a>
                        <hr>
                        <a href="">Support</a>
                    </div>
                </div>
                </li>
            </ul>
        </nav>
    </header>

<h1>Select Your Class</h1>
<div class="form-container">

    <form action="" method="post">
        <p>Select Year</p>
        <select name="class">
          <option value="">NULL</option>
            <option value="fe">FE</option>
            <option value="se">SE</option>
            <option value="te">TE</option>
            <option value="be">BE</option>
        </select>
        <p>Select Division</p>
        <select name="div">
          <option value="">NULL</option>
            <option value="c1">C1</option>
            <option value="c2">C2</option>
            <option value="c3">C3</option>
        </select>
        <p>Select Semester</p>
        <select name="semester">
          <option value="">NULL</option>
            <option value="one">I</option>
            <option value="two">II</option>
            <option value="three">III</option>
            <option value="four">IV</option>
            <option value="five">V</option>
            <option value="six">VI</option>
            <option value="seven">VII</option>
            <option value="eight">VIII</option>
        </select>
        
      <a href="./schedule/">  <input type="submit" name="submit" value="GO" class="form-btn"></a>

    <footer>
          <p class="text-center"><a href="#"><img src="https://img.icons8.com/material-sharp/20/contact-card.png" alt=""></a>: 7977318761</p>
          <p class="text-center"><a href="#"><img src="https://img.icons8.com/ios/20/new-post.png" alt=""></a>: studentperformance1@gmail.com</p>
          <p class="text-center"><a href="#"><img src="location.png" alt="" width="30px" height="30px"></a>: Mumbai, India</p>
      </footer>
</body>
</html>