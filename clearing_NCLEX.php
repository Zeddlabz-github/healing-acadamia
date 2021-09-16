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
                <img src="./image/after-nclex.jpg" width="100%" alt=""><br> <br>
                    
                    <h2 class="text-left">What is it like after clearing <span> NCLEX ?</span> </h2>
                    <p class="text-left p-0">
                    Congratulations, you are now officially a registered nurse. After so many hardships, you have accomplished this, and you're now ready for this extremely fulfilling and high-growth career
                    </p>

                    <p class="text-left p-0">
                    Starting a nursing career is an exciting time, it can be challenging as well. But you have come so far with the key (NCLEX) to such a door that can provide you several opportunities. You must be wondering what your next step should be? Don’t worry, you have come to the right place. We’re here to help navigate through this time to get you started on the right foot.
                    </p>

                 
                    <p class="text-left p-0">
                    In the steps written below, it is discussed what is next for you after passing NCLEX.
                    </p>
                    <br>
                    <h3 class="text-left"> <b> CHOOSE WHAT YOUR SPECIALTY IS</b></h3>
                    <br>
                    <p class="text-left p-0">
                    Many new nurses already have a clear idea of what type of nurse they want to be and where they want to work. If you don’t have any idea, you have to consider what unit you would like to work in. This can be helpful in making you feel confident about your job. Even if you don’t start out in the specialty you’re most interested in, your first nursing specialty can be just that- your first. That first can initiate your career on the whole.
                    </p>
                    <p class="text-left p-0">
                    Consider getting certified in the specialty you are most interested in, this might help you make yourself more marketable. For instance, if you’re set on working in critical care, take steps to get ACLS certified. While it’s not always required in order to apply for the position, it shows initiative and dedication.
                    </p>
                    <p class="text-left p-0">
                    This might also help you stand out from the crowd and can be a special feature on your resume.
                    </p>

                    <h4><b>FINDING YOUR FIRST JOB</b></h4>

                    <p class="text-left p-0">

                    Now, it is time to look for an employer. This could be through an agency or direct contact. You have so many options as you are licensed now. Make sure you choose to work with legit people who are licensed. If you look forward to working in a foreign country, you might have to take your English exam (IELTS). Because you will be needing it moving forward to the processing of your other documents going abroad.
                    </p>
                    <p class="text-left p-0">
                    Some hospitals have special programs for new graduates to help them make the transition from a student to nurse. You can look for these kinds of hospitals too. However, there are health care facilities or employers that will train you on the job and don’t offer or require a formal program. You will have a lengthy orientation process regardless of what your job is. This will give you time to learn how to be a nurse in a professional setting. You will learn to fine-tune the skills that you learned in nursing school but will still have some support while you are learning.

                    </p>
                    <h4><b>OTHER FIRST JOBS FOR RNs</b></h4>

                    <p class="text-left p-0">

                    Sometimes, it can take some time for you to land your ideal job, but it is always important to continuously enrich your skills and knowledge. You can look for non-traditional opportunities that may be easier to start in without prior experience. These may be flu shot clinics, school nursing, occupational health, home health, or primary care

                        
                    </p>

                    <p class="text-left p-0">
                    You can also use your nursing network to find jobs that do not require prior experience.
                    </p>
                    <h4><b>WORKING AS AN RN</b></h4>

                    <p class="text-left p-0">
                    Once you officially enter the workforce, you’re likely going to be gainfully employed for a long time. Being a nurse could be both, rewarding and stressful, but remember, you have already worked hard to get through nursing school and pass your NCLEX. It may take time to be comfortable in your job, and that is OK. It is often difficult in the beginning and every nurse has been there. Trust us, you have got this. Remember that if you can survive nursing school you can survive anything!
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
