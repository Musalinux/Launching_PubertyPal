<?php include 'conn.php'; // Include the database connection file ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../js/game.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        
        .games-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .game-container {
            width: 30%;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .game-container img {
            width: 100%;
            height: auto;
            max-height: 350px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .game-container h2 {
            color: #5C362B;
        }

        .game-container p {
            margin-bottom: 20px;
        }

        .game-container a {
            display: block;
            margin-top: 20px;
            background-color: black;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease, color 0.3s;
            ;
        }

        .game-container a:hover {
            background-color: pink;
            color: black
        }

        .title-h1 {
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 5px;
        }
    </style>
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
    <h1 class="title-h1">Let's Play and Learn!</h1>
    <div class="games-container">
        <div class="game-container">
            <h2>Pop Quiz</h2>
            <p>Test your knowledge with our interactive quiz!</p>
            <img src="../images/quiz.jpg" alt="Pop Quiz">
            <a href="quiz.php">Start Quiz</a>
        </div>
        <div class="game-container">
            <h2>Interactive Drag & Drop Game</h2>
            <p>Sort the items into categories in this fun game!</p>
            <img src="../images/drag.svg" alt="Drag and Drop Game">
            <a href="dragdrop.php">Play Game</a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>