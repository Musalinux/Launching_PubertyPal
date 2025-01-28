<?php
include 'conn.php'; // Include the database connection file
?>

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
        /* Additional styles specific to games.php */
        .games-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .game-container {
            width: 45%;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .game-container h2 {
            color: #6C63FF;
        }

        .game-container p {
            margin-bottom: 20px;
        }

        .game-container a {
            display: block;
            margin-top: 20px;
            background-color: #6C63FF;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .game-container a:hover {
            background-color: #857df2;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a href="home.php" class="logo"><img src="../images/logopal.png" alt="Puberty Pal Logo"></a>
        <ul class="nav-links">
            <li><a href="topics.php">Topics</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="games.php">Games</a></li>
            <li><a href="journey.php">Journey</a></li>
            <li><a href="charity.php">Charity</a></li>
            <li><a href="aboutus.php">Say Hi!</a></li>
        </ul>
    </nav>

    <div class="games-container">
        <div class="game-container">
            <h2>Pop Quiz</h2>
            <p>Test your knowledge with our interactive quiz!</p>
            <a href="quiz.php">Start Quiz</a>
        </div>
        <div class="game-container">
            <h2>Interactive Drag & Drop Game</h2>
            <p>Sort the items into categories in this fun game!</p>
            <a href="dragdrop.php">Play Game</a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>