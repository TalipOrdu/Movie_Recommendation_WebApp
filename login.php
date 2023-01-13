<?php 
    include ('connection.php');
    

    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    if(isset($_POST["submit"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(isset($username) && isset($password)){

            $sql = "SELECT * FROM user_info where username='$username' ";

            $query = mysqli_query($conn,$sql);
            $countUser = mysqli_num_rows($query); // 0-1

            if($countUser>0){
                
                                
                $record = mysqli_fetch_assoc($query); //get all info relevant record

                $hashed_password = $record["parola"];
                if(password_verify($password, $hashed_password)){
                alert("basariyla giris yapildi.");
                    session_start();
                    $_SESSION["username"] = $record["username"];
                    $_SESSION["email"] = $record["email"];
                    header("location:main.html");
                    
                }else{
                    echo "parola yanlis.";
                }


            }else{
                alert("kullanici adi yanlis");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">

            <div>
                <form action="login.php" method="POST">
                    <h2>Login Page</h2>
                    <label for="username" >UserName</label><br>
                    <input type="text" name="username" id="username" name="username"placeholder="your username" ><br>
                    
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" name="password">

                    <button type="submit" name="submit">Log in</button>
                    <p>Not a Member ? <a href="signup.php">Register Now</a> </p>

                </form>
            </div>

        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    

</body>

</html>