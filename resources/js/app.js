import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    document.documentElement.classList.remove("dark"); // Force light mode
    localStorage.removeItem("theme"); // Prevent theme switching

});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });

            // Close mobile menu if open
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenuButton.click();
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".scrollspy");
    const navLinks = document.querySelectorAll(".nav-link, .mobile-nav-link"); // Add mobile menu class

    function onScroll() {
        let scrollPos = window.scrollY + 100; // adjust for navbar height

        sections.forEach(section => {
            if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                navLinks.forEach(link => {
                    const targetClass = link.classList.contains('mobile-nav-link') ?
                        'mobile-active' : 'active'; // Different active classes
                    link.classList.remove("active", "mobile-active");

                    if (link.getAttribute("href") === `#${section.id}`) {
                        link.classList.add(targetClass);
                    }
                });
            }
        });
    }

    // Smooth scroll for both menus
    document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    window.addEventListener("scroll", onScroll);
});
