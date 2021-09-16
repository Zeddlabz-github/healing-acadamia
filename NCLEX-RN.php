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
                        <h2>About Us</h2>
                        <!-- <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>About Us</li>
            </ul> -->
                    </div>
                </div>
            </div>

            <div class="aboutbox ">
                <div class="container">
                <img src="./image/nclex-rn.jpg" width="100%" alt=""><br> <br>

                    <h2 class="text-left"><span> NCLEX-RN® </span> - CLIENT NEEDS </h2>
                    <p class="text-left p-0">
                    NCLEX-RN® questions are organized in accordance with Client Need Categories.

                        <ul style="line-height: 40px;">
                            <li> Safe Effective Care Environment
                                <ul class="pl-4">
                                    <li>Coordination of Care</li>
                                    <li>Safety and Infection Control</li>
                                </ul>
                            </li>
                            <li>Health Promotion and Maintenance</li>
                            <li>Psychosocial Integrity</li>
                            <li>Physiological Integrity
                                <ul class="pl-4">
                                    <li>Basic Care and Comfort</li>
                                    <li>Pharmacological and Parenteral Therapies</li>
                                    <li>Reduction of Risk Potentia</li>
                                    <li>Physiological Adaptation</li>
                                </ul>
                            </li>
                        </ul>

                    </p>

                    <table></table>

                    <p class="text-left p-0">
                        Let's take a deeper look :

                    </p>
                    <h4 class="text-left"><b>A. Safe, Effective Care Environment:<b></h4>
                    <p class="text-left p-0">This criterion involves nursing care that addresses anything that falls under the management of care, safety and infection control.</p>

                    <h4 class="text-left"><b>B. Health promotion and maintenance:<b></h4>
                    <p class="text-left p-0">This client need includes all things about an individual’s health. The nurse focuses on normal growth and development across the life span, prevention and/or early detection of health problems, and strategies to achieve optimal health.</p>

                    <h4 class="text-left"><b>C. Psychosocial Integrity<b></h4>
                    <p class="text-left p-0">The psychosocial integrity category assesses your knowledge of health practices, culture, mental health disorders, crisis theory, addictions, and the foundations of mental health nursing. Plus, a nurse in this category also focuses on the client's mental and social well-being if they are thought to be experiencing stressful events, which include acute and chronic illnesses.</p>

                    <h4 class="text-left"><b>D. Physiological Integrity<b></h4>
                    <p class="text-left p-0">In this category, the nurse, by providing care and comfort, focuses on facilitating health and wellness. It helps in decreasing the client’s risk for potential complications and managing any issues which may arise.</p>

                    <p class="text-left p-0">
                    Physiological integrity comprises four different subcategories of client needs: basic care and comfort, pharmacological and parenteral therapies, reduction of risk potential, and physiological adaptation.

                    </p>


                </div>
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
