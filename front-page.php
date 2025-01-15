<!-- This loads the header.php file at the root of the theme. By doing this all of the content of the header.php file will be load to this template and get all of the dynamic data. -->
<? get_header();?>

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide" style='background-image:url("/wp-content/themes/thrillx/resources/imgs/slide-one.png")'>
        <div class='swiper-slide-content'> 
            <h2>Experience local and reliable connectivity you can trust</h2>
            <p>Fast, reliable internet, phone, TV, and mobility for home or business. Enjoy local support in just 13 seconds—connectivity made easy.</p>
            <button class='secondary-button' >Sign-up Today</button>
        </div>
    </div>
    <div class="swiper-slide" style='background-image:url("/wp-content/themes/thrillx/resources/imgs/slide-two.jpeg")'>
        <div  class='swiper-slide-content'>
            <h2>Experience local and reliable connectivity you can trust</h2>
            <p>Fast, reliable internet, phone, TV, and mobility for home or business. Enjoy local support in just 13 seconds—connectivity made easy.</p>
            <button class='secondary-button' >Sign-up Today</button>
        </div>
    </div>
    <div class="swiper-slide" style='background-image:url("/wp-content/themes/thrillx/resources/imgs/slide-three.jpeg")'>
        <div  class='swiper-slide-content'>
            <h2>Experience local and reliable connectivity you can trust</h2>
            <p>Fast, reliable internet, phone, TV, and mobility for home or business. Enjoy local support in just 13 seconds—connectivity made easy.</p>
            <button class='secondary-button' >Sign-up Today</button>
        </div>
    </div>
    
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <div class='swiper-player-button'>
    <span class='pause-button'>Pause<button id='pause-button'><img src='/wp-content/themes/thrillx/resources/icons/pause.svg'/></button></span>
    <span class='play-button'>Resume<button id='play-button'><img src='/wp-content/themes/thrillx/resources/icons/play.svg'/></button></span>
  </div>

</div>



<div class="scroll-container">
  <div class="scroll-content">
    <!-- Text sections (scrollable) -->
    <div class="scroll-text-section" data-swap="image-1">
      <h2>At here, we always put you first</h2>
      <p>Our focus is on delivering seamless, secure, and customized connectivity, ensuring that every interaction is reliable and tailored to meet your unique needs.</p>
      <button class="primary-button scrolling-button">Sign-up Today</button>
    </div>
    <div class="scroll-text-section" data-swap="image-2">
      <h2>We don’t believe in bots; reach a live rep in 13 seconds</h2>
      <p>On average, it takes just 13 seconds to connect with a live, local Customer Service Representative. Our team is always ready to assist you, ensuring that your needs are met.</p>
      <button class="primary-button scrolling-button">Sign-up Today</button>
    </div>
    <div class="scroll-text-section" data-swap="image-3">
      <h2>Experience true value with transparent pricing</h2>
      <p>With us, what you see is what you get. We pride ourselves on transparency, ensuring you receive exactly what you pay for—no hidden fees, no surprises.</p>
      <button class="primary-button scrolling-button">Sign-up Today</button>
    </div>
    <div class="scroll-text-section" data-swap="image-4">
      <h2>We’re committed to our community</h2>
      <p>Being a local company means that you are one of us! We deeply value our roots and are dedicated to reinvesting in the community that sustains us. </p>
      <button class="primary-button scrolling-button">Sign-up Today</button>
    </div>
  </div>
  <!-- Image container (fixed) -->
  <div class="scroll-image-container">
    <img class="scroll-image" src="/wp-content/themes/thrillx/resources/imgs/support-slide-one.jpeg" data-id="image-1" alt="Image 1">
    <img class="scroll-image" src="/wp-content/themes/thrillx/resources/imgs/support-slide-two.jpeg" data-id="image-2" alt="Image 2">
    <img class="scroll-image" src="/wp-content/themes/thrillx/resources/imgs/support-slide-three.jpeg" data-id="image-3" alt="Image 3">
    <img class="scroll-image" src="/wp-content/themes/thrillx/resources/imgs/support-slide-four.jpeg" data-id="image-4" alt="Image 4">
  </div>

  <div class="pagination"> <!-- Pagination stays fixed -->
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
</div>


<div class="mobile-scroll-container">
    <div class='mobile-scroll-container__item'>
        <img src="/wp-content/themes/thrillx/resources/imgs/support-slide-one.jpeg" alt="">
        <h2>At here, we always put you first</h2>
        <p>Our focus is on delivering seamless, secure, and customized connectivity, ensuring that every interaction is reliable and tailored to meet your unique needs.</p>
        <button>Sign-up Today</button>
    </div>
    <div class='mobile-scroll-container__item'>
        <img src="/wp-content/themes/thrillx/resources/imgs/support-slide-two.jpeg" alt="">
        <h2>We don’t believe in bots; reach a live rep in 13 seconds</h2>
        <p>On average, it takes just 13 seconds to connect with a live, local Customer Service Representative. Our team is always ready to assist you, ensuring that your needs are met.</p>
        <button>Sign-up Today</button>
    </div>
    <div class='mobile-scroll-container__item'>
        <img src="/wp-content/themes/thrillx/resources/imgs/support-slide-three.jpeg" alt="">
        <h2>Experience true value with transparent pricing</h2>
        <p>With us, what you see is what you get. We pride ourselves on transparency, ensuring you receive exactly what you pay for—no hidden fees, no surprises.</p>
        <button>Sign-up Today</button>
    </div>
    <div class='mobile-scroll-container__item'>
        <img src="/wp-content/themes/thrillx/resources/imgs/support-slide-four.jpeg" alt="">
        <h2>We’re committed to our community</h2>
        <p>Being a local company means that you are one of us! We deeply value our roots and are dedicated to reinvesting in the community that sustains us. </p>
        <button>Sign-up Today</button>
    </div>
