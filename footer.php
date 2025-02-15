

<footer>
    <div class='logo-container'>
        <img src="/wp-content/uploads/2025/01/ThrillXlogo.png" alt="ThrillX Logo" />
        <div class='socials-container'>
            <a href="/">
                <img src='/wp-content/themes/thrillx/resources/icons/ig.svg' />
            </a>
            <a href="/">
                <img src='/wp-content/themes/thrillx/resources/icons/fb.svg' />
            </a>
            <a href="/">
                <img src='/wp-content/themes/thrillx/resources/icons/in.svg' />
            </a>
        </div>
    </div>
    <div class='options-container'>
        <a href="/">ThrillX</a>
        <a href="/">Services</a>
        <a href="/">About Us</a>
        <a href="/">Careers</a>
    </div>
    <div class='others-container'>
        <a href='/'>Others</a>
        <a href="/">Contact Us</a>
    </div>
</footer>
<!-- wp_footer(); is here to load all of the dynamic scripts generated by Wordpress near the end of the body and load the admin bar whenever the admin is logged in. -->
<? wp_footer();?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  effect: 'fade',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  watchSlidesProgress: true,

});

let elapsedTime = 0; // Tracks how much animation time has passed
let startTime = null; // Tracks when the animation started

// PAUSE BUTTON FUNCTIONALITY
document.getElementById('pause-button').onclick = function () {
  const swiperContainer = document.querySelector('.swiper');
  const activeBullet = document.querySelector('.swiper-pagination-bullet-active');
  const pauseButton = document.querySelector(".pause-button");
  const playButton = document.querySelector(".play-button");

  // Stop Swiper autoplay
  swiper.autoplay.stop();

  // Calculate and store elapsed time
  if (startTime === null) {
    startTime = Date.now(); // Start tracking time when paused for the first time
  } else {
    elapsedTime += Date.now() - startTime; // Accumulate time since last start
  }

  // Pause animation
  swiperContainer.classList.add('swiper-paused');
  if (activeBullet) {
    const progressBar = activeBullet.querySelector('::before');
    if (progressBar) {
      progressBar.style.animationPlayState = 'paused';
    }
  }

   // Toggle button visibility
   pauseButton.style.display = "none";
    playButton.style.display = "flex";
};

// PLAY BUTTON FUNCTIONALITY
document.getElementById('play-button').onclick = function () {
  const swiperContainer = document.querySelector('.swiper');
  const activeBullet = document.querySelector('.swiper-pagination-bullet-active');
  const pauseButton = document.querySelector(".pause-button");
  const playButton = document.querySelector(".play-button");

  // Resume Swiper autoplay
  swiper.autoplay.start();

  // Calculate remaining time for animation
  const totalDuration = 8000; // 8 seconds for the animation
  const remainingTime = totalDuration - elapsedTime;

  // Reset startTime for accurate tracking
  startTime = Date.now();

  // Resume animation
  swiperContainer.classList.remove('swiper-paused');
  if (activeBullet) {
    const progressBar = activeBullet.querySelector('::before');
    if (progressBar) {
      progressBar.style.animation = `slide-progress ${remainingTime}ms cubic-bezier(.3,0,.3,1) forwards`;
      progressBar.style.animationPlayState = 'running';
    }
  }

  playButton.style.display = "none";
  pauseButton.style.display = "flex";

};



// Get all buttons with the class 'primary-button-availability'
document.querySelectorAll('.primary-button-availability').forEach(button => {
    button.addEventListener('click', function () {
        // Get the content of the package
        const packageContent = this.closest('.package').querySelector('.package-content').innerHTML;
        
        // Open the modal
        const modal = document.getElementById('package-modal');
        const modalContent = document.getElementById('modal-content');
        
        // Open the dialog
        modal.showModal();

        // close the modal

      });
    });
    
    const closeModalButton = document.getElementById('close-modal-button')
    closeModalButton.addEventListener('click', ()=>{
      const modal = document.getElementById('package-modal');
      modal.close();
    })


openMenu = document.getElementById('menu-opener');
subMenu = document.getElementById('desktop-navigation-submenu');

openMenu.addEventListener('click', ()=>{
  subMenu.classList.toggle('is-menu-open')
})


openMobileMenu = document.getElementById('hamburger-menu');
body = document.getElementById('body');

body.classList.contains('admin-bar') ? body.classList.add('is-user-logged') : body.classList.remove('is-user-logged')

mobileNavigationSubMenu = document.getElementById('mobile-navigation-submenu');
openMobileMenu.addEventListener('click',()=>{
    body.classList.add('no-scroll')
    mobileNavigationSubMenu.classList.toggle('is-open')
})



accordionOpener = document.getElementById('accordion--option-opener');
accordionContent = document.getElementById('accordion--content');

closeMobileMenu = document.getElementById('close-sub-menu');
closeMobileMenu.addEventListener('click',()=>{
  body.classList.remove('no-scroll')
    mobileNavigationSubMenu.classList.toggle('is-open')

})

accordionOpener.addEventListener('click', ()=>{
  accordionContent.classList.toggle('is-open')
})



// Accordion for Capabilities Section
capabilitiesAccordionOpener = document.getElementById('capabilities-accordion-opener');
capabilitiesAccordionContent = document.getElementById('capabilities-accordion--content');

capabilitiesAccordionOpener.addEventListener('click',()=>{
  capabilitiesAccordionOpener.classList.toggle('is-rotated');
  capabilitiesAccordionContent.classList.toggle('is-open');
})


// Renaming the function to fadeInHandler
const fadeInHandler = (entries, fadeInObserver) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Add 'visible' class to the element when it comes into view
            entry.target.classList.add('visible');
            // Optional: stop observing after the element has become visible
            fadeInObserver.unobserve(entry.target);
        }
    });
};

// Create a new intersection observer for fade-in functionality
const fadeInObserver = new IntersectionObserver(fadeInHandler, {
    threshold: 0.2 // Trigger when 20% of the element is in view
});

// Select all elements with the 'fade-in' class and observe them
document.querySelectorAll('.fade-in').forEach(element => {
    fadeInObserver.observe(element);
});


</script>
</body>
</html>