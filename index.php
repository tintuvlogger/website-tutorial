<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Website</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins" rel="stylesheet">


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/lib/venobox/venobox.css" rel="stylesheet">
  <link href="assets/lib/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=<?php echo time();?>" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <nav class="nav-menu">
        <ul>
          <li class="onMinimize"><a href="javascript:void(0);" class="toggleTheMenu"><i class="material-icons">menu</i></a></li>
          <li class="onExpand"><a href="javascript:void(0);" class="toggleTheMenu"><i class="material-icons">close</i></a></li>
          <li class="active"><a href="#hero"><i class="material-icons">home</i></a></li>
          <li><a href="#about"><i class="material-icons">person</i> </a></li>
          <li><a href="#portfolio"><i class="material-icons">image</i> </a></li>
          <li><a href="#contact"><i class="material-icons">mail</i> </a></li>
        </ul>
      </nav><!-- .nav-menu -->
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Tintu Vlogger</h1>
      <p>I'm a <span class="typed" data-typed-items="Youtuber , Software Developer,Singer,Writer,Trainer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I'm Tintu Living in a small village in Ernakulam. I'm a software developer by profession. I love teaching.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Software Developer</h3>
            <p class="font-italic">
             I love to teach dump machines (from smartphones to computers) to do things. I do code in C,C++,Java,php,javascript,node etc.[depends on my mood and requirement]. 
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="material-icons dashb"></i> <strong>Birthday:</strong> 17 Oct 1989</li>
                  <li><i class="material-icons dashb"></i> <strong>Website:</strong> www.tintu.in</li>
                  <li><i class="material-icons dashb"></i> <strong>Phone:</strong> +91 xxxxxxxxxx</li>
                  <li><i class="material-icons dashb"></i> <strong>City:</strong> Ernakulam</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li> <strong>Age:</strong> 30</li>
                  <li> <strong>Degree:</strong> Master</li>
                  <li> <strong>Email:</strong> hi@tintu.in</li>
                  <li> <strong>Country:</strong> India <img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAPCAMAAAA4caRkAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAPFBMVEX/mTP////KyuacnNPLy+bFxeO5ud60tNy3t93Hx+SWls+2tt1ubsOWltDGxuO4uN60tN22tt7NzecSiAd2iPNoAAAAAWJLR0QB/wIt3gAAAAd0SU1FB+EICRMFN4ceKq8AAAA1SURBVBjTY2AYIMAIB0zMLAgOQpyVjZ2DE4s4FzcPNy8WcT5+AUFs6hlZmIWQzBfGDmgtDgDHxgmtDAdTHAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNy0wOC0wOVQxOTowNTo1NSswMDowMC0Rc80AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTctMDgtMDlUMTk6MDU6NTUrMDA6MDBcTMtxAAAAAElFTkSuQmCC'></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some important moments in my life</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="material-icons">panorama</i></a>
              </div>
            </div>
          </div>




        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" >

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="material-icons">location_on</i>
                <h4>Location:</h4>
                <p>Flat No 12B Skyline</p>
              </div>

              <div class="email">
                <i class="material-icons">mail</i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="material-icons">phone</i>
                <h4>Call:</h4>
                <p>+91 xxx xxx xxxx xx</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form role="form" class="email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top"><i class="material-icons">keyboard_arrow_up</i></a>

  <!-- Vendor JS Files -->
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/lib/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/lib/venobox/venobox.min.js"></script>
  <script src="assets/lib/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/lib/typed.js/typed.min.js"></script>
  <script src="assets/lib/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js?v=<?php echo time();?>"></script>

<script>
  $(".toggleTheMenu").click(function(){
      $("#header").toggleClass("expanded");
  });
</script> 


</body>

</html>