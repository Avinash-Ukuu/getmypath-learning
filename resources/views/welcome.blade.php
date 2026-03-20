<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="PMP Certification Course will enhance your career with global recognition, increased earning potential, and improved project management skills. Register now!">
    <title>PMP Certification Training Course - Project Management Professional</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/contact-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pmp-offer-new.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/newCss/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/newCss/form.css') }}">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-269WEB7TTR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-269WEB7TTR');
    </script>
    <style>
        .tab-btn {
            padding: 10px 20px;
            border: 1px solid #ccc;
            background: #f5f5f5;
            cursor: pointer;
            margin-right: 5px;
        }

        .tab-btn.active {
            background: #ff6b00;
            color: #fff;
            border-color: #ff6b00;
        }

        .watch-demo-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            background: linear-gradient(to right, #FF416C, #FF4B2B);
            color: white;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 75, 43, 0.4);
            width: fit-content;
            margin-bottom: 10px;
        }

        .watch-demo-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 75, 43, 0.6);
            background: linear-gradient(to right, #FF4B2B, #FF416C);
        }

        .watch-demo-btn:active {
            transform: translateY(1px);
        }

        .watch-demo-btn i {
            margin-right: 10px;
            font-size: 20px;
        }

        .form-wrapper.active-form,
        .form-wrapper-b.active-form {
            top: 80px;
            transform: rotateX(0deg);
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        .popup-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        .popup-content {
            position: relative;
            width: 80%;
            max-width: 800px;
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }
        .popup-overlay.active .popup-content {
            transform: scale(1);
        }
        .close-btn-sec {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 30px;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .close-btn-sec:hover {
            color: #FF416C;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
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
                    <button type="button" class="tab-btn active" style="color: black" data-type="employer">My
                        Employer</button>
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
                        <input type="text" name="mobile" pattern="[6-9]\d{9}" maxlength="10" required
                            placeholder="Phone Number*">
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
                        <img src="{{ asset('assets/frontend/images/Logo.png') }}" alt="getmypathlogo">
                    </a>
                    <div class="menu" id="menuToggle" onclick="toggleMenu()">
                        <img src="{{ asset('assets/frontend/images/menu.svg') }}" alt="menu">
                    </div>
                    <div class="menu-links">
                        <a href="javascript:void(0)" class="menu-toggle" onclick="toggleMenu()">
                            <img src="{{ asset('assets/frontend/images/back.svg') }}" alt="back">
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
                                <a href="tel:+918037244591" class="btn-white ">
                                    <img src="{{ asset('assets/frontend/images/call-us.svg') }}" alt="call-us">+971
                                    563524051 </a>
                                <a class="btn-orange open-popup enquiryJS" data-heading="Download Syllabus"
                                    data-quote="PMP Certification Training" data-enquirytypedownload="2000">
                                    <img src="{{ asset('assets/frontend/images/quote.svg') }}"
                                        alt="quote">Download
                                    Syllabus
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pmp-exam-container">
                <div class="banner-section">
                    <div class="banner-content">
                        <img src="{{ asset('assets/frontend/images/pmp-logo.svg') }}" alt="pmp-logo"
                            class="pmp-exam-logo">
                        <div class="left-content">
                            <h1>
                                PMP Certification Training Course
                            </h1>
                            <p>PMP Certification is the simplest way for Project Managers to advance their careers and
                                to validate their Project Management skills. You can prepare for the PMP Certification
                                Program by learning from the Project Management experts in GetMyPath’s PMP Certification
                                Training Course in India. GetMyPath is globally recognised as the Market Leader in
                                training Project Managers. Our "Project Management Team" comprises over 50 leading
                                Project Management Professionals who have expertise in the Project Management Industry.
                                Our instructors have developed a unique teaching style to help aspiring candidates to
                                master the art of Project Management.</p>
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
                            <div class="pmp-exam-buttons">
                                <a class="btn-orange open-popup enquiryJS" data-heading="Enquire Now"
                                    data-quote="PMP Certification Training - Enquire Now">
                                    <img src="{{ asset('assets/frontend/images/discount.svg') }}" alt="discount">Up
                                    to
                                    40% Off - Limited Time Offer
                                </a>
                                <a class="btn-white open-popup enquiryJS" data-heading="Drop a Query"
                                    data-quote="PMP Certification Training - Drop a Query">
                                    <img src="{{ asset('assets/frontend/images/quote-blue.svg') }}"
                                        alt="quote-blue">Drop a Query
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-graph">
                        <span><img src="{{ asset('assets/frontend/images/graph-image.png') }}" alt=""></span>
                        <div class="graph-percent">
                            <div class="graph-circle">
                                <svg class="progress-ring graph-ring">
                                    <circle class="circle-default" fill="white" r="43" cx="49"
                                        cy="49">
                                    </circle>
                                    <circle class="progress-ring__circle" fill="transparent" r="43" cx="47.5"
                                        cy="47.5">
                                    </circle>
                                </svg>
                            </div>
                            <span class="c-out">+<h3 class="count-number" data-to="23" data-speed="250">23</h3>
                                %</span>
                            <p>PMP® Certified Managers globally earned an average of 23% more than Non-PMP Certified
                                Managers.</p>
                        </div>
                    </div>
                    <!-- <div class="round-shape"></div> -->
                    <div class="animation-circle-inverse"><span></span><span></span><span></span></div>
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
                        <div class="fact-image"><img src="{{ asset('assets/frontend/images/course.svg') }}"
                                alt="course"></div>
                        <div class="name">
                            <span>
                                <h2 class="count-number" data-to="100" data-speed="3000"></h2>+
                            </span>
                            <p>Courses Running Daily</p>
                        </div>
                    </div>
                    <div class="facts">
                        <div class="fact-image"><img src="{{ asset('assets/frontend/images/location.svg') }}"
                                alt="location"></div>
                        <div class="name">
                            <span>
                                <h2 class="count-number" data-to="490" data-speed="3000"></h2>+
                            </span>
                            <p>Locations Worldwide</p>
                        </div>

                    </div>
                    <div class="facts">
                        <div class="fact-image"><img src="{{ asset('assets/frontend/images/trainer.svg') }}"
                                alt="trainer"></div>
                        <div class="name">
                            <span>
                                <h2 class="count-number" data-to="2" data-speed="500"></h2>M+
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
                                manager for any kind of project,
                                regardless of size, scope, or budget, with our PMP Certification Training in India.</p>
                            <br>
                            <p>GetMyPath is acknowledged as the Industry Leader for Project Managers seeking to advance
                                their careers. We ensure that you will pass the PMP Certification Program on your first
                                try by
                                providing you with comprehensive preparation for the exam from our very engaging
                                instructors.</p>
                            <br>
                            <p>We provide PMP Certification Training services to businesses, public sector
                                organizations, government agencies, international corporations, and private citizens.
                                Our subject matter specialists can make their subjects interesting and memorable by
                                drawing on their extensive industry knowledge. This results in an invaluable and
                                unforgettable learning experience. Our committed team works tirelessly to offer clients
                                who want the
                                ease and comfort of working in their familiar surroundings in-house PMP Certification
                                Training in India.</p>
                            <div class="pmp-exam-buttons">
                                <a class="btn-orange open-popup enquiryJS" data-heading="Need More Information"
                                    data-quote="PMP Certification Training - Need More Information">
                                    <img src="{{ asset('assets/frontend/images/information.svg') }}"
                                        alt="information">Need More
                                    Information
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
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
                                            <p>Project Leadership Skills</p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
                                            <p>Influencing and Negotiation Skills</p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
                                            <p>Budget and Schedules Management </p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
                                            <p>Risk Management Skills</p>
                                        </li>
                                    </ul>
                                    <div class="middle-content">
                                        <div class="inner-box">
                                            <p>Average Salary Per Annum</p>
                                            <h3>$120k</h3>
                                            <span><img src="{{ asset('assets/frontend/images/salary.svg') }}"
                                                    alt="salary"></span>
                                        </div>
                                        <div class="inner-box">
                                            <p>Expected Job Growth Rate</p>
                                            <h3>23%</h3>
                                            <span><img src="{{ asset('assets/frontend/images/growth.svg') }}"
                                                    alt="growth"></span>
                                        </div>
                                        <div class="inner-box">
                                            <p>I want to know about Dates & Prices and Duration of PMP Certification
                                                Program</p>
                                            <div class="pmp-exam-buttons">
                                                <a class="btn-orange open-popup enquiryJS" data-heading="Enquire Now"
                                                    data-quote="PMP Certification Training - Enquire Now">
                                                    <img src="{{ asset('assets/frontend/images/enquire.svg') }}"
                                                        alt="enquire">Enquire Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="skill-list">
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
                                            <p>Critical and Problem-solving Thinking</p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
                                            <p>Successfully Deliver Projects On-time </p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
                                            <p>Quality and Task Management </p>
                                        </li>
                                        <li><img src="{{ asset('assets/frontend/images/reading-book.svg') }}"
                                                alt="reading-book">
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
                                <h2>What's Included in Our PMP® Exam Prep Certification Course?</h2>
                            </div>
                            <div class="included-list">
                                <ul class="list">
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>Online Live Instructor Led, Online Instructor Led Video, One To One and
                                            Online Self Paced
                                        </p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>Very high pass rates with our PMP® Certification Course</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>100% Best Price guarantee</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>36 PDU's required by PMI®</p>
                                    </li>

                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>Over 1,000 PMP® Certification Program sample questions</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>Course completion certificate</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>Realistic 200 question mock PMP® Certification Program</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>Flexible schedule – weekday and weekend</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/frontend/images/tick.svg') }}" alt="tick">
                                        <p>30% discount code off your next course provided after you enroll</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="pmp-exam-buttons">
                                <a class="btn-orange open-popup enquiryJS" data-heading="Enquire now"
                                    data-quote="PMP Certification Training - Enquire now">
                                    <img src="{{ asset('assets/frontend/images/find.svg') }}" alt="fnd">Enquire
                                    now
                                </a>
                            </div>

                        </div>
                        <div class="pmp-steps">
                            <div class="pmp-exam-heading">
                                <div class="title-effect">
                                    <div class="bar bar-top"></div>
                                    <div class="bar bar-right"></div>
                                    <div class="bar bar-bottom"></div>
                                    <div class="bar bar-left"></div>
                                </div>
                                <h2>Steps to Become PMP® Certified Professional</h2>
                            </div>
                            <div class="image">
                                <img src="{{ asset('assets/frontend/images/pmp-steps.jpg') }}" alt="pmp-steps">
                            </div>
                        </div>
                        <div class="pmp-offers">
                            <div class="content-outer">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/limit.svg') }}" alt="limit">
                                </div>
                                <div class="content">
                                    <h2>
                                        Limited Offer
                                    </h2>
                                    <p>
                                        Buy 2 Courses and get a complimentary course for FREE
                                    </p>
                                </div>
                            </div>
                            <div class="pmp-exam-buttons">
                                <a class="btn-orange open-popup enquiryJS" data-heading="Hurry Up"
                                    data-quote="PMP Certification Training - Hurry Up">
                                    <img src="{{ asset('assets/frontend/images/hurry.svg') }}" alt="hurry">Hurry
                                    Up
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pmp-right-form">
                        <div class="input-content">
                            <div class="list-main">
                                <a class="list open-popup enquiryJS" data-heading="Enquire for - Classroom Training"
                                    data-quote="PMP Certification Training - Enquire for - Classroom Training">
                                    <span clas="icon"><img
                                            src="{{ asset('assets/frontend/images/classroom.svg') }}"
                                            alt="classroom"></span>
                                    <p>Classroom Training</p>
                                    <img src="{{ asset('assets/frontend/images/orange-right.svg') }}"
                                        alt="orange-right">
                                </a>
                                <a class="list open-popup enquiryJS"
                                    data-heading="Enquire for - Online Instructor-Led Training"
                                    data-quote="PMP Certification Training - Enquire for - Online Instructor-Led Training">
                                    <span clas="icon"><img
                                            src="{{ asset('assets/frontend/images/instructor-icon.svg') }}"
                                            alt="instructor-icon"></span>
                                    <p>Online Instructor-Led Training</p>
                                    <img src="{{ asset('assets/frontend/images/orange-right.svg') }}"
                                        alt="orange-right">
                                </a>
                                <a class="list open-popup enquiryJS"
                                    data-heading="Enquire for - Online Self-Paced Training"
                                    data-quote="PMP Certification Training - Enquire for - Online Self-Paced Training">
                                    <span clas="icon"><img
                                            src="{{ asset('assets/frontend/images/self-paced.svg') }}"
                                            alt="self-paced"></span>
                                    <p>Online Self-Paced Training</p>
                                    <img src="{{ asset('assets/frontend/images/orange-right.svg') }}"
                                        alt="orange-right">
                                </a>
                            </div>
                            <form class="pmp-exam-form" id="pmp-other" method="post">
                                <h2>Request More Information</h2>
                                <div class="tabs">
                                    <button type="button" class="tab-btn active" data-type="employer">My
                                        Employer</button>
                                    <button type="button" class="tab-btn" data-type="self">My Self</button>
                                </div>
                                <input type="hidden" id="userType" value="employer">
                                <div class="input-fields">
                                    <div class="input-container">
                                        <input class="input-tag" type="text" name="name" id="firstNameOther"
                                            placeholder="Name*" autocomplete="off">
                                    </div>
                                    <div class="input-container">
                                        <input class="input-tag" type="email" name="email" id="emailOther"
                                            placeholder="Email*" autocomplete="off">
                                    </div>
                                    <div class="input-container">
                                        <input class="input-tag" type="number" style="width: auto" name="mobile"
                                            id="phoneOther" placeholder="Phone Number*" autocomplete="off">
                                    </div>
                                    <div id="employerFields">
                                        <div class="input-container">
                                            <input class="input-tag" type="text" style="width: auto"
                                                name="company_name" id="company_name" placeholder="Company"
                                                autocomplete="off">
                                        </div>
                                        <div class="input-container">
                                            <input class="input-tag" style="width: auto" type="text"
                                                name="designation" id="designation" placeholder="Designation*"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="input-container">
                                        <input class="input-tag" type="text" name="message"
                                            placeholder="Message(Optional)" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-consent">
                                    <div class="consent">
                                        <p>The information you provide shall be processed by GetMyPath – a professional
                                            training organization.
                                            Your data shall be used by a member of staff to contact you regarding your
                                            enquiry.</p>
                                    </div>
                                </div>
                                <div class="pmp-exam-buttons">
                                    <button class="btn-orange">Submit</button>
                                </div>
                                <div id="formMessage" style="display:none; color:green; margin-top:10px;">
                                    Form submitted successfully!
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="flex-container pmp-exam-offers" id="benefits">
            <div class="pmp-exam-container">
                <div class="exam-offers">
                    <div class="main-list">
                        <div class="pmp-exam-heading">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h2>Benefits of Becoming a PMP® Certified Professional</h2>
                        </div>
                        <p>The Project Management Professional (PMP®) credential is a widely recognised and renowned
                            certification that demonstrates project management proficiency, adeptness, efficacy, and
                            professionalism. Enrolling in PMP Certification Training can help you enhance your skills
                            and better prepare you for the PMP Exam. Below we list the top 8 reasons to get PMP®
                            Certified:</p>
                        <div class="exam-container">
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/leadership.svg') }}"
                                        alt="leadership"></span>
                                <p>Stand out from the crowd </p>
                            </div>
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/communication.svg') }}"
                                        alt="communication"></span>
                                <p>Globally recognised certification</p>
                            </div>
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/project.svg') }}"
                                        alt="project"></span>
                                <p>Better job opportunities </p>
                            </div>
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/versatality.svg') }}"
                                        alt="versatality"></span>
                                <p>Increases salary potential</p>
                            </div>
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/salary-potential.svg') }}"
                                        alt="salary-potential"></span>
                                <p>Handle challenging projects</p>
                            </div>
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/job-search.svg') }}"
                                        alt="job-search"></span>
                                <p>Upgrades your leadership skills</p>
                            </div>
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/security.svg') }}"
                                        alt="security"></span>
                                <p>More weight to your resume</p>
                            </div>
                            <div class="pmp-point">
                                <span><img src="{{ asset('assets/frontend/images/accom.svg') }}"
                                        alt="accom"></span>
                                <p>Personal accomplishment </p>
                            </div>
                        </div>

                    </div>
                    <div class="limited-offers">
                        <div class="offer-bg">
                            <img src="{{ asset('assets/frontend/images/offers-bg.png') }}" alt="offers-bg">
                        </div>
                        <div class="limited-content">
                            <h2>Limited Budget?</h2>
                            <p>We understand that some people might have a limited budget.</p>
                            <ul>
                                <li>
                                    <p>To help and support our clients we provide a limited number of daily discount
                                        codes.</p>
                                </li>
                                <li>
                                    <p>Hurry Up! It’s first-come, first-serve!</p>
                                </li>
                            </ul>
                            <p class="count">
                                <span>44 Remaining</span>
                                <span>(Live Counter)</span>
                            </p>

                        </div>
                        <div class="pmp-exam-buttons">
                            <a class="btn-orange open-popup enquiryJS" data-heading="Enquire for Daily Discounts"
                                data-quote="PMP Certification Training - Enquire for Daily Discounts">
                                <img src="{{ asset('assets/frontend/images/quote.svg') }}" alt="quote">Enquire for
                                Daily
                                Discounts
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="flex-container pmp-exam-global">
            <div class="pmp-exam-container">
                <div class="global-provider">
                    <div class="text">
                        <h2>
                            The Largest Global Training Provider
                        </h2>
                        <p>
                            Learn Project Management from the #1 Training Provider in the world. Best Price Guarantee!
                        </p>
                    </div>
                    <div class="pmp-exam-buttons">
                        <a class="btn-orange open-popup enquiryJS" data-heading="Get A Quote"
                            data-quote="PMP Certification Training - Get A Quote">
                            <img src="{{ asset('assets/frontend/images/quote.svg') }}" alt="quote">Get A Quote
                        </a>
                    </div>
                </div>
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
                        <p>Get My Path is the World's Leading Association for training professionals. Get
                            My Path provides training in 490+ locations in 190+ countries, covering 3000
                            subjects with four delivery methods: Classroom, Live Classroom (Virtual), Onsite/Corporate,
                            and Online/Self-paced E-Learning.</p>
                        <p class="text"> We are partners of PMI, Scaled Agile, PeopleCert, APMG, Microsoft, BCS, and
                            many more. </p>

                        <div class="why-us">
                            <a class="why-items open-popup enquiryJS" data-heading="Enquire Now"
                                data-quote="PMP Certification Training - Enquire Now">
                                <div class="content">
                                    <img src="{{ asset('assets/frontend/images/best-price.svg') }}" alt="best-price">
                                    <h4>Best Price Guarantee</h4>
                                    <!-- <p>Gives you the confidence that we will support your</p> -->
                                    <p>You won't find a better value in the marketplace. If you do find a lower price,
                                        send us the offer, and we'll beat it.</p>
                                </div>
                            </a>
                            <a class="why-items open-popup enquiryJS" data-heading="Enquire Now"
                                data-quote="PMP Certification Training - Enquire Now">
                                <div class="content">
                                    <img src="{{ asset('assets/frontend/images/cashback.svg') }}" alt="cashback">
                                    <h4>Experience Trainers</h4>
                                    <p>Our PMP Certified trainers are experienced and ensure quality training.</p>
                                </div>
                            </a>
                            <a class="why-items open-popup enquiryJS" data-heading="Enquire Now"
                                data-quote="PMP Certification Training - Enquire Now">
                                <div class="content">
                                    <img src="{{ asset('assets/frontend/images/running.svg') }}" alt="running">
                                    <h4>Guaranteed to Run</h4>
                                    <!-- <p>Classes are 100% guaranteed to run on the dates</p> -->
                                    <p>Our all training classes are 100% guaranteed to run on the dates provided,
                                        whether they are classroom, virtual or in-house.</p>

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
                                    <h4>Military & Government discounts available!</h4>
                                    <p>
                                        Current & ex-uniformed professionals get an extra 10% discount on PMP®.
                                    </p>

                                </div>
                                <div class="pmp-exam-buttons">
                                    <a class="btn-orange open-popup enquiryJS" data-heading="Enquire Now"
                                        data-quote="PMP Certification Training - Enquire Now">
                                        <img src="{{ asset('assets/frontend/images/enquire.svg') }}"
                                            alt="enquire">Enquire Now
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
                        <a class="btn-orange open-popup enquiryJS" data-heading="Enquire for Group Discounts"
                            data-quote="PMP Certification Training - Enquire for Group Discounts">
                            <img src="{{ asset('assets/frontend/images/discount.svg') }}" alt="discount">Enquire for
                            Group
                            Discounts
                        </a>
                    </div>
                    <div class="testimonial owl-carousel">

                        <div class="testimonial-inner items">
                            <p class="text">
                                Last week I attended this course. I will recommend this PMP Course to those who wish to
                                fully understand the PMP processes and requirements to pass the exam. I found the
                                lecturer to be a real expert in his field with the added ability to contextualise each
                                process and area of study by applying to real-life examples. I appeared in my exam
                                yesterday.Every question I saw was already covered in course material and was well
                                taught by the trainer. It was a first-class course delivered by a knowledgeable lecturer
                                whom I would wholeheartedly recommend.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-2.png') }}"
                                        alt="testimonial-2">
                                </div>
                                <div class="name">
                                    <h4>Paul Allen</h4>
                                    <p>Project Manager</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                Took the PMP Course last week, the instructor was very thorough and emphasised on
                                understanding the material. He covered a lot of topics practically, which can be applied
                                in my current job role. He provided solid examples and supporting references. This PMP
                                Course was interactive to hold interest in the material. I must admit that I was a bit
                                sceptical since pricing runs much lower than other institutes; however, it is by far of
                                great value! Based on my positive experience, I will be surely recommending
                                Get My Path to my colleagues.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-3.png') }}"
                                        alt="testimonial-3">
                                </div>
                                <div class="name">
                                    <h4>Celeste Griffin</h4>
                                    <p>Project Associate</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                I had been thinking about doing PMP certification for a while. After checking out
                                reviews, I approached Get My Path about doing the PMP Certification course. I got
                                a really good package, it was a four-day intensive course, and the tutor William Davis
                                was amazing. He helped me to understand the PMI PMBOK inside out and made the week-long
                                course a great learning experience. I appeared in the exam the following Tuesday, and I
                                PASSED. I am very pleased with the course and the material, and it helped me a lot to
                                achieve a key milestone in my career.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-4.png') }}"
                                        alt="testimonial-4">
                                </div>
                                <div class="name">
                                    <h4>Jay Brown</h4>
                                    <p>Project Analyst</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                I'm very happy that I passed my PMP Exam in the first try. In the beginning, I was
                                completely unfamiliar with all the terms of PMP Exams but thanks to Get My Path
                                and Charles, they helped me a lot. Charles was my trainer, and he focused on
                                making me understand the material with the exam perspective. He also gave solid
                                real-life examples and supporting references, showing his mastery of the content. I will
                                recommend this course to those who mainly want to pass the PMP Exam—looking forward to
                                attending the PRINCE2 training course from Get My Path.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-5.png') }}"
                                        alt="testimonial-5">
                                </div>
                                <div class="name">
                                    <h4>Mark Scott</h4>
                                    <p>Software Developer</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                It was a great week training for PMP Certification with Get My Path. The
                                trainer kept the course moving, added humour and was a fountain of knowledge. She had
                                time for everyone and made us feel welcomed and comfortable during the course. She
                                covered every corner of the course material and answered our questions. I really feel
                                confident about the exam that I will attend next week. To me, the whole process was a
                                delight from start to finish. I already recommended this course to one of my friends,
                                and he will attend the PMP Training Course next month.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-6.png') }}"
                                        alt="testimonial-6">
                                </div>
                                <div class="name">
                                    <h4>David Smith</h4>
                                    <p>Project Coordinator</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                I recently completed Get My Path's PMP Course, which I found excellent. The
                                content of the course was well made and professionally presented from a very
                                knowledgeable and experienced instructor. It was pitched at the right level for all
                                participants with great interaction between the presenter and all attendees. The
                                instructor was also very engaging and gave relevant real-life examples which helped us
                                understand all the topics easily. I will recommend this course to anyone interested in
                                developing their skills in the project management area.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-7.png') }}"
                                        alt="testimonial-7">
                                </div>
                                <div class="name">
                                    <h4>Peter Clark</h4>
                                    <p>IT Project Manager</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                I completed the PMP Boot Camp course this week. My experience was really good as the
                                trainer went above and beyond to ensure the course was interactive and interesting. He
                                added a lot of his personal touches to the course to make sure we understand each
                                concept thoroughly. I would recommend it if you want to pass the PMP Exam. Overall a
                                worthwhile course, getmypath was easy to communicate with, gave excellent resources
                                before the
                                course and provided ample information about the course beforehand, location and
                                facilities were also excellent.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-8.png') }}"
                                        alt="testimonial-8">
                                </div>
                                <div class="name">
                                    <h4>Neal Rodrigue</h4>
                                    <p>Team Leader</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                Great course, great trainer, very knowledgeable on all areas of Project Management. The
                                material was also great, and I would particularly like to mention the trainer Brian, he
                                was very engaging, knowledgeable, and gave relevant real-life examples which helped me
                                to pass the exam with no issues. The credit also goes to Get My Path's training
                                material. I would recommend this course to anyone who is looking forward to take the PMP
                                exam as I also got a very good score—looking forward to attend more courses from this
                                training institute.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-9.png') }}"
                                        alt="testimonial-9">
                                </div>
                                <div class="name">
                                    <h4>Nicole Lindsey</h4>
                                    <p>Project Assistant</p>
                                </div>

                            </div>

                        </div>
                        <div class="testimonial-inner items">
                            <p class="text">
                                The PMP Boot-camp trainer was excellent. She had in-depth industry experience and vast
                                knowledge. She brought enthusiasm, energy and humour throughout the training. Course
                                material provided by Get My Path was really well explained. The material
                                covers all the aspects that are required to pass the exam, and it is even arranged
                                properly for all types of candidates. It was carried out over Zoom and was a great
                                course with lots of interaction. I would recommend the course to any individual who
                                wants to improve their chances to get certified.
                            </p>
                            <div class="author">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/testimonial-1.png') }}"
                                        alt="testimonial-1">
                                </div>
                                <div class="name">
                                    <h4>Marten Robinson</h4>
                                    <p>Project Engineer</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="flex-container pmp-exam-footer" id="contact">
            <div class="pmp-exam-container">
                <div class="footer-outer">
                    <div class="footer-inner">
                        <h2>
                            Didn't Find What You're Looking For?
                        </h2>
                        <p>
                            If you didn't find your ideal course or are facing any difficulty in choosing which course
                            suits you best, we are here to help you.
                        </p>
                        <div class="pmp-exam-buttons">
                            <a class="btn-orange open-popup enquiryJS" data-heading="Contact Us"
                                data-quote="PMP Certification Training - Contact Us">
                                <img src="{{ asset('assets/frontend/images/contact-us.svg') }}"
                                    alt="contact-us">Contact Us
                            </a>
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
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h2>PMP® Certification Course FAQs</h2>
                        </div>
                        <div class="faq-lists">
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What exactly is the PMP certification good for?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg') }}"
                                            alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg') }}" alt="up-arrow"
                                            class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>
                                        For project managers, the Project Management
                                        Professional (PMP®) certification is available from the Project Management
                                        Institute (PMI®). The Project Management Professional certification is the
                                        most sought-after and generally acknowledged professional
                                        certificate in project management; it is considered the gold standard in the
                                        field.
                                    </p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>To what extent is PMP training necessary?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg') }}"
                                            alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg') }}" alt="up-arrow"
                                            class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>The PMP certification is evidence of a person's proficiency and expertise in
                                        project management. A PMP prep course is something that many candidates enrol in
                                        to assist them get ready for the difficult PMP certification. The certification
                                        can be costly to obtain, but in the long run, it is beneficial.
                                        The PMP is a respected and essential certification for anyone interested in a
                                        career in project management.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>How may one obtain a PMP certification?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg') }}"
                                            alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg') }}" alt="up-arrow"
                                            class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>
                                        Verifying your eligibility to take the PMP test is the first step towards
                                        becoming a certified Professional in the PMP programme. 35 hours of instruction
                                        from a PMI Authorised Training Partner are necessary. Your experience with
                                        project management will determine how long it takes you to prepare for the PMP.
                                        When you're prepared, you can sit for and pass the exam to earn your PMP
                                        Professional certification.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What is the typical pay for professionals in project management?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg') }}"
                                            alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg') }}" alt="up-arrow"
                                            class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>
                                        According to PMI's Project Management Salary Survey, those with the PMP
                                        certification make 25% more money on average than those who do not
                                        possess the certification. An average project manager makes $122,000 per year in
                                        the median income.
                                    </p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>Does the PMP course and training material help prepare for the PMP Certification
                                        Program?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg') }}"
                                            alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg') }}" alt="up-arrow"
                                            class="close">
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
                                        needed, complete practice questions modelled after
                                        PMP Certification Programs, and solve mock tests to ensure you are well-prepared
                                        for the test.</p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What are the software and system requirements?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg') }}"
                                            alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg') }}" alt="up-arrow"
                                            class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>Access to an internet browser and Microsoft Word, or a comparable programme, are
                                        the software requirements for this course.
                                        In addition, you will require a Windows desktop or laptop, or a similar setup
                                        with fast Internet.
                                    </p>
                                </div>
                            </div>
                            <div class="faq-head">
                                <div class="ques">
                                    <h3>What if I miss a class?</h3>
                                    <span>
                                        <img src="{{ asset('assets/frontend/images/down-arrow.svg') }}"
                                            alt="down-arrow" class="open">
                                        <img src="{{ asset('assets/frontend/images/up-arrow.svg') }}" alt="up-arrow"
                                            class="close">
                                    </span>
                                </div>
                                <div class="ans">
                                    <p>With our easy-to-use learning site, you will have simple access to the class
                                        recordings. This feature makes sure you may go back over any portion of the
                                        lesson at your own speed, making learning adaptable and customised.
                                        Additionally, in order to improve comprehension and coherence,
                                        every class begins with a thorough overview of the subjects discussed in the
                                        previous meeting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experts-main">
                        <div class="pmp-exam-heading">
                            <h2>Meet Our Expert Team Who Are Ready to Serve You</h2>
                        </div>
                        <div class="experts-list owl-carousel">

                            <div class="expert-inner items">
                                <div class="expert">
                                    <div class="image">
                                        <img src="{{ asset('assets/frontend/images/expert-2.png') }}" alt="expert-2">
                                    </div>
                                    <div class="expert-name">
                                        <h4>Harris Smith</h4>
                                        <p>PMP Trainer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    My name is Harris Smith. I love to teach enthusiastic candidates who frequently ask
                                    questions and show interest in learning.
                                    I have vast experience in training cross-functional teams and developing unique
                                    training programs. I have a special
                                    ability to analyse the candidates and give them a recommendation on how they can
                                    improve their project management skills.
                                </p>
                            </div>
                            <div class="expert-inner items">
                                <div class="expert">
                                    <div class="image">
                                        <img src="{{ asset('assets/frontend/images/expert-3.png') }}" alt="expert-3">
                                    </div>
                                    <div class="expert-name">
                                        <h4>Catherine Chloe</h4>
                                        <p>PMP Trainer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    I am Catherine Chloe. I have more than 17 years of project management experience in
                                    the consulting and teaching field.
                                    I have taught PMP® exam prep classes to over 1,000 corporate professionals
                                    worldwide. I always use my project management
                                    experience and real-world examples at the time of teaching.

                                </p>
                            </div>
                            <div class="expert-inner items">
                                <div class="expert">
                                    <div class="image">
                                        <img src="{{ asset('assets/frontend/images/expert-4.png') }}" alt="expert-4">
                                    </div>
                                    <div class="expert-name">
                                        <h4>Jackson Roberts</h4>
                                        <p>PMP Trainer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    My name is Jackson Roberts. I am teaching project management since 2008. I follow
                                    engaging, forward-thinking training delivery methods to better engage ever-evolving
                                    training audience. In training, I always cover every aspect of project management
                                    while teaching, that will help you to pass your PMP® exam in the very first attempt.
                                </p>
                            </div>
                            <div class="expert-inner items">
                                <div class="expert">
                                    <div class="image">
                                        <img src="{{ asset('assets/frontend/images/expert-1.png') }}" alt="expert-1">
                                    </div>
                                    <div class="expert-name">
                                        <h4>James lynn</h4>
                                        <p>PMP Trainer</p>
                                    </div>
                                </div>
                                <p class="text">
                                    Hi, My name is James lynn. I have seven years of project management experience in
                                    various fields. In the PMP® class, I am more than happy to teach you how to
                                    implement project management techniques or skills given in the syllabus of PMP®
                                    Certification course.
                                </p>
                            </div>
                        </div>
                        <div class="pmp-exam-buttons">
                            <a class="btn-orange open-popup enquiryJS" data-heading="Speak to Career Consultant"
                                data-quote="PMP Certification Training - Speak to Career Consultant">
                                <img src="{{ asset('assets/frontend/images/message.svg') }}" alt="message">Speak to
                                Career Consultant
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <span class="pmp-dark-overlay"></span>
        <div class="enq-popup-section"></div>
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
    </main>
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.ba-throttle-debounce.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/count.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gtm.js') }}"></script>
    <script>
        function toggleMenu() {
            event.stopPropagation();
            $("#menuToggle").toggleClass('active');
        }

        //Circle 23%
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
            // span.textContent=percent+"%";
            svg.append(span);
        }

        //counter of facts
        function counter() {
            $('.count-number').countTo({
                refreshInterval: 2
            });
        };

        $(document).ready(function() {

            counter(),

                //fixed header
                window.onscroll = function() {
                    myFunction()
                };
            var header = document.getElementById("fixheader-pmp");
            //var sticky = header.offsetTop;

            function myFunction() {
                if ($(this).scrollTop() > 500 && $(this).width() > 320) {
                    header.classList.add("pmp-exam-sticky");
                } else {
                    header.classList.remove("pmp-exam-sticky");
                }
            }

            //smothscroll
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

            // Set the date we're counting down to
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



            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("day").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("day").innerHTML = '0';
                    document.getElementById("hours").innerHTML = '0';
                    document.getElementById("minutes").innerHTML = '0';
                    document.getElementById("seconds").innerHTML = '0';
                }
            }, 1000);

            //offer---timmer----end

            //footer animation
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

            //FAQ's
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

        let box_faded = document.querySelector('.box-faded');
        let lead_form_wrapper = document.querySelector('#lead-form-wrapper');
        let lets_connect_btn = document.querySelectorAll('.lets-connect-btn, .open-popup');
        let remove_lead_form = document.querySelector('#remove-lead-form');

        if (lets_connect_btn) {
            lets_connect_btn.forEach(element => {
                element.onclick = function() {
                    leadFormPopUp();
                }
            });
        }

        if (remove_lead_form) {
            remove_lead_form.onclick = function() {
                closePopup();
            }
        }

        if (box_faded) {
            box_faded.onclick = function() {
                closePopup();
            }
        }

        function leadFormPopUp() {
            if (lead_form_wrapper) {
                box_faded.style.display = 'block';
                lead_form_wrapper.classList.add('active-form');
                document.body.style.overflow = 'hidden';
            }
        }

        function closePopup() {
            box_faded.style.display = 'none';
            lead_form_wrapper.classList.remove('active-form');
            document.body.style.overflow = 'auto';
        }


        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {

                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                let type = this.getAttribute('data-type');

                document.querySelector('input[name="user_type"]').value = type;

                let employerFields = document.querySelectorAll('.employer-fields');

                employerFields.forEach(el => {
                    let input = el.querySelector('input');
                    if (type === 'self') {
                        el.style.display = 'none';
                        if (input) input.removeAttribute('required');
                    } else {
                        el.style.display = 'block';
                        if (input) input.setAttribute('required', true);
                    }
                });
            });
        });

        document.querySelector('.lead-form').addEventListener('submit', function(e) {
            e.preventDefault();

            let form = this;

            let type = form.querySelector('input[name="user_type"]').value;

            let name = form.querySelector('input[name="name"]').value;
            let email = form.querySelector('input[name="email"]').value;
            let mobile = form.querySelector('input[name="mobile"]').value;
            let message = form.querySelector('textarea[name="message"]').value;

            let designation, company_name;

            if (type === 'self') {
                designation = "student";
                company_name = "my self";
            } else {
                designation = form.querySelector('input[name="designation"]').value;
                company_name = form.querySelector('input[name="company_name"]').value;
            }

            let data = {
                name: name,
                email: email,
                mobile: mobile,
                designation: designation,
                company_name: company_name,
                message: message
            };

            let btn = form.querySelector('button[type="submit"]');
            let responseBox = form.querySelector('.response-wrapper');
            btn.disabled = true;
            btn.innerText = "Submitting...";

            fetch('/api/store-enquiry', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(res => res.json())
                .then(res => {

                    if (res.status) {
                        form.reset();
                        responseBox.innerHTML = `<div class="success">${res.message}</div>`;
                        setTimeout(() => location.reload(), 2000);

                    } else {
                        responseBox.innerHTML = `<div class="error">Something went wrong</div>`;
                    }

                    btn.disabled = false;
                    btn.innerText = "Submit";
                })
                .catch(err => {
                    responseBox.innerHTML = `<div class="error">Server error</div>`;
                    btn.disabled = false;
                    btn.innerText = "Submit";
                });
        });


        $('.tab-btn').click(function() {
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');

            let type = $(this).data('type');
            $('#userType').val(type);

            if (type === 'self') {
                $('#employerFields').hide();
            } else {
                $('#employerFields').show();
            }
        });

        $('#pmp-other').on('submit', function(e) {
            e.preventDefault();

            $('div').removeClass('error-border');
            $('.error').hide();

            var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;

            // Validation
            if ($('#firstNameOther').val() == "") {
                $('#firstNameOther').parent().addClass('error-border');
                return false;
            }

            if ($('#phoneOther').val() == "") {
                $('#phoneOther').parent().addClass('error-border');
                return false;
            }

            if ($('#emailOther').val() == "" || !re.test($('#emailOther').val())) {
                $('#emailOther').parent().addClass('error-border');
                return false;
            }

            // Check user type (Employer / Self)
            let type = $('#userType').val();

            let designation = '';
            let company_name = '';

            if (type === 'self') {
                designation = "student";
                company_name = "my self";
            } else {
                designation = $('#designation').val();
                company_name = $('#company_name').val();
                if (designation == "") {
                    $('#designation').parent().addClass('error-border');
                    return false;
                }
                if (company_name == "") {
                    $('#company_name').parent().addClass('error-border');
                    return false;
                }
            }

            //  Prepare data for API
            let formData = {
                name: $('#firstNameOther').val(),
                email: $('#emailOther').val(),
                mobile: $('#phoneOther').val(),
                designation: designation,
                company_name: company_name,
                message: $('input[name="message"]').val()
            };
            $('.btn-orange').prop('disabled', true).text('Submitting...');

            $.ajax({
                type: 'POST',
                url: '/api/store-enquiry',
                dataType: 'json',
                data: formData,

                success: function(response) {

                    if (response.status) {
                        $('#pmp-other')[0].reset();
                        $('#formMessage').text(response.message).fadeIn();
                        $('.btn-orange').prop('disabled', false).text('Submit');
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    } else {
                        $('.bigform').html('Something went wrong');
                    }
                },

                error: function(xhr) {
                    $('.btn-orange').prop('disabled', false).text('Submit');
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;

                        let msg = '';
                        for (let key in errors) {
                            msg += errors[key][0] + "\n";
                        }

                        $('#formMessage').css('color', 'red').text(msg).fadeIn();
                    } else {
                        $('#formMessage').css('color', 'red').text('Something went wrong').fadeIn();
                    }
                }
            });
        });
    </script>
</body>
</html>
