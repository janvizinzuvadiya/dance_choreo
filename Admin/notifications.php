    <?php   
    include 'side-bar.php';
    include 'connection.php';
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>


    .cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .info-card {
        position: relative;
        background-image: url('assets/img/cargbg.jpg');
        background:cover;
        background-repeat:no-repeat;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        padding: 15px 20px;
        font-size: 14px;
        line-height: 1.4;
        transition: transform 0.2s;
        color:white;

    }

    .info-card:hover {
        transform: translateY(-5px);
    }

    .info-card p {
        margin: 4px 0;
    }
    /* Sr No badge */
    .sr-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        /* background-color: #ffffffff;  */
        /* border:1px solid #ccb1d4ff;  */
        border-radius:20px;
        font-size:12px;
        font-weight: lighter;
        padding: 5px 10px;
        border-radius: 12px;
    }
    /* Group for left badges */
    .badge-group {
        position: absolute;
        top: 10px;
        left: 10px;
        display: flex;
        gap: 6px; /* space between badges */
    }

    /* Vibe badge */
    .vibe-badge {
        background: #e6d873ff;  /* green */
        color: #fff;
        font-size: 12px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 12px;
    }

    /* Type badge */
    .type-badge {
        background: #FF4A55;  /* yellow/orange */
        color: #fff;
        font-size: 12px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 12px;
    }

.card-actions {
    position: absolute;
    bottom: 10px;
    right: 10px;
    display: flex;
    gap: 8px; /* spacing between buttons */
}

.action-btn {
    width: 35px;
    height: 35px;
    padding: 3px;
    background-color: #fff;
    border: 1px solid #ccb1d4ff;
    border-radius: 20px;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background 0.2s;
}

/* Hover effects */
.action-btn:hover {
    background: #f4f4f4;
}

.whatsapp i {
    color: #73b18aff;
}

.delete-btn:hover {
    background: #d32f2f;
    color: #fff;
}

