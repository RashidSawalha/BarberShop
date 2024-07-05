<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our service</title>
    <link rel="stylesheet" href="ourService.css" />
    <!--font awsome libary-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--end of font awsome libary-->
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
    <?php require_once(__DIR__.'/../includes/header.php');  ?>
    </header>
    <main>
      <!-- Service Section Starts here -->
      <section id="service">
        <div class="title-text">
          <p>SERVICES</p>
          <h1>Indulge in our range of professional grooming services <br> for men, including haircuts, styling, beard care, hot towel shaves, and more</h1>
        </div>
        <div class="service-box">
          <div class="single-service">
            <img  src="ourService_image/Moustache Trim.jpg" alt="Moustache Trim Picture" loading="lazy" />
            <div class="overlay"></div>
            <div class="service-desc">
              <h3>Moustache Trim</h3>
              <hr />
              <p>
                10$
                <br />
                A trim and shaping of your moustache.
              </p>
            </div>
          </div>
          <div class="single-service">
            <img src="stylish-man-sitting-barbershop.jpg" loading="lazy" />
            <div class="overlay"></div>
            <div class="service-desc">
              <h3>Beard Trim Styling</h3>
              <hr />
              <p>
                25$ <br />
                A trim and shaping of your beard.
              </p>
            </div>
          </div>
          <div class="single-service">
            <img src="ourService_image/pic-3.jpg" loading="lazy" />
            <div class="overlay"></div>
            <div class="service-desc">
              <h3>Hair Cut</h3>
              <hr />
              <p style="font-size: 15px">
                30$ <br />
                A basic haircut that includes a wash and style
              </p>
            </div>
          </div>
          <div class="single-service">
          
            <img src="ourService_image/haircolor1.jpg"  loading="lazy"/>
            <div class="overlay"></div>
            <div class="service-desc">
              <h3>Hair color</h3>
              <hr />
              <p>
                45$
                <br />
                A full or partial color treatment for your hair.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!--Pricing :-->

      
    
      <section id="price">
      <div class="title-text">
          <p>Price Table</p>
          <h1>Explore our pricing plans to find the one that delivers the most value for your money</h1>
        </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Service Name</th>
                  <th>Service Price ( $ )</th>
                </tr>
              </thead>
      <tbody>
        <?php
        $con=mysqli_connect("localhost", "root", "", "bpmsdb");
        $ret=mysqli_query($con,"select *from  tblservices");
        $cnt=1;


        while ($row=mysqli_fetch_array($ret)) {
            ?> 

                        <tr>
                          <th scope="row">
                            <?php 
                          echo $cnt;?>
                          </th>
                          <td><?php  echo $row['ServiceName'];?></td>
                          <td><?php  echo $row['Cost'];?></td>
                        </tr>
            <?php $cnt=$cnt+1;}?>
      </tbody>
        </table>
      </section>


          







      <!--Footer-->
      <?php require_once(__DIR__.'/../includes/footer.php');  ?>

      <!--Footer-->
    </main>
  </body>
  <script>
     var img = document.getElementById("logoImage");
        img.src = "../includes/mustache (5).png";
    </script>
</html>
