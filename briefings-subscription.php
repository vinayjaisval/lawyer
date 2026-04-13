<?php include 'header.php'; ?>
<main>
  <section class="custom-section py-1 bg-light">
    <div class="container">

      <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">

          <!-- Brand / Title -->
          <a class="navbar-brand fw-bold" href="#">
            Briefings Subscription
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
                <a class="nav-link" href="#">Popular Topics →</a>
              </li>

              <li class="nav-item">
                <a class="nav-link"
                  href="briefings-enquire.php">
                  Enquire →
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link"
                  href="briefings-contact.php">
                  Contact →
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link"
                  href="briefings-talent-pool.php">
                  Apply →
                </a>
              </li>

            </ul>
          </div>

        </div>
      </nav>

    </div>
  </section>

  <section class="briefing-page py-5">
    <div class="container">

      <!-- Main Content -->
      <div class="row align-items-start">

        <!-- Left Text -->
        <div class="col-lg-5 mb-4 mb-lg-0" >
          <p class="briefing-text text-dark">
            Sign up to our briefings and get a direct feed on legal issues, news,
            recommendations and insights in your inbox. The content is exclusively
            curated to keep counsels, CXOs and business leaders abreast with the
            evolving legal landscape in India.
          </p>
        </div>

        <!-- Right Form -->
        <div class="col-lg-6 offset-lg-1 rounded-4">
          <div class="form-box rounded-4 p-4 bg-light">

            <form>
              <div class="row g-2 bg-light p-4 rounded">

                <div class="col-md-6">
                  <label>Name *</label>
                  <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label>Email *</label>
                  <input type="email" class="form-control" required>
                </div>

                <!-- Button -->
                <div class="col-12 d-flex justify-content-end align-items-start mt-4">
                  <button class="btn next-btn bg-dark text-white ">Next</button>
                </div>

              </div>
            </form>

          </div>
        </div>

      </div>

    </div>
  </section>
</main>
<?php include 'footer.php'; ?>