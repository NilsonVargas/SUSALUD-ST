<?php

    $connect = mysqli_connect('localhost', 'root', '123456', 'login') or die(mysqli_error($mysqli));

    insert($connect);

    function insert($connect){

        $user = $_POST['usuario'];
        $password = $_POST['password'];


        $consult = "INSERT INTO login(user, pass)
        VALUES ('$user', '$password')";

        mysqli_query($connect, $consult);
        mysqli_close($connect);
    }



?>