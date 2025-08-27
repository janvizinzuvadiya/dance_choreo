<?php
include 'connection.php';

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>☀️Me Khushi Agrawal</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
  
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">

  <style>
    html
    {
        scroll-behavior: smooth; 
    }
    body
    {
      margin:0;
      padding:0;
    }

    

    
.link-fx-1 {
  color: var(--white-color);
  position: relative;
  display: inline-flex;
  align-items: center;
  height: 32px;
  padding: 0 6px;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.link-fx-1:hover {
  color: var(--link-hover-color);
}

.link-fx-1:hover::before {
  transform: translateX(17px) scaleX(0);
  transition: transform .2s;
}

.link-fx-1:hover .icon circle {
  stroke-dashoffset: 200;
  transition: stroke-dashoffset .2s .1s;
}

.link-fx-1:hover .icon line {
  transform: rotate(-180deg);
}

.link-fx-1:hover .icon line:last-child {
  transform: rotate(180deg);
}

.link-fx-1::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: currentColor;
  transform-origin: right center;
  transition: transform .2s .1s;
}

.link-fx-1 .icon {
  position: absolute;
  right: 0;
  bottom: 0;
  transform: translateX(100%) rotate(90deg);
  font-size: 32px;
}

.icon {
  --size: 1em;
  height: var(--size);
  width: var(--size);
  display: inline-block;
  color: inherit;
  fill: currentColor;
  line-height: 1;
  flex-shrink: 0;
  max-width: initial;
}

.link-fx-1 .icon circle {
  stroke-dasharray: 100;
  stroke-dashoffset: 100;
  transition: stroke-dashoffset .2s;
}

.link-fx-1 .icon line {
  transition: transform .4s;
  transform-origin: 13px 15px;
}

.link-fx-1 .icon line:last-child {
  transform-origin: 19px 15px;
}

/* nav */


.nav-tabs {
  background-color: var(--section-bg-color);
  border-radius: var(--border-radius-large);
  border-bottom: 0;
  padding: 15px;
}

.nav-tabs .nav-link {
  border-radius: var(--border-radius-large);
  border: 0;
  padding: 15px 25px;
  transition: all 0.3s;
}

.nav-tabs .nav-link:first-child {
  margin-right: 15px;
}

.nav-tabs .nav-item.show .nav-link, 
.nav-tabs .nav-link.active,
.nav-tabs .nav-link:focus, 
.nav-tabs .nav-link:hover {
  background: var(--white-color);
  box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
  color: var(--primary-color);
}

.nav-tabs h5 {
  color: var(--p-color); 
  margin-bottom: 0;
}

.nav-tabs .nav-link.active h5,
.nav-tabs .nav-link:focus h5, 
.nav-tabs .nav-link:hover h5 {
  color: var(--primary-color);
}

/*---------------------------------------
  CUSTOM ICON COLOR               
-----------------------------------------*/
.custom-icon {
  color: var(--secondary-color);
}


/*---------------------------------------
  CUSTOM BUTTON               
-----------------------------------------*/
.custom-btn {
  background: var(--custom-btn-bg-color);
  border: 2px solid transparent;
  border-radius: var(--border-radius-large);
  color: var(--white-color);
  font-size: var(--btn-font-size);
  font-weight: var(--font-weight-bold);
  line-height: normal;
  transition: all 0.3s;
  padding: 10px 20px;
}

.custom-btn:hover {
  background: var(--custom-btn-bg-hover-color);
  color: var(--white-color);
}

.custom-border-btn {
  background: transparent;
  border: 2px solid var(--custom-btn-bg-color);
  color: var(--custom-btn-bg-color);
}

.navbar-expand-lg .navbar-nav .nav-link.custom-btn:hover,
.custom-border-btn:hover {
  background: var(--custom-btn-bg-hover-color);
  border-color: transparent;
  color: var(--white-color);
}

