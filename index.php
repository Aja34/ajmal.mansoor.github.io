<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajmal Mansoor</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/2.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">
      
        <figure class="avatar-box">
          <img src="./assets/images/profile.jpg" alt="Mohamed Ajmal" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Mohamed Ajmal">Mohamed Ajmal</h1>

          <p class="title">Reading a BSc (Hons) in Data Science</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:ajmal.mansoor20@gmail.com" class="contact-link">ajmal.mansoor20@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+12133522795" class="contact-link">+94 77 918 0631</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">Feb 19, 2023</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Katugastota, Kandy</address>
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
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Gallery</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>
        <div class="container">
          <span class="text first-text" style="display: inline;"> I'm a </span>
          <span class="text sec-text" style="display: inline;"></span>
        </div>
        <section class="about-text">
          
          <p>
            
            I am a dedicated and ambitious individual currently pursuing a BSc (Hons) in Data Science at NSBM University. With a strong passion for data analysis, problem-solving, and coding,
            I thoroughly enjoy working with programming languages and tools commonly used in data science.
            
          </p>

          <p>
            My coursework has provided me with hands-on experience in areas such as statistical analysis,
            machine learning, and data visualization. I am proficient in coding and have a solid understanding of 
            programming concepts
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
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">developing desktop applications using C#</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/design.png" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Graphic Design</h4>

                <p class="service-item-text">
                  I have hands-on experience in graphic design, using tools like Adobe Photoshop.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Photography</h4>

                <p class="service-item-text">
                  I make high-quality photos of any category at a professional level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Client Feedback</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Mohamed Ajmal</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    The staff was great. The receptionists were very helpful and answered all our questions. 
                    The room was clean and bright, 
                    and the room service was always on time. Will be coming back! Thank you so much
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Nadeesha Madushani</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Since having our new website built by Thrive, we have seen a 200% increase in the number of 
                    online contact forms being filled out and returned to us. Matt and his team worked closely with us
                    to provide a site that met all of the criteria that we were looking for. The end result was a website that 
                    is attractive, organized and effective. Thanks to Thrive for all of your hard work and support!
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Inisha Wijerathne</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    It is a distinct pleasure for me to recommend Thrive Internet Marketing to any and all interested parties. 
                    They have been professional, comprehensive and competent throughout the process of our working together. 
                    We feel that we have established a relationship with them for years to come. The reaction to our new web 
                    site has been overwhelmingly positive; as one commented the site is “FANTASTIC.” 
                    The same can be said for our view of Thrive’s work for us.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    With Thrive’s help, we were able to increase the functionality of our website dramatically while cutting our costs. Our website is much more easy to use, has tons of more features than before and is incredibly easy to maintain. We could not be more happy with our new website! Thanks Thrive!
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
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Kusal Perera</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  I would highly recommend Thrive Internet Marketing. They are great to work with. 
                  The traffic to our website has increased thanks to their SEO program.
                </p>
              </div>

            </div>

          </section>

        </div>
 <!--Button-->
 <div class="have">
  <a href="./Rating/index.php">
    <span>Write a review </span>
  </a>
