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
            <!-- LEFT SIDE CONTENT -->
            <div class="col-lg-7 col-md-6">
                <div class="custom-left-content">
                    <p class="custom-link">
                        <a href="#" class="view-link">View all services</a>
                    </p>

                    <h1 class="custom-heading" style="font-size: 45px;">
                        Corporate & Commercial
                    </h1>
                    <p class="custom-text">
                        RELATED PRACTICE AREAS
                    </p>
                    <div class="practice-area">
                        <a href="antitrust-competition.php" class="practice-label">
                            Antitrust & Competition
                        </a>
                    </div>
                    <div class="practice-area">
                        <a href="tech-media-telecom.php" class="practice-label">
                           Tech, Media & Telecom
                        </a>
                    </div>
                    <div class="practice-area">
                        <a href="disputes-litigation.php" class="practice-label">
                            Disputes & Litigation
                        </a>
                    </div>
                    <div class="practice-area">
                        <a href="policy-regulatory.php" class="practice-label">
                            Policy & Regultory
                        </a>
                    </div>
                    <div class="practice-area">
                        <a href="international-trade-wto.php" class="practice-label">
                            International Trade & WTO
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Slider -->
            <div class="col-lg-5">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/b49.avif">
                                </div>
                                <div class="wix-meta">
                                    <img src="img/a1.avif">
                                    <div>
                                        <span class="author">Partners' Desk</span><br>
                                        <span class="date">May 13, 2021</span>
                                    </div>
                                </div>
                                <div class="wix-content">
                                    <div class="wix-category">
                                        <a href="#" class="">AWARDS & RANKINGS</a>
                                    </div>
                                    <h3 class="wix-title">
                                        <a href="#">AnantLaw bags the Rising Law Firm of the Year Award at Legal Era 2024 Awards Ceremony</a>
                                    </h3>


                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/b50.avif">
                                </div>
                                <div class="wix-meta">
                                    <img src="img/a1.avif">
                                    <div>
                                        <span class="author">Partners' Desk</span><br>
                                        <span class="date">Mar 26, 2024</span>
                                    </div>
                                </div>
                                <div class="wix-content">
                                    <div class="wix-category">
                                        <a href="#">AWARDS & RANKINGS</a>
                                    </div>
                                    <h3 class="wix-title">
                                        <a href="#">With over 1trillion$ of infrastructure projects at stake, IBLJ recognises Cement Cartel Case as Deal of the Year - 2023</a>
                                    </h3>


                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/b51.avif">
                                </div>
                                <div class="wix-meta">
                                    <img src="img/a1.avif">
                                    <div>
                                        <span class="author">Partners' Desk</span><br>
                                        <span class="date">Mar 22, 2024</span>
                                    </div>
                                </div>
                                <div class="wix-content">
                                    <div class="wix-category">
                                        <a href="#">AWARDS & RANKINGS</a>
                                    </div>
                                    <h3 class="wix-title">
                                        <a href="#">Rahul Goel recognised in Asia's Super 50 TMT lawyers for 4 years in a row</a>
                                    </h3>


                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/b52.avif">
                                </div>
                                <div class="wix-meta">
                                    <img src="img/a1.avif">
                                    <div>
                                        <span class="author">Partners' Desk</span><br>
                                        <span class="date">Feb 23, 2024</span>
                                    </div>
                                </div>
                                <div class="wix-content">
                                    <div class="wix-category">
                                        <a href="#">AWARDS & RANKINGS</a>
                                    </div>
                                    <h3 class="wix-title">
                                        <a href="#">Rahul Goel is ranked in the A-List lawyers by law.Asia, India Business Law Journal</a>
                                    </h3>


                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="wix-card">
                                <div class="wix-img">
                                    <img src="img/b53.avif">
                                </div>
                                <div class="wix-meta">
                                    <img src="img/a1.avif">
                                    <div>
                                        <span class="author">Partners' Desk</span><br>
                                        <span class="date">Sep 27, 2023</span>
                                    </div>
                                </div>
                                <div class="wix-content">
                                    <div class="wix-category">
                                        <a href="#">AWARDS & RANKINGS</a>
                                    </div>
                                    <h3 class="wix-title">
                                        <a href="#">AnantLaw awarded Competition & Antitrust Firm of the Year 2023 by asialaw</a>
                                    </h3>


                                </div>
                            </div>
                        </div>

                        

                    </div>

                    <!-- Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- Dots -->
                    <!-- <div class="swiper-pagination"></div> -->
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