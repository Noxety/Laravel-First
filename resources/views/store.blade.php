<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="../js/ecommerce.js"></script>
    <title>Store</title>
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
                  <a href="../html/cart.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M8 16h7.263c4.488 0 5.17-2.82 5.998-6.93c.239-1.187.358-1.78.071-2.175s-.837-.395-1.938-.395H6"/><path d="M8 16L5.379 3.515A2 2 0 0 0 3.439 2H2.5m6.38 14h-.411C7.105 16 6 17.151 6 18.571a.42.42 0 0 0 .411.429H17.5"/><circle cx="10.5" cy="20.5" r="1.5"/><circle cx="17.5" cy="20.5" r="1.5"/></g></svg>
                  </a>
            </div>



    </header>

    <section>
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

        <div class="cards">
          <div class="container">
            <div class="container">
              <div class="indexBe">
                <h2>Standing Desks </h2>
              </div>
              <div class="product-card">
               <img src="../images/I1.png" alt="Product 1">
               <h2>White Theme</h2>
               <p><span class="line_delete">$660.00      </span>   $600.00</p>
               <button class="buy-button" onclick="addToCart('White Theme','../images/I1.png',600)">Add To Cart</button>
             </div>
             <div class="product-card">
               <img src="../images/I2.png" alt="Product 2">
               <h2>Dark Theme</h2>
               <p><span class="line_delete">$650.00      </span>   $620.00</p>
               <button class="buy-button" onclick="addToCart('Dark Theme','../images/I2.png',620)">Add To Cart</button>
              </div>

           <div class="product-card">
               <img src="../images/I4.png" alt="Product 4">
               <h2>Walnut Theme</h2>
               <p>$640.00</p>
               <button class="buy-button" onclick="addToCart('Walnut Theme','../images/I4.png',640)">Add To Cart</button>
           </div>
         </div>

           <div class="container">
            <div class="indexBe">
              <h2>Standing Desks With TV adjustable</h2>
            </div>
             <div class="product-card">
               <img src="../images/I5.png" alt="Product 9">
               <h2>Black Theme</h2>
               <p>$690.00</p>
               <button class="buy-button" onclick="addToCart('Black Theme','../images/I5.png',690)">Add To Cart</button>
           </div>
           <div class="product-card">
             <img src="../images/A1.png" alt="Product 6">
             <h2>Glass Theme(ADJ)</h2>
             <p><span class="line_delete">$770.00      </span>   $720.00</p>
             <button class="buy-button" onclick="addToCart('Glass Theme(ADJ)','../images/A1.png',720)">Add To Cart</button>
         </div>

       <div class="product-card">
         <img src="../images/A3.png" alt="Product 8">
         <h2>Hollow Theme(ADJ)</h2>
         <p>$700.00</p>
         <button class="buy-button" onclick="addToCart('Hollow Theme(ADJ)','../images/A2.png',700)">Add To Cart</button>
     </div>
           </div>


       <div class="container">
        <div class="indexBe">
          <h2>Cruved Standing Desks </h2>
        </div>
         <div class="product-card">
           <img src="../images/C4.png" alt="Product 5">
           <h2>Curved Pine</h2>
           <p>$680.00</p>
           <button class="buy-button" onclick="addToCart('Curved Pine','../images/C4.png',680)">Add To Cart</button>
       </div>

       <div class="product-card">
         <img src="../images/C2.png" alt="Product 10">
         <h2>Cream V2</h2>
         <p>$660.00</p>
         <button class="buy-button" onclick="addToCart('Cream V2','../images/C2.png',660)">Add To Cart</button>
     </div>
     <div class="product-card">
       <img src="../images/C3.png" alt="Product 10">
       <h2>White CV2</h2>
       <p>$670.00</p>
       <button class="buy-button" onclick="addToCart('White CV2','../images/C3.png',670)">Add To Cart</button>
   </div>
       </div>
          </div>
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