</div>

        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Leisure Pursuit</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/cricket_PNG39.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/football_player.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/Hotpot.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/machine_l.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/safety.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/hobby6.png" alt="client logo">
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

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">berrewaerts college kandy</h4>

              <span>2006 — 2019</span>

              <p class="timeline-text">
                I was fortunate to complete my secondary education at Berrewaerts College, Ampitiya, Kandy. which 
                is one of the most reputed schools in Sri Lanka centred in the heart of Kandy. I sat for the GCE 
                Ordinary Level examination in 2016. and I completed my Local Advanced level examination in the technology stream. in 2019
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">National Institute of Co-operative Developent</h4>

              <span>2019 — 2020</span>

              <p class="timeline-text">
                I also completed Diploma in information Technology 2019/2020, 
                offered by National Institute of Cooperative Development I. This was purely due to the interest I build to 
                become a qualified web developer
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">National School of Business Management</h4>

              <span>2022 — Present</span>

              <p class="timeline-text">
                NSBM is a prestigious institution where I am currently pursuing my studies in Data Science.
                 NSBM is a highly reputable institution known for its commitment to providing quality education and industry-relevant programs.

              </p>

            </li>

          </ol>

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

              <h4 class="h4 timeline-item-title">web developer</h4>

              <span>2021 — 2022</span>

              <p class="timeline-text">
                To gain experience in the field of study, I started working as a web developer at Provious technologies 
                Pvt. Ltd and I continued there for nearly five months improving my learning skills.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">ICT tutor</h4>

              <span>2021 — 2023</span>

              <p class="timeline-text">
                Experienced online ICT tutor providing virtual instruction and guidance, 
                facilitating interactive and engaging learning experiences for students' technological skill development.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Data Entry Operator</h4>

              <span>2019 — 2020</span>

              <p class="timeline-text">
                Experienced Data Entry Operator at Tesco Lanka Rice Mil,
                 ensuring accurate and efficient data management for smooth operations.
              </p>

            </li>

          </ol>

        </section>

        
        <!--Button-->
        <div class="have">
          <a href="./assets/cv/Aja.pdf">
            <span>Download CV </span>
          </a>
        </div>
        
        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="30">30%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 30%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Graphic design</h5>
                <data value="40">40%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 40%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">coding</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">WordPress</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->
      <article class="gallery" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="gallery-posts">

          <ul class="gallery-posts-list">

            <li class="gallery-post-item">
              <a href="https://youtu.be/oFaGq1gclSs">

                <figure class="gallery-banner-box">
                  <img src="./assets/images/portfolio/CProject.png" alt="Air Ticket Reservation System" loading="lazy">
                </figure>

                <div class="gallery-content">

                  <div class="gallery-meta">
                    <p class="gallery-category">C# Project</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2023</time>
                  </div>

                  <h3 class="h3 gallery-item-title">Air Ticket Reservation System</h3>

                  <p class="gallery-text">
                    Efficient Ticket Management System Simplifying Operations and Enhancing User Experience
                  </p>

                </div>

              </a>
            </li>

            <li class="gallery-post-item">
              <a href="https://youtu.be/1i8A3UacXJA">

                <figure class="gallery-banner-box">
                  <img src="./assets/images/portfolio/game.jpg" alt="JavaScript 2D Game" loading="lazy">
                </figure>

                <div class="gallery-content">

                  <div class="gallery-meta">
                    <p class="gallery-category">Web Programming</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">March 17, 2023</time>
                  </div>

                  <h3 class="h3 gallery-item-title">JavaScript 2D Game</h3>

                  <p class="gallery-text">
                    Building a 2D sprites animation game using pure HTML, CSS, and JavaScript
                    Languages and Technologies : #HTML #CSS #JavaScript
                  </p>

                </div>

              </a>
            </li>

            <li class="gallery-post-item">
              <a href="https://youtu.be/24ulTIGIDJI">

                <figure class="gallery-banner-box">
                  <img src="./assets/images/portfolio/interview.jpg" alt="Aluth Avurudda" loading="lazy">
                </figure>

                <div class="gallery-content">

                  <div class="gallery-meta">
                    <p class="gallery-category">  NSBM Interview Assignment </p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">April 27, 2023</time>
                  </div>

                  <h3 class="h3 gallery-item-title"> Interview with Assistant Project Manager</h3>

                  <p class="gallery-text">
                    Exclusive Interview with Ms. Chathurika Wijeratne, Assistant Project Manager at NA Services and ERP Consultant at IFS. 
                  </p>

                </div>

              </a>
            </li>

            <li class="gallery-post-item">
              <a href="https://youtu.be/rCrevIBtMQ4">

                <figure class="gallery-banner-box">
                  <img src="./assets/images/portfolio/intensive.jpg" alt="NSBM University Interview Assignment" loading="lazy">
                </figure>

                <div class="gallery-content">

                  <div class="gallery-meta">
                    <p class="gallery-category">NSBM Interview Assignment </p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">June 11, 2023</time>
                  </div>

                  <h3 class="h3 gallery-item-title">Enhancing English Communication Skills</h3>

                  <p class="gallery-text">
                    Join us in this exciting video as NSBM University students take on the challenge of improving their 
                    English communication skills through insightful interviews with each other
                  </p>

                </div>

              </a>
            </li>

            <li class="gallery-post-item">
              <a href="https://youtu.be/lAGnIelqKZ8">

                <figure class="gallery-banner-box">
                  <img src="./assets/images/portfolio/Social media.png" alt="Social Media" loading="lazy">
                </figure>

                <div class="gallery-content">

                  <div class="gallery-meta">
                    <p class="gallery-category">My First Powerpoint Presentation</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">June 7, 2023</time>
                  </div>

                  <h3 class="h3 gallery-item-title">Social Media</h3>

                  <p class="gallery-text">
                    Join me on a captivating journey as I delve into the world of NICD (National Institute of Cooperative Development) 
                    in my first-ever Powerpoint presentation
                  </p>

                </div>

              </a>
            </li>

            <li class="gallery-post-item">
              <a href="https://youtu.be/zm84VdYLSnU">

                <figure class="gallery-banner-box">
                  <img src="./assets/images/portfolio/web.png" alt="My First Website" loading="lazy">
                </figure>

                <div class="gallery-content">

                  <div class="gallery-meta">
                    <p class="gallery-category">My First Website</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 gallery-item-title">Travel and Tours</h3>

                  <p class="gallery-text">
                    
                    Join me on a virtual tour of Divine Travel, a captivating travel website that I created as part of my web designing final exam at the 
                    National Institute of Co-operative Development.
                  </p>

                </div>

              </a>
            </li>

          </ul>

        </section>

      </article>
      
      <!--
        - #gallery
      -->
      <article class="portfolio" data-page="gallery">

        <header>
          <h2 class="h2 article-title">Gallery</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn></button>
            </li>

            <li class="filter-item">
              <button data-filter-btn></button>
            </li>

            <li class="filter-item">
              <button data-filter-btn></button>
            </li>

            <li class="filter-item">
              <button data-filter-btn></button>
            </li>
            

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-select-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>
          
            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Adventure</button>
              </li>

              <li class="select-item">
                <button data-select-item>Hanging On</button>
              </li>

              <li class="select-item">
                <button data-select-item>University Life</button>
              </li>

            </ul>
          
          </div>

          <ul class="project-list" >

            <li class="project-item  active" data-filter-item data-category="University Life">
            <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Nsbm1.JPG" alt="Siyapath Siya Udanaya" loading="lazy">
                </figure>

                <h3 class="project-title">Siyapath Siya Udanaya ❤️</h3>

                <p class="project-category">University Life</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="University Life">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Nsbm2.JPG" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Presentation Day ❤️</h3>

                <p class="project-category">University Life</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Adventure">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Friend1.JPG" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Villa ❤️</h3>

                <p class="project-category">Adventure</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Hanging On">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Adam1.JPG" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Top Of The Adam's Peak ❤️</h3>

                <p class="project-category">Hanging On</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Adventure">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Friend2.JPG" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">Crazy Fun With Mates 🤝</h3>

                <p class="project-category">Adventure</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Adventure">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Friend4.jpg" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">GalaBoda ❤️</h3>

                <p class="project-category">Adventure</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="University Life">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Nsbm3.JPG" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Buddies 😎</h3>

                <p class="project-category">University Life</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="Hanging On">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Adam2.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Hiking Adam's Peak ❤️</h3>

                <p class="project-category">Hanging On</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="University Life">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Gallery Image/Nsbm4.jpg" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Campusfie ❤️</h3>

                <p class="project-category">University Life</p>

              </a>
            </li>

          </ul>

        </section>

      </article>
      
    


<!--
    image model
-->
      


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
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d247.32721597060174!2d80.62247359515014!3d7.327430409623057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNo%2C%20259%2FA%2C%20Ranawana%20Road%2C%20Katugastota!5e0!3m2!1sen!2slk!4v1686498588608!5m2!1sen!2slk" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form class="form" action="connect.php" method="post" data-form >

            <div class="input-wrapper">
              <input type="text" class="form-input" placeholder="Full name"  name="firstname" required data-form-input>

              <input type="email" class="form-input" placeholder="Email address"  name="mail" required data-form-input>
            </div>

            <textarea class="form-input" placeholder="Your Message" name="message" required data-form-input></textarea>

            <button class="form-btn" type="submit" data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>