<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fintos Advice</title>
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

    <cms:editable name='fintos-advice' label='Fintos Advice Page' type='richtext'>
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
        <div class="mainhero align-items-end mainhero--heroheight bgred">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                        <div class="tagline d-flex justify-content-center align-items-start flex-column">
                            <img src="https://fintos.com.my/assets/images/FINTOSAdvice-hero-logo.png" alt="fintos advice"/>
                            <h1 class="heading fw-bold text-white">Empowering <br>Financial Future</h1>
                            <h2 class="subheading text-white">Make smarter decisions with our predictive tools and expert advice tailored to your financial goals.</h2>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#form-contact" class="open-modal btn btn-secondary btn-lg--hero">Schedule a Free Consultation</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 position-relative">
                        <div class="hero-thumb position-relative text-center h-100">
                            <div class="thumb-first h-100" data-aos="fade-up" data-aos-delay="200">
                                <img src="https://fintos.com.my/assets/images/thumb-fintosadvice-hero.png" alt="fintos advice" class="img-fluid"  />
                            </div>
                            <div class="thumb-second h-100" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="5000">
                                <img src="https://fintos.com.my/assets/images/reddot-bg.png" alt="dot" class="img-fluid"  />
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brandpartner "><!--[start:brandparner]-->
            <div class="container">
                <div class="row text-center pb-5">
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

        <div class="container mt-5 mb-5">
            <div class="row justify-content-between">
                <div class="col-md-12 col-lg-6 c-pr-130">
                    <h2 class="display-5 fw-bold">Solutions For Every Step Of Your Journey</h2>
                    <p>Our mission is to establish financial wellness, predicting future trends, and guiding smart loan decisions for community prosperity.</p>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card--solution border-0 bglightred p-4 mb-4">
                                <div class="card-thumb mb-2" data-aos="fade-up"><img src="https://fintos.com.my/assets/images/innovative-icon.png" alt="Innovative Financial Technology Solutions " class="img-fluid"  /></div>
                                <div class="card-text">Innovative Financial Technology Solutions </div>
                            </div>
                            <div class="card card--solution border-0 bglightred p-4 mb-4">
                                <div class="card-thumb mb-2" data-aos="fade-up" data-aos-delay="600"><img src="https://fintos.com.my/assets/images/user-tie-red.png" alt="Innovative Financial Technology Solutions " class="img-fluid"  /></div>
                                <div class="card-text">Professional Consulting Services</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card--solution border-0 bglightred p-4 mb-4">
                                <div class="card-thumb mb-2" data-aos="fade-up" data-aos-delay="400"><img src="https://fintos.com.my/assets/images/hands-holding-dollar-red.png" alt="Innovative Financial Technology Solutions " class="img-fluid"  /></div>
                                <div class="card-text">Diverse Loan & Financing Options</div>
                            </div>
                            <div class="card card--solution border-0 bglightred p-4">
                                <div class="card-thumb mb-2" data-aos="fade-up" data-aos-delay="800"><img src="https://fintos.com.my/assets/images/book-open-cover-red.png" alt="Innovative Financial Technology Solutions " class="img-fluid"  /></div>
                                <div class="card-text">Education for better financial well-being & future</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container pt-5 mt-5"><!--[start: ourservice]-->
            <div class="row">
                <div class="sectionheading mb-5">
                    <h2 class="heading text-center">Discover Our Financial Services</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 mb-4">
                    <div class="card card--thumbcolor bg-white border-0 p-4">
                        <div class="card-thumb bglightred" data-aos="fade-up"><img src="https://fintos.com.my/assets/images/real_estate_agent_red.png" alt="" class="img-fluid"  /></div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Mortgage Solution</h5>
                            <p>Need help securing your dream home? <br/>
                            Let us lighten the load, so you can enjoy financial security with a home of your own.</p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-12 col-md-12 col-lg-7 mb-4">
                    <div class="card card--thumbcolor bg-white border-0 p-4">
                        <div class="card-thumb bglightred" data-aos="fade-up" data-aos-delay="200"><img src="https://fintos.com.my/assets/images/currency_exchange_red.png" alt="" class="img-fluid"  /></div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Mortgage Refinance Application</h5>
                            <p>Seeking better terms and rates? Our dedicated team specializes in simplifying the mortgage refinancing process, ensuring that you receive personalized guidance and support every step of the way. </p>
                        </div>
                    </div>
                </div>  
                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="card card--thumbcolor bg-white border-0 p-4">
                        <div class="card-thumb bglightred" data-aos="fade-up" data-aos-delay="400"><img src="https://fintos.com.my/assets/images/flowsheet_red.png" alt="" class="img-fluid"  /></div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Debt Restructuring Program</h5>
                            <p>Struggling with debt? Our tailored solutions pave the way to effective debt management and financial freedom.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="card card--thumbcolor bg-white border-0 p-4">
                        <div class="card-thumb bglightred" data-aos="fade-up" data-aos-delay="600"><img src="https://fintos.com.my/assets/images/admin_panel_settings_red.png" alt="" class="img-fluid"  /></div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Insurance</h5>
                            <p>Protect your assets and loved ones with our insurance solutions such as Mortgage Level Term Assurance (MLTA).</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-4">
                    <div class="card card--thumbcolor bg-white border-0 p-4">
                        <div class="card-thumb bglightred" data-aos="fade-up" data-aos-delay="800"><img src="https://fintos.com.my/assets/images/psychiatry_red.png" alt="" class="img-fluid"  /></div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Property Investment</h5>
                            <p>Explore real estate opportunities with expert guidance for informed decisions and maximum returns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[end: our service]-->

        <div class="ourteam"><!--[start: ourteam]-->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="sectionheading my-5 text-center">
                        <h2 class="heading">Meet Our Expertise</h2>
                    </div> 
                    <div class="col-sm-12 col-md-12 col-lg-8 mb-5">
                        <div class="bglightyellow wrapper--team-colour">
                            <div class="card bg-transparent card--team border-0 d-flex flex-lg-row row rounded-3">
                                <div class="col-lg-5">
                                    <div class="card-thumb thumb-stretch mb-4 mb-lg-0 text-center">
                                        <img src="https://fintos.com.my/assets/images/advice-expertise-1.png" alt="thumbnail" class="w-100 img-fluid rounded-3" />
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body card-copy-right d-flex flex-column align-items-start">
                                        <div class="card-title mb-4">
                                            <h5 class="d-flex flex-col gap-3 align-items-center">Ruby Lim <a href="#"><img src="https://fintos.com.my/assets/images/linkedin.png" alt="link"/></a></h5>
                                            <span class="occupation align-self ps-0">Founder & Certified Financial Coach</span>
                                        </div>
                                        <div class="card-text d-flex flex-column">
                                            <p>Being a graduate from the Yongiway Business Master program with a decade of industry experience, Ruby has aided over 5000 clients in credit card restructuring, offering personalized guidance and solutions regain control of their finances since 2009.</p>
                                            <p>Her professional approach considers each client's unique circumstances, making her a trusted advisor for those seeking financial freedom and well-being.</p>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="bglightyellow wrapper--team-colour">
                            <div class="card bg-transparent card--team border-0 d-flex flex-lg-row-reverse rounded-3">
                                <div class="col-lg-5">
                                    <div class="card-thumb thumb-stretch mb-4 mb-lg-0 text-center">
                                        <img src="https://fintos.com.my/assets/images/advice-expertise-2.png" alt="thumbnail" class="w-100 img-fluid rounded-3" />
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body card-copy-left d-flex flex-column align-items-start">
                                        <div class="card-title mb-4">
                                            <h5 class="d-flex flex-col gap-3 align-items-center">Wong Jong Hua<a href="#"><img src="https://fintos.com.my/assets/images/linkedin.png" alt="link"/></a></h5>
                                            <span class="align-self ps-0">Co-Founder & Certified Financial Coach</span>
                                        </div>
                                        <div class="card-text d-flex flex-column">
                                            <p>Wong's expertise is accredited by The International Professional Managers Association (IPMA) in the U.K., with 15 years of experience in the banking industry, focusing on loan, credit, and risk management. </p>
                                            <p>His career spans prestigious institutions such as Citibank, RHB Bank, Standard Chartered Bank, and Alliance Bank, providing him with a deep understanding of financial services, making him a trusted advisor in the field.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--[start: ourteam]-->
        
        <div class="aboutus pt-5"><!--[start:aboutus]-->
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 pb-5"><hr/></div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="tagline text-start align-items-start d-flex flex-column pe-lg-5">
                            <h5 class="fw-semibold">What Our Client Said? </h5>
                            <img src="https://fintos.com.my/assets/images/meet-FINTOSAdvice-logo.png" alt="fintos advice"  />
                            <p class="pe-3">We offer diverse financing options to empower individuals in making informed financial decisions. Our professional consulting services enhance financial well-being and shape a sustainable future for all.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <video class="embed-responsive-item w-100" controls>
                            <source src="https://fintos.com.my/assets/videos/testimonialvideoadvice.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <!-- <div class="row mt-lg-5 pt-lg-3 gallery-fin">
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/thumb-about-4.png" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/thumb-about-5.png" alt="thumbnail" /></div>
                    <div class="col-md-4 img-container"><img src="https://fintos.com.my/assets/images/thumb-about-6.png" alt="thumbnail" /></div>
                </div> -->
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
                                                What sets FINTOS Advice Consultancy differently from other financial advisory firms?
                                            </div>
                                            <div class="col-1 text-end">
                                                <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FINTOS Advice Consultancy distinguishes itself through a personalized approach, offering a comprehensive range of services paired with a steadfast commitment to our clients. We specialize in tailoring advice to perfectly fit each client's unique financial situation and goals.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            How can FINTOS financial planning benefit me?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FINTOS financial planning benefits you by providing personalized, comprehensive services tailored to your unique financial goals, offering expert guidance to navigate complex decisions and achieve peace of mind.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            If I don't have debt issues, can I still seek FINTOS advisory services?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, FINTOS offers a wide range of financial advisory services, including property investment, loan consultancy, and insurance coverage.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            How can I be sure FINTOS is providing a proper advisory work?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FINTOS employs certified financial advisors and coaches, adheres to regulatory standards, and provides transparent, personalized advice based on comprehensive financial assessments.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            What are the FINTOS advisory fees and charges?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our fees and charges vary depending on the services provided. We offer a free initial consultation, after which detailed fee structures will be explained based on your needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            How do you trust and ensure the confidentiality of my financial information and financial matters?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        FINTOS Advice Consultancy is committed to transparency, confidentiality, and ethical practices. Our advisors are certified professionals with a proven track record of helping clients achieve financial stability and growth. We follow strict confidentiality policies and use advanced security measures to protect your financial information. Your data is handled with the utmost care and privacy.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header bg-transparent">
                                <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-11">
                                            If I have a bad credit profile, can FINTOS still assist me?
                                        </div>
                                        <div class="col-1 text-end">
                                            <img class="icon-caret" src="https://fintos.com.my/assets/images/caret-down.png" />
                                        </div>
                                    </div>
                                </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, FINTOS specializes in assisting individuals with complex financial situations. Our experienced advisors will work closely with you to create a customized debt restructuring plan to improve your financial health.
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
                            <img src="https://fintos.com.my/assets/images/advice-cta.png" alt="thumbnail" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="sectionheading h-100 d-flex flex-column align-items-start pe-lg-5">
                            <h2 class="heading">Want to Explore Your Path <br/>to Financial Freedom?</h2>
                            <p>Let us assist you in making informed financial decisions to secure your future.</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#form-contact" class="open-modal btn btn-primary btn-lg fw-semibold">Schedule a Free Consultation</a>
                            <div class="phone-cta">
                                <img src="https://fintos.com.my/assets/images/phone.png" alt="phone"/>
                                Contact us at: 03-8080 9777 (#10052)
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
                            <video class="embed-responsive-item" controls>
                                <source src="https://fintos.com.my/assets/videos/testimonialvideoadvice.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="form-contact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfDNqtIpuJ20_Z9oni1807cwOlSkKnvPr_UKrun6h4rjzgiKw/viewform?embedded=true" width="640" height="1107" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
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
