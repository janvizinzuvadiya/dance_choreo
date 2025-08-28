<?php   
 include 'side-bar.php';
 include 'connection.php'
?>

<?php

// fetch admin info (assuming admin_id = 1)
$sql = "SELECT * FROM admin WHERE admin_id = 1";
$result = $conn->query($sql);
$admin = $result->fetch_assoc();
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- LEFT SIDE FORM -->
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $admin['company_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="<?php echo $admin['username']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $admin['email']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control" value="<?php echo $admin['first_name']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="<?php echo $admin['last_name']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" value="<?php echo $admin['address']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" value="<?php echo $admin['city']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" class="form-control" value="<?php echo $admin['country']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" name="postal_code" class="form-control" value="<?php echo $admin['postal_code']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea name="about_me" rows="5" class="form-control"><?php echo $admin['about_me']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="update" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE PREVIEW -->
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image position-relative">
                        <img src="<?php echo $admin['admin_profile_bg']; ?>" alt="background"/>
                        <div class="edit-icons-container">
                            <!-- Background Icon -->
                            <form method="POST" enctype="multipart/form-data">
                                <label for="bgImageUpload" class="edit-icon">
                                    <i class="pe-7s-expand1"></i>
                                </label>
                                <input type="file" id="bgImageUpload" name="bg_image" accept="image/*" style="display:none;">

                                <!-- Profile Icon -->
                                <label for="profileImageUpload" class="edit-icon">
                                    <i class="pe-7s-add-user"></i>
                                </label>
                                <input type="file" id="profileImageUpload" name="profile_image" accept="image/*" style="display:none;">
                            </form>
                        </div>

                    </div>
                    <div class="content">
                        <div class="author">
                            <div class="avtar-wrapper">
                                <a href="#">
                                    <img class="avatar border-gray" src="<?php echo $admin['admin_profile_pic']; ?>" alt="profile"/>
                                </a>
                              
                                <h4 class="title">
                                    <?php echo $admin['first_name'].' '.$admin['last_name']; ?><br />
                                    <small><?php echo $admin['username']; ?></small>
                                </h4>
                            </div>
                        </div>
                        <p class="description text-center"><?php echo nl2br($admin['about_me']); ?></p>
                    </div>
                </div>


        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['bg_image'])) 
                {
                     $background_pic = "Uploads/" . basename($_FILES['bg_image']['name']);
                    // Move file to Uploads folder
                    
                    if (move_uploaded_file($_FILES['bg_image']['tmp_name'], $background_pic)) {
                        // Update DB
                        $sql = "UPDATE admin SET admin_profile_bg = '$targetPath' WHERE admin_id = 1";
                        if ($conn->query($sql) === TRUE) {
                            // echo "<script>alert('Dashboard image updated successfully!'); window.location.reload();</script>";
                        } else {
                            echo "<script>alert('Database update failed!');</script>";
                        }
                    } else {
                        echo "<script>alert('File upload failed!');</script>";
                    }
                }
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profile_image'])) 
                {
                   $profile_pic = "Uploads/" . basename($_FILES['profile_image']['name']);
                    // Move file to Uploads folder
                    if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $profile_pic)) {
                        // Update DB
                        $sql = "UPDATE admin SET admin_profile_pic = '$targetPath' WHERE admin_id = 1";
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




            </div>

        </div>
    </div>
</div>

<?php
if (isset($_POST['update'])) 
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $postal_code = $_POST['postal_code'];
    $about_me = $_POST['about_me'];

    $update = "UPDATE admin SET 
        username='$username',
        email='$email',
        first_name='$first_name',
        last_name='$last_name',
        address='$address',
        city='$city',
        country='$country',
        postal_code='$postal_code',
        about_me='$about_me',
        WHERE admin_id=1 ";

    if ($conn->query($update)) 
    {
        echo "<script>
        demo.showCustomNotification('top','right','success','Data Updated Successfully!');
        
        </script>";

    } else {
        echo "<script>
        demo.showCustomNotification('top','right','success','Failed to Update Data!');</script>
        setTimeout(function(){ location.reload(); }, 2000); 
        </script>";
    }
}
?>

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
</html>