<?php
include 'connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST['contact-name'];
        $email = $_POST['contact-email'];
        $projectType = $_POST['projectType'];
        $hearAbout = $_POST['hearAbout'];
        $contactno = $_POST['contact-no'];
        $vibes = $_POST['vibes']; // This will be comma-separated values
        $message = $_POST['contact-message'];

        $stmt = $conn->prepare("INSERT INTO visitors (name, email, heard_about, project_type, message, vibe ,wp_no) VALUES (?, ?, ?, ?, ?, ? ,?)");
        $stmt->bind_param("sssssss", $name, $email, $hearAbout, $projectType, $message, $vibes,$contactno);

        if ($stmt->execute()) 
        {
               $stmt->close();
               $conn->close();
            echo "<script> alert('Thank you! Your message has been sent.')
            setTimeout(function() {
            window.location.href = 'index.php';
        }, 1000); // 20 seconds </script>";
        } 
        else {

               $stmt->close();
            $conn->close();
            echo "<script> alert('Error: " . $conn->error . "'); 
            setTimeout(function() {
            window.location.href = 'index.php';
        }, 1000); // 20 seconds</script>";
        }

        
    }
?>