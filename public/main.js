document.addEventListener('alpine:init', () => {
    Alpine.data('topBtn', () => ({
        scrolltoTop() {
            window.pageYOffset = 0;
        }
    }));
});



