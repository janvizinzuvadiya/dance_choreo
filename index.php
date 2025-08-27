<?php
include 'connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <title>☀️Me Khushi Agrawal</title>

    <style>
        /* about sectoin */
    .timeline {
        position: relative;
        max-width: 600px;
        margin: 40px auto;
        padding-left: 30px;
        background-color: transparent;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: white;
    }

    /* Orange line */
    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 15px;
        width: 2px;
        height: 100%;
        background-color: orange;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 25px;
        padding-left: 40px;
    }

    /* Small circle */
    .timeline-item::before {
        content: '';
        position: absolute;
        top: 5px;
        left: 7px;
        width: 15px;
        height: 15px;
        background-color: orange;
        border-radius: 50%;
        border: 2px solid white;
    }

    .timeline-item h3 {
        margin: 0;
        font-size: 18px;
        color: orange;
    }

    .timeline-item p {
        margin: 5px 0 0;
        font-size: 14px;
        color: white;
    }

    /* ------------------------------ 
       css for form control
       pick a vibe option  
    -------------------------------*/
    
    fieldset {
        border: none;
    }

    legend {
        font-weight: bold;
        color: var(--dark-color);
        font-size: 18px;
    }

    .tag {
        padding: 8px 14px;
        border-radius: 20px;
        border: 2px solid #D3D3D3;
        background-color: var(--white-color);
        color: var(--secondary-color);
        cursor: pointer;
        margin: 5px;
        transition: all 0.3s ease;
    }

    .tag:hover {
        background-color: var(--primary-color);
        color: va0(--white-color);
        border-color: var(--primary-color);
    }

    .tag.selected {
        background-color: var(--custom-btn-bg-color);
        color: var(--white-color);
        border-color: var(--custom-btn-bg-color);
    }

    /* Legend styling to match "Type of Project" look */
        .custom-form fieldset {
            border: none;
            border-radius: 6px;
            padding: 12px 16px;
            /* color: var(--p-color); */
        }

        .custom-form fieldset legend {
            font-weight:400;
            color: var(--p-color);
            padding: 0 8px;
            font-size: 0.95rem;
        }

                
        /*---------------------------------------
        Galleryview               
        -----------------------------------------*/

        .filter-buttons {
        margin-bottom: 40px;
        }

        .filter-btn {
        background: none;
        border: 2px solid var(--primary-color);
        border-radius: var(--border-radius-large);
        padding: 8px 20px;
        margin: 5px;
        font-size: var(--btn-font-size);
        cursor: pointer;
        transition: all 0.3s;
        }

        .filter-btn.active,
        .filter-btn:hover {
        background: var(--primary-color);
        color: var(--dark-color);
        }

        .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        }

        .gallery-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* Always 4 columns */
        gap: 20px;
        justify-items: center; /* keep items centered in their cell */
        }

        .gallery-item {
        width: 100%;
        max-width: 250px; /* keeps consistent size */
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s;
        }

        .gallery-item img,
        .gallery-item video {
        width: 100%;
        height: 180px;
        object-fit: cover;
        display: block;
        }

        .gallery-item:hover {
        transform: translateY(-5px);
        }

        .mini-player {
        display: none; /* hidden by default */
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 400px;
        background: #000;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        overflow: hidden;
        z-index: 9999;
        }

        .mini-player video {
        width: 100%;
        height: auto;
        display: block;
        }

        #close-player {
        position: absolute;
        top: 5px;
        right: 10px;
        font-size: 22px;
        color: #fff;
        cursor: pointer;
        }

        @media(max-width: 600px) {
        .mini-player { width: 90%; right: 5%; bottom: 10px; }
        }

        /* --------------------------
        slider css
        ----------------------------- */

        
        .swiper{
            width:100%;
            padding:40px 0
        }
        .swiper-slide
        {
            position:relative;
            border-radius:12px;
            overflow:hidden;
            cursor:pointer
            }
        .swiper-slide img
        {
            width:100%;
            height:280px;
            object-fit:cover;
            display:block;
            border-radius:12px
        }
        .video-info
        {
            position:absolute;
            left:0;
            right:0;
            bottom:0;
            padding:15px;
            background:linear-gradient(to top, rgba(0,0,0,.8), transparent);color:#fff}
        .video-info h5
        {
            margin:0;font-size:18px}
        .tag-line
        {
            font-size:14px;
            opacity:.8
        }
        .badge
        {
            position:absolute;
            top:10px;left:10px;
            background:crimson;
            padding:6px 12px;
            border-radius:20px;
            font-size:14px;
            color:#fff
        }
        #popup-player{
            display:none;
            position:fixed;
            inset:0;
            background:rgba(0,0,0,.8);
            justify-content:center;
            align-items:center;
            z-index:9999
        }
        .popup-content
        {   background:#fff;
            padding:20px;
            border-radius:12px;
            width:80%;
            max-width:800px;
            text-align:center;position:
        }
        .popup-content video
        {
            width:100%;
            border-radius:12px}
        .close-btn{
            position:absolute;
            top:10px;
            right:15px;
            font-size:30px;
            cursor:pointer;
            color:#333
        }

        .swiper-slide {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
        }
        .swiper-slide img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 12px;
        }

        
        .video-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
        }
        .video-info h5 {
            margin: 0;
            font-size: 18px;
        }
        .tag-line {
            font-size: 14px;
            opacity: 0.8;
        }
        .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: crimson;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            color: white;
        }

        /* Popup Player */
        #popup-player {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.8);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .popup-content {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            width: 80%;
            max-width: 800px;
            text-align: center;
            position: relative;
        }
        .popup-content video {
            max-width: 100%;
            max-height: 50vh; /* keeps video inside screen vertically */
            border-radius: 12px;
            object-fit: contain; /* ensures portrait and landscape both fit */
            background: black;   /* optional: adds black background for empty space */
        }

        .popup-content h3 {
            margin: 15px 0 10px;
        }
        .popup-content p {
            color: #333;
        }
        .close-btn {
            position: absolute;
            top: 10px; right: 15px;
            font-size: 30px;
            cursor: pointer;
            color: #333;
        }


         .button-group {
            display: flex;
            justify-content: center;
            gap: 20px; /* space between buttons */
            margin-top: 20px;
            }

            .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #e65100; /* orange */
            color: #fff;
            padding: 12px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            }

            .cta-btn:hover {
            background: #ff7043; /* lighter orange */
            transform: translateY(-2px);
            }



        /*---------------------------------
          three button under specialization  
         ----------------------------------*/
        
        .cta-buttons 
        {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
        }

        .cta-btn 
        {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            background: var(--secondary-color);
            color: var(--white-color);
            font-size: 16px;
            font-weight: 600;
            border-radius: var(--border-radius-large);
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
        }

        .cta-btn:hover {
        background: var(--primary-color);
        }

        .cta-btn span {
        display: inline-block;
        }

        .cta-btn .btn-text {
        margin-left: 8px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px; /* space between buttons */
            margin-top: 20px;
            }

            .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #e65100; /* orange */
            color: #fff;
            padding: 12px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            }

            .cta-btn:hover {
            background: #ff7043; /* lighter orange */
            transform: translateY(-2px);
            }


    </style>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">

