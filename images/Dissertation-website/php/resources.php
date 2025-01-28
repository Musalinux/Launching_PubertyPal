<?php
include 'conn.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../../resources/favicon.png" />
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/resources.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Resources Hub</title>
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
    <header>
        <h1>Resources Hub</h1>
        <div class="filter">
            <button class="filter-button" onclick="filterResources('all')">All</button>
            <button class="filter-button" onclick="filterResources('video')">Videos</button>
            <button class="filter-button" onclick="filterResources('article')">Articles</button>
        </div>
    </header>

    <div class="resource-container">
        <?php
        $resources = [
            // Articles Links
            [
                "title" => "Puberty for Girls",
                "type" => "article",
                "url" => "https://www.healthdirect.gov.au/puberty-for-girls",
                "image" => "../images/pubgirl.jpg",
                "summary" => "The HealthDirect page on Puberty for girls
                 offers an overview of the physical and emotional changes that occur during puberty, 
                 including the onset of menstruation, breast development, and hormonal shifts,
                  along with tips for managing these changes."
            ],
            [
                "title" => "Starting your periods",
                "type" => "article",
                "url" => "https://www.nhs.uk/conditions/periods/starting-periods/",
                "image" => "../images/startp.webp",
                "summary" => "The NHS page on Starting
             periods provides information about what 
             to expect when a girl begins menstruating, including 
             typical age ranges, common symptoms, and advice on managing periods.
              It aims to help young people understand and navigate their first periods with confidence"
            ],
            [
                "title" => "Social media",
                "type" => "article",
                "url" => "https://www.apa.org/topics/social-media-internet/health-advisory-adolescent-social-media-use",
                "image" => "../images/social.jpg",
                "summary" => "The APA health advisory on adolescent social media use outlines the potential psychological and developmental impacts of social media on teenagers, 
            emphasizing concerns such as increased risk of anxiety, depression, and disrupted sleep,
             while also offering guidance for healthy usage."
            ],
            [
                "title" => "Menstrual Hygiene",
                "type" => "article",
                "url" => "https://shorturl.at/amsPf",
                "image" => "../images/menhyg.jpg",
                "summary" => "The CDC page on menstrual hygiene provides guidance on maintaining proper menstrual hygiene to prevent infections and ensure comfort, including recommendations for changing menstrual products regularly and practicing good genital hygiene."
            ],
            [
                "title" => "Women in Sports",
                "type" => "article",
                "url" => "https://womeninsport.org/news/understanding-puberty-and-menstruation-and-its-impact-on-girls-and-sport/?gad_source=1&gclid=EAIaIQobChMIrMPn0KzChwMV45RQBh0fIAd9EAAYASAAEgJIyfD_BwE",
                "image" => "../images/sports.jpg",
                "summary" => "The Women in Sport article explores how puberty and menstruation affect girls' participation in sports, highlighting physical and emotional changes 
            that can impact performance and motivation, and advocating for supportive strategies to help girls stay active and engaged."
            ],
            [
                "title" => "Mental health of adolescents",
                "type" => "article",
                "url" => "https://www.who.int/news-room/fact-sheets/detail/adolescent-mental-health",
                "image" => "../images/mentalhealth.jpg",
                "summary" => "The WHO fact sheet on adolescent mental health highlights the importance of addressing mental health issues in adolescents, emphasizing the impact of factors like social, emotional, and economic challenges,
             and the need for comprehensive support and intervention strategies."
            ],
            [
                "title" => "Reproductive Health",
                "type" => "article",
                "url" => "https://www.niehs.nih.gov/health/topics/conditions/repro-health",
                "image" => "../images/rephealth.jpg",
                "summary" => "This website provides comprehensive information on reproductive health, 
                 ocusing on the impact of environmental factors on fertility and pregnancy outcomes. 
                 It offers resources and research updates for better understanding and managing reproductive health issues."
            ],
            [
                "title" => "Yoga for adolescents",
                "type" => "article",
                "url" => "https://yoga.ayush.gov.in/WHOCC/Books4/Yoga%20for%20Adolescents.pdf",
                "image" => "../images/yoga.jpg",
                "summary" => "This article talks about the benefits of Yoga in adolescents, tailored for teenagers, 
                highlighting the benefits for physical and mental health during adolescence. 
                It includes detailed instructions and illustrations for various yoga postures and techniques."
            ],
            [
                "title" => "Adolescents safety and protection",
                "type" => "article",
                "url" => "https://www.unicef.org/adolescence/protection",
                "image" => "../images/abuse.jpg",
                "summary" => "UNICEF's page on adolescent protection focuses on safeguarding the rights
                 and well-being of teenagers by addressing issues such as violence, exploitation, and abuse. 
                It emphasizes the importance of creating safe environments and providing 
                supportive services to help adolescents thrive."
            ],

            // Video links 
        
            ["title" => "social media among adolescents", "type" => "video", "url" => "https://www.youtube.com/embed/Z1BpYDkGoAs?si=t5UgeXIW5YKE24lf", "summary" => "How social media influences the mental & behavioral health of children between ages 13 to 17"],
            ["title" => "Self image", "type" => "video", "url" => "https://www.youtube.com/embed/C9N6k3nfwao?si=IsuZR3dGYRu_9nj_", "summary" => "Self Image and Social Media"],
            ["title" => "Puberty Sessions", "type" => "video", "url" => "https://www.youtube.com/embed/l6evDPsop28?si=pHEuUkpjj3Ii_686", "summary" => "Basics and more"],
            ["title" => "Parent's Guide to Adolescence", "type" => "video", "url" => "https://www.youtube.com/embed/HMRaun9yRWk", "summary" => "A video guide for parents dealing with adolescent children."],
            ["title" => "Mental Health", "type" => "video", "url" => "https://www.youtube.com/embed/tRc4XZXYTgY", "summary" => "Youth voices on depression"],
            ["title" => "Sexual Health", "type" => "video", "url" => "https://www.youtube.com/embed/nHIy04e7Y50?si=Aw5caMlk7BDVn0mS", "summary" => "Sexual and reproductive health: achieveing universal access."],
            ["title" => "Sexual reprodcutive health", "type" => "video", "url" => "https://www.youtube.com/embed/tOHpsOI02mc?si=okgs-91P4ACm4onw", "summary" => "Sexual health: Our rights "],
            ["title" => "Good touch/bad touch", "type" => "video", "url" => "https://www.youtube.com/embed/zJdzC1AqpA0?si=Tkc_-gNT5wWXqC0S", "summary" => "Learn about good and bad touch"],
            ["title" => "Choosing Period Products That Are Right for You", "type" => "video", "url" => "https://www.youtube.com/embed/UfK17D0eX5I?si=5g76S0eQcEnDtR-H", "summary" => "Discover the different feminine products available today"]
        ];

        foreach ($resources as $item) {
            echo '<div class="resource ' . htmlspecialchars($item['type']) . '">';

            if ($item['type'] === 'video') {
                // iframe for videos
                echo sprintf(
                    '<iframe src="%s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                    htmlspecialchars($item['url'])
                );
            } else {
                // Display the image for articles
                echo sprintf(
                    '<img src="%s" alt="Image for %s">',
                    htmlspecialchars($item['image']),
                    htmlspecialchars($item['title'])
                );
            }

            // Title and summary
            echo sprintf(
                '<h3><a target="_blank" rel="noopener noreferrer" href="%s">%s</a></h3>',
                htmlspecialchars($item['url']),
                htmlspecialchars($item['title'])
            );
            echo sprintf('<p>%s</p>', htmlspecialchars($item['summary']));

            echo '</div>'; 
        }
        ?>
    </div>

    <script src="../js/resources.js"></script>
    <?php include 'footer.php'; ?>
</body>

</html>