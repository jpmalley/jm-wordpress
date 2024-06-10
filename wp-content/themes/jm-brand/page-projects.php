<?php
/* Template Name: Projects Page */
get_header();
?>
<section class="main">
    <div class="main-area">
        <div class="main-overlay"></div>
        <div class="bottom-gradient"></div>
        <section class="content portfolio">
            <div class="container">
                <!-- Nav pills -->
                <ul class="toggler-nav nav nav-pills justify-content-center mb-5" id="projectTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="design-tab" data-bs-toggle="pill" data-bs-target="#design" type="button" role="tab" aria-controls="design" aria-selected="true">Design</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="development-tab" data-bs-toggle="pill" data-bs-target="#development" type="button" role="tab" aria-controls="development" aria-selected="false">Development</button>
                    </li>
                    <div class="toggler-switch"></div>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content" id="projectTabsContent">
                    <div class="tab-pane fade show active" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="grid-container">
                            <div class="grid-01">
                                <div class="bg-animation bg-info"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#insightsModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-info"><span class="badge-text">PRINT<span class="d-none d-md-inline"> LAYOUT</span></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-02">
                                <div class="bg-animation bg-primary"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#coffeeModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-primary"><span class="badge-text">PACKAGE DESIGN</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-03">
                                <div class="bg-animation bg-danger"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#ableModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-danger"><span class="badge-text">BRANDING</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-04">
                                <div class="bg-animation bg-secondary"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#brewModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-secondary"><span class="badge-text">UI/UX<span class="d-none d-md-inline"> DESIGN</span></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-05">
                                <div class="bg-animation bg-warning"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#coastersModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-warning"><span class="badge-text">CUSTOM MARKETING</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-06">
                                <div class="bg-animation bg-info"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#travelModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-info"><span class="badge-text">PRINT<span class="d-none d-md-inline"> LAYOUT</span></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-07">
                                <div class="bg-animation bg-success"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#recipeModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-success"><span class="badge-text">EMAIL<span class="d-none d-md-inline"> DESIGN</span></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-08">
                                <div class="bg-animation bg-success"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#collegeModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-success"><span class="badge-text">EMAIL<span class="d-none d-md-inline"> DESIGN</span></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-09">
                                <div class="bg-animation bg-success"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#holidayModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-success"><span class="badge-text">EMAIL<span class="d-none d-md-inline"> DESIGN</span></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="grid-10">
                                <div class="bg-animation bg-success"></div>
                                <a href="#" class="grid-link" data-bs-toggle="modal" data-bs-target="#waypointsModal">
                                    <div class="grid-content">
                                        <div class="badges">
                                            <span class="badge rounded-pill bg-success"><span class="badge-text">EMAIL<span class="d-none d-md-inline"> DESIGN</span></span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-footer text-center my-5">
                            <button class="btn btn-lg btn-outline-secondary rounded-pill switch-tab-dev">Development Projects <i class="fa-solid fa-code ms-1"></i></button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="card box-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <a data-bs-toggle="collapse" href="#turtleCollapse">
                                                <div class="icon-group">
                                                    <div class="icon-circle secondary box-shadow"></div>
                                                    <div class="icon-circle primary box-shadow"></div>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/tt-logo-white.svg" alt="" class="tt-logo icon-logo img-fluid">
                                                </div>
                                            </a>
                                            <div class="flex-grow-1">
                                                <div class="card-content d-flex flex-column flex-lg-row align-items-lg-center justify-content-between h-100">
                                                    <a data-bs-toggle="collapse" href="#turtleCollapse">
                                                        <h2 class="m-0">TeeTurtle E-commerce Platform</h2>
                                                    </a>
                                                    <div class="button-row mt-3 mt-lg-0">
                                                        <a href="https://github.com/jpmalley/TeeTurtle-frontend" class="btn btn-sm btn-outline-secondary rounded-pill" target="_blank" rel="noopener noreferrer">
                                                            Source Code <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-secondary rounded-pill" data-bs-toggle="collapse" href="#turtleCollapse" role="button" aria-expanded="false">
                                                            Read More <i class="fa-solid fa-chevron-down ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="turtleCollapse" class="collapse read-more mx-md-4 mx-2 mt-4">
                                            <p>At the time, TeeTurtle's entire $10M e-commerce business was hosted on a bog-standard
                                                $200 per month Shopify Premium plan. It was sluggish, outdated, and exceedingly
                                                restrictive to the business's growth. With the help of a 3rd party project manager
                                                and backend developer we duplicated all necessary functionality on our own custom
                                                PHP platform, all within eight months. This allowed us to tailor the platform to the
                                                specific needs of the business. I was responsible for spec gathering, developer
                                                write-ups, stakeholder management, and, most of all, frontend design and development
                                                of the entire look and feel of the new site. By 2021, we crossed more than $20M in
                                                e-commerce sales, in part due to the speed and efficiency of the new platform that
                                                allowed us to easily accommodate the massive increase in online sales during the
                                                early months of the pandemic.</p>
                                            <p>The current TeeTurtle.com is still using the same design and interface which I
                                                created in 2019 (with some cosmetic updates in 2021, also coded by me).</p>
                                            <div class="row skills">
                                                <div class="col-md-3">
                                                    <h3>Languages</h3>
                                                    <ul class="checks">
                                                        <li>JavaScript</li>
                                                        <li>HTML</li>
                                                        <li>CSS</li>
                                                        <li>Sass</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>Frameworks</h3>
                                                    <ul class="checks">
                                                        <li>Bootstrap</li>
                                                        <li>jQuery</li>
                                                        <li>GSAP</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card box-shadow mt-4">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <a data-bs-toggle="collapse" href="#fileCollapse">
                                                <div class="icon-group">
                                                    <div class="icon-circle secondary box-shadow"></div>
                                                    <div class="icon-circle primary box-shadow"></div>
                                                    <div class="fta-logo icon-logo">
                                                        <i class="fa-solid fa-file-export"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="flex-grow-1">
                                                <div class="card-content d-flex flex-column flex-lg-row align-items-lg-center justify-content-between h-100">
                                                    <a data-bs-toggle="collapse" href="#fileCollapse">
                                                        <h2 class="m-0">File Transfer App</h2>
                                                    </a>
                                                    <div class="button-row mt-3 mt-lg-0">
                                                        <a href="https://github.com/jpmalley/filetransferapp" class="btn btn-sm btn-outline-secondary rounded-pill" target="_blank" rel="noopener noreferrer">Source Code <i
                                                            class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
                                                        <a class="btn btn-sm btn-secondary rounded-pill" data-bs-toggle="collapse" href="#fileCollapse" role="button" aria-expanded="false">
                                                            Read More <i class="fa-solid fa-chevron-down ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="fileCollapse" class="collapse read-more mx-md-4 mx-2 mt-4">
                                            <p>This simple Django app uploads a file securely to Amazon S3 and generates an easily
                                                sharable presigned URL with user specified expiration. Upon clicking upload, an AJAX
                                                request is sent to the server to generate presigned post URL with specific
                                                conditions to the file being uploaded. The request returns a post URL and the
                                                client's browser then handles the upload directly to S3 via JavaScript, avoiding
                                                additional server-side load. After a successful upload, the server generates a
                                                presigned download URL that expires at the specified time. Object lifecycles in the
                                                S3 bucket are managed to ensure objects are deleted permanently within 24 hours of
                                                link expiration. HTTP/1.1 Caching is also managed to ensure expiration coincides
                                                with link expiration. View a <a href="https://johnpmalley.com/filetransfer"  target="_blank" rel="noopener noreferrer">demo here</a>.</p>
                                            <div class="row skills">
                                                <div class="col-md-3">
                                                    <h3>Languages</h3>
                                                    <ul class="checks">
                                                        <li>Python</li>
                                                        <li>JavaScript</li>
                                                        <li>HTML</li>
                                                        <li>CSS</li>
                                                        <li>Sass</li>
                                                        <li>SQL</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>Frameworks</h3>
                                                    <ul class="checks">
                                                        <li>Django</li>
                                                        <li>Bootstrap</li>
                                                        <li>jQuery</li>
                                                        <li>GSAP</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Infrastructure</h3>
                                                    <ul class="checks">
                                                        <li>AWS ElasticBeanstalk</li>
                                                        <li>EC2</li>
                                                        <li>RDS</li>
                                                        <li>S3</li>
                                                        <li>ELB</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card box-shadow mt-4">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <a data-bs-toggle="collapse" href="#coachCollapse">
                                                <div class="icon-group">
                                                    <div class="icon-circle secondary box-shadow"></div>
                                                    <div class="icon-circle primary box-shadow"></div>
                                                    <div class="coaching-logo icon-logo">
                                                        <i class="fa-solid fa-bullseye"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="flex-grow-1">
                                                <div class="card-content d-flex flex-column flex-lg-row align-items-lg-center justify-content-between h-100">
                                                    <a data-bs-toggle="collapse" href="#coachCollapse">
                                                        <h2 class="m-0">Marketing Platform for Coaches</h2>
                                                    </a>
                                                    <div class="button-row mt-3 mt-lg-0 flex-column flex-sm-row">
                                                        <a href="https://github.com/jpmalley/at-public" class="btn btn-sm btn-outline-secondary rounded-pill" target="_blank" rel="noopener noreferrer">Source Code <i
                                                            class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
                                                        <a class="btn btn-sm btn-secondary rounded-pill" data-bs-toggle="collapse" href="#coachCollapse" role="button" aria-expanded="false">
                                                            Read More <i class="fa-solid fa-chevron-down ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="coachCollapse" class="collapse read-more mx-md-4 mx-2 mt-4">
                                            <p>A coaching professional needed a platform to tell people about themselves, market
                                                their offerings, take payments, provide access to content behind a paywall and
                                                blog. I created this Django app using Wagtail CMS so that all of this could be
                                                done in one place. The app integrates with MailChimp Marketing and PayPal APIs
                                                to automate list building and taking payments. Everything on the site is
                                                configurable by the end user without any need for code. Clients can create
                                                accounts, pay and access exclusive content that free users cannot access.
                                                Initially hosted on Heroku, I switched hosting to AWS with only minutes of
                                                downtime.</p>
                                            <div class="row skills">
                                                <div class="col-md-3">
                                                    <h3>Languages</h3>
                                                    <ul class="checks">
                                                        <li>Python</li>
                                                        <li>JavaScript</li>
                                                        <li>HTML</li>
                                                        <li>CSS</li>
                                                        <li>Sass</li>
                                                        <li>SQL</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>Frameworks</h3>
                                                    <ul class="checks">
                                                        <li>Django</li>
                                                        <li>Bootstrap</li>
                                                        <li>jQuery</li>
                                                        <li>GSAP</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Infrastructure</h3>
                                                    <ul class="checks">
                                                        <li>AWS ElasticBeanstalk</li>
                                                        <li>EC2</li>
                                                        <li>RDS</li>
                                                        <li>S3</li>
                                                        <li>ELB</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card box-shadow mt-4">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <a data-bs-toggle="collapse" href="#unstableCollapse">
                                                <div class="icon-group">
                                                    <div class="icon-circle secondary box-shadow"></div>
                                                    <div class="icon-circle primary box-shadow"></div>
                                                    <div class="icon-logo ug-logo">
                                                        <i class="fa-solid fa-chess"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="flex-grow-1">
                                                <div class="card-content d-flex flex-column flex-lg-row align-items-lg-center justify-content-between h-100">
                                                    <a data-bs-toggle="collapse" href="#unstableCollapse">
                                                        <h2 class="m-0">Unstable Games Landing Pages</h2>
                                                    </a>
                                                    <div class="button-row mt-3 mt-lg-0">
                                                        <a href="https://github.com/jpmalley/hts-landing-page" class="btn btn-sm btn-outline-secondary rounded-pill" target="_blank" rel="noopener noreferrer">Source Code <i
                                                            class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
                                                        <a class="btn btn-sm btn-secondary rounded-pill" data-bs-toggle="collapse" href="#unstableCollapse" role="button" aria-expanded="false">
                                                            Read More <i class="fa-solid fa-chevron-down ms-1"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="unstableCollapse" class="collapse read-more mx-md-4 mx-2 mt-4">
                                            <p>TeeTurtle needed a striking landing page design for all of their major
                                                releases under the Unstable Games brand. These pages would serve multiple
                                                purposes throughout a title's development. Some of those functions included:
                                            </p>
                                            <ul class="p-ul checks">
                                                <li>Teaser page before Kickstarters</li>
                                                <li>Definitive source of product information during Kickstarters</li>
                                                <li>Preorder page and source of updates on shipping timelines</li>
                                                <li>And finally, a static sales page that introduces people to the game who
                                                    have never seen it before</li>
                                            </ul>
                                            <p>I was given a blank canvas and decided to delve into javascript animations
                                                using the GSAP framework. With the help of the art team, we were able to
                                                convert already-produced animation assets to scroll-triggered web
                                                animations. It was easy to create a workflow into the product development
                                                cycle that made creating these animations took only a few minutes for each
                                                title.</p>
                                            <div class="row skills">
                                                <div class="col-md-3">
                                                    <h3>Languages</h3>
                                                    <ul class="checks">
                                                        <li>JavaScript</li>
                                                        <li>HTML</li>
                                                        <li>CSS</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h3>Frameworks</h3>
                                                    <ul class="checks">
                                                        <li>Bootstrap</li>
                                                        <li>jQuery</li>
                                                        <li>GSAP</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-footer text-center my-5">
                            <button class="btn btn-lg btn-outline-secondary rounded-pill switch-tab-design">Design Projects <i class="fa-solid fa-pen-ruler ms-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_footer(); ?>
        </section>
    </div>
