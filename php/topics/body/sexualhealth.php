<?php
include '../../conn.php'; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../../resources/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../../css/home.css">
    <title>Parental relationships</title>
</head>

<body>
    <nav class="navbar">
        <a href="../../home.php" class="logo"><img src="../../../images/logopal.png" alt="Puberty Pal Logo"></a>
        <ul class="nav-links">
            <li>
                <a href="../../home.php">Home</a>
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
        <h1>Having "The Talk"</h1>
        <p>Navigating puberty can be a wild ride,
            but having a strong bond with our kids makes it easier and more fun.
            Open chats and a supportive vibes help girls handle the changes with confidence and style,
            turning this time into an awesome journey of growth and self-discovery.</p>

        <h2>Why is this important?</h2>
        <div class="physical-images-container">
            <img src="../../../images/learn2.jpg" alt="Physical Change 2">
        </div>
        <ul>
            <li>
                <h3>Empowering kids through knowledge</h3>
                <p>Understanding the changes their bodies
                    will undergo helps girls feel more in control and less anxious,
                    empowering them to embrace this phase confidently.</p>
            </li>
            <li>
                <h3>Open communication</h3>
                <p>It fosters a strong
                    foundation of trust and open dialogue between parents and daughters,
                    making it easier to discuss future sensitive topics.</p>
            </li>

            <li>
                <h3>Healthy development</h3>
                <p>Providing accurate information and support encourages
                    healthy physical and emotional development, helping girls navigate puberty smoothly and positively.
                </p>
            </li>
        </ul>
        <h2>How can we do it?</h2>
        <div class="physical-images-container">
            <img src="../../../images/learn2.jpg" alt="Physical Change 2">
        </div>
        <ul>
            <li>
                <h3>Keep it real</h3>
                <p>Set up a relaxed vibe where your daughter feels comfy asking anything, no matter how awkward. This
                    keeps the convo natural and builds trust for future talks.</p>
            </li>
            <li>
                <h3>Speak her langauge</h3>
                <p>Break it down in a way she gets, using simple, relatable terms to explain what's happening. This
                    makes the info easy to digest and way less intimidating</p>
            </li>
            <li>
                <h3>Reassure and Support</h3>
                <p>Let her know puberty is just part of the awesome journey of growing up. Reassure her that everyone
                    goes through it and you're there for any support she needs.</p>
            </li>
        </ul>

        <h2>Emotional Changes</h2>
        <div class="images-container">
            <img src="../../../images/emotions.jpg" alt="emotional Change 2">
        </div>
        </li>
        <ul>
            <li>
                <h3>Mood Swings and Emotional Variability</h3>
                <p>During puberty, girls might experience mood swings due to hormonal changes. This can lead to feelings
                    of sadness, irritability, or anxiety.</p>
            </li>
            <li>
                <h3>Body Image</h3>
                <p>Girls may become more conscious of their bodies and how they compare to their peers. This increased
                    awareness can sometimes lead to self-consciousness or concern about appearance.</p>
            </li>
        </ul>

        <h2>Social Impacts</h2>
        <div class="images-container">
            <img src="../../../images/friends.jpg" alt="Physical Change 2">
        </div>
        </li>
        <ul>
            <li>
                <h3>Social Circles</h3>
                <p>As girls go through puberty, their social relationships may change. They might seek more independence
                    and start to form new friendships or social circles.</p>
            </li>
            <li>
                <h3>Increased Independence</h3>
                <p>Puberty is a time when girls often explore their identity and personal interests. This increased
                    independence can be a positive step towards becoming more self-assured and confident.</p>
            </li>
        </ul>
    </div>
    <section class="video-section">
        <h2>Informative Videos</h2>
        <div class="video-container">
            <<iframe width="560" height="315" src="https://www.youtube.com/embed/HMRaun9yRWk" frameborder="0"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tRc4XZXYTgY" frameborder="0"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <?php include '../../topicsfooter.php'; ?>
</body>

</html>