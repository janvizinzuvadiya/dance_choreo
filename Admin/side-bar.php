<?php
    include 'connection.php';
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Admin Panel</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS  -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
        
        <!-- <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/bootstrap-icons.css" rel="stylesheet">

        <link href="../css/templatemo-festava-live.css" rel="stylesheet"> -->

        <style>
            /* Container for both icons */
            .edit-icons-container {
                position: absolute;
                top: 10px;
                right: 10px;
                display: flex;
                gap: 8px; /* space between buttons */
            }

            /* Common style for both icons */
            .edit-icon {
                background: rgba(187, 192, 232, 0.88);
                color: #e5eded9d;
                padding: 6px;
                border-radius: 50%;
                cursor: pointer;
                transition: 0.3s;
            }

            .edit-icon:hover {
                background: rgba(195, 179, 161, 0.8);
                color: #453b3bff;
            }

                                  
 </style>

    </head>
<body>
<?php 

    $sql = "SELECT dashboard_image FROM admin WHERE admin_id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $dashboardImage = $row['dashboard_image'];

        // Display image
        if (!empty($dashboardImage)) {
            
        } else {
            echo "No dashboard image found.";
        }
    } else {
        echo "Admin not found.";
    }
?>


<div class="wrapper">
   <div class="sidebar" data-color="purple" data-image="<?= $dashboardImage ?>">

   <!-- assets/img/admin1.jpg -->
        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo" style="display:flex; align-items:center; justify-content:space-between;">
                <a href="#" class="simple-text">
                    Admin Panel
                </a>
                
                <label for="dashboardImageUpload" style="cursor:pointer;">
                    <i class="pe-7s-photo-gallery" style="font-size:24px;"></i>
                </label>

                <!-- Hidden file input -->
                <form id="dashboardImageForm" method="POST" enctype="multipart/form-data" style="display:none;">
                    <input type="file" id="dashboardImageUpload" name="dashboard_image" accept="image/*" onchange="document.getElementById('dashboardImageForm').submit();" />
                </form>

            </div>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['dashboard_image'])) {
                    $uploadDir = "Uploads/";
                    $fileName = basename($_FILES['dashboard_image']['name']);
                    $targetPath = $uploadDir . $fileName;

                    // Move file to Uploads folder
                    if (move_uploaded_file($_FILES['dashboard_image']['tmp_name'], $targetPath)) {
                        // Update DB
                        $sql = "UPDATE admin SET dashboard_image = '$targetPath' WHERE admin_id = 1";
                        if ($conn->query($sql) === TRUE) {
                            // echo "<script>alert('Dashboard image updated successfully!'); window.location.reload();</script>";
                        } else {
                            echo "<script>alert('Database update failed!');</script>";
                        }
                    } else {
                        echo "<script>alert('File upload failed!');</script>";
                    }
                }
?>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="Home.php">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                  <li class="active">
                    <a href="dance_styles.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Specializations</p>
                    </a>
                </li>
                <li>
                    <a href="gallery.php">
                        <i class="pe-7s-photo"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li>
                    <a href="portfolio.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Portfolio</p>
                    </a>
                </li>
                <li>
                    <a href="icons.php">
                        <i class="pe-7s-film"></i>
                        <p>Behind the scene</p>
                    </a>
                </li>
                <li>
                    <a href="icons.php">
                        <i class="pe-7s-loop"></i>
                        <p>Dance Icons</p>
                    </a>
                </li>
                <li>
                    <a href="icons.php">
                        <i class="pe-7s-like"></i>
                        <p>reviews</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="profile.php">
                       <i class="pe-7s-user"></i>
                        <p>Admin Profile</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <!-- <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul> -->
                        </li>
                        <li>
                           <!-- <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a> -->
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Settings
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">See Contacts</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Change Passward </a></li>
                                <li><a href="#">  </a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

