<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blogs</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow&family=Exo+2:wght@500&family=IBM+Plex+Sans:wght@300&family=Inconsolata:wght@500&family=Inter:wght@300&family=Kanit:wght@300&family=Lora:wght@500&family=Manrope:wght@300&family=Montserrat:wght@500&family=Noto+Sans:wght@300&family=Nunito:wght@300&family=Oxygen:wght@300&family=PT+Sans&family=Pathway+Extreme&family=Phudu&family=Poppins:wght@300;400&family=Quicksand:wght@500&family=Raleway:wght@300;400&family=Roboto+Condensed:wght@300&family=Sofia+Sans+Condensed&family=Source+Sans+Pro:wght@300&family=Ubuntu&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Barlow&family=Exo+2:wght@500&family=IBM+Plex+Sans:wght@300&family=Inconsolata:wght@500&family=Inter:wght@300&family=Kanit:wght@300&family=Lora:wght@500&family=Manrope:wght@300&family=Montserrat:wght@500&family=Noto+Sans:wght@300&family=Nunito:wght@300&family=Oxygen:wght@300&family=PT+Sans&family=Pathway+Extreme&family=Phudu&family=Poppins:wght@300;400&family=Quicksand:wght@500&family=Raleway:wght@300;400&family=Roboto+Condensed:wght@300&family=Sofia+Sans+Condensed&family=Source+Sans+Pro:wght@300&family=Ubuntu&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,200&family=Inter:wght@300&family=Kanit:wght@300&family=Manrope:wght@300&family=Montserrat:wght@500&family=Noto+Sans:wght@300&family=Nunito:wght@300&family=Oxygen:wght@300&family=PT+Sans&family=Pathway+Extreme&family=Phudu&family=Poppins:wght@300;400&family=Quicksand:wght@500&family=Raleway:wght@300;400&family=Roboto+Condensed:wght@300&family=Sofia+Sans+Condensed&family=Source+Sans+Pro:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Overpass&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    .body-blur {
        opacity: 0.8;
    }

    ::-webkit-scrollbar {
        width: 7px;
    }


    ::-webkit-scrollbar-thumb {
        background: #7e7d7d;
        border-radius: 20px;
    }

    ul {
        display: flex;
        justify-content: space-evenly;
        width: 100%;
    }

    ul li {
        font-size: 20px;
        font-weight: 500;
    }

    nav {
        background-color: black;
        width: 100vw;
    }

    #heading {
        width: 10rem;
        height: 4rem;
        margin: 0px 3rem;
    }

    .content {
        display: flex;
        flex-direction: column;
    }

    .content #video {
        background-size: cover;
    }

    .content #video-quote {
        position: absolute;
        top: 15rem;
        margin: 3rem 0;
        color: white;
    }

    .content #video-quote section {
        display: block;
        text-align: center;
        width: 100vw;
    }

    .content #video-quote section h1 {
        font-size: 4.5em;
    }

    .content #video-quote section h3 {
        font-size: 40px;
    }

    .content #video-quote section p {
        font-size: 20px;
    }

    .content #video-quote section p a {
        color: whitesmoke;
        font-size: 18px;
        position: relative;
        top: 2rem;
    }

    .content #video video {
        color: white;
        width: 100vw;
    }

    .content h4 {
        margin: 2rem;
        text-align: center;
        font-family: 'Overpass', sans-serif;
        font-size: 35px;
    }

    .logout-prompt {
        display: none;
        position: relative;
        background-color: black;
        z-index: 50;
        margin: auto;
        width: 50%;
        bottom: 5rem;
        padding: 2rem 2rem;
        color: white;
    }

    .show {
        display: block;
        position: absolute;
        /* bottom: 1rem; */
        z-index: 100;
        top: 50rem;
        left: 22rem;
        background: black;
        height: 18rem;
    }

    .hide {
        display: none;
    }

    .logout-prompt h2 {
        font-family: 'Rubik', sans-serif;
        text-align: center;
    }

    .logout-prompt section {
        text-align: center;
    }

    .logout-prompt section button {
        position: relative;
        z-index: 200;
        text-decoration: none;
        padding: 10px 15px;
        margin-top: 2rem;
        margin-left: 2rem;
        border-radius: 10px;
        font-family: 'Rubik', sans-serif;
    }

    .logout-prompt section button#yes:hover {
        background: #9aff00;
    }

    .logout-prompt section button#yes:hover a {
        background: greenyellow;
        color: white
    }

    .logout-prompt section button#no:hover {
        background: red;
        color: white;
    }

    .logout-prompt section button#yes a {
        text-decoration: none;
        color: black;
    }

    #blogs-list {
        display: block;
        margin: auto;
        padding: 50px 0px;

    }

    section {
        display: flex;
        justify-content: center;
        flex-direction: column;
        font-family: 'Exo 2', sans-serif;
    }

    .blogs {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 30px;
        margin: 15px 0px;
    }

    .cards {
        display: flex;
        /* justify-content: center; */
        align-items: center;
        padding: 20px;
        border: 1px solid;
        width: 55vw;
        background-color: whitesmoke;
    }

    .card-info {
        display: flex;
        flex-direction: column;
        margin-left: 2rem;
        position: relative;
        top: -60px;
    }

    .cards .card-info #title {
        font-family: 'Archivo', sans-serif;
        font-size: 1.8em;
    }

    .cards span #desc {
        font-family: 'Oxygen', sans-serif;
    }

    footer {
        width: 100vw;
        position: absolute;
        left: 0;
    }

    .footer-dark {
        background: black;
        color: white;
    }

    .dark {
        background: black;
        color: white;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./Images/Heading2.png" id="heading"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <!-- <a class="nav-link" href="logout.php">Logout</a> -->
                    <li> <a href="#" id="log-out"><button type="button" class="btn btn-info">Logout</button></a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div id="video">
            <video autoplay loop muted plays-inline>
                <source src="./Videos/Bg-video.mp4" type="video/mp4">
            </video>

            <div id="video-quote">
                <section>
                    <h1><span id="auto-type"></span></h1>
                    <h3>Best place to start writing your blog</h3>
                    <p>You call it blog we call it memory</p>
                    <p><a href="#blogs-list">See what others have written</a></p>
                </section>
            </div>

        </div>

        <div class="logout-prompt">
            <h2> Do you really want to logout ? </h2>
            <section>
                <button id="yes"><a href="logout.php">Yes</a> </button>
                <button id="no">No, want to stay here</button>
            </section>
        </div>

        <section id="blogs-list">
            <h4>Blogs posted by our users</h4>
            <?php
            $query = "SELECT * FROM user_blog";
            $result = mysqli_query($conn, $query);

            while ($row_fetch = mysqli_fetch_assoc($result)) {
                echo "
                <div class='blogs'>
              
                <div class='cards'>
                    <span><img src= '$row_fetch[Profile]' width='150px'></span>  
                    <div class='card-info'>
                    <span id='title'>$row_fetch[UserName] </span>
                    <span id='desc'>$row_fetch[Description]</span>
                    </div>  
                </div>
            </div>
                ";
            }
            ?>
        </section>
    </div>

    <div class="container footer-dark">
        <footer class="dark py-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3 dark">
                <li class="nav-item"><a href="#" class="nav-link px-2 dark">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 dark">Contact</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 dark">About</a></li>
            </ul>
            <p class="text-center dark">© 2022 Company, Inc</p>
        </footer>
    </div>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#auto-type', {
            strings: ["Travel", 'Eat', 'Enjoy'],
            typeSpeed: 120,
            loop: true
        });
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    let logout_btn = document.querySelector('#log-out').addEventListener('click', () => {
        let logout_prompt = document.querySelector('.logout-prompt')
        logout_prompt.classList.toggle('show');
        // Show function has display property as block
    })

    let remove_prompt = document.getElementById('no').addEventListener('click', () => {
        let logout_prompt = document.querySelector('.logout-prompt')
        logout_prompt.classList.remove('show');
        // Hide function has display property as none
    })
</script>

</html>