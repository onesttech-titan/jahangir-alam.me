<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jahangir Alam - Personal Portfolio</title>

    <!--
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="./assets/images/logo.ico"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css" />

  </head>

  <body>
    <div class="world-map"></div>

    <main>
      <!--
      - #SIDEBAR
    -->

      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img
              src="./assets/images/my-avatar.png"
              alt="Richard hanrick"
              width="80"
            />
          </figure>

          <div class="info-content">
            <h1 class="name position-relative" title="Richard hanrick">
              Jahangir Alam
              <span class="pulse"></span>
            </h1>

            <p class="title">CIO, Onest Tech LLC</p>
          </div>

          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>

            <ion-icon name="chevron-down"></ion-icon>
          </button>
        </div>

        <div class="sidebar-info_more">
          <div class="mt-4"></div>

          <ul class="contacts-list">


            <li class="contact-item">
              <div class="contact-info">
                <p class="contact-title">Hours per week </p>
                <p>More than 20 hrs/week</p>
              </div>
            </li>

            <li class="contact-item">
              <div class="contact-info">
                <p class="contact-title">Languages  </p>
                <p >English: Fluent</p>
              </div>
            </li>

            <div class="separator2"></div>

            <li class="contact-item">
              <div class="contact-info">
                <p class="contact-title">Phone</p>

                <a href="tel:+8801810022230" class="contact-link"
                  >+8801810022230</a
                >
              </div>
            </li>

            <li class="contact-item">
              <!-- <div class="icon-box">
                <ion-icon name="calendar-outline"></ion-icon>
              </div> -->

              <div class="contact-info">
                <p class="contact-title">Skype</p>
                <time datetime="live:babu.cse46">live:babu.cse46</time>
              </div>
            </li>

            <li class="contact-item">
              <!-- <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div> -->

              <div class="contact-info">
                <p class="contact-title">Location</p>

                <address>Dhaka-Bangldesh</address>
              </div>
            </li>
          </ul>

          <div class="separator"></div>

          <ul class="social-list">
            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </aside>

      <!--
      - #main-content
    -->

      <div class="main-content">
        <!--
        - #NAVBAR
      -->

        <nav class="navbar">
          <ul class="navbar-list">
            <li class="navbar-item">
              <button class="navbar-link active" data-nav-link>About</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Resume</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Portfolio</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Blog</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Contact</button>
            </li>
          </ul>
        </nav>

        <!--
        - #ABOUT
      -->

        <article class="about active" data-page="about">
          <header>
            <h2 class="h2 article-title">
              About Me
            </h2>
          </header>

          <section class="about-text">
            <p>
              Hello people! My name is Md. Jahangir Alam, and I am the Chief Information Officer (CIO) at Onest Tech LLC. Technology has always been the driving factor in my life as it influences me to showcase the best of my abilities - Innovation, Strategizing, & Leadership. I am a calculated individual who believes in logic, which is also the very reason I find technology inspiring. Being capable of providing solutions to people’s problems with the help of my knowledge is what keeps me motivated and hungry to achieve greater feats. 
            </p>

            <h4>Professional Career Overview: </h4>
            <p>
              Ever since I had commenced my journey in the realm of Information Technology, I had always pushed myself to learn new things. The IT sector knows no bounds when it comes to knowledge, as it is ever-growing, with technological developments taking place every now and then. I quickly realised in the initial stages of my career that, in order to qualify as a true professional in this critical industry, one must possess diverse knowledge in various facets of IT. I have had the privilege of working with cutting-edge technologies and talented teams throughout my career. Before joining Onest Tech LLC, I started out as a Junior Developer to then become a Project Manager and maintained focal leadership positions at other renowned tech companies, where I perfected my skills in IT strategy, digital transformation, and IT infrastructure management.
            </p>

            <p>
              In my 10 years of experience, I have cultivated a full-fledged understanding of current Web Technologies as well as popular Web building languages such as PHP, MySQL, HTML5, CSS3, Javascript, jQuery, VueJS, and more. I am a competent and certified Full-Stack Developer, Software Architect, System Analyst as well as Software Designer (UI/UX). 
            </p>

            <h4>Method of Approach : </h4>
            <p>
              Having developed a strong and versatile background in IT development, Sales, Project Management and Human Resources has enabled me to improve my communication and managerial skills, which are paramount in my radar of work. My approach to work is simple - Identify the problems and take the necessary steps to eliminate them in the most efficient manner. 
            </p>

            <h4>
              Qualifications : 

            </h4>
            <pre>
