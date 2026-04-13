<?php include 'header.php'; ?>

<style>

    
.section {
  height: 120vh;
  width: 100%;
  max-width: 1520px;
  margin: auto;
  overflow: hidden;
}

.section1,
.section2,
.section3 {
  position: sticky;
  top: 0;
}


.section img {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.content {
  position: relative;
  z-index: 2;
  height: 100%;
  padding: 40px;
}

.sections-h1 {
  font-size: 60px;
  color: white;
}

.section3,
.section5 {
  background: #000;
}


.section4,
.section5 {
  position: relative;
  overflow: hidden;
}
/* SECTION 1 */

.section1 {
  display: flex;
  justify-content: center;
}

.section1-content {
  position: relative;
  z-index: 2;
  height: 100%;
  padding: 40px;
  color: #fff;
  margin-top: 5cm;
}

/* SECTION-2 */

.section2-content {
  position: relative;
  z-index: 2;
  height: 100%;
  padding: 40px;
  color: #fff;
  margin-top: 5cm;
  margin-left: 4cm;
  width: 1000px;
}

/* SECTION-3 */

.section3 h2 {
  font-family: "EB Garamond", serif;
  color: #fff;
  margin-top: 0%;
  margin-left: 3cm;
}

.section3 h3 {
  font-family: "EB Garamond", serif;
  color: #fff;
  font-size: 70px;
}

.section3-item {
  width: 820px;
  margin-top: 0px;
  background: #000;
  margin-left: 3cm;
}

.section3-para {
  margin-left: 2cm;
  margin-top: 1cm;
  width: 1200px;
  display: flex;
  justify-content: space-around;
}

.section3-para p {
  width: 500px;
  color: white;
}

.third-section {
  display: flex;
  flex-direction: column;
  gap: 15px;
  text-align: left;
}

.third-section p {
  max-width: 900px;
  display: flex;
  flex-direction: row;
  line-height: 1.6;
}


.section4 {
  display: flex;
  align-items: center;
  height: 120vh;
}

.overlay-text {
  position: relative;
  z-index: 1;
  padding: 40px;
  animation: none;
  width: 800px;
  height: 200px;
  margin-left: 3cm;
}

.overlay-text h1 {
  font-size: 53px;
  color: white;
}

.overlay-text p {
  color: white;
  font-size: 23px;
}

/* SECTION-5 */

.section5{
  height: 120vh; 
  position: relative;
  overflow: hidden;
  z-index: 1;
  margin-bottom: 0px;
}

.fifth-section {
 position: sticky;
  top: 0;
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: center;
  margin-top: 4cm;
}

.fifth-section span {
  color: white;
  font-size: 28px;
}

.fifth-section-top-heading {
  width: 795px;
  font-size: 60px;
  height: 200px;
  text-align: center;
  color: white;
  font-weight: 1000;
}

.cardsc {
  display: flex;
  justify-content: row;
  gap: 20px;
  margin-top: 20px;
}

.cardc {
  width: 318px;
  height: 254px;
  background: #222;
  display: flex;
  flex-direction: column;
  border-radius: 8px;
}

.cardc img {
  height: 98px;
  margin-top: 0px;
  width: 318px;
}

.card-content {
  margin-top: 3cm;
  text-align: center;
}

.cards-heading {
  color: white;
  font-size: 20px;
}

.card-content span {
  color: white;
  font-size: 22px;
  font-weight: 500;
}

.card-content p {
  color: white;
  font-size: 17px;

}

.section5-bottom {
  display: flex;
  flex-direction: column;
  margin-top: 13px;
  width: 1020px;
  height: 108px;
  background-color: #232322;
  border-radius: 20px;
}

.section5-bottom-items {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  margin-left: 3cm;
  padding-top: 20px;
  font-size: 20px;
  font-weight: 500;
}

.section5-bottom img {
  height: 66px;
  width: 66px;
  margin: 20px;
}

.section5-bottom-items span {
  color: #03baff;
}

@media (max-width: 768px) {
  .section {
    height: auto;
    min-height: 100vh;
  }

  .section1-content,
  .section2-content {
    margin-top: 20vh;
    margin-left: 20px;
    width: auto;
  }

  .sections-h1 {
    font-size: 32px;
  }

  .section3 h2 {
    margin-left: 20px;
  }

  .section3 h3 {
    font-size: 36px;
  }

  .section3-item {
    width: auto;
    margin-left: 20px;
  }

  .section3-para {
    width: auto;
    margin-left: 20px;
    margin-right: 20px;
    flex-direction: column;
  }

  .section3-para p {
    width: 100%;
  }

  .overlay-text {
    width: auto;
    margin-left: 20px;
    margin-right: 20px;
  }

  .overlay-text h1 {
    font-size: 28px;
  }

  .fifth-section-top-heading {
    width: auto;
    font-size: 32px;
    height: auto;
    padding: 0 20px;
  }

  .cards {
    flex-direction: column;
    align-items: center;
  }

  .card {
    width: 90%;
  }

  .section5-bottom {
    width: 90%;
    height: auto;
    margin: 20px auto;
  }

  .section5-bottom-items {
    margin-left: 20px;
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .sections-h1 {
    font-size: 45px;
  }

  .section2-content {
    width: auto;
  }

  .section3 h3 {
    font-size: 50px;
  }

  .section3-item {
    width: auto;
  }

  .section3-para {
    width: auto;
    flex-direction: column;
  }

  .section3-para p {
    width: 100%;
  }

  .overlay-text {
    width: auto;
  }

  .overlay-text h1 {
    font-size: 36px;
  }

  .cards {
    flex-wrap: wrap;
    justify-content: center;
  }

  .card {
    width: 45%;
  }

  .section5-bottom {
    width: 90%;
  }
}

</style>


<div class="section section1">
    <img src="img/C1 Image.avif" alt="">
    <div class="section1-content">
        <h1 class="sections-h1">Experience.<br>Empathy.<br>Perseverence.</h1>
    </div>
</div>


<div class="section section2">
    <img src="img/C2 Image.avif" alt="">
    <div class="section2-content">
        <h1 class="sections-h1">
            We are legal scientists. This is where you
            will never stop researching, inventing and
            executing best in class ways.
        </h1>
    </div>
</div>


<div class="section section3">
    <div class="content third-section">
        <h2>At AnantLaw</h2>
        <div class="section3-item">
            <h3>Pursuit of legal excellence</h3>
            <h3>meets unwavering </h3>
            <h3>commitment</h3>
        </div>
        <div class="section3-para">
            <p>
                For us integrity is more than a buzzword, it's the very essence of who we are. Our commitment to
                unwavering ethical conduct, honesty & transparency is the foundation upon which we build relationships,
                handle cases, and provide legal advice. Upholding the highest standards of professional these
                professional values is a non-negotiable for us. It is not just about the cases we win or the milestones
                we achieve. It's about how we win and why we win- guided by our values.
            </p>

            <p>
                We pursue perfection & deliver results. For this, we have earned recognition and rankings from Benchmark
                Litigation, Asia Law, Thomson Reuters, Legal 500, Euromoney, Indian Business Law Journal, Global
                Competition Review Awards, Legal Era, Chambers & Partners, Asian Legal Business. Our journey has been
                marked by a trail of landmark judgments, reshaping jurisprudence and delivering innovative legal
                solutions. Our team strives for excellence & proficiency in every aspect.
            </p>
        </div>

    </div>
</div>


<div class="section section4">
    <img src="img/C3 Image.avif" alt="">

    <div class="overlay-text">
        <h1>
            "In the complex universe of law,

            clarity is a precious asset. We

            make it our mission to provide

            our clients with clear, concise,

            and practical advice."
        </h1>

        <p>Rahul Goel, Partner</p>
        <p>Learn about our Leaders</p>

    </div>

</div>


<div class="section section5">
    <div class=" fifth-section">
        <span>Key Areas of Work</span>
        <div class="fifth-section-top-heading">
            We will be thrilled to have your awesomeness.
        </div>
        <!-- CARDS -->
        <div class="cardsc">
            <div class="cardc">
                <img src="img/C4 Image.avif" alt="Image">
                <div class="card-content">
                    <span>Internships</span>
                    <p>Available across all practice areas. Ideal for students in their penultimate & final year at
                        reputed law schools in India.</p>
                </div>
            </div>
            <div class="cardc">
                <img src="img/C5 Image.avif" alt="Image">
                <div class="card-content">
                    <span>Associate Programmes</span>
                    <p>Opportunities that enables young, freshly graduated lawyers to carve their personal &
                        professional growth journey</p>
                </div>
            </div>
            <div class="cardc">
                <img src="img/C6 Image.avif" alt="Image">
                <div class="card-content">
                    <span>Experienced Professionals</span>
                    <p>Ideal for individuals with a clear purpose. You must align on AnantLaw values in ethics,
                        integrity, and collaboration.</p>
                </div>
            </div>
        </div>
        <div class="section5-bottom">
            <img src="img/icon.jpg" alt="Image">
            <div class="section5-bottom-items">
                <a href="#">
                    We will be happy, if you will like to work with us.</a>
                <span>Submit your CV here</span>
            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
