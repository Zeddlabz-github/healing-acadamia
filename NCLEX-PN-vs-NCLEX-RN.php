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
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="icon" href="image/icon.png" type="image/gif" sizes="64x64" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="css/animate.css" />
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    </head>

    <body>
        <a id="button"></a>
        <div class="mainarea">
            <?php include './menu.php';  ?>

            <div class="innerbanner mt-5">
                <!-- <img src="image/about_banner.jpg" alt="banner" /> -->
                <div class="container">
                    <div class="breadup">
                        <h2>Blog </h2>
                        <!-- <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>About Us</li>
            </ul> -->
                    </div>
                </div>
            </div>

            <div class="aboutbox ">
                <div class="container">
                <img src="./image/nclex-rn-pn.jpeg" width="100%" alt=""><br> <br>

                    <h2 class="text-left"><span> NCLEX-PN </span> vs. NCLEX-RN</h2>
                    <p class="text-left p-0">
                    NCLEX-PN and NCLEX-RN have more similarities than differences when it comes to the test format. The primary difference is the content of the questions asked. Undoubtedly, Licensed Practical Nurses(LPNs) and Registered Nurses(RNs) both care for their patients, but RNs have an increased scope of practice which is conspicuously clear by the type of questions asked in their NCLEX exam. 

                        <br><br>
                        As RN's can supervise LPNs, the NCLEX-RN comprises more questions on management and leadership skills, while the NCLEX-PN emphasizes coordinating care between health professionals. RN's can also manage total parenteral nutrition and the administration of blood and blood products to patients. NCLEX-RN includes questions on both these topics.

                    </p>
               

                    <p class="text-left px-0">
                    While both tests cover various topics, they are a valid measure to assess the
competency of would-be nurses.
                    </p>
                  
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
