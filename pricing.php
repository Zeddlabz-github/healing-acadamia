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
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="image/icon.png" type="image/gif" sizes="64x64">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <style>
            .why-Healing Angles Academia-pricing span, .aboutli ul li{
                line-height: 35px;
                font-size: 18px;
            }
            .card {
                padding: 20px 15px;
                box-shadow: 0px 0px 2px 4px rgba(0,0,0,0.2);
                background: #997CFC;
                color: white;
                font-weight: bolder;
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
                        <h2>Pricing</h2>
                        <!-- <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>Pricing</li>
                        </ul> -->
                    </div>
                </div>
            </div>


            <div class="Department mt-5 nobg">
                <div class="container">

                    <h2>GET MORE, PAY LESS!</h2>
                    <div class="row p-5">

                        <div class="col-md-6 pt-2 mt-5">

                            <h3><b> Prepare smart at an affordable price!</b></h3>
                                <h4>Early Bird Discount</h4>
                                <h5>
                                    <br><br>
                                    
                                        <div class="card">
                                        USD $2000
                                        </div> <br>
                                        <br>
                                            <br>
                                            First 15 students get <b> $500 discount </b>
                                            <br>
                                            <br>
                                            Course Duratoin : 3 months

                                     
                                    <br>
                                    <br>
                                       <b> Hurry Up !! Limited Seats Only</b> 
                                    <br>
                                </h5>
                           
                            <br><br>

                            </span>
                        </div>

                        <div class="col-md-6">
                            <div class="aboutli">
                                <ul>
                                    <li> <b>Zero risks:</b> Healing Angles Academia is a platform you can trust without any second thought
                                        as we know the value of your money.</li>
                                    <li> <b>Benefits for sure:</b> We know how important success is for you and we
                                        guarantee your satisfaction.</li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 pt-4 why-Healing Angles Academia-pricing">

                            <h3>Why should I sign up with Healing Angles Academia?</h3>
                            <span>

                                This course will provide you the strategies and tips that will enable you to get the
                                NCLEX-RN cleared, meaning that you don’t have to waste time on books, classes, or
                                repeating the exam over and over again.<br><br>
                              
                                Many of our students have benefited from our individualized approach to
                                teaching. Our nurses have been where you are right now. You can benefit from
                                this too. <br><br>

                                Once you join our classes, you will have: <br><br>
                                <ul>
                                    <li>Individual focus on student performence</li>
                                    <li>4 mock tests before real exam</li>
                                    <li>all need to know content</li>
                                    <li>thousands of practice questions</li>
                                    <li>access to all the live and recorded classes</li>
                                    <li>feedback support from the NCLEX-RN experts</li>
                                    <li>timely diagnostic tests</li>
                                    <li>and much more!</li>
                                </ul>
                                <span>
                                It's not just about NCLEX-RN, it's about improving people's prospects. We have
helped many students with this determination. Now, it is your turn to make the
right decision and move one step ahead to the country of your dream
                                </span> <br><br>
                                <b>

                                    We have limited seats available, Hurry up and start your journey to success
                                    today!!
                                </b>
                        </div>
                    </div>
                </div>


            </div>
            <?php include './footer.php';  ?>


            <script>
                $('#pricing').addClass('active');

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
