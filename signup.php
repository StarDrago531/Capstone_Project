<?php
    $con = mysqli_connect('localhost','root','','newsnow');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM newsnowdatabase WHERE email = '$email'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
       header('Location:http://localhost/Capstone%20Project/signup.html');
    }else{
        $input = mysqli_query($con,"INSERT INTO newsnowdatabase (name,email,password)VALUES('$name','$email','$password')");
        if($input){
           header('Location:http://localhost/Capstone%20Project/breakingnews.html');
        }
    }

?>