.action-btn i {
    font-size: 16px;
}
.delete-btn {
    z-index: 1000;  /* bring it above everything */
}




    </style>
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Notifications</h4>
                            <p class="category">Collebrations that Client Wants , checkout the Connection.</a></p>

                        </div>
                        <div class="content">

                            <div class="places-buttons">
                                <div class="row">
                                    <div class="content table-responsive table-full-width" style="width:auto; Xoverflow-x:auto; margin:auto;">
                                    <table class="table table-hover" 
                                        style="align:center; margin:5px; font-size:15px; border-spacing:5px; max-width:99%;
                                        background-image:url('assets/img/cargbg.jpg');
                                        background-size: cover;   /* ensures image covers full area */
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        border-radius: 12px;      /* optional for rounded corners */
                                        overflow: hidden;     ">

                                        <thead>
                                            <th style="color:black;">Sr no.</th>
                                            <th style="color:black;">Name</th>
                                            <th style="color:black;">Heard From</th>
                                            <th style="color:black;">Project type</th>
                                            <th style="color:black;">vibe</th>
                                            <th style="color:black;">message</th>
                                            <th style="color:black;">Email</th>
                                            <th style="color:black;">contact</th>
                                            <th style="color:black;">Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo"<tr>
                                                        <td> ".$i ."</td>
                                                        <td>{$row['name']}</td>
                                                        <td>{$row['heard_about']}</td>
                                                        <td>{$row['project_type']}</td>
                                                        <td>{$row['vibe']}</td>
                                                        <td>{$row['message']}</td>
                                                        <td style=\"text-align:center;\">  
                                                            <a href=".'https://mail.google.com/mail/?view=cm&fs=1&to=' . $row['email']." target=\"_blank\">
                                                                <i class=\"pe-7s-mail\" style=\"padding:3px; background-color: #ffffffff; border:1px solid #ccb1d4ff; border-radius:20px; font-size:20px;\"></i>
                                                            </a>
                                                        </td>
                                                        <td style=\"text-align:center;\">
                                                            <a href=".'https://wa.me/' . $row['wp_no'] ." target=\"_blank\">
                                                                <i class=\"fab fa-whatsapp\" style=\"color: #73b18aff; padding:3px; background-color: #ffffffff; border:1px solid #ccb1d4ff;  border-radius:20px; font-size:20px;\"></i>
                                                            </a>
                                                        </td>
                                                        <td style=\"text-align:center;\">
                                                            <a href=\"notifications.php?delete_id={$row['id']}\" 
                                                                onclick=\"return confirm('Are you sure you want to delete this record?');\">
                                                                <i class=\"pe-7s-trash\" style=\"color: #d04545ff; padding:3px; background-color: #ffffffff; border:1px solid #ccb1d4ff;  border-radius:20px; font-size:20px;\"></i>
                                                            </a>
                                                        </td>
                                                    </tr>";
                                                    $i++;   
                                            }
                                            } else {
                                                echo "<tr><td colspan='9' style='text-align:center;'>No records found</td></tr>";
                                            }

                                            ?>
                                        </tbody>
                                    </table>

                                    <BR>
                        <div class="row">
                            <div style="display:flex; align-items:center; gap:15px; margin: 20px;">
                                <h3 style="margin:0;">Sorting my Projects</h3>
                                
                                <form method="GET" action="">
                                    <select name="sort" id="sort" onchange="this.form.submit()" style="padding:6px 12px; border-radius:6px; border:1px solid #ccc;">
                                        <option value="">-- Select --</option>

                                        <!-- Vibes group -->
                                        <optgroup label="Vibes">
                                            <option value="vibe:Passion 💖" <?= (isset($_GET['sort']) && $_GET['sort']=='vibe:Passion 💖')?'selected':''; ?>>Passion 💖</option>
                                            <option value="vibe:Collab 🤝" <?= (isset($_GET['sort']) && $_GET['sort']=='vibe:Collab 🤝')?'selected':''; ?>>Collab 🤝</option>
                                            <option value="vibe:Energy 🔥" <?= (isset($_GET['sort']) && $_GET['sort']=='vibe:Energy 🔥')?'selected':''; ?>>Energy 🔥</option>
                                            <option value="vibe:Elegance 🌸" <?= (isset($_GET['sort']) && $_GET['sort']=='vibe:Elegance 🌸')?'selected':''; ?>>Elegance 🌸</option>
                                        </optgroup>

                                        <!-- Project Types group -->
                                        <optgroup label="Project Types">
                                            <option value="type:Workshop" <?= (isset($_GET['sort']) && $_GET['sort']=='type:Workshop')?'selected':''; ?>>Workshop</option>
                                            <option value="type:1-on-1" <?= (isset($_GET['sort']) && $_GET['sort']=='type:1-on-1')?'selected':''; ?>>1-on-1</option>
                                            <option value="type:Stage" <?= (isset($_GET['sort']) && $_GET['sort']=='type:Stage')?'selected':''; ?>>Stage</option>
                                            <option value="type:Brand" <?= (isset($_GET['sort']) && $_GET['sort']=='type:Brand')?'selected':''; ?>>Brand</option>
                                            <option value="type:Wedding" <?= (isset($_GET['sort']) && $_GET['sort']=='type:Wedding')?'selected':''; ?>>Wedding</option>
                                        </optgroup>

                                        <!-- General sorting -->
                                        <optgroup label="General">
                                            <option value="date" <?= (isset($_GET['sort']) && $_GET['sort']=='date')?'selected':''; ?>>Date</option>
                                            <option value="name" <?= (isset($_GET['sort']) && $_GET['sort']=='name')?'selected':''; ?>>Name</option>
                                        </optgroup>
                                    </select>
                                </form>
                            </div>
                                <div class="cards-container">
                                    <?php 
                                    $sr = 1;
                                    while ($row = $sort_result->fetch_assoc()) { 
                                        $date = $row['created_at'];  // assuming it's in MySQL DATETIME or DATE format
                                        $formattedDate = date("d M - Y", strtotime($date));         
                                    ?>
                                    
                                <div class="col-md-2 col-md-offset-4"
                                    style="align:center; margin:20px; font-size:15px; border-spacing:5px; width:auto; max-width:100%;">
                                        <div class="info-card">
                                            <!-- Sr No badge -->
                                            <span class="sr-badge"><?= $sr++; ?></span>

                                            <!-- Vibe + Type badges (top-left) -->
                                            <div class="badge-group">
                                                <span class="vibe-badge"><?= $row['vibe']; ?></span>
                                                <span class="type-badge"><?= $row['project_type']; ?></span>
                                            </div>


                                            <div class="card-content">
                                                <br><br>
                                                <p><strong style="color: #f5e567ff"> <?= $row['name'] ."<br>". $formattedDate ?></strong></p>
                                                <p>Heard about you from :<?= $row['heard_about']; ?></p>
                                                <p>"<small><?= $row['message']; ?></small>"</p>
                                            </div><br>

                                           <div class="card-actions">
                                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $row['email']?>" target="_blank" class="action-btn">
                                                    <i class="pe-7s-mail"></i>
                                                </a>
                                                <a href="https://wa.me/<?= $row['wp_no'] ?>" target="_blank" class="action-btn whatsapp">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                                <a href="notifications.php?delete_id=<?= $row['id']; ?>" 
                                                class="action-btn delete-btn" 
                                                onclick="return confirm('Are you sure to delete this record?');">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    }

                                    ?>

                            
                                </div>
                        </div>


                                
                                

                            </div>
                            <br>
                            <br>
                            
                        </div>
                    </div>
                </div>
            </div>


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

        </div>
    </div>


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
