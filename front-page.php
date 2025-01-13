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


<!-- This loads the footer.php file at the root of the theme. By doing this all of the content of the footer.php file will be load to this template and get all of the dynamic data. -->
<? get_footer();?>