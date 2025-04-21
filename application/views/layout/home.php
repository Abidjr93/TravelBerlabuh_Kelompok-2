<div class="container-motto">
    <div class="container-motto-slider">
        <div class="container-motto-slide" style="background-image: url('assets/images/Bromo1.jpg');"></div>
        <div class="container-motto-slide" style="background-image: url('assets/images/Ijen1.jpg');"></div>
        <div class="container-motto-slide" style="background-image: url('assets/images/Dieng1.jpg');"></div>
    </div>
    <div class="container-motto-text">
        <h1>Discover the World</h1>
        <p>Explore amazing destinations with our curated travel experiences</p>
    </div>
</div>

<div class="container-home-destination">
    <div class="container-home-destination-head">
        <h2>Popular Destinations</h2>
    </div>
    <div class="container-home-destination-card">
        <?php
            $tours = [[
                'id' => 1,
                'title' => 'Gunung Bromo (Malang)',
                'image' => 'bromo1.jpg',
                'price' => 200.000,
                ], [
                'id' => 2,
                'title' => 'Kawah Ijen (Banyuwangi)',
                'image' => 'Ijen1.jpg',
                'price' => 300.000,
                ], [
                'id' => 3,
                'title' => 'Gunung Dieng (Wonosobo)',
                'image' => 'Dieng1.jpg',
                'price' => 500.000,
                ],
            ];

            foreach ($tours as $tour) {
                echo '<div class="home-destination-card">';
                echo '<div class="home-destination-image">';
                echo '<img src="assets/images/' . $tour['image'] . '" alt="' . $tour['title'] . '">';
                echo '<div class="home-destination-price">' . $tour['price'] . '.000/People</div>';
                echo '</div>';
                echo '<div class="home-destination-content">';
                echo '<h3>' . $tour['title'] . '</h3>';
                echo '<div class="home-destination-meta">';
                echo '</div>';
                echo '<a href="destinasi-detail.php?id=' . $tour['id'] . '" class="btn-small">View Details</a>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
    <div class="home-destination-button">
        <a href="destinasi.php" class="btn">View All Destinations</a>
    </div>
</div>