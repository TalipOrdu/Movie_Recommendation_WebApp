<?php 
include ('insert.php');
include ('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/signup.css">
    
</head>

<body>
    <div class="container">

        <form action="./insert.php" method="POST">


            <h1>Sign Up</h1>
            <p>Please fill the blanks to create your account</p>
            <hr>
            <label for="username">Username <span> * </span></label><br>
            <input type="text" id="username" name="username" required placeholder="MovieLover"><br>

            <label for="email">Email <span> * </span></label><br>
            <input type="email" id="email" name="email" required placeholder="joe@example.com"><br>

            <label for="tel">Phone number</label><br>
            <input type="tel" name="number" id="phone" placeholder="xxx-xxx-xxxx"> <br>

            <label for="gender">Gender</label> <br>
            <select name="gender" id="gender">
                <option value="unselected">Unselected</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select> <br>

            <label for="password">Password <span> * </span></label><br>
            <input type="password" id="password" required name="password"><br>

            <p> <input type="checkbox" id="check" required name="check" value="0">
                By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
            <button id="send" name="submit" type="submit">Sign Up</button>
        </form>

        <script src="app.js"></script>
        
    
    </div>
    
</body>
</html>
