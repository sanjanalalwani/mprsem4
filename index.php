<!-- login page -->
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
                <li class="home"><a href="index.html">Home</a></li>
            </ul>
            <ul>
                <li class="about"><a href="about.html">About</a></li>
            </ul>
            <ul>
                <li>
                    <ul>
                        <li class="contact"><a href="">Contact</a></li>
                    </ul>
                    <ul>
                        <li>
                    <div class="dropdown">
                    <button class="dropbtn">My Profile</button>
                    <div class="dropdown-content">
                        <a href="">Login</a>
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