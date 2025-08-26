<?php   
 include 'side-bar.php';

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from admin table
$sql = "SELECT home_page_video, title, sub_title FROM admin LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Assign variables
     $home_video=$row['home_page_video'];
     $home_title=$row['title'];
     $home_subtitle=$row['sub_title']; 

     $pre_video="../".$home_video;
}
?>
    <style>

    </style>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
					 <!-- Left Side Control Card -->
                        <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">
                            <h4 class="mb-0">Hero Section Controls</h4>
                            </div>
                            <div class="card-body">

                            <!-- 1. Change Video -->
                            <div class="mb-3 d-flex align-items-center">

                                <form method="POST" enctype="multipart/form-data">
                                    <h6>Change The Video</h6>
                                    <label for="bgImageUpload" class="edit-icon">
                                        <i class="pe-7s-video"></i>
                                    </label>
                                    <input type="file" id="heroVideoUpload" name="hero_video" accept="video/*" style="display:none;">
                                </form>

                            </div>

                             <div class="mb-3">
                                <label for="heroTitle" class="form-label">Frist Heading Text (Title)</label>
                                <input type="text" id="heroTitle" name="hero_title" class="form-control" 
                                    placeholder="Enter hero title" value="<?php echo $home_title; ?>">
                            </div>

                            <!-- Hero Subtitle -->
                            <div class="mb-3">
                                <label for="heroSubtitle" class="form-label">Sub Quote Text (Subtitle)</label>
                                <input type="text" id="heroSubtitle" name="hero_subtitle" class="form-control" 
                                    placeholder="Enter hero subtitle" value="<?php echo $home_subtitle; ?>">
                            </div>


                            <!-- 4. Save Button -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">
                                <i class="pe-7s-diskette"></i> Save Changes
                                </button>
                            </div>

                            </div>
                        </div>
                        </div>

                        <!-- Right Side Preview Card -->
                        <div class="col-md-8">
                        <div class="card mt-4">
                            <div class="card-header">
                            <h4 class="mb-0">Hero Section Preview</h4>
                            </div>
                            <div class="card-body">
                            <div id="heroPreviewContainer"></div>
                            </div>
                        </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <script>
                document.addEventListener("DOMContentLoaded", () => {
                const container = document.getElementById("heroPreviewContainer");
                const shadow = container.attachShadow({mode: "open"});

                shadow.innerHTML = `
                    <style>
                    /* Hero CSS only for preview */
                    .hero-preview { 
                    position: relative; 
                    height: 400px; 
                    overflow: hidden; 
                    }

                    .hero-preview video { 
                    width: 100%; 
                    height: 100%; 
                    object-fit: cover; 
                    position: absolute;   /* make video a background */
                    top: 0;
                    left: 0;
                    z-index: 0;           /* keep it behind everything */
                    }

                    .overlay { 
                    position: absolute; 
                    inset: 0; 
                    background: rgba(0,0,0,0.3); 
                    z-index: 1;           /* overlay above video */
                    }

                    .content { 
                    position: relative; 
                    z-index: 2;           /* content above overlay & video */
                    color: white; 
                    text-align: center; 
                    padding-top: 100px; 
                    } </style>

                    <div class="hero-preview">
                    <div class="overlay"></div>
                    <video autoplay muted loop>
                        <source src="<?php echo $pre_video; ?>" type="video/mp4">
                    </video>
                    <div class="content">
                        <h1><?= $home_title ?></h1>
                        <p><?= $home_subtitle ?></p>
                    </div>
                    </div>
                `;
                });
                </script>

    <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Dance_Styles
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               notifications
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.linkedin.com/in/janvi-zinzuvadiya-042149282/">Janvi zinzuvadiya</a>
                </p>
            </div>
        </footer>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>
    
</html>
