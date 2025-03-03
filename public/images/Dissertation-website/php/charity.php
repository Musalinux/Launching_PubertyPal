<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Support Links</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/charity.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    <nav class="navbar">
        <a href="home.php" class="logo"><img src="../images/logopal.png" alt="Puberty Pal Logo"></a>
        <ul class="nav-links">
            <li>
                <a href="home.php">Home</a>
                <ul class="submenu">
                    <li><a href="journey.php">Journey</a></li>
                    <li><a href="parents.php">Parents</a></li>
                </ul>
            </li>
            <li>
                <a href="resources.php">Resource Hub</a>
                <ul class="submenu">
                    <li><a href="resources.php">All Resources</a></li>
                    <li><a href="topics.php">Puberty Topics</a></li>
                </ul>
            </li>
            <li><a href="games.php">Games</a></li>
            <li><a href="charity.php">Charity</a></li>
            <li><a href="aboutus.php">Say Hi!</a></li>
        </ul>
    </nav>
</header>

<body>
    <h1 class="charity-header">Explore These Charities</h1>
    <main class="charity-container">
        <div class="charity-section" id="indian-charities">
            <h2>Charities in India</h2>
        </div>
        <div class="charity-section" id="global-charities">
            <h2>Global Initiatives</h2>
        </div>
    </main>
    <script src="../js/charity.js"></script>
    <script src="access.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>