</div>





<section class='fibre-container'>
 <div class='fibre-container__home'>
    <div class='info'>
        <h2>Fibre to the home</h2>
        <p>With our fibre-to-the-home service, you can enjoy fast speeds without any shared connections. Experience uninterrupted, high-speed internet with no lag or downtime, ensuring a smooth and reliable online experience.</p>
        <button class='primary-button'>Upgrade to Fibre today</button>
    </div>
    <picture class='img'>
        <img src='http://thrillx-test.local/wp-content/uploads/2025/01/front-store-photo.webp' />
    </picture>
 </div>
 <div class='fibre-container__area' style='background-image:url("http://thrillx-test.local/wp-content/uploads/2025/01/house-background-scaled.webp"); background-position:center; background-size:cover'>
    <div class='content'>
        <h2>Check for Fibre in your area</h2>
        <p>Discover how our Fibre network can enhance your connectivity experience with clear and reliable service tailored to your needs.</p>
        <button class='primary-button desktop-button'>Check Availability</button>
        <button class='primary-button mobile-button'>Find fibre now!</button>
    </div>
 </div>
</section>

<section class="packages-section">
  <!-- First Div: Input Section -->
  <div class="packages-input">
    <h2 class="packages-title">Level up on your internet speed</h2>
    <p class="packages-description">
      Enter your postal code to find packages catered to you
    </p>
    <div class="input-group">
      <input 
        type="text" 
        id="postal-code" 
        placeholder="Enter postal code" 
        class="postal-code-input"
      />
      <button id="check-availability" class="secondary-button">
        Check Availability
      </button>
    </div>
    <p class="help-text">
      Not sure how much speed you need? 
      <a href="#" class="help-link">Check here</a>
    </p>
  </div>
    <div class="packages">
        <? get_template_part('template-parts/internet-packages'); ?>
    </div>
</section>

<dialog id="package-modal">
    <div class='package-modal-content'>
        <div>
            <h2>Discover internet packages</h2>
            <p>Enter your postal code below, and let us find the perfect internet plans available in your area. </p>
        </div>
        <div class="input-group-modal">
            <input 
                type="text" 
                id="postal-code-modal" 
                placeholder="Enter postal code" 
                class="postal-code-input"
            />
            <button id="check-availability-modal" class="primary-button">
                Check Availability
            </button>
        </div>

        <button id='close-modal-button'> <img src='/wp-content/themes/thrillx/resources/icons/close-modal-icon.svg' /></button>
    </div>
</dialog>




<section class='requirements-container'>
    <h2>
        Highly specialized team flexible to your unique needs
    </h2>
    <div class='requirements-container__tiles'>
        <div class='tile'>
            <div class='tile-img'>
                <img src='/wp-content/uploads/2025/01/ecommerce-marketing.png'/>
            </div>
            <div class='tile-heading'>
                <h3>Ecommerce Marketing</h3>
            </div>
            <div class='tile-list'>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Advertising Management</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>A+ Content Design</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Brand Store Development</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>SEO & Rank Optimization</p>
                </div>
            </div>
        </div>
        <div class='tile'>
            <div class='tile-img'>
                <img src='/wp-content/uploads/2025/01/inventory-management.png'/>
            </div>
            <div class='tile-heading'>
                <h3>Inventory Management</h3>
            </div>
            <div class='tile-list'>
            <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Nationwide Fulfillment</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Inventory Forecasting</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>In-stock Assurance</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Return Management</p>
                </div>
            </div>
        </div>
        <div class='tile'>
            <div class='tile-img'>
                <img src='/wp-content/uploads/2025/01/brand-protection.png'/>
            </div>
            <div class='tile-heading'>
                <h3>Brand Protection</h3>
            </div>
            <div class='tile-list'>
            <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>24/7 Customer Service</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Unauthorized Seller Removal</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Review Management</p>
                </div>
                <div>
                    <img src='/wp-content/themes/thrillx/resources/icons/Check.png' />
                    <p>Case Resolution</p>
                </div>
            </div>
        </div>
    </div>
    <button class='primary-button'>
        Sign-up Today
    </button>

</section>

<section class='capabilities-container'>
    <div class='capabilities-container__commitment'>
        <div class='capabilities-img'>
            <img src="/wp-content/uploads/2025/01/capability-image-one-scaled.webp" alt="" />
        </div>
        <div class='capabilities-content'>
            <div>
                <h2>Harness Amazon’s reach without the headache</h2>
                <p>We take care of the marketplace so you can spend more time on your core competency.</p>
                <button class='primary-button'>Sign-up Today</button>
            </div>
        </div>
    </div>
    <div class='capabilities-container__accordion'>
        <div class='capabilities-content'>
            <div>
                <h2>Keep full brand control while we do the heavy lifting</h2>
                <p>We take care of the marketplace so you can spend more time on your core competency.</p>
                <button class='primary-button'>Sign-up Today</button>
            </div>
        </div>
        <div class='capabilities-img'>
            <img src="/wp-content/uploads/2025/01/capability-image-two-scaled.webp" alt="" />
        </div>
    </div>
</section>


<!-- This loads the footer.php file at the root of the theme. By doing this all of the content of the footer.php file will be load to this template and get all of the dynamic data. -->
<? get_footer();?>