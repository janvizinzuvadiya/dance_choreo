<?php
include 'connection.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>☀️Me Khushi Agrawal</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <style>
    html
    {
        scroll-behavior: smooth; 
    }
    :root {
      --white-color: #ffffff;
      --primary-color: #F8CB2E;
      --secondary-color: #EE5007;
      --section-bg-color: #f0f8ff;
      --custom-btn-bg-color: #EE5007;
      --custom-btn-bg-hover-color: #c01f27;
      --dark-color: #000000;
      --p-color: #717275;
      --border-color: #7fffd4;
      --link-hover-color: #B22727;
    }

    body {
      font-family: 'Outfit', sans-serif;
      background-color: var(--section-bg-color);
      margin: 0;
      padding: 0;
      color: var(--white-color);
      /* background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); */
    }


       /* Navbar container */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background-color: #000;
    }

    /* Logo */
    .navbar .logo {
      display: flex;
      align-items: center;
      color: white;
      font-weight: bold;
      font-size: 22px;
    }

    .navbar .logo {
      margin-left: 80px;
    }

    /* Menu links */
    .navbar ul {
      list-style: none;
      display: flex;
      gap: 60px;
      margin: 0;
      padding: 10px;
    }

    .navbar ul li a {
      text-decoration: none;
      color: white;
      font-size: 18px;
      font-weight: 500;
      transition: 0.3s;
    }

    .navbar ul li a.active {
      color: #ff4500; /* Orange active */
    }

    .navbar ul li a:hover {
      color: #ff4500;
    }

    /* Button */
    .navbar .btn {
      background: #ff4500;
      color: white;
      margin-right:10px;
      padding: 10px 20px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }

    .navbar .btn:hover {
      background: #e03e00;
    }

    .section-title {
        color: #c01f27;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        color: var(--secondary-color);
        margin-bottom: 20px;
        }


    /* main container */

    /* MAIN LAYOUT */
        .main-section {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 60px;
        padding: 50px;
        }

        /* LEFT SLIDER */
        .swiper {
        width: 27%;
        height: 600px;
        padding: 20px 0;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        position: relative;
        }

        /* RIGHT CONTENT */
        .content-section {
        flex: 1;
        max-width: 600px;
        }

        .content-heading {
        font-size: 2rem;
        color: #c01f27;
        margin-bottom: 20px;
        }

        .content-para {
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 30px;
        color: #333;
        }

        .btn-group {
        display: flex;
        gap: 15px;
        }

        .btn-primary, .btn-secondary {
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        }

        .btn-primary {
        background: #c01f27;
        color: #fff;
        }

        .btn-primary:hover {
        background: #a81820;
        }

        .btn-secondary {
        background: #f0c5c5ff;
        color: #8f4f4fff;
        }

        .btn-secondary:hover {
        background: #ddd;
        }



    /* Swiper container background */
    .swiper {
      width: 45%;
      height: 650px;
      padding: 70px 0;
      border-radius: 20px;
      margin: 0;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      position: relative;
    }

    .swiper-slide {
      background: var(--white-color);
      border-radius: 15px;
       width: 50%;
      overflow: hidden;
      aspect-ratio: 9/16; /* keeps reels look */
      max-height: 600px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      position: relative;
      transition: transform 0.4s ease-in-out;
    }

    .swiper-slide video {
        width: 100%;
        height: 100%;
        object-fit: cover; /* makes sure video fills without stretching */
        border-radius: 15px;
        display: block;
        }


    .swiper-slide:hover {
      transform: scale(2.05);
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 15px;
    }

    /* Description overlay */
    .slide-description {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 25px;
      background: #c01f27;
      color: var(--white-color);
      font-size: 16px;
      text-align: center;
      border-radius: 0 0 15px 15px;
    }

        /* Instagram Section */
        .behind-scene {
            text-align: center;
            padding: 60px 20px;
            background-color: var(--white-color);
            margin: 40px auto;               /* margin on all sides */
            border: 2px solid #e5e5e5;       /* light border */
            border-radius: 15px;             /* smooth rounded edges */
            box-shadow: 0 8px 25px rgba(0,0,0,0.15); /* soft shadow */
            max-width: 1200px;               /* keeps it centered & not too wide */
            }

            .card {
                width: 220px;
                height: 320px;
                border-radius: 15px;
                background: var(--white-color);
                overflow: hidden;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                transition: transform 0.4s;
                cursor: pointer;
                position: relative;
                }

                .card:hover {
                transform: translateY(-10px) scale(1.05);
                }

                .card img,
                .card video {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                border-radius: 10px 10px 0 0;
                }

                .card video {
                display: none; /* hidden until card is clicked */
                }

                .card h3 {
                margin: 2px;
                color: var(--secondary-color);
                }

                .card p {
                margin: 5px 8px;
                color: var(--p-color);
                font-size: 14px;
                }

        .card-flow {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 10px;
        }

        .card:hover {
        transform: translateY(-10px) scale(1.05);
        }

        .card img {
        width: 100%;
        height: 70%;
        object-fit: cover;
        }

        .card h3 {
        margin: 2px;
        color: var(--secondary-color);
        }

        .card p {
        margin: 5px 8px;
        color: var(--p-color);
        font-size: 14px;
        }

        .behind-scene .btn {
        display: inline-block;
        padding: 12px 25px;
        margin-top: 5px;
        background: var(--custom-btn-bg-color);
        color: var(--white-color);
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
        }

        .behind-scene .btn:hover {
        background: var(--custom-btn-bg-hover-color);
        }

        /* polaroid gallery */

        .polaroid-gallery {
          text-align: center;
          padding: 50px 20px;
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
          gap: 30px;
        }

