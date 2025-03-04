document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, {
        threshold: 0.5 // Adjust if needed to trigger the animation earlier or later
    });

    document.querySelectorAll('.section').forEach(section => {
        observer.observe(section);
    });
});