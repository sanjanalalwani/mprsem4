<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['teacher_name'])){
header('location:index.php');
}
?>

<html>
<body>
<link rel="stylesheet" href="popup.css">

  <div class="center">
    <input type="checkbox" id="click">
    <label for="click" class="click-me">Choose</label>
    <div class="content">
      <div class="text">
        Choose Class
     </div>
        <label for="click" id="temp">x</label>

    <form>

        <label for="username">FE</label>
        <input type="radio" id="username">
        <label for="username">SE</label>
        <input type="radio" id="username">
        <label for="username">TE</label>
        <input type="radio"  id="username">
        <label for="username">BE</label>
        <input type="radio" id="username">
        

      <a href="div.html"> <button>Submit</button></a>

    </form>
      </div>
    </div>
  </div>
</body>
</html>