.custom-btn-bg-white {
  border-color: var(--white-color);
  color: var(--white-color);
}

.section-padding {
  padding-top: 100px;
  padding-bottom: 100px;
}

.section-bg {
  background-color: var(--section-bg-color);
}

.section-overlay {
  background-color: var(--dark-color);
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  width: 100%;
  height: 100%;
  opacity: 0.35;
}

.section-overlay + .container {
  position: relative;
}

.tab-content {
  background-color: var(--white-color);
  border-radius: var(--border-radius-medium);
  padding: 45px;
}

/*---------------------------------------
  NAVIGATION              
-----------------------------------------*/

.container
{  
  margin-top:0;
}
.sticky-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  margin-top: 0px;
}

.sticky-wrapper.is-sticky .navbar {
  background-color: var(--dark-color);
}

/* .sticky-wrapper {
  position: static !important;
  margin-top: 0 !important;
}

.sticky-wrapper.is-sticky .navbar {
  position: static !important;
  background-color: inherit !important;
} */


.navbar {
  background: transparent;
  z-index: 9;
  background-color:#000000;
  margin:0;
  padding:10px;
}

.navbar-brand,
.navbar-brand:hover {
  margin-top:0;
  color: var(--white-color);
  font-size: var(--h5-font-size);
  font-weight: var(--font-weight-bold);
}

.navbar-expand-lg .navbar-nav .nav-link {
  border-radius: var(--border-radius-large);
  margin: 10px;
  padding: 10px 20px;
}

.navbar-nav .nav-link {
  display: inline-block;
  color: var(--white-color);
  font-size: var(--p-font-size);
  font-weight: var(--font-weight-normal);
  position: relative;
  padding-top: 15px;
  padding-bottom: 15px;
}

.navbar-nav .nav-link.active, 
.navbar-nav .nav-link:hover {
  color: var(--secondary-color);
}

.navbar-toggler {
  border: 0;
  padding: 0;
  cursor: pointer;
  margin: 0;
  width: 30px;
  height: 35px;
  outline: none;
}

.navbar-toggler:focus {
  outline: none;
  box-shadow: none;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
  background: transparent;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before,
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
  transition: top 300ms 50ms ease, -webkit-transform 300ms 350ms ease;
  transition: top 300ms 50ms ease, transform 300ms 350ms ease;
  transition: top 300ms 50ms ease, transform 300ms 350ms ease, -webkit-transform 300ms 350ms ease;
  top: 0;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
  transform: rotate(45deg);
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
  transform: rotate(-45deg);
}

.navbar-toggler .navbar-toggler-icon {
  background: var(--white-color);
  transition: background 10ms 300ms ease;
  display: block;
  width: 30px;
  height: 2px;
  position: relative;
}

.navbar-toggler .navbar-toggler-icon:before,
.navbar-toggler .navbar-toggler-icon:after {
  transition: top 300ms 350ms ease, -webkit-transform 300ms 50ms ease;
  transition: top 300ms 350ms ease, transform 300ms 50ms ease;
  transition: top 300ms 350ms ease, transform 300ms 50ms ease, -webkit-transform 300ms 50ms ease;
  position: absolute;
  right: 0;
  left: 0;
  background: var(--white-color);
  width: 30px;
  height: 2px;
  content: '';
}

.navbar-toggler .navbar-toggler-icon::before {
  top: -8px;
}

