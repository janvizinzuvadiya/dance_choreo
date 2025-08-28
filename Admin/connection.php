<?php
    $host = "127.0.0.1";
    $dbname = "dance_db";
    $username = "root";
    $password = "";
    $port = 3360; 

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);
        
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, name, email, heard_about, project_type, message, vibe, created_at, wp_no 
            FROM visitors 
            ORDER BY id DESC";
    $result = $conn->query($sql);

        if (!$result) {
            die("Query failed: " . $conn->error);
        }

        
        if (isset($_GET['delete_id'])) {
            $delete_id = intval($_GET['delete_id']);  // prevent SQL injection

            $sql = "DELETE FROM visitors WHERE id = $delete_id";

            if (mysqli_query($conn, $sql)) {
                // Redirect back to avoid re-trigger on refresh
                header("Location: notifications.php?msg=deleted");
                exit;
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
        


        $query = "SELECT id, name, email, heard_about, project_type, message, vibe, created_at, wp_no 
          FROM visitors 
          ORDER BY id DESC";


        // sorting results 
            
        // If dropdown selected
        if (isset($_GET['sort']) && $_GET['sort'] != "") {
            $sort = $_GET['sort'];

            // --- Vibe filter ---
            if (strpos($sort, "vibe:") === 0) {
                $selected_vibe = substr($sort, 5); // e.g. Passion 💖
                $query = "SELECT * FROM visitors WHERE vibe LIKE '%$selected_vibe%' ORDER BY created_at DESC";

                // Count total of that vibe
                $count_sql = "SELECT COUNT(*) AS total FROM visitors WHERE vibe LIKE '%$selected_vibe%'";
                $count_result = $conn->query($count_sql);
                $total_count = $count_result->fetch_assoc()['total'];
            }
            // --- Project type filter ---
            elseif (strpos($sort, "type:") === 0) {
                $selected_type = substr($sort, 5);
                $query = "SELECT * FROM visitors WHERE project_type LIKE '%$selected_type%' ORDER BY created_at DESC";
            }
            // --- General sorting ---
            elseif ($sort == "date") {
                $query = "SELECT * FROM visitors ORDER BY created_at DESC";
            } elseif ($sort == "name") {
                $query = "SELECT * FROM visitors ORDER BY name ASC";
            }
        }
        $sort_result = $conn->query($query);

   






    
    // if (!$conn)
    // {   
    //     die("❌ Connection failed: ". mysqli_connect_error());
    // }
    // echo "✅ Connected successfully";
    
?>
