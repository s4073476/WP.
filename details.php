<?php include 'includes/header.inc'; ?>
<?php include 'includes/nav.inc'; ?>

<main style="padding: 20px;">
    <?php
    include 'includes/db_connect.inc';

    if (isset($_GET['id'])) {
        $petid = $_GET['id'];

        // Fetch pet details
        $sql = "SELECT * FROM pets WHERE petid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$petid]);
        $pet = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($pet) {
            // Display pet image
            echo "<div style='text-align: center;'>";
            echo "<img src='images/" . $pet['image'] . "' alt='" . $pet['caption'] . "' style='max-width: 400px; width: 100%; height: auto; border-radius: 8px;'>";
            echo "</div>";

            // Display pet details
            echo "<section style='display: flex; justify-content: space-evenly; margin-top: 20px;'>";

            // Age
            echo "<div style='text-align: center;'>";
            echo "<img src='age.png' alt='Age Icon' style='width: 40px; height: 40px;'>";
            echo "<p>" . $pet['age'] . " months</p>";
            echo "</div>";

            // Type
            echo "<div style='text-align: center;'>";
            echo "<img src='birdss.jpg' alt='Type Icon' style='width: 40px; height: 40px;'>";
            echo "<p>" . ucfirst($pet['type']) . "</p>";
            echo "</div>";

            // Location
            echo "<div style='text-align: center;'>";
            echo "<img src='location.png' alt='Location Icon' style='width: 40px; height: 40px;'>";
            echo "<p>" . $pet['location'] . "</p>";
            echo "</div>";

            echo "</section>";

            // Display pet name and description
            echo "<div style='text-align: center; margin-top: 20px;'>";
            echo "<h2 style='font-family: Arial, sans-serif; font-weight: bold;'>" . $pet['petname'] . "</h2>";
            echo "<p style='font-family: Arial, sans-serif; font-size: 16px; max-width: 600px; margin: 0 auto; color: #333;'>" . $pet['description'] . "</p>";
            echo "</div>";
        } else {
            echo "<p>Pet not found.</p>";
        }
    }
    ?>
</main>

<?php include 'includes/footer.inc'; ?>