• Bachelor’s Degree in Computer Science and Engineering.
• Fluent in CSS, JavaScript and HTML, with an understanding of CSS including Sass and LESS.
• Strong knowledge of PHP, Go , Python and MySQL, with working of MongoDB, PostgreSQL
• Proficient in JS-based tools including Bower, Grunt and Gulp.
• Experience working with languages such as Java, .Net, Python, PHP or Ruby.
• Working experience as a full stack developer.
• Experience working with server technologies including Apache
• Experience in API design and development.
• Understanding of libraries including Backbone.js and jQuery.
• Experience with AJAX.
• Strong knowledge of data structures, system design, and algorithms
• Website UI/UX Design (Proficient in FIGMA) 
            </pre>

            <h4>
              Key skills :

            </h4>
            <p>
              Strong analytical skills | Attention to detail | Teamwork skills | Interpersonal skills | Flexibility | Adaptability | Initiative
            </p>
      
          </section>

          <!--
          - service
        -->

          <section class="service">
            <h3 class="h3 service-title">What i'm doing</h3>

            <ul class="service-list">
              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-design.svg
                "
                    alt="design icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">web application</h4>

                  <p class="service-item-text">
                    The most modern and high-quality design made at a
                    professional level.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-dev.svg"
                    alt="web application icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">web application</h4>

                  <p class="service-item-text">
                    High-quality development of sites at the professional level.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-app.svg"
                    alt="mobile app icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Mobile apps</h4>

                  <p class="service-item-text">
                    Professional development of mobile application for iOS and
                    Android.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-photo.svg"
                    alt="camera icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Photography</h4>

                  <p class="service-item-text">
                    I make high-quality photos of any category at a professional
                    level.
                  </p>
                </div>
              </li>
            </ul>
          </section>

          <!--
          - testimonials
        -->

          <section class="testimonials">
            <h3 class="h3 testimonials-title">Testimonials</h3>

            <ul class="testimonials-list has-scrollbar">
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-1.png"
                      alt="Daniel lewis"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                  Abrar Sajed Rahman
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Mr. Jahangir is a professional when it comes to dictating the flow of things in order to get them arranged, organized and operating seamlessly. He is an astute individual and has sheer leadership prowess, which makes him a genuine leader no matter how adverse the situation maybe. 
                    </p>
                  </div>
                </div>
              </li>

              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-2.png"
                      alt="Jessica miller"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                  Imran Touhid
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Working with Mr. Jahangir has been nothing short of an absolute pleasure. When it comes to business, he knows how to get things done fast and right. A dedicated professional like him makes business dealings much easier, as his extensive knowledge really sets him leagues above his competitors.
                    </p>
                  </div>
                </div>
              </li>

              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-3.png"
                      alt="Emily evans"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                  Noushin Haidar - 
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Sir Jahangir is a fantastic influence. I have learned a lot from him and still do as he enlightens me with his solid real world understanding. His brilliance and determination is unmatched, as well as his distinctive personality which makes him a really fun person to be around of. 
                    </p>
                  </div>
                </div>
              </li>

              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-4.png"
                      alt="Henry william"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                  Sam Williams - 
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Jahangir is a gem of a character when it comes to skilfullness in diversity. He is vastly experienced in a multitude of fields; a true professional. His hard working nature enables him to hone his craft, regardless of what it is that he sets his mind to. 
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </section>

          <!--
          - testimonials modal
        -->

          <div class="modal-container" data-modal-container>
            <div class="overlay" data-overlay></div>

            <section class="testimonials-modal">
              <button class="modal-close-btn" data-modal-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>

              <div class="modal-img-wrapper">
                <figure class="modal-avatar-box">
                  <img
                    src="./assets/images/avatar-1.png"
                    alt="Daniel lewis"
                    width="80"
                    data-modal-img
                  />
                </figure>

                <img src="./assets/images/icon-quote.svg" alt="quote icon" />
              </div>

              <div class="modal-content">
                <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                <time datetime="2021-06-14">14 June, 2021</time>

                <div data-modal-text>
                  <p>
                    Richard was hired to create a corporate identity. We were
                    very pleased with the work done. She has a lot of experience
                    and is very concerned about the needs of client. Lorem ipsum
                    dolor sit amet, ullamcous cididt consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels
                    dolore magnarels alia.
                  </p>
                </div>
              </div>
            </section>
          </div>

          <!--
          - clients
        -->

          <section class="clients">
            <h3 class="h3 clients-title">Clients</h3>

            <ul class="clients-list has-scrollbar">
              <li class="clients-item">
                <a href="#" target="_blank"> 
                  <img
                    src="./assets/images/logo-1-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#" target="_blank"> 
                  <img
                    src="./assets/images/logo-2-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#" target="_blank"> 
                  <img
                    src="./assets/images/logo-3-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#" target="_blank"> 
                  <img
                    src="./assets/images/logo-4-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#" target="_blank"> 
                  <img
                    src="./assets/images/logo-5-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#" target="_blank"> 
                  <img
                    src="./assets/images/logo-6-color.png"
                    alt="client logo"
                  />
                </a>
              </li>
            </ul>
          </section>

         
  

        </article>

        <!--
        - #RESUME
      -->

        <article class="resume" data-page="resume">
          <header>
            <h2 class="h2 article-title">Resume</h2>
          </header>

        <!-- my Skill -->
          <section class="skill mb-3">
            <h3 class="h3 skills-title">My skills</h3>

            <!-- <div class="skills-list content-card">

            </div> -->

            <ul class="service-list px-0">

              <!-- Single -->
              <li class="service-item service-item2">
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Technical Skills:</h4>

                  <pre class="service-item-text service-item-text2 mb-0">
