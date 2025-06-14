<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <section id="header" data-aos="fade-down" data-aos-duration="2000">
      <div class="container">
        <img
          src="img/logo.png"
          alt="ff"
          class="logo"
          data-aos="fade-right"
          data-aos-duration="2000"
        />
        <div class="header-text" data-aos="fade-right" data-aos-duration="2000">
          <h1>
            The popular Teacher <br />
            in the world in 2025
          </h1>
          <span class="square"></span>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
            quod ipsum tempora, doloremque earum voluptas!
          </p>
          <button class="common-btn">Read More</button>
          <div class="line">
            <span class="line1"></span><br />
            <span class="line2"></span><br />
            <span class="line3"></span>
          </div>
        </div>
      </div>
    </section>
    <nav id="sidenav">
      <ul>
        <li><a href="#header">Home</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#Offer">Offer</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#course">course</a></li>
        @if (Route::has('login'))
        <nav class="">
            @auth
            <li>
                <x-app-layout>
                </x-app-layout>
            </li>
            
            @else
                <li>
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal"
                    >
                        Log in
                    </a>
                </li>

                @if (Route::has('register'))
                    <li>
                        <a
                            href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    </li>
                @endif
            @endauth
        </nav>
    @endif
      </ul>
    </nav>
    <img src="img/menu.png" alt="" id="menubtn" />

    <section id="about">
      <div
        class="about-left-col"
        data-aos="fade-right"
        data-aos-duration="2000"
      >
        <img src="img/about.png" alt="" />
      </div>
      <div
        class="about-right-col"
        data-aos="fade-left"
        data-aos-duration="2000"
      >
      @foreach ($about as $data)
          
      <div class="about-text">
        <h1>{{$data->names}}</h1>
        <span class="square"></span>
        <p>
          {{$data->des}}
        </p>
        <br /><br />
        <div class="line">
          <span class="line1"></span><br />
          <span class="line2"></span><br />
          <span class="line3"></span>
        </div>
        <h2>
          {{$data->title}}
        </h2>
        <h3>
          {{$data->sub_des}}
        </h3>
      </div>
      @endforeach
      </div>
    </section>

    <section id="feature">
      <div class="feature-row">
        <div class="feature-col" data-aos="fade-right" data-aos-duration="2000">
          <img src="img/pic-1.png" alt="" />
          <h4>Learn Anywhere</h4>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi,
            perferendis pariatur accusantium veritatis aperiam voluptatem?
          </p>
        </div>
        <div class="feature-col" data-aos="fade-right" data-aos-duration="2000">
          <img src="img/pic-2.png" alt="" />
          <h4>Learn Anybody</h4>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi,
            perferendis pariatur accusantium veritatis aperiam voluptatem?
          </p>
        </div>
        <div class="feature-col" data-aos="fade-right" data-aos-duration="2000">
          <img src="img/pic-3.png" alt="" />
          <h4>Learn Anything</h4>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi,
            perferendis pariatur accusantium veritatis aperiam voluptatem?
          </p>
        </div>
      </div>
      <div class="feature-btn">
        <div class="line">
          <span class="line1"></span><br />
          <span class="line2"></span><br />
          <span class="line3"></span>
        </div>
        <button class="common-btn">Start it Free</button>
      </div>
    </section>

    <section id="course">
      <div class="container course-row">
        <div class="course-left-col">
          <div class="course-text">
            <h1>
              Bro khnow Me who <br />
              are You You are Me
            </h1>
            <span class="square"></span>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et
              delectus, possimus maxime minima aliquid expedita corrupti
              mollitia quo similique blanditiis dolorem accusamus ullam quam
              ipsa animi, nostrum totam eaque voluptates.
            </p>
            <button class="common-btn">Views all Courses</button>
            <div class="line">
              <span class="line1"></span><br />
              <span class="line2"></span><br />
              <span class="line3"></span>
            </div>
          </div>
        </div>
        <div class="course-right-col">
          <img
            src="img/course.png"
            alt=""
            data-aos="fade-left"
            data-aos-duration="2000"
          />
        </div>
      </div>
    </section>

    <section id="Offer">
      <div
        class="about-left-col"
        data-aos="fade-right"
        data-aos-duration="2000"
      >
        <img src="img/offer.png" alt="" />
      </div>
      @foreach ($offer as $offer)
          
      <div class="about-right-col">
        <div class="about-text">
          <h1>{{$offer->titles}}</h1>
          <span class="square"></span>
          <p>
           {{$offer->des}}
          </p>
          <button class="common-btn">Start Now</button>
          <br /><br />
          <div class="line">
            <span class="line1"></span><br />
            <span class="line2"></span><br />
            <span class="line3"></span>
          </div>
        </div>
      </div>
      @endforeach
    </section>

    <section id="contact" data-aos="fade-up" data-aos-duration="2000">
      <div class="container contact-row">
        <div class="contact-left-col">
          <h1>sign up now everyone</h1>
          <form action="{{url('postcontact')}}" method="POST">
            @csrf
            <input type="text" placeholder="Enter name"  name="name"/>
            <input type="email" placeholder="Enter email"  name="email"/>
            <input type="password" placeholder="Enter password"  name="password"/>
            <input type="text" placeholder="Enter message" name="message" />
            <div class="btn-box">
              <button class="common-btn" type="submit">Send</button>
            </div>
          </form>
          <div class="line">
            <span class="line1"></span><br />
            <span class="line2"></span><br />
            <span class="line3"></span>
          </div>
        </div>
        <div class="contact-right-col">
          <img src="img/contact.png" alt="" />
        </div>
      </div>
    </section>

    <section id="footer">
      <div class="container footer-row">
        <hr />
        <div class="footer-left-col">
          <div class="footer-links">
            <div class="link-tittle">
              <h4>About Us Me</h4>
              <small>Our plan</small><br />
              <small>Free trial</small>
            </div>
            <div class="link-tittle">
              <h4>contact</h4>
              <small>Our plan</small><br />
              <small>Free trial</small>
            </div>
            <div class="link-tittle">
              <h4>service</h4>
              <small>Our plan</small><br />
              <small>Free trial</small>
            </div>
            <div class="link-tittle">
              <h4>okay Bro</h4>
              <small>Our plan</small><br />
              <small>Free trial</small>
            </div>
          </div>
        </div>
        <div class="footer-right-col">
          <div class="footer-info">
            <div class="copyright">
              <small>Support Us hongop334@gmail.com</small><br />
              <small>copyright now</small>
            </div>
            <div class="footer-logo">
              <img src="img/logo.png" alt="" />
              <button class="common-btn">English</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="socail-icon">
      <img src="img/twitter.png" alt="" />
      <img src="img/facebook.png" alt="" />
      <img src="img/linkedin.png" alt="" />
      <img src="img/twitter.png" alt="" />
    </div>

    <script>
      var menubtn = document.getElementById("menubtn");
      var sidenav = document.getElementById("sidenav");

      sidenav.style.right = "-250px";
      menubtn.onclick = function () {
        if (sidenav.style.right == "-250px") {
          sidenav.style.right = "0px";
        } else {
          sidenav.style.right = "-250px";
        }
      };
      var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true,
      });
    </script>
  </body>
</html>
