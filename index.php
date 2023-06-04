<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>One Kit Advertising & Marketing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="apple-touch-icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary fw-bold m-0">One Kit</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="signup.php" class="nav-item nav-link" data-i18n="service">Signup</a>
               
                <a href="#home" class="nav-item nav-link active" data-i18n="home">Home</a>
                <a href="#about" class="nav-item nav-link" data-i18n="about">About</a>
                <a href="#skill" class="nav-item nav-link" data-i18n="skill">Experience</a>
                <a href="#service" class="nav-item nav-link" data-i18n="service">Services</a>
                
            </div>
            <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primaryy fw-bold m-0">One Kit</h1>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#project" class="nav-item nav-link" data-i18n="project">Projects</a>
                <!--<a href="#team" class="nav-item nav-link" data-i18n="team">Team</a>-->
                <a href="#testimonial" class="nav-item nav-link" data-i18n="testimonial">Testimonial</a>
                <a href="#contact" class="nav-item nav-link" data-i18n="contact">Contact</a>
                <select class="mme" id=""> 
                    <option class="fell" value="en" >English Language</option> 
                    <option value="ar">اللغة العربية</option>
                    
                </select>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    
    <div class="container-fluid bg-light my-6 mt-0"  id="home">
        <div class="container" >
        
            <div class="row g-5 align-items-center" >
            
                <div class="col-lg-6 py-6 pb-0 pt-lg-0" >
                    <h3 class="text-primary mb-3" data-i18n="we">Hello , We Are</h3>
                    <h1 class="display-3 mb-3">One Kit</h1>
                    <h2 class="typed-text-output d-inline" ></h2>
                    <!--<div class="typed-text d-none" data-i18n="tarns" >Advertising , Marketing , Web Development,  Designing, Social Media Spicalest</div>-->
                    <div class="typed-text d-none" data-i18n="tarns" >Advertising , اعلانات , Marketing , تسويق , Web Development, تطوير مواقع , Designing, تصميم , Social Media specialist , إدارة مواقع التواصل الإجتماعي </div>
                    <div class="d-flex align-items-center pt-5" >
                        <a href="Tel:+01103032730" class="btn btn-primary py-3 px-4 me-5" data-i18n="us">Contact US</a>
                        <!--<button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/Bd3PPuerIUE" no-repeat data-bs-target="#videoModal">
                            <span></span>
                        </button>-->


                        <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="Present Your Company (online-video-cutter.com)-3.mp4" data-bs-target="#videoModal">
                            <span></span>
                        </button>

                        <h5 class="ms-4 mb-0 d-none d-sm-block" data-i18n="ply">Play Video</h5>
                        
                    </div>
                    
                </div>
                <div class="col-lg-6" id="mok">
                    
                    <img class="img-fluid"src="/6rtkpz9s7fwhzh36ylyr1mmmzwl4fd16swh1pApr5y4n7dyhmyz4h50lm2AwAdjbbdAxz11mdqw03q08tf4vhb0wjmfpq3dbz99l5qA5pccfwfq63r2c9vkrzbt5rhqyr43qmqr3cb6n59df2ptvg7kzb3szv8Atxw05817z87gvdjlwgcAq.png" alt="one kit logo">
                </div>
                
            </div>
        </div>
        
    </div>
    
    <!-- Header End -->
    

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">One Kit Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">10</h1>
                            <h5 class="mb-0" data-i18n="year">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0" data-i18n="work">of working experience Advertising & Marketing</h3>
                    </div>
                    <p class="mb-4" data-i18n="ex">One Kit advertising Agency  started it's line of business in 2012, focusing on marketing and advertising development and E-marketing solutions.
                        Having a unique blend of expertise in both marketing and advertising and information technology, and a solid base of more than 10 years of experience in the field, encouraged us to create the perfect mix in favor of our valued customers in the many fields.</p>
                    <p class="mb-3"><i style="color:slateblue" data-i18n="price">Affordable Prices</i></p>

                    <p class="mb-3" ><i style="color:slateblue" data-i18n="hqp">High Quality Products</i></p>

                    <p class="mb-3"><i style="color: slateblue;" data-i18n="time">On Time Project Delivery</i></p>




                    <a class="btn btn-primary py-3 px-5 mt-3" style="font-size: larger;" data-i18n="us" href="Tel:+201103032732">Contact US</a>
                    
                </div>
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0" data-i18n="happy">Happy Clients</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">127</h2>
                    </div>
                    <p class="mb-4" data-i18n="clint">One Kit has provided its clients with the extra boost they needed. Constantly ahead of their needs, we kept the proper balance between sophisticated yet easy to use products. Never too much or too many unwanted features, and never less than what they need to improve on business.</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0" data-i18n="pro">Projects Completed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">3873</h2>
                    </div>
                    <p class="mb-0" data-i18n="proo">The key to success was due to our understanding of business, market, and user requirements, have been blended with our technical and business consulting capacity. Our designers, consultants, programmers, customer care officers now have what it takes to partner with our clients, for the next century.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5" data-i18n="experience"> Experience</h1>
                    <p class="mb-4" data-i18n="expp">One Kit is always ready with our professional and well experienced team members to give you with the best services . </p>
                    <h3 class="mb-4" data-i18n="most">Most Required Services </h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="mark">Marketing</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="AD">Advertising</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="mywork">WEB Development</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="print">Printing</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>


                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="pack">Products packing</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            
                        </div>






                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="grf"> Graphic Designing</h6>
                                    <h6 class="font-weight-bold">100%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>


                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="verf">Verforge</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="som">Social Media Management</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="ytrip">Yacht trip</h6>
                                    <h6 class="font-weight-bold">75%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>


                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold" data-i18n="lies"> Restaurants And Cafe Supplies</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1" data-i18n="cee">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2" data-i18n="ourc">Our clients</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5 data-i18n="des"> Graphic Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - Till Now</p>
                                    <h6 class="mb-0" ></h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="lies">Restaurants And Cafe Supplies</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - Till Now</p>
                                    <h6 class="mb-0" ></h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="marki">Marketing</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - Till Now</p>
                                    <h6 class="mb-0"></h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="som">Social Media Management</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - Till Now</p>
                                    <h6 class="mb-0" ></h6>
                                </div>
                            </div>
                        </div>


                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5 data-i18n="zafer">Zafer Sea Food Restaurant </h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2016 - Till Now</p>
                                    <h6 class="mb-0" data-i18n="last">Restaurant Supplies</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="abd">Abd EL Nabi Restaurant</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2017 - Till Now</p>
                                    <h6 class="mb-0" data-i18n="last">Restaurant Supplies</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="shrimp">Shrimpo Restaurant </h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2018 - 2022</p>
                                    <h6 class="mb-0" data-i18n="last">Restaurant Supplies</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="madina">El Madina El Demshqya</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2022</p>
                                    <h6 class="mb-0" data-i18n="last">Restaurant Supplies</h6>
                                </div>

                                <div class="col-sm-6">
                                    <h5 data-i18n="morgan">Morgan Restaurant </h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2020 - Till Now</p>
                                    <h6 class="mb-0" data-i18n="last">Restaurant Supplies</h6>
                                </div>

                                <div class="col-sm-6">
                                    <h5 data-i18n="falcon">Falcon Gym</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2020 - Till Now</p>
                                    <h6 class="mb-0" data-i18n="som">Social Media</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="sofyan">Sofyan MakeUp Artist</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2020 - Till Now</p>
                                    <h6 class="mb-0" data-i18n="som">Social Media</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5 data-i18n="dr">DR. Samir Abd El Hamed</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2021 - 2021</p>
                                    <h6 class="mb-0" data-i18n="ham">حمله انتخابيه لنادي اصحاب الجياد</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0" data-i18n="ourss">Our Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" data-i18n="letu" href="https://www.facebook.com/onekitadv">Let Us Know How Can We Help You</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-crop-alt fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="creative">Creative Design</h4>
                            <h6 class="mb-3" data-i18n="start1">Starts from <span class="text-primary" data-i18n="mynum1">200 LE</span></h6>
                            <span data-i18n="span1">You can not decide a design for your business ? we will give you the best ideas .</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code-branch fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="graph">Graphic Design</h4>
                            <h6 class="mb-3" data-i18n="start2">Starts from <span class="text-primary" data-i18n="mynum">500 LE</span></h6>
                            <span data-i18n="span2">One Kit will always provids you with the most profisional and suitbale Graphic designs.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="webi">Web Design</h4>
                            <h6 class="mb-3" data-i18n="start3">Starts from <span class="text-primary" data-i18n="mynum">According to the client needs</span></h6>
                            <span data-i18n="span3"> A business website now is a MUST for your business, most modern and functional web development for a better business.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-marker fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="logo">Logo Design</h4>
                            <h6 class="mb-3" data-i18n="start4">Starts from <span class="text-primary" data-i18n="mynum">500 LE </span></h6>
                            <span data-i18n="span4">Very profisional and unique business logos .</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-hands-helping fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="marki">Marketing</h4>
                            <h6 class="mb-3" data-i18n="start5">Starts from <span class="text-primary" data-i18n="mynum">1000 LE </span></h6>
                            <span data-i18n="span5">Help your business grow and enhance brand loyalty and the business dominance despite the emergence of the digital world.</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa bi-facebook fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="soci">Social Media</h4>
                            <h6 class="mb-3" data-i18n="start6">Starts from <span class="text-primary" data-i18n="mynum">1000 LE </span></h6>
                            <span data-i18n="span6">Managing the social media pages - accounts and digital marketing of your business</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-box-open fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="rest">Restaurant Supplies</h4>
                            <h6 class="mb-3" data-i18n="start7">Starts from <span class="text-primary" >According to the client needs </span></h6>
                            <span data-i18n="span7">We provide all kind of restaurants , cafe , hotels and shops supplies.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-ship fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="yacht">Yacht Trips</h4>
                            <h6 class="mb-3" data-i18n="start8">Starts from <span class="text-primary" >4000 LE </span></h6>
                            <span data-i18n="span8">Travel the world and enjoy your trip with your family and friends with One Kit Yacht Trips.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-chalkboard-teacher fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3" data-i18n="meeting">Meeting Room </h4>
                            <h6 class="mb-3" data-i18n="start9">Starts from <span class="text-primary" >100 LE per hour </span></h6>
                            <span data-i18n="span9">Enjoy the best experience with our spical meeting room and studying room .</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0" data-i18n="oez">Our Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*" data-i18n="allp">All Projects</li>
                        <li class="mx-3" data-filter=".first" data-i18n="WEB">Restaurant And Cafe Supplies</li>
                        <li class="mx-3" data-filter=".third" data-i18n="som">Social Media Pages</li>
                        <li class="mx-3" data-filter=".second" data-i18n="grf">Graphic Design</li>
                        <li class="mx-3" data-filter=".forth" data-i18n="card">Card Design</li>
                        <li class="mx-3" data-filter=".fifth" data-i18n="mylogoo">Log Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
            <!-- supplies Start -->
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/1 (1).jpg" alt="one kit group">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/1 (1).jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/BPA-Free-Biodegradable-Tableware-Cutlery-Meal-Prep-Dinner-Airtight-Freezer-Takeaway-Lunch-Box-Soup-Bowl-Round-Compartments-PP-Plastic-Disposable-Food-Container.jpg" alt="one kit group">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/BPA-Free-Biodegradable-Tableware-Cutlery-Meal-Prep-Dinner-Airtight-Freezer-Takeaway-Lunch-Box-Soup-Bowl-Round-Compartments-PP-Plastic-Disposable-Food-Container.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/11-طريقة-لاستخدام-خلة-الأسنان-في-الحياة-اليومية.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/11-طريقة-لاستخدام-خلة-الأسنان-في-الحياة-اليومية.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/258.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/258.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/6lotvzxVEyP7qLik07cN0wAAAA.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/6lotvzxVEyP7qLik07cN0wAAAA.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/71MC6ZhAPWL.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/71MC6ZhAPWL.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/eco-friendly-packaging.jpg" alt="one kit group">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/eco-friendly-packaging.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/f04ffca4-6344-4938-9eb0-8b5bce7cc830.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/f04ffca4-6344-4938-9eb0-8b5bce7cc830.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/Packaging-How-Can-Businesses-Go-More-Green.png" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/Packaging-How-Can-Businesses-Go-More-Green.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/portable-brown-kraft-paper-tea-fruit-gift-packaging-box-500x500.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/portable-brown-kraft-paper-tea-fruit-gift-packaging-box-500x500.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/show3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/show3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/سكر صوابع.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/سكر صوابع.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/منيو تيك اواي االوش بروفة.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/منيو تيك اواي االوش بروفة.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/منيو تيك اواي الظهر بروفة.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/منيو تيك اواي الظهر بروفة.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/المدينة الدمشقية BACK.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/المدينة الدمشقية BACK.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/المدينة الدمشقية FRONT EDIT.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/المدينة الدمشقية FRONT EDIT.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/عرض الفروزين.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/عرض الفروزين.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/فلاير ظهر.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/فلاير ظهر.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/فلاير.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/فلاير.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/منيو حلويات.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/منيو حلويات.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/الداخلي بروفة رقم 1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/الداخلي بروفة رقم 1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/الداخلي بروفة رقم 2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/الداخلي بروفة رقم 2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/الداخلي بروفة رقم 3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/الداخلي بروفة رقم 3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/الداخلي بروفة رقم 4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/الداخلي بروفة رقم 4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/غلاف المنيو الظهر بروفة رقم 1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/غلاف المنيو الظهر بروفة رقم 1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="مستلزمات مطاعم/غلاف المنيو الوش بروفة رقم 1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="مستلزمات مطاعم/غلاف المنيو الوش بروفة رقم 1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <!-- supplies end -->

                <!-- cards end -->
                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/3esam.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="/كروت/3esam.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/IMG-20210811-WA0001.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/IMG-20210811-WA0001.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/mina jewellery ar.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/mina jewellery ar.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/mina jewellery eng.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/mina jewellery eng.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/mina jewellery psd AR 222222222222.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/mina jewellery psd AR 222222222222.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/mina jewellery psd eng222222222222.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/mina jewellery psd eng222222222222.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/Untitled-    back.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/Untitled-    back.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/Untitled-    FRONT.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/Untitled-    FRONT.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/الفادي كارت JBG.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/الفادي كارت JBG.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/الكارت ar.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/الكارت ar.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/الكارت eng.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/الكارت eng.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/ظهر الكارت.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/ظهر الكارت.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/عصام E.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/عصام E.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/كارت بابا.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/كارت بابا.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/ملاك front.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/ملاك front.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/ملاك حبيب.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/ملاك حبيب.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/وش الكارت الفادي JBG.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/وش الكارت الفادي JBG.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item forth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="كروت/وش الكارت.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="كروت/وش الكارت.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <!--cards end-->
        
                <!--graph start-->

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/4 oz elfady jbg.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/4 oz elfady jbg.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/7-oz-el-fady-2.png" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/7-oz-el-fady-2.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/كوب 4 أونز رقم 3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/كوب 4 أونز رقم 3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/كوب 4 أونز.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/كوب 4 أونز.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/كوب 7 أونز رقم 1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/كوب 7 أونز رقم 1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/كوب 7 أونز رقم 2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/كوب 7 أونز رقم 2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/كوب 7 أونز رقم 3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/كوب 7 أونز رقم 3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/كوب 9 أونز رقم 1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/كوب 9 أونز رقم 1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/Untitled-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/Untitled-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/كوب 4 أونز رقم 2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/كوب 4 أونز رقم 2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="جرافيك ديزاين/1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="جرافيك ديزاين/1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <!--graph ends-->

                <!--socila start-->

                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (122) مسابقة رمضان.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (122) مسابقة رمضان.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (79)   عرض الافتتاح.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (79)   عرض الافتتاح.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (145)  الإفتتاح.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (145)  الإفتتاح.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (2063) فالكون كونغ فو.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (2063) فالكون كونغ فو.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (2063) فالكون كيك بوكس.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (2063) فالكون كيك بوكس.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (1331) اعادة عرض الصحاب.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (1331) اعادة عرض الصحاب.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
  

                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (51)   عرض الصحاب  مقاس انستجرام.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (51)   عرض الصحاب  مقاس انستجرام.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (615)  عروض الإفتتاح  222222.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (615)  عروض الإفتتاح  222222.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (72)-Recovered-Recovered عرض عيد الأم  222222222.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (72)-Recovered-Recovered عرض عيد الأم  222222222.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="سوشيال ميديا/01 (49)   عرض رمضان رقم 111 مقاس انستجرام.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="سوشيال ميديا/01 (49)   عرض رمضان رقم 111 مقاس انستجرام.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <!--social end-->

                <!--logo start-->

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/bosy.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/bosy.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/healthy food logo.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/healthy food logo.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/IMG-20200629-WA0008.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/IMG-20200629-WA0008.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/Large 30x40.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/Large 30x40.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/makinia 3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/makinia 3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/malak 3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/malak 3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/Untitled-1 logo.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/Untitled-1 logo.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/Untitled-1 لوجو فالكون.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/Untitled-1 لوجو فالكون.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/Untitled-1 لوجو.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/Untitled-1 لوجو.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/احمد عوض ظهر ذهبي PNG.png" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/احمد عوض ظهر ذهبي PNG.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/لوجو رسلان.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/لوجو رسلان.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item fifth">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="logo/مطعم زفير للمأكولات البحرية.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="logo/مطعم زفير للمأكولات البحرية.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>

                <!--logo end-->
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->
   <!-- <div class="container-xxl py-6 pb-5" id="team">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0" data-i18n="teamp">Our Profisional Team Members</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" data-i18n="contact" href="">Contact US</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-5 my-5" id="testimonial">
        <div class="container-fluid py-5">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-i18n="testimonial" data-wow-delay="0.1s">Testimonial</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/1.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/2.png" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/1.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">صراحة شركة محترمة وانا اتعاملت معاهم وهما بيتبعوا مع العميل خطوة بخطوة لحد مابيوصل للنقطة الي هو عاوزاها واكتر كمان
                                شكرا ليكم كلكم فريق عمل محترم</p>
                            <hr class="w-25 mx-auto">
                            <h5>Mohamed</h5>
                            <span></span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/2.png" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">افضل خدمات و بأحسن الأسعار الصراحة</p>
                            <hr class="w-25 mx-auto">
                            <h5>Osama</h5>
                            <span></span>
                        </div>





                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/3.png" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">شركة محترمة و اول ما بدأت البيزنس الخاص بتاعي و هم معايا من اول الخط و لسا مكلين سوا ان شاء الله</p>
                            <hr class="w-25 mx-auto">
                            <h5>Mahmoud</h5>
                            <span></span>
                        </div>





                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/4.png" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">بتعامل معاهم من زمان و بجد كل مستلزمات المطعم بيوفروها ليا و بأسعار كويسة جدا و الجوده عالية كمان</p>
                            <hr class="w-25 mx-auto">
                            <h5>Omar</h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/4.png" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/3.png" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0" data-i18n="together">Let's Work Together And Sign Up with us to receive E-mails with our latest price and offers . </h1>
                </div>
                
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2" data-i18n="office">Office:</p>
                    <h3 class="fw-bold">اسكندريه سيدي بشر بحري -٢٥ شارع محمد نجيب - عماره العمروسي - الدور الثاني</h3>
                    <hr class="w-100">
                    <p class="mb-2" data-i18n="call">Call US:</p>
                    <h3 class="fw-bold"> 035540390 - 035532440</h3>
                    <h3 class="fw-bold">01103032730 - 01103032738</h3>
                    <h3 class="fw-bold">01103032732 - 01103032737 </h3>
                    <h3 class="fw-bold">01103032734 - 01103032735</h3>
                    <hr class="w-100">
                    <p class="mb-2" data-i18n="mail">Mail:</p>
                    <h3 class="fw-bold">onekit20@gmail.com</h3>
                    <h3 class="fw-bold">sameh@onekitgroup.com</h3>
                    <hr class="w-100">
                    <p class="mb-2" data-i18n="follow">Follow US:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/onekitadv"><i class="fab fa-facebook-square"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/one_kit1/?hl=en"><i class="fab fa-instagram fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://wa.me/+201067300669/?text="><i class="fab fa-whatsapp fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://wa.me/+201273237770/?text="><i class="fab fa-whatsapp fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_7wwm6az7.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d873159.8310446112!2d28.865281731250004!3d31.25449669999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5db5f0e962231%3A0x2527b54ee0992c0f!2sOne%20Kit%20Group!5e0!3m2!1sen!2seg!4v1661897814783!5m2!1sen!2seg"
                frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
                
            </div>
        </div>
    </div>
    <!-- Map End -->
    

    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-secondary" href="#">OneKit</a>, All Rights Reserved.
                        <div class="iconme"> 
                            <div class="fff" data-i18n="flo">
                                Follow US:
                            </div>
                            <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/onekitadv"><i class="fab fa-facebook-square "></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/one_kit1/?hl=en"><i class="fab fa-instagram fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="http://linkedin.com/in/one-kit-group-8361b4253"><i class="fab fa-linkedin-in fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://wa.me/+201067300669/?text="><i class="fab fa-whatsapp fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://wa.me/+201273237770/?text="><i class="fab fa-whatsapp fa-beat" style="--fa-animation-duration: 2s;"></i></a>
                        
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    
    <!-- <script src="https://kit.fontawesome.com/5159e93e33.js" crossorigin="anonymous"></script>-->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="lang.js"></script>

</body>

</html>
