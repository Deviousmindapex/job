<?php
include_once "php/insert.php";
    ?>







<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />

    <style></style>
  </head>
  <body>
    <div class="container">
      <div class="base">
        <img class="ananas" src="image_summer.jpg" alt="" />
        <div class="top-bar">
          <div class="logo-pineapple">
            <li class="logo">
              <a href="#"><img src="Union.jpg" alt="Pineapple" /></a>
            </li>
            <li class="pineapple"><a href="#">pineapple</a></li>
            <li class="about"><a href="#">About</a></li>
            <li class="work"><a href="#">How it works</a></li>
            <li class="contact"><a href="contact.php">Contact</a></li>
          </div>
        </div>
        <div class="heading">
          <span>Subscribe to newsletter</span>
        </div>
        <div class="subheading">
          <span
            >Subscribe to our newsletter and get 10% discount on pinapple
            glasses</span
          >
         
        </div>
        <div class="form">
          <form method="post" action="index.php" id="validate" >
            <button class="submitbtn" type="submit" id="submit" name="submit">
              <img src="ic_arrow.jpg" alt="Button" />
            </button>
            <!-- <label for="email" id="labelForEmail"></label> -->
            
            <?php   error(); ?>
            <input
              class="input"
              name="email"
              id="email"
              placeholder="Type your email address here..."
              type="text"
              onkeydown="return (event.keyCode!=13);"
            />
            
            <div class="input-line"></div>
            <input
              class="checkbox"
              type="checkbox"
              name="checkbox"
              id="checkbox"
            />
            <span class="agree"
              >I agree to
              <a style="text-decoration: underline" href="#"
                >terms of service</a
              ></span
            >
          



          </form>
        </div>
        <div class="line"></div>
        <div class="social">
          <div class="facebook">
            <a href="#"><img src="ic_facebook.jpg" alt="facebook" /></a>
          </div>
          <div class="instagram"></div>
          <div class="twitter"></div>
          <div class="youtube"></div>
        </div>
    
        <!-- <img src="" alt="" class="img-base" /> -->
      </div>
     
      </div>
      <!-- <div class="img-base"></div> -->
    </div>
  </body>
</html>
