<?php
    $host = "127.0.0.1";
    $dbname = "dance_db";
    $username = "root";
    $password = "123";
    $port = 3307; 

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);
        
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
     
        $sql = "SELECT home_page_video, title, sub_title , behind_the_scene_title , behind_the_scene_para FROM admin WHERE admin_id = 1"; // fetch for specific admin
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $homepagevideo = $row['home_page_video'];
            $home_title=$row['title'];
            $home_subtitle=$row['sub_title']; 
            $bts_title=$row['behind_the_scene_title']; 
            $bts_para=$row['behind_the_scene_para']; 
        } else {
            echo "No About Us image found for about us section";
        }   
        
        $sql_social = "SELECT type, url FROM social_links";
        $result_social = $conn->query($sql_social);

        // default values
        $insta_link = $linkd_link = $yt_link = $wp_link = "#";

        if ($result_social && $result_social->num_rows > 0) {
            while ($row_social = $result_social->fetch_assoc()) {
                switch (strtolower($row_social['type'])) {
                    case "instagram":
                        $insta_link = $row_social['url'];
                        break;
                    case "linkdin": // spelling as in your DB
                        $linkd_link = $row_social['url'];
                        break;
                    case "youtube":
                        $yt_link = $row_social['url'];
                        break;
                    case "whatsapp":
                        $wp_link = $row_social['url'];
                        break;
                }
            }
        } else {
            echo "No social links found";
        }

        $sql = "SELECT * FROM reel_content";  // replace reels with your table name
        $reel_result = $conn->query($sql);

        if ($reel_result->num_rows > 0) {
            // Loop through each row
            while ($rowr = $result->fetch_assoc()) {
                // Store values in variables
                $reel_id        = $rowr['id'];
                $reel_title     = $rowr['reel_title'];
                $reel_subtitle  = $rowr['reel_subtitle'];
                $reel_imageLink = $rowr['reel_image_link'];
                $reel_videoLink = $rowr['reel_video_link'];

            }
        } else {
            echo "No reels found.";
        }





?>
