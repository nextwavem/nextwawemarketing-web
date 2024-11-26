let lastScrollTop = 0; // Initialize last scroll position

    window.addEventListener('scroll', function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // Check if user is scrolling down
        if (currentScroll > lastScrollTop) {
            // When scrolling down, hide the header
            document.querySelector('header').style.top = '-100px'; // Move header up by 100px
        } else {
            // When scrolling up, show the header
            document.querySelector('header').style.top = '0'; // Move header back to its original position
        }
        // Update the last scroll position
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Prevent scrolling above the top
    });
    