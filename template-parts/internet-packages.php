<? if(have_rows('internet_packages', 'option')): ?>
        <? while (have_rows('internet_packages', 'option')): the_row(); 
                $INTERNET_PACKAGE_BADGE = get_sub_field('internet_package_badge'); 
                $INTERNET_PACKAGE_DISCOUNT = get_sub_field('internet_package_discount');
                $INTERNET_PACKAGE_SPEED = get_sub_field('internet_package_speed');
                $INTERNET_PACKAGE_CTA = get_sub_field('internet_package_cta');
                ?>
            
            <div class='package'>
                <div class="badge"><?=$INTERNET_PACKAGE_BADGE; ?></div>
                <div class="package-title">
                    <h3><?=$INTERNET_PACKAGE_DISCOUNT; ?></h3>
                </div>
                <div class="package-content">
                    <h4 class="package-speed"><?=$INTERNET_PACKAGE_SPEED; ?></h4>
                    <? if(have_rows('internet_package_features')): ?>
                        <ul class="package-features">
                        <? while(have_rows('internet_package_features')): the_row(); 
                                $INTERNET_PACKAGE_FEATURE = get_sub_field('internet_package_feature'); ?>
                                <li><?=$INTERNET_PACKAGE_FEATURE; ?></li>
                            <? endwhile; ?>
                        </ul>
                        <? endif; ?> <!-- End check for internet_package_features -->
                        <div class="package-cta">
                            <button class="primary-button primary-button-availability"><?=$INTERNET_PACKAGE_CTA; ?></button>
                        </div>
                    </div>
                </div>
        <? endwhile; ?> <!-- End internet_packages loop -->
<? endif; ?> <!-- End check for internet_packages -->
