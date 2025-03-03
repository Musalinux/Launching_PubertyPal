<?php
include 'conn.php'; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puberty Pop Quiz</title>
    <link rel="stylesheet" href="../css/quiz.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <a href="index.html" class="logo"><img src="../images/logopal.png" alt="Puberty Pal Logo"></a>
        <ul class="nav-links">
            <li>
                <a href="index.html">Home</a>
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

    <div id="quiz-container">
        <h1>Puberty Pop Quiz</h1>
        <div id="question" class="question"></div>
        <ul id="answers" class="answers"></ul>
        <button id="submit-button" class="action-button" onclick="nextQuestion()">Next Question</button>
        <div id="result" class="result"></div>
        <button id="restart-button" class="action-button" style="display:none;" onclick="restartQuiz()">Restart
            Quiz</button>
    </div>
    <script src="../js/quiz.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>