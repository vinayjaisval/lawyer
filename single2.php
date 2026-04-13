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
                <small>May 7, 2024 • 2 min read</small>
            </div>
        </div>
        <!-- Title -->
        <h1 class="blog-title">AnantLaw bags the Rising Law Firm of the Year Award at Legal Era 2024 Awards Ceremony</h1>
        <!-- Hero Image -->
        <div class="blog-img my-4">
            <img src="img/b2.avif" alt="blog">
        </div>

        <!-- Content -->
        <div class="blog-content">
            <p>
                AnantLaw is at the forefront of defining the curve for legal landscape in India. We have a well established and proven track record to deliver positive outcomes for clients on the axis of legal innovation, excellence and finesse.
            </p>

            <p>
                Our journey as a full service law firm started in the year 2020. Since then, AnantLaw has been recognised with over 40 awards. This one in particular is close to us as it emphasis on our firm as a whole, and what we deliver to our clients as a holistic service to cover 'all things legal' when it comes to the Indian Jurisdiction.
            </p>

            <p>
                Some highlights from our services include exceptional work done by the team in (1) Providing launchpad services to clients overseas and simplifying their journey when planning, and implementing their entry into India (2) Conducting Legal Due Diligence for acquisition targets (3) Facilitating organisations in conducting legal compliances across spectrum of all practices of law (4) Leading the pack in defining the curve for antitrust, competition, data privacy, tech, media and telecom law in the country (5) Helping founders protect their interests in companies they have invested their lives, emotion, and for some their entire careers (6) Participating alongside governments in defining the future of policy landscape, and future of law in India (7) Designing, and implementing litigation strategies that have helped companies save millions of dollars (8) Supporting over 1 trillion USD of infrastructure projects in containing costs due to unfair competition practices (9) Collaborating with Padma Shree Awardee to help citizens of National Capital Region, Delhi, breathe cleaner, healthier, and fresh air (10) Collaborating with national law universities in nurturing young talent.
            </p>

            <p>
                Our curve, and participation in Legal Services Industry has meant that AnantLaw has represented, and delivered newsworthy positive outcomes for clients that have received independent media coverage across national and international news agencies including AajTak, NDTV, Bloomberg, CNBC, Financial Times, Times of India, Hindustan Times amongst others.
            </p>

            <p>
                AnantLaw extends gratitude and thankfulness to the Jury of Legal Era Indian Awards 2024 for acknowledging our teams hard work with a well-deserved recognition as 'The Rising Law Firm of the Year - 2024'. Rest assured, we are relentlessly working in the direction of winning many more recognitions in the future.
            </p>

            <p>
                About Legal Era Awards 2024

                13th Annual Legal Era Awards - Indian Legal Awards 2023-24 took place at Taj Palace, Delhi on 4 May 2024. The main objective for the awards was to 'recognise the Extraordinary Talent and Excellence of Our Legal Fraternity'.


                Legal Era aimed to set a benchmark by recognising legal finesse, innovation, and accomplishments of Legal Practitioners, In-House Teams, and Law Firms at the 13th Annual Indian Legal Era Awards 2024. The awards saw an unprecedented gathering with participation from the leading stalwarts of the legal industry, advocates, and eminent jurists. This included Rahul Goel, and Anu Monga from the AnantLaw team.
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
    <strong class="d-block mb-2">Tags:</strong>

    <div class="tag-wrapper">
        <a href="antitrust-competition.php">Antitrust & Competition</a>
        <a href="disputes-litigation.php">Disputes & Litigation</a>
        <a href="tech-media-telecom.php">Tech, Media & Telecom</a>
        <a href="disputes-litigation.php">Data Protection & Privacy</a>
        <a href="policy-regulatory.php">Policy & Regulatory</a>
        <a href="environment-sustainability.php">Environment & Sustainability</a>
        <a href="corporate-commercial.php">Corporate & Commercial</a>
        <a href="anu-monga.php">Anu Monga</a>
        <a href="rahul-goel.php">Rahul Goel</a>
        <a href="international-trade-wto.php">International Trade & WTO</a>
        <a href="sunil-jain.php">Sunil Jain</a>
        <a href="intellectual-property-rights.php">Intellectual Property Rights</a>
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
                    <img src="img/b3.avif" alt="">
                    <p class="recent-post-title mt-2">
                       With over 1trillion$ of infrastructure projects at stake, IBLJ recognises Cement Cartel Case as Deal of the Year - 2023
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="recent-post">
                    <img src="img/b23.avif" alt="">
                    <p class="recent-post-title mt-2">
                        Rahul Goel recognised in Asia's Super 50 TMT lawyers for 4 years in a row
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="recent-post">
                    <img src="img/b24.avif" alt="">
                    <p class="recent-post-title mt-2">
                        AnantLaw awarded Competition & Antitrust Firm of the Year 2023 by asialaw
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include 'footer.php'; ?>