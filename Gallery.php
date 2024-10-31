<?php
    // Include the necessary files
    include 'includes/db_connect.inc'; // Database connection
    include 'includes/header.inc'; // Header content
    include 'includes/nav.inc'; // Navigation content
?>

<main>
    <div class="wrapper">
        <h1>Pets Victoria has a lot to offer!</h1>
        <p>For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a difference to the Victorian rescue community and thousands of pets in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we all still have big, hairy work to do.</p>
        
        <!-- Gallery Section -->
        <div class="gallery">
            <?php
                try {
                    // Fetch pet images and details from the database using PDO
                    $query = "SELECT petid, image, caption FROM pets";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();

                    // Display each image as a gallery item
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="gallery-item">';
                        echo '<a href="details.php?id=' . $row['petid'] . '">';
                        echo '<img src="images/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['caption']) . '">';
                        echo '</a>';
                        echo '<div class="caption">';
                        echo '<p>' . htmlspecialchars($row['caption']) . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
            ?>
        </div>
    </div>
</main>

<?php
    include 'includes/footer.inc'; // Footer content
?>

<!-- Embedded CSS Styles for the Gallery Page -->
<style>
    /* Main wrapper for centering the content */
    .wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
    }

    /* Styling for the main header */
    h1 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    /* Paragraph styling */
    p {
        font-size: 16px;
        color: #333;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    /* Gallery grid layout */
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    /* Each gallery item styling */
    .gallery-item {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.2s;
        position: relative;
    }

    /* Styling on hover for a subtle zoom effect */
    .gallery-item:hover {
        transform: scale(1.03);
    }

    /* Styling the gallery images */
    .gallery-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    /* Caption container */
    .caption {
        padding: 15px;
        background: #f9f9f9;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    /* Styling the caption text */
    .caption p {
        font-size: 18px;
        color: #555;
        margin: 0;
        font-weight: 600;
    }

    /* Footer styling */
    footer {
        background: #ff7043;
        padding: 20px;
        text-align: center;
        color: white;
        font-size: 14px;
    }
</style>
