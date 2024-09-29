document.addEventListener('DOMContentLoaded', function () {
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');
    const navbarHeight = document.getElementById('main-nav').offsetHeight; // Get the full height of the first nav

    window.addEventListener('scroll', function () {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolling down, hide half of the nav
            navbar.style.transform = `translateY(-${navbarHeight}px)`;
        } else {
            // Scrolling up, show the full nav
            navbar.style.transform = 'translateY(0)';
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For mobile or negative scrolling
    });
});
