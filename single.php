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
        font-weight: 700;
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

        <!-- Title -->
        <!-- <h1 class="blog-title">Delhi High Court upholds natural justice</h1> -->

        <!-- Author -->
        <div class="author-box">
            <img src="img/e2.avif" alt="author">
            <div>
                <strong>Communications</strong><br>
                <small>Sep 5, 2025 • 2 min read</small>
            </div>
        </div>
        <!-- Title -->
        <h1 class="blog-title">Delhi High Court upholds natural justice</h1>
        <!-- Hero Image -->
        <div class="blog-img my-4">
            <img src="img/b1.avif" alt="blog">
        </div>

        <!-- Content -->
        <div class="blog-content">
            <p>
                In a significant order, the Hon'ble Delhi High Court directed the Deputy Conservator of Forests (DCF) to pass any order in tree felling cases only after hearing the complainant and after dealing with all submissions of the complainant. Also, DCF has been directed to provide all documents to the complainant and comply with the principles of natural justice.
            </p>

            <p>
                Also, the order passed by the DCF, allowing compounding of tree offence of felling of 3 trees in West Delhi Area, without granting any hearing and documents to the complainant/ petitioner was set-aside. The matter has been remanded back to DCF for fresh adjudication in compliance with principles of natural justice.
            </p>

            <p>
                This is one of the first orders where the order of the DCF has been set-aside for not complying with principles of natural justice and allowing compounding of tree offence without hearing the complainant.
            </p>

            <p>
                Earlier, DCF used to approve tree cutting applications without sharing them with complainants. This judgment changes that practice.
            </p>

            <p>
                The decision may lead to stronger enforcement and criminal prosecution against illegal tree cutting.
            </p>

            <p>
                AnantLaw represented the petitioner/ complainant before the Hon'ble High Court of Delhi [Ram Kumar v DCF & Ors. WP(C) 13534/2024]
            </p>
        </div>



        <div class="container my-1">
            <div class="card p-3 shadow-sm d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="fa fa-file-pdf fa-2x text-danger"></i>
                    <div>
                        <h6 class="mb-0">high_court_order.pdf</h6>
                        <small class="text-muted">Download PDF • 26KB</small>
                    </div>

                </div>

                <!-- Right: Download Button -->
                <a href="img/high_court_order.pdf" download class="btn btn-outline-dark">
                    <i class="fa fa-download"></i>
                </a>

            </div>
        </div>
        <!-- Tags -->
        <div class="tags my-2 mt-3">
            <strong>Tags:</strong>
            <a href="#">Environment</a>
            <a href="#">Sustainability</a>
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
                    <img src="img/b2.avif" alt="">
                    <p class="recent-post-title mt-2">
                        AnantLaw bags Rising Law Firm Award
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="recent-post">
                    <img src="img/b10.avif" alt="">
                    <p class="recent-post-title mt-2">
                        Supreme Court dismisses cement case
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="recent-post">
                    <img src="img/b13.avif" alt="">
                    <p class="recent-post-title mt-2">
                        AI Legal Conference Insights
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php'; ?>