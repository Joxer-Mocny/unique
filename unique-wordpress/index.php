<?php get_header() ?>
 
    <div class="slideshow-container">
      <!--Slides-->
      
        <?php if (have_posts()): ?>
          <?php while ( have_posts()) :  the_post()?>
          <div class="mySlides fade"> <article> <p><?php the_content()?></p>
        <button onClick="location.href='#'" type="button">
          Call to action 
        </button>
        <button onclick="location.href='#'" type="button">
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
      <?php if (have_posts()): ?>
          <?php while ( have_posts()) :  the_post()?>
          <div class="Lorem"><p>
            <article><?php the_title()?></article>
          </p></div>
          <div class="LoremText">
        <p>
          <article><?php the_content()?></article>
        </p>
        </div>
        </div>
      <?php endwhile?>
        <?php endif ?>
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

    <div class="AnotherMenu">
      <p>Aliquam Luctus</p>
      <ul>
        <li><div class="bubble">
          <img src="images/people.svg" alt="" height="25px" /></div>
          <p>SEDSAPIEN NULLA</p>
          <a href="#">Read more</a>
        </li>
        <li>
          <div class="bubble">
          <img src="images/admin.svg" alt="" height="25px" /></div>
          <p>OASDI ADSDAWF</p>
          <a href="#">Read more</a>
        </li>
        <li>
          <div class="bubble">
          <img src="images/calendar.svg" alt="" height="25px" /></div>
          <p>ASDASDA kPKOPJOPJN</p>
          <a href="#">Read more</a>
        </li>
      </ul>
      <div class="bubble">
          <img src="images/calendar.svg" alt="" height="25px" /></div>
          <p>ASDASDA kPKOPJOPJN</p>
          <a href="#">Read more</a>
        </li>
      </ul>
      <?php if (have_posts()): ?>
          <?php while ( have_posts()) :  the_post()?>
      <div class="someBlueText">
      <article><?php the_content()?></article>
      </div>
      <?php endwhile?>
        <?php endif ?>
    </div>
    </div>
    <div class="blog">
      <h1>Blog</h1>
      <div class="photo"><a href="#"><div class="plus"><img src="images/plus.svg" alt="" height="25px" /></div><img src="images/seaSide.jpg" alt="" width="400px"/>
      <p>asiduancaiji jopjopj</p></a>
      <a href="#"><div class="plus"><img src="images/plus.svg" alt="" height="25px" /></div><img src="images/lightHouse.jpg" alt="" width="400px"/>
      <p>asoida opaiop opiopka</p></a>
      <a href="#"><div class="plus"><img src="images/plus.svg" alt="" height="25px" /></div><img src="images/house.jpg" alt="" width="400px"/> 
      <p>oiuoi oiujoiu oilknl</p></a></div>
      
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
  <?php get_footer() ?>
      