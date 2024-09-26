<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Cart</title>
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
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/store') }}">Store</a></li>
        <li><a href="{{ url('/benefits') }}">Health Benefits</a></li>
        <li><a href="{{ url('/content') }}">Contact Us</a></li>
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
        </div>
    </header>

    <section>
      <div class="text1">
        <h1> Cart Items</h1>
    </div>
        <div class="cart-container">
            <button class="clear-button" onclick="clearCart()">Clear Your Cart</button>
            <div id="cart-items">
            </div>
        </div>
        <div class="total">
            <p>Total : <span id="total"></span></p>
        </div>
        <script src="../js/ecommerce.js"></script>
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
