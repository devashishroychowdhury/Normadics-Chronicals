<?php
session_start();


if (isset($_SESSION['username'])) {
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


    if (empty($err)) {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;


        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // this means the password is corrct. Allow user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        //Redirect user to welcome page
                        header("location: welcome.php");
                    }
                }
            }
        }
    }
}

?>

<style>
    .nav-item {
        position: absolute;
        right: 10px;
        bottom: 12px;
    }

    nav {
        background: black;
    }

    #logo-head {
        width: 10rem;
        height: 4rem;
        margin: 0px 3rem;
    }

    form {
        display: block;
        margin: 5rem auto;
        width: 30rem;
        border: 1px solid black;
        padding: 30px 45px;
    }

    form #text {
        display: block;
        text-align: center;
        text-transform: uppercase;
        margin: 20px;
    }


    form #login-icon {
        font-size: 50px;
        display: block;
        text-align: center;
        margin-bottom: 1rem;
    }

    form #username {
        display: flex;
    }

    form #username span i {
        position: relative;
        top: 10px;
        right: 10px;
        font-size: 20px;
    }

    form #password {
        display: flex;
    }

    form #password span i {
        position: relative;
        top: 10px;
        right: 10px;
        font-size: 20px;
    }

    form #submit-btn {
        display: block;
        margin: auto;
    }

    form p {
        position: relative;
        text-align: center;
        top: 30px;
    }
</style>



<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login to Nodmadics Chronicles</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="./Images/Heading2.png" alt="Logo" id="logo-head"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav-item collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- <a class="nav-link" href="register.php">Register</a> -->
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <form action="" method="post">
            <div class="form-group">
                <span><i class="fa-solid fa-right-to-bracket" id="login-icon"></i></span>
                <span id="text">Login Here</span>
                <div id="username">
                    <span><i class="fa-solid fa-user"></i></span> <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
            </div>
            <div class="form-group">
                <div id="password">
                    <span><i class="fa-sharp fa-solid fa-key"></i></span><input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>

            <p><a href="register.php">New here ? Create a account</p>
        </form>



    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>