<?php

    $user=$_POST['user'];
    $password=$_POST['password']
    session_start();
    $_SESSION['user']=$user;

    include('connect.php');

    $consult = "SELECT * FROM user where user = '$user' and password = $password";
    $result = mysqli_query($connect, $consult);

    $rows=mysqli_num_rows($result);

    if($rows)
    {
        header("location:home.php");
    }
    else{
        ?>
        
        <?php
        include("index.php");
        ?>
        <h1 class="bad">Authentication ERROR</h1>
        <?php
        
    }

    mysqli_free_result($result);
    mysqli_close($connect);
