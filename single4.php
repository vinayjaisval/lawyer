<?php include 'header.php'; ?>

<style>
    body {
        background: #f8f9fa;
    }

    /* Blog Container */
    .blog-container {
        max-width: 900px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
    }

    /* Title */
    .blog-title {
        font-size: 32px;
        font-weight: 500;
    }

    /* Author Section */
    .author-box {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 15px 0;
    }

    .author-box img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    /* Hero Image */
    .blog-img img {
        width: 100%;
        border-radius: 10px;
    }

    /* Paragraph */
    .blog-content p {
        font-size: 16px;
        color: #000624;
        line-height: 1.7;
    }

    /* Tags */
    .tags a {
        text-decoration: none;
        background: #eee;
        padding: 6px 12px;
        margin-right: 5px;
        border-radius: 20px;
        font-size: 13px;
    }

    .tag-wrapper a {
        display: inline-block;
        margin: 5px 10px 5px 0;
        padding: 6px 12px;
        background: #eee;
        border-radius: 20px;
        text-decoration: none;
        font-size: 13px;

        white-space: nowrap;
        /* 🔥 IMPORTANT: text break nahi hoga */
    }

    /* Share */
    .share-icons i {
        margin-right: 15px;
        cursor: pointer;
    }

    /* Recent Posts */
    .recent-post img {
        width: 100%;
        border-radius: 5px;
    }

    .recent-post-title {
        font-size: 16px;
        font-weight: 600;
    }
</style>

<nav class="navbar navbar-expand-lg custom-navbar bg-light">
    <div class="container">

        <!-- Brand / Title -->
        <a class="navbar-brand fw-bold" href="#">
            AnantLaw Briefings
        </a>

        <!-- Mobile Toggle -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <form class="d-flex align-items-center">
                        <i class="fa fa-search me-2"></i>
                        <input
                            type="search"
                            class="form-control form-control-sm"
                            placeholder="Search Briefings">
                    </form>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Popular Topics </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link"
                        href="briefings-talent-pool.php">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<div class="container my-2">

    <!-- Blog Content -->
    <div class="blog-container">
        <!-- Author -->
        <div class="author-box">
            <img src="img/e2.avif" alt="author">
            <div>
                <strong>Partners' Desk</strong><br>
                <small>Mar 22, 2024 • 1 min read</small>
            </div>
        </div>
        <!-- Title -->
        <h1 class="blog-title" style="font-family: 'Segoe UI', sans-serif; font-style: normal !important;">
            Rahul Goel recognised in Asia's Super 50 TMT lawyers for 4 years in a row</h1>
        <!-- Hero Image -->
        <div class="blog-img my-4">
            <img src="img/b4.avif" alt="blog">
        </div>

        <!-- Content -->
        <div class="blog-content">
            <p>
                AnantLaw is pleased to announce that Rahul Goel, Partner at our firm has been recognised by ALB's Asia Super 50 TMT Lawyers for the fourth consecutive year.
            </p>

            <p>
                Rahul's deep subject matter expertise on Tech, Media and Telecom laws, intimate client relationships, cross-practice area competence in disputes, litigation, and competition law and his commitment to enable growth for his clients are some of the things that stood out from over 400 recommendations made by in-house general counsels across 11 jurisdictions in Asia.
            </p>

            <p>
                In our recent voice of the market, a client shared with us that Rahul's team champions in providing well timed, technically accurate legal updates specific to their areas of interests that very quickly and appropriately translate into actionable intelligence.
            </p>

            <p>
                We would like to thank our trusted clients for bestowing trust upon us to lead complex cross border matters in tech, media and telecom where our team continues to relentlessly help our clients shape tomorrows digital age, today.
            </p>

            <hr>
            <p class="text-primary">Connect with your Super 50 Lawyer</p>
            <div class="container my-3">
                <div class="row g-4">

                    <!-- Rahul Goel -->
                    <div class="col-md-12">
                        <div class="card p-4 shadow-sm h-100 bg-light">
                            <h5 class="fw-bold mb-2">
                                <a href="#" target="_blank" class="text-decoration-none text-primary" style="font-family: 'Segoe UI', sans-serif; font-style: normal !important;">
                                    Rahul Goel
                                </a>
                            </h5>

                            <p class="mb-1">
                                <strong>Email:</strong>
                                <a href="" class="text-primary">rahul.goel@anantlaw.com</a>
                            </p>

                            <p class="mb-1">
                                <strong>Mobile:</strong>
                                <a href="">+91 98990 27144</a>
                            </p>

                            <p class="mb-0">
                                <strong>Connect:</strong>
                                <a href="https://www.linkedin.com/in/adrahul" target="_blank" class="text-primary">LinkedIn</a>
                            </p>
                        </div>
                    </div>

                    <hr>
                    <p class="mt-4">About Asian Legal Business: Asian Legal Business (ALB) is owned by Thomson Reuters, the world’s leading source of intelligent information for businesses and professionals. With its portfolio of leading titles, online services, law awards and in-house legal summits, ALB provides authoritative and unbiased insights and unmatched networking and business development opportunities to legal professionals throughout the Asia-Pacific and the Middle East regions.
                    </p>

                </div>
            </div>
        </div>
        <!-- Tags -->
        <div class="tags my-2 mt-3">
            <strong class="d-block mb-2">Tags:</strong>

            <div class="tag-wrapper">
                <a href="tech-media-telecom.php">Tech, Media & Telecom</a>
                <a href="disputes-litigation.php">Data Protection & Privacy</a>
                <a href="#">Rahul Goel</a>
            </div>
        </div>

        <!-- Share -->
        <div class="share-icons mb-1 mt-3">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-x-twitter"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fas fa-link"></i>
            <i class="fas fa-print"></i>
        </div>
    </div>

    <!-- Recent Posts -->
    <div class="mt-5">
        <h4 class="mb-4">Recent Posts</h4>

        <div class="row">

            <div class="col-md-4 d-flex">
                <div class="recent-post">
                    <img src="img/b24.avif" alt="">
                    <p class="recent-post-title mt-2">
                        With over 1trillion$ of infrastructure projects at stake, IBLJ recognises Cement Cartel Case as Deal of the Year - 2023
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="recent-post">
                    <img src="img/b25.avif" alt="">
                    <p class="recent-post-title mt-2">
                        Rahul Goel recognised in Asia's Super 50 TMT lawyers for 4 years in a row
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="recent-post">
                    <img src="img/b4.avif" alt="">
                    <p class="recent-post-title mt-2">
                        AnantLaw awarded Competition & Antitrust Firm of the Year 2023 by asialaw
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php'; ?>