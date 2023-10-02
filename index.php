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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
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
          <figure class="avatar-box position-relative">
            <img
              src="./assets/images/my-avatar.png"
              alt="Richard hanrick"
              width="80"
            />
            <span class="pulse"></span>
          </figure>

          <div class="info-content">
            <h1 class="name" title="Richard hanrick">Jahangir Alam</h1>

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
                <p class="contact-title">Hours per week</p>
                <p>More than 20 hrs/week</p>
              </div>
            </li>

            <li class="contact-item">
              <div class="contact-info">
                <p class="contact-title">Languages</p>
                <p>English: Fluent</p>
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
              <div class="contact-info">
                <p class="contact-title">email</p>

                <a href="mailto:babu.cse46@gmail.com" class="contact-link">babu.cse46@gmail.com</a>
                <a href="mailto:jahangir@imprint.com" class="contact-link">jahangir@imprint.com</a>
                <a href="mailto:jahangir@onesttech.com" class="contact-link">jahangir@onesttech.com</a>
                <a href="mailto:jahangir@sookh.com" class="contact-link">jahangir@sookh.com</a>
              </div>
            </li>

            <li class="contact-item">

              <div class="contact-info">
                <p class="contact-title">Skype</p>
                <time datetime="live:babu.cse46">live:babu.cse46</time>
              </div>
            </li>

            <li class="contact-item">
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
            <h2 class="h2 article-title">About Me</h2>
          </header>

          <section class="about-text">
            <p>
              Hello people! My name is Md. Jahangir Alam, and I am the Chief
              Information Officer (CIO) at Onest Tech LLC. Technology has always
              been the driving factor in my life as it influences me to showcase
              the best of my abilities - Innovation, Strategizing, & Leadership.
              I am a calculated individual who believes in logic, which is also
              the very reason I find technology inspiring. Being capable of
              providing solutions to people’s problems with the help of my
              knowledge is what keeps me motivated and hungry to achieve greater
              feats.
            </p>

            <h4>Professional Career Overview:</h4>
            <p>
              Ever since I had commenced my journey in the realm of Information
              Technology, I had always pushed myself to learn new things. The IT
              sector knows no bounds when it comes to knowledge, as it is
              ever-growing, with technological developments taking place every
              now and then. I quickly realised in the initial stages of my
              career that, in order to qualify as a true professional in this
              critical industry, one must possess diverse knowledge in various
              facets of IT. I have had the privilege of working with
              cutting-edge technologies and talented teams throughout my career.
              Before joining Onest Tech LLC, I started out as a Junior Developer
              to then become a Project Manager and maintained focal leadership
              positions at other renowned tech companies, where I perfected my
              skills in IT strategy, digital transformation, and IT
              infrastructure management.
            </p>

            <p>
              In my 10 years of experience, I have cultivated a full-fledged
              understanding of current Web Technologies as well as popular Web
              building languages such as PHP, MySQL, HTML5, CSS3, Javascript,
              jQuery, VueJS, and more. I am a competent and certified Full-Stack
              Developer, Software Architect, System Analyst as well as Software
              Designer (UI/UX).
            </p>

            <h4>Method of Approach :</h4>
            <p>
              Having developed a strong and versatile background in IT
              development, Sales, Project Management and Human Resources has
              enabled me to improve my communication and managerial skills,
              which are paramount in my radar of work. My approach to work is
              simple - Identify the problems and take the necessary steps to
              eliminate them in the most efficient manner.
            </p>

            <h4>Qualifications :</h4>
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

            <h4>Key skills :</h4>
            <p>
              Strong analytical skills | Attention to detail | Teamwork skills |
              Interpersonal skills | Flexibility | Adaptability | Initiative
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
                    Rafid Rahman
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Mr. Jahangir is a professional when it comes to dictating
                      the flow of things in order to get them arranged,
                      organized and operating seamlessly. He is an astute
                      individual and has sheer leadership prowess, which makes
                      him a genuine leader no matter how adverse the situation
                      maybe.
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
                      Working with Mr. Jahangir has been nothing short of an
                      absolute pleasure. When it comes to business, he knows how
                      to get things done fast and right. A dedicated
                      professional like him makes business dealings much easier,
                      as his extensive knowledge really sets him leagues above
                      his competitors.
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
                      Sir Jahangir is a fantastic influence. I have learned a
                      lot from him and still do as he enlightens me with his
                      solid real world understanding. His brilliance and
                      determination is unmatched, as well as his distinctive
                      personality which makes him a really fun person to be
                      around of.
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
                      Jahangir is a gem of a character when it comes to
                      skilfullness in diversity. He is vastly experienced in a
                      multitude of fields; a true professional. His hard working
                      nature enables him to hone his craft, regardless of what
                      it is that he sets his mind to.
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
                  <h4 class="h4 service-item-title">
                    Leadership and Management:
                  </h4>

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
                  <h4 class="h4 service-item-title">
                    Innovation and Strategy:
                  </h4>

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
                  <h4 class="h4 service-item-title">
                    Problem Solving and Decision-Making:
                  </h4>

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
                  <h4 class="h4 service-item-title">
                    Problem Solving and Decision-Making:
                  </h4>

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
                  <h4 class="h4 service-item-title">
                    Communication and Collaboration:
                  </h4>

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
                <h4 class="h4 timeline-item-title">
                  Chief information officer
                </h4>
                <p>Onesttech LLC</p>
                <span>May 2011 to Current (5 years 4 months )</span>
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
                <span>May 2021 - Present . 2 years 5 months</span>

                <p class="timeline-text mb-0">Banani, Dhaka, Bangladesh</p>
                <pre>