<span class="doted"> -  </span>Full-Stack Development
<span class="doted"> -  </span>Cloud Computing (AWS, Azure, GCP)
<span class="doted"> -  </span>DevOps and CI/CD
<span class="doted"> -  </span>Database Management
<span class="doted"> -  </span>Cybersecurity and Data Privacy
<span class="doted"> -  </span>Mobile and Web Application Development
<span class="doted"> -  </span>IoT and AI Integration
</pre>
                </div>
              </li>

              <!-- Single -->
              <li class="service-item service-item2">
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Leadership and Management:</h4>

                  <pre class="service-item-text service-item-text2 mb-0">
<span class="doted"> -  </span>Team Building and Development
<span class="doted"> -  </span>Agile and Scrum Methodologies
<span class="doted"> -  </span>Project Management
<span class="doted"> -  </span>Budgeting and Resource Allocation
<span class="doted"> -  </span>Stakeholder Communication
<span class="doted"> -  </span>Vendor and Partner Collaboration
<span class="doted"> -  </span>Strategic Planning
</pre>
                </div>
              </li>

              <!-- Single -->
              <li class="service-item service-item2">
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Innovation and Strategy: </h4>

<pre class="service-item-text service-item-text2 mb-0">
<span class="doted"> -  </span>Technology Roadmap Development
<span class="doted"> -  </span>Market Analysis and Trends Assessment
<span class="doted"> -  </span>Product Lifecycle Management
<span class="doted"> -  </span>Intellectual Property Strategy
<span class="doted"> -  </span>Risk Assessment and Mitigation
<span class="doted"> -  </span>Competitive Analysis
</pre>
                </div>
              </li>

              <!-- Single -->
              <li class="service-item service-item2">
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Problem Solving and Decision-Making: </h4>

<pre class="service-item-text service-item-text2 mb-0">
<span class="doted"> -  </span>Complex Problem Analysis
<span class="doted"> -  </span>Critical Thinking and Decision-Making
<span class="doted"> -  </span>Crisis Management
<span class="doted"> -  </span>Conflict Resolution
<span class="doted"> -  </span>Quality Assurance and Testing
</pre>
                </div>
              </li>

              <!-- Single -->
              <li class="service-item service-item2">
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Problem Solving and Decision-Making: </h4>

<pre class="service-item-text service-item-text2 mb-0">
<span class="doted"> -  </span>Complex Problem Analysis
<span class="doted"> -  </span>Critical Thinking and Decision-Making
<span class="doted"> -  </span>Crisis Management
<span class="doted"> -  </span>Conflict Resolution
<span class="doted"> -  </span>Quality Assurance and Testing
</pre>
                </div>
              </li>

              <!-- Single -->
              <li class="service-item service-item2">
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Communication and Collaboration: </h4>

