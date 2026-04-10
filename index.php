<?php
include 'header.php';
?>
<style>
    .video-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.bg-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    transform: translate(-50%, -50%);
    object-fit: cover;
    z-index: 1;
}

/* Overlay (dark effect) */
.video-section::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    z-index: 2;
}

/* Content */
.video-content {
    position: relative;
    z-index: 3;
    color: #fff;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
}

.video-content h1 {
    color: #fff;
    font-size: 50px;
    margin-bottom: 10px;
}

.video-content p {
    font-size: 18px;
    margin-bottom: 20px;
}

.btn {
    padding: 10px 25px;
    background: #fff;
    color: #000;
    text-decoration: none;
    border-radius: 5px;
}
</style>
<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
    </ol>

    <div class="carousel-inner">

        <!-- ✅ Single Slide -->
        <div class="carousel-item active">

            <video class="d-block w-100" autoplay muted loop playsinline>
                <source src="img/slider.mp4" type="video/mp4">
            </video>

            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">Best Newcomer of the

                    Year, AsiaLaw Awards</h1>

                <a class="btn animated fadeInUp" href="#">Explore</a>
            </div>

        </div>

    </div>
</div>
<!-- Carousel End -->


<!-- Top Feature Start-->
<div class="feature-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-check-circle"></i>
                    <h3>Legal</h3>
                    <p>Govt Approved</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="fa fa-user-tie"></i>
                    <h3>Attorneys</h3>
                    <p>Expert Attorneys</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-thumbs-up"></i>
                    <h3>Success</h3>
                    <p>99.99% Case Won</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-handshake"></i>
                    <h3>Support</h3>
                    <p>Quick Support</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Feature End-->


<!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header">
                    <h2>AnantLaw delivers</h2>
                    <p>First-in class, best-in class
legal outcomes for clients,
reshaping jurisprudence.</p>
                </div>
                <div class="about-text">
                    <p>
                       Innovation is at the core of our DNA, driving the firm's mission to redefine the legal landscape. We aren’t content with the status quo and are committed to push boundaries, embrace new possibilities to drive positive change. One such example is the first ever judgement in India that led to reduction of penalty on the basis of relevant turnover & saved our client >100million US$. It is now the most cited judgement in India's competition law & was awarded 'Deal of the Year' by Indian Business Law.
                    </p>
                    <p>
                        Our mission is not just to act as trusted advisors but to partner with clients in their growth journey. When clients face daunting challenges, AnantLaw becomes their ally, offering guidance, support, and relentless pursuit of excellence. For example, we represented an US based company in an antidumping investigation by the United States Department of Commerce (US DoC) on quartz surface products to successfully reduce antidumping duties from 161.56% to 3.19%.
                    </p>
                    <!-- <a class="btn" href="">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<section class="video-section">
    <video autoplay muted loop playsinline class="bg-video">
        <source src="img/slider2.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="video-content">
        <h1>

Explore AnantLaw practice areas

"We engineer legal solutions

that are adept at charting

our clients growth curve"</h1>
<p>Anu Monga, Partner</p>
        <a href="anu-monga.php">

        <p style="color: #fff;">Explore AnantLaw practice areas</p>
        </a>
      
    </div>
</section>

<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header">
            <p>AnantLaw doesn't compete. Instead,</p>
            <h2>We lead to set the
                bar for competitors</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <!-- <div class="service-icon">
                        <i class="fa fa-landmark"></i>
                    </div> -->
                    <h3>Designed to Deliver</h3>
                    <p>
                        AnantLaw leaders are functional experts in their fields & have been recognised amongst the top 50 Lawyers in Asia.
                    </p>
                    <!-- <a class="btn" href="">Learn More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <!-- <div class="service-icon">
                        <i class="fa fa-users"></i>
                    </div> -->
                    <h3>Proven Track Record
                    </h3>
                    <p>
                       We know very well that old ways don't open new doors. Our work has been recognised with over 30 awards & rankings.
                    </p>
                    <!-- <a class="btn" href="">Learn More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <!-- <div class="service-icon">
                        <i class="fa fa-hand-holding-usd"></i>
                    </div> -->
                    <h3>Financial Impact
                    </h3>
                    <p>
                       Our team has positively contributed on balance sheet and profits of companies in excess of 50billion US$
                    </p>
                    <!-- <a class="btn" href="">Learn More</a> -->
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h3>Education Law</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-gavel"></i>
                    </div>
                    <h3>Criminal Law</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h3>Cyber Law</h3>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Service End -->








<!-- FAQs Start -->
<div class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="faqs-img">
                    <img src="img/faqs.jpg" alt="Image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="section-header">
                    <h2>Have A Questions?</h2>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                <span>1</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                <span>2</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                <span>3</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                <span>4</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                <span>5</span> Lorem ipsum dolor sit amet?
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn" href="">Ask more</a>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->


<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        <div class="section-header">
            <h2>Review From Client</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/testimonial-1.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Client Name</h2>
                        <p>Profession</p>
                    </div>
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/testimonial-2.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Client Name</h2>
                        <p>Profession</p>
                    </div>
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/testimonial-3.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Client Name</h2>
                        <p>Profession</p>
                    </div>
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/testimonial-4.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Client Name</h2>
                        <p>Profession</p>
                    </div>
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/testimonial-1.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Client Name</h2>
                        <p>Profession</p>
                    </div>
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/testimonial-2.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Client Name</h2>
                        <p>Profession</p>
                    </div>
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="fa fa-quote-right"></i>
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/testimonial-3.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <h2>Client Name</h2>
                        <p>Profession</p>
                    </div>
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header">
            <h2>Latest From Blog</h2>
        </div>
        <div class="owl-carousel blog-carousel">
            <div class="blog-item">
                <img src="img/blog-1.jpg" alt="Blog">
                <h3>Lorem ipsum dolor</h3>
                <div class="meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Civil Law</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                </p>
                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="blog-item">
                <img src="img/blog-2.jpg" alt="Blog">
                <h3>Lorem ipsum dolor</h3>
                <div class="meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Family Law</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                </p>
                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="blog-item">
                <img src="img/blog-3.jpg" alt="Blog">
                <h3>Lorem ipsum dolor</h3>
                <div class="meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Business Law</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                </p>
                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="blog-item">
                <img src="img/blog-1.jpg" alt="Blog">
                <h3>Lorem ipsum dolor</h3>
                <div class="meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Education Law</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                </p>
                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="blog-item">
                <img src="img/blog-2.jpg" alt="Blog">
                <h3>Lorem ipsum dolor</h3>
                <div class="meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Criminal Law</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                </p>
                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="blog-item">
                <img src="img/blog-3.jpg" alt="Blog">
                <h3>Lorem ipsum dolor</h3>
                <div class="meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Cyber Law</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                </p>
                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="blog-item">
                <img src="img/blog-1.jpg" alt="Blog">
                <h3>Lorem ipsum dolor</h3>
                <div class="meta">
                    <i class="fa fa-list-alt"></i>
                    <a href="">Business Law</a>
                    <i class="fa fa-calendar-alt"></i>
                    <p>01-Jan-2045</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                </p>
                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<?php
include 'footer.php';
?>