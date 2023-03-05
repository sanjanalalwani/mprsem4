<!-- login page -->
<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($conn, $_POST['name']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);
$user_type=$_POST['user_type'];
$select="SELECT * FROM user_form WHERE email='$email' && password='$password' ";

$result=mysqli_query($conn, $select);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_array($result);
    if($row['user_type']== 'teacher'){
        $_SESSION['teacher_name']=$row['name'];
        header('location:teacher.php');
    }
    elseif($row['user_type']== 'student'){
        $_SESSION['student_name']=$row['name'];
        header('location:student.php');
}
}
else{
    $error[]='incorrect email or password!';
}
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Performance Tracker</title>
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
                <li>
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
    <br>
    <hr>
    <div class="image">
        <video width="800" height="800" autoplay muted>
            <source src="Welcome to Student Performance Tracker main.mp4" type="video/mp4" autoplay muted>
        </video>
    </div>
    <div class="container">
    <div class="form-container">

    <form action="" method="post">
        <h3>Login</h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter password">
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>Don't have an account?<a href="register.php">Register</a></p>
    </form>
    </div>
          </div>
    </div>
</body>
</html>