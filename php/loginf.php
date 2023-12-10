<?php
    session_start();
    include("conn.php");
    $email=$_GET["email"];
    $pass=$_GET["pass"];

    $query="select * from loginf where email='$email' && pass='$pass'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['user']=$email;
        header('Location:home.php');
    }
    else
    {
        $alert=
        "<script>
            alert('WRONG USERNAME OR PASSWORD');
            window.location.href='../index.html';
        </script>";
        echo $alert;
    }
?>