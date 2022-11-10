<?php
include 'header.php';



?>


</nav>
<div class="row">

    <div class="col-lg-6">
        <h1 class="big-heading">Unlimited movies, TV shows, and more.</h1>
        <p class="text-light">Watch anywhere. Cancel anytime.</p>
        <button type="button" class="btn btn-outline-light btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button>
        <button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button>
    </div>
    <div class="col-lg-6">
        <img class="title-image" src="img/mobile.png" alt="iphone-mockup">
    </div>

    <section class="white-section" id="features">

        <div class="container-fluid">

            <div class="row">
                <div class="feature-box col-lg-4">
                    <i class="icon fas fa-solid fa-tv fa-4x"></i>
                    <h3 class="feature-title">Enjoy on your TV.</h3>
                    <p>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</p>
                </div>

                <div class="feature-box col-lg-4 ms-auto  ">
                    <i class="icon fas fa-solid fa-download fa-4x"></i>
                    <h3 class="feature-title">Download your shows to watch offline.</h3>
                    <p>Save your favorites easily and always have something to watch.</p>
                </div>
            </div>


        </div>
    </section>



    <section class="colored-section " id="review">

        <div id="review-carousel" class="carousel slide" data-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active container-fluid">
                    <h2 class="review-text">I no longer have to wait for new movies to be available on the Internet.Everything is instantly available on Netflix.</h2>
                    <img class="review-image" src="img/man.png" alt="dog-profile">
                    <em>Michael, New York</em>
                </div>
                <div class="carousel-item container-fluid">
                    <h2 class="review-text">Finally I can watch anything anywhere even my favorite cartoons.</h2>
                    <img class="review-image" src="img/boy.png" alt="lady-profile">
                    <em>Tom, London</em>
                </div>
            </div>
            <a class="carousel-control-prev" href="#review-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#review-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </section>






    <section class="white-section text-light" id="pricing">

        <h2 class="section-heading">Choose the plan thats right for you.</h2>
        <p>Watch all you want. Ad-free.
            Recommendations just for you.
            Change or cancel your plan anytime.</p>

        <div class="row">

            <div class="pricing-column col-lg-4 col-md-6">
                <div class="card card bg-dark text-light border border-light">
                    <div class="card-header">
                        <h3>Basic</h3>
                    </div>
                    <div class="card-body">
                        <h2 class="price-text">€7.99 / mo</h2>
                        <p>Video quality <strong>Good</strong> </p>
                        <p>Resolution <strong>720p</strong></p>
                        <p>Devices <strong>3</strong></p>
                        <button class="btn btn-lg btn-block btn-outline-dark" type="button">Sign Up</button>
                    </div>
                </div>
            </div>

            <div class="pricing-column col-lg-4 col-md-6">
                <div class="card bg-dark text-light border border-light">
                    <div class="card-header">
                        <h3 clas>Standart</h3>
                    </div>
                    <div class="card-body">
                        <h2 class="price-text">€9.99 / mo</h2>
                        <p>Video quality <strong>Better</strong> </p>
                        <p>Resolution <strong>1080p</strong></p>
                        <p>Devices <strong>6</strong></p>
                        <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>
                    </div>
                </div>
            </div>

            <div class="pricing-column col-lg-4">
                <div class="card card bg-dark text-light border border-light">
                    <div class="card-header">
                        <h3>Premium</h3>
                    </div>
                    <div class="card-body">
                        <h2 class="price-text">€11.99 / mo</h2>
                        <p>Video quality <strong>Best</strong> </p>
                        <p>Resolution <strong>4K+HDR</strong></p>
                        <p>Devices <strong>12</strong></p>
                        <button class="btn btn-lg btn-block btn-dark" type="button">Sign Up</button>

                    </div>
                </div>
            </div>



        </div>

    </section>



    <section class="colored-section">

        <div class="container-fluid">

            <h3 class="download  ">The Netflix app is the best way to watch on your phone or tablet.</h3>
            <button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-apple"></i> Download</button>
            <button class="download-button btn btn-lg btn-dark" type="button"><i class="fab fa-google-play"></i> Download</button>
        </div>
    </section>



    <footer class="white-section" id="footer">
        <div class="container-fluid text-light">
            <p>© Copyright 2022 Netlix</p>
        </div>
    </footer>
    <?php
    include 'footer.php';

    ?>