<strong class="mb-1">Responsibilities:</strong>
<span class="doted"> -  </span>Technology Strategy and Innovation
<span class="doted"> -  </span>Technical Leadership and Team Management
<span class="doted"> -  </span>Infrastructure and Systems Management
</pre>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Chief information officer
                </h4>
                <p>Imprint Dhaka Limited</p>
                <span>7 years 4 months</span>
                <p class="timeline-text mb-0">Banani, Dhaka, Bangladesh</p>
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
                <p class="timeline-text">Completed in 2016</p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Bachelor of Science in Computer Science and Engineering (B.Sc.
                  CSE)
                </h4>
                <span>Stamford University Bangladesh</span>
                <p class="timeline-text">Graduated in 2014</p>
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
              <!-- JSOn Data Load -->
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
                <a
                  href="https://medium.com/@babu.cse46/functional-programming-vs-object-oriented-programming-oop-bf0ef12adb1b"
                  target="_blank"
                >
                  <figure class="blog-banner-box">
                    <img
                      src="https://miro.medium.com/v2/resize:fit:700/1*3QiwDFlESkyEiBC_wL-awA.png"
                      alt="Design conferences in 2022"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category mb-0">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">jun 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      Functional Programming VS Object-Oriented Programming
                      (OOP)
                    </h3>

                    <p class="blog-text">
                      In the realm of software development, programming
                      paradigms play a crucial role in shaping the...
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a
                  href="https://medium.com/@babu.cse46/how-the-inception-of-chatgpt-revolutionized-the-world-1137c23f5a61"
                  target="_blank"
                >
                  <figure class="blog-banner-box">
                    <img
                      src="https://miro.medium.com/v2/resize:fit:700/1*7vRK4pB3Xx3RMyce-Qs-Fw.png"
                      alt="Best fonts every designer"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category mb-0">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      How The Inception of ChatGPT Revolutionized The World
                    </h3>

                    <p class="blog-text">
                      Picture this: I found myself standing at the crossroads of
                      countless inquiries, seeking answers that would satiate my
                      thirst for knowledge. It was then that ChatGPT entered the
                      stage.....
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a
                  href="https://medium.com/@babu.cse46/my-mern-stack-roadmap-f8f1eb3a80b4"
                  target="_blank"
                >
                  <figure class="blog-banner-box">
                    <img
                      src="https://miro.medium.com/v2/resize:fit:700/1*dMW4RcyGhEDQwgFRRO4oLg.jpeg"
                      alt="Design digest #80"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category mb-0">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">may 30, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">My MERN-Stack Roadmap…🚀</h3>

                    <p class="blog-text">
                      When I first delved into web development, my focus quickly
                      shifted towards learning about the MERN stack.
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
            <div id="response-message"></div>

            <form
              action="mail.php"
              class="form"
              data-form
              method="POST"
              id="contact-form"
            >
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

        <!-- Footer -->
        <article class="active footer">
          <p class="mb-0">
            © 2023 <a href="https://jahangir-alam.me/">jahangir-alam</a>. All
            rights reserved.
          </p>
        </article>
      </div>
    </main>

    <a
      href="https://api.whatsapp.com/send?phone=8801810022230"
      target="_blank"
      id="contact-whatsApp"
    >
      <img src="assets/images/whatsApp.png" alt="" />
    </a>

    <!-- Project details modal  -->
    <div
      class="modal fade"
      id="projectDetailsModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      style="cursor: url(https://payday.gainhq.com/images/close-cursor-light.png), auto !important;padding-right: 17px; display:;"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark">Descriptions</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- Descriptins -->
            <div class="container text-dark" id="loading-img">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <img src="./assets/images/loading.gif" alt="Loading...">
                </div>
              </div>
            </div>
            <div class="modal-loaded-content">

            </div>
            <!-- Descriptions -->
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- End-of Project details modal  -->


    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>

    <!--
    - ionicon link
  -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script>
      $(document).ready(async function () {
        try {
          const response = await fetch("./assets/data/projects.json");
          const data = await response.json();
          let content = "";

          const categories = data
            .map((item) => ({
              id: item.categoryId,
              name: item.category,
            }))
            .filter((category, index, self) => {
              return index === self.findIndex((c) => c.id === category.id);
            });

          let categoryContent =
            "<li class='filter-item'> <button class='active' data-filter-btn>All</button></li>";

          categories.forEach((item) => {
            categoryContent += `<li class="filter-item">
                <button data-filter-btn>${item.name}</button>
              </li>`;
          });

          $(".filter-list").html(categoryContent);

          data.forEach((item) => {
            if (item.hasModal) {
              content =
                content +
                ` <li
                class="project-item active"
                data-filter-item
                data-category="${item.category}"
              >
                <button
                  class="projectDetailsBtn"
                  type="button"
                  projectId="${item.id}"
                >
                  <figure class="project-img">
                    <img
                      src="${item.thumbnail}"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>
                  <h3 class="project-title">${item.name}</h3>
                  <p class="project-category">${item.category}</p>
                </button>

              </li>`;
            } else {
              content =
                content +
                `<li
                class="project-item active"
                data-filter-item
                data-category="${item.categoryId}"
              >
                <a href="${item.url}" target="_blank">
                  <figure class="project-img">
                    <img
                      src="${item.thumbnail}"
                      alt="finance"
                      loading="lazy"
                    />
                  </figure>
                  <h3 class="project-title">${item.name}</h3>
                  <p class="project-category">${item.category}</p>
                </a>
              </li>`;
            }
          });

          $(".project-list").html(content);
        } catch (error) {
          console.log(error);
        }
      });

      //Filer portfolio custom
      $(".filter-list").on("click", "[data-filter-btn]", function () {
        let selectedValue = this.innerText.toLowerCase();
        selectValue.innerText = this.innerText;
        const anotherfilterItems = $("[data-filter-item]");

        anotherfilterItems.each(function () {
          const category = $(this).attr("data-category");
          if (selectedValue === "all" || selectedValue === category) {
            $(this).addClass("active");
          } else {
            $(this).removeClass("active");
          }
        });

        $(".filter-item button").removeClass("active");
        this.classList.add("active");
      });
      // Filer portfolio custom
    </script>
 


    <script src="portfolio.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