.navbar-toggler .navbar-toggler-icon::after {
  top: 8px;
}

    
   
    /* --------------------------------------------------------------------------------------------------
    
        gallery_reiew.php file/CSS
    
    ------------------------------------------------------------------------------------------------------*/
    /* polaroid gallery */

        .polaroid-gallery {
          margin-top: 90px;
          text-align: center;
          padding: 90px 10px;
          background: #f8f8f8;
        }

        .polaroid-gallery h2 {
          margin-bottom: 40px;
          font-size: 2rem;
          color: #333;
        }

        .gallery {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 50px;
        }
        /* same another  */

          .polaroid {
          background: #ab9280ff;
          padding: 10px 10px 20px;
          box-shadow: 0 6px 15px rgba(0,0,0,0.2);
          border: 1px solid #ddd;
          width: 180px;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
          transform: rotate(-3deg); /* default tilt */
          }

          .polaroid:nth-child(even) {
          transform: rotate(3deg); /* alternate tilt */
          }

          .polaroid img {
          width: 100%;
          height: auto;
          display: block;
          /* background-color: #c01f27; */
          border: 1px solid #ccc;
          }

          .polaroid figcaption {
          margin-top: 8px;
          font-size: 14px;
          color: #444;
          }

          .polaroid:hover {
          transform: rotate(0) scale(1.05);
          box-shadow: 0 12px 25px rgba(0,0,0,0.3);
          }

