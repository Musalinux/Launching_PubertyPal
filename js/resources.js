function filterResources(selectedType) {
    document.querySelectorAll('.resource').forEach(item => {
        // Using a ternary operator here to determine display style. 
        item.style.display = (selectedType === 'all' || item.classList.contains(selectedType)) ? 'block' : 'none';
    });
}