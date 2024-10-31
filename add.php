<?php include 'includes/header.inc'; ?>
<?php include 'includes/nav.inc'; ?>
<?php
    include 'includes/db_connect.inc'; // Database connection
?>
<main style="padding: 20px; display: flex; justify-content: center;">
    <div style="max-width: 600px; width: 100%; margin: auto;">
        <h2 style="text-align: center;">Add a New Pet</h2>
        <form action="process_add.php" method="post" enctype="multipart/form-data" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 100%;">

            <div style="margin-bottom: 15px;">
                <label for="petname" style="font-weight: bold;">Pet Name:</label>
                <input type="text" name="petname" style="width: 100%; padding: 8px; margin-top: 5px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="description" style="font-weight: bold;">Description:</label>
                <textarea name="description" style="width: 100%; padding: 8px; margin-top: 5px;" required></textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="age" style="font-weight: bold;">Age (in months):</label>
                <input type="number" name="age" step="0.1" style="width: 100%; padding: 8px; margin-top: 5px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="type" style="font-weight: bold;">Type:</label>
                <select name="type" style="width: 100%; padding: 8px; margin-top: 5px;" required>
                    <option value="" disabled selected>--Choose an option--</option>
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                    <option value="Bird">Bird</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="location" style="font-weight: bold;">Location:</label>
                <input type="text" name="location" style="width: 100%; padding: 8px; margin-top: 5px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="image" style="font-weight: bold;">Image:</label>
                <input type="file" name="image" style="width: 100%; padding: 8px; margin-top: 5px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="caption" style="font-weight: bold;">Image Caption:</label>
                <input type="text" name="caption" style="width: 100%; padding: 8px; margin-top: 5px;" required>
            </div>

            <div style="display: flex; justify-content: space-between;">
                <button type="submit" style="background-color: #008080; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
                <button type="reset" style="background-color: #f8f8f8; color: #000; padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; cursor: pointer;">Clear</button>
            </div>
        </form>
    </div>
</main>

<?php include 'includes/footer.inc'; ?>
