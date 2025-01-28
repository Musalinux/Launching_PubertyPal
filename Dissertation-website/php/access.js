document.addEventListener("DOMContentLoaded", function () {
    applyStyles();
});

function toggleAccessibilityMenu() {
    const options = document.getElementById('accessibility-options');
    options.style.display = (options.style.display === 'block') ? 'none' : 'block';
}

function increaseFontSize() {
    let fontSize = parseInt(localStorage.getItem('fontSize') || 100);
    fontSize += 10;
    localStorage.setItem('fontSize', fontSize.toString());
    applyStyles();
}

function decreaseFontSize() {
    let fontSize = parseInt(localStorage.getItem('fontSize') || 100);
    fontSize = Math.max(90, fontSize - 10);
    localStorage.setItem('fontSize', fontSize.toString());
    applyStyles();
}

function toggleHighContrast() {
    let highContrast = localStorage.getItem('highContrast') === 'true';
    localStorage.setItem('highContrast', (!highContrast).toString());
    applyStyles();
}

function resetAccessibility() {
    localStorage.removeItem('fontSize');
    localStorage.removeItem('highContrast');
    applyStyles();
}

function applyStyles() {
    document.documentElement.style.fontSize = (parseInt(localStorage.getItem('fontSize') || 100)) + '%';
    if (localStorage.getItem('highContrast') === 'true') {
        document.body.classList.add('high-contrast');
    } else {
        document.body.classList.remove('high-contrast');
    }
}