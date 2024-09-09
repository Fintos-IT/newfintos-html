<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fintos</title>
    <link rel="icon" type="image/svg+xml" href="https://fintos.com.my/assets/images/fintos-favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <link href="https://fintos.com.my/assets/css/style.css" rel="stylesheet">
    
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

    <div class="site-header d-flex align-items-center"><!--[start: site-header]-->
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid justify-content-between">
                    <a class="navbar-brand" href="index.php"><img src="https://fintos.com.my/assets/images/fintoslogo-highres.png" alt="app" class="img-fluid"  /></a>
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
                                            <a href="fintos-advice.php" class="fw-semibold">
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
                                            <a href="fintos-capital.php" class="fw-semibold">
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
        
    <cms:editable name='index' label='Index Page' type='richtext' height='550'>
        <div class="mainhero align-items-center bgyellow">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="tagline d-flex justify-content-center align-items-start h-100 flex-column">
                            <span class="title fw-semibold w-100">Your instant loan consultant</span>
                            <h1 class="heading fw-bold">Effortless Financing Starts Here</h1>
                            <h2 class="subheading">We cut through the complexity to get you fast, clear loan options</h2>
                            <!-- disabled due to enhancment to release it in 19/6/2024 -->
                            <!-- <a href="#" data-modal='mortgage-loan' class="open-modal btn btn-secondary btn-lg">Get Loan Calculator</a> -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                        <div class="hero-thumb position-relative text-center">
                            <div class="thumb-first position-absolute" data-aos="zoom-in" data-aos-duration="3000">
                                <img src="https://fintos.com.my/assets/images/mortgageresult.png" alt="app" class="img-fluid"  />
                            </div>
                            <div class="thumb-second">
                                <img src="https://fintos.com.my/assets/images/phonescreen.png" alt="app" class="img-fluid img-hero"  />
                            </div>    
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="brandpartner"><!--[start:brandparner]-->
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
        <div class="financeproduct"><!--[start:financeproduct]-->
            <div class="container">
                <div class="row text-center">
                    <div class="sectionheading mb-5">
                        <h2 class="heading">Financial Solutions to Help You Achieve</h2>
                    </div>    
                    
                    <div class="col-md-4 card-container open-modal" data-bs-toggle="modal" data-bs-target="#form-property-income" style="cursor: pointer;"> 
                        <div class="card border-0 text-center align-items-center justify-content-center">
                            <img src="https://fintos.com.my/assets/images/property-icon.svg" alt="property income eligibility" data-aos="zoom-in" data-aos-delay="200" />
                            <div class="card-body p-0 mt-lg-4">
                            <h5 class="card-title m-0">Property Income Eligibility</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-container open-modal" data-bs-toggle="modal" data-bs-target="#form-property" style="cursor: pointer;">
                        <div class="card border-0 text-center align-items-center justify-content-center">
                            <img src="https://fintos.com.my/assets/images/loan-icon.svg" alt="Mortgage Loan Eligibility" data-aos="zoom-in" data-aos-delay="400" />
                            <div class="card-body p-0 mt-lg-4">
                            <h5 class="card-title m-0">Mortgage Loan Eligibility</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-container open-modal" data-bs-toggle="modal" data-bs-target="#form-mortgage-refinance" style="cursor: pointer;">    
                        <div class="card border-0 text-center align-items-center justify-content-center">
                            <img src="https://fintos.com.my/assets/images/mortgage-icon.svg" alt="Mortgage Refinance Eligibility" data-aos="zoom-in" data-aos-delay="600"  />
                            <div class="card-body p-0 mt-lg-4">
                            <h5 class="card-title m-0">Mortgage Refinance Eligibility</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end:financeproduct]-->
        <div class="whyus pt-5"><!--[start: whyus]-->
            <div class="container">
                <div class="row">
                    <div class="sectionheading my-5 text-center">
                        <h2 class="heading">Why we're different</h2>
                        <p>We just do it faster and better</p>
                    </div>  
                    <div class="col-md-3 icon-container">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute">
                                    <img src="https://fintos.com.my/assets/images/tailored-financial.png" alt="Tailored Financial Solutions" data-aos="fade-up" data-aos-delay="200"/>
                                </div>
                                <div class="thumb-second">
                                    <img src="https://fintos.com.my/assets/images/shape-tailored-financial.png" alt="Tailored Financial Solutions" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <h5 class="card-title fw-bold mb-3">Tailored Financial Solutions</h5>
                                <p class="card-text">We create a personalized plan just for you, so it fits your needs perfectly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 icon-container">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute">
                                    <img src="https://fintos.com.my/assets/images/full-spectrum.png" alt="Full-Spectrum Convenience" data-aos="fade-up" data-aos-delay="400" />
                                </div>
                                <div class="thumb-second">
                                    <img src="https://fintos.com.my/assets/images/shape-fullspectrum.png" alt="Full-Spectrum Convenience" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000"/>
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">Full-Spectrum Convenience</h5>
                            <p class="card-text">We do all the work, so you don’t have to worry about anything from start to finish.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 icon-container">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute">
                                    <img src="https://fintos.com.my/assets/images/transparent-trustworthy.png" alt="Full-Spectrum Convenience" data-aos="fade-up" data-aos-delay="600" />
                                </div>
                                <div class="thumb-second">
                                    <img src="https://fintos.com.my/assets/images/shape-transparent-trustworthy.png" alt="Full-Spectrum Convenience" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000"/>
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">Transparent and Trustworthy</h5>
                            <p class="card-text">We are always clear and honest, so you know exactly what you're getting—no surprises!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 icon-container">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute">
                                    <img src="https://fintos.com.my/assets/images/Completely-free-service.png" alt="Completely Free Service" data-aos="fade-up" data-aos-delay="800"/>
                                </div>
                                <div class="thumb-second">
                                    <img src="https://fintos.com.my/assets/images/shape-completely-free-service.png" alt="Completely Free Service" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">Free Consultation</h5>
                            <p class="card-text">Our consultation doesn't cost you anything. It's completely free with no upfront costs.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end: whyus]-->
        
        <div class="solutions mt-5"><!--[start:solutions]-->
            <div class="container">
                <div class="row">
                    <div class="sectionheading my-5 text-center">
                        <h2 class="heading">All Your Financial Solutions, <br/>One Convenient Ecosystem</h2>
                        <p>We provide access to a wide range of financial products, services, and resources <br/>designed to help you reach your goals and make the most of your money.</p>
                    </div>
                    <div class="col-md-4 card-container">
                        <div class="card border-0 align-items-start">
                            <img src="https://fintos.com.my/assets/images/FINTOSAdvice-logo-1.png" height="55px" alt="fintos advice" data-aos="zoom-in" />
                            <div class="card-body p-0 d-flex flex-column">
                            <h5 class="card-title">Navigation Better <br/>Financial Moves</h5>
                            <ul class="card-text list-unstyled text-start">
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Mortgage Solution</li>
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Debt Restructuring Program</li>
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Property Investment</li>
                            </ul>
                            <a href="fintos-advice.php" class="btn btn-primary btn-sm">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-container">
                        <div class="card border-0 align-items-start">
                            <img src="https://fintos.com.my/assets/images/FINTOSCapital-logo-1.png" alt="fintos capital" height="55px" data-aos="zoom-in" data-aos-delay="200"  />
                            <div class="card-body p-0 d-flex flex-column">
                            <h5 class="card-title">Ace All of Life's <br/>Financial Needs</h5>
                            <ul class="card-text list-unstyled text-start">
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Mortgage Refinance</li>
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Property Financing </li>
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Debt Consolidation</li>
                            </ul>
                            <a href="fintos-capital.php" class="btn btn-primary btn-sm">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-container">
                        <div class="card border-0 align-items-start">
                            <img src="https://fintos.com.my/assets/images/FINTOSTech-logo-1.png" alt="fintos tech"  height="55px" data-aos="zoom-in" data-aos-delay="400"  />
                            <div class="card-body p-0 d-flex flex-column">
                            <h5 class="card-title">Better Decisions.<br/>Better Insights.</h5>
                            <ul class="card-text list-unstyled text-start">
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Mortgage Solution System</li>
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Lending Management System</li>
                                <li class="d-flex flex-row gap-1 align-items-center"><img src="https://fintos.com.my/assets/images/check-circle.png" alt="check" />Agent Commission Software</li>
                            </ul>
                            <a href="fintos-tech-a.php" class="btn btn-primary btn-sm">Learn more</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div><!--[end:solutions]-->
        <div class="aboutus pt-5"><!--[start:aboutus]-->
            <div class="container">
                <div class="row text-center">
                    <div class="sectionheading my-5">
                        <h2 class="heading">Shaping the Future of Finance, <br/>with Integrity and Innovation</h2>
                    </div>
                    <div class="col-md-6 video-fn">
                        <div class="tagline text-start align-items-start d-flex flex-column">
                            <h5 class="fw-semibold">Meet Fintos</h5>
                            <img src="https://fintos.com.my/assets/images/fintoslogo-highres.png" alt="google" />
                            <p>We are committed to shaping a future where sustainability takes center stage, and we achieve this by harnessing the power of our innovative products, solutions, unwavering passion, and robust financial resilience.</p>
                            <a href="about.php" class="btn btn-primary btn-md">About us</a>
                            <div class="award">
                                <ul class="list-unstyled d-flex flex-row award-container">
                                    <li><img class="img-fluid" src="https://fintos.com.my/assets/images/award1.png" alt="award"/></li>
                                    <li><img class="img-fluid" src="https://fintos.com.my/assets/images/award2.png" alt="award"/></li>
                                    <li><img class="img-fluid" src="https://fintos.com.my/assets/images/award3.png" alt="award"/></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="videowrap position-relative">
                            <a href="#" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoplayer"><img src="https://fintos.com.my/assets/images/icon-play.png" alt="video" /></a>
                            <img src="https://fintos.com.my/assets/images/MP7.jpg" alt="video" />
                        </div>
                    </div>
                </div>
                <div class="row mt-5 gallery-fin">
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/home-img-1.jpg" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/home-img-2.jpg" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/home-img-3.jpg" alt="thumbnail" /></div>
                </div>
            </div>
        </div><!--[end:aboutus]-->
        <div class="cta cta--boxed"><!--[start: cta]-->
            <div class="container">
                <div class="row bglightyellow">
                    <div class="col-md-5 img-ct">
                        <div class="thumb-cta">
                            <img src="https://fintos.com.my/assets/images/thumb-cta.png" alt="thumbnail" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="sectionheading h-100 d-flex flex-column align-items-start p-md-5">
                            <h2 class="heading">Ready to take it to the next level?</h2>
                            <p> We'll work with you to develop a customized financial plan that aligns with your objectives.</p>
                            <a href="#" data-modal='prescreening' onclick="alert('Coming Soon!')" class="open-modal btn btn-primary btn-lg fw-semibold">Get Loan Eligibility Instantly</a>
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
                            <li><a href="fintos-advice.php">Fintos Advice</a></li>
                            <li><a href="fintos-capital.php">Fintos Capital</a></li>
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
                        <p><a href="tel:+60380809777">+603 8080 9777</a></p>
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
                        <p>Fintos Venture Group (202001010295 (1366615-P)) &copy; 2024 - All rights reserved</p>
                        <ul class="list-unstyled d-flex flex-row justify-content-center gap-5">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
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
    </cms:editable>
    <!--[start:modal player]-->
    <div class="modal fade" id="videoplayer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/SAisjxfyRH4?si=Sj5ek03CsoZ6SdDV" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--[end: modal player]-->

    <!--[start:modal player]-->
    <div class="modal fade" id="form-property" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe src="https://sub.fintos.com.my/calculator/mortgage_loan"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--[end: modal player]-->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>
