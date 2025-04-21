    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>About Us</h1>
            <div class="breadcrumbs">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>About Us</span>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Selamat Datang di BERLABUH</h2>
                    <p>Founded in 2010, Tourimo has grown from a small local agency to a global travel company with a presence in over 30 countries. Our mission is to create unforgettable travel experiences that enrich lives and create lasting memories.</p>
                    <p>At Tourimo, we believe that travel has the power to transform lives. Our carefully curated tours are designed to provide authentic experiences that allow you to immerse yourself in local cultures, discover breathtaking landscapes, and connect with people from around the world.</p>
                    <p>With a team of experienced travel professionals and local experts, we are committed to providing exceptional service and personalized attention to every client. Whether you're looking for a relaxing beach vacation, an adventurous trek, or a cultural city break, we have the perfect tour for you.</p>
                    <p>Our commitment to sustainable tourism means that we work closely with local communities to ensure that our tours benefit the places we visit and minimize our environmental impact.</p>
                </div>
                <div class="about-image">
                <img src="<?php echo base_url('assets/images/hero-bg.jpg'); ?> ">
                </div>
            </div>
        </div>
    </section>

        <!-- Team Section -->
        <section class="team-section">
        <div class="container">
            <div class="section-title">
                <h2>Meet Our Team</h2>
                <p>The passionate professionals behind our exceptional service</p>
            </div>
            <div class="team-grid">
                <?php
                // Example team data
                $team = [
                    [
                        'name' => 'Rifky',
                        'position' => 'CEO & Founder',
                        'photo' => 'abid1.png',
                        'social' => [
                            'facebook' => '#',
                            'twitter' => '#',
                            'instagram' => '#',
                            'linkedin' => '#'
                        ]
                    ],
                    [
                        'name' => 'Emma Johnson',
                        'position' => 'Tour Director',
                        'photo' => 'abid2.jpg',
                        'social' => [
                            'facebook' => '#',
                            'twitter' => '#',
                            'instagram' => '#',
                            'linkedin' => '#'
                        ]
                    ],
                    [
                        'name' => 'Michael Wong',
                        'position' => 'Marketing Manager',
                        'photo' => 'abid3.jpg',
                        'social' => [
                            'facebook' => '#',
                            'twitter' => '#',
                            'instagram' => '#',
                            'linkedin' => '#'
                        ]
                    ],
                    [
                        'name' => 'Sofia Garcia',
                        'position' => 'Customer Service',
                        'photo' => 'abid4.jpg',
                        'social' => [
                            'facebook' => '#',
                            'twitter' => '#',
                            'instagram' => '#',
                            'linkedin' => '#'
                        ]
                    ]
                ];

                foreach ($team as $member) {
                    echo '<div class="team-member">';
                    echo '<div class="team-photo">';
                    echo '<img src="assets/images/' . $member['photo'] . '" alt="' . $member['name'] . '">';
                    echo '</div>';
                    echo '<div class="team-info">';
                    echo '<h3>' . $member['name'] . '</h3>';
                    echo '<p>' . $member['position'] . '</p>';
                    echo '<div class="team-social">';
                    foreach ($member['social'] as $platform => $link) {
                        echo '<a href="' . $link . '"><i class="fab fa-' . $platform . '"></i></a>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>