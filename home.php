<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="./footer.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" />



</head>

<body>
    
<div class="home-main">
<div class="wrapper">
        <!-- header-->
        <div class="header-navigation">
            <div class="items">
                <div class="home"><a href="home.php"
                        style=" text-decoration:none; color: black; 
                text-shadow: 1px 0 0 rgba(0, 0, 0, 0.5), 0 1px 0 rgba(0, 0, 0, 0.5), -1px 0 0 rgba(0, 0, 0, 0.5), 0 -1px 0 rgba(0, 0, 0, 0.5);">Home</a>
                </div>
                <div class="status" id="statusText"><a href="status.php"
                        style=" text-decoration:none; color: black;">Status</a></div>
                <div class="status" id="repositoriesText"><a href="prediction_MI.php"
                        style=" text-decoration:none; color: black;">Repositories</a></div>
                <div class="status" id="reportText"><a href="report.php"
                        style=" text-decoration:none; color: black;">Report</a></div>
                <div class="button" id="buttonContainer">
                    <div class="log-out"><a href="login.php" style="text-decoration: none; color: white;">Log Out</a>
                    </div>
                </div>
            </div>
            <img class="updated-logo-v5-no-bilog-1" alt="" src="assets/updated-logo-v-5-no-bilog-10.png">
            <img class="llda-logo-2" alt="" src="assets/llda-logo-21.png">
        </div>
        <!-- body content-->
        <div class="home-page-frame">
            <img class="laguna-lake-from-llda-1" alt="" src="assets/Laguna Lake from LLDA 1.png">
            <div class="legend">Map Legend</div>
            <div class="laguna-lake-stations">Laguna Lake Stations</div>
            <div class="tributary-rivers-stations">Tributary Rivers Stations</div>
            <img class="legend-1-icon" alt="" src="assets/Legend 1.svg">
            <img class="legend-2-icon" alt="" src="assets/Legend 2.svg">
            <div class="view-quarterly-report" id="viewQuarterlyReport"><a href="report.php"
                    style="text-decoration: none; color: black;">View Quarterly Report</a>
            </div>
        </div>
        </div>
    </div>
</div>
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
        var statusText = document.getElementById("statusText");
        if (statusText) {
            statusText.addEventListener("click", function (e) {
                // Add your code here
            });
        }
        var repositoriesText = document.getElementById("repositoriesText");
        if (repositoriesText) {
            repositoriesText.addEventListener("click", function (e) {
                // Add your code here
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
        var viewQuarterlyReport = document.getElementById("viewQuarterlyReport");
        if (viewQuarterlyReport) {
            viewQuarterlyReport.addEventListener("click", function (e) {
                // Add your code here
            });
        }
    </script>

</body>



</html>