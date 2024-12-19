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
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL6WGB64"
              height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <cms:editable name='career-detail-business-development-executive' label='Career Detail Page' type='richtext'>
        <div class="site-header bgwhite d-flex align-items-center"><!--[start: site-header]-->
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid justify-content-between">
                        <a class="navbar-brand" href="index"><img src="https://fintos.com.my/assets/images/fintos-logo-dark.png" alt="app" class="img-fluid"  /></a>
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
                                        <div class="d-flex py-3 px-4 mx-1 flex-col flex-lg-row gap-4 flex-column flex-md-row">
                                            <div class="col">
                                                <a href="fintos-advice" class="fw-semibold">
                                                <div class="card card--nav border-0">
                                                    <div class="card-head mb-3">
                                                        <img src="https://fintos.com.my/assets/images/fintos-advice-logo-nav.svg" alt="fintos advice" class="img-fluid"  />
                                                        <p class="my-2">Make smart choices with your finances</p>
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
                                                            <img src="https://fintos.com.my/assets/images/fintos-finance-logo-nav.svg" alt="Fintos Capital" class="img-fluid"  />
                                                            <p class="my-2">Regain own financial independence</p>
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
                                                            <img src="https://fintos.com.my/assets/images/fintos-tech-logo-nav.svg" alt="fintos tech" class="img-fluid"  />
                                                            <p class="my-2">Make smart choices with your finances</p>
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
                                <li><a class="dropdown-item" href="#">Personal Loan (Coming Soon)</a></li>
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
        <div class="container gap-extra">
            <div class="row mt-5">
                <div class="col-lg-8 pe-4">
                    <div class="entry-content me-sm-0 me-lg-5 pe-sm-0">
                        <div class="back-career">
                            <img src="https://fintos.com.my/assets/images/arrow-left.png" alt="app" class="img-fluid me-1" />
                            <a href="career.php">Back</a>
                        </div>
                        <h2 class="heading-single fw-semibold mt-4 pt-2 mb-4 pb-3">Business Development Executive</h2>
                        <p class="mb-2"><b>Job Highlights</b></p>
                        <ul>
                            <li><b>Professional Advancement: </b>Annual performance evaluations with opportunities for promotion. Potential to rise to a chief-level position.</li>
                            <li><b>Competitive Compensation: </b>Attractive salary package with performance-based incentives.</li>
                            <li><b>Equity Participation: </b>Eligibility for the Employee Share Option Scheme (ESOS).</li>
                            <li><b>Company Growth:</b> The company is on a path towards an IPO and expanding internationally.</li>
                        </ul> 
                        <br/>
                        <p class="mb-2"><b>Job Description</b></p>
                        <p>We are seeking a highly organized and proactive Business Development Executive to support our sales department with a range of administrative duties. This role is pivotal in maintaining the efficiency and smooth operation of the department, ensuring that our team can focus on their primary objectives.</p>
                        <br/>
                        <p class="mb-2"><b>Key Responsibilities</b></p>
                        <ul>
                            <li>Manage key customer accounts and build strong relationships.</li>
                            <li>Conduct the entire sales cycle for our software products.</li>
                            <li>Identify and target potential clients for white label software solutions.</li>
                            <li>Close deals to sell company financial advisory, money lending, and property leads management software.</li>
                            <li>Collaborate with the sales team to achieve sales targets.</li>
                            <li>Independently develop and execute sales strategies.</li>
                            <li>Provide product demonstrations and presentations to clients.</li>
                            <li>Stay updated on industry trends and competitor offerings.</li>
                            <li>Achieve and exceed sales quotas.</li>
                            <li>Maintain accurate sales records and reports.</li>
                            <li>Communicate effectively with large corporate customers.</li>
                            <li>Work closely with the product development team to provide customer feedback.</li>
                            <li>Contribute to the growth and success of the company.</li>
                        </ul>
                        <br/>
                        <p class="mb-2"><b>Qualifications</b></p>
                        <ul>
                            <li>Minimum of 2 years of experience in business development, especially in financial, e-payment, and property platform industry.</li>
                            <li>Proven track record of closing deals and meeting sales targets.</li>
                            <li>Strong interpersonal and communication skills.</li>
                            <li>Independent thinker with a team player mentality.</li>
                            <li>Determination and a strong drive for success.</li>
                            <li>Ability to handle and manage large corporate accounts.</li>
                            <li>Familiarity with software as a service (SaaS) model is a plus.</li>
                        </ul>
                        <p class="mb-2"><b>Why Join Us?</b></p>
                        <ul>
                            <li>Medical claim </li>
                            <li>Enjoy all Public Holidays under Selangor – that's 18 days off!</li>
                            <li>Access to educational opportunities like EMBA and various training courses.</li>
                            <li>Opportunities for growth and promotion, evaluated in annual reviews.</li>
                            <li>Partake in weekly and monthly company activities – from badminton and cycling to picnics and evening sessions.</li>
                            <li>Experience our vibrant, energetic office culture and a comfortable corporate style workspace.</li>
                            <li>Parking allowances provided. Office location conveniently accessible via public transport.</li>
                        </ul><br/>
                        <p class="mb-2"><b>Skills</b></p>
                        <ul class="d-flex mb-5 pb-3 gap-3 flex-wrap list-unstyled">
                            <li class="badge rounded-pill text-bg-lightgray">Financial Analysis</li>
                            <li class="badge rounded-pill text-bg-lightgray">Client Management</li>
                            <li class="badge rounded-pill text-bg-lightgray">Market Analysis</li>
                        </ul>
                        <a target="_blank" href="https://forms.gle/tY6EZoFLXyq2MZHX7" class="btn btn-lg btn-primary">Apply for this job</a>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar bglightyellow p-4 rounded-4">
                        <h3 class="fw-semibold mt-2 mb-3 pb-1">About the job</h3>
                        <ul class="list-unstyled d-flex flex-column gy-4">
                            <li class="mb-3 pb-1">
                                <div class="title mb-1">Job type</div>
                                <div class="entry">Full Time</div>
                            </li>
                            <li class="mb-3 pb-1">
                                <div class="title mb-1">Department</div>
                                <div class="entry">Sales & Operations</div>
                            </li>
                            <li class="mb-3 pb-1">
                                <div class="title mb-1">Experience Level</div>
                                <div class="entry">2 Years of Experience</div>
                            </li>
                            <li class="mb-3 pb-1">
                                <div class="title mb-1">Location</div>
                                <div class="entry">Puchong, Selangor</div>
                            </li>
                        </ul>
                        <a target="_blank" href="https://forms.gle/tY6EZoFLXyq2MZHX7" class="btn w-100 btn-lg btn-primary mb-2">Apply for this job</a>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="site-footer bgprimary pt-5"><!--[start:site-footer]-->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-1">
                        <h3 class="fw-semibold">Products</h3>
                        <ul class="list-unstyled d-flex flex-column">
                            <li><a onclick="alert('Coming Soon')" href="#">Housing Loan (Coming Soon)</a></li>
                            <li><a onclick="alert('Coming Soon')" href="#">Mortgage Loan (Coming Soon)</a></li>
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
                            <li><a href="career.php">Career</a></li>
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
