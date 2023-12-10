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

<style>
    *
    {
        margin: 0;
        padding: 0;
        font-size: 24px;
    }
    body
    {
        background-image: url("../mhome.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .st
    {
        text-align:center;
        margin:150px 500px 200px 500px;
        padding: 50px;
        border: 2px solid black;
        border-radius: 20%;
        background-color: rgba(0,0,0,0.6);
    }
    input
    {
        padding: 20px;
        margin:10px;
        border-radius: 30%;
        background-color: yellow;     
    }
    .submit
    {
        background-color: red;
    }
</style>
<body>
    <div class="st">
        <form action="entryat.php">
            <h2>Enter date and time</h2>
            <input type="date" name="date" id="date">
            <br>
            <input type="time" name="time" id="time" required>
            <br> 
            <input type="submit" class="submit" value="submit">
        </form>
    </div>
</body>
</html>