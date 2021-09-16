<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Healing Angles Academia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Healing Angles Academia">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="image/icon.png" type="image/gif" sizes="64x64">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <style>
      .bloginarea img{
          height: 300px;
          width: 100%;
      }
    </style>
  </head>

  <body>
    <a id="button"></a>
    <div class="mainarea">
      <?php include './menu.php';  ?>


      <div class="innerbanner mt-5">
        <!-- <img src="image/about_banner.jpg" alt="banner"> -->
        <div class="container">
          <div class="breadup">
            <h2>Our Blog's</h2>
            <!-- <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>Blog</li>
            </ul> -->
          </div>
        </div>
      </div>


      <div class="Department mt-5 nobg">
        <div class="container">
          <h2>Read Out Our <span>Blog List</span></h2>
         
        </div>
      </div>


      <div class="inblog">
        <div class="container">
          <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="bloginarea">
                <img src="image/what-is-nclex.jpg" alt="Blog Image">
                <h2>NCLEX - WHAT IS IT?</h2>
                <p>The National Council Licensure Examination (NCLEX) tests your skills and knowledge acquired in nursing school to ensure that you are qualified to work in the local hospitals and other healthcare facilities in America, Canada and Australia.  </p>
                <h3><a href="./what-is-nclex.php">Read More...</a></h3>
              </div>
            </div>


            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="bloginarea">
                <img src="image/nclex-rn-pn.jpeg" alt="Blog Image">
                <h2>NCLEX-PN vs. NCLEX-RN</h2>
                <p>NCLEX-PN and NCLEX-RN have more similarities than differences when it comes to the test format. The primary difference is the content of the questions asked. Undoubtedly, Licensed Practical Nurses(LPNs) and Registered Nurses(RNs) both care for their patients,  </p>
                <h3><a href="./NCLEX-PN-vs-NCLEX-RN.php">Read More...</a></h3>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="bloginarea">
                <img src="image/nclex-rn.jpg" alt="Blog Image">
                <h2>NCLEX-RN® CLIENT NEEDS</h2>
                <p>NCLEX-RN® questions are organized in accordance with Client Need Categories.</p>
                <h3><a href="./NCLEX-RN.php">Read More...</a></h3>
                <br><br>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="bloginarea">
                <img src="image/imp-nclex.png" alt="Blog Image">
                <h2>Why is NCLEX important?</h2>
                <p>If you aim to work as a nurse in America, Australia and Canada, you will be required to take and pass the NCLEX exam. Successful completion of an NCLEX examination demonstrates to employers that nurses have a high level of ability and skill in the nursing field.</p>
                <h3><a href="./Why-is-NCLEX-important.php">Read More...</a></h3>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="bloginarea">
                <img src="image/after-nclex.jpg" alt="Blog Image">
                <h2>What is it like after clearing NCLEX?</h2>
                <p>Congratulations, you are now officially a registered nurse. After so many hardships, you have accomplished this, and you're now ready for this extremely fulfilling and high-growth career
Starting a nursing career is an exciting time, it can be challenging as well.</p>
                <h3><a href="./clearing_NCLEX.php">Read More...</a></h3>
              </div>
            </div>


          </div>
        </div>
      </div>


    </div>

    <?php include './footer.php';  ?>





    <script>
      $('#blog').addClass('active');

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
