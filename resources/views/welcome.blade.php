<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="../js/ecommerce.js"></script>
    <title>E-commerce</title>
</head>
<body>
    <header>

      <input type="checkbox" id="menu-toggle" >
      <label for="menu-toggle" class="menu-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
          <path d="M4 5L20 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M4 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M4 19L20 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      </label>
        <ul class="navbar">
          <li><a href="../html/index.html">Home</a></li>
          <li><a href="../html/store.html">Store</a></li>
          <li><a href="../html/benefits.html">Health Benefits</a></li>
          <li><a href="../html/content.html">Contact Us</a></li>
        </ul>

      <div class="textbox1">
        <div>
          <p>Standing Desks Ltd</p>
        </div>

            <div class="search_box">
                <input type="search" id="search" placeholder="Search...">
                <button class="search_btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14 14l2.5 2.5m-.067 2.025a1.48 1.48 0 1 1 2.092-2.092l3.042 3.042a1.48 1.48 0 1 1-2.092 2.092zM16 9A7 7 0 1 0 2 9a7 7 0 0 0 14 0" color="currentColor"/></svg>
                </button>
              </div>
              <a href="../html/cart.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M8 16h7.263c4.488 0 5.17-2.82 5.998-6.93c.239-1.187.358-1.78.071-2.175s-.837-.395-1.938-.395H6"/><path d="M8 16L5.379 3.515A2 2 0 0 0 3.439 2H2.5m6.38 14h-.411C7.105 16 6 17.151 6 18.571a.42.42 0 0 0 .411.429H17.5"/><circle cx="10.5" cy="20.5" r="1.5"/><circle cx="17.5" cy="20.5" r="1.5"/></g></svg>
              </a>
        </div>

    </header>

    <section>
      <div class="popcontainer">
        <input type="checkbox" id="toggle" class="toggle-input">
        <label for="toggle" class="circle-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m20.34 9.32l-14-7a3 3 0 0 0-4.08 3.9l2.4 5.37a1.06 1.06 0 0 1 0 .82l-2.4 5.37A3 3 0 0 0 5 22a3.14 3.14 0 0 0 1.35-.32l14-7a3 3 0 0 0 0-5.36Zm-.89 3.57l-14 7a1 1 0 0 1-1.35-1.3l2.39-5.37a2 2 0 0 0 .08-.22h6.89a1 1 0 0 0 0-2H6.57a2 2 0 0 0-.08-.22L4.1 5.41a1 1 0 0 1 1.35-1.3l14 7a1 1 0 0 1 0 1.78"/></svg></label>
        <div class="popup">
            <a href="../html/content.html" class="contact-link">Contact Us</a>
        </div>
    </div>
        <div class="video_container">
            <video autoplay loop muted>
              <source src="../video/Video1.mp4" type="video/mp4">
            </video>
            <div class="overlay_text">
              <h1>Welcome to Our Store</h1>
              <p>Discover our high-end standing desks equipped with our groundbreaking Swipe technology.</p>
            </div>
          </div>

          <div class="indexBe">
            <h2>Health Benefits</h2>
          </div>
          <div class="Bediv">
            <div class="Becard">
              <h3>Improved Posture and Reduced Back Pain</h3>
            <p>
              Standing desks can significantly improve posture by encouraging users to stand rather than slump or slouch. Many office workers suffer from back pain due to prolonged sitting, which can lead to poor posture and strain on the lower back. Standing desks help to align the spine and reduce the risk of developing chronic back pain.</p>
          </div>
          <div class="Becard">
            <h3>Increased Energy and Productivity</h3>
          <p>
            One of the major benefits of using standing desks is the increase in energy levels and productivity. Standing up promotes better circulation and can reduce feelings of fatigue that are often associated with long periods of sitting. Studies have shown that employees who use standing desks are more alert and focused, which can lead to higher productivity levels.</p>
        </div>
          </div>
          <div class="link_to">
            <a href="../html/benefits.html">Go To Health Benefits Page For More</a>
        </div>

        <div class="slides">
            <div class="slider">
                <div class="slide">
                    <img src="../images/P1.png" alt="slide1">
                </div>
                <div class="slide">
                    <img src="../images/P2.png" alt="slide2">
                </div>
                <div class="slide">
                    <img src="../images/P3.png" alt="slide3">
                </div>
                <div class="slide">
                  <img src="../images/P4.png" alt="slide3">
              </div>
            </div>
        </div>

        <div class="indexBe">
          <h2>Special Offered Products</h2>
        </div>

        <div class="cards">
          <div class="container">
            <div class="product-card">
                <img src="../images/I1.png" alt="Product 1">
                <h2>White Theme</h2>
                <p><span class="line_delete">$660.00      </span>   $600.00</p>

            </div>
            <div class="product-card">
                <img src="../images/I2.png" alt="Product 2">
                <h2>Dark Theme</h2>
                <p><span class="line_delete">$650.00      </span>   $620.00</p>

            </div>

            <div class="product-card">
              <img src="../images/A1.png" alt="Product 6">
              <h2>Glass Theme(ADJ)</h2>
              <p><span class="line_delete">$770.00      </span>   $720.00</p>
          </div>
            </div>
        </div>
        <div class="link_to">
          <a href="../html/store.html">Go To Store</a>
      </div>
    </section>

    <footer>

      <div class="footer-wrapper">
        <div class="row">
          <div class="footer-col">
            <h2>Standing Desk Ltd</h2>
          </div>
          <div class="footer-col">
            <p class="title">Navigation</p>
            <ul>
              <li><a href="../html/index.html">Home</a></li>
              <li>
                <a href="../html/store.html">Store</a>
              </li>
              <li><a href="../html/benefits.html">Benefits</a></li>
              <li><a href="../html/cart.html">Cart</a></li>
              <li><a href="../html/content.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <p class="title">Contact Us</p>
            <ul>
              <li>Phone Number: 321 885 999 </li>
              <li>Email Address: standingDesks.info@gmail.com</li>
            </ul>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1113884199017!2d96.15280407471256!3d16.820829318880204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193e941f2e067%3A0x5e54c9aa66f073eb!2sKBTC%20University-%20School%20of%20IT!5e0!3m2!1sen!2smm!4v1696897048330!5m2!1sen!2smm"
              referrerpolicy="no-referrer-when-downgrade"
              class="map"
            ></iframe>
          </div>
          </div>
          <div class="footer-col">
              <p class="title">Follow Us</p>
              <div class="social-links">
                <a href="https://facebook.com">
                  <img src="../images/Facebook.png" alt="fb image">
              </a>
                <a href="https://twitter.com/?lang=en"
                  ><img src="../images/twitter.png" alt="x image">
                </a>
                <a href="https://www.instagram.com/"
                  ><img src="../images/instagram.png" alt="ig image">
                </a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                  ><img src="../images/youtube.png" alt="yt image">
                </a>
              </div>
        </div>
      </div>
    </footer>

</body>
</html>
