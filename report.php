<?php
include 'upload_pdf.php';



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="page-styles/report.css" />
    <link rel="stylesheet" href="page-styles/data.css" />
    <link rel="stylesheet" href="./footer.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" />



</head>

<body>
<main>
<div class="wrapper">
        <!-- header-->
        <div class="header-navigation">
            <div class="items">
                <div class="home" id="statusText"><a href="home.php"
                        style=" text-decoration:none; color: black;">Home</a></div>
                <div class="status" id="statusText"><a href="status.php"
                        style=" text-decoration:none; color: black;">Status</a></div>
                <div class="status" id="repositoriesText"><a href="prediction_MI.php"
                        style=" text-decoration:none; color: black;">Repositories</a></div>
                <div class="status" id="reportText"><a href="report.php"
                        style=" text-decoration:none; color: black; 
text-shadow: 1px 0 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(0, 0, 0, 0.5), -1px 0 0 rgba(0, 0, 0, 0.5), 0 -1px 0 rgba(0, 0, 0, 0.5);">Report</a></div>
                <div class="button" id="buttonContainer">
                    <div class="log-out"><a href="login.php" style="text-decoration: none; color: white;">Log Out</a>
                    </div>
                </div>
            </div>
            <img class="updated-logo-v5-no-bilog-1" alt="" src="assets/updated-logo-v-5-no-bilog-10.png">
            <img class="llda-logo-2" alt="" src="assets/llda-logo-21.png">
        </div>
        <!-- body content-->
        <div class="body">


            <div class="data-repositories">Quarterly Report</div>
            <div class="input-field-with-button">

                <form action="upload_pdf.php" method="post" enctype="multipart/form-data">
                    <input type="file" id="fileToUpload" name="fileToUpload">
                    <input class="upload-butt" type="submit" value="Upload PDF" name="submit">
                </form>

            </div>
            <div class="multi-line-paragraph-input">
                <div class="classification-report">Findings</div>
                <div class="field1">
                    <!-- Iframe to display PDF -->
                    <iframe id="pdfViewer" src="" width="100%" height="600px" style="border: none;"></iframe>
                    <div class="label1">

                    </div>
                </div>
            </div>

            <!-- Display uploaded PDF list with checkboxes for deletion -->
            <div class="uploaded-pdfs-container">
                <div class="uploaded-pdfs">
                    <h3>Uploaded PDF Reports</h3>

                    <form id="pdfForm" method="POST" action="del_pdf.php">
                        <ul>
                            <?php
                            // Connect to the database to fetch the list of PDFs
                            $servername = "localhost";
                            $username = "root";  // Your MySQL username
                            $password = "";  // Your MySQL password
                            $dbname = "llda_db";

                            // Create a new database connection
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Query to get the list of uploaded PDF files
                            $sql = "SELECT id, filename, filepath FROM pdf_files";
                            $result = $conn->query($sql);

                            // Display each PDF as a link with a checkbox for deletion
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<li>
                    <input type='checkbox' name='pdf_ids[]' value='" . $row['id'] . "'>
                    <a href='#' onclick=\"loadPDF('" . $row['filepath'] . "')\">" . htmlspecialchars($row['filename']) . "</a>
                  </li>";
                                }
                            } else {
                                echo "<li>No PDFs uploaded yet.</li>";
                            }

                            // Close the database connection
                            $conn->close();
                            ?>
                        </ul>
                        <button type="submit">Delete Selected</button>
                    </form>
                </div>

            </div>

        </div>
        
    </div>
</main>
    
<!-- Footer -->
<footer class="enhanced-footer">
            <div class="footer-content">
                <!-- Left Section: Footer Title -->
                <div class="footer-left">
                    <p class="footer-title">Laguna Lake Development Authority</p>
                    <a href="#"><img src="Buttons/fb.png" alt="Facebook"></a>
                    <a href="#"><img src="Buttons/ig.png" alt="Instagram"></a>
                    <a href="#"><img src="Buttons/yt.png" alt="YouTube"></a>
                </div>

                <!-- Center Section: Social Media Icons -->
                <div class="footer-center">
                    <p><strong>Research Proponents</strong></p>
                    <p>Marcus Henson L. Garcia</p>
                    <p>John Wilson D. Lorin</p>
                    <p>Joshua A. Rancap</p>
                </div>

                <!-- Right Section: Research Proponents and Copyright -->
                <div class="footer-right">

                    <p>© 2024 LLDA. All Rights Reserved</p>
                </div>
            </div>
        </footer>

    <script>
        var homeText = document.getElementById("homeText");
        if (homeText) {
            homeText.addEventListener("click", function (e) {
                // Add your code here
            });
        }
        var statusText = document.getElementById("statusText");
        if (statusText) {
            statusText.addEventListener("click", function (e) {
                // Add your code here
            });
        }
        var repositoriesText = document.getElementById("repositoriesText");
        if (repositoriesText) {
            repositoriesText.addEventListener("click", function (e) {
                window.location.href = "Repositories.php"
            });
        }
        var reportText = document.getElementById("reportText");
        if (reportText) {
            reportText.addEventListener("click", function (e) {
                // Add your code here
            });
        }
        var buttonContainer = document.getElementById("buttonContainer");
        if (buttonContainer) {
            buttonContainer.addEventListener("click", function (e) {
                // Add your code here
            });
        }


        // Function to load PDF into iframe
        function loadPDF(filePath) {
            var pdfViewer = document.getElementById('pdfViewer');
            pdfViewer.src = filePath;
        }
    </script>

</body>


</html>