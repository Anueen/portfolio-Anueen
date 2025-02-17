// Select all sections and navigation links
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('header ul li a');

// Add scroll event to track the current section
window.addEventListener('scroll', function () {
    let current = '';

    // Loop through sections to find the current one
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;

        // Check if the section is currently in the viewport
        if (window.scrollY >= sectionTop - sectionHeight / 3) {
            current = section.getAttribute('id'); // Get the section's ID
        }
    });

    // Highlight the corresponding navigation link
    navLinks.forEach(link => {
        link.classList.remove('active'); // Remove 'active' from all links
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active'); // Add 'active' to the current link
        }
    });
});

// Sticky header functionality
window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
});


