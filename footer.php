

<footer>
    <div class='logo-container'>
        <img src="http://thrillx-test.local/wp-content/uploads/2025/01/ThrillXlogo.png" alt="ThrillX Logo" />
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

  console.log("Swiper autoplay and animation paused.");
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

  console.log("Swiper autoplay and animation resumed.");
};




</script>
</body>
</html>