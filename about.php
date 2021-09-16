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
            <h2>About Us</h2>
            <!-- <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>About Us</li>
            </ul> -->
          </div>
        </div>
      </div>

      <div class="aboutbox">
        <div class="container">
          <h2>About <span>us</span></h2>
          <p>
          Healing Angles Academia is a premier coaching institute for the preparation of NCLEX-RN and NCLEX-PN with a legacy of over two decades.
          
          <br>

          Healing Angels Academia is a constituent online campus of Punjab Universe of Academic Excellence, Faridkot (Punjab) India. Punjab Universe of Academic Excellence is a one-of-a-kind educational forum imparting quality education in various professional fields. A constant emphasis on ultra modern teaching methods, student exchange, knowledge sharing, world class infrastructure, well qualified and experienced faculty, have consistently placed the students well ahead in every field. Punjab Universe of Academic Excellence plays a significant role in contributing to the nation' s talent pool.  <br>

          Once you join our institute, you will identify with our purpose and character which is based on our ethics and moral values that will help you discover your full potential to raise your test scores. 

        
          </p>

          <p>
            <b
              >Join Healing Angles Academia to discover your full potential and raise your test
              scores.</b
            >
          </p>
          <!-- <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="aboutli">
                <ul>
                  <li>
                    Women face higher conduct standards especially in the
                    workplace that’s why it’s crucial that.
                  </li>
                  <li>
                    Women face higher conduct standards especially in the
                    workplace that’s why it’s crucial that.
                  </li>
                  <li>
                    Women face higher conduct standards especially in the
                    workplace that’s why it’s crucial that.
                  </li>
                  <li>
                    Women face higher conduct standards especially in the
                    workplace that’s why it’s crucial that.
                  </li>
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
  


      <h2>Mission And Vision</h2> 
      <p>
     Healing Angles Academia, like its parent body, is on a mission to help all potential students pass their NCLEX-RN and NCLEX-PN examination. we strive emerge as a world class  educational group in creating and promulgating knowledge with unique learning experiences.
      </p>    
    </div>
      </div>

    <?php include './footer.php';  ?>


    <script>
      $('#about').addClass('active');

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
