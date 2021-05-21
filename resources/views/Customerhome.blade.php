@extends("customertheme")
@section("content")

<section id="about" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
        <h1 style="color:white;" class="nav-link scrollto" >Hello
      <strong>     {{ $LoggedUserInfo['Fname'] }} {{ $LoggedUserInfo['Lname'] }} !!</strong>  </h1>
      
        <div class="row">
        <div class="col col-12 col-md-6 col-lg-6 col-xl-6 col-s-6">

        </div>
        </div>
        </div>
        </div>
        </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/welcome.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>About Us</h4>
              <p>
              Houswork is your one-stop solution to sort all your home needs for Plumbing and Electical works, quickly, professionally and conveniently. We simplify your everyday living with a variety of at-home services across  cities of  Ernakulam District, delivered by verified & qualified professionals only. </p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Plumbing Services at Home</h4>
              <p>Help to find professional and trained plumbers for all your plumbing troubles like leaking pipes, dripping faucets, bathroom fittings, toilet and sanitary work etc.</p>
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Electrical Services at Home</h4>
              <p>We offer electrical services at home for fitting and removing fans, switchboard installation and replacement, circuit fault finding, all kinds of wiring works, tube lights & other lights fitting and removal etc.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="\cpservice#portfolio">Plumbing Service</a></h4>
              <p>Are you new in city searching for a plumbing service for Installation, repair and maintenance?. We give you the best professional plumbing services in Kochi, Ernakulam.</p>
            </div>
          </div>


         

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch "  data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="\ceservice#portfolio">Electricial Services</a></h4>
              <p>Are you searching for an electrician or electrical contractors for Installation, repair and maintenance?. We give you the best professional electrical services in Kochi, Ernakulam.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p>HousWork is the simplest way to find and book licensed electicians and plumbers near you. Connect with the best electricians and plumbers in your area who are experts at .. </p>
            <a class="cta-btn" href="#about">Connect Now</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- End Portfolio Section -->

    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>MY PROFILE</h2>
          <p>ME-MYSELF</p>
        </div>
        

        <div class="row">
      <table class="table table-borderless" style="width:500px;">
    <tr>
        <td>
        <h5 class="resume-title">First Name : </h5>
        <td>  <h5 class="resume-title">{{ $LoggedUserInfo['Fname'] }} </h5></td>
        </td>
         
    </tr>
    <tr>
        <td><h5 class="resume-title">Last Name :</h5>
        </td>
        <td> <h5 class="resume-title">{{ $LoggedUserInfo['Lname'] }}</td>
    </tr>
    <tr>
        <td>
        <h5 class="resume-title">House No :</h5>
        </td>
        <td> <h5 class="resume-title">{{ $LoggedUserInfo['Hno'] }}</td>
    </tr>
    <tr>
        <td>
        <h5 class="resume-title">Street :</h5>
        </td>
        <td> <h5 class="resume-title">{{ $LoggedUserInfo['Street'] }}</td>
    </tr>
    <tr>
    <td>
    <h5 class="resume-title">City :</h5>
        </td>
        <td> <h5 class="resume-title">{{ $LoggedUserInfo['City'] }}</td>
    </tr>
    <tr>
    <td>
    <h5 class="resume-title">Pin Code :</h5>
        </td>
        <td><h5 class="resume-title">{{ $LoggedUserInfo['Pincode']}}</td>
    </tr>
    <tr>
    <td>
    <h5 class="resume-title">Email :</h5>
        </td>
        <td><h5 class="resume-title">{{ $LoggedUserInfo['Email'] }}</td>
       
    <tr>
    <td>
       <h5 class="resume-title">Mobile :</h5>
        </td>
        <td><h5 class="resume-title">{{ $LoggedUserInfo['Mob'] }}</td>
    </tr>
  <tr>
    <td><a class="btn btn-dark" href={{"/editcustomer/".$LoggedUserInfo['id']}}>EDIT</a></td>
    
</tr>
    </table>
       
            </div>
          

      </div>
    </section><!-- End Team Section -->

    



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>OUR ACHIEVEMENTS</h3>
              
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="165" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Happy Customers</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Employees</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Years of experience</strong> </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Locations</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Vishnu Mohandas</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Customer service shouldn't just be a department, it should be the entire company.
                             <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Baasith Backer</h3>
                <h4>Employee</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Customers will never love a company until the employees love it first.
                   <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Sharon Jerald</h3>
                <h4>Employee</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Always give people more than what they expect to get.
                   <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Hrithik Pradeep K</h3>
                <h4>Employee</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  How you think about your customers influences how you respond to them.
                   <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>George Rixon Joseph</h3>
                <h4>Employee</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Well done is better than well said.   <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
   <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
        <iframe style="border:0; width: 100%; height: 270px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1005875.0468535259!2d75.774913265625!3d10.000381500000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080cebc728165b%3A0xd87a56d07da70247!2sWe%20Care%20Cleaning%20Services%2F%20deep%20house%20cleaning%20services%20kochi%20%2Fdisinfection%20service%20Ernakulam%20Kochi%2Fprofessional%20services!5e0!3m2!1sen!2sin!4v1621227136868!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>#521,Palachuvadu, Near Axis Bank ATM MLA Road ernakuam, Kakkanad, Kochi, Kerala 682030</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>houswork@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 6238285860</p>
              </div>

            </div>

          </div>

          

          </div>

        </div>

      </div>
    </section>



   <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @endsection