.polaroid {
  background: white;
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

  </style>
</head>

<body>

      <nav class="navbar">
        <!-- Logo -->
        <div class="logo">
           ☀️  <span>Me Khushi Agrawal</span>
        </div>

        <!-- Menu -->
        <ul>
          <li><a href="index.php ">Home</a></li>
          <li><a href="index.php #section_2">About</a></li>
          <li><a href="index.php #section_3">Specialization</a></li>
          <li><a href="index.php #section_4" class="active">Gallery</a></li>
          <li><a href="index.php #section_5">Portfolio</a></li>
          <li><a href="index.php #section_6">Connect</a></li>
        </ul>

        <!-- Button -->
        <a href="#" class="btn">See my Reels</a>
      </nav>




   <!-- ------------------------------------------------------------------------ -->
   <!-- Swiper -->
   <!-- ------------------------------------------------------------------------ -->

   <!-- Main Container -->
        <div class="main-section">
        <!-- LEFT: Swiper Slider -->
        <div class="swiper mySwiper">
            <h2 class="section-title">Behind the Scene</h2>
            <div class="swiper-wrapper">

            <?php
            $sql = "SELECT * FROM reel_content"; // your table
            $reel_result = $conn->query($sql);

            if ($reel_result->num_rows > 0) {

                while ($rowr = $reel_result->fetch_assoc()) {
                        $reel_id        = $rowr['id'];
                        $reel_title     = $rowr['reel_title'];
                        $reel_subtitle  = $rowr['reel_subtitle'];
                        $reel_imageLink = $rowr['reel_image_link'];
                        $reel_videoLink = $rowr['reel_video_link'];
                ?>

                <div class="swiper-slide">
                    <video src="<?php echo $reel_videoLink; ?>" autoplay muted loop playsinline></video>
                    <div class="slide-description"><?php echo $reel_title; ?></div>
                </div>

                <?php
                    }
                } 
                else {
                    echo "<p>No reels found.</p>";
                }
                ?>

            </div>
        </div>

        <!-- RIGHT: Content Section -->
        <div class="content-section">
            <h2 class="content-heading"><?php echo $bts_title ?></h2>
            <p class="content-para">
                <?php echo $bts_para ?>
            </p>
            <div class="btn-group">
            <a href="#behind-scene_section"><button class="btn-primary">Explore More</button></a>
            <a href="index.php #section_7"><button class="btn-secondary">Join Us</button></a>
            </div>
        </div>
        </div>
   

  <!-- ------------------------------------------------------------------------ -->
  <!-- Instagram Section -->
  <!-- ------------------------------------------------------------------------ -->
  <section class="behind-scene" id="behind-scene_section">
    <h2>Follow Me on Instagram</h2>
    <div class="card-flow">
         <?php
        $sql = "SELECT * FROM reel_content"; 
        $reel_result = $conn->query($sql);

        if ($reel_result->num_rows > 0) {
            while ($rowr = $reel_result->fetch_assoc()) {
                $reel_title     = $rowr['reel_title'];
                $reel_subtitle  = $rowr['reel_subtitle'];
                $reel_imageLink = $rowr['reel_image_link'];
                $reel_videoLink = $rowr['reel_video_link'];
        ?>
      
      <div class="card">
        <img src="<?php echo $reel_imageLink; ?>" alt="<?php echo $reel_title; ?>">
        
        <!-- Video hidden initially -->
        <video class="reel-video" src="<?php echo $reel_videoLink; ?>" preload="metadata" muted loop playsinline></video>
    
        <h3><?php echo $reel_title; ?></h3>
        <p><?php echo $reel_subtitle; ?></p>
      </div>
        <?php
            }
        } else {
            echo "<p>No reels available.</p>";
        }
        ?>
        
    </div>
    <br><br>
    <a href="<?php echo $insta_link ?>" class="btn">
        <span class="bi-instagram"></span>
        <span class="btn-text">Join the Journey on Instagram</span>
    </a> 

  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: false,
      },
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });

        document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll(".card");

        cards.forEach(card => {
            card.addEventListener("click", () => {
            const img = card.querySelector("img");
            const video = card.querySelector(".reel-video");

            // Hide image & show video
            img.style.display = "none";
            video.style.display = "block";

            // Play video
            video.currentTime = 0; // restart
            video.play();
            });
        });
        });
</script>

</body>

</html>
