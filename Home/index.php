<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Artist Salon | Men salon</title>
    <link rel="icon" href="images/icon_tab.png" />
    <script type="text/javascript" src="index.js"></script>

    <!---------------------------------------------------------------------->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Noto+Serif:wght@700&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Noto+Serif:wght@700&family=Roboto&family=Teko:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Noto+Serif:wght@700&family=Open+Sans&family=Roboto&family=Teko:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link href="css/hover.css" rel="stylesheet" media="all" />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Noto+Serif:wght@700&family=Open+Sans&family=Outfit:wght@500&family=Roboto&family=Teko:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flat-icons@1.0.0/creative.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Font for header :-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

    <!--end of font for header ->

    <!------------------------------------------------------------------------->
  </head>

  <body>
    <!--Header-->


    
    



<header>
<?php require_once(__DIR__.'/../includes/header.php');  ?>
     <main>
        <section>
          <h3>Classic Hair Style & Shaves</h3>
          <h1>
            our hairstyle <br />
            enhances your <br />
            smile .
          </h1>
          <h3>we put modern twist to your hair.</h3>
          <br />
          <div class="button">
            <a href="../Book Appoitment/appointment.php">book an appointment</a>
            <i class="fi fi-ss-barber-shop"></i>
          </div>
        </section>
      </main>
     
   </header>


    <main>
      <!-- About us -->
      <section>
        <div class="aboutUs">
          <div class="text">
            <h1>About Us</h1>
           

            <h2>The Barber Shop Science 1991</h2>
            <div class="beard_pic">
              <img src="images/about-logo.png" alt="" />
            </div>
            <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
	          <div class="heading-section mb-4 mt-md-5">
	          	
	           
	          </div>
	          <div class="pb-md-5">
							<p><?php  echo $row['PageDescription'];?>.</p>
							
						</div>
						<?php } ?>
            <div class="sig">
            <p id="sigName">Diaa Sharqawi</p>
            <p id="work" >OWNER & STYLIST</p>
            </div>
            
            <div class="button hvr-outline-out">
              <a href="../About_Us/about.php"> view more</a>
              <i class="fa-solid fa-arrow-right"></i>
            </div>
            </div>
         
          <div class="images_continer">
            <div class="about_Us_image">
             <!--  <img src="Home_image/About_Us_pic_1.jpg" alt="Barber Shop !"
              width="667" height="1000" " /> -->
              <img
                src="Home_image/About_Us_pic_2.jpg"
                alt="Barber Shop !"
                width="1333"
                height="2000"
              />
            </div>
          </div>
        </div>
      </section>

      <!--Gallery :-->
      <section>
        <div class="Gallery">
          <h1>Gallery</h1>
          <div class="line"></div>
          <div class="wrapper">
            <div class="wrapper-holder">
              <div id="slider-img-1"></div>
              <div id="slider-img-2"></div>
              <div id="slider-img-3"></div>
              <div id="slider-img-4"></div>
            </div>
          </div>
          <!--  <div class="button-holder">
            <a href="#slider-img-1" class="button"></a>
            <a href="#slider-img-2" class="button"></a>
            <a href="#slider-img-3" class="button"></a>
            <a href="#slider-img-4" class="button"></a>
          </div> -->
        </div>
      </section>

      <!--Our servies-->
      <section>
        <div class="ourService">
          <div class="row">
            <h1>Our services</h1>
            <div class="line"></div>
          </div>
          <div class="item">
            <div class="column">
              <!--column one -->
              <div class="card">
                <a href="../OurService/ourService.php">
                <div class="icon">
                  <i class="fa-solid fa-scissors fa-rotate-270"></i>
                </div>
                </a>
                <h3>Haircut Style</h3>
                <p>
                Transform your look with our professional haircuts tailored to your unique style.
                <br> Book your appointment today
                </p>
                <h3>From 15$</h3>
              </div>
            </div>
            <div class="column">
              <!--column two -->
              <div class="card">
              <a href="../OurService/ourService.php">

                <div class="icon">
                  <i class="fi fi-rr-chair-office"></i>
                </div>
              </a>
                <h3>Cut & Hair Style</h3>
                <p>
                Experience our expert hair cutting and styling services.
                <br> Get your perfect look today - book now and transform your style!
                </p>
                <h3>From 25$</h3>
              </div>
            </div>
            <div class="column">
              <!--column three -->
              <div class="card">
              <a href="../OurService/ourService.php">

                <div class="icon">
                  <i class="fi fi-rr-barber-shop"></i>
                </div>
              </a>
                <h3>Color & Hair Wash</h3>
                <p>
                Transform your hair with our color and wash services.
                <br> Get a fresh new look - book your appointment now!
                </p>
                <h3>From 30$</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--send us a masseage:
      <section>
        <div class="send_us_msg">
          <div class="containerSendUsMsg">
            <div class="content">
              <div class="left-side">
                <div class="address details">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="topic">Address</div>
                  <div class="text-one">Palestine, Nablus</div>
                  <div class="text-two">swalihi mall</div>
                </div>
                <div class="phone details">
                  <i class="fas fa-phone-alt"></i>
                  <div class="topic">Phone</div>
                  <div class="text-one">+970599105698</div>
                  <div class="text-two">+970599604077</div>
                </div>
                <div class="email details">
                  <i class="fas fa-envelope"></i>
                  <div class="topic">Email</div>
                  <div class="text-one">TheArtistSalon@gmail.com</div>
                  <div class="text-two">info.ArtisitSalon@gmail.com</div>
                </div>
              </div>
              <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>
                  If you have any work from me or any types of quries related to
                  my tutorial, you can send me message from here. It's my
                  pleasure to help you.
                </p>
                <form action="#">
                  <div class="input-box">
                    <input type="text" placeholder="Enter your name" />
                  </div>
                  <div class="input-box">
                    <input type="text" placeholder="Enter your email" />
                  </div>
                  <div class="input-box message-box">
                    <textarea placeholder="Enter your message"></textarea>
                  </div>
                  <div class="Sendbutton">
                    <input
                      type="button"
                      value="Send Now"
                      class="buttonSendContactUs"
                    />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    -->

      <!--Map-->
      <section>
        
        <div class="map">
        <div class="row">
            <h1>Our Location</h1>
            <div class="line"></div>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1254.7006103769777!2d35.22311116506082!3d32.2266799463452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ce12a2e7b56cd%3A0x18048ec07d4acb68!2z2KfZhNi12YjYp9mE2K3ZiiDZhdmI2YQ!5e1!3m2!1sar!2s!4v1681142147497!5m2!1sar!2s"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </section>

      <!--Footer-->
      <?php require_once(__DIR__.'/../includes/footer.php');  ?>

      <!--Footer-->

     
    </main>
   
  </body>
</html>
