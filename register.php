<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form-container">

    <form action="" method="post">
        <h3>Register Now</h3>
        <input type="text" name="name" required placeholder="enter your name">
        <input type="text" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter password">
        <input type="password" name="cpassword" required placeholder="confirm password">
        <select name="user_type">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>Already have an account? <a href="index.php">Login</a></p>
    </form>
    </div>
</body>
</html>