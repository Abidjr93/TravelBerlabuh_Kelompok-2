<footer class="footer">
    <div class="footer-content container">
        <div class="footer-section">
            <img src="assets/images/LogoBerlabuh.png" class="footer-logo-img">
        </div>

        <div class="footer-section">
            <h3>About Berlabuh</h3>
            <div class="divider"></div>
            <p>Berlabuh is a premier travel agency specializing in curated travel experiences around the world. We're dedicated to making your travel dreams come true.</p>
            <div class="footer-social">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="footer-section">
            <h3>Top Destinations</h3>
            <div class="divider"></div>
            <ul class="footer-links">
                <li><a href="<?= base_url('Tours#Daftar_Paket') ?>">Gunung Bromo</a></li>
                <li><a href="<?= base_url('Tours#Daftar_Paket') ?>">Kawah Ijen</a></li>
                <li><a href="<?= base_url('Tours#Daftar_Paket') ?>">Gunung Dieng</a></li>
                <li><a href="<?= base_url('Tours#Daftar_Paket') ?>">Raja Ampat</a></li>
            </ul>
        </div>

        <!-- <div class="footer-section">
            <h3>Quick Links</h3>
            <div class="divider"></div>
            <ul class="footer-links">
                <li><a href="<?= base_url('home') ?>">Home</a></li>
                <li><a href="<?= base_url('Tours') ?>">Destinasi</a></li>
                <li><a href="<?= base_url('about') ?>">About Us</a></li>
            </ul>
        </div> -->

        <div class="footer-section">
            <h3>Contact Info</h3>
            <div class="divider"></div>
            <ul class="contact-info">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Jl. Veterean Kota Malang</span>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>+6282123456789</span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <span>BerlabuhTrip@gmial.com</span>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <span>Senin-Minggu: 7AM - 6PM</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?= date('Y') ?> Berlabuh Trip And Travel. All rights reserved.</p>
        </div>
    </div>
</footer>
<script>
    // Add scrolled class to header when scrolling
    document.addEventListener('DOMContentLoaded', function() {
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navMenu = document.querySelector('.nav-menu');

        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });
        }
    });
    // Reset button functionality
    document.getElementById('reset-btn').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = '<?php echo site_url('tours'); ?>';
    });

    // Form validation
    document.getElementById('filter-form').addEventListener('submit', function(e) {
        const minPrice = document.querySelector('input[name="min_price"]').value;
        const maxPrice = document.querySelector('input[name="max_price"]').value;

        if (minPrice && maxPrice && parseInt(minPrice) > parseInt(maxPrice)) {
            e.preventDefault();
            alert('Minimum price cannot be greater than maximum price');
        }
    });
</script>
</body>

</html>