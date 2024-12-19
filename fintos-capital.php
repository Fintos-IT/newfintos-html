<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fintos Capital</title>
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

    <cms:editable name='fintos-capital' label='Fintos Capital Page' type='richtext'>
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
        <div class="mainhero align-items-end mainhero--heroheight bggreen">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="tagline d-flex justify-content-center align-items-start flex-column">
                            <img src="https://fintos.com.my/assets/images/FINTOSCapital-hero-logo.png" alt="fintos capital"/>
                            <h1 class="heading fw-bold text-white">Financial Growth <br>Made For You</h1>
                            <h2 class="subheading text-white">Tailored Financial Solutions to Regain Stability and <br>Achieve Your Goals</h2>
                            <!-- disabled due to enhancment to release it in 19/6/2024 -->
                            <!-- <a href="#" data-modal='prescreening' class="open-modal btn btn-secondary btn-lg--hero open-modal" data-modal="prescreening">Pre-Screening Your Loan Eligibility</a> -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                        <div class="hero-thumb position-relative text-center h-100">
                            <div class="thumb-first h-100" data-aos="fade-up" data-aos-delay="200">
                                <img src="https://fintos.com.my/assets/images/thumb-fintosfinance-hero.png" alt="Fintos Capital" class="img-fluid"  />
                            </div>
                            <div class="thumb-second h-100" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                <img src="https://fintos.com.my/assets/images/greendot-bg.png" alt="dot" class="img-fluid"  />
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brandpartner mb-5 pb-lg-5 pt-2"><!--[start:brandparner]-->
            <div class="container pb-2 mb-1 pt-1">
                <div class="row text-center">
                    <h5 class="fw-normal heading-logo">Our Service Partners</h5>
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
        <div class="container"><!--[start: How can help]-->
            <div class="row">
                <div class="sectionheading mb-4">
                    <h2 class="heading fw-bold text-center mb-3">How Can We Help</h2>
                </div>
                <div class="col-md-12">
                <div class="row d-flex align-items-stretch wrapper--card-thumbnail-color">
                    <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="card card--thumbcolor bg-white border-0 p-4">
                            <div class="card-thumb bglightgreen" data-aos="fade-up"><img src="https://fintos.com.my/assets/images/finance-icon1.png" alt="" class="img-fluid"  /></div>
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Mortgage Refinance</h5>
                                <p>Seeking better terms and rates? Our specialized team simplifies mortgage refinancing, offering personalized guidance at every step.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="card card--thumbcolor bg-white border-0 p-4">
                            <div class="card-thumb bglightgreen" data-aos="fade-up" data-aos-delay="200"><img src="https://fintos.com.my/assets/images/finance-icon2.png" alt="" class="img-fluid"  /></div>
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Debt Consolidation</h5>
                                <p>Consolidate multiple debts into one manageable loan. Reduce rates, simplify payments, regain financial control.</p>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="card card--thumbcolor bg-white border-0 p-4">
                            <div class="card-thumb bglightgreen" data-aos="fade-up" data-aos-delay="400"><img src="https://fintos.com.my/assets/images/finance-icon3.png" alt="" class="img-fluid"  /></div>
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Personal Loan</h5>
                                <p>Whether it's for a major purchase or unexpected expenses, we’re here to achieve your financial goals with our flexible loan options.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5 mb-4">
                        <div class="card card--thumbcolor bg-white border-0 p-4">
                            <div class="card-thumb bglightgreen" data-aos="fade-up" data-aos-delay="600"><img src="https://fintos.com.my/assets/images/finance-icon3.png" alt="" class="img-fluid"  /></div>
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Default Mortgage Loan</h5>
                                <p>Struggling with mortgage payments?<br/>
                                    We provide options to manage defaults and avoid foreclosure. Regain control of your mortgage today.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7 mb-4">
                        <div class="card card--thumbcolor bg-white border-0 p-4">
                            <div class="card-thumb bglightgreen" data-aos="fade-up" data-aos-delay="800"><img src="https://fintos.com.my/assets/images/finance-icon4.png" alt="" class="img-fluid"  /></div>
                            <div class="card-body">
                                <h5 class="card-title fw-semibold">Property Financing (5 years and above)</h5>
                                <p>Unlock property ownership or investment opportunities with our tailored financing solutions. Long-term stability, growth potential.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>,
        </div><!--[end: How can help]-->

        <div class="plan"><!--[start: plan]-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="sectionheading">
                            <h2 class="heading fw-bold">We Offer Flexible Repayment Plan</h2>
                            <p>Discover a range of plans tailored to your needs. <br>Here's our sample repayment guide within estimated range.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="plantable bglightgreen">
                            <div class="row justify-content-center">
                                <div class="col-sm-12 col-md-3 p-0 d-none d-lg-block">
                                    <div class="labelplan d-flex align-items-center">&nbsp;</div>
                                    <div class="titleplan d-flex align-items-center">
                                        <img src="https://fintos.com.my/assets/images/plan-icon1.png" alt="" class="img-fluid">
                                        <span>Loan Amount</span>
                                    </div>
                                    <div class="titleplan d-flex align-items-center">
                                        <img src="https://fintos.com.my/assets/images/plan-icon2.png" alt="" class="img-fluid">
                                        <span>Tenure</span>
                                    </div>
                                    <div class="titleplan d-flex align-items-center">
                                        <img src="https://fintos.com.my/assets/images/plan-icon3.png" alt="" class="img-fluid">
                                        <span>Loan Term</span>
                                    </div>
                                    <div class="titleplan d-flex align-items-center">
                                        <img src="https://fintos.com.my/assets/images/plan-icon4.png" alt="" class="img-fluid">
                                        <span>Instalment</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 p-0">
                                    <div class="labelplan d-flex align-items-center justify-content-center gap-1"><span class="bggreen rounded text-white">Secured Lending</span></div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center price gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon1.png" alt="" class="img-fluid">
                                            <span>Loan Amount</span>
                                        </div>
                                        <div>RM 100,000.00</div>
                                    </div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon2.png" alt="" class="img-fluid">
                                            <span>Tenure</span>
                                        </div>
                                        <div>
                                            <span>7 </span> <small>years</small>
                                        </div>
                                    </div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon3.png" alt="" class="img-fluid">
                                            <span>Loan Term</span>
                                        </div>
                                        <div>
                                            <span>12%</span> <small>p.a</small>
                                        </div>
                                    </div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon4.png" alt="" class="img-fluid">
                                            <span>Instalment</span>
                                        </div>
                                        <div>
                                            <span>RM2190.48</span> <small>/month</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 p-0">
                                    <div class="labelplan d-flex flex-wrap align-items-center justify-content-center gap-1"><span class="bgwhite rounded">Unsecured Lending</span></div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center price gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon1.png" alt="" class="img-fluid">
                                            <span>Loan Amount</span>
                                        </div>
                                        <div>RM 100,000.00</div>
                                    </div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon2.png" alt="" class="img-fluid">
                                            <span>Tenure</span>
                                        </div>
                                        <div>
                                            <span>5</span>  <small>years</small> 
                                        </div>
                                    </div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon3.png" alt="" class="img-fluid">
                                            <span>Loan Term</span>
                                        </div>
                                        <div>
                                            <span>18%</span> <small>p.a</small>
                                        </div>
                                    </div>
                                    <div class="entryplan d-flex flex-wrap align-items-center justify-content-center gap-1">
                                        <div class="titleplan d-block d-md-none">
                                            <img src="https://fintos.com.my/assets/images/plan-icon4.png" alt="" class="img-fluid">
                                            <span>Instalment</span>
                                        </div>
                                        <div>
                                            <span>RM3166.67</span> <small>/month</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end: plan]-->


        <div class="cta cta--fullbg bggreen my-5"><!--[start:cta]-->
            <div class="container py-5">
                <div class="row d-flex align-items-center py-4 my-1">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                    <img src="https://fintos.com.my/assets/images/concerned-thumb.png" data-aos="fade-up" data-aos-delay="200" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="sectionheading h-100 d-flex flex-column align-items-start wrapper-finance-copy">
                            <h2 class="heading text-white">Concerned About <br/>Eligibility?</h2><br>
                            <p class="text-white"> Even if you're “<b>blacklisted</b>” or <b>have bad credit score</b>,<br> 
                                Don't worry, we're here to help. </p>
                                
                            <p class="text-white"> We offer loans to individuals from all profession backgrounds, <br/>so you can apply with confidence.</p>
                            <!-- disabled due to enhancment to release it in 19/6/2024 -->
                            <!-- <a href="#" class="btn btn-secondary btn-lg--large fw-semibold">Pre-Screening Your Loan Eligibility</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end:cta]--->

        <div class="whyus pt-1"><!--[start: whyus]-->
            <div class="container">
                <div class="row">
                    <div class="sectionheading my-5 text-center">
                        <h2 class="heading">Why Choose us</h2>
                    </div>  
                    <div class="col-md-4 icon-container pb-5">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute" data-aos="fade-up" data-aos-delay="200">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-icon1.png" alt="Experienced Team" />
                                </div>
                                <div class="thumb-second" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-shape-icon1.png" alt="Experienced Team" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <h5 class="card-title fw-bold mb-3">Experienced Team</h5>
                                <p class="card-text">Our team consists of bankers and financial planners ensures efficient loan processing with expertise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 icon-container pb-5">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute" data-aos="fade-up" data-aos-delay="400">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-icon2.png" alt="Higher Approval Rate" />
                                </div>
                                <div class="thumb-second" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-shape-icon2.png" alt="Higher Approval Rate" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">Higher Approval Rate</h5>
                            <p class="card-text">We assist individuals facing various financial challenges, striving to find solutions for all.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 icon-container pb-5">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute" data-aos="fade-up" data-aos-delay="600">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-icon3.png" alt="No Upfront Charges" />
                                </div>
                                <div class="thumb-second" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-shape-icon3.png" alt="No Upfront Charges" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">No Upfront Charges</h5>
                            <p class="card-text">We prioritize transparency, charging no upfront fees to ensure clarity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 icon-container pb-5">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute" data-aos="fade-up" data-aos-delay="800">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-icon4.png" alt="Flexible Repayment Period" />
                                </div>
                                <div class="thumb-second" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-shape-icon4.png" alt="Flexible Repayment Period" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">Flexible Repayment Period</h5>
                            <p class="card-text">Experience flexibility with our loan packages, including up to 9-month moratorium options.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 icon-container pb-5">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute" data-aos="fade-up" data-aos-delay="800">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-icon5.png" alt="Confidentiality Assured" />
                                </div>
                                <div class="thumb-second" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-shape-icon5.png" alt="Confidentiality Assured" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">Confidentiality Assured</h5>
                            <p class="card-text">Your information is protected under the Personal Data Protection Act (PDPA) 2010.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 icon-container pb-5">
                        <div class="card border-0">
                            <div class="card-thumb">
                                <div class="thumb-first z-1 position-absolute" data-aos="fade-up" data-aos-delay="1000">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-icon6.png" alt="Safe and Secure" />
                                </div>
                                <div class="thumb-second" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                    <img src="https://fintos.com.my/assets/images/fintos-finance-wyu-shape-icon6.png" alt="Safe and Secure" />
                                </div>
                            </div>
                            <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-3">Safe and Secure</h5>
                            <p class="card-text">Your financial data and transactions are safeguarded, ensuring your peace of mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end: whyus]-->
        
        <div class="ourteam"><!--[start: ourteam]-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="sectionheading pt-1 mt-5 mb-4 pb-3 text-center">
                        <h2 class="heading mb-0">Founder's Message</h2>
                    </div> 
                    <div class="col-sm-12 col-md-12 col-lg-4 mb-2">
                    <div class="card bg-transparent card--team border-0 d-flex flex-row">
                            <div class="card-thumb mb-3"><img src="https://fintos.com.my/assets/images/team-1.png" alt="thumbnail" class="img-fluid rounded-3" /></div>
                        </div> 
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8 my-4">
                    <div class="card bg-transparent card--team border-0 d-flex flex-row ps-lg-5">
                            
                            <div class="card-body p-0 d-flex flex-column align-items-start">
                                <p class="card-text">To our respected partners and friends across all sectors,
                                </p>
                                <p class="card-text">
                                    At FINTOS Capital, our mission goes beyond personal loans. We empower individuals facing economic challenges to regain financial freedom through tailored programs. By guiding them towards self-management, we contribute to personal well-being and economic development.
                                </p>
                                <p class="card-text">
                                    We also aim to positively impact social ESG (Environmental, Social, and Governance) objectives, fostering a fairer economic environment and building a more prosperous society.
                                </p>
                                <p class="card-text">
                                    We look forward to working together with you in relentless pursuit of this noble goal.
                                </p>
                                <p class="card-text">
                                    Sincerely,<br><b>Johnson Au</b>
                                </p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div><!--[start: ourteam]-->
        
        <div class="aboutus pt-5"><!--[start:aboutus]-->
            <div class="container">
                <div class="row text-center">
                    <div class="sectionheading my-5 text-center pb-3 mb-5">
                        <h2 class="heading">Take Charge on Your Own Financial Journey</h2>
                    </div> 
                    <div class="col-sm-12 col-md-12 col-lg-6 pe-xl-5 pt-lg-5">
                        <div class="tagline text-start align-items-start d-flex flex-column me-0 me-xl-4 pe-0 pe-xl-4">
                            <h5 class="fw-semibold">About FINTOS Capital</h5>
                            <img src="https://fintos.com.my/assets/images/fintos-finance-invinity.png" alt="fintos advice"  />
                            <p class="pe-3"><b>Invinity Credit Sdn Bhd</b>, operating under <b>FINTOS Capital</b>, is a licensed credit financing company that provides personalized financial solutions, specializing in secured and unsecured loans for individuals rejected by traditional banks. <p>
                            </p>Our advanced risk analysis tools enable tailored loan solutions, addressing urgent debts and facilitating access to home loans even when traditional financing options are limited.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        
                        <div class="videowrap position-relative">
                            <a href="https://www.facebook.com/watch/?v=459072736393261&ref=sharing&share_url=https%3A%2F%2Ffb.watch%2FsHndVuM29S%2F" class="btn-play" target="_blank"><img src="https://fintos.com.my/assets/images/icon-play.png" alt="video" /></a>
                            <img src="https://fintos.com.my/assets/images/thumbvideo-advice-1.png" alt="video" />
                        </div>
                    </div>
                </div>
                <div class="row mt-lg-5 pt-lg-3 gallery-fin">
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/video-thumbnail-finance2.png" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/video-thumbnail-finance3.png" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/video-thumbnail-finance4.png" alt="thumbnail" /></div>
                </div>
            </div>
        </div><!--[end:aboutus]-->
        
        <!--[start: faq]-->
        <div class="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="sectionheading text-center">
                        <h2 class="heading">Frequently Ask Questions</h2>
                    </div>
                    <div class="col-12 col-md-8 justify-content-center pt-md-2 pt-xl-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                    <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="row w-100 justify-content-between">
                                            <div class="col-11">
                                                What is the expected timeframe for processing applications?
                                            </div>
                                            <div class="col-1 text-end">
                                                <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        If all required documents are received and your personal details can be verified, approval can be completed in as quickly as 24 hours. However, if any documents are incomplete, the processing time may be extended.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            Is it possible to apply for a loan even if my previous applications have been declined by banks?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, we evaluate each application individually based on its merits, and our credit loan is structured to assist applicants in consolidating their debts according to Invinity's internal credit standards.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            Are there any legal expenses associated with the credit loan?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, there is a standard ad valorem stamp duty of 0.5% on the approved loan amount, as well as reasonable professional legal fees.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            How can I check the status of my application?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We will update through your registered mobile phone number regarding your application status. Alternatively, applicants can also check with us directly for updates.We will update through your registered mobile phone number regarding your application status. Alternatively, applicants can also check with us directly for updates.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            What are the shortest and longest loan terms available?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The loan tenure ranges from a minimum of 1 year to a maximum of 5 years.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            Can I submit an application despite having records with AKPK, SAA, CTOS, or CCRIS issues?
                                        </div> 
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Each application is evaluated based on its individual merits, and we will approve it if it meets our criteria.
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
                            <img src="https://fintos.com.my/assets/images/finance-cta.png" alt="thumbnail" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="sectionheading h-100 d-flex flex-column align-items-start pe-lg-5">
                            <h2 class="heading">Ready to Unlock Your<br/> Financial Potential With Us?</h2>
                            <p>Take the first step towards achieving your financial goals from our experienced team.</p>
                            <!-- disabled due to enhancment to release it in 19/6/2024 -->
                            <!-- <a href="#" class="btn btn-primary btn-lg fw-semibold open-modal" data-modal="prescreening">Pre-Screening Your Loan Eligibility</a> -->
                            <div class="text-end">
                                <div class="phone-cta py-0 mb-1">
                                    <img src="https://fintos.com.my/assets/images/phone.png" alt="phone"/>
                                    Contact us at: 03-8080 9777 (#3003)
                                </div>
                                <a class="text-decoration-none" style="color: #212529;" href="mailto:enquiryfintoscapital@fintos.com.my">enquiryfintoscapital@fintos.com.my</a>
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
                            <iframe src="https://m.facebook.com/video/video.php?v=459072736393261" allowfullscreen></iframe>
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
