<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career</title>
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

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '568868678799385');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=568868678799385&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL6WGB64"
              height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <cms:editable name='career' label='Career Page' type='richtext'>
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
                                                <a href="fintos-tech-a" class="fw-semibold">
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
                                <a class="nav-link px-0 px-lg-2" href="about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 px-lg-2" href="contact">Contact</a>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!--[end: site-header]-->
        <div class="pageheader pageheader--extrafull bglightyellow align-items-center pt-5">
            <div class="container pt-3 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline d-flex justify-content-center align-items-center text-center flex-column animate__animated animate__fadeIn">
                            <span class="title fw-normal w-100 mb-2">Be part of Fintosian</span>
                            <h1 class="heading fw-bold mb-4 pb-1">Let's Build Your Future with Us</h1>
                            <a href="#openposition" class="btn btn-primary btn-lg fw-semibold">View Open Positions</a>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="img-section">
            <div class="container">
                <div class="row mt-5 gallery-career">
                    <div class="img-container mb-4 pb-2" data-aos="fade-up"><img src="https://fintos.com.my/assets/images/gallery-1.jpg" alt="thumbnail" class="img-fluid rounded-4"/></div>
                    <div class="img-container mb-4 pb-2" data-aos="fade-up" data-aos-delay="200"><img src="https://fintos.com.my/assets/images/gallery-2.jpg" alt="thumbnail" class="img-fluid rounded-4"/></div>
                    <div class="img-container mb-4 pb-2" data-aos="fade-up" data-aos-delay="400"><img src="https://fintos.com.my/assets/images/gallery-4.jpg" alt="thumbnail" class="img-fluid rounded-4"/></div>
                    <div class="img-container mb-4 pb-2" data-aos="fade-up" data-aos-delay="600"><img src="https://fintos.com.my/assets/images/gallery-5.jpg" alt="thumbnail" class="img-fluid rounded-4"/></div>
                    <!-- <div class="img-container mb-4 pb-2" data-aos="fade-up" data-aos-delay="800"><img src="https://fintos.com.my/assets/images/gallery-3.jpg" alt="thumbnail" class="img-fluid rounded-4"/></div> -->
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center justify-content-center pb-2 mb-5">
                <div class="col-md-8">
                    <h2 class="display-5 fw-bold pt-3 mb-2 pb-1">Life At Fintos</h2>
                    <p class="pb-5 mb-5">At Fintos, we thrive on innovation and collaboration. Our team is dedicated to creating advanced financial solutions that empower individuals and businesses. We foster an inclusive culture, promote professional growth, and maintain a healthy work-life balance. Join us to make a real impact in the world of financial technology and help people achieve financial stability and freedom.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-12 col-lg-4 mb-3 mb-lg-0 pe-lg-5">
                    <h2 class="display-5 fw-bold mb-2 pb-1">Why Join Us? </h2>
                    <p>Your personal and professional growth matters to us</p>
                </div>
                <div class="col-md-12 col-lg-8 square-join">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0 bglightyellow rounded-4 mb-4">
                                <div class="card-body d-flex flex-column justify-content-center p-4">
                                    <div lass="icon-container" data-aos="fade-up"><img src="https://fintos.com.my/assets/images/calendar-day.png" alt="join us icon"/></div>
                                    <h5 class="card-title fw-semibold mt-3 mb-1">Plenty of Leave Days</h5>
                                    <p class="card-text">Provide more generous leave days. We have more than 4 other types of leave!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 bglightyellow rounded-4 mb-4">
                                <div class="card-body d-flex flex-column justify-content-center p-4">
                                    <div lass="icon-container" data-aos="fade-up" data-aos-delay="200"><img src="https://fintos.com.my/assets/images/book-open-cover.png" alt="join us icon"/></div>
                                    <h5 class="card-title fw-semibold mt-3 mb-1">Career Development</h5>
                                    <p class="card-text">Ongoing training and education opportunities to enhance career growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0 bglightyellow rounded-4 mb-4">
                                <div class="card-body d-flex flex-column justify-content-center p-4">
                                    <div lass="icon-container" data-aos="fade-up" data-aos-delay="400"><img src="https://fintos.com.my/assets/images/suitcase-medical.png" alt="join us icon"/></div>
                                    <h5 class="card-title fw-semibold mt-3 mb-1">Health and Wellness</h5>
                                    <p class="card-text">Out-patient care and in-patient care are covered for all employee.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 bglightyellow rounded-4 mb-4">
                                <div class="card-body d-flex flex-column justify-content-center p-4">
                                    <div lass="icon-container" data-aos="fade-up" data-aos-delay="600"><img src="https://fintos.com.my/assets/images/tags.png" alt="join us icon"/></div>
                                    <h5 class="card-title fw-semibold mt-3 mb-1">Employee Discount</h5>
                                    <p class="card-text">Establishment of corporate benefits to offer exclusive discounts to each employee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container thumbgallery-carreer">
            <div class="row my-5">
                <div class="col-md-4"><img src="https://fintos.com.my/assets/images/career-img-1.jpg" alt="thumbnail" class="thumbimg img-fluid" /></div>
                <div class="col-md-4">
                    <div class="videowrap position-relative">
                        <a href="#" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoplayer"><img src="https://fintos.com.my/assets/images/icon-play.png" alt="video" /></a>
                        <img src="https://fintos.com.my/assets/images/career-img-2.jpg" alt="thumbnail" class="thumbimg img-fluid" />
                    </div>
                </div>
                <div class="col-md-4 "><img src="https://fintos.com.my/assets/images/career-img-3.jpg" alt="thumbnail" class="thumbimg img-fluid" /></div>
            </div>
        </div>
        <div id="openposition" class="openposition pb-5 mb-5"><!--[start: openposition]-->
            <div class="container">
                <div class="row pb-4 mb-5">
                    <div class="sectionheading mt-5 text-center">
                        <h2 class="heading">Open Positions</h2>
                    </div> 
                    <div class="container pt-1 mt-4">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs justify-content-center mb-4 border-0 gap-3 gap-md-3 gap-lg-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 rounded-5 active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 rounded-5" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance" type="button" role="tab" aria-controls="finance" aria-selected="false">Finance</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 rounded-5" id="operations-tab" data-bs-toggle="tab" data-bs-target="#operations" type="button" role="tab" aria-controls="operations" aria-selected="false">Operations</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 rounded-5" id="technology-tab" data-bs-toggle="tab" data-bs-target="#technology" type="button" role="tab" aria-controls="technology" aria-selected="false">Technology</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 rounded-5" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales" type="button" role="tab" aria-controls="sales" aria-selected="false">Sales</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 rounded-5" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">Marketing</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 rounded-5" id="product-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false">Product</button>
                            </li>
                        </ul>
                    
                        <!-- Tab panes -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row">
                                <div class="col-md-6 col-lg-4 my-3 px-3">
                                    <div class="card card--position border-0 p-4">
                                        <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                            <div>
                                                <h5 class="card-title text-start">Group Financial Controller</h5>
                                                <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                    <li>Finance</li>
                                                    <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                    <li>Full time</li>
                                                </ul>
                                            </div> 
                                            <a href="career-detail-gfc.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 my-3 px-3">
                                    <div class="card card--position border-0 p-4">
                                        <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                            <div>
                                                <h5 class="card-title text-start">Intern - Business IT                                            </h5>
                                                <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                    <li>Technology</li>
                                                    <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                    <li>Internship</li>
                                                </ul>
                                            </div> 
                                            <a href="career-detail-ibit.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 my-3 px-3">
                                    <div class="card card--position border-0 p-4">
                                        <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                            <div>
                                                <h5 class="card-title text-start">Group Operation Manager </h5>
                                                <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                    <li>Operations</li>
                                                    <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                    <li>Full time</li>
                                                </ul>
                                            </div> 
                                            <a href="career-detail-gom.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 my-3 px-3">
                                    <div class="card card--position border-0 p-4">
                                        <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                            <div>
                                                <h5 class="card-title text-start">Group Legal & Compliance Manager</h5>
                                                <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                    <li>Legal</li>
                                                    <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                    <li>Full time</li>
                                                </ul>
                                            </div> 
                                            <a href="career-detail-glacm.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 my-3 px-3">
                                    <div class="card card--position border-0 p-4">
                                        <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                            <div>
                                                <h5 class="card-title text-start">Business Development Executive</h5>
                                                <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                    <li>Sales & Operations</li>
                                                    <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                    <li>Full time</li>
                                                </ul>
                                            </div> 
                                            <a href="career-detail-bde.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 my-3 px-3">
                                    <div class="card card--position border-0 p-4">
                                        <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                            <div>
                                                <h5 class="card-title text-start">Sales Admin Executive</h5>
                                                <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                    <li>Sales & Operations</li>
                                                    <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                    <li>Full time</li>
                                                </ul>
                                            </div> 
                                            <a href="career-detail-sae.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 my-3 px-3">
                                    <div class="card card--position border-0 p-4">
                                        <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                            <div>
                                                <h5 class="card-title text-start">Mortgage Specialist</h5>
                                                <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                    <li>Finance</li>
                                                    <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                    <li>Full time</li>
                                                </ul>
                                            </div> 
                                            <a href="career-detail-ms.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Group Financial Controller</h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Finance</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Full time</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-gfc.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Mortgage Specialist</h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Finance</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Full time</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-ms.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="operations" role="tabpanel" aria-labelledby="operations-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Group Operation Manager </h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Operations</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Full time</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-gom.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Business Development Executive</h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Sales & Operations</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Full time</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-bde.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Sales Admin Executive</h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Sales & Operations</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Full time</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-sae.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="technology" role="tabpanel" aria-labelledby="technology-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Intern - Business IT</h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Technology</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Internship</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-ibit.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Business Development Executive</h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Sales & Operations</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Full time</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-bde.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 my-3 px-3">
                                        <div class="card card--position border-0 p-4">
                                            <div class="card-body p-0 d-flex flex-column align-items-stretch justify-content-between">
                                                <div>
                                                    <h5 class="card-title text-start">Sales Admin Executive</h5>
                                                    <ul class="list-unstyled d-flex flex-row gap-2 text-start">
                                                        <li>Sales & Operations</li>
                                                        <img src="https://fintos.com.my/assets/images/bullets.svg" alt="bullets"/>
                                                        <li>Full time</li>
                                                    </ul>
                                                </div> 
                                                <a href="career-detail-sae.php" class="p-0 text-end"><img src="https://fintos.com.my/assets/images/arrow.png" alt="view more" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                                <div class="row">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div><!--[end: openposition]-->
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
                            <li><a href="fintos-tech-a">Fintos Tech</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-3">
                        <h3 class="fw-semibold">Company</h3>
                        <ul class="list-unstyled d-flex flex-column">
                            <li><a href="about">About</a></li>
                            <li><a href="career">Career</a></li>
                            <li><a href="contact">Contact</a></li>
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
                            <li><a href="privacy-policy">Privacy Policy</a></li>
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
                                <iframe src="https://fintos.com.my/assets/videos/Video3Bella.mp4" allowfullscreen sandbox></iframe>
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
