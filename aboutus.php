<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>About Us </title>
</head>

<style>
    ul {
        display: flex;
        justify-content: space-evenly;
        width: 100%;
    }

    @import url('https://fonts.googleapis.com/css2?family=Barlow&family=Exo+2:wght@500&family=IBM+Plex+Sans:wght@300&family=Inconsolata:wght@500&family=Inter:wght@300&family=Kanit:wght@300&family=Lora:wght@500&family=Manrope:wght@300&family=Montserrat:wght@500&family=Noto+Sans:wght@300&family=Nunito:wght@300&family=Oxygen:wght@300&family=PT+Sans&family=Pathway+Extreme&family=Phudu&family=Poppins:wght@300;400&family=Quicksand:wght@500&family=Raleway:wght@300;400&family=Roboto+Condensed:wght@300&family=Sofia+Sans+Condensed&family=Ubuntu&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
        width: 7px;
    }

    ::-webkit-scrollbar-thumb {
        background: #7e7d7d;
        border-radius: 20px;
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

    ul {
        display: flex;
        justify-content: space-evenly;
    }

    ul li {
        font-size: 20px;
        font-weight: 500;
    }

    ul li button {
        position: relative;
        top: 5px;
    }

    .info {
        display: flex;
        align-items: center;
        flex-direction: column;
        align-items: center;
        width: 90%;
        margin: 30px 50px;
        height: 20rem;
        padding: 20px;
        gap: 15px;
    }

    .info section {
        display: flex;
    }

    .info-content {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        font-family: 'Ubuntu', sans-serif;
    }

    #contact-img {
        position: relative;
        height: 20rem;
    }

    #img-text {
        display: flex;
        flex-direction: column;
    }

    #img-text h1 {
        font-size: 2.6em;
    }

    #img-text p {
        font-size: 1.5em;
    }

    #blog-post-img {
        position: relative;
        width: 25rem;
        left: 5rem;
    }

    #text {
        display: flex;
        flex-direction: column;
        position: relative;
        top: 3rem;
        left: 4rem;
    }

    #text h1 {
        font-size: 2.6em;
    }

    #text p {
        font-size: 1.5em;
    }

    #box1 {
        padding: 20px;
        border: solid black;
        width: 20rem;
        text-align: center;
        background-color: rgb(190, 190, 190);
    }

    #box1 img {
        display: block;
        height: 90px;
        margin: auto;
    }

    #box1 p {
        margin: 10px 0px;
    }

    #box2 {
        padding: 20px;
        border: solid black;
        width: 20rem;
        text-align: center;
        background-color: rgb(190, 190, 190);
    }

    #box2 img {
        margin: auto;
        display: block;
        height: 75px;
    }

    #box2 p {
        margin: 10px 0px;
    }

    #box3 {
        padding: 20px;
        border: solid black;
        width: 20rem;
        text-align: center;
        background-color: rgb(190, 190, 190);
    }

    #box3 img {
        display: block;
        margin: auto;
        height: 70px;
    }

    #box3 p {
        margin: 10px 0px;
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
        position: relative;
        bottom: 1rem;
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


    footer {
        position: relative;
        background-color: black;
        color: white;
        top: 55rem;
        width: 100vw;
        height: 20rem;
    }

    .developer {
        background-color: black;
        position: absolute;
        top: 85rem;
        margin: 0px 5rem;
        width: 75rem;
        height: 15rem;
    }

    .developer h3 {
        padding: 15px;
        text-align: center;
    }

    .developer section {
        display: flex;
        background: black;
        margin: 40px 0px;
    }

    #dev1 img {
        display: block;
        border-radius: 100px;
        margin: 30px 50px;
        height: 12rem;
    }

    #dev1 h3 {
        display: block;
        margin: 40px 0px;
        color: white;
        font-size: 1.8em;
    }


    #dev1 p {
        position: relative;
        display: block;
        margin: 40px 0px;
        color: white;
        font-size: 1.1em;
        right: 13rem;
        top: 4rem;
    }

    #dev1-icon {
        position: absolute;
        top: 9rem;
        left: 19.5rem;
        font-size: 1.5rem;
    }

    #dev1-icon span {
        margin: 5px 5px;
    }

    #dev2 img {
        display: block;
        border-radius: 1rem;
        margin: 30px 50px;
        height: 13rem;
    }

    #dev2 h3 {
        position: relative;
        top: 3rem;
        color: white;
    }

    #dev2 p {
        position: relative;
        display: block;
        margin: 40px 0px;
        color: white;
        font-size: 1.1em;
        right: 21.9rem;
        top: 5rem;
    }

    #dev2-icon {
        position: relative;
        height: 2rem;
        right: 32rem;
        top: 8rem;
    }

    #dev2-icon span {
        margin: 0px 10px;
    }

    #dev2-icon span i {
        font-size: 1.5em;
    }

    .container {
        position: relative;
        top: 40rem;
        right: 8rem;
    }

    footer {
        height: 10rem;
    }
