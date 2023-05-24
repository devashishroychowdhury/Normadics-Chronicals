<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Us </title>
</head>

<style>
    body {
        background-color: whitesmoke;
    }


    #heading {
        width: 10rem;
        height: 4rem;
        margin: 0px 3rem;
    }

    nav {
        background-color: black;
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

    .content {
        display: flex;
        justify-content: space-evenly;
        position: absolute;
        top: 7rem;
        width: 100vw;
    }


    form {
        border: 1px solid black;
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        width: fit-content;
        padding: 30px;
        background-color: #efefef;

    }

    form #service-logo {
        display: block;
        height: 90px;
        width: 100px;
        margin: auto;
    }

    form input {
        padding: 0px 5px;
        width: 17rem;
        margin: 5px 0px 5px 0px;
    }


    form textarea {
        height: 9rem;
        padding: 0px 5px;
        margin: 5px 0px 5px 0px;
    }

    form button {
        margin-top: 10px;
        background-color: #4c4cf9;
        color: white;
        outline: none;
        border: none;
    }

    form button:hover {
        color: white;
        background-color: black;
        transition: ease-in-out;
    }

    form button:active {
        background: #7c6e6e;
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
                        <a class="nav-link" aria-current="page" href="blogs.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contactus.php">Contact Us</a>
                    </li>
                    <li> <a href="#" id="log-out"><button type="button" class="btn btn-info">Logout</button></a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <form action="contactus.php">
            <img src="./Images/customer-service.png" alt="service-logo" id="service-logo">
            <label>Name</label>
            <input type="username" placeholder="Your Name">

            <label>Email</label>
            <input type="email" placeholder="Your Email">

            <label>Description</label>
            <textarea placeholder="Message"></textarea>

            <button id="submit">SUBMIT</button>
        </form>

        <div class="image-sec">
            <img src="./Images/contactus.svg" alt="contact-image">
        </div>
    </div>
</body>