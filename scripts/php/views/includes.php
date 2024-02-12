<?php
/**
 * Simple PHP script example to showcase hwo HTML content
 * can be re-used across multiple HTML files
 * 
 * @author: w.delamare
 * @date: Dec. 2023
 */

    function include_header() {
        ?>
    <header>
        <div class="header-left">
            <button class="add-ad-button">+ Add an Ad</button>
        </div>
        <div class="header-center">
            <h1><a href="markController.php">LeBonCoin</a></h1>
            <input type="text" placeholder="Search..." class="search-bar">
        </div>
        <div class="header-right">
            <ul>
                <li><i class="icon">&#128269;</i><a href="/loginController.php"><span> Search</span></li>
                <li><i class="icon">&#10084;</i><a href="/loginController.php"><span> Favorites</span></li>
                <li><i class="icon">&#128172;</i><a href="/loginController.php"><span> Message</span></li>
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    echo '<li><i class="icon">&#128100;</i><a href="/loginController.php"><span> Logout</span></a></li>';
                } else {
                    echo '<li><i class="icon">&#128100;</i><a href="/loginController.php"><span> Profile</span></a></li>';
                }
                ?>
            </ul>
        </div>
    </header>    
        <?php
    }


    function include_footer() {
        ?>
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-left">
                    <h3>About TAI</h3>
                    <p>TAI is a leading company in providing innovative solutions for XYZ industry.</p>
                    <p>Address: 123 Main Street, City, Country</p>
                </div>
                <div class="footer-center">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/main_page.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-right">
                    <h3>Contact Us</h3>
                    <p>Email: <a href="mailto:contact@tai.com">contact@tai.com</a></p>
                    <p>Phone: +123 456 7890</p>
                    <p>Fax: +123 456 7891</p>
                    <p>WhatsApp: +123 456 7892</p>
                    <p>WeChat: tai_company</p>
                    <div class="social-links">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> TAI. All rights reserved.</p>
            </div>
        </footer>
        <?php
    }
    


    function include_error_message($message) {
        echo "<p class='error_message'>" . $message . "</p>";
    }


?>