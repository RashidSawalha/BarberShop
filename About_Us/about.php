<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="about.css" />
    <!--font awsome libary-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--end of font awsome libary-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--header font "About us" -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<!--end of header font -->
<!--text font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!--end of tet font-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">



  </head>
  <body>
    <header>
      <!-- <nav>
        <div class="logo">
          <h1>The Artist <span> Salon</span></h1>
        </div>
        <ul>
          <li><a href="/Home/index.html">Home</a></li>
          <li><a href="/About_Us/about.html" class="selected">About</a></li>
          <li><a href="/Our Service/ourService.html">Services</a></li>
          <li><a href="/Reviews/review.html">Reviews</a></li>
        </ul>
      </nav> -->
        
      <?php require_once(__DIR__.'/../includes/header.php');  ?>



      <div class="container">
        <video autoplay loop muted plays-inline class="background-clip">
          <source src="AboutUs_image/AboutUs_background.mp4" type="video/mp4" />
        </video>
        <div class="content">
          <h1>About Us</h1>
        </div>
      </div>
    </header>
    <main>
      <!--About us-->
      <section id="aboutUs">
        <div class="title-text">
          <p>INTRODUCTION</p>
          <h1>About AL MOLOK SALON</h1>

        </div>
        <div class="aboutUs-box">
          <div class="text-aboutUs">
            <p>SINCE 2012</p>
            <h1>Al Molok Barber Shop</h1>
            
            <p>
            Welcome to our barbershop, where we're passionate about making our clients look and feel their best. Our barbers have years of experience and are dedicated to providing top-quality haircuts, shaves, and grooming services.
            </p>
            <p>
            We pride ourselves on creating a welcoming atmosphere that feels like home, with vintage decor and classic tunes that transport you back to a simpler time. Our team is committed to making sure you leave our shop feeling refreshed, relaxed, and ready to take on the world.
            </p>
            <ul style="list-style-type: circle">
              <li>We're professional and certified barbers</li>
              <li>We use quality products to make you look perfect</li>
              <li>We care about our customers satisfaction</li>
            </ul>
          </div>

          <div class="aboutUs-img">
            <img src="AboutUs_image/about us .jpg" alt="About us Image" width="" height="" loading="lazy" />
          </div>
        </div>
      </section>

      <!--Our team-->
      <section>
        <div class="team-section">
          <div class="container">
            <div class="title">
              <div class="row">
                <div class="title">
                  <div class="title-text">
                    <p>OUR BARBER TEAM</p>
                    <h1>Meet Our Hair Cut Expert Barber</h1>
                  </div>
                </div>
              </div>
              <div class="team-card">
                <div class="card">
                  <div class="image-section">
                    <img src="AboutUs_image/diaa.jpg" alt="" />
                  </div>
                  <div class="content">
                    <h3>Diaa Sharqawi</h3>
                    <h4>Master Barber</h4>
                    <p>
                      "Diaa is not just a master barber, he is a true artist,
                      with a warm personality and dedication to personalized
                      service that sets him apart."
                    </p>
                  </div>
                </div>
                <div class="card">
                  <div class="image-section">
                    <img src="AboutUs_image/rashed1.jpg" alt="" />
                  </div>
                  <div class="content">
                    <h3>Rashid Sawalha</h3>
                    <h4>Hair Expert</h4>
                    <p>
                      Rashed, a hair master with unmatched expertise, delivers
                      exceptional service and outstanding results, with a
                      dedication to his clients that is truly remarkable
                    </p>
                  </div>
                </div>
                <div class="card">
                  <div class="image-section">
                    <img src="AboutUs_image/mousa.jpg" alt="" />
                  </div>
                  <div class="content">
                    <h3>Mousa Fattash</h3>
                    <h4>Beard Expert</h4>
                    <p>
                      Mousa, a passionate and dedicated beard master, creates
                      personalized works of art that enhance his clients' style
                      and natural features, while providing a welcoming
                      atmosphere in his shop
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section >
        <div class="countSec">
          <div class="counter">
           <div class="counter-item">
              <img src="AboutUs_image/barber (2).png" alt="Skilled Barbers">
              <h3>SKILLED BARBERS</h3>
              <span class="count" data-count="5">0</span>

          </div>
          <div class="counter-item">
            <img src="AboutUs_image/hairstyle.png" alt="Happy Clients">
            <h3>HAPPY CLIENTS</h3>
            <span class="count" data-count="100">0</span>

          </div>
          <div class="counter-item">
            <img src="AboutUs_image/man.png" alt="Custom Haircuts">
            <h3>CUSTOM HAIRCUTS</h3>
            <span class="count" data-count="30">0</span>

          </div>
  <div class="counter-item">
    <img src="AboutUs_image/man (1).png" alt="Years Experience">
    <h3>YEARS EXPERIENCE</h3>
    <span class="count" data-count="20">0</span>

  </div>
</div>
</div>
      

    </section>
      <!--Map-->
      <section>
        
        <div class="map">
        <div class="row">
        <div class="title-text">
                    <p>Find Us !</p>
                    <h1 >Our barbershop is conveniently located  in the heart of Nablus, making it easy for you to get a great haircut or shave without having to travel far. You can find us at Akadimia Street, just a few blocks from the intersection of An-Najah National University Road.</h1>
                  </div>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!4v1683841772085!6m8!1m7!1sCAoSLEFGMVFpcE5LUTR3QUZzM0hpMjZ3OVZFTzFQOVBGNnhSV19ET1ZRYjd3VW82!2m2!1d32.2267356!2d35.222969!3f212.08652507524388!4f12.23121737094975!5f0.4021660646364385" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
      <!--Footer-->
      <?php require_once(__DIR__.'/../includes/footer.php');  ?>

      <!--Footer-->
    </main>
  </body>
  <script type="text/javascript">
 $(document).ready(function() {
  $(window).scroll(function() {
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
    var offset = $('.counter').offset().top;

    if (scrollTop + windowHeight > offset) {
      $('.count').each(function() {
        var count = $(this);
        var countTo = count.attr('data-count');

        $({ countNum: count.text() }).animate(
          { countNum: countTo },
          {
            duration: 2000,
            easing: 'linear',
            step: function() {
              count.text(Math.floor(this.countNum));
            },
            complete: function() {
              count.text(this.countNum);
            },
          }
        );
      });
    }
  });
});


  </script>
</html>
