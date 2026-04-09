<?php include 'header.php'; ?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Swiper Fix */
    .swiper {
        width: 100%;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
    }

    /* Card Design (Same as yours) */
    .wix-card {
        background: #fff;
        border: 1px solid #eee;
        overflow: hidden;
        transition: 0.3s;
        width: 100%;
    }

    .wix-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Image */
    .wix-img img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: 0.4s;
    }

    .wix-card:hover .wix-img img {
        transform: scale(1.05);
    }

    /* Content */
    .wix-content {
        padding: 20px;
    }

    .wix-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .wix-title a {
        text-decoration: none;
        color: #000;
    }

    .wix-title a:hover {
        color: #c59d5f;
    }

    .wix-category {
        font-size: 12px;
        margin-bottom: 15px;
    }

    .wix-category a {
        color: #999;
        text-decoration: none;
    }

    .wix-meta {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .wix-meta img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }

    .author {
        font-size: 13px;
        font-weight: 600;
    }

    .date {
        font-size: 12px;
        color: #888;
    }
</style>

<div class="about">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-7 col-md-6">
                <div class="section-header">
                    <h2>

                        Awards & Rankings</h2>
                </div>
                <p>AnantLaw provides innovative legal advise to clients across industries that has won us various awards and rankings from leading international agencies.</p>

            </div>

            <!-- Right Slider -->
            <div class="col-lg-5">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/about.jpg">
                                </div>
                                <div class="wix-content">
                                    <h3 class="wix-title">
                                        <a href="#">AnantLaw nominated as Boutique Litigation Firm</a>
                                    </h3>
                                    <div class="wix-category">
                                        <a href="#">AWARDS & RANKINGS</a>
                                    </div>
                                    <div class="wix-meta">
                                        <img src="img/user.jpg">
                                        <div>
                                            <span class="author">Partners' Desk</span><br>
                                            <span class="date">May 13, 2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/about.jpg">
                                </div>
                                <div class="wix-content">
                                    <h3 class="wix-title">
                                        <a href="#">Legal Experts with Experience</a>
                                    </h3>
                                    <div class="wix-category">
                                        <a href="#">LEGAL SERVICES</a>
                                    </div>
                                    <div class="wix-meta">
                                        <img src="img/user.jpg">
                                        <div>
                                            <span class="author">Admin</span><br>
                                            <span class="date">June 10, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/about.jpg">
                                </div>
                                <div class="wix-content">
                                    <h3 class="wix-title">
                                        <a href="#">Trusted Law Firm</a>
                                    </h3>
                                    <div class="wix-category">
                                        <a href="#">CONSULTATION</a>
                                    </div>
                                    <div class="wix-meta">
                                        <img src="img/user.jpg">
                                        <div>
                                            <span class="author">Team</span><br>
                                            <span class="date">Jan 5, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- Dots -->
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });
    });
</script>