</section>

<div id="ableModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">ABLE Product Launch Mailer Design</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="ableCarousel" class="carousel slide mt-4">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="4" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="5" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="6" aria-label="Slide 6"></button>
                                    <button type="button" data-bs-target="#ableCarousel" data-bs-slide-to="7" aria-label="Slide 7"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-3.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-4.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-5.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-6.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-7.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/able-8.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#ableCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#ableCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">For this project with The Growth Partnership, I custom designed a product launch mailer for ABLE, featuring intricate die cutting, scoring, and folding techniques to create a standout piece. The mailer includes precise spot gloss details and carefully matched CMYK colors to ensure a vibrant and cohesive look. Produced in a limited run of 10,000 units, this mailer is designed to captivate and engage recipients with its unique and interactive format. This project highlights my ability to manage complex design and production processes, resulting in a memorable and effective marketing tool.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>Branding</li>
                                <li>Logo Design</li>
                                <li>Text Layout</li>
                                <li>Typography</li>
                                <li>Prepress Preparation</li>
                                <li>Print Production</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="brewModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">Brew Source App UI Design</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="brewCarousel" class="carousel slide mt-4">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#brewCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#brewCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#brewCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#brewCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-flex flex-row mx-5">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-1.png" class="d-block w-50" alt="...">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-2.png" class="d-block w-50" alt="...">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex flex-row mx-5">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-3.png" class="d-block w-50" alt="...">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-4.png" class="d-block w-50" alt="...">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex flex-row mx-5">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-5.png" class="d-block w-50" alt="...">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-6.png" class="d-block w-50" alt="...">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex flex-row mx-5">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-7.png" class="d-block w-50" alt="...">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/brewsource-8.png" class="d-block w-50" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#brewCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#brewCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">Inspired by my passion for homebrewing, I created a personal mock-up and UI brainstorming project for an app called Brew Source. This app is designed to help homebrewers manage and create their beer recipes, log their brewing sessions, and connect with the brewing community. The user interface is intuitive and visually appealing, with a warm color palette that reflects the craft brewing culture. Key features include recipe browsing and creation, ingredient tracking, brewing logs, and community forums. This project showcases my skills in UI/UX design, user-centric thinking, and the ability to translate inspiration into practical, engaging digital solutions.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>UI/UX Design</li>
                                <li>Prototyping</li>
                                <li>Mobile App Design</li>
                                <li>User Research</li>
                                <li>Typography</li>
                                <li>Branding</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="coastersModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">GHD CPAs &amp; Advisors Custom Coasters</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="coastersCarousel" class="carousel slide mt-4">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#coastersCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#coastersCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#coastersCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ghd-coaster-1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ghd-coaster-2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ghd-coaster-3.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#coastersCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#coastersCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">For GHD CPAs &amp; Advisors, I crafted a unique set of punch-out coasters that double as business cards, featuring essential contact information on the reverse side. This innovative design served both a practical purpose and a memorable marketing tool. The project involved custom designing the coasters to ensure they were visually appealing and functionally effective, with a sleek navy blue theme and clear, bold typography. This project highlights my ability to combine creativity with functionality, resulting in a distinctive and practical promotional item.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>Creative Concept Development</li>
                                <li>Branding</li>
                                <li>Material Selection</li>
                                <li>Typography</li>
                                <li>Prepress Preparation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="coffeeModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">Demitasse Coffee &amp; Creamery Packaging Design</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="coffeeCarousel" class="carousel slide mt-4">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#coffeeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#coffeeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#coffeeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#coffeeCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/demitasse-1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/demitasse-2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/demitasse-3.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/demitasse-4.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#coffeeCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#coffeeCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="my-4">For this college project, I created a cohesive packaging design for Demitasse Coffee &amp; Creamery. The goal was to develop a brand identity that exudes sophistication and simplicity while ensuring practical functionality. The design features a clean, modern aesthetic with a warm color palette, highlighting the brand's commitment to organic and premium quality products. The project includes coffee bean bags, to-go cups, and a reusable shopping bag, all unified by consistent branding elements and an elegant logo. This packaging solution not only enhances the visual appeal but also reinforces the brand's market presence and customer experience.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>Package Design</li>
                                <li>Logo Design</li>
                                <li>Branding</li>
                                <li>Cutting and Scoring</li>
                                <li>Color Theory</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="collegeModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">College Savings Infographic for EllieMae</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img loading="lazy" class="img-fluid modal-img mt-4" src="<?php echo get_template_directory_uri(); ?>/img/infographic-comp.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">For EllieMae, I custom designed an engaging and informative infographic focused on college savings. Utilizing a vibrant color palette and playful design elements, I aimed to create an inviting and visually appealing piece that encourages readers to explore the content in depth. The infographic breaks down complex information into easily digestible sections, making it accessible and enjoyable for a wide audience. This project highlights my ability to combine informative content with creative design to capture and maintain reader interest.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>Infographic Design</li>
                                <li>Illustration</li>
                                <li>Color Theory</li>
                                <li>Typography</li>
                                <li>Data Visualization</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="holidayModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">Holiday Gift Guide Email for EllieMae</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img loading="lazy" class="img-fluid modal-img mt-4" src="<?php echo get_template_directory_uri(); ?>/img/vibrantliving-comp.png" alt="">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">For EllieMae, I designed a sophisticated holiday gift guide email, inspired by magazine layouts. Embracing a CSS grid style, I ensured the layout was 100% responsive, providing an optimal viewing experience across all devices. The email featured live text and utilized conditional formatting, maintaining its elegant design while being fully functional in every email client. After meticulous testing, this project stands as a testament to my commitment to high-quality, cross-platform email design, blending visual appeal with technical precision.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>CSS Grid Layout</li>
                                <li>HTML/CSS</li>
                                <li>Responsive Design</li>
                                <li>Testing and Debugging</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="insightsModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">Insights on Growth Booklet Design</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="insightsCarousel" class="carousel slide mt-4">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#insightsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#insightsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#insightsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#insightsCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/insights-1.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/insights-2.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/insights-3.jpg" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/insights-4.jpg" class="d-block" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#insightsCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#insightsCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">For this project with The Growth Partnership, I was tasked with designing a 28-page booklet titled "Insights on Growth." My responsibilities included the complete layout of text and images, ensuring a visually appealing and cohesive design throughout. I meticulously selected high-quality coated paper to enhance the booklet's tactile and visual appeal. Additionally, I managed the CMYK press checks to ensure color accuracy and print quality. This project showcases my ability to blend strategic design elements with practical considerations, resulting in a polished and professional final product that effectively communicates the client's message.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>InDesign</li>
                                <li>Photoshop</li>
                                <li>Text Layout</li>
                                <li>Typography</li>
                                <li>Prepress Preparation</li>
                                <li>Print Production</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="recipeModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">Recipe Email Template for EllieMae</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img loading="lazy" class="img-fluid modal-img mt-4" src="<?php echo get_template_directory_uri(); ?>/img/recipe-comp.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">For EllieMae and their Encompass CRM, I redesigned their recipe email template, transforming it from a static image format to a fully responsive, live text format. This enhancement ensures optimal readability and accessibility across all devices, vastly improving user engagement and interaction. The new design prioritizes responsiveness and adaptability, providing a seamless experience whether viewed on a desktop, tablet, or smartphone. This project demonstrates my commitment to modern, user-centric design principles and my ability to enhance digital communications through innovative solutions.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>Responsive Email Design</li>
                                <li>HTML/CSS</li>
                                <li>Custom Photography</li>
                                <li>Testing and Debugging</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="travelModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">Elsewhere Travel Magazine</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img loading="lazy" class="img-fluid modal-img mt-4" src="<?php echo get_template_directory_uri(); ?>/img/elsewhere-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">As part of a college group project, I contributed to the creation of "Elsewhere Travel" magazine, handling all features, ads, and articles. This project marked my first experience with professional CMYK press printing, providing valuable insights into the printing process and high-quality production standards. The magazine showcased diverse travel destinations, emphasizing my ability to work collaboratively and manage complex design projects from concept to completion.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>Magazine Layout Design</li>
                                <li>Content Creation</li>
                                <li>Photo Editing</li>
                                <li>Typography</li>
                                <li>Prepress Preparation</li>
                                <li>Collaboration</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="waypointsModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content content">
            <div class="modal-header">
                <h2 class="mb-0">Waypoints Email Template</h2>
                <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img loading="lazy" class="img-fluid modal-img mt-4" src="<?php echo get_template_directory_uri(); ?>/img/waypoints-comp.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 text-white">
                            <p class="mt-4 mb-0">For EllieMae, I crafted an email that stands out with the use of custom fonts and background images, creating a unique and visually appealing design. To ensure a seamless experience across all email clients, fallback styles were meticulously implemented. This approach guarantees that the email maintains its aesthetic and readability, even in clients that do not support advanced features. The result is an engaging and distinctive email that delivers the best possible experience on all devices, showcasing my ability to blend creativity with technical adaptability.</p>
                        </div>
                        <div class="col-md-4 text-white skills">
                            <h3 class="mt-4">Skills used:</h3>
                            <ul class="checks mb-4">
                                <li>Typography</li>
                                <li>Fallback Styling</li>
                                <li>HTML/CSS</li>
                                <li>Text Layout</li>
                                <li>Responsive Design</li>
                                <li>Print Production</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-outline-secondary rounded-pill my-4" data-bs-dismiss="modal"><i class="fa-regular fa-circle-left"></i> Return to Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>