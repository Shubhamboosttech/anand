<?php
include "header.php";
include "menu.php";
?>

<style>
    .carousel-item {
        height: 65vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #welcome{
        -moz-text-decoration-style: solid;
        font-family: "Arial Rounded MT Bold";
        font-size: xxx-large;

    }
    #mess{
        text-decoration: solid;
        color: blue;
    }
    #page{
        margin-bottom: 70px;
        background-color: #e0e0e1;
    }
</style>

<header>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('assets/carousel-3.jpeg')">
                <div class="carousel-caption">
                    <h1>Information Technology</h1>
                    <p>WE PROVIDE TAILORED SOLUTIONS FOR YOUR IT WORKFORCE NEEDS, ENSURING OPTIMAL RESULTS.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/carousel-2.jpeg')">
                <div class="carousel-caption">
                    <h1>Healthcare</h1>
                    <h5>DISCOVER THE PERFECT FIT FOR YOUR HEALTHCARE STAFFING NEEDS THROUGH OUR COMPREHENSIVE SERVICES.</h5>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/carousel-1.jpeg')">
                <div class="carousel-caption">
                    <h1>Education and Edtech</h1>
                    <h5>OUR EXPERTISE LIES IN PROVIDING COMPETENT MANPOWER TO INSTITUTIONS AND EDTECH COMPANIES, ENSURING THE RIGHT TALENT FOR YOUR ORGANIZATION'S NEEDS.</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>

<!-- Page Content -->
<section class="py-5" id="page">
    <div class="container">
        <h1 class="fw-light" id="welcome">Welcome To BoostTech</h1>
        <h3 id="mess">Empowering your journey towards success through exceptional talent acquisition.</h3>
        <p class="lead">


            Boost Tech Consulting was founded in 2017 with a vision to provide extensive and stable hiring solutions for middle and top management positions across industries and verticals PAN India & Globally. At BoostTech, we are dedicated to connecting exceptional talent with great opportunities. Whether you are a candidate seeking a new career path or an organization looking to find the perfect addition to your team, we are here to assist you every step of the way.
              <br><br>
            Our experienced team of recruiters understands the unique needs of both candidates and employers. We take the time to thoroughly understand your requirements, ensuring that we find the best fit for your specific goals and objectives. With our extensive network and resources, we strive to match top talent with the right opportunities, fostering successful partnerships that drive growth and success.
              <br><br>
            We believe in building long-term relationships, and our commitment to exceptional service extends beyond the initial placement. We provide ongoing support and guidance to candidates and employers alike, ensuring a smooth and rewarding experience for everyone involved.</p>
    </div>
</section>





<?php
include "footer.php";
?>