<pre class="service-item-text service-item-text2 mb-0">
<span class="doted"> -  </span>Effective Communication
<span class="doted"> -  </span>Cross-Functional Collaboration
<span class="doted"> -  </span>Client Relationship Management
<span class="doted"> -  </span>Presentation and Public Speaking
<span class="doted"> -  </span>Technical Documentation
</pre>
                </div>
              </li>



            </ul>


          </section>




          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Experience</h3>
            </div>

            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Chief information officer</h4>
                <p>Onesttech LLC</p>
                <span>May 2011 to Current  (5 years 4 months )</span>
                <p class="timeline-text mb-0">Banani, Dhaka, Bangladesh</p>
                <pre>
 
<strong class="mb-1">Responsibilities:</strong>
<span class="doted"> -  </span>Strategic Technology Planning
<span class="doted"> -  </span>Information Security and Data Governance
<span class="doted"> -  </span>Team Leadership and Team Management and  Development
                </pre>
              </li>
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Chief Technology officer</h4>

                <p>Sookh</p>
                <span>May 2021 -  Present . 2 years 5 months</span>

                <p class="timeline-text mb-0">
                  Banani, Dhaka, Bangladesh
                </p>
<pre>

<strong class="mb-1">Responsibilities:</strong>
<span class="doted"> -  </span>Technology Strategy and Innovation
<span class="doted"> -  </span>Technical Leadership and Team Management
<span class="doted"> -  </span>Infrastructure and Systems Management
</pre>

              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Chief information officer</h4>
                <p>Imprint Dhaka Limited</p>
                <span>7 years 4 months</span>
                <p class="timeline-text mb-0"> Banani, Dhaka, Bangladesh </p>
<pre>

