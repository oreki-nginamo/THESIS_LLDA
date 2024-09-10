<?php
$servername = "localhost";
$username = "root";  // Use your MySQL username
$password = "";  // Use your MySQL password
$dbname = "llda_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";

    // Ensure the upload directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Check for file upload errors
    if ($_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
        echo "<script>
            alert('File upload failed with error code " . $_FILES['fileToUpload']['error'] . "');
            window.location.href = 'report.php';
        </script>";
        exit();
    }

    // Sanitize the filename
    $filename = basename($_FILES["fileToUpload"]["name"]);
    $filename = preg_replace("/[^A-Za-z0-9_\-\.]/", '_', $filename);
    $target_file = $target_dir . $filename;

    // Check if file is a PDF
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($fileType != "pdf") {
        echo "<script>
            alert('Sorry, only PDF files are allowed.');
            window.location.href = 'report.php';
        </script>";
        exit();
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>
            alert('Sorry, file already exists.');
            window.location.href = 'report.php';
        </script>";
        exit();
    }

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Insert file info into the database
        $sql = "INSERT INTO pdf_files (filename, filepath) VALUES ('$filename', '$target_file')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                alert('The file " . htmlspecialchars($filename) . " has been uploaded.');
                window.location.href = 'report.php';
            </script>";
        } else {
            echo "<script>
                alert('Database error: " . $conn->error . "');
                window.location.href = 'report.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Sorry, there was an error uploading your file.');
            window.location.href = 'report.php';
        </script>";
    }
}

$conn->close();
?>
