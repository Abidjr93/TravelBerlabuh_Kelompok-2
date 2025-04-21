
<footer>
        <div class="container">
            <div class="footer-widgets">
                <div class="widget">
                    <h3>About Tourimo</h3>
                    <p>Tourimo is a premier travel agency specializing in curated travel experiences around the world. We're dedicated to making your travel dreams come true.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="widget">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href=<?= site_url('about')?>>About Us</a></li>
                        <li><a href="tours.php">Tours</a></li>
                        <li><a href="destinations.php">Destinations</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h3>Top Destinations</h3>
                    <ul>
                        <li><a href="destination-details.php?id=1">Italy</a></li>
                        <li><a href="destination-details.php?id=2">France</a></li>
                        <li><a href="destination-details.php?id=3">Spain</a></li>
                        <li><a href="destination-details.php?id=4">Greece</a></li>
                        <li><a href="destination-details.php?id=5">Japan</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h3>Contact Info</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Travel Street, New York, NY 10001</li>
                        <li><i class="fas fa-phone-alt"></i> +1 (800) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> info@tourimo.com</li>
                        <li><i class="fas fa-clock"></i> Mon-Fri: 9AM - 6PM</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Tourimo. All rights reserved.</p>
            </div>
        </div>
    </footer>
    </body>
    <style>footer {
    background-color: #222;
    color: #fff;
    padding: 70px 0 0;
}

.footer-widgets {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
    margin-bottom: var(--spacing);
}

.widget h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.widget p {
    margin-bottom: 20px;
    color: #aaa;
}

.social-links {
    display: flex;
}

/* Continuing from previous CSS */

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    margin-right: 10px;
    color: #fff;
    transition: all 0.3s ease;
}

.social-links a:hover {
    background-color: #ff7e00;
    transform: translateY(-3px);
}

.widget ul li {
    margin-bottom: 10px;
}

.widget ul li a {
    color: #aaa;
    transition: all 0.3s ease;
}

.widget ul li a:hover {
    color: #ff7e00;
    padding-left: 5px;
}

.contact-info li {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    color: #aaa;
}

.contact-info li i {
    color: #ff7e00;
    margin-right: 10px;
    margin-top: 5px;
}

.footer-bottom {
    text-align: center;
    padding: 20px 0;
    margin-top: 50px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    color: #aaa;
}</style>
    </html>