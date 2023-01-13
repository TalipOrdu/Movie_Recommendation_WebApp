<?php
    include ('connection.php');
    

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if(isset($_POST["submit"])){

        $username = $_POST["username"];
        $email = $_POST["email"];
        $phoneNum = $_POST["number"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $hashed_password = password_hash($_POST["password"],PASSWORD_DEFAULT);
        
        
        $sql = "INSERT INTO user_info (username,email,phone_num,gender,parola) 
        VALUES ('$username','$email','$phoneNum','$gender','$hashed_password')";

        
        $insert = mysqli_query($conn, $sql); //inserted user
        
        if($insert){
            alert("kayit basarili bir sekilde eklendi.");
            header("location:login.php");
        }else{
            alert("hata olustu.");
        }

        mysqli_close($conn); //closed connection
    }
?>