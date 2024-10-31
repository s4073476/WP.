<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets Victoria</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS -->
</head>

<body>
    <header>
        <nav>
            <img src="logo.png" alt="Pets Victoria Logo" class="logo"> <!-- You need to add the logo image -->
            <select>
                <option>Select an Option...</option>
                <option>Adopt a Pet</option>
                <option>Find Pet Services</option>
            </select>
            <input type="search" placeholder="Search">
        </nav>
    </header>
    <?php include 'includes/nav.inc'; ?>
    <main>
    <section class="hero">
        <h1 class="main-heading"><b>PETS VICTORIA</b></h1>
        <h2 class="sub-heading">WELCOME TO PET ADOPTION</h2>
        <img src="hero-pets.png" alt="Pets Image"> <!-- Ensure this path points to your image -->
    </section>
</main>

    <footer>
        <p>&copy; 2024 Pets Victoria. All Rights Reserved.</p>
    </footer>
</body>
</html>
