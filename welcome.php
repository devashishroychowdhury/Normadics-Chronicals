<?php

include "connection.php";

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome to Normadics Chronicles</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow&family=Exo+2:wght@500&family=IBM+Plex+Sans:wght@300&family=Inconsolata:wght@500&family=Inter:wght@300&family=Kanit:wght@300&family=Lora:wght@500&family=Manrope:wght@300&family=Montserrat:wght@500&family=Noto+Sans:wght@300&family=Nunito:wght@300&family=Oxygen:wght@300&family=PT+Sans&family=Pathway+Extreme&family=Phudu&family=Poppins:wght@300;400&family=Quicksand:wght@500&family=Raleway:wght@300;400&family=Roboto+Condensed:wght@300&family=Sofia+Sans+Condensed&family=Source+Sans+Pro:wght@300&family=Ubuntu&display=swap');

    .nav-item {
        position: absolute;
        right: 50px;
        bottom: 7px;
    }

    nav {
        background-color: black;
    }


    .user-name {
        display: flex;
        justify-content: center;
        position: absolute;
        right: 20px;
    }


    .user-name p {
        color: white;
        margin: 9px 0px;
    }

    #logo-head {
        width: 10rem;
        height: 4rem;
        margin: 0px 3rem;
    }

    #user-logo {
        color: white;
        background: white;
        border-radius: 20px;
        padding: 2px;
    }

    .blogs {
        margin: 20px 0px;
        text-align: center;
    }
</style>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="./Images/Heading2.png" alt="Logo" id="logo-head"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="user-name">
            <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png" id=user-logo></a>
            <p>
                <?php echo " Welcome " . $_SESSION['username'] ?>
            </p>
            <a class="nav-link" href="logout.php">Logout</a>
        </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h3>
            <?php echo "Welcome " . $_SESSION['username'] ?> !
        </h3>
        <hr>

    </div>


    <div class="post-blog">
        <form method="POST" enctype="multipart/form-data">

            <div class="input-field">
                <label>Title</label>
                <input type="text" name="username">
            </div>

            <div class="input-field">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>
            <div class="input-field">
                <label>Choose Image</label>
                <input type="file" name="profile">
            </div>

            <div class="submit-btn">
                <button type="submit" name="upload">Upload</button>
            </div>
        </form>
    </div>

    <div class="blogs">
        Go to blogs page <a href="blogs.php">check out</a>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php

    if (isset($_POST['upload'])) {

        $img_loc = $_FILES['profile']['tmp_name'];
        $img_name = $_FILES['profile']['name'];

        $uname = $_POST['username'];
        $desc = $_POST['description'];
        $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);

        $img_size = $_FILES['profile']['size'] / (1024 * 1024);
        $img_desc = "uploaded/" . $uname . '.' . $desc . '.' . $img_ext;

        if (($img_ext != 'jpg') && ($img_ext != 'png') && ($img_ext != 'jpeg') && ($img_ext != 'webp')) {
            echo "<script>alert('Invalid Image Extension')</script>";
            exit();
        }

        if ($img_size > 5) {
            echo "<script>alert('Image size is greater than 1MB')</script>";
        }


        move_uploaded_file($img_loc, $img_desc);

        $query = "INSERT INTO user_blog( `UserName`, `Description`, `Profile`) VALUES ('$uname', '$desc', '$img_desc')";
        if (mysqli_query($conn, $query)) {
            move_uploaded_file($img_loc, $img_desc);
            echo "<script> alert('Data successfully uploaded')</script>";
        } else {
            echo "<script> alert('Query success')</script>";
        }
    }
    ?>

</body>

</html>