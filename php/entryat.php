<?php
  session_start();
  $userprofile= $_SESSION['user'];
  if($userprofile!=true)
  {
    header("location:../index.html");
  }
  include("conn.php");
  $email=$userprofile;
  $date=$_GET["date"];
  $time=$_GET["time"];

  $query1="select * from logins where email='$email'";
  $query2="select * from loginf where email='$email'";
  $query3="select * from loginm where email='$email'";
  $data1=mysqli_query($conn,$query1);
  $data2=mysqli_query($conn,$query2);
  $data3=mysqli_query($conn,$query3);
  $total1=mysqli_num_rows($data1);
  $total2=mysqli_num_rows($data2);
  $total3=mysqli_num_rows($data3);

    if($total1==1)
    {
      $operation1="insert into studentattendancedb values('$userprofile','$date','$time')";
      $opdata1=mysqli_query($conn,$operation1);
      if($opdata1)
      {
        $alert=
          "<script>
              alert('Operation Successfull');
          </script>";
        echo $alert;
      }
    }
    else if($total2==1)
    {
      $operation2="insert into facultyattendancedb values('$userprofile','$date','$time')";
      $opdata2=mysqli_query($conn,$operation2);
      if($opdata2)
      {
        $alert=
          "<script>
              alert('Operation Successfull');
              window.location.href='home.php';
          </script>";
        echo $alert;
      }
    }
    else if($total3==1)
    {
      $operation3="insert into managerattendancedb values('$userprofile','$date','$time')";
      $opdata3=mysqli_query($conn,$operation3);
      if($opdata3)
      {
        $alert=
          "<script>
              alert('Operation Successfull');
              window.location.href='home.php';
          </script>";
        echo $alert;
      }
    }
    else{
        $alert=
        "<script>
            alert('WRONG USERNAME, No such user exists');
            window.location.href='home.php';
        </script>";
        echo $alert;
    }

?>