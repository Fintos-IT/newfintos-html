<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fintos Tech</title>
    <link rel="icon" type="image/svg+xml" href="https://fintos.com.my/assets/images/fintos-favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <link href="./assets/css/style.css" rel="stylesheet">
    
    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){
        w[l]=w[l]||[];
        w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
        var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),
            dl=l!='dataLayer'?'&l='+l:'';
        j.async=true;
        j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
        f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-KL6WGB64');
    </script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL6WGB64"
              height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <cms:editable name='fintos-tech' label='Fintos Tech Page' type='richtext'>
        <div class="site-header d-flex align-items-center"><!--[start: site-header]-->
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid justify-content-between">
                        <a class="navbar-brand" href="index"><img src="https://fintos.com.my/assets/images/fintoslogo-highres.png" alt="app" class="img-fluid"  /></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav gap-1 gap-lg-4 mt-3 mt-lg-0">
                                <li class="nav-item dropdown" id="solutions-nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                                    Solutions
                                    </a>
                                    <ul class="dropdown-menu rounded-4 dropdown-menu--megamenu border-0">
                                        <div class="d-flex py-3 px-lg-4 mx-1 flex-col flex-lg-row gap-4 flex-column flex-md-row">
                                            <div class="col">
                                                <a href="fintos-advice" class="fw-semibold">
                                                <div class="card card--nav border-0">
                                                    <div class="card-head mb-3">
                                                        <img src="https://fintos.com.my/assets/images/FINTOSAdvice-logo-1.png" class="brandthumb" alt="fintos advice" class="img-fluid"  />
                                                        <p class="my-2">Make smart choices with <br/>your finances</p>
                                                        <div class="more fw-semibold">Learn More <img src="https://fintos.com.my/assets/images/arrow-right.svg" alt="fintos advice" class="img-fluid ps-1"  /></div>
                                                    </div>
                                                    <div class="card-body bgred">
                                                        <img src="https://fintos.com.my/assets/images/thumb-fintosadvice-hero.png" alt="fintos advice" class="img-fluid"  />
                                                    </div>
                                                </div>
                                            </a>
                                            </div>
                                            <div class="col">
                                                <a href="fintos-capital" class="fw-semibold">
                                                    <div class="card card--nav border-0">
                                                        <div class="card-head mb-3">
                                                            <img src="https://fintos.com.my/assets/images/FINTOSCapital-logo-1.png" class="brandthumb" alt="Fintos Capital" class="img-fluid"  />
                                                            <p class="my-2">Regain own financial <br/>independence</p>
                                                            <div class="more fw-semibold">Learn more<img src="https://fintos.com.my/assets/images/arrow-right.svg" alt="fintos advice" class="img-fluid ps-1"  /></div>
                                                        </div>
                                                        <div class="card-body bggreen">
                                                            <img src="https://fintos.com.my/assets/images/thumb-fintosfinance-hero.png" alt="fintos advice" class="img-fluid"  />
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a href="fintos-tech-a.php" class="fw-semibold">
                                                    <div class="card card--nav border-0">
                                                        <div class="card-head mb-3">
                                                            <img src="https://fintos.com.my/assets/images/FINTOSTech-logo-1.png" class="brandthumb" alt="fintos tech" class="img-fluid"  />
                                                            <p class="my-2">Transform financial<br/>management</p>
                                                            <div class="more fw-semibold">Learn More <img src="https://fintos.com.my/assets/images/arrow-right.svg" alt="fintos advice" class="img-fluid ps-1"  /></div>
                                                        </div>
                                                        <div class="card-body bgyellow">
                                                            <img src="https://fintos.com.my/assets/images/thumb-fintos-tech2.png" alt="fintos advice" class="img-fluid"  />
                                                        </div>
                                                    </div>
                                                </a>    
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                                </a>
                                <ul class="dropdown-menu">
                                <li><a data-bs-toggle="modal" data-bs-target="#form-property-income" class="open-modal dropdown-item" href="#">Housing Loan</a></li>
                                <li><a data-bs-toggle="modal" data-bs-target="#form-mortgage-refinance" class="open-modal dropdown-item" href="#">Mortgage Refinance</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 px-lg-2" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 px-lg-2" href="contact.php">Contact</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!--[end: site-header]-->
        <div class="mainhero align-items-end mainhero--heroheight bgyellow">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="tagline d-flex justify-content-center align-items-start flex-column">
                            <img src="https://fintos.com.my/assets/images/FINTOSTech-hero-logo.png" alt="fintos advice"/>
                            <h1 class="heading fw-bold ">Transforming Finance Innovation</h1>
                            <h2 class="subheading">Customized Solutions Revolutionizing Financial <br/>Decisions and Management</h2>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#form-tech-contact" class="open-modal btn btn-secondary btn-lg">Request Demo</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                        <div class="hero-thumb position-relative text-center h-100">
                            <div class="thumb-first h-100" data-aos="fade-up" data-aos-delay="200">
                                <img src="https://fintos.com.my/assets/images/thumb-tech-hero-1.png" alt="Fintos Capital" class="img-fluid"  />
                            </div>
                            <div class="thumb-second h-100" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                <img src="https://fintos.com.my/assets/images/yellowdot-bg.png" alt="dot" class="img-fluid"  />
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brandpartner mb-5"><!--[start:brandparner]-->
            <div class="container">
                <div class="row text-center">
                    <h5 class="fw-normal heading-logo">Trusted by</h5>
                    <div class="pt-2 brand-slide">
                        <div class="col-md-12 overflow-hidden">
                            <ul class="d-flex flex-row list-unstyled gap-5 logo-container">
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/fwdinsurance-brand.png" alt="bureau" class="img-fluid"/></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/creditbureau-brand.png" alt="bureau" class="img-fluid"/></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/kohata-brand.png" alt="bureau" class="img-fluid"/></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/hck-brand.png" alt="bureau" class="img-fluid"/></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/portalmyazzahra-brand.png" alt="bureau" class="img-fluid"  /></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/landgeneralberhad-brand.png" alt="bureau" class="img-fluid"  /></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/oneworld-brand.png" alt="bureau" class="img-fluid"  /></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/nctgroup-brand.png" alt="bureau" class="img-fluid"  /></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/malaysaprotech-brand.png" alt="bureau" class="img-fluid"  /></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/ctos-brand.png" alt="bureau" class="img-fluid"/></li>
                                <li><img src="https://fintos.com.my/assets/images/brandpartner/pkns-brand.png" alt="bureau" class="img-fluid"  /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--[end:brandparner]-->   

        <div class="container my-5"><!--[start: featured]-->
            <div class="sectionheading mb-5 text-center justify-content-center ">
                <img src="https://fintos.com.my/assets/images/imortgage2u-logo-color.png" alt="imortgage2u" class="img-fluid"  />
                <h2 class="heading my-5">Modernizes Mortgage and Loan Processes<br/> with Tailored Features for Diverse User Needs</h2>
                <div class="text-center wrapper-button-featured">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#form-tech-contact" class="open-modal btn-primary btn-lg">Request Demo</a>
                    <a href="imortgage.php" class="btn btn-outline-primary btn-lg">Learn More &nbsp; <img src="https://fintos.com.my/assets/images/up-right-from-square.png" alt="Fintos Capital" class="img-fluid"  /></a>
                </div>
            </div>
            <div class="thumbwrap-featured position-relative">
                <div class="row position-relative">
                    <div class="bg-tech-featured position-absolute"></div>
                    <div class="col-lg-4">
                        <div class="thumb-first" data-aos="zoom-in">
                            <img src="https://fintos.com.my/assets/images/thumb-fintos-features-tech-1.png" alt="app" class="img-fluid"  />
                        </div>
                    </div>
                    <div class="col-lg-5 text-end pt-5">
                        <div class="thumb-second" data-aos="zoom-in" data-aos-delay="200">
                            <img src="https://fintos.com.my/assets/images/thumb-fintos-features-tech-2.png" alt="app" class="img-fluid pe-4"  />
                        </div>
                    </div>
                    <div class="col-lg-3 text-end">
                        <div class="thumb-second" data-aos="zoom-in" data-aos-delay="400">
                            <img src="https://fintos.com.my/assets/images/thumb-fintos-features-tech-3.png" alt="app" class="img-fluid"  />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="thumb-second" data-aos="zoom-in" data-aos-delay="600">
                            <img src="https://fintos.com.my/assets/images/thumb-fintos-features-tech-4.png" alt="app" class="img-fluid"  />
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 pt-5 offset-lg-3 text-end">
                        <div class="thumb-second" data-aos="zoom-in" data-aos-delay="800">
                            <img src="https://fintos.com.my/assets/images/thumb-fintos-features-tech-5.png" alt="app" class="img-fluid"  />
                        </div>
                    </div>
                </div>    
            </div>
        </div><!--[end: featured]-->

        <div class="ourprocess pt-5"><!--[start: ourprocess]-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="card card--process bg-white border-0">
                            <div class="card-body p-4">
                            <span class="badge rounded-pill text-bg-lightblue"> Process Loan</span>
                            <h5 class="card-title my-4 fw-semibold">Mortgage and Loan <br class="hide-mobile" />Management</h5>
                            <ul class="d-flex flex-column list-unstyled">
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Dashboard Access</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Customer List </li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Loan Application</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Comprehensive Calculator</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />FINTSCORE Credit Report</li>
                                </ul>
                                <!--<a hre="#" class="btn btn-text fw-bold px-0"> Learn more <img src="https://fintos.com.my/assets/images/arrow-right-yellow.png" alt="arrow" class="img-fluid"  /></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card card--process  bg-white border-0">
                            <div class="card-body p-4">
                            <span class="badge rounded-pill text-bg-lightblue"> Optimizes Earnings</span>
                            <h5 class="card-title my-4 fw-semibold">Agent Commission <br class="hide-mobile" />System</h5>
                            <ul class="d-flex flex-column list-unstyled">
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Hub Management</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Payout Feature</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Sales Tracking</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Pool Approval </li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Recruitment Tracking</li>
                                </ul>
                                <!--<a hre="#" class="btn btn-text fw-bold px-0"> Learn more <img src="https://fintos.com.my/assets/images/arrow-right-yellow.png" alt="arrow" class="img-fluid"  /></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card card--process bg-white border-0">
                            <div class="card-body p-4">
                            <span class="badge rounded-pill text-bg-lightblue"> Lead Funnel</span>
                            <h5 class="card-title my-4 fw-semibold">Customer Relationship<br class="hide-mobile" /> Management System</h5>
                            <ul class="d-flex flex-column list-unstyled">
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Create Lead</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Bulk Upload Leads</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Chat Messaging Function</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Auto Lead Assignment</li>
                                </ul>
                                <!--<a hre="#" class="btn btn-text fw-bold px-0"> Learn more <img src="https://fintos.com.my/assets/images/arrow-right-yellow.png" alt="arrow" class="img-fluid"  /></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="card card--process bg-white border-0">
                            <div class="card-body p-4">
                            <span class="badge rounded-pill text-bg-lightblue">Showcase Property</span>
                            <h5 class="card-title my-4 fw-semibold">Property Marketplace</h5>
                            <ul class="d-flex flex-column list-unstyled">
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />New Project Notifications</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Booking Management</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Selling Status Updates</li>
                                    <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Project Marketing Tools</li>
                                </ul>
                                <!--<a hre="#" class="btn btn-text fw-bold px-0"> Learn more <img src="https://fintos.com.my/assets/images/arrow-right-yellow.png" alt="arrow" class="img-fluid"  /></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end: ourprocess]-->
        <div class="ourproduct mt-5"><!--[start: ourproduct]-->
            <div class="container">
                <div class="row">
                    <div class="sectionheading mb-5 text-center justify-content-center ">
                        <h2 class="heading">Explore Other Products</h2>
                    </div>
                </div>
                <div class="row align-items-center mb-5 pb-5">
                    <div class="col-lg-5 mb-4"><img src="https://fintos.com.my/assets/images/thumb-fintos-features-tech-lms.gif" alt="app" class="img-fluid" style="border: 2px solid #FFCB3B; border-radius: 15px;" /></div>
                    <div class="col-lg-7">
                        <div class="tagline text-start align-items-start d-flex flex-column ps-5">
                            <img src="https://fintos.com.my/assets/images/FINTOSCapital-logo-1.png" alt="fintos capital" height="40px"/>
                            <h5 class="fw-semibold my-3">Lending Management System (LMS)</h5>
                            <p>Streamline lending operations by covering customer management</p>
                            <ul class="card-text text-start my-4 ourproduct--list list-unstyled">
                                <li><b>Customer List:</b> Categorize customers, track application progress</li>
                                <li><b>Credit Loan Case Management:</b> End-to-end loan case handling</li>
                                <li><b>Reporting: </b> Insightful financial, settlement, disbursement & collection reports</li>
                                <li><b>Fund Management: </b>Generate insightful financial reports</li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-lg mt-4">Request Demo</a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-7  mb-4">
                        <div class="tagline text-start align-items-start d-flex flex-column">
                            <img src="https://fintos.com.my/assets/images/calculator-icon.png" alt="fintos advice"  />
                            <h5 class="fw-semibold my-3">FINTOS Calculator App</h5>
                            <p>Make smart financial decisions with our comprehensive calculator app</p>
                            <ul class="card-text text-start my-4 ourproduct--list list-unstyled">
                                <li><b>Loan & Eligibility Calculator: </b>Determine eligibility & insights into finances</li>
                                <li><b>Real Property Gains Tax Calculator: </b>Streamlines property tax</li>
                                <li><b>Legal Fees Estimation:</b> Accurate assessment of additional costs</li>
                                <li><b>Latest Bank Lending Rates:</b> Overviews current bank loan rates</li>
                                <li><b>Free Access:</b> Ensures everyone have access to financial tools </li>
                            </ul>
                            <div class="d-flex flex-row gap-3 mt-4 wrapper-tech-appbtn">
                                <a href="https://apps.apple.com/us/app/fintos-calculator/id6472300121"><img src="https://fintos.com.my/assets/images/appstore-logo.png" alt="check" /></a>
                                <a href="https://play.google.com/store/apps/details?id=com.fintos.calculator&pli=1"><img src="https://fintos.com.my/assets/images/googleplay-logo.png" alt="check" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5"><img src="https://fintos.com.my/assets/images/thumb-fintos-features-tech-7.png" alt="app" class="img-fluid"  /></div>
                </div>
            </div>
        </div><!--[end: ourproduct]-->

        <div class="aboutus pt-5"><!--[start:aboutus]-->
            <div class="container">
                <div class="row text-center align-items-center">
                    <div class="sectionheading my-5">
                        <h2 class="heading">Advance Your Financial Well-being With Us</h2>
                    </div>
                    <div class="col-lg-6 video-fn pe-5">
                        <div class="tagline text-start align-items-start d-flex flex-column">
                            <h5 class="fw-semibold">About FINTOS Tech</h5>
                            <img src="https://fintos.com.my/assets/images/FINTOSTech-logo-1.png" alt="fintos tech" width="" height="40"  />
                            <p><b>Techapp International Sdn Bhd</b>, operating under <b>FINTOS Tech</b>, is a leading FinTech development division dedicated to creating advanced financial analysis systems for business partners and individuals. Our main goal is to offer innovative fintech solutions that streamline processes and boost application success.
                            </p><p>Our flagship product, the Fintos app, simplifies financial processes, offering diverse services for efficient management and decision-making.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="videowrap position-relative">
                            <a href="#" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoplayer"><img src="https://fintos.com.my/assets/images/icon-play.png" alt="video" /></a>
                            <img src="https://fintos.com.my/assets/images/thumbvideo-fintostech-1.png" alt="video" />
                        </div>
                    </div>
                </div>
                <!--
                <div class="row mt-5 gallery-fin">
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/fintostech-about-thumb-1.png" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/fintostech-about-thumb-2.png" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/fintostech-about-thumb-3.png" alt="thumbnail" /></div>
                </div>-->
            </div>
        </div><!--[end:aboutus]-->

        <div class="timeline mt-5"><!--[start: timeline]-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bglightyellow p-4 p-lg-5 rounded">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-8 p-0">
                                    <div class="sectionheading my-lg-5 text-start">
                                        <h2 class="heading">Our Journey</h2>
                                    </div>
                                </div> 
                                <div class="col-md-4 p-0">
                                    <div class="wrapper-arrow-timeline my-lg-5">
                                        <div class="timeline-btn btn-prev">
                                            <img src="https://fintos.com.my/assets/images/arrow-prev.png" alt="next">
                                        </div>

                                        <div class="timeline-btn btn-next ps-2">
                                            <img src="https://fintos.com.my/assets/images/arrow.png" alt="next">
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="row timeline-slider">
                                <div class="col-md-2 p-0">
                                    <div class="card card--timeline-slide border-0 bg-transparent">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">2016</h5>
                                            <div class="card-text">
                                                <h6 class="fw-bold">Company Establishment</h6>
                                                <p>Establishment of TechApp International Sdn Bhd, focusing on financial technology research.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 p-0">
                                    <div class="card card--timeline-slide border-0 bg-transparent">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">2017</h5>
                                            <div class="card-text">
                                                <h6 class="fw-bold">Launch of imortgage2u Phase 1</h6>
                                                <p>Debuted as Malaysia's first tech-driven mortgage management system.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 p-0">
                                    <div class="card card--timeline-slide border-0 bg-transparent">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">2018</h5>
                                            <div class="card-text">
                                                <h6 class="fw-bold">Launch of imortgage2u Phase 2</h6>
                                                <p>Upgraded imortgage2u with improved user experience and eligibility system.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 p-0">
                                    <div class="card card--timeline-slide border-0 bg-transparent">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">2019</h5>
                                            <div class="card-text">
                                                <h6 class="fw-bold">Launch of imortgage2u Phase 3 and App</h6>
                                                <p>Released of its mobile application for user convenience.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 p-0">
                                    <div class="card card--timeline-slide border-0 bg-transparent">
                                        <div class="card-body p-0">
                                            <h5 class="card-title">2022</h5>
                                            <div class="card-text">
                                                <h6 class="fw-bold">Launch of imortgage2u Phase 4</h6>
                                                <p>Upgraded for more accuracy and user-centric design across three previous versions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div> 
                </div>
            </div>
        </div><!--[start: timeline]-->

        <!--[start: faq]-->
        <div class="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="sectionheading text-center">
                        <h2 class="heading">Frequently Ask Questions</h2>
                    </div>
                    <div class="col-md-8 justify-content-center pt-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                    <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="row w-100 justify-content-between">
                                            <div class="col-10">
                                                Is the subscription fee on a monthly or annual basis?
                                            </div>
                                            <div class="col-2 text-end">
                                                <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer subscriptions on both monthly and annual bases. For details on fees, please contact us.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-10">
                                            How long is the subscription period?
                                        </div>
                                        <div class="col-2 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The subscription period is twelve (12) months from the date of subscription.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-10">
                                            What happens when the subscription term expires?
                                        </div>
                                        <div class="col-2 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The account will be automatically locked. To regain access, subscribers need to renew their iMortgage2u Plan’s account.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-10">
                                            What happens if subscribers fail to renew their subscriptions?
                                        </div>
                                        <div class="col-2 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The account will be suspended for six (6) months. If the renewal transaction is not completed within this period, the account will be terminated, including all associated data and records, without further notice.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-10">
                                            Can subscribers upgrade their plan after subscribing?
                                        </div>
                                        <div class="col-2 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, subscribers can upgrade from the Standard to the Business Plan by contacting us at wecare4u@imortgage2u.com and paying RM700.00 or redeeming 700 FinPoints through the platform.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-10">
                                            Is the iMortgage2u system safe and secure for use?
                                        </div>
                                        <div class="col-2 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, it is. The iMortgage2u system protects data from SQL injection and is securely hosted on a private and secured Virtual Private Server (VPS).
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!--[end: faq]-->

        <div class="cta cta--boxed"><!--[start: cta]-->
            <div class="container">
                <div class="row bglightyellow">
                    <div class="col-md-5 img-ct cta--withphone">
                        <div class="thumb-cta">
                            <img src="https://fintos.com.my/assets/images/tech-cta.png" alt="thumbnail" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="sectionheading h-100 d-flex flex-column align-items-start pe-lg-5">
                            <h2 class="heading">Ready To Make A <br/>Difference With Us?</h2>
                            <p>Manage, optimize, and track loans with one integrated system tailored to your business needs.</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#form-tech-contact" class="open-modal btn btn-primary btn-lg fw-semibold mb-2">Request Demo</a>
                            <div class="text-end">
                                <div class="phone-cta py-0 mb-1">
                                    <img src="https://fintos.com.my/assets/images/phone.png" alt="phone"/>
                                    Contact us at: 03-8080 9777 (#3001)
                                </div>
                                <a class="text-decoration-none" style="color: #212529;" href="mailto:support@fintos.com.my">support@fintos.com.my</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end: cta]-->

        <footer class="site-footer bgprimary pt-5"><!--[start:site-footer]-->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-1">
                        <h3 class="fw-semibold">Products</h3>
                        <ul class="list-unstyled d-flex flex-column">
                            <li><a data-bs-toggle="modal" data-bs-target="#form-property-income" class="open-modal" href="#">Housing Loan</a></li>
                            <li><a data-bs-toggle="modal" data-bs-target="#form-mortgage-refinance" class="open-modal" href="#">Mortgage Refinance</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-2">
                        <h3 class="fw-semibold">Solutions</h3>
                        <ul class="list-unstyled d-flex flex-column">
                            <li><a href="fintos-advice">Fintos Advice</a></li>
                            <li><a href="fintos-capital">Fintos Capital</a></li>
                            <li><a href="fintos-tech-a.php">Fintos Tech</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-3">
                        <h3 class="fw-semibold">Company</h3>
                        <ul class="list-unstyled d-flex flex-column">
                            <li><a href="about.php">About</a></li>
                            <li><a href="career.php">Career</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <!-- <li><a href="#">Partners</a></li>-->
                        </ul>
                    </div>
                    <div class="col-md-3 footer-4">
                        <h3 class="fw-semibold">Contact</h3>
                        <p>Mon - Fri: 9.30am - 6.30pm</p>
                        <a href="tel:+60380809777">+603 8080 9777</a>
                        <p>Lot No. 11F-2, 11th Floor, Tower 4 @ PFCC, Jalan Puteri 1/2, Bandar Puteri Puchong, 47100 Puchong, Selangor</p>
                        <div class="socialmedia d-flex gap-5 mt-4">
                            <a href="https://www.facebook.com/fintosventuregroup"><img src="https://fintos.com.my/assets/images/fb-icon.png" alt="facebook" /></a>
                            <a href="https://www.linkedin.com/company/fintos-venture-group-official"><img src="https://fintos.com.my/assets/images/li-icon.png" alt="linkedin" /></a>
                            <!--<a href="#"><img src="https://fintos.com.my/assets/images/tik-icon.png" alt="tiktok" /></a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright pt-5 pb-5">
                <div class="container">
                    <div class="row pt-3 text-center align-items-start">
                        <a href="#" class="py-4"><img src="https://fintos.com.my/assets/images/fintos-logo-dark.png" alt="fintos"  /></a>
                        <p>Fintos Venture Group (202001010295 (1366615-P)) © 2024 - All rights reserved</p>
                        <ul class="list-unstyled d-flex flex-row justify-content-center gap-5">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookies</a></li>
                        </ul>
                        <div class="justify-content-center mobile-sosmed d-flex gap-5 mt-4">
                            <a href="https://www.facebook.com/fintosventuregroup"><img src="https://fintos.com.my/assets/images/fb-icon.png" alt="facebook" /></a>
                            <a href="https://my.linkedin.com/company/fintos-venture-group"><img src="https://fintos.com.my/assets/images/li-icon.png" alt="linkedin" /></a>
                            <!--<a href="#"><img src="https://fintos.com.my/assets/images/tik-icon.png" alt="tiktok" /></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--[end:site-footer]-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./assets/js/main.js"></script>

        <!--[start:modal player]-->
        <div class="modal fade" id="videoplayer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ratio ratio-16x9">
                            <!-- <iframe src="./assets/videos/Fintos App Introduction.mp4" allowfullscreen></iframe> -->
                            <video src="https://fintos.com.my/assets/videos/Fintos%20App%20Introduction.mp4" controls allowfullscreen></video>
                        </div>
                    </div>
                </div>
        </div>
        </div>
        <div class="modal fade" id="form-tech-contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScHD9_jL4AK-9KCvdmEWyNqRAz-sMqDIR85yLhsOLkBOIAIHw/viewform?embedded=true" width="640" height="1143" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <!--[start:modal player]-->
        <div class="modal fade" id="form-property-income" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://sub.fintos.com.my/calculator/property_income"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--[end: modal player]-->

        <!--[start:modal player]-->
        <div class="modal fade" id="form-mortgage-refinance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://sub.fintos.com.my/calculator/mortgage_refinance"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!--[end: modal player]-->
    </cms:editable>
</body>
</html>
<?php COUCH::invoke(); ?>
