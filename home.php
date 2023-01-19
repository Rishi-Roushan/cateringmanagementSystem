<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    div.container {
        margin-top: 10px;
        position: relative;
        left: 30px;
        border: 3px solid #73AD21;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
        background: rgb(19, 201, 43);
        background: linear-gradient(90deg, rgba(19, 201, 43, 1) 0%, rgba(249, 255, 0, 1) 100%);

    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 800px;
        position: relative;
        margin: auto;
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 4.5s;
    }

    @keyframes fade {
        from {
            opacity: 0.9
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 200px) {
        .text {
            font-size: 11px
        }
    }

    div.relative {
        position: relative;
        width: 350px;
        height: 450px;
        border: 3px solid #73AD21;
        margin-top: -510px;
        margin-left: 10px;
    }

    div.absolute {
        position: relative;
        width: 350px;
        height: 450px;
        border: 3px solid #73AD21;
        margin-top: -450px;
        margin-left: 1180px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="free Delivery.png" id="imgageone" onclick="imagesize();"
                    style="width:50px;height:50px;border-radius:50%;">
            </div>
            <ul class="nav navbar-nav">&nbsp;
                <li class=""><a href="#">Home</a></li>
                <li class=""><a href="#">About</a></li>

                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    <marquee bgcolor="lightcyan" direction="left" loop="2" style="margin-top:-240px;">WELCOME TO YOUR's CATERING
    </marquee>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="food1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="food2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">

            <img src="food2.jpg" style="width:100%">
        </div>

    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <br>
    <div class="relative">
        <img src="free Delivery.png" style="width:100%;height: 100%;">
    </div>
    <div class="absolute"><img src="free Delivery.png" style="width:100%;height: 100%;">

    </div>

    <br>




    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>

</body>

</html>