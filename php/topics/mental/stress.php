<div?php include '../../conn.php' ; // Include the database connection file ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../../../resources/favicon.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../../../css/home.css">
        <title>Calm in the storm</title>
    </head>

    <body>
        <nav class="navbar">
            <a href="../../index.html" class="logo"><img src="../../../images/logopal.png" alt="Puberty Pal Logo"></a>
            <ul class="nav-links">
                <li>
                    <a href="../../index.html">Home</a>
                    <ul class="submenu">
                        <li><a href="../../journey.php">Journey</a></li>
                        <li><a href="../../parents.php">Parents</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../../resources.php">Resource Hub</a>
                    <ul class="submenu">
                        <li><a href="../../resources.php">All Resources</a></li>
                        <li><a href="../../topics.php">Puberty Topics</a></li>
                    </ul>
                </li>
                <li><a href="../../games.php">Games</a></li>
                <li><a href="../../charity.php">Charity</a></li>
                <li><a href="../../aboutus.php">Say Hi!</a></li>
            </ul>
        </nav>

        <div class="content">
            <h1>How to manage stress?</h1>
            <p>Taking care of mental health during puberty is essential for navigating the emotional and psychological
                changes of this developmental stage; here are ten key strategies to support well-being. </p>

            <div class="physical-images-container">
                <img src="../../../images/balance.jpg" alt="Physical Change 2">
            </div>
            <ul>
                <li>
                    <h3>Balance work and play</h3>
                    <p>Make time for both tasks and enjoyable activities to reduce stress and recharge..</p>
                </li>
                <li>
                    <h3>Plan your day</h3>
                    <p>Writing down your tasks for the day helps you stay focused. This gives you clarity and makes you
                        feel
                        in control of your day. </p>
                </li>
                <li>
                    <h3>Ask for help when needed</h3>
                    <p> Seek assistance from parents, teachers, guardians or peers to avoid overwhelming situations.
                    </p>
                </li>
            </ul>
            <ul>
                <li>
                    <h3>Follow a healthy diet</h3>
                    <p>Including nutritious food in your diet helps maintain energy and mood</p>
                </li>
                <li>
                    <h3>Exercise daily</h3>
                    <p>Engaging in physical activities keeps the brain fresh and active, this helps manage anxiety,
                        stress
                        and is an instant mood booster</p>
                </li>
            </ul>

        </div>
        <section class="video-section">
            <h2>Informative Videos</h2>
            <div class="video-container">
                <<iframe width="560" height="315" src="https://www.youtube.com/embed/wr4N-SdekqY?si=ezmhIlvSNoTpchnN"
                    frameborder="0" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1v9XeApSYNY?si=3wEpR8vUIJsgI7GE"
                        frameborder="0" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        <?php include '../../topicsfooter.php'; ?>
    </body>

    </html>