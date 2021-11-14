<?php
    $con = mysqli_connect('localhost','root','','newsnow');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM newsnowdatabase WHERE email = '$email' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header('Location:http://localhost/Capstone%20Project/breakingnews.html');
    }else{
        header('Location:http://localhost/Capstone%20Project/mainpage.html');
    }

?>
