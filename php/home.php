<?php
    session_start();
    $userprofile= $_SESSION['user']; 
    if($userprofile!=true)
    {
      header("location:../index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="entryat.php">
        <input type="date" name="date" id="date" placeholder="Enter date">
        <br>
        <input type="time" name="time" id="time" required>
        <br> 
        <input type="submit" class="submit" value="submit">
    </form>
</body>
</html>