</head>


<body>

    <!-- -------------------------------------------------------------------------------------- -->
    <!-- navigation bar -->
    <!-- links and social button for reels  -->
    
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
        
        <main>
        <!-- -------------------------------------------------------------------------------------- -->
        <!-- section 1 -->
        <!-- home section id= #section_1  -->
        <!-- -------------------------------------------------------------------------------------- -->
       

        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center" style="color: #B22727;">
                        <br><br><br><br>
                       <h1>
                        <?php echo $home_title ?>
                       </h1>

                     <small><?php echo $home_subtitle ?></small>
                     <br>
                     <a class="btn custom-btn smoothscroll" href="#section_5    ">See me in Action</a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <h5 class="text-white">
                            <button id="changeVideoBtn" type="button" class="btn custom-btn d-lg-block d-none">
                                <i class="bi bi-arrow-repeat"></i>
                                Change the Video
                            </button> </h5>
                            <input type="file" id="videoInput" accept="video/*" style="display:none;">

                        </div>

                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <a href="#section_2" >
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                My Journey in Dance
                                </a>
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                 <span class="text-white me-3">Connect:</span>

                                <li class="social-icon-item">
                                    <a href="<?php echo $yt_link ?>" class="social-icon-link">
                                        <span class="bi-youtube"></span>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="<?php echo $wp_link ?>" class="social-icon-link">
                                        <span class="bi-whatsapp"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="<?php echo $linkd_link ?>" class="social-icon-link">
                                        <span class="bi-linkedin"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="<?php echo $insta_link ?>" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video id="heroVideo" autoplay loop muted class=" custom-video" poster="" loop="" muted="">

                    <source src="<?= $homepagevideo ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>

        <!-- -------------------------------------------------------------------------------------- -->
        <!-- section 2 -->
        <!-- about section id= #section_2  -->
        <!-- -------------------------------------------------------------------------------------- -->

        <!-- section 2 -->
        <!-- about section id= #section_2  -->

        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">My Journey in Dance</h2>
                            <div class="timeline">
                                <div class="timeline-item">
                                    <h3>2018</h3>
                                    <p>My first dance show</p>
                                </div>
                                <div class="timeline-item">
                                    <h3>2019</h3>
                                    <p>My first stage performance</p>
                                </div>
                                <div class="timeline-item">
                                    <h3>2022</h3>
                                    <p>My first solo choreography</p>
                                </div>        
                            </div>
                            <p class="text-white">I  started dancing at the age of 6, driven by nothing but the joy of movement .
                                Over the years, I’ve trained in multiple styles — from contemporary to classical fusion — and 
                                performed on stages across India.
                                <br>But more than performances,I believe in emotion . Each choreography
                                is a story I shape, a world I build.
                                <br><br>    
                                I’ve had the honor to work alongside incredible talents, from rising stars to national icons.
                            </p>

                            <h1><a href="#section_6">  Let’s Collaborate </a> </h1>
                            <p> From one-on-one choreography to large-scale stage productions — I’m open to projects, workshops, and
                                <span class="text-[#D1A954] font-semibold">
                                collaborations
                                </span>
                                .
                            </p>                       
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <?php  
                            $sql = "SELECT about_us_image FROM admin WHERE admin_id = 1"; // fetch for specific admin
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $aboutUsImage = $row['about_us_image'];

                                // Display image
                                
                            } else {
                                echo "No About Us image found for about us section";
                            }                            
                            ?>
                            <img src="<?= $aboutUsImage ?>" class="about-image img-fluid">
                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>
                                <div class="ms-4">
                                    <h3>a happy moment</h3>
                                    <p class="mb-0">Let’s create something that moves hearts .</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- -------------------------------------------------------------------------------------- -->
        <!-- section 3 -->
        <!-- Dance Styles I Offer section id= #section_3 -->
        <!-- -------------------------------------------------------------------------------------- -->

        <section class="artists-section section-padding" id="section_3">
            <div class="">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2>Dance Styles I Offer</h2>
                    </div>

                    <!-- Php code for dance_types [Dance atyles i offer]Loop -->
                        <?php
                            $sql = "SELECT srno, type_name, type_des, image_url FROM dance_types";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) 
                            {
                            // Loop through each row
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="<?php echo $row['image_url']; ?>" class="artists-image img-fluid" alt="">
                            </div>
                            <div class="artists-hover">
                                <p><strong><?php echo $row['type_name']; ?></strong></p>
                                <hr>
                                <p class="mb-0"><?php echo $row['type_des']; ?></p>
                            </div>
                        </div>
                    </div>

                        <?php
                                }
                            } else {
                                echo "<p>No data found.</p>";
                            }
                        ?>
         
                    <div class="cta-buttons">
                        <a href="<?php echo $insta_link ?>" class="cta-btn">
                            <span class="bi-instagram"></span>
                            <span class="btn-text">Join the Journey on Instagram</span>
                        </a>  

                        <a href="gallery_review.php #review_section" class="cta-btn">
                            <span class="bi-play-circle"></span>
                            <span class="btn-text">See Review now</span>
                        </a>

                        <a href="#section_5" class="cta-btn">
                            <span class="bi-arrow-right"></span>
                            <span class="btn-text">Load the Next Act</span>
                        </a>  
                    </div>
                </div>  
            </div>
        </section>

        <!-- -------------------------------------------------------------------------------------- -->
        <!-- section 4 -->
        <!-- gallery section id= #section_4  -->
        <!-- -------------------------------------------------------------------------------------- -->

  

        <section class="schedule-section section-padding" id="section_4">
            <div class="container">
            <h2 class="text-center mb-5">Every Step, A Statement</h2>

                <!-- Category Buttons -->
                <div class="filter-buttons text-center mb-4">
                    <button class="filter-btn active" data-category="all">All</button>
                    <button class="filter-btn" data-category="music">Music Videos</button>
                    <button class="filter-btn" data-category="stage">Stage Shows</button>
                    <button class="filter-btn" data-category="reels">Reels</button>
                    <button class="filter-btn" data-category="brand">Brand</button>
                    <button class="filter-btn" data-category="wedding">Wedding</button>
                </div>

                <!-- Gallery Grid -->
                <div class="gallery-grid">
                    <?php
                        $sql = "SELECT * FROM videos ORDER BY created_at DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '
                            <div class="gallery-item" data-category="'.$row['category'].'" data-video="'.$row['video_url'].'">
                                <img src="'.$row['thumbnail'].'" alt="'.$row['title'].'">
                                <h5>'.$row['title'].'</h5>
                            </div>
                            ';
                        }
                        } else {
                        echo "<p class='text-center'>No videos found.</p>";
                        }
                    ?>
                </div>  
                
                <!-- Mini Player -->
                <div id="mini-player" class="mini-player">
                    <video id="mini-video" controls></video>
                    <span id="close-player">&times;</span>
                </div>

            </div>

            <script>
                    const miniPlayer = document.getElementById("mini-player");
                    const miniVideo = document.getElementById("mini-video");
                    const closeBtn = document.getElementById("close-player");
                    const galleryItems = document.querySelectorAll(".gallery-item"); // ✅ Add this line

                    galleryItems.forEach(item => {
                        item.addEventListener("click", function() {
                            const videoUrl = this.getAttribute("data-video");
                            console.log("Video URL:", videoUrl); // Debug
                            miniVideo.src = videoUrl;
                            miniPlayer.style.display = "block";
                            miniVideo.play();
                        });
                    });

                    closeBtn.addEventListener("click", function() {
                        miniVideo.pause();
                        miniVideo.src = "";
                        miniPlayer.style.display = "none";
                    });

                    window.addEventListener("click", (e) => {
                        if (e.target === miniPlayer) {
                            miniVideo.pause();
                            miniVideo.src = "";
                            miniPlayer.style.display = "none";
                        }
                    });
                </script>

        </section>

        <!-- -------------------------------------------------------------------------------------- -->
        <!-- section 5 -->
        <!-- portfolio section id= #section_5  -->
        <!-- -------------------------------------------------------------------------------------- -->
            <section class="pricing-section section-padding section-bg" id="section_5">
            <div class="container">
                
            <h2 class="text-center mb-5"> Vibes that Move Me </h2>

                <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $sql = "SELECT * FROM portfolio ORDER BY created_at DESC";
                    $result = $conn->query($sql);

                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        // escape values for attributes
                        $title = htmlspecialchars($row['title'] ?? '', ENT_QUOTES, 'UTF-8');
                        $desc  = htmlspecialchars($row['description'] ?? '', ENT_QUOTES, 'UTF-8');
                        $video = htmlspecialchars($row['video_url'] ?? '', ENT_QUOTES, 'UTF-8');
                        $img   = htmlspecialchars($row['image_url'] ?? '', ENT_QUOTES, 'UTF-8');
                        $tag   = htmlspecialchars($row['tag_line'] ?? '', ENT_QUOTES, 'UTF-8');
                        $type  = htmlspecialchars($row['video_type'] ?? '', ENT_QUOTES, 'UTF-8');

                        echo '
                        <div class="swiper-slide"
                            data-video="'.$video.'"
                            data-title="'.$title.'"
                            data-description="'.$desc.'">
                            <span class="badge">'.$type.'</span>
                            <img src="'.$img.'" alt="'.$title.'">
                            <div class="video-info">
                            <h5>'.$title.'</h5>
                            <div class="tag-line">'.$tag.'</div>
                            </div>
                        </div>';
                        }
                    }
                    ?>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                </div>

                <!-- Popup Player -->
                <div id="popup-player">
                <div class="popup-content">
                    <span class="close-btn">&times;</span>
                    <video id="popup-video" controls></video>
                    <h3 id="popup-title"></h3>
                    <p id="popup-description"></p>
                </div>
                </div>
            </div>
            <div class="button-group text-center mt-4">
                <a href="gallery_review.php" class="cta-btn">
                    <span class="bi-play-circle"></span>
                    <span class="btn-text">Dance Icons I've Performed With</span>
                </a>
                <a href="behind_the_scene.php" class="cta-btn">
                    <span class="bi-arrow-right"></span>
                    <span class="btn-text">Behind The Scene</span>
                </a> 
            </div>
            </section>

            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script>
            // init when DOM is ready
            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper('.mySwiper', {
                slidesPerView: 3,
                spaceBetween: 20,
                loop: true,
                pagination: { el: '.swiper-pagination', clickable: true },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                breakpoints: { 0:{slidesPerView:1}, 768:{slidesPerView:2}, 1024:{slidesPerView:3} }
                });

                const popup = document.getElementById('popup-player');
                const popupVideo = document.getElementById('popup-video');
                const popupTitle = document.getElementById('popup-title');
                const popupDescription = document.getElementById('popup-description');
                const closeBtn = document.querySelector('.close-btn');

                document.querySelectorAll('.swiper-slide').forEach(slide => {
                slide.addEventListener('click', function () {
                    popupVideo.src = this.dataset.video;
                    popupTitle.textContent = this.dataset.title || '';
                    popupDescription.textContent = this.dataset.description || '';
                    popup.style.display = 'flex';
                    popupVideo.play();
                });
                });

                function closePopup() {
                popupVideo.pause();
                popupVideo.src = '';
                popup.style.display = 'none';
                }
                closeBtn.addEventListener('click', closePopup);
                window.addEventListener('click', e => { if (e.target === popup) closePopup(); });
            });
            </script>
        </section>

        <!-- -------------------------------------------------------------------------------------- -->
        <!-- section 6 -->
        <!-- contact section id= #section_6 -->
        <!-- -------------------------------------------------------------------------------------- -->

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Want to Create Something Beautiful?</h2>
                        <p aria-live="polite" class="mb-10 text-center text-xl sm:text-2xl font-playfair font-semibold text-[#7a5c2e] italic select-none">
                            “Every performance begins with a hello—let’s move something together.”
                        </p>
                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="contact_process.php" method="post" role="form">
                                    <p style="color:#B22727; ">Whether it's a stage, a screen, or your special day — Let’s bring your vision to life through dance.</p>
                                    <br>
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="contact-name" id="contact-name"
                                                    class="form-control" placeholder="Full name" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="contact-email" id="contact-email"
                                                    pattern="[^ @]*@[^ @]*" class="form-control"
                                                    placeholder="Email address" required>
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <select class="form-control" aria-describedby="projectType-desc" aria-required="true" class="appearance-none" id="projectType" name="projectType" required="">
                                                    <option disabled="" hidden="" selected="" value="">
                                                        Select a project type
                                                    </option>
                                                    <option value="Workshop">
                                                        Workshop
                                                    </option>
                                                    <option value="1-on-1">
                                                        1-on-1
                                                    </option>
                                                    <option value="Stage">
                                                        Stage
                                                    </option>
                                                    <option value="Brand">
                                                        Brand
                                                    </option>
                                                    <option value="Wedding">
                                                        Wedding
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <select class="form-control" aria-describedby="hearAbout-desc" aria-required="true" class="appearance-none" id="hearAbout" name="hearAbout" required="">
                                                    <option disabled="" hidden="" selected="" value="">
                                                        How did you hear about me?
                                                    </option>
                                                    <option value="Instagram">
                                                        Instagram
                                                    </option>
                                                    <option value="Workshop">
                                                        Workshop
                                                    </option>
                                                    <option value="Event">
                                                        Event
                                                    </option>
                                                    <option value="Friend">
                                                        Friend
                                                    </option>
                                                    <option value="Other">
                                                        Other
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                          <div class="contact-form-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <input type="tel" name="contact-no" id="contact-no"
                                                        class="form-control" placeholder="Whatsapp Contact"
                                                        oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10);"
                                                        pattern="^\+?[1-9]\d{6,14}$" maxlength="10" required>
                                            
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="row">
                                            <fieldset class="mb-6">
                                                <legend>  Pick a vibe:  </legend>
                                                <div class="form-control" aria-label="Mood or intention tags" class="flex gap-2 flex-wrap" role="group">
                                                    <button class="tag" data-vibe="Passion 💖" type="button">
                                                        Passion 💖
                                                    </button>
                                                    <button class="tag" data-vibe="Collab 🤝" type="button">
                                                        Collab 🤝
                                                    </button>
                                                    <button class="tag" data-vibe="Energy 🔥" type="button">
                                                        Energy 🔥
                                                    </button>
                                                    <button class="tag" data-vibe="Elegance 🌸" type="button">
                                                        Elegance 🌸
                                                    </button>
                                                </div>
                                                <input id="vibesInput" name="vibes" type="hidden"/>
                                            </fieldset>
                                        </div>
                                    
                                        <textarea name="contact-message" rows="3" class="form-control"
                                            id="contact-message" placeholder="Message"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

   <?php
    include 'footer.php';
   ?>

    </body>

</html>