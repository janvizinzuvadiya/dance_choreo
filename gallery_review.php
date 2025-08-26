<?php
include 'connection.php';

?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>☀️Me Khushi Agrawal</title>

  <style>
      html
    {
        scroll-behavior: smooth; 
    }
    
    /* --------------------------------------------------------------------------------------------------
    
            gallery_reiew.php file/CSS
    
    ------------------------------------------------------------------------------------------------------*/
/* polaroid gallery */

        .polaroid-gallery {
          margin-top: 100px;
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

</body>

</html>