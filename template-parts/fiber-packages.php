<? if(have_rows('fibre_packages', 'option')): ?>
        <? while (have_rows('fibre_packages', 'option')): the_row(); 
                $FIBRE_PACKAGE_BADGE = get_sub_field('fibre_package_badge'); 
                $FIBRE_PACKAGE_DISCOUNT = get_sub_field('fibre_package_discount');
                $FIBRE_PACKAGE_CURRENT_PRICE = get_sub_field('fibre_package_current_price');
                $FIBRE_PACKAGE_PREVIOUS_PRICE = get_sub_field('fibre_package_previous_price');
                $FIBRE_PACKAGE_INTERNET_SPEED = get_sub_field('fibre_package_internet_speed');
                $FIBRE_PACKAGE_CTA = get_sub_field('fibre_package_cta');
                ?>
            
            <div class='package'>
                <div class="badge"><?=$FIBRE_PACKAGE_BADGE; ?></div>
                <div class="package-title">
                    <h3><?=$FIBRE_PACKAGE_DISCOUNT; ?></h3>
                </div>
                <div class="package-content">
                    <p class='fibre-package-price-heading'>Starting at</p>
                    <div class='fibre-package-price'>
                        <p class='fibre-package-price-current'>$<?=$FIBRE_PACKAGE_CURRENT_PRICE;?>/mo<p>
                        <p class='fibre-package-price-previous'>$<?=$FIBRE_PACKAGE_PREVIOUS_PRICE;?>/mo</p>
                    </div>
                    <h4 class="package-speed"><?=$FIBRE_PACKAGE_INTERNET_SPEED; ?></h4>
                    <? if(have_rows('fibre_package_features')): ?>
                        <ul class="package-features">
                        <? while(have_rows('fibre_package_features')): the_row(); 
                                $FIBRE_PACKAGE_FEATURE = get_sub_field('fibre_package_feature'); ?>
                                <li><?=$FIBRE_PACKAGE_FEATURE; ?></li>
                            <? endwhile; ?>
                        </ul>
                        <? endif; ?> <!-- End check for internet_package_features -->
                        <div class="package-cta">
                            <button class="primary-button"><?=$FIBRE_PACKAGE_CTA; ?></button>
                        </div>
                    </div>
                </div>
        <? endwhile; ?> <!-- End internet_packages loop -->
<? endif; ?> <!-- End check for internet_packages -->