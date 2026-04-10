<?php include 'header.php'; ?>
<main>
  <section class="custom-section py-1 bg-light">
    <div class="container">

      <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">

          <!-- Brand / Title -->
          <a class="navbar-brand fw-bold" href="#">AnantLaw Talent Pool
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
                  Subscribe →
                </a>
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

            </ul>
          </div>

        </div>
      </nav>

    </div>
  </section>

  <section class="briefing-page py-5">
    <div class="container">

      <!-- Main Content -->
      <div class="row align-items-center">

        <!-- Left Text -->
        <div class="col-lg-5 mb-4 mb-lg-0">
          <p class="briefing-text text-dark">
            We are constantly on the look-out for high performing, value driven lawyers. Accountability, collaboration, integrity & appetite to learn are foundational values for AnantLaw. Our vacancies are available across practice areas. Primary location for all roles is Delhi. All interested candidates must fill the AnantLaw Talent Pool form.  
          </p>
        </div>

        <!-- Right Form -->
        <div class="col-lg-6 offset-lg-1 rounded-4">
          <div class="form-box rounded-4 p-4 bg-light">

            <form>
              <div class="row g-2 bg-light p-4 rounded">

                <div class="col-12">
                  <label class="form-label">Type of Role*</label>

                  <select class="form-select w-100">
                    <option selected disabled>Select the most appropriate one</option>
                    <option>Intership</option>
                    <option>Associate Programme</option>
                    <option>Experienced Professional- Counsel</option>
                    <option>Experienced Professional-  Senior Counsel</option>
                    <option>Experienced Professional- Partner</option>
                  </select>
                </div>

                <!-- Button -->
                <div class="col-12 d-flex justify-content-end align-items-start">
                  <button class="btn next-btn bg-dark text-white">
                    Next
                  </button>
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