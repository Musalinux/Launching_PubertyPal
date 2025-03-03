<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Drag & Drop Game on Puberty and Safety</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/dragdrop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
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
    <div class="game-container">
        <div class="game-section" id="start-screen">
            <h1>Privacy and Puberty Learning Game</h1>
            <h2>Overview</h2>
            <p>This game helps you understand where certain topics or actions should be discussed or performed.</p>
            <h2>How to Play</h2>
            <p>Drag the items to the correct area: private or public.</p>
            <button onclick="nextSection('enter-name')">Start Learning</button>
        </div>
        <div class="game-section" id="enter-name" style="display:none;">
            <h2>Enter your character name</h2>
            <input type="text" class="name-input" placeholder="Enter your name">
            <button onclick="nextSection('level1')">Next</button>
        </div>
        <div class="game-section" id="level1" style="display:none;">
            <h2>Puberty Education</h2>
            <p>Drag the items into either 'Physical Changes' or 'Emotional Changes'</p>
            <div class="category-container">
                <div class="category-block">
                    <h3 class="title-physical"><strong>Physical Changes</strong></h3>
                    <div class="category" data-category="physical">
                        <img src="../images/phychange.jpg" alt="Physical Changes" class="category-image">
                    </div>
                </div>
                <div class="category-block">
                    <h3 class="title-emotional">Emotional Changes</h3>
                    <div class="category" data-category="emotional">
                        <img src="../images/mentalch.jpg" alt="Emotional Changes" class="category-image">
                    </div>
                </div>
            </div>
            <div class="feedback-panel"></div>
            <div class="items-container">
            </div>
            <button onclick="nextSection('level2')">Next Level</button>
        </div>

        <div class="game-section" id="level2" style="display:none;">
            <h2>Personal Safety Online</h2>
            <p>Decide what information is 'Safe to Share' or should be 'Kept Private'</p>
            <div class="category-container">
                <div class="category-block">
                    <h3 class="title-safe">Safe to Share</h3>
                    <div class="category" data-category="safe">
                        <img src="../images/safe.jpg" alt="Safe to Share" class="category-image">
                    </div>
                </div>
                <div class="category-block">
                    <h3 class="title-private">Keep Private</h3>
                    <div class="category" data-category="private">
                        <img src="../images/notsafe.jpg" alt="Keep Private" class="category-image">
                    </div>
                </div>
            </div>
            <div class="feedback-panel"></div>
            <div class="items-container">
            </div>
            <button onclick="nextSection('results')">See Results</button>
        </div>
        <div class="game-section" id="results" style="display:none;">
            <h2>Game Results</h2>
            <div id="results-display"></div>
            <button onclick="restartGame()">Restart Game</button>
        </div>
    </div>
    <script src="../js/dragdrop.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>