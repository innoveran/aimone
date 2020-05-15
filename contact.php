<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aimone | Creative Agency</title>
    <link rel="icon" type="image/jpeg" href="images/favicon.jpeg">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="//db.onlinewebfonts.com/c/ef6bdf5ef216552c7e9869841e891ca0?family=Arial+Rounded+MT+Bold" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-denger py-0 head-nav">
        <div class="container">
            <a class="navbar-brand  text-dark py-0 nav-anchor" href="index.php">
                <img src="images/logo/logo.png" alt="Property Realty Logo" style="width:133.3px;height:70px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon company-color"><i class="fas fa-bars "></i></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link btn text-left">ABOUT US</a>
                    </li>
                    <li class="nav-item action-btn-outline">
                        <a href="" class="nav-link btn text-left">SERVICES</a>
                    </li>
                    <li class="nav-item action-btn-outline">
                        <a href="" class="nav-link btn text-left">GALLERY</a>
                    </li>
                    <li class="nav-item action-btn-outline">
                        <a href="" class="nav-link btn text-left">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    <main>
        <section class="contactus-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form-area">
                            <!--contact left bg-->
                            <div class="contact-left-bg">
                                <img src="img/contact-p-2.png" alt="">
                            </div>
                            <div class="contact-form-heading">
                                <h3>Leave a Message</h3>
                            </div>
                            <div class="contact-form">
                                <form action="/formrequest" method="post">
                                    <input type="text" placeholder="First Name" name="firstname" required>
                                    <input class="margin-top-lb-30 margin-top-sb-30" type="text" placeholder="Last Name" name="lastname" required>
                                    <select name="solution" id="" class="form-control mt-5" style="border-top:0px;border-color:#374553">
                                        <option value="" disabled selected>Select Soution</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value="others">Others</option>
                                    </select>
                                    <input class="margin-top-lb-30 margin-top-sb-30" type="email" placeholder="Enter your email" name="email">
                                    <textarea placeholder="Write your message" name="message"></textarea>
                                    <input type="hidden" name="qoutetype"  id="qoutetype" value="sales">
                                    <div class="send-btn">
                                        <input type="submit" value="send me" id="formsend">
                                    </div>
                                </form>
                            </div>
                            <!--contact right bg-->
                            <div class="contact-right-bg">
                                <img src="img/contact-p-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--contact form area-->
                <div class="single-contact-area">
                    <div class="row">
                        <!--single contact-->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30">
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <div class="info-content">
                                    <h6>Our Phone</h6>
                                    <span>+234 902 225 9305</span>
                                </div>
                            </div>
                        </div>
                        <!--single contact-->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h6>Mail address</h6>
                                    <span>hr@aimoneart.com</span><br>
                                    <span>info@aimoneart.com</span>
                                </div>
                            </div>
                        </div>
                        <!--single contact-->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-sb-30">
                            <div class="single-contact-info large-mb-d">
                                <div class="info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-content">
                                    <h6>Our Location</h6>
                                    <span>Lagos, Nigeria</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!--bootstrap JS -->
    <script src="js/bootstrap.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>