<?php ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>sameeeeeep</title>
    <style>
      /* Google Font CDN Link */
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        scroll-behavior: smooth;
      }

      /* Custom Scroll Bar CSS */
      ::-webkit-scrollbar {
        width: 10px;
      }

      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      ::-webkit-scrollbar-thumb {
        background: rgb(3, 11, 11);
        border-radius: 12px;
        transition: all 0.3s ease;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: rgb(1, 3, 3);
      }

      /* navbar styling */
      nav {
        position: fixed;
        width: 100%;
        padding: 20px 0;
        z-index: 998;
        transition: all 0.3s ease;
        font-family: "Ubuntu", sans-serif;
      }

      nav.sticky {
        background: rgb(2, 10, 10);
        padding: 13px 0;
      }

      nav .navbar {
        width: 90%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: auto;
      }

      nav .navbar .logo a {
        font-weight: 500;
        font-size: 35px;
        color: rgb(6, 21, 21);
      }

      nav.sticky .navbar .logo a {
        color: #fff;
      }

      nav .navbar .menu {
        display: flex;
        position: relative;
      }

      nav .navbar .menu li {
        list-style: none;
        margin: 0 8px;
      }

      .navbar .menu a {
        font-size: 18px;
        font-weight: 500;
        color: #0e2431;
        padding: 6px 0;
        transition: all 0.4s ease;
      }

      .navbar .menu a:hover {
        color: rgb(1, 6, 6);
      }

      nav.sticky .menu a {
        color: #fff;
      }

      nav.sticky .menu a:hover {
        color: #0e2431;
      }

      .navbar .media-icons a {
        color: rgb(2, 8, 8);
        font-size: 18px;
        margin: 0 6px;
      }

      nav.sticky .media-icons a {
        color: #fff;
      }

      /* Side Navigation Menu Button CSS */
      nav .menu-btn,
      .navbar .menu .cancel-btn {
        position: absolute;
        color: #fff;
        right: 30px;
        top: 20px;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: none;
      }

      nav .menu-btn {
        color: rgb(2, 10, 10);
      }

      nav.sticky .menu-btn {
        color: #fff;
      }

      .navbar .menu .menu-btn {
        color: #fff;
      }

      /* home section styling */
      /* .home {
  height: 100vh;
  width: 100%;
  background: url("Images/background.png") no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  font-family: 'Ubuntu', sans-serif;
} */

      .home .home-content {
        width: 90%;
        height: 100%;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .home .text-one {
        font-size: 25px;
        color: #ffffff;
      }

      .home .text-two {
        color: #fcfdfd;
        font-size: 70px;
        font-weight: 600;
        margin-left: -3px;
      }

      .home .text-three {
        font-size: 40px;
        margin: 5px 0;
        color: rgb(251, 252, 252);
      }

      .home .text-four {
        font-size: 23px;
        margin: 5px 0;
        color: #f1f3f4;
      }

      .home .button {
        margin: 14px 0;
      }

      .home .button button {
        outline: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 25px;
        font-weight: 400;
        background: rgb(14, 24, 24);
        color: #fff;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.4s ease;
      }

      .home .button button:hover {
        border-color: teal;
        background-color: #fff;
        color: #fff;
      }

      .home a {
        color: #fff;
      }

      .home a:hover {
        color: teal;
      }

      /* About Section Styling */
      /* Those Elements Where We Have Apply Same CSS,
 I'm Selecting Directly 'Section Tag' and 'Class'  */
      section {
        padding-top: 40px;
      }

      section .content {
        width: 80%;
        margin: 40px auto;
        font-family: "Poppins", sans-serif;
      }

      .about .about-details {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      section .title {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
      }

      section .title span {
        color: #0e2431;
        font-size: 30px;
        font-weight: 600;
        position: relative;
        padding-bottom: 8px;
      }

      section .title span::before,
      section .title span::after {
        content: "";
        position: absolute;
        height: 3px;
        width: 100%;
        background: teal;
        left: 0;
        bottom: 0;
      }

      section .title span::after {
        bottom: -7px;
        width: 70%;
        left: 50%;
        transform: translateX(-50%);
      }

      .about .about-details .left {
        width: 45%;
      }

      .about .left img {
        height: 400px;
        width: 400px;
        object-fit: cover;
        border-radius: 12px;
      }

      .about-details .right {
        width: 55%;
      }

      section .topic {
        color: #0e2431;
        font-size: 25px;
        font-weight: 500;
        margin-bottom: 10px;
      }

      .about-details .right p {
        text-align: justify;
        color: #0e2431;
      }

      section .button {
        margin: 16px 0;
      }

      section .button button {
        outline: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-size: 25px;
        font-weight: 400;
        background: teal;
        color: #fff;
        border: 2px solid transparent;
        cursor: pointer;
        transition: all 0.4s ease;
      }

      section .button button:hover {
        border-color: teal;
        background-color: #fff;
        color: teal;
      }

      .about a {
        color: #fff;
      }

      .about a:hover {
        color: teal;
      }

      /* My Skills CSS */
      .skills {
        background: #f0f8ff;
      }

      .skills .content {
        padding: 40px 0;
      }

      .skills .skills-details {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .skills-details .text {
        width: 50%;
      }

      .skills-details p {
        color: #0e2431;
        text-align: justify;
      }

      .skills .skills-details .experience {
        display: flex;
        align-items: center;
        margin: 0 10px;
      }

      .skills-details .experience .num {
        color: #0e2431;
        font-size: 80px;
      }

      .skills-details .experience .exp {
        color: #0e2431;
        margin-left: 20px;
        font-size: 18px;
        font-weight: 500;
        margin: 0 6px;
      }

      .skills-details .boxes {
        width: 45%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .skills-details .box {
        width: calc(100% / 2 - 20px);
        margin: 20px 0;
      }

      .skills-details .boxes .topic {
        font-size: 20px;
        color: teal;
      }

      .skills-details .boxes .per {
        font-size: 60px;
        color: teal;
      }

      /* My Services CSS */
      .services .boxes {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .services .boxes .box {
        margin: 20px 0;
        width: calc(100% / 3 - 20px);
        text-align: center;
        border-radius: 12px;
        padding: 30px 10px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.12);
        cursor: default;
        transition: all 0.4s ease;
      }

      .services .boxes .box:hover {
        background: teal;
        color: #fff;
      }

      .services .boxes .box .icon {
        height: 50px;
        width: 50px;
        background: teal;
        border-radius: 50%;
        text-align: center;
        line-height: 50px;
        font-size: 18px;
        color: #fff;
        margin: 0 auto 10px auto;
        transition: all 0.4s ease;
      }

      .boxes .box:hover .icon {
        background-color: #fff;
        color: teal;
      }

      .services .boxes .box:hover .topic,
      .services .boxes .box:hover p {
        color: #0e2431;
        transition: all 0.4s ease;
      }

      .services .boxes .box:hover .topic,
      .services .boxes .box:hover p {
        color: #fff;
      }

      /* Contact Me CSS */
      .contact {
        background: #f0f8ff;
      }

      .contact .content {
        margin: 0 auto;
        padding: 30px 0;
      }

      .contact .text {
        width: 80%;
        text-align: center;
        margin: auto;
      }

      .contact a {
        color: #fff;
      }

      .contact a:hover {
        color: teal;
      }

      /* Footer CSS */
      footer {
        background: teal;
        padding: 15px 0;
        text-align: center;
        font-family: "Poppins", sans-serif;
      }

      footer .text span {
        font-size: 17px;
        font-weight: 400;
        color: #fff;
      }

      footer .text span a {
        font-weight: 500;
        color: #fff;
      }

      footer .text span a:hover {
        text-decoration: underline;
      }

      /* Scroll TO Top Button CSS */
      .scroll-button a {
        position: fixed;
        bottom: 20px;
        right: 20px;
        color: #fff;
        background: teal;
        padding: 7px 12px;
        font-size: 18px;
        border-radius: 6px;
        box-shadow: rgba(0, 0, 0, 0.15);
        display: none;
      }

      /* Responsive Media Query */
      @media (max-width: 1190px) {
        section .content {
          width: 85%;
        }
      }

      @media (max-width: 1000px) {
        .about .about-details {
          justify-content: center;
          flex-direction: column;
        }

        .about .about-details .left {
          display: flex;
          justify-content: center;
          width: 100%;
        }

        .about-details .right {
          width: 90%;
          margin: 40px 0;
        }

        .services .boxes .box {
          margin: 20px 0;
          width: calc(100% / 2 - 20px);
        }
      }

      @media (max-width: 900px) {
        .about .left img {
          height: 350px;
          width: 350px;
        }
      }

      @media (max-width: 750px) {
        nav .navbar {
          width: 90%;
        }

        nav .navbar .menu {
          position: fixed;
          left: -100%;
          top: 0;
          background: #0e2431;
          height: 100vh;
          max-width: 400px;
          width: 100%;
          padding-top: 60px;
          flex-direction: column;
          align-items: center;
          transition: all 0.5s ease;
        }

        .navbar.active .menu {
          left: 0;
        }

        nav .navbar .menu a {
          font-size: 23px;
          display: block;
          color: #fff;
          margin: 10px 0;
        }

        nav.sticky .menu a:hover {
          color: teal;
        }

        nav .navbar .media-icons {
          display: none;
        }

        nav .menu-btn,
        .navbar .menu .cancel-btn {
          display: block;
        }

        .home .text-two {
          font-size: 65px;
        }

        .home .text-three {
          font-size: 35px;
        }

        .skills .skills-details {
          align-items: center;
          justify-content: center;
          flex-direction: column;
        }

        .skills-details .text {
          width: 100%;
          margin-bottom: 50px;
        }

        .skills-details .boxes {
          justify-content: center;
          align-items: center;
          width: 100%;
        }

        .services .boxes .box {
          margin: 20px 0;
          width: 100%;
        }

        .contact .text {
          width: 100%;
        }
      }

      @media (max-width: 500px) {
        .home .text-two {
          font-size: 55px;
        }

        .home .text-three {
          font-size: 33px;
        }

        .skills-details .boxes .per {
          font-size: 50px;
          color: teal;
        }
      }
    </style>
    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
      .home {
        height: 100vh;
        width: 100%;
        background: url("Images/background.png") no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        font-family: "Ubuntu", sans-serif;
      }
    </style>
  </head>

  <body>
    <!-- Move to up button -->
    <div class="scroll-button">
      <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- navgaition menu -->
    <nav>
      <div class="navbar">
        <div class="logo"><a href="#">Sameeeep</a></div>
        <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#blog">Blogs</a></li>
          <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
        </ul>
        <div class="media-icons">
          <a href="https://facebook.com/profile.php?id=100087963609013" target="_blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="https://twitter.com/SawMeep3" target="_blank"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="https://instagram.com/sameep2222/" target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
        </div>
      </div>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </nav>

    <!-- Home Section Start -->
    <section class="home" id="home">
      <div class="home-content">
        <div class="text">
          <div class="text-one">Hello World!</div>
          <div class="text-two">I'm Samip Chaulagain</div>
          <div class="text-three">SEO Enthusiast</div>
          <div class="text-four">From Nepal</div>
        </div>
        <div class="button">
          <button>
            <a href="https://facebook.com/profile.php?id=100087963609013"target="_blank"
              >Hire Me</a
            >
          </button>
        </div>
      </div>
    </section>

    <!-- About Section Start -->
    <section class="about" id="about">
      <div class="content">
        <div class="title"><span>About Me</span></div>
        <div class="about-details">
          <div class="left">
          </div>
          <div class="right">
            <div class="topic">Know more</div>
            <p>Hello, my name is Samip Chaulagain now I'm exploring SEO.</p>
            <div class="button">
              <button><a href="https://drive.google.com/file/d/1wbatjoMn9ialWuYugJCb5akdvroMJJ8H/view?usp=sharing"target="_blank">View CV</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- My Skill Section Start -->
    <!-- Section Tag and Other Div will same where we need to put same CSS -->
    <section class="skills" id="skills">
      <div class="content">
        <div class="title"><span>My Skills</span></div>
        <div class="skills-details">
          <div class="text">
            <div class="topic">Skills Reflects Our Knowledge</div>
            <p>
              As most of the web developer, I began my journey with HTML, CSS
              and JavaScript. And being a final year undergraduate, I have been
              familiar with many of the programming language like C, C++, Java,
              Python. Aside from that, I am a bit familiar with SEO. Currently, I am exploring and planning to pursue
              my career in the field of SEO.
            </p>
            <div class="experience">
              <div class="num">3</div>
              <div class="exp">
                Years Of <br />
                Learning Journey
              </div>
            </div>
          </div>
          <div class="boxes">
            <div class="box">
              <div class="topic">SEO</div>
              <div class="per">60%</div>
            </div>
            <div class="box">
              <div class="topic">HTML/CSS</div>
              <div class="per">80%</div>
            </div>
            <div class="box">
              <div class="topic">JavaScript</div>
              <div class="per">60%</div>
            </div>
            <div class="box">
              <div class="topic">C programming</div>
              <div class="per">60%</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- My Services Section Start -->
    <section class="services" id="services">
      <div class="content">
        <div class="title"><span>My Services</span></div>
        <div class="boxes">
          <div class="box">
            <div class="icon">
              <i class="fas fa-desktop"></i>
            </div>
            <div class="topic">Frontend Development</div>
            <p>
              Since, I am more of a Designer than the developer, I enjoy making
              visually appealing templates but I do code sometimes.
            </p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <div class="topic">SEO</div>
            <p>
              SEO is the first thing I learned after dipping my toes
              into the field of IT.
            </p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="topic">Website Analysis</div>
            <p>
              WE review the current website to identify issues related to SEO, such as broken links, poor content, or technical problems.
            </p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fab fa-android"></i>
            </div>
            <div class="topic">On-Page SEO</div>
            <p>
              Title & Meta Tags Optimization, Content Optimization, URL Structure, Internal Linking
            </p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-camera-retro"></i>
            </div>
            <div class="topic">Technical SEO</div>
            <p>
              Site Speed Optimization,XML Sitemap Creation,Mobile Optimization
            </p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-tablet-alt"></i>
            </div>
            <div class="topic">Off-Page SEO</div>
            <p>
              Link Building, Guest Posting, Social Media Integration, Local SEO
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="blog" id="blog">
    <div class="content">
    <div class="title"><span>Blogs</span></div>
      <?php require_once("blog.php") ?>
    </section>

    <!-- Contact Me section Start -->
    <section class="contact" id="contact">
      <div class="content">
        <div class="title"><span>Contact Me</span></div>
        <div class="text">
          <div class="topic">Have Any Project?</div>
          <p>
            Ping me at <b>chaulagain@gmail.com</b> or chat by clicking the
            button below.
          </p>
          <div class="button">
            <button><a href="https://m.me/profile.php?id=100087963609013" target="_blank">Let's Chat</a></button>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Footer Section Start -->
    <footer>
      <div class="text">
        <span
          >Created By <a href="#">Sameeeep</a> | &#169; 2021 All Rights
          Reserved</span
        >
      </div>
    </footer>

    <script>
      // Sticky Navigation Menu JS Code
      let nav = document.querySelector("nav");
      let scrollBtn = document.querySelector(".scroll-button a");
      console.log(scrollBtn);
      let val;
      window.onscroll = function () {
        if (document.documentElement.scrollTop > 20) {
          nav.classList.add("sticky");
          scrollBtn.style.display = "block";
        } else {
          nav.classList.remove("sticky");
          scrollBtn.style.display = "none";
        }
      };

      // Side NavIgation Menu JS Code
      let body = document.querySelector("body");
      let navBar = document.querySelector(".navbar");
      let menuBtn = document.querySelector(".menu-btn");
      let cancelBtn = document.querySelector(".cancel-btn");
      menuBtn.onclick = function () {
        navBar.classList.add("active");
        menuBtn.style.opacity = "0";
        menuBtn.style.pointerEvents = "none";
        body.style.overflow = "hidden";
        scrollBtn.style.pointerEvents = "none";
      };
      cancelBtn.onclick = function () {
        navBar.classList.remove("active");
        menuBtn.style.opacity = "1";
        menuBtn.style.pointerEvents = "auto";
        body.style.overflow = "auto";
        scrollBtn.style.pointerEvents = "auto";
      };

      // Side Navigation Bar Close While We Click On Navigation Links
      let navLinks = document.querySelectorAll(".menu li a");
      for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener("click", function () {
          navBar.classList.remove("active");
          menuBtn.style.opacity = "1";
          menuBtn.style.pointerEvents = "auto";
        });
      }
    </script>
  </body>
</html>
