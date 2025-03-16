<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $method = "POST";
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
} else {
    $method = "GET";
    $username = isset($_GET["username"]) ? $_GET["username"] : "";
}
?>



<!DOCTYPE html>
<html>
<head>
 
    <title>Welcome | RMF Properties</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>


    <header>
        
    <img src="../image/logoo.png" class="logo">
    <nav>
            <ul>
                <li><a href="#contact">Contact</a></li>
                <li><a href="/website/index.html">Logout</a></li>
            </ul>
        </nav>
    </header>

    

    <div class="banner">
    <div class="banner-content">
        <h1>Login Successful via <?php echo $method; ?></h1>
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>Discover the best real estate deals, luxury homes, and prime investments.</p>
    </div>
</div>

    <section class="properties">
        <h2>Explore Our Featured Listings</h2>
        <div class="property-container">
            
            <div class="property-card">
                <img src="../image/property1.jpg" alt="Luxury Apartment">
                <h3>Luxury Apartment</h3>
                <p>Located in the heart of Downtown, this apartment offers breathtaking skyline views and top-tier amenities.</p>
                <a href="#">View Details</a>
            </div>

            <div class="property-card">
                <img src="../image/property2.jpg" alt="Beachfront Villa">
                <h3>Beachfront Villa</h3>
                <p>Experience unparalleled relaxation in this stunning beachfront villa with a private infinity pool.</p>
                <a href="#">View Details</a>
            </div>

            <div class="property-card">
                <img src="../image/property3.jpg" alt="Suburban House">
                <h3>Suburban House</h3>
                <p>A perfect family home in a quiet, secure neighborhood, offering modern design and comfort.</p>
                <a href="#">View Details</a>
            </div>

        </div>
    </section>

    <section class="cta">
        <h2>Looking for Your Dream Home?</h2>
        <p>Contact our real estate experts today and let us help you find the perfect property!</p>
        <a href="#contact" class="cta-button">Get in Touch</a>
    </section>

    <footer id="contact">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p><strong>Address:</strong> RMF Properties, Business Bay, Downtown City</p>
            <p><strong>Phone:</strong> +1 234 567 890</p>
            <p><strong>Email:</strong> <a href="mailto:info@rmfresidence.com">info@rmfresidence.com</a></p>
            <p><strong>Website:</strong> <a href="http://www.rmfresidence.com">www.rmfresidence.com</a></p>
            <div class="social-icons">
                <a href="#"><img src="../image/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="../image/instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="../image/linkedin-icon.png" alt="LinkedIn"></a>
            </div>
        </div>
        <p class="copyright">© 2025 RMF Properties. All Rights Reserved.</p>
    </footer>

</body>
</html>
