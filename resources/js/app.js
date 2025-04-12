import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    document.documentElement.classList.remove("dark"); // Force light mode
    localStorage.removeItem("theme"); // Prevent theme switching

});


document.addEventListener("DOMContentLoaded", function () {
    const isHomePage = window.location.pathname === '/';

    // Scrollspy Configuration
    const sections = document.querySelectorAll(".scrollspy");
    const navLinks = document.querySelectorAll(".nav-link, .mobile-nav-link");

    // Handle Navigation Clicks
    function handleNavigationClick(e) {
        const href = this.getAttribute('href');
        const targetSection = href.split('#')[1];

        if (!isHomePage) {
            e.preventDefault();
            // Store target section and navigate home
            sessionStorage.setItem('scrollTarget', targetSection);
            window.location.href = `${window.location.origin}/`;
            return;
        }

        if (href.startsWith('#')) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
                history.pushState(null, null, href);
            }
        }
    }

    // Update Active Links
    function updateActiveLinks() {
        if (!isHomePage) return;

        const scrollPos = window.scrollY + 100;

        sections.forEach(section => {
            if (scrollPos >= section.offsetTop &&
                scrollPos < section.offsetTop + section.offsetHeight) {

                navLinks.forEach(link => {
                    const isMobile = link.classList.contains('mobile-nav-link');
                    const activeClass = isMobile ? 'mobile-active' : 'active';

                    link.classList.remove('active', 'mobile-active');
                    if (link.hash === `#${section.id}`) {
                        link.classList.add(activeClass);
                    }
                });
            }
        });
    }

    // Handle Initial Page Load with Hash
    function handleInitialHash() {
        // Home page scroll handler
        if (isHomePage) {
            const scrollTarget = sessionStorage.getItem('scrollTarget');
            if (scrollTarget) {
                sessionStorage.removeItem('scrollTarget');
                const targetSection = document.getElementById(scrollTarget);
                if (targetSection) {
                    // Wait for page to fully load
                    window.addEventListener('load', () => {
                        setTimeout(() => {
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }, 100); // Adjust delay as needed
                    });
                }
            }
        }
    }

    // Event Listeners
    navLinks.forEach(link => {
        link.removeEventListener('click', handleNavigationClick);
        link.addEventListener('click', handleNavigationClick);
    });

    window.addEventListener('scroll', updateActiveLinks);
    window.addEventListener('load', handleInitialHash);

    // Initialize
    if (isHomePage) {
        updateActiveLinks();
        handleInitialHash();
    }
});