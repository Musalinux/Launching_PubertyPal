<!-- Accessibility Widget and Custom Language Selector -->

<style>
    /* High Contrast Mode Styles */
    .high-contrast,
    .high-contrast * {
        background-color: #1a1a1a !important;
        /* Dark grey background for less harsh contrast */
        color: #f1f1f1 !important;
        /* Soft white for text */
    }

    .high-contrast a,
    .high-contrast a:hover,
    .high-contrast a:visited {
        color: #ffcc00 !important;
        /* Gold color for links for better visibility */
    }

    .high-contrast button,
    .high-contrast input,
    .high-contrast textarea,
    .high-contrast select {
        background-color: #333 !important;
        color: #FFF !important;
        border: 1px solid #f1f1f1 !important;
        /* Ensure inputs are visible */
    }

    .high-contrast header,
    .high-contrast footer,
    .high-contrast nav,
    .high-contrast .navbar,
    .high-contrast .nav-links a,
    .high-contrast .navbar a {
        background-color: #2c2c2c !important;
        /* Slightly lighter grey for navigation elements */
        color: #FFF !important;
    }

    .high-contrast img {
        filter: grayscale(100%) contrast(130%);
        /* Greyscale images with slightly increased contrast */
    }

    /* Accessibility Button Styles */
    #accessibility-widget button {
        background-color: #4CAF50;
        /* Green background */
        color: black;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.2s, transform 0.2s;
    }

    #accessibility-widget button:hover {
        background-color: #367C36;
        /* Darker green on hover */
        transform: scale(1.05);
        /* Slight increase in size */
    }

    /* Accessibility Options Container */
    #accessibility-options {
        display: none;
        background: white;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Individual Option Button Styles */
    #accessibility-options button {
        margin: 5px;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: #f1f1f1;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    #accessibility-options button:hover {
        background-color: #e0e0e0;
    }

    html, body {
    margin: 0;
    padding: 0;
    height: 100%; /* Full height for the body to push the footer down */
    position: relative;
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%; /* Full width */
    padding: 20px;
    background-color: #f8f9fa; /* Light grey background */
    text-align: center;
    color: #6c757d; /* Grey text color */
    font-family: Arial, sans-serif;
    border-top: 1px solid #e9ecef; /* Light border for the top of the footer */
    box-sizing: border-box; /* Includes padding in the width */
}

/* Adjusts the bottom padding of the body to ensure content doesn't hide behind the footer */
body {
    padding-bottom: 60px; /* Adjust this value based on your footer's height */
}

</style>
<div id="accessibility-widget" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
    <button onclick="toggleAccessibilityMenu()"
        style="background-color: #4CAF50; color: white; border: none; border-radius: 10px; padding: 10px 20px; cursor: pointer; transition: background-color 0.3s;">
        <i class="fas fa-universal-access"></i> Accessibility Options
    </button>
    <div id="accessibility-options">
        <h4 style="margin-top: 0;">Accessibility Options</h4>
        <button onclick="increaseFontSize()">Increase Text</button>
        <button onclick="decreaseFontSize()">Decrease Text</button>
        <button onclick="toggleHighContrast()">High Contrast</button>
        <button onclick="resetAccessibility()">Reset</button>
        <div id="google_translate_element"></div> <!-- Google Translate Widget placeholder -->
    </div>
</div>

<!-- Basic Footer -->
<footer>
    <p>Copyright &copy; 2024 Puberty Pal. All rights reserved.</p>
    <p>Contact Us: <a href="mailto:ayesha.gaikwad@uni.strath.ac.uk">ayesha.gaikwad@uni.strath.ac.uk</a></p>
</footer>

<script src="access.js"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi,mr,gu,pa,bn,ml,te,ta',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>