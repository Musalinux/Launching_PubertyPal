<?php
include 'conn.php'; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../resources/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>For the parents</title>
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

    <div class="content">
        <h1>Understanding your child</h1>
        <p>Understanding your child as a parent involves actively listening to their thoughts and feelings,
            recognizing their unique personality and needs, and showing empathy and patience as they grow and develop. 
            It's important to be present and engaged in their lives, offering consistent support and guidance while respecting their individuality. 
            Building a strong, trusting relationship through open communication helps foster a secure and nurturing environment for your child.</p>

        <h2>Communication</h2>
        <div class="physical-images-container">
            <img src="../images/parents1.jpg" alt="Physical Change 2">
        </div>
        <ul>
            <li>
                <h3>Open Communication</h3>
                <p> Encourage open and honest conversations about the changes they are experiencing.
                     Be approachable and let them know they can ask any questions without fear of judgment.</p>
            </li>
            <li>
                <h3>Use Correct Terminology</h3>
                <p>Use proper terms for body parts and functions. This helps normalize the changes and educates them correctly.</p>
            </li>
            <li>
                <h3>Share Personal Experiences</h3>
                <p> If appropriate, share your own experiences with puberty. This can make them feel less alone and more understood.</p>
            </li>
        </ul>

        <h2>Education</h2>
        <div class="images-container">
            <img src="../images/parents2.jpg" alt="emotional Change 2">
        </div>
        </li>
        <ul>
            <li>
                <h3>Education</h3>
                <p>Ensure your child has access to reliable and age-appropriate information about puberty. Use books, educational websites, or consult with a healthcare professional if needed. </p>
            </li>
            <li>
                <h3>Discuss emotional changes</h3>
                <p>Help your child understand that experiencing mood swings, irritability, and heightened emotional sensitivity is a normal part of puberty due to hormonal changes. Encourage them to talk about their feelings and assure them that it’s okay to feel overwhelmed sometimes. 
                    Teach coping strategies, such as deep breathing, journaling, or engaging in physical activities to manage these emotions.</p>
            </li>
            <li>
                <h3>Sex education</h3>
                <p>Educate your child about sexual health, including the physical and emotional aspects of sex, to ensure they are informed and responsible. 
                    Discuss the importance of consent and respecting personal boundaries, emphasizing that mutual respect and communication are key in any relationship.
                     Provide accurate information and create a safe space for them to ask questions and express their concerns.</p>
            </li>
        </ul>

        <h2>Support & Guidance</h2>
        <div class="images-container">
            <img src="../images/parents3.jpg" alt="Physical Change 2">
        </div>
        </li>
        <ul>
            <li>
                <h3>Nurturing Independence and Well-being</h3>
                <p>Recognize that puberty is a confusing and stressful time, and respond with empathy and patience. 
                    Respect your child's need for privacy and give them space to navigate these changes. Encourage healthy 
                    habits like a balanced diet, regular exercise, and sufficient sleep to help them manage both physical and emotional changes</p>
            </li>
            <li>
                <h3>Navigating Physical and Social Changes</h3>
                <p>Prepare your child for physical changes like growth spurts, acne, menstruation, and voice changes by providing necessary supplies and information. Model healthy behaviors and positive self-care routines, as children often emulate their parents' attitudes.
                     Guide them in navigating social media and peer pressure, discussing the impact of media on body image and self-esteem.</p>
            </li>
        </ul>
    </div>
    <section class="video-section">
        <h2>Informative Videos</h2>
        <div class="video-container">
            <<iframe width="560" height="315" src="https://www.youtube.com/embed/iOYvUCQbd3k?si=xx7y2dpBfCfdm37j" frameborder="0"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bcTNzXhJsXg?si=WlOjpepppwX4726I" frameborder="0"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>