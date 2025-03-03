document.addEventListener('DOMContentLoaded', () => {
    const stages = document.querySelectorAll('.stage');

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    function revealOnScroll() {
        stages.forEach(stage => {
            if (isInViewport(stage)) {
                stage.classList.add('visible'); 
                applyStyles(); 
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); 
    applyStyles(); 
});
