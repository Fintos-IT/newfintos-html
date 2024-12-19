<?php require_once( 'couch/cms.php' ); ?>
<!doctype html>
<php lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
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

    <cms:editable name='about' label='About Page' type='richtext'>
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
        <div class="pageheader pageheader--full bglightyellow align-items-center pt-5">
            <div class="container mt-3 pt-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline d-flex justify-content-center align-items-center text-center flex-column">
                            <div class="title fw-medium w-100"><span>FINTOS: Fin + Tech + Os</span></div>
                            <h1 class="heading fw-bold">Enriching Lives for a <br>
                                Sustainable Financial Future</h1>
                            <h2 class="subheading">Empowering your financial freedom through a comprehensive suite of advisory, financing, and educational services.</h2>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="thumb-player--medium">
                <div class="videowrap position-relative" data-aos="zoom-in" data-aos-easing="linear">
                    <!--<a href="#" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoplayer"><img src="https://fintos.com.my/assets/images/icon-play.png" alt="video" /></a>-->
                    <img src="https://fintos.com.my/assets/images/heroabout.png" alt="player" class="img-fluid"/>
                </div>
            </div>
            <div class="row align-items-center justify-content-center award-logo">
                <div class="col-md-12 col-md-5">
                    <div class="flex-column award d-flex flex-lg-row justify-content-center align-items-center gap-3 gap-lg-5">
                        As seen on
                        <ul class="award-container list-unstyled d-flex flex-row">
                            <li><img src="https://fintos.com.my/assets/images/award1.png" alt="award"/></li>
                            <li><img src="https://fintos.com.my/assets/images/award2.png" alt="award"/></li>
                            <li><img src="https://fintos.com.my/assets/images/award3.png" alt="award"/></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3 vision-value">
                    <div class="mb-sm-4 mb-lg-0 col-md-6 bglightyellow rounded-4 column mb-4">
                        <div>
                            <div class="flex-column card bg-transparent p-4 border-0 d-flex flex-md-row align-items-md-center align-items-start">
                                <div class="card-thumb" data-aos="fade-up" data-aos-delay="200">
                                    <img src="https://fintos.com.my/assets/images/vision-color.png" alt="Our Vision" />
                                </div>
                                <div class="px-0 card-body ps-md-4">
                                    <h5 class="card-title mb-2 fw-semibold">Our Vision</h5>
                                    <p>We are committed to prioritizing sustainability by utilizing our innovative products, solutions, unwavering passion, and robust financial resilience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bglightyellow rounded-4 column">
                        <div>
                            <div class="flex-column card bg-transparent p-4 border-0 d-flex flex-md-row align-items-md-center align-items-start">
                                <div class="card-thumb" data-aos="fade-up" data-aos-delay="400">
                                    <img src="https://fintos.com.my/assets/images/value-color.png" alt="Our Vision" />
                                </div>
                                <div class="px-0 card-body ps-md-4">
                                    <h5 class="card-title mb-2 fw-semibold">Our Value</h5>
                                    <p>We strive to cultivate an environment where each individual can flourish and bring out their best, fostering a collaborative spirit that fuels success for our customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="container mt-5 pt-5"><!--[start: key financial]-->
            <div class="row align-items-center justify-content-center mb-5">
                <div class="col-sm-12 col-lg-10">
                    <div class="row flex-column flex-md-row justify-content-between">
                        <div class="col mb-2 mb-md-0">
                            <h2 class="display-5 fw-bold">The Key To <br/>Financial Freedom</h2>
                        </div>
                        <div class="col">
                            <p>Our corporate slogan encapsulates the spirit of Fintos' commitment: For customers, we are a trusted partner. For shareholders, we provide long-term value creation. For communities around the world, we pave the way for a future where financial empowerment is within everyone's reach.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5 text-key">
                <div class="col-sm-12 col-lg-4 pb-3 px-3">
                    <div class="card card--key border-0 bglightyellow rounded">
                        <div class="card-body d-flex flex-column justify-content-center p-4">
                            <h5 class="card-title fw-bold mb-2">Focus</h5>
                            <p class="card-text">Delivering exceptional customer experiences by focusing on their needs and expectations</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-sm-12 col-lg-4 pb-3 px-3">
                    <div class="card card--key border-0 bglightyellow rounded">
                        <div class="card-body d-flex flex-column justify-content-center p-4">
                            <h5 class="card-title fw-bold mb-2">Innovative</h5>
                            <p class="card-text">Fostering creativity and continuously developing better solutions to drive progress</p>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-12 col-lg-4 pb-3 px-3">
                    <div class="card card--key border-0 bglightyellow rounded">
                        <div class="card-body d-flex flex-column justify-content-center p-4">
                            <h5 class="card-title fw-bold mb-2">Nimble</h5>
                            <p class="card-text">Moving in tandem with financial technology to respond to the ever-changing market environment</p>
                        </div>
                    </div>
                </div>
            
                <div class="pt-sm-0 col-sm-12 col-lg-4 pt-lg-3 pt-0 px-3">
                    <div class="card card--key border-0 bglightyellow rounded">
                        <div class="card-body d-flex flex-column justify-content-center p-4">
                            <h5 class="card-title fw-bold mb-2">Trustworthy</h5>
                            <p class="card-text">Committed to always doing things in an honest and friendly manner</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-sm-12 col-lg-4 pt-3 px-3">
                    <div class="card card--key border-0 bglightyellow rounded">
                        <div class="card-body d-flex flex-column justify-content-center p-4">
                            <h5 class="card-title fw-bold mb-2">Opportunity</h5>
                            <p class="card-text">Keeping a positive outlook to seek new responsibilities and opportunities in areas where we are experts</p>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-12 col-lg-4 pt-3 px-3">
                    <div class="card card--key border-0 bglightyellow rounded">
                        <div class="card-body d-flex flex-column justify-content-center p-4">
                            <h5 class="card-title fw-bold mb-2">Sustainable</h5>
                            <p class="card-text">Fostering a sustainable future that leads to social and economic improvements in the community in which we operate</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-4 px-2 px-lg-3 py-md-0 py-3">
                    <img src="https://fintos.com.my/assets/images/about-img-1.jpg" alt="thumbnail" class="img-fluid rounded-4"/>
                </div>
                <div class="col-md-4 px-2 px-lg-3 py-md-0 py-3">
                    <img src="https://fintos.com.my/assets/images/about-img-2.jpg" alt="thumbnail" class="img-fluid rounded-4"/>
                </div>
                <div class="col-md-4 px-2 px-lg-3 py-md-0 py-3">
                    <img src="https://fintos.com.my/assets/images/about-img-3.jpg" alt="thumbnail" class="img-fluid rounded-4"/>
                </div>
            </div>
        </div> <!--[end: key financial]-->
        
        <div class="ourteam"><!--[start: ourteam]-->
            <div class="container">
                <div class="row">
                    <div class="sectionheading pt-5 pb-2 my-5 text-center">
                        <h2 class="heading">Meet the leadership team who are <br>leading the change</h2>
                    </div> 
                    <div class="col-md-4">
                        <div class="card card--team border-0">
                            <div class="card-thumb mb-4" data-aos="fade-up" data-aos-delay="200"><img src="https://fintos.com.my/assets/images/team-1.png" alt="thumbnail" class="img-fluid" /></div>
                            <div class="card-body p-0 d-flex flex-column align-items-start">
                                <span class="align-self">Founder & CEO</span>
                                <h5 class="card-title">Johnsons Au</h5>
                                <ul class="list-unstyled d-flex flex-row gap-4 mb-1">
                                    <li><a href="#"><img src="https://fintos.com.my/assets/images/linkedin-team-icon.png" alt="linkedin" class="img-fluid" /></a></li>
                                    <li><a href="#"><img src="https://fintos.com.my/assets/images/envelope-team-icon.png" alt="envelope" class="img-fluid" /></a></li>
                                </ul>
                                <p class="card-text">Since 2009, Johnson has been actively involved in credit finance, debt restructuring, and property investment. He founded advisory services and FinTech companies to provide comprehensive financial solutions to customers, utilizing technology to promote better financial management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4 py-md-0 py-4">
                        <div class="card card--team border-0">
                            <div class="card-thumb mb-4" data-aos="fade-up" data-aos-delay="400"><img src="https://fintos.com.my/assets/images/team-2.png" alt="thumbnail" class="img-fluid" /></div>
                            <div class="card-body p-0 d-flex flex-column align-items-start">
                                <span class="align-self">Co-founder & Deputy CEO</span>
                                <h5 class="card-title">Jeffrey Tan</h5>
                                <ul class="list-unstyled d-flex flex-row gap-4 mb-1">
                                    <li><a href="#"><img src="https://fintos.com.my/assets/images/linkedin-team-icon.png" alt="linkedin" class="img-fluid" /></a></li>
                                    <li><a href="#"><img src="https://fintos.com.my/assets/images/envelope-team-icon.png" alt="envelope" class="img-fluid" /></a></li>
                                </ul>
                                <p class="card-text">With extensive expertise in financial management, business strategy, and technological innovation, Jeffrey has played a pivotal role in shaping Fintos' trajectory. As a seasoned entrepreneur, he has successfully co-founded ventures such as myTukar (car platform), rekatone (renovation), myliving.mylife (protech), Chargesini (EV charging), and Oly Group (beauty & wellness).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card--team border-0">
                            <div class="card-thumb mb-4" data-aos="fade-up" data-aos-delay="600"><img src="https://fintos.com.my/assets/images/team-3.png" alt="thumbnail" class="img-fluid" /></div>
                            <div class="card-body p-0 d-flex flex-column align-items-start">
                                <span class="align-self">Co-founder & Chief Business Officer</span>
                                <h5 class="card-title">Liz Ang</h5>
                                <ul class="list-unstyled d-flex flex-row gap-4 mb-1">
                                    <li><a href="#"><img src="https://fintos.com.my/assets/images/linkedin-team-icon.png" alt="linkedin" class="img-fluid" /></a></li>
                                    <li><a href="#"><img src="https://fintos.com.my/assets/images/envelope-team-icon.png" alt="envelope" class="img-fluid" /></a></li>
                                </ul>
                                <p class="card-text">With a background as a Chartered Accountant, Liz brings her keen financial acumen to her role in business development at Fintos. She also takes charge of overseeing Fintos Property, leveraging her robust understanding of the Malaysian real estate market and strong business network.</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div><!--[end: ourteam]-->
        <div class="timeline"><!--[start: timeline]-->
            <div class="container">
                <div class="row px-3 px-md-0">
                    <div class="sectionheading my-5 pt-5 text-center">
                        <h2 class="heading">The Journey that shapes us</h2>
                    </div> 
                    <div class="col-sm-4 col-lg-2 p-0 py-3 py-md-0">
                        <div class="card card--timeline border-0">
                            <div class="card-body p-0">
                                <h5 class="card-title mb-0 pb-4">2015</h5>
                                <p class="card-text mt-4 pt-2 pe-4 me-3">Birth of JA Avenue holding (Digital Exploration and R&D)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 p-0 py-3 py-md-0">
                        <div class="card card--timeline border-0">
                            <div class="card-body p-0">
                                <h5 class="card-title mb-0 pb-4">2016</h5>
                                <p class="card-text mt-4 pt-2 pe-4 me-3">Creation of Fintech & Company’s Digital Transformation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 p-0 py-3 py-md-0">
                        <div class="card card--timeline border-0">
                            <div class="card-body p-0">
                                <h5 class="card-title mb-0 pb-4">2017</h5>
                                <p class="card-text mt-4 pt-2 pe-4 me-3">R&D Launch of mortgage2u, mortgage Management App</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-sm-4 mt-lg-0 col-sm-4 col-lg-2 p-0 py-3 py-md-0">
                        <div class="card card--timeline border-0">
                            <div class="card-body p-0">
                                <h5 class="card-title mb-0 pb-4">2018</h5>
                                <p class="card-text mt-4 pt-2 pe-4 me-3">R&D Development of Loan Eligibility System Establishment of Property Investment Venture</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-sm-4 mt-lg-0 col-sm-4 col-lg-2 p-0 py-3 py-md-0">
                        <div class="card card--timeline border-0">
                            <div class="card-body p-0">
                                <h5 class="card-title mb-0 pb-4">2019</h5>
                                <p class="card-text mt-4 pt-2 pe-4 me-3">Establishment of Property Administration & Cultivate Talents</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-sm-4 mt-lg-0 col-sm-4 col-lg-2 p-0 py-3 py-md-0">
                        <div class="card card--timeline border-0">
                            <div class="card-body p-0">
                                <h5 class="card-title mb-0 pb-4">2020</h5>
                                <p class="card-text mt-4 pt-2 pe-4 me-3">Transitioning into FINTOS Venture Group from JA Avenue</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div><!--[start: timeline]-->
        
        <div class="cta cta--boxed"><!--[start: cta]-->
            <div class="container">
                <div class="row bglightyellow">
                    <div class="col-md-5 img-ct">
                        <div class="thumb-cta">
                            <img src="https://fintos.com.my/assets/images/thumb-cta.png" alt="thumbnail" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="sectionheading h-100 d-flex flex-column align-items-start">
                            <h2 class="heading">Be part of Fintosian</h2>
                            <p>Join our team and transform the world of finance</p>
                            <a href="https://forms.gle/zxRbjs2p1iXTQivn8" target="_blank" class="open-modal btn btn-primary btn-lg fw-semibold">Let’s innovate together!</a>
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
                                <iframe src="https://www.youtube.com/embed/2l8CI32ADL4?si=EE8SGVQ8qjgUOFIW" allowfullscreen></iframe>
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
