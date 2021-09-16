<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Healing Angles Academia</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="width=device-width, user-scalable=no" name="viewport" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Healing Angles Academia" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" href="image/icon.png" type="image/gif" sizes="64x64" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/animate.css" />
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>
  </head>

  <body>
    <a id="button"></a>
    <div class="mainarea">
    <?php include './menu.php';  ?>

      <div class="innerbanner mt-5">
        <!-- <img src="image/about_banner.jpg" alt="banner" /> -->
        <div class="container">
          <div class="breadup">
            <h2>Contact Us</h2>
            <!-- <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>Contact us</li>
            </ul> -->
          </div>
        </div>
      </div>

      <div class="Department mt-5 nobg">
        <div class="container">
          <h2>Anytime you Want, <span>Just Contact Us</span></h2>
         
        </div>
      </div>

      <div class="incon">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="conform">
                <form action="./contact-handles.php" method="Post">
                  <input
                    type="text"
                    alt=""
                    name = "name"
                    placeholder="Enter your Name"
                    class="coninput"
                  />
                  <input
                    type="number"
                    alt=""
                    name="number"
                    placeholder="Enter Contact Number"
                    class="coninput"
                  />
                  <input
                    type="e-mail"
                    alt=""
                    name="email"
                    placeholder="Enter E-Mail Address"
                    class="coninput"
                  />
                  <textarea
                    class="context"
                    name="msg"
                    placeholder="Enter Message Here..."
                  ></textarea>
                  <button type="submit" class="conbutton">Submit Now</button>
                </form>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="conaddress">
                <ul>
                  <h2><span>Connect</span> With Us</h2>
                
                  <li class="afterone">
                   Kotkapura road, Sri Muktsar Sahib, Punjab 152026
                  </li>
                  <li class="aftertwo">(AUS) 006-406-228-784, (IND) +91-91154-00449</li>
                  <li class="afterthree">contact@healingacademia.com</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="maparea">
        <div class="container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13754.276641986873!2d74.511172!3d30.4766391!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x163a23fc6dddb1ce!2sAdesh%20College!5e0!3m2!1sen!2sin!4v1620153853307!5m2!1sen!2sin"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
    <?php include './footer.php';  ?>


    <script>
      $('#contact').addClass('active');

      var navList = document.getElementById("nav-lists");

      function Show() {
        navList.classList.add("_Menus-show");
      }

      function Hide() {
        navList.classList.remove("_Menus-show");
      }
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
  </body>
</html>