/* review section */

    .review-section
    {
        padding: 70px 20px;
        margin: 50px auto;
        background: #f0f8ff;
        border-radius: 20px;
        border: 2px solid #eee;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        max-width: 1200px;
    }
    h2 {
      text-align: center;
      font-size: 28px;
      color: #333;
      margin-bottom: 30px;
    }

    .reviews-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      max-width: 1000px;
      margin: auto;
    }

    .review-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 20px;
      position: relative;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .review-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.2);
    }

    .reviewer-name {
      font-weight: bold;
      font-size: 18px;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .review-text {
      font-size: 15px;
      line-height: 1.6;
      color: #555;
    }

    .stars {
      color: #f1c40f;
      font-size: 16px;
      margin-bottom: 10px;
    }

    /* Add a subtle quote icon */
    .review-card::before {
      content: "❝";
      font-size: 40px;
      color: #eee;
      position: absolute;
      top: 10px;
      left: 15px;
    }
    .review-card::after {
      content: "❞";
      font-size: 40px;
      color: #eee;
      position: absolute;
      bottom: 10px;
      right: 15px;
    }





  </style>

</head>

<?php
    $sql = "SELECT * FROM danced_with";  // change to your actual table name
    $result = mysqli_query($conn, $sql);
?>

<body>
    
 <!-- -------------------------------------------------------------------------------------- -->
    <!-- navigation bar -->
    <!-- links and social button for reels  -->
  <!-- -------------------------------------------------------------------------------------- -->

<nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    ☀️ Me Khushi Agrawal
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php #section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php #section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php #section_3">Specialization</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php #section_4">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php #section_5">portfolio</a>
                        </li>   

                        <li class="nav-item">
                            <a class="nav-link crk;plick-scroll" href="index.php #section_6">Connect</a>
                        </li>
                    </ul>

                    <a href="<?php echo $insta_link ?>" class="btn custom-btn d-lg-block d-none">
                        See my Reels
                    </a>
                </div>
            </div>
        </nav>

    

        <!-- ---------------------------------------------------------------------------------- -->
        <!-- section polaroid gallery -->
        <!-- ---------------------------------------------------------------------------------- -->

        <section class="polaroid-gallery">
          <h2>Icon's I have Danced With</h2>
          <div class="gallery">
               <?php
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <figure class="polaroid">
                    <img src="<?php echo $row['with_image_url'] ?>" alt="<?php echo $row['with_des'] ?>">
                    <figcaption><?php echo $row['with_des'] ?></figcaption>
                    </figure>
                <?php   
                        }
                    } 
                    else {
                        echo "<p>No images found.</p>";
                    }
                    ?>
          </div>
        </section>

        <!-- ---------------------------------------------------------------------------------- -->
        <!-- section review -->
        <!-- ---------------------------------------------------------------------------------- -->

        <?php

            $sql = "SELECT reviewer_name, review_stars, review_des FROM reviews"; 
            $result = mysqli_query($conn, $sql);
        ?>

            
        <section class="review-section" id="review_section">
            <h2>What People Say About Us</h2>
            <div class="reviews-container">
                
                <?php
                    if (mysqli_num_rows($result) > 0) { 
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="review-card">
                    <br>
                    <div class="reviewer-name"><?php echo $row['reviewer_name'] ?></div>
                        <div class="stars">
                            <?php 
                                $stars = intval($row['review_stars']);
                                for ($i = 1; $i <= 5; $i++) {
                                    echo $i <= $stars ? "★" : "☆";
                                }
                            ?>
                        </div>
                        <div class="review-text">
                            <?php echo $row['review_des'] ?>
                        </div>
                        <br>
                    </div>
              

                    <?php
                        }
                    } else {
                        echo "<p>No reviews yet.</p>";
                    }
                    ?>
                   
            </div>
        </section>  

      </main>


      
    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Khushi Agrawal</h2>
                            <h4><blockquote aria-label="Tagline quote" class="italic text-[#7A5C3B] text-lg select-none">
                                    “Movement is my language.”
                                </blockquote></h4>
                    </div>
   
                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="<?php echo $insta_link ?>" 
                                   class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="<?php echo $yt_link ?>" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                               <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 fill-current" viewBox="0 0 32 32" role="img">
                                    <path d="M16.001 3.2c-7.07 0-12.8 5.73-12.8 12.8 0 2.26.6 4.47 1.73 6.42L3.2 28.8l6.58-1.72c1.9 1.03 4.04 1.57 6.22 1.57h.001c7.07 0 12.799-5.73 12.799-12.8S23.07 3.2 16.001 3.2zm0 22.4c-1.81 0-3.59-.49-5.15-1.42l-.37-.22-3.91 1.02 1.05-3.82-.24-.39a10.446 10.446 0 01-1.57-5.56c0-5.77 4.7-10.47 10.47-10.47 5.77 0 10.47 4.7 10.47 10.47S21.77 25.6 16.001 25.6zm5.65-7.9c-.31-.16-1.83-.9-2.11-1-.28-.1-.49-.16-.7.17-.21.31-.81 1-.99 1.21-.18.2-.36.22-.66.06-.31-.16-1.29-.48-2.46-1.54-.91-.81-1.52-1.8-1.7-2.1-.18-.31-.02-.48.14-.64.15-.15.31-.37.46-.56.15-.19.2-.31.3-.52.1-.2.05-.39-.02-.56-.07-.17-.7-1.68-.96-2.3-.25-.6-.51-.52-.7-.53-.18-.01-.39-.01-.6-.01-.2 0-.52.08-.79.39s-1.04 1.01-1.04 2.46 1.06 2.85 1.21 3.05c.15.2 2.09 3.18 5.07 4.46.71.3 1.26.48 1.69.62.71.23 1.36.2 1.87.12.57-.08 1.83-.75 2.09-1.47.26-.71.26-1.32.18-1.47-.08-.14-.29-.23-.6-.39z"/>
                                </svg> 
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="index.php" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="index.php #section_2" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="index.php #section_3" class="site-footer-link">My specializations</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="index.php #section_4" class="site-footer-link">Gallery</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="index.php #section_5" class="site-footer-link">portfolio</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="index.php #section_6" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: " class="site-footer-link">
                            090-000-0000
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:khushi@gmail.com" class="site-footer-link">
                            khushi@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Delhi ,India.</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                        <span>Our Maps</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="col-lg-3 col-12 mt-5">
                    <p class="select-none">© 2025 Khushi. All rights reserved.</p>
                    <p class="mt-1">Powered by 
                        <a href="https://www.linkedin.com/company/agrawaltech/" target="_blank" rel="noopener noreferrer" class="underline hover:text-[#D1A954] transition duration-300">Agrawal Tech</a>
                    </p>
                </div>            
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js\display_reels.js"></script>
 

</body>

</html>