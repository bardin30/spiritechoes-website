// Navigation System for Spirit Echoes Studio
// Handles switching between different page sections

// Content for each section
const sections = {
  home: `
    <section class="section" id="home">
      <div class="hero">
        <h2>Welcome to Spirit Echoes Studio</h2>
        <p>
          Creating vibrant acrylic paintings and soft pastels that capture the
          spirit within. Based in Smithville, Texas, I specialize in
          commissioned artwork that transforms your cherished memories into
          lasting treasures.
        </p>
        <p>
          Whether it's a beloved pet, a breathtaking landscape, or a family
          moment, I work with you to create original artwork that resonates with
          your story.
        </p>
      </div>

      <div class="featured-image">
        <img src="images/featured/placeholder.jpg" alt="Featured artwork by Melodie Spears Schmidt" />
        <p class="image-caption">Recent work - Available for viewing at Lost Pines Artisan Alliance Gallery</p>
      </div>

      <div class="content-box">
        <h3>Currently Featured At:</h3>
        <ul class="featured-list">
          <li>
            <a
              href="https://www.lostpinesartisansalliance.org"
              target="_blank"
              rel="noopener"
            >
              Lost Pines Artisan Alliance Gallery, Smithville
            </a>
          </li>
        </ul>
        <p style="margin-top: var(--spacing-md);">
          Commission inquiries welcome.
        </p>
      </div>
    </section>
    `,
  portfolio: `
    <section class="section" id="portfolio">
      <h2>Portfolio</h2>
      <div class="coming-soon">
        <p>Gallery coming soon.</p>
        <p>Check back for updates on new work and available pieces.</p>
      </div>
    </section>
    `,
  about: `
    <section class="section" id="about">
        <h2>About</h2>
        <div class="content-box">
            <p>
                Thank you for your interest in Spirit Echoes Studio. Although some may think
                the name is Native American, it simply refers to the ability to tap into the
                Creator within through artistic expression and echo that Spirit to others.
            </p>

            <p>
                Spirit Echoes started as a newsletter in Austin, Texas, founded in October 1991
                by Melodie Spears. The newsletter, established to promote emerging artists, quickly
                evolved into an art gallery in the luxurious lobby of the downtown Omni Hotel.
            </p>

            <p>
                A second location on Far West Blvd was opened in October 1999 and closed in
                December 2003 to enable Melodie to pursue her own creativity.
            </p>

            <p>
                Today, Spirit Echoes Studio focuses on creating custom commissioned artwork in
                acrylics and soft pastels from a home studio north of Smithville, Texas.
            </p>
        </div>
    </section>
    `,
  contact: `
        <section class="section" id="contact">
            <h2>Get In Touch</h2>
            <div class="content-box">
                <p style="text-align: center; margin-bottom: var(--spacing-lg);">
                    Interested in commissioned artwork? I'd love to hear from you.
                </p>
                <div style="text-align: center; font-size: var(--font-size-large); line-height: 2;">
                    <p><strong>Melodie Spears Schmidt</strong></p>
                    <p>Smithville, Texas</p>
                    <p style="margin-top: var(--spacing-md);">
                        <a href="mailto:melodie@spiritechoes.com">melodie@spiritechoes.com</a>
                    </p>
                </div>
            </div>
        </section>
    `,
};

// Function to show different sections on page.
function showSection(sectionName, event) {
  // Prevent default anchor behavior, jump down the page
  if (event) {
    event.preventDefault();
  }

  //Get the main content container
  const mainContent = document.getElementById('mainContent');

  //Check if the section exists before display
  if (sections[sectionName]) {
    //Replace the content
    mainContent.innerHTML = sections[sectionName];

    //Scroll to top smoothly
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  } else {
    // If section doesn't exist, show home
    mainContent.innerHTML = sections.home;
  }
}

// On page load, show the home section
document.addEventListener('DOMContentLoaded', function () {
  showSection('home');
});

// Mobile Hamburger Menu
document.addEventListener('DOMContentLoaded', function () {
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('navMenu');

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', function () {
      // Toggle active class on hamburger (animates to X)
      hamburger.classList.toggle('active');

      // Toggle active class on menu (shows/hides)
      navMenu.classList.toggle('active');
    });

    // Close menu when a link is clicked
    const navLinks = navMenu.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', function () {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
      });
    });
  }
});
