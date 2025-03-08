import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    document.documentElement.classList.remove("dark"); // Force light mode
    localStorage.removeItem("theme"); // Prevent theme switching

});