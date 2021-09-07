<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />

    <title>Slider </title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" />
  </head>
  <body >
 
    <div class="slideshow-container">
      <!--Slides-->
      
        <?php if (have_posts()): ?>
          <?php while ( have_posts()) :  the_post()?>
          <div class="mySlides fade"> <article> <p><?php the_content()?></p>
        <button onClick="location.href=''" type="button">
          Call to action 
        </button>
        <button onclick="location.href=''" type="button">
          Read More
        </button>
        </article>
        </div>
        <?php endwhile?>
        <?php endif ?>
      
    
      
     

      <!-- The dots -->
      <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
      </div>
      
      <div class="numbersShow-container">
      <!--Slides-->

      <?php if (have_posts()): ?>
          <?php while ( have_posts()) :  the_post()?>
      <div class="myNumSlides fade">
        <article><?php the_title()?></article> 
      <div class="someText">
          <article><?php the_content()?></article>
        </div>
        </div>
      <?php endwhile?>
        <?php endif ?>

    </div>

    <!-- The numbers -->
    <div class="circle">
      <span class="circled-number" onclick="currentNumber(1)">1</span>
      <span class="circled-number" onclick="currentNumber(2)">2</span>
      <span class="circled-number" onclick="currentNumber(3)">3</span>
      <span class="circled-number" onclick="currentNumber(4)">4</span>
      <span class="circled-number" onclick="currentNumber(5)">5</span>
      <span class="circled-number" onclick="currentNumber(6)">6</span>
      <span class="circled-number" onclick="currentNumber(7)">7</span>
    </div>

     <!-- Script for the slider -->
     <script>
      var slideIndex = 0;
      showSlides();
      // change on dot click
      function currentSlide(n) {
        if (n > slides.length) {
          n = 1;
        } else if (n < 1) {
          n = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[n - 1].style.display = "block";
        dots[n - 1].className += " active";
      }
      //show current slide
      function showSlides() {
        var i;
        slides = document.getElementsByClassName("mySlides");
        dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        //timer for slides
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
      }

      //script for numbers

      var NumSlideIndex = 1;
      showNumSlides(NumSlideIndex);
      function currentNumber(n) {
        showNumSlides((NumSlideIndex = n));
      }
      //show actual numbers
      function showNumSlides(n) {
        var i;
        var Numslides = document.getElementsByClassName("myNumSlides");
        var circle = document.getElementsByClassName("circled-number");
        if (n > Numslides.length) {
          NumSlideIndex = 1;
        }
        if (n < 1) {
          NumSlideIndex = Numslides.length;
        }
        for (i = 0; i < Numslides.length; i++) {
          Numslides[i].style.display = "none";
        }
        for (i = 0; i < circle.length; i++) {
          circle[i].className = circle[i].className.replace(" active", "");
        }
        Numslides[NumSlideIndex - 1].style.display = "block";
        circle[NumSlideIndex - 1].className += " active";
      }
    </script>

  </body>
</html>

      