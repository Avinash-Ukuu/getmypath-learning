<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GetMyPath - Project Management Professional</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pmp-offer-new.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/form.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/gmp.png')}}">
    <script src="{{ asset('assets/frontend/js/jquery.min.js')}}"></script>
    <style>
        .pmp-point {
            color: #fff;
        }

        .main-list h2 {
            color: #fff;
        }

        .main-list p {
            color: #fff;
        }

        .form-tabs {
            margin-bottom: 10px;
        }

        .tab-btn {
            padding: 8px 15px;
            border: 1px solid #ccc;
            cursor: pointer;
            background: #f5f5f5 !important;
        }

        .tab-btn.active {
            background: orange !important;
            color: #fff;
        }
        .form-wrapper form input{
            width: -webkit-fill-available;
        }
    </style>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-269WEB7TTR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-269WEB7TTR');
    </script>
</head>

<body>
    <div class="form-wrapper form-wrapper-b" id="lead-form-wrapper">
        <div class="form-wrapper-inner">
            <form class="lead-form" method="POST">
                <div class="remove-form-wrapper">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16"
                        style="float: right; cursor: pointer;" id="remove-lead-form">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z">
                        </path>
                    </svg>
                </div>
                <h3 class="form-heading">Get Certification Quote for Free</h3>
                <div class="form-tabs">
                    <button type="button" class="tab-btn active" style="color: black" data-type="employer">My Employer</button>
                    <button type="button" class="tab-btn" style="color: black" data-type="self">My Self</button>
                </div>
                <div class="input-fields">
                    <input type="hidden" name="user_type" value="employer">
                    <div class="input-container">
                        <h3 class="form-input-heading form-input-required">Full Name</h3>
                        <input type="text" name="name" required placeholder="Full Name*">
                    </div>
                    <div class="input-container">
                        <!-- Email -->
                        <h3 class="form-input-heading form-input-required">Email</h3>
                        <input type="email" name="email" required placeholder="E-Mail*">
                    </div>
                    <div class="input-container">
                        <!-- Mobile -->
                        <h3 class="form-input-heading form-input-required">Mobile</h3>
                        <input type="text" name="mobile" pattern="[6-9]\d{9}" maxlength="10" required placeholder="Phone Number*">
                    </div>
                    <div class="input-container employer-fields">
                        <!-- Designation -->
                        <h3 class="form-input-heading form-input-required">Designation</h3>
                        <input type="text" name="designation" required placeholder="Your Designation*">
                    </div>
                    <div class="input-container employer-fields">
                        <!-- Company Name -->
                        <h3 class="form-input-heading form-input-required">Company Name</h3>
                        <input type="text" name="company_name" required placeholder="Company Name*">
                    </div>
                    <div class="input-container">
                        <!-- Message -->
                        <h3 class="form-input-heading">Message</h3>
                        <textarea name="message" style="width: -webkit-fill-available;" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                </div>
                <!--<h3 class="form-input-heading">Comments</h3>-->
                <!--<textarea rows="4" placeholder="Enter comment" name="comment"></textarea>-->
                <div class="response-wrapper"></div>
                <div class="button-wrapper">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="box-faded"></div>
    <div class="ripple-1"></div>
    <div class="ripple-2"></div>
    <div class="ripple-3"></div>
    <div class="ripple-4"></div>
    <div class="ripple-5"></div>
    <main>
        <section class="flex-container pmp-exam-header">
            <div class="logo-pmp-container" id="fixheader-pmp">
                <div class="pmp-exam-container">
                    <a href="javascript:void(0)" class="pmp-logo">
                        <img src="{{ asset('assets/frontend/images/GetMyPath.png')}}" alt="GetMyPath" width="100px">
                    </a>
                    <div class="menu" id="menuToggle" onclick="toggleMenu()">
                        <img src="{{ asset('assets/frontend/images/menu.svg')}}" alt="menu">
                    </div>
                    <div class="menu-links">
                        <a href="javascript:void(0)" class="menu-toggle" onclick="toggleMenu()">
                            <img src="{{ asset('assets/frontend/images/back.svg')}}" alt="back">
                            Back
                        </a>
                        <ul>
                            <li class="links-li">
                                <a href="#overview" class="link smoothscroll">Overview</a>
                            </li>
                            <li class="links-li">
                                <a href="#benefits" class="link smoothscroll">Benefits</a>
                            </li>
                            <li class="links-li">
                                <a href="#whyus" class="link smoothscroll">Why Us</a>
                            </li>

                            <li class="links-li faqs-li">
                                <a href="#faqs" class="link smoothscroll">FAQs</a>
                            </li>
                            <li class="links-li">
                                <a href="#contact" class="link smoothscroll">Contact Us</a>
                            </li>
                            <li class="links-li pmp-exam-buttons">
                                <a href="tel:+971 563524051" class="btn-white ">
                                    <img src="{{ asset('assets/frontend/images/call-us.svg')}}" alt="call-us">+971 563524051</a>
                                <a class="btn-orange open-popup lets-connect-btn" data-heading="Download Syllabus"
                                    data-quote="PMP Certification Training" data-enquirytypedownload="2000"
                                    data-downloadlink="https://tkacoursematerial.s3.eu-west-2.amazonaws.com/PMP%C2%AE%20Certification%20Training.pdf">
                                    <img src="{{ asset('assets/frontend/images/quote.svg')}}" alt="quote">Download Brochure
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pmp-exam-container">
                <div class="banner-section">
                    <div class="banner-content">
                        <div class="left-content">
                            <h1>PMP Certification Training Course</h1>
                            <p class="left-content-for-desktop">PMP Certification is the simplest way for Project
                                Managers to advance their careers and to validate their Project Management skills. You
                                can prepare for the PMP Certification Program by learning from the Project Management
                                experts in GetMyPath’s PMP Certification Training Course in India. GetMyPath is globally
                                recognised as the Market Leader in training Project Managers. Our "Project Management
                                Team" comprises over 50 leading Project Management Professionals who have expertise in
                                the Project Management Industry. Our instructors have developed a unique teaching style
                                to help aspiring candidates to master the art of Project Management.</p>
                            <p class="left-content-for-mobile">PMP Certification is the simplest way for Project
                                Managers to advance their careers and to validate their Project Management skills.</p>
                            <div class="pmp-offer">
                                <h3>Limited Time Offer – PMP Certification Course</h3>
                                <div class="countdown-offer">
                                    <div class="timing">
                                        <span id="day"></span>
                                        <p>Days</p>
                                    </div>
                                    <div class="timing">
                                        <span id="hours"></span>
                                        <p>Hours</p>
                                    </div>
                                    <div class="timing">
                                        <span id="minutes"></span>
                                        <p>Minutes</p>
                                    </div>
                                    <div class="timing">
                                        <span id="seconds"></span>
                                        <p>Seconds</p>
                                    </div>
                                </div>
                            </div>
                            <button class="watch-demo-btn" id="watchDemoBtn"><i class="fa fa-play-circle"
                                    aria-hidden="true"></i> Watch Demo</button>
                            <div class="pmp-exam-buttons" style="margin-top: 0px">
                                <a class="btn-orange open-popup lets-connect-btn" data-heading="Enquire Now"
                                    data-quote="PMP Certification Training - Enquire Now">
                                    <img src="{{ asset('assets/frontend/images/discount.svg')}}" alt="discount">50% Off Limited Time Offer
                                </a>
                                <a class="btn-white open-popup lets-connect-btn" data-heading="Drop a Query"
                                    data-quote="PMP Certification Training - Drop a Query">
                                    <img src="{{ asset('assets/frontend/images/quote-blue.svg')}}" alt="quote-blue">Drop a Query
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-graph">
                        <img src="{{ asset('assets/frontend/images/banner.png')}}" alt="graph-image" class="mob-graph"
                            style="border-radius: 5px;">
                        <img src="{{ asset('assets/frontend/images/banner.png')}}" alt="graph-image-xl" class="desktop-graph"
                            style="border-radius: 5px;">
                        <div class="graph-percent" style="background: linear-gradient(#cdffd8, #94b9ff);">
                            <div class="graph-circle">
                                <svg class="progress-ring graph-ring">
                                    <circle class="circle-default" fill="white" r="43" cx="49"
                                        cy="49"></circle>
                                    <circle class="progress-ring__circle" fill="transparent" r="43" cx="47.5"
                                        cy="47.5">
                                    </circle>
                                </svg>
                            </div>
                            <span class="c-out">+<h3 class="count-number" data-to="28" data-speed="250"></h3>
                                %</span>
                            <p>Globally, PMP® Certified Managers earned 28% more than non-PMP Certified Managers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-container pmp-exam-facts">
            <div class="all-facts">
                <div class="content">
                    <h3>
                        Our Amazing Facts and Figures
                    </h3>
                    <p>
                        We are the largest global training providers. We successfully run 100+ courses daily in 490+
                        locations worldwide.
                    </p>
                </div>
                <div class="facts-list">
                    <div class="facts">
                        <div class="fact-image"><img src="{{ asset('assets/frontend/images/course.svg')}}" alt="course"></div>
                        <div class="name">
                            <span>
                                <h2 class="count-number" data-to="300" data-speed="1000"></h2>+
                            </span>
                            <p>Courses Running</p>
                        </div>
                    </div>
                    <div class="facts">
                        <div class="fact-image"><img src="{{ asset('assets/frontend/images/location.svg')}}" alt="location"></div>
                        <div class="name">
                            <span>
                                <h2 class="count-number" data-to="150" data-speed="1000"></h2>+
                            </span>
                            <p>Locations Worldwide</p>
                        </div>
                    </div>
                    <div class="facts">
                        <div class="fact-image"><img src="{{ asset('assets/frontend/images/trainer.svg')}}" alt="trainer"></div>
                        <div class="name">
                            <span>
                                <h2 class="count-number" data-to="1" data-speed="500"></h2>M+
                            </span>
                            <p>Our Global Learners</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-container pmp-exam-info" id="overview">
            <div class="pmp-exam-container">
                <div class="pmp-main">
                    <div class="pmp-all-content">
                        <div class="pmp-overview">
                            <div class="pmp-exam-heading">
                                <div class="title-effect">
                                    <div class="bar bar-top"></div>
                                    <div class="bar bar-right"></div>
                                    <div class="bar bar-bottom"></div>
                                    <div class="bar bar-left"></div>
                                </div>
                                <h2>PMP® Certification Program Overview</h2>
                            </div>
                            <p>You may improve your project management delivery methods and self-efficacy with our
                                Project Management Professional (PMP) Training Course. You will become an expert project
                                manager for any kind of project, regardless of size, scope, or budget, with our PMP
                                Certification Training in India.</p>
                            <br>
                            <p>GetMyPath is acknowledged as the Industry Leader for Project Managers seeking to advance
                                their careers. We ensure that you will pass the PMP Certification Program on your first
                                try by providing you with comprehensive preparation for the exam from our very engaging
                                instructors.</p>
                            <br>
                            <p>We provide PMP Certification Training services to businesses, public sector
                                organizations, government agencies, international corporations, and private citizens.
                                Our subject matter specialists can make their subjects interesting and memorable by
                                drawing on their extensive industry knowledge. This results in an invaluable and
                                unforgettable learning experience. Our committed team works tirelessly to offer clients
                                who want the ease and comfort of working in their familiar surroundings in-house PMP
                                Certification Training in India.</p>
                            <div class="pmp-exam-buttons">
                                <a class="btn-orange open-popup lets-connect-btn" data-heading="Need More Information"
                                    data-quote="PMP Certification Training - Need More Information">
                                    <img src="{{ asset('assets/frontend/images/information.svg')}}" alt="information">Need More Information
                                </a>
                            </div>
                        </div>
                        <div class="pmp-skills">
                            <div class="pmp-exam-heading">
                                <div class="title-effect">
                                    <div class="bar bar-top"></div>
                                    <div class="bar bar-right"></div>
                                    <div class="bar bar-bottom"></div>
                                    <div class="bar bar-left"></div>
                                </div>
                                <h2>Skills you will master through our PMP program</h2>
                                <div class="skills-main">
                                    <ul class="skill-list">
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Project Leadership Skills</p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Influencing and Negotiation Skills</p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Budget and Schedules Management </p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Risk Management Skills</p>
                                        </li>
                                    </ul>
                                    <div class="middle-content">
                                        <div class="inner-box">
                                            <p>Average Salary Per Annum</p>
                                            <h3>138K AED</h3>
                                            <span><img src="{{ asset('assets/frontend/images/salary.svg')}}" alt="salary"></span>
                                        </div>
                                        <div class="inner-box">
                                            <p>Expected Job Growth Rate</p>
                                            <h3>28%</h3>
                                            <span><img src="{{ asset('assets/frontend/images/growth.svg')}}" alt="growth"></span>
                                        </div>
                                        <div class="inner-box">
                                            <p>I want to know about Dates & Prices and Duration of PMP Certification
                                                Program</p>
                                            <div class="pmp-exam-buttons">
                                                <a class="btn-orange open-popup lets-connect-btn"
                                                    data-heading="Enquire Now"
                                                    data-quote="PMP Certification Training - Enquire Now">
                                                    <img src="{{ asset('assets/frontend/images/enquire.svg')}}" alt="enquire">Request Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="skill-list">
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Critical and Problem-solving Thinking</p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Successfully Deliver Projects On-time </p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Quality and Task Management </p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg')}}" alt="reading-book">
                                            <p>Meetings Management</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="whats-included">
                            <div class="pmp-exam-heading">
                                <div class="title-effect">
                                    <div class="bar bar-top"></div>
                                    <div class="bar bar-right"></div>
                                    <div class="bar bar-bottom"></div>
                                    <div class="bar bar-left"></div>
                                </div>
                                <h2>What's Included in Our PMP® Certification Training Course?</h2>
                            </div>
                            <div class="included-list">
                                <ul class="list">
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>Online Live Instructor Led, Online Instructor Led Video, One To One and
                                            Online Self Paced</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>Very high pass rates with our PMP® Certification Course</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>100% Best Price guarantee</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>36 PDU's required by PMI®</p>
                                    </li>

                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>Over 1,000 PMP® Certification Program sample questions</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>Course completion certificate</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>Realistic 200 question mock PMP® Certification Program</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>Flexible schedule – weekday and weekend</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg')}}" alt="tick">
                                        <p>30% discount code off your next course provided after you enroll</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="pmp-exam-buttons">
                                <a class="btn-orange open-popup lets-connect-btn" data-heading="Find Out More"
                                    data-quote="PMP Certification Training - Find Out More">
                                    <img src="{{ asset('assets/frontend/images/find.svg')}}" alt="fnd">Enquire now
                                </a>
                            </div>
                        </div>
                        <div class="pmp-steps">
                            <div class="image">
                                <img src="{{ asset('assets/frontend/images/pmp-steps.jpg')}}" alt="pmp-steps">
                            </div>
                        </div>
                        <div class="pmp-offers" style="border-radius: 5px;">
                            <div class="content-outer">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/limit.svg')}}" alt="limit">
                                </div>
                                <div class="content">
                                    <h2>
                                        Limited Time Offer
                                    </h2>
                                    <p>
                                        Buy 2 Courses and get a complimentary course for FREE
                                    </p>
                                </div>
                            </div>
                            <div class="pmp-exam-buttons">
                                <a class="btn-orange open-popup lets-connect-btn" data-heading="Hurry Up"
                                    data-quote="PMP Certification Training - Hurry Up">
                                    <img src="{{ asset('assets/frontend/images/hurry.svg')}}" alt="hurry">Hurry Up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pmp-right-form">
                        <div class="input-content">
                            <div class="list-main">
                                <a class="list open-popup lets-connect-btn"
                                    data-heading="Enquire for - Classroom Training"
                                    data-quote="PMP Certification Training - Enquire for - Classroom Training">
                                    <span clas="icon"><img src="{{ asset('assets/frontend/images/classroom.svg')}}" alt="classroom"></span>
                                    <p>Classroom Training</p>
                                    <img src="{{ asset('assets/frontend/images/orange-right.svg')}}" alt="orange-right">
                                </a>
                                <a class="list open-popup lets-connect-btn"
                                    data-heading="Enquire for - Online Instructor-Led Training"
                                    data-quote="PMP Certification Training - Enquire for - Online Instructor-Led Training">
                                    <span clas="icon"><img src="{{ asset('assets/frontend/images/instructor-icon.svg')}}"
                                            alt="instructor-icon"></span>
                                    <p>Online Instructor-Led Training</p>
                                    <img src="{{ asset('assets/frontend/images/orange-right.svg')}}" alt="orange-right">
                                </a>
                                <a class="list open-popup lets-connect-btn"
                                    data-heading="Enquire for - Online Self-Paced Training"
                                    data-quote="PMP Certification Training - Enquire for - Online Self-Paced Training">
                                    <span clas="icon"><img src="{{ asset('assets/frontend/images/self-paced.svg')}}" alt="self-paced"></span>
                                    <p>Online Self-Paced Training</p>
                                    <img src="{{ asset('assets/frontend/images/orange-right.svg')}}" alt="orange-right">
                                </a>
                            </div>
                            <form class="pmp-exam-form lead-form" id="pmp-other" method="post">
                                <h2>Request For More Information</h2>
                                <div class="form-tabs">
                                    <button type="button" class="tab-btn active" data-type="employer">My Employer</button>
                                    <button type="button" class="tab-btn" data-type="self">My Self</button>
                                </div>
                                <div class="input-fields">
                                    <input type="hidden" name="user_type" value="employer">
                                    <div class="input-container">
                                       <input class="input-tag" type="text" name="name" placeholder="Full Name*" required>
                                    </div>
                                    <div class="input-container">
                                        <input class="input-tag" type="email" name="email" placeholder="Email*" required>
                                    </div>
                                    <div class="input-container">
                                        <input class="input-tag" type="tel" name="mobile" pattern="[6-9]\d{9}" maxlength="10" placeholder="Phone Number*" required>
                                    </div>
                                    <div class="input-container employer-fields">
                                        <input class="input-tag" type="text" name="designation" placeholder="Designation*" required>
                                    </div>
                                    <div class="input-container employer-fields">
                                        <input class="input-tag" type="text" name="company_name" placeholder="Company Name*" required>
                                    </div>
                                    <div class="input-container">
                                        <input class="input-tag" type="text" name="message"
                                            placeholder="Message(Optional)">
                                    </div>
                                </div>
                                <div class="form-consent">
                                    <div class="consent">
                                        <p>The information you provide shall be processed by GetMyPath – a professional
                                            training organization. Your data shall be used by a member of staff to
                                            contact you
                                            regarding your enquiry.</p>
                                    </div>
                                </div>
                                <div class="response-wrapper"></div>
                                <div class="pmp-exam-buttons">
                                    <button type="submit" class="btn-orange">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-container pmp-exam-offers" id="benefits">
            <div class="pmp-exam-container">
                <img src="{{ asset('assets/frontend/images/benefits.png')}}" alt="benefits" width="100%"
                    style="border-radius: 10px; border: 1px solid #f1f1f1;">
                <img src="{{ asset('assets/frontend/images/over-150k.png')}}" alt="over-150k" width="100%" style="margin-top: 20px;">
            </div>
        </section>
        <section class="flex-container pmp-exam-features" id="whyus">
            <div class="pmp-exam-container">
                <div class="feature-outer">
                    <div class="feature-inner">
                        <div class="pmp-exam-heading">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h2>Why Choose Us?</h2>
                        </div>
                        <p>GetMyPath is the premier association for training professionals worldwide. We are Accredited
                            partners of PMI. With our four delivery methods—Instructor led Live (Virtual), Live Video
                            training, One - One, and Online/Self-paced Training — GetMyPath offers training in over
                            150+locations With 300+ courses in all countries.</p>
                        <br>
                        <div class="why-us">
                            <a class="why-items open-popup lets-connect-btn" data-heading="Enquire Now"
                                data-quote="PMP Certification Training - Enquire Now">
                                <div class="content">
                                    <img src="{{ asset('assets/frontend/images/best-price.svg')}}" alt="best-price">
                                    <h4>Best Deal Promise</h4>
                                    <p>There isn't a better deal available anywhere. Send us the offer if you do
                                        discover a lower price, and we'll match it.</p>
                                </div>
                            </a>
                            <a class="why-items open-popup lets-connect-btn" data-heading="Enquire Now"
                                data-quote="PMP Certification Training - Enquire Now">
                                <div class="content">
                                    <img src="{{ asset('assets/frontend/images/cashback.svg')}}" alt="cashback">
                                    <h4>Experienced Trainers</h4>
                                    <p>Our knowledgeable and certified PMP instructors guarantee high-quality
                                        instruction.</p>
                                </div>
                            </a>
                            <a class="why-items open-popup lets-connect-btn" data-heading="Enquire Now"
                                data-quote="PMP Certification Training - Enquire Now">
                                <div class="content">
                                    <img src="{{ asset('assets/frontend/images/running.svg')}}" alt="running">
                                    <h4>Career and Growth</h4>
                                    <p>We promise that every training session, whether it be in-person, online, or both,
                                        will take place on the specified dates.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="pmp-offers">
                        <div class="half-circle">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="white">
                            </div>
                            <div class="inner-circle">
                                <div class="content">
                                    <h4 style="color: #fff;">Want to speak with Our Course Expert...?</h4>
                                </div>
                                <div class="pmp-exam-buttons">
                                    <a class="btn-orange open-popup lets-connect-btn" data-heading="Enquire Now"
                                        data-quote="PMP Certification Training - Enquire Now">
                                        <img src="{{ asset('assets/frontend/images/enquire.svg')}}" alt="enquire">Let's Connect
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-container pmp-exam-testimonials">
            <div class="pmp-exam-container">
                <div class="pmp-testimonial-outer">
                    <div class="pmp-exam-heading">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h2>Client Feedback on PMP® Certification Training</h2>
                    </div>
                    <div class="pmp-exam-buttons">
                        <a class="btn-orange open-popup lets-connect-btn" data-heading="Enquire for Group Discounts"
                            data-quote="PMP Certification Training - Enquire for Group Discounts">
                            <img src="{{ asset('assets/frontend/images/discount.svg')}}" alt="discount">Enquire for Team Discounts
                        </a>
                    </div>
                    <div class="testimonial owl-carousel">

                        <div class="testimonial-inner items">
                            <p class="text">Enrolling in the PMP training program with Getmypath Learning Academy was
                                one of the best decisions I made for my career. The course not only prepared me
                                thoroughly for the PMP Certification Program but also enhanced my project management
                                skills significantly. The interactive nature of the classes and the availability of
                                recorded sessions for review were immensely helpful. The constant support from the
                                Getmypath team created a positive learning environment. I'm now a certified PMP, and I
                                owe it all to the excellent training provided by Getmypath Learning Academy.</p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/sumit_saurabh.png')}}" alt="sumit_saurabh">
                                </div>
                                <div class="name">
                                    <h4>Sumit Saurabh</h4>
                                    <p>Project Associate</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">Completing PMP training with GetMyPath has been pivotal for my career
                                transition. As an HR professional, I sought high-paying roles in project management. The
                                comprehensive course content perfectly complemented my background. What set GetMyPath
                                apart was not just the exceptional training but also the added benefits like placement
                                assistance and resume building. Referring friends through their program extended this
                                opportunity. With this comprehensive support, I'm confident in the doors PMP will open
                                for me. I highly recommend GetMyPath for anyone aiming to excel in project management.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/rajavardhan_dasari.jpg')}}" alt="rajavardhan_dasari">
                                </div>
                                <div class="name">
                                    <h4>Rajavardhan Dasari</h4>
                                    <p>Project Analyst</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">The PM Instructor Visakh demonstrated extensive knowledge of Project
                                Management principles and he gave a well-rounded, robust training. There was a lot of
                                engagement which enabled better understanding of the program outline. I would definitely
                                recommend this program to anyone looking to write the PMP Certification Program.</p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/jesulayomi.jpg')}}" alt="jesulayomi">
                                </div>
                                <div class="name">
                                    <h4>Jesulayomi</h4>
                                    <p>Software Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">Visakh with PMP training is a very informative, interactive and extremely
                                knowledgeable PMP instructor. He exudes with with mastery in the field, and is able to
                                convey the well constructed material clearly. The added connotations to acquiring the
                                right mindset to operate as a successful project manager and towards the correct
                                approach and execution of the test itself, is especially beneficial. Visakh has the
                                agility to convey any material with appropriate analogies, as well as detailed text book
                                style definitions, both of which facilitate an optimal learning environment.</p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/manish_patel.jpg')}}" alt="manish_patel">
                                </div>
                                <div class="name">
                                    <h4>Manish Patel</h4>
                                    <p>Project Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex-container pmp-exam-faqs" id="faqs">
            <div class="pmp-exam-container">
                <div class="faq-expert">
                    <div class="faqs-main">
                        <div class="pmp-exam-heading">
                            <h2>PMP® Certification Course FAQs</h2>
                        </div>
                        <div class="faq-lists">
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What exactly is the PMP certification good for?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg')}}" alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg')}}" alt="up-arrow" class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>For project managers, the Project Management Professional (PMP®) certification is
                                        available from the Project Management Institute (PMI®). The Project Management
                                        Professional certification is the most sought-after and generally acknowledged
                                        professional certificate in project management; it is considered the gold
                                        standard in the field.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>To what extent is PMP training necessary?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg')}}" alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg')}}" alt="up-arrow" class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>The PMP certification is evidence of a person's proficiency and expertise in
                                        project management. A PMP prep course is something that many candidates enrol in
                                        to assist them get ready for the difficult PMP certification. The certification
                                        can be costly to obtain, but in the long run, it is beneficial. The PMP is a
                                        respected and essential certification for anyone interested in a career in
                                        project management.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>How may one obtain a PMP certification?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg')}}" alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg')}}" alt="up-arrow" class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>Verifying your eligibility to take the PMP test is the first step towards
                                        becoming a certified Professional in the PMP programme. 35 hours of instruction
                                        from a PMI Authorised Training Partner are necessary. Your experience with
                                        project management will determine how long it takes you to prepare for the PMP.
                                        When you're prepared, you can sit for and pass the exam to earn your PMP
                                        Professional certification.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What is the typical pay for professionals in project management?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg')}}" alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg')}}" alt="up-arrow" class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>According to PMI's Project Management Salary Survey, those with the PMP
                                        certification make 25% more money on average than those who do not possess the
                                        certification. An average project manager makes $122,000 per year in the median
                                        income.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>Does the PMP course and training material help prepare for the PMP Certification
                                        Program?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg')}}" alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg')}}" alt="up-arrow" class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>You may pass your PMP Certification Program on your first try using the greatest
                                        available resource—GetMyPath's PMP course and training materials. It is a
                                        fantastic option for PMP candidates because it offers helpful practice chances
                                        in addition to covering the entire syllabus for the test. However, if you don't
                                        put in the time and effort to study and practise, just attending a PMP
                                        certification training course won't be sufficient. The success of the course
                                        depends on a number of factors, including your commitment, study habits, project
                                        management background, and the calibre of the course. Start studying early,
                                        carefully follow the step-by-step study plan, obtain help from your mentor when
                                        needed, complete practice questions modelled after PMP Certification Programs,
                                        and solve mock tests to ensure you are well-prepared for the test.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What are the software and system requirements?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg')}}" alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg')}}" alt="up-arrow" class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>Access to an internet browser and Microsoft Word, or a comparable programme, are
                                        the software requirements for this course. In addition, you will require a
                                        Windows desktop or laptop, or a similar setup with fast Internet.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What if I miss a class?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg')}}" alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg')}}" alt="up-arrow" class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>With our easy-to-use learning site, you will have simple access to the class
                                        recordings. This feature makes sure you may go back over any portion of the
                                        lesson at your own speed, making learning adaptable and customised.
                                        Additionally, in order to improve comprehension and coherence, every class
                                        begins with a thorough overview of the subjects discussed in the previous
                                        meeting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experts-main">
                        <div class="pmp-exam-heading">
                            <h2>Meet Our Expert Trainers Who Are Ready to Serve You</h2>
                        </div>
                        <div class="experts-list owl-carousel">
                            <div class="expert-inner items">
                                <div class="expert">
                                    <div class="image">
                                        <img src="{{ asset('assets/frontend/images/expert-1.png')}}" alt="expert-1">
                                    </div>
                                    <div class="expert-name">
                                        <h4>Alecia Albert</h4>
                                        <p>PMP Trainer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    My name is Alecia Albert, and I have been a Project Management Professional (PMP)
                                    trainer for a long time. My area of expertise is providing thorough training courses
                                    that give prospective project managers the abilities and information they need to
                                    become certified PMPs. My hands-on, engaging approach to teaching places a strong
                                    emphasis on practical applications, making sure that students are equipped with the
                                    skills they need to succeed in project management employment.
                                </p>
                            </div>
                            <div class="expert-inner items">
                                <div class="expert">
                                    <div class="image">
                                        <img src="{{ asset('assets/frontend/images/expert-2.png')}}" alt="expert-2">
                                    </div>
                                    <div class="expert-name">
                                        <h4>Martin Bernard</h4>
                                        <p>PMP Trainer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    I am Martin Bernard. With extensive project management experience and as a certified
                                    Project Management Professional (PMP) trainer, I specialize in providing
                                    comprehensive training programs that equip aspiring project managers with the skills
                                    and knowledge necessary to achieve PMP certification. My teaching approach is
                                    interactive and practical, focusing on real-world applications to help students
                                    excel in their project management careers.
                                </p>
                            </div>
                            <div class="expert-inner items">
                                <div class="expert">
                                    <div class="image">
                                        <img src="{{ asset('assets/frontend/images/expert-3.png')}}" alt="expert-3">
                                    </div>
                                    <div class="expert-name">
                                        <h4>Jack Ramirez</h4>
                                        <p>PMP Trainer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    I'm Jack Ramirez, a seasoned trainer for the Project Management Professional (PMP)
                                    with a wealth of knowledge in the industry. My main goal is to provide comprehensive
                                    training programs that equip prospective project managers with the essential
                                    abilities and information required to earn the PMP certification. To make sure
                                    students are prepared to thrive in their project management professions, I emphasize
                                    real-world applications in my highly interactive and practical teaching style.
                                </p>
                            </div>
                        </div>
                        <div class="pmp-exam-buttons position-fixed">
                            <a class="btn-orange open-popup lets-connect-btn"
                                data-heading="Speak to Career Consultant"
                                data-quote="PMP Certification Training - Speak to Career Consultant">
                                <img src="{{ asset('assets/frontend/images/message.svg')}}" alt="message">Speak to Course Advisor
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <span class="pmp-dark-overlay"></span>
        <div class="enq-popup-section"></div>
    </main>
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-content">
            <span class="close-btn-sec" id="closePopup">×</span>
            <div class="video-container">
                <iframe id="youtubeVideo" width="560" height="315" src="" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/frontend/js/jquery.ba-throttle-debounce.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/count.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script>
        const country = 'India';
    </script>
    <script src="{{ asset('assets/frontend/js/main.js')}}"></script>
    <script>
        function toggleMenu() {
            event.stopPropagation();
            $("#menuToggle").toggleClass('active');
        }
        circleProgress();

        function circleProgress() {
            setProgress(18, $('.graph-circle .graph-ring'), 45);
        }

        function setProgress(percent, svg, radius) {
            var circumference = radius * 2 * Math.PI;
            var firstcircle = svg.find('circle').last();
            firstcircle.css({
                'strokeDasharray': circumference
            });
            firstcircle.css('strokeDashoffset', circumference);
            const firstoffset = circumference - percent / 100 * circumference;
            firstcircle.css('strokeDashoffset', firstoffset);
            var span = document.createElementNS('http://www.w3.org/2000/svg', 'text');
            span.setAttribute('x', radius - 12);
            span.setAttribute('y', radius + 12);
            span.setAttribute('fill', '#000');
            svg.append(span);
        }

        function counter() {
            $('.count-number').countTo({
                refreshInterval: 2
            });
        };
        $(document).ready(function() {
            counter(),
                window.onscroll = function() {
                    myFunction()
                };
            var header = document.getElementById("fixheader-pmp");

            function myFunction() {
                if ($(this).scrollTop() > 500 && $(this).width() > 320) {
                    header.classList.add("pmp-exam-sticky");
                } else {
                    header.classList.remove("pmp-exam-sticky");
                }
            }
            $('.smoothscroll').on('click', function(e) {
                e.preventDefault();
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1200, function() {
                        window.location.hash = hash;
                    });
                }
            });
            var endDate = new Date("november 18, 2020").getTime();
            var checkDate = new Date(endDate);
            var todayDate = new Date().getTime();
            var diffDate = (checkDate - todayDate) / (1000 * 60 * 60 * 24);
            var daysLeft = Math.round(diffDate);
            var countDownDate = "";
            if (daysLeft < 0) {
                var newAddValue = Math.abs(daysLeft) + 5;
                checkDate.setDate(checkDate.getDate() + newAddValue);
                countDownDate = new Date(checkDate).getTime();
            } else if (daysLeft > 1) {
                countDownDate = new Date(endDate).getTime();
            } else {
                checkDate.setDate(checkDate.getDate() + 7);
                countDownDate = new Date(checkDate).getTime();
            }

            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("day").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("day").innerHTML = '0';
                    document.getElementById("hours").innerHTML = '0';
                    document.getElementById("minutes").innerHTML = '0';
                    document.getElementById("seconds").innerHTML = '0';
                }
            }, 1000);

            var footer = $('.pmp-exam-footer');
            if (footer.length) {
                $(window).scroll($.throttle(100, function() {
                    var scroll = $(window).scrollTop(),
                        itemHeight = footer.height();
                    highlightStart = footer.offset().top - 600;
                    highlightEnd = footer.offset().top + itemHeight / 4;
                    if (scroll > highlightStart & scroll < highlightEnd) {
                        $(footer).addClass("pmp-exam-dark");
                        $('span.pmp-dark-overlay').addClass("dark-overlay-active");
                        $('body').addClass("pmp-exam-overflow");
                    } else {
                        $(footer).removeClass("pmp-exam-dark");
                        $('span.pmp-dark-overlay').removeClass("dark-overlay-active");
                        $('body').removeClass("pmp-exam-overflow");
                    }
                }));
            }
            $('.owl-carousel.experts-list').owlCarousel({
                loop: true,
                slideSpeed: 500,
                autoplaySpeed: 700,
                autoplay: true,
                margin: 10,
                stagePadding: 40,
                autoWidth: true,
                nav: false,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        dots: true
                    },
                    768: {
                        items: 1,
                        dots: true
                    },
                    1030: {
                        items: 2,
                        dots: true
                    }
                }
            });
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                slideSpeed: 500,
                autoplaySpeed: 700,
                autoplay: true,
                autoplayHoverPause: true,
                margin: 0,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        dots: true
                    },
                    768: {
                        items: 2,
                        dots: true
                    },
                    1030: {
                        items: 3,
                        dots: true
                    }
                }
            });
            $(".faq-head").click(function() {
                $(this).toggleClass("active");
                $(this).find('.ans').slideToggle();
                $(this).siblings(".faq-head").removeClass("active").find('.ans').slideUp();
            });



            const watchDemoBtn = document.getElementById('watchDemoBtn');
            const popupOverlay = document.getElementById('popupOverlay');
            const closePopup = document.getElementById('closePopup');
            const youtubeVideo = document.getElementById('youtubeVideo');
            const videoId = "hH0h0HqFJcs";
            watchDemoBtn.addEventListener('click', function() {
                youtubeVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                popupOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
            closePopup.addEventListener('click', function() {
                popupOverlay.classList.remove('active');
                youtubeVideo.src = '';
                document.body.style.overflow = 'auto';
            });
            popupOverlay.addEventListener('click', function(e) {
                if (e.target === popupOverlay) {
                    closePopup.click();
                }
            });
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && popupOverlay.classList.contains('active')) {
                    closePopup.click();
                }
            });
        });
    </script>

</body>

</html>
