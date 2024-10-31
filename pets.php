<?php include 'includes/header.inc'; ?>
<?php include 'includes/nav.inc'; ?>

<main style="padding: 20px; text-align: left;">
    <section style="text-align: center;">
        <h2>Discover Pets Victoria</h2>
        <p>
            Pets Victoria is a dedicated pet adoption organization based in Victoria, Australia, focused on providing a safe and loving environment for pets in need.
            With a compassionate approach, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals.
            Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds.
            The organization offers a range of services, including adoption counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.
        </p>
    </section>

    <!-- Flexbox container for image and table -->
    <section style="display: flex; justify-content: space-between; align-items: flex-start; margin-top: 20px;">
        <!-- Image Section -->
        <div style="flex: 1; padding-right: 20px;">
            <img src="image.jpg" alt="Pets Running" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px;">
        </div>

        <!-- Table Section -->
        <div style="flex: 1; max-width: 100%; height: 300px; overflow-y: auto;">
            <table style="width: 100%; border-collapse: collapse; height: 100%;">
                <thead>
                    <tr style="background-color: #f2f2f2; text-align: left;">
                        <th style="padding: 12px; border: 1px solid #ddd;">Pet</th>
                        <th style="padding: 12px; border: 1px solid #ddd;">Type</th>
                        <th style="padding: 12px; border: 1px solid #ddd;">Age</th>
                        <th style="padding: 12px; border: 1px solid #ddd;">Location</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'includes/db_connect.inc';
                    $sql = "SELECT petid, petname, age, type, location FROM pets";
                    $stmt = $conn->query($sql);
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr style='border-bottom: 1px solid #ddd;'>";
                        echo "<td style='padding: 12px;'><a href='details.php?id=" . $row['petid'] . "' style='color: #008080; text-decoration: none;'>" . $row['petname'] . "</a></td>";
                        echo "<td style='padding: 12px;'>" . ucfirst($row['type']) . "</td>";
                        echo "<td style='padding: 12px;'>" . $row['age'] . " months</td>";
                        echo "<td style='padding: 12px;'>" . $row['location'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php include 'includes/footer.inc'; ?>
