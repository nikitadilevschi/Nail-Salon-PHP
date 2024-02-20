<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>


    <title>Glossy Glamour</title>
</head>
<body>
<div>
    <?php include "database/db.php"; ?>
    <?php include "database/connect.php"; ?>


    <!--Header Start -->
    <?php require "blocks/header.php"; ?>
    <!--Header End -->


    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"
                 style="background-image: url('assets/img/carousel1.jpg');" alt="First slide.">
                <div class="carousel-caption">
                    <h5>Luxurious Nail Services for You</h5>
                    <p>Unwind in Style with Our Pampering Nail Services</p>
                </div>
            </div>

            <div class="carousel-item"
                 style="background-image: url('assets/img/carousel2.jpg')" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Experience the Ultimate Relaxation</h5>
                    <p>Transform Your Nails with Our Trending Nail Art Designs</p>
                </div>
            </div>

            <div class="carousel-item"
                 style="background-image: url('assets/img/carousel3.jpg')" alt="Third slide">
                <div class="carousel-caption">
                    <h5>Beautiful Nails for Every Occasion</h5>
                    <p>Indulge in Luxury with Our Manicure and Pedicure Treatments</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--  End of the Carousel  -->


    <!--Our Services-->
    <section id="serviceList" class="service-body">
        <div class="col-md-12">
            <div class="titlepage">
                <h2> Our Services</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $services = get_services_all("services");
                foreach ($services as $service): ?>
                    <div class="col-lg-4">
                        <div class="one-service" id="<?php echo $service['service_name'] ?>">
                            <div class="wrap-image">
                                <a href="#">
                                    <img src="<?php echo $service['img']; ?>"
                                         alt="<?php echo $service['service_name']; ?>">
                                </a>
                                <span class="time-work-service"><?php echo $service['duration']; ?></span>
                            </div>
                            <a href="#" class="service-name"><?php echo $service['service_name']; ?></a>
                            <p><?php echo $service['description']; ?></p>
                            <span class="benefits-service">benefits</span>
                            <ul>
                                <?php foreach (explode(',', $service['benefits']) as $benefit): ?>
                                    <li><?php echo trim($benefit); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!--End of Our Service-->

    <!--Start of Testimonials-->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading text-center">Testimonials</h2>
                    <hr class="my-4">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/user.png" alt="">
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">I had an amazing experience at this nail salon. The staff was
                            so friendly and welcoming, and the atmosphere was very relaxing. The technician who did my
                            nails was very skilled and took the time to make sure that I was completely satisfied with
                            my manicure. I left feeling pampered and refreshed, and I can't wait to come back again
                            soon!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/user.png" alt="">
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">I've been a regular at this nail salon for over a year now and
                            I have to say, they never disappoint. The staff is always friendly and welcoming, and the
                            atmosphere is very calming and relaxing. I always leave feeling refreshed and my nails look
                            great every time. I love that they use high-quality products and pay attention to even the
                            smallest details. This is definitely the best nail salon in town!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="assets/img/user.png" alt="">
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">I recently got a manicure and pedicure at this nail salon
                            and I was blown away by the quality of service. The nail technician was very skilled and
                            took her time to make sure everything was perfect. I left feeling relaxed and pampered, and
                            my nails looked amazing for weeks. I highly recommend this salon to anyone looking for
                            high-quality nail services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End of Testimonials-->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2483.6261295024096!2d0.003152!3d51.501728!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a81c7b6dfe23%3A0xc31e4c0ca6a4ace2!2sRavensbourne%20University%20London!5e0!3m2!1sen!2suk!4v1677607039681!5m2!1sen!2suk"
                                width="600" height="386" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Start-->
    <?php require "blocks/footer.php"; ?>
    <!--Footer End-->

</body>
</html>