<strong class="mb-1">Responsibilities:</strong>
<span class="doted"> -  </span>Technology Strategy Development
<span class="doted"> -  </span>Team Leadership and Management
<span class="doted"> -  </span>Technology Stack and Architecture
<span class="doted"> -  </span>Strategic Planning
<span class="doted"> -  </span>Cybersecurity and Data Protection:
</pre>
              </li>

              
            </ol>

          </section>

          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Education</h3>
            </div>

            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Cisco Certified Network Associate (CCNA) Certification
                </h4>
                <span>American International University</span>
                <p class="timeline-text">Completed in 2016 </p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Bachelor of Science in Computer Science and Engineering (B.Sc. CSE)
                </h4>
                <span>Stamford University Bangladesh</span>
                <p class="timeline-text">Graduated in 2014 </p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Higher Secondary Certificate (H.S.C)
                </h4>
                <span>Agricultural University College</span>
                <p class="timeline-text">Completed in 2009</p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Secondary School Certificate (S.S.C)
                </h4>
                <span>Mukul Niketon High School</span>
                <p class="timeline-text">Graduated in 2007</p>
              </li>


            </ol>
          </section>
          <!-- <section class="skill">
            <h3 class="h3 skills-title">My skills</h3>

            <ul class="skills-list content-card">
              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">web application development</h5>
                  <data value="90">90%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 90%"></div>
                </div>
              </li>
              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">mobile application development</h5>
                  <data value="80">80%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 80%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Graphic designing (UI/UX)</h5>
                  <data value="75">75%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 75%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">product Branding</h5>
                  <data value="85">85%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 85%"></div>
                </div>
              </li>
              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">managerial</h5>
                  <data value="85">85%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 85%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">communication</h5>
                  <data value="90">90%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 90%"></div>
                </div>
              </li>
            </ul>
            <div class="skills-list content-card">

            </div>
          </section> -->
        </article>

        <!--
        - #PORTFOLIO
      -->

        <article class="portfolio" data-page="portfolio">
          <header>
            <h2 class="h2 article-title">Portfolio</h2>
          </header>

          <section class="projects">
            <ul class="filter-list">
              <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>web application</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>mobile application</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>ui-ux design</button>
              </li>
            </ul>

            <div class="filter-select-box">
              <button class="filter-select" data-select>
                <div class="select-value" data-selecct-value>
                  Select category
                </div>

                <div class="select-icon">
                  <ion-icon name="chevron-down"></ion-icon>
                </div>
              </button>

              <ul class="select-list">
                <li class="select-item">
                  <button data-select-item>All</button>
                </li>

                <li class="select-item">
                  <button data-select-item>web application</button>
                </li>

                <li class="select-item">
                  <button data-select-item>mobile application</button>
                </li>

                <li class="select-item">
                  <button data-select-item>web application</button>
                </li>

                <li class="select-item">
                  <button data-select-item>ui-ux design</button>
                </li>
              </ul>
            </div>

            <ul class="project-list px-0">
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://school.onesttech.com/login" target="_blank">
                  <figure class="project-img">
                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onest-schooled-school-management-system-laravel-script.avif"
                      alt="finance"
                      loading="lazy"
                    />
                  </figure>
                  <h3 class="project-title">School</h3>
                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://hrm.onesttech.com/sign-in" target="_blank">
                  <figure class="project-img">
                    <img
                      src="https://codecanyon.img.customer.envatousercontent.com/files/467498319/banner.png?auto=compress%2Cformat&q=80&fit=crop&crop=top&max-h=8000&max-w=590&s=f63ed7ac17516da4b922d3c512c0f63e"
                      alt="finance"
                      loading="lazy"
                    />
                  </figure>
                  <h3 class="project-title">HRM</h3>
                  <p class="project-category">web application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://drive.google.com/file/d/1GOXXpkjsaM9bjVZvaoRJc0AvlD0puwhZ/view?usp=drive_link" target="_blank">
                  <figure class="project-img">
                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onest-lms-online-learning-management-system-mobile-app.avif"
                      alt="orizon"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">lms app</h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://lms.onesttech.com/sign-in" target="_blank">
                  <figure class="project-img">
                    <img
                      src="assets/images/figma/Thumbnail-LMS.png"
                      alt="fundo"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">lms web</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://crmv1.onestweb.com/login
                " target="_blank">
                  <figure class="project-img">
                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onest-crm-customer-relation-management-system.avif"
                      alt="brawlhalla"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">crm web</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1Y8dYOVlGA6cBvdGXIl-qV4FQ281yAeS6/view?usp=drive_link" target="_blank">
                  <figure class="project-img">
                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onest-crm-multiple-platform-crm-mobile-application.avif"
                      alt="dsm."
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">crm app</h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1E8Zgxot44Ra0v7n448pGdUnhQSbJEdfe/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/chat-calling-live-social-media-ios-android-application.avif"
                      alt="metaspark"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Chat + Calling </h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/15_lwHuYgRRwQ8Cy72_fQF5MqOtOe_xRN/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/flutter-delivery-man-ui-kit.avif"
                      alt="summary"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Delivery Man</h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1btv2uGNraS4U4TqEf9cNS92rz6uaJ1gX/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/branding-advertising-moving-billboard-flutter-and-web-application.avif"
                      alt="task manager"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">adgari</h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1DH37Jv1xwWCOEI7aPQB3oujAviRi3uH4/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/hrm-qr-attendance.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">QR Attendance </h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/14SyZpfdNXLwebbCWUM57h_GJcKYKNkuo/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onex-club-multi-purpose-flutter-app.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Club </h3>
                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1Vw2Se_HcX6l3OgvQDIf3mdUVdG2D0-NV/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/flutter-news-and-magazine-app-ui-template.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">news magazine</h3>
                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://grocery.onesttech.com" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/multipurpose-and-multivendor-ecommerce-app-web-admin-panel.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">eCommerce Web & App</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1b1srfsNv1zuAuomNk-1J1dlRfMNHEfI3/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/multipurpose-and-multivendor-ecommerce-app-web-admin-panel.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">eCommerce </h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1DiQ38POvS4Wn9q-5HI8TFcJCx3vDNA7j/view?usp=drive_link" target="_blank">
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/multi-vendor-pharmacy-ecommerce-app-ui-kit.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">pharmacy</h3>
                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://drive.google.com/file/d/1UmUw1YyfVmSOBGeNvHog5r5DFLRCj6Io/view?usp=drive_link" target="_blank"> 
                  <figure class="project-img">
                    <img
                      src="https://onesttech.com/frontend/assets/images/product/party-time-organize-events-event-booking-event-create-buy-tickets-android-ios-application.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Party time </h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://smart-food-customer.vercel.app/#/" target="_blank"> 
                  <figure class="project-img">
                    <img
                      src="https://onesttech.com/frontend/assets/images/product/flutter-smart-food-menu-android-ios-web-desktop.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">food menu Web & Mobile</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://onqueuewebadmin.vercel.app/#/" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/queue-management-system-flutter-android-ios-flutter-web.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Queue Management System</h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://ecom.onesttech.com/" target="_blank"> 
                  <figure class="project-img">
                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onest-ecommerce-seller-app-android-ios.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">ecommerce</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://drive.google.com/file/d/1PVGxPQmwKBQSDOVLEQCRx2vKuw1Gn58o/view" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onest-ecommerce-seller-app-android-ios.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Seller APP</h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://drive.google.com/file/d/1KhrYFUpMGo_tpR0QiPOxq5-DH0uC5IOZ/view?usp=drive_link" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/tailor-all-in-one-app-for-tailor-and-customer-management.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">tailor web & mobile</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://drive.google.com/file/d/1l6_Po6DP5GZxu6C3ht4J_grheXwS5ju9/view" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/school-inspection-report-flutter-application.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">school-inspection  web & app</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://landlord.onestweb.com/" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/property-management-apartment-rent-collection-tenant-and-invoice-bill.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Property Management web & app</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="mobile application"
              >
                <a href="https://www.dhakdol.com" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/offline-music-app-online-music-streaming-and-podcast.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">music-app</h3>

                  <p class="project-category">mobile application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://ecom.onesttech.com" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/complete-multi-vendor-ecommerce-mobile-app-web-weller-and-admin-panel.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">multi-vendor</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>
              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="https://login.onesttech.com" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="https://onesttech.com/frontend/assets/images/product/onest-ultra-11-responsive-login-and-registration-form.avif"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Login and Registration Form</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web application"
              >
                <a href="assets/images/odialer/oDialer _business proposal.pdf" target="_blank"> 
                  <figure class="project-img">

                    <img
                      src="assets/images/figma/Thumbnail-Odialer.png"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">oDialer</h3>

                  <p class="project-category">web application</p>
                </a>
              </li>


              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#one"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-LMS.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">LMS - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="one" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="https://lms.onestweb.com/assets/images/landing/home1.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#two"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-Adgari.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">Adgari - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="two" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="assets/images/figma/Adgari.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#three"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-HRM.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">HRM - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="three" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="assets/images/figma/HRM.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#four"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-CRM.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">CRM - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="four" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="assets/images/figma/CRM.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#five"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-Landlord.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">Landlord - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="five" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="assets/images/figma/Landlord.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#six"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-Schooled.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">Schooled - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="six" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="assets/images/figma/Schooled.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#seven"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-Music.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">Music - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="seven" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="assets/images/figma/Music.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#eight"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-Fundrising.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">Fundrising - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="eight" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <img src="assets/images/figma/Fundrising.png" alt="" class="w-100">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>
              
              <!-- Figma -->
              <li  class="project-item active" data-filter-item   data-category="ui-ux design">
                  <button type="button" data-bs-toggle="modal" data-bs-target="#nine"> 
                      <figure class="project-img">
                        <img
                          src="assets/images/figma/Thumbnail-Blood Donation.png"
                          alt="arrival"
                          loading="lazy"
                        />
                      </figure>
                      <h3 class="project-title">Blood-Donation - UI/UX Desing</h3>
                      <p class="project-category">Figma Design</p>
                  </button>
          
                  <!-- Modal -->
                  <div class="modal fade" id="nine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="assets/images/figma/Blood-Donation.png" alt="" class="w-100">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>

            </ul>
          </section>
        </article>

        <!--
        - #BLOG
      -->

        <article class="blog" data-page="blog">
          <header>
            <h2 class="h2 article-title">Blog</h2>
          </header>

          <section class="blog-posts">
            <ul class="blog-posts-list" id="blogList">

              <li class="blog-post-item">
                <a href="https://medium.com/@babu.cse46/functional-programming-vs-object-oriented-programming-oop-bf0ef12adb1b"  target="_blank">
                  <figure class="blog-banner-box">
                    <img
                      src="https://miro.medium.com/v2/resize:fit:700/1*3QiwDFlESkyEiBC_wL-awA.png"
                      alt="Design conferences in 2022"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">jun 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      Functional Programming VS Object-Oriented Programming (OOP)
                    </h3>

                    <p class="blog-text">
                      In the realm of software development, programming paradigms play a crucial role in shaping the...
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="https://medium.com/@babu.cse46/how-the-inception-of-chatgpt-revolutionized-the-world-1137c23f5a61" target="_blank">
                  <figure class="blog-banner-box">
                    <img
                      src="https://miro.medium.com/v2/resize:fit:700/1*7vRK4pB3Xx3RMyce-Qs-Fw.png"
                      alt="Best fonts every designer"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      How The Inception of ChatGPT Revolutionized The World
                    </h3>

                    <p class="blog-text">
                      Picture this: I found myself standing at the crossroads of countless inquiries, seeking answers that would satiate my thirst for knowledge. It was then that ChatGPT entered the stage.....
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="https://medium.com/@babu.cse46/my-mern-stack-roadmap-f8f1eb3a80b4"  target="_blank">
                  <figure class="blog-banner-box">
                    <img
                      src="https://miro.medium.com/v2/resize:fit:700/1*dMW4RcyGhEDQwgFRRO4oLg.jpeg"
                      alt="Design digest #80"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">may 30, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">My MERN-Stack Roadmap…🚀</h3>

                    <p class="blog-text">
                      When I first delved into web development, my focus quickly shifted towards learning about the MERN stack.
                    </p>
                  </div>
                </a>
              </li>

            </ul>
          </section>
        </article>

        <!--
        - #CONTACT
      -->

        <article class="contact" data-page="contact">
          <header>
            <h2 class="h2 article-title">Contact</h2>
          </header>

          <section class="mapbox" data-mapbox>
            <figure>
              <iframe
                src="https://maps.app.goo.gl/7M9KzNdwL5qkQgo67"
                width="400"
                height="300"
                loading="lazy"
              ></iframe>
            </figure>
          </section>

          <section class="contact-form">
            <h3 class="h3 form-title">Contact Form</h3>

            <form action="#" class="form" data-form>
              <div class="input-wrapper">
                <input
                  type="text"
                  name="fullname"
                  class="form-input"
                  placeholder="Full name"
                  required
                  data-form-input
                />

                <input
                  type="email"
                  name="email"
                  class="form-input"
                  placeholder="Email address"
                  required
                  data-form-input
                />
              </div>

              <textarea
                name="message"
                class="form-input"
                placeholder="Your Message"
                required
                data-form-input
              ></textarea>

              <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
              </button>
            </form>
          </section>

        </article>

        <article class="active footer">
          <p class="mb-0">© 2023 <a href="https://jahangir-alam.me/">jahangir-alam</a>. All rights reserved.</p>
        </article>

      </div>
    </main>


    <a href="https://api.whatsapp.com/send?phone=8801810022230" target="_blank" id="contact-whatsApp">
      <img src="assets/images/whatsApp.png" alt="">
    </a>


    <!--
    - custom js link
  -->

    <script src="./assets/js/script.js"></script>
    <!--
    - ionicon link
  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module"src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script  nomodule   src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" ></script>

    <script>
    // Define the URL of the JSON file
    const jsonUrl = 'blog.json';

    // Select the ul element where you want to append the data
    const ul = document.getElementById('blogList');

    // Fetch the JSON data
    fetch(jsonUrl)
      .then(response => response.json())
      .then(data => {
        // Loop through the JSON data and create list items
        data.forEach(item => {
          const li = document.createElement('li');
          li.classList.add('blog-post-item');

          const a = document.createElement('a');
          a.href = item.url;
          a.target = '_blank';

          const figure = document.createElement('figure');
          figure.classList.add('blog-banner-box');

          const img = document.createElement('img');
          img.src = item.image;
          img.alt = item.imageAlt;
          img.loading = 'lazy';

          figure.appendChild(img);

          const content = document.createElement('div');
          content.classList.add('blog-content');

          const meta = document.createElement('div');
          meta.classList.add('blog-meta');

          const category = document.createElement('p');
          category.classList.add('blog-category');
          category.textContent = item.category;

          const dot = document.createElement('span');
          dot.classList.add('dot');

          const time = document.createElement('time');
          time.setAttribute('datetime', item.date);
          time.textContent = item.date;

          meta.appendChild(category);
          meta.appendChild(dot);
          meta.appendChild(time);

          const title = document.createElement('h3');
          title.classList.add('h3', 'blog-item-title');
          title.textContent = item.title;

          const text = document.createElement('p');
          text.classList.add('blog-text');
          text.textContent = item.description;

          content.appendChild(meta);
          content.appendChild(title);
          content.appendChild(text);

          a.appendChild(figure);
          a.appendChild(content);

          li.appendChild(a);
          ul.appendChild(li);
        });
      })
      .catch(error => {
        console.error('Error fetching JSON:', error);
      });
    </script>
  </body>
</html>

