<? if(have_rows('non_fibre_packages', 'option')): ?>
        <? while (have_rows('non_fibre_packages', 'option')): the_row(); 
                $NON_FIBRE_PACKAGE_BADGE = get_sub_field('non_fibre_package_badge'); 
                $NON_FIBRE_PACKAGE_HEADING = get_sub_field('non_fibre_package_heading');
                $NON_FIBRE_PACKAGE_SUBHEADING = get_sub_field('non_fibre_package_subheading');
                $NON_FIBRE_PACKAGE_STARTING_PRICE = get_sub_field('non_fibre_package_starting_price');
                $NON_FIBRE_PACKAGE_CTA = get_sub_field('non_fibre_package_cta');
                ?>
            
            <div class='package'>
                <div class="badge"><?=$NON_FIBRE_PACKAGE_BADGE; ?></div>
                <div class="package-title">
                    <p class='non-fibre-package-heading'><?=$NON_FIBRE_PACKAGE_HEADING; ?></p>
                    <p class='non-fibre-package-subheading'><?=$NON_FIBRE_PACKAGE_SUBHEADING; ?></p>
                </div>
                <div class="package-content">
                    <p class='non-fibre-package-price-heading'>Starting at</p>
                    <p class='non-fibre-package-price-current'><?=$NON_FIBRE_PACKAGE_STARTING_PRICE;?>/mo<p>
                    <? if(have_rows('non_fibre_package_features')): ?>
                        <ul class="package-features">
                        <? while(have_rows('non_fibre_package_features')): the_row(); 
                                $NON_FIBRE_PACKAGE_FEATURE = get_sub_field('non_fibre_package_feature'); ?>
                                <li><?=$NON_FIBRE_PACKAGE_FEATURE; ?></li>
                            <? endwhile; ?>
                        </ul>
                        <? endif; ?> <!-- End check for internet_package_features -->
                        <div class="package-cta">
                            <button class="primary-button"><?=$NON_FIBRE_PACKAGE_CTA; ?></button>
                        </div>
                    </div>
                </div>
        <? endwhile; ?> <!-- End internet_packages loop -->
<? endif; ?> <!-- End check for internet_packages -->