<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Healing Angles Academia</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="width=device-width, user-scalable=no" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Healing Angles Academia" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="icon" href="image/icon.png" type="image/gif" sizes="64x64" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
      integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
      crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css" />
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <style>
      textarea {
        padding: 13px;
      }

      .banner-text {
        position: absolute;
        top: 30%;
        background: transparent !important;
        padding: 80px 150px !important;
      }

      .banner-text h4 {
        color: #2A77FA;
      }

      .banner-text h2 {
        line-height: 70px;
        font-weight: bolder;
        font-size: 55px;
      }

      .banner-text p {

        line-height: 30px;
      }

      .serve {
        min-height: 150px;
        margin-top: 30px;
        font-size: 20px;
        padding-top: 15px;
      }
      .serve img{
        width: 70px;
        margin-bottom: 15px;
      }
      .cs-list {
        list-style: none;
      }

      .cs-list li {
        border-radius: 10px;
        border: 2px solid white;
        padding: 15px !important;
        margin-top: 10px;
      }

      .testimonials {
        overflow: hidden;
        position: relative;
        max-height: auto;
      }

      .testimonials {
        background: #161d25;
      }

      .one-slide,
      .testimonial,
      .message {
        border: none !important;
        outline: none !important;
      }

      .icon-overlay {
        position: absolute;
        opacity: 0.3;
        right: 10%;
        top: 0;
        height: auto;
        width: 100%;
        max-width: 400px;
      }

      .carousel-controls .control {
        position: absolute;
        transform: translateY(-50%);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        border: 2px solid #fff;
        z-index: 1;
      }

      .prev {
        left: -2.25rem;
      }

      .next {
        right: -2.25rem;
      }

      .testimonial {
        padding: 50px 30px;
      }

      .testimonial img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
      }

      .message {
        padding: 40px 20px;
        line-height: 30px;
      }


      @media screen and (max-width: 950px) {
        .banner-text {
          position: absolute;
          top: 20%;
          background: transparent !important;
          padding: 80px 160px 0px 60px !important;
        }

        .banner-text h2 {
          line-height: 50px;
          font-weight: bolder;
          font-size: 40px;
        }
      }

      @media screen and (max-width: 768px) {
        .banner-text {
          position: absolute;
          top: 10%;
          background: transparent !important;
          padding: 80px 160px 0px 60px !important;
        }

        .header-divs div:first-child{
          height: 200px;
        }

        .header-divs div img{
          width: 400px;
        }
        .banner-text h4 {
          color: #20B3FA;

        }

        .banner-text h2 {
          line-height: 50px;
          font-weight: bolder;
          font-size: 40px;
        }

        .testimonials {
          max-height: 700px;
        }

        .icon-overlay {
          height: 300px;
          top: calc(50% - 150px);
        }

        .carousel-controls .control {
          width: 25px;
          height: 25px;
          top: inherit;
        }

        .prev {
          left: 0;
        }

        .next {
          right: 0;
        }

        .control i {
          font-size: .7rem;
        }

        .testimonials .message {
          font-size: 1rem;
        }

        .testimonials h2 {
          font-size: 1.5rem;
        }
      }

      @media screen and (max-width: 560px) {

        .banner-text {
          position: absolute;
          top: 10%;
          background: transparent !important;
          padding: 80px 180px 0px 50px !important;
        }

        .banner-text h4 {
          color: #2A77FA;

        }

        .banner-text h2 {
          line-height: 30px;
          font-weight: bolder;
          font-size: 20px;
        }
      }

      @media screen and (max-width: 480px) {
        .banner img {
          visibility: visible;
          margin-top: 50px;
        }

        .banner {
          background: transparent;
          min-height: 400px;
        }

        .banner-text {
          position: absolute;
          top: 10%;
          background: transparent !important;
          padding: 80px 180px 0px 40px !important;
        }

        .banner-text h4 {
          color: #2A77FA;
          font-size: 15px;
        }

        .banner-text h2 {
          line-height: 30px;
          font-weight: bolder;
          font-size: 18px;
        }
      }

      @media screen and (max-width: 380px) {
        .banner img {
          visibility: hidden;
        }

        .banner {
          background: transparent;
          min-height: 300px;
        }

        .banner-text {
          position: absolute;
          top: 10%;
          background: transparent !important;
          padding: 80px 0px 0px 50px !important;
        }

        .banner-text h4 {
          color: #2A77FA;

        }

        .banner-text h2 {
          line-height: 30px;
          font-weight: bolder;
          font-size: 20px;
        }

        .header-divs div:nth-child(2){
          display: none;;
        }
      }

    </style>
  </head>

  <body>
    <?php include 'modal.php'; ?>
    <a id="button"></a>
    <div class="mainarea">
      <?php include './menu.php'; ?>

      <div class="col-md-12 banner mt-5 bg-white">

        <div class="row header-divs">
          <div class="col-md-8 bg-white mt-5 pt-5">
            <div class="contaienr banner-text">
            <b>
              <h4>  Ace the exam today ! </h4>
              <h2>Join the free demo <br> class now.</h2></b>
              <!-- <p>The world needs registered nurses like you!
              Pass the NCLEX on your first attempt. <br> Passing NCLEX on your first attempt is now easy!
              Prepare with us to succeed. <br> The simplest strategies and tips have helped more people in making their
              dream
              come true.</p> -->

              <button class="btn btn-lg btn-primary" onclick="window.location.href='./contact.php'">Join Now</button>
            </div>
          </div>
          <div class="col-md-4 pt-5">
            <center><img src="image/hero.png" class="img img-responsive mt-5" width="100%" alt="banner" /></center>
          </div>
        </div>
      </div>
    </div>

    <div class="aboutbox">
      <div class="container">
        <h2 class="cs-heading">What Is NCLEX ?</h2>
        <p> <b>
          National Council Licensure Examination (NCLEX)  is a basic requirement for international students to get a certification of nursing in Australia, United States and Canada. One can take this examination for recieving his or her nursing licence after graduating with a bachelor of nursing in their respected country.
        </b>
        </p>

        <!-- <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="aboutli">
              <ul>
                <li>Competency test before the course so you could assess and compare your level before
                  and after joining the coaching classes</li>
                <li>Live lectures in such a way that they give the charm of studying in a physical classroom</li>
                <li>
                  Continuous mock tests to keep track of your performance
                </li>
                <li>Thousands of challenging questions to practice with their in-depth explanations for every
                  incorrect and correct option.</li>
                <li>Preliminary exam at the end of the course to check how prepared you are.</li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="aboutimage">
              <img src="image/about.jpg" alt="Image" />
            </div>
          </div>
        </div> -->
      </div>
    </div>

    <div class="service">
      <div class="container">
        <center>
          <h2 class="cs-heading"><span> Services </span></h2>
        </center>
        <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">
              <img src="./image/doc.png" alt="">
              <h2>Competency Test</h2>
            </div>
          </div>


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">
              <img src="./image/image.png" alt="">
              <h2>Mock Exams</h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">
              <img src="./image/mail.png" alt=""> 
              <h2>24/7 Email Assistance</h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">
              <img src="./image/pc.png" alt=""> 
              <h2>Join Live Lecture</h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr"> <br>
              <img src="./image/rec.png" alt=""> <br>
              <h2>
                Recorded Live Lectures
              </h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">
              <img src="./image/chat.png" alt="">
              <h2>
                Expert Feedback
              </h2>
            </div>
          </div>

      

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">
              <img src="./image/check.png" alt="">
              <h2>
               Apply For The Exam
              </h2>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">

              <img src="./image/list.png" alt=""> 
              <h2>
                Thousands of practice questions
              </h2>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="serve oneclr">
              <img src="./image/qna.png" alt=""> 
              <h2>
                Q&A Sessions with faculty
              </h2>
            </div>
          </div>


        </div>
      </div>
    </div>



    <div class="catbox pt-5 mt-5">
      <div class="container">
        <h2>Why We Are The Best</h2>
        <p>
          <!-- <b> The simplest strategies and tips have helped more people in making
            their dream come true. </b>
        </p> -->

          <div class="row p-0">
            <div class="col-md-4 col-sm-6 col-xs-12 p-3">
              <div class="catsection p-4">
                <img src="image/bolt.png" alt="Image" />

                <h1>Sharing Strategic Tips</h1>
                <p>
                Expert advice on improving efficiency during the exam.
                </p>
              </div>
            </div>
         

          <div class="col-md-4 col-sm-6 col-xs-12 p-0">
            <div class="catsection p-4">
              <img src="image/thermo.png" style="width: 30px" alt="Image" />
              <h1>Intensive Coaching Week</h1>
              <p>
                An entire week just for exam support and revision, aimed at the clearify your queries.
              </p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 p-0">
            <div class="catsection p-4">
              <img src="image/haedchat.png" alt="Image" />
              <h1>Contact teacher support untill <br> exam,via email</h1>
              <p>
               Contact us anytime with any questions or queries you have and, you are guaranteed to get a response within two hours.
              </p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 p-0">
            <div class="catsection p-4">
              <img src="image/circle-check.png" alt="Image" />
              <h1>Applying for the exam</h1>
              <p>
              A service that has never been offered before. We apply for the exam on your behalf! Leave the application stress and confusion to us and you can focus on studying.

              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 p-0">
            <div class="catsection p-4">
              <img src="image/screen.png" alt="Image" />
              <h1>Simulation of real exam</h1>
              <p>
              Gain access to a real exam-like environment, under simulated conditions. Obtain practice exams of the same format as the real exam, to get better accustomed to the exam conditions. 

              </p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 p-0">
            <div class="catsection p-4">
              <img src="image/mob-view.png" alt="Image" />
              <h1>Study on the go</h1>
              <p>
               All Digital devices are compatible.Our services and resources are accessible from anywhare, at any time. all you need is the device with internet.
              </p>
            </div>
          </div>
          </div>
          <!-- <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="catsection">
                <img src="image/cat1.png" alt="Image" />
                <h2>Eye Care</h2>
                <p>Aliq is notm hendr erit a augue insu image pellen tes</p>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="catsection">
                <img src="image/cat1.png" alt="Image" />
                <h2>Neurology</h2>
                <p>Aliq is notm hendr erit a augue insu image pellen tes</p>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="catsection">
                <img src="image/cat1.png" alt="Image" />
                <h2>Plastic Surgery</h2>
                <p>Aliq is notm hendr erit a augue insu image pellen tes</p>
              </div>
            </div> -->
      </div>
    </div>
    </div>


    <div class="timetabel">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12" style="background: #2A77FA;">
            <div class="datearea text-white p-4">
              <h2>Course Summary</h2> <br>
              <h6>Title of trainings: </h6>
              <h5>NCLEX-RN,NCLEX-PN</h5>
            <br>
              <h6>Course Duration :</h6> 
              <h5>3 Months</h5> <hr style="background: #fff;"> 
              <br>

              <h6>Mode of Delivery :</h6>
              <h5>Online</h5> <hr style="background: #fff;"> <br>

              <h6>Class Timings :</h6>
              <h5>Monday - Friday , 2 Hrs per day</h5> <hr style="background: #fff;"> <br>

              <h6>Course Fee :</h6>
              <h5>USD $2000 inc, GST</h5> <hr style="background: #fff;"> <br>

            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="formarea">
              <h2 class="text-white">Quick Enquiry</h2>
              <form action="">
                <input type="text" class="formname" name="name" placeholder="Enter Your Name" />
                <input type="text" class="formname" name="email" placeholder="Enter E-Mail Address" />
                <input type="text" class="formname" name="number" placeholder="Enter Contact Number" />

                <textarea class="textname" name="msg" placeholder="Enter Your Message.."></textarea>
                <button type="submit" class="appointbtn">
                  Send Enquiry
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="testimonials pt-5 pb-5 text-white px-1 px-md-5 margin-top-xl">

      <div class="container">
        <div class="row">
          <div class="col-sm-12 pt-5 pb-5">
            <h2 class="pt-2 text-center font-weight-bold">Our Customers Are Seeing Big Results</h2>

            <div class="carousel-controls testimonial-carousel-controls">
              <div class="control d-flex align-items-center justify-content-center prev mt-3"><i
                  class="fa fa-chevron-left"></i></div>
              <div class="control d-flex align-items-center justify-content-center next mt-3"><i
                  class="fa fa-chevron-right"></i></div>

              <div class="testimonial-carousel">
                <div class="h5 font-weight-normal one-slide mx-auto">
                  <div
                    class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                    <img src="./image/user.jpg" alt="">
                    <div class="message text-center blockquote w-100">"I passed my NCLEX-RN exam with just 75 questions.
                      The course is worth the purchase. They helped me with some respiratory diseases I was struggling
                      to understand. " </div>
                    <div class="blockquote-footer w-100 text-white">
                      <h3>-Mrs.Swarnjeet Kaur</h3>
                      <h6>RN NEW JERSEY, USA</h6>
                      <h6>Job - RESIDENT CARE Director At Sunrise Senior Living, </h6>
                    </div>
                  </div>
                </div>

                <div class="h5 font-weight-normal one-slide mx-auto">
                  <div
                    class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                    <img src="./image/user.jpg" alt="">
                    <div class="message text-center blockquote w-100">"Top-notch coaching. Healing Angles makes it
                      really easy. Their study methods are on point and they saved me. Highly recommend them." </div>
                    <div class="blockquote-footer w-100 text-white">
                      <h3>-Amandeep Kaur</h3>
                      <h6>BSN</h6>
                      <h6>CALIFORNIA, USA</h6>
                      <h6>RN</h6>
                    </div>
                  </div>
                </div>

                <div class="h5 font-weight-normal one-slide mx-auto">
                  <div
                    class="testimonial w-100 px-3 text-center d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                    <img src="./image/user.jpg" alt="">
                    <div class="message text-center blockquote w-100">"I recently cleared NCLEX-RN. I want to thank all
                      the
                      team at Healing Angels. Thank you for helping me with ATI concepts. They have the best
                      medical-surgical and psych content."</div>
                    <div class="blockquote-footer w-100 text-white">
                      <h3> -Mrs. Rupinderjit Kaur</h3>
                      <h6>RN </h6>
                      <h6> NEW JERSEY,</h6>
                      <h6>USA</h6>
                      <h6>Job - Alameda Rehabilitation & Healthcare Center</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="Department">
      <div class="container">
        <h2 >Constituent Campuses</h2>

        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="docsection">
              <img src="image/aadesh.jpeg" alt="Image" />
              <h2> Adesh College of nursing, Mukatsar</h2>

            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="docsection">
              <img src="image/punjab-college.jpg" class="img img-circle" alt="Image" />
              <h2>Punjab Degree College</h2>

            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="docsection">
              <img src="image/aadesh-frd.jpg" alt="Image" />
              <h2>Adesh Medical College, Faridkot</h2>

            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="docsection">
              <img src="image/malwa.jpeg" alt="Image" />
              <h2>Malwa Polytechnic College, Faridkot</h2>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="blogarea">
      <div class="container">
        <h2>Our Blogs</h2>

        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="blogbox">
              <div class="blogimg pt-4">
                <img src="image/what-is-nclex.jpg" style="height: 150px" alt="Image" />
              </div>

              <div class="blogtext">
                <h3>NCLEX-RN - WHAT IS IT?</h3>
                <p>
                The National Council Licensure Examination (NCLEX) tests your skills and knowledge ..
                </p>
                <span><a href="./what-is-nclex.php">Know More</a></span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="blogbox">
              <div class="blogimg pt-4">
                <img src="image/nclex-rn-pn.jpeg" style="height: 150px" alt="Image" />
              </div>

              <div class="blogtext">
                <h3>NCLEX-PN vs. NCLEX-RN</h3>
                <p>
                NCLEX-PN and NCLEX-RN have more similarities than differences when it comes to the test format. 
                </p>
                <span><a href="/NCLEX-PN-vs-NCLEX-RN.php">Know More</a></span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="blogbox">
              <div class="blogimg pt-4">
                <img src="image/nclex-rn.jpg" style="height: 150px" alt="Image" />
              </div>

              <div class="blogtext">
                <h3>NCLEX-RN® CLIENT NEEDS</h3>
                <p>
                NCLEX-RN® questions are organized in accordance with Client Need Categories.
                </p>
                <span><a href="./NCLEX-RN.php">Know More</a></span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="blogbox">
              <div class="blogimg pt-4">
                <img src="image/imp-nclex.png" style="height: 150px" alt="Image" />
              </div>

              <div class="blogtext">
                <h3>Why is NCLEX-RN important?</h3>
                <p>
                If you aim to work as a nurse in America, Australia and Canada, you will be required to take and pass the NCLEX exam. 


                </p>
                <span><a href="./Why-is-NCLEX-important.php">Know More</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <?php include './footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"></script>
    <script>
      $('#index').addClass('active');

      var navList = document.getElementById("nav-lists");

      function Show() {
        navList.classList.add("_Menus-show");
      }

      function Hide() {
        navList.classList.remove("_Menus-show");
      }
      $(document).ready(function () {
        $(".testimonial-carousel").slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: false,
          arrows: true,
          prevArrow: $(".testimonial-carousel-controls .prev"),
          nextArrow: $(".testimonial-carousel-controls .next")
        });
      });

    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
      // $('#myModal').modal("show");

    </script>
  </body>

</html>
