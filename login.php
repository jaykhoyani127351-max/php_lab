<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loging form</title>
</head>
<body>
    <H2>Loging form</H2>
      <form method="POST">
        <label for="username">Username:</labe>
          <input type="text" name="username"><br><br>
          <label for="passwored">passwored:</labe>
          <input type="passwored" name="passwored"><br><br>
          <input type="submit" value="submit">
      
  </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["username"];
    $passwored = $_POST["passwored"];

    if($name == "jay" && $passwored== "1234")
    {
        header("Location: homepage.php");
    }else {
       echo "invelid passwored and  username";
    }
}
?>