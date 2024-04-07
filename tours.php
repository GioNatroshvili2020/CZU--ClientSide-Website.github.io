<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kazbegi Travel</title>
    <link rel="shortcut icon" href="public/images/logo/mountain-fav.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- css -->
    <link rel="stylesheet" href="public/sass/style.css" />
</head>

<body>

    <header class="primary-header" role="banner">
        <!-- Header Content -->
    </header>

    <main role="main">
        <section class="tour hreview-aggregate" id="tour">
            <div class="main-text">
                <h1>Tours</h1>
            </div>
            <div class="main-container">
                <?php
                include_once 'config.php';
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                //Fetch tour data from the database
                $sql = "SELECT name, description, image FROM Tours";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {

                        echo '<div class="tour-cards" data-name="' . $row["name"] . '" data-description="' . $row["description"] . '" data-image="' . $row["image"] . '">';
                        echo '<div class="image-box">';
                        echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '" />';
                        echo '<div class="overlay"></div>';
                        echo '<div class="image-box-text">';
                        echo '<h2>' . $row["name"] . '</h2>';
                        echo '<p>' . $row["description"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="tour-cards-text">';
                        echo '<h1>' . $row["name"] . '</h1>';
                        echo '<p>' . $row["description"] . '</p>';
                        echo '<a href="#" class="btn-map">';
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-label="View Route Map">';
                        echo '<path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />';
                        echo '<path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />';
                        echo '</svg>';
                        echo '<span>View Route Map</span>';
                        echo '</a>';
                        echo '<div class="price">';
                        echo '<p>$450 <span>Per person</span></p>';
                        echo '<h2>3 Days 2 Nights</h2>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
            <div class="individual-tours">
                <a href="">Contact us</a> for Individual Tours
            </div>
        </section>
    </main>

    <footer class="hcard" role="contentinfo">
        <!-- Footer Content -->
    </footer>

    <script src="public/js/main.js"></script>
</body>

</html>