</style>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./Images/Heading2.png" id="heading"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="blogs.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <li> <a href="#" id="log-out"><button type="button" class="btn btn-info">Logout</button></a> </li>
                    <!-- <a class="nav-link" href="logout.php">Logout</a> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="info">
        <section>
            <img src="./Images/about.jpg" alt="contact-img" id="contact-img">
            <section id="img-text">
                <h1>What we do ?</h1>
                <p>We are here to manage your thoughts in a form of blog.
                    Share your best memories through nomadic chronicles
            </section>
        </section>

        <section>
            <section id="text">
                <h1>Our purpose</h1>
                <p>We'll try to put our efforts to help you create your blogs and as fast as possible.<br>
                    You can contact us 24 x 7 and support us by providing feedback and constructive critisim.
                </p>
            </section>
            <img src="./Images/Blogpost.jpg" id="blog-post-img">
        </section>
        </p>
        <div class="info-content">
            <div id="box1">
                <img src="./images/management-icon-11.jpg" alt="manage">
                <h2>Manage your blogs</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet inventore quam totam rem placeat nisi, error cupiditate laudantium voluptatem beatae?</p>
            </div>
            <div id="box2">
                <img src="./images/writing-icon-png-26.jpg" alt="writing">
                <h2>Help to write your blog</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore non dolore laborum sunt odit itaque necessitatibus quia suscipit corporis voluptates.</p>
            </div>
            <div id="box3">
                <img src="./images/idea.png" alt="idea">
                <h2> Store your memories not blogs</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla blanditiis rem incidunt iure consectetur labore repellendus sunt impedit vitae aperiam.</p>
            </div>

        </div>
    </div>

    <div class="logout-prompt">
        <h2> Do you really want to logout ? </h2>
        <section>
            <button id="yes"><a href="logout.php">Yes</a> </button>
            <button id="no">No, want to stay here</button>
        </section>
    </div>

    <div class="developer">
        <section id="dev1">
            <img src="./Images/Javesh_img.jpeg" alt="javesh-img">
            <h3>Javesh Prakash</h3>
            <p>Frontend Developer</p>
            <section id="dev1-icon">
                <span><i class="fa-brands fa-facebook" style="color: #3473df;"></i></span>
                <span><i class="fa-brands fa-linkedin" style="color: #1552bc;"></i></span>
                <span><i class="fa-brands fa-github" style="color: #ffffff;"></i></span>
            </section>
        </section>
        <section id="dev2">
            <img src="./Images/Devashish_img.png" alt="devashish-img">
            <h3>Devashish Roy Chowdhury</h3>
            <p>Backend Developer</p>
            <section id="dev2-icon">
                <span><i class="fa-brands fa-facebook" style="color: #3473df;"></i></span>
                <span><i class="fa-brands fa-linkedin" style="color: #1552bc;"></i></span>
                <span><i class="fa-brands fa-github" style="color: #ffffff;"></i></span>
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
</body>

</html>