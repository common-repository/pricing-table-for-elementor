<div class="wppt-whole">
    <?php if( isset($settings['heading_title']) && trim($settings['heading_title']) != '' ){ ?>
        <div class="wppt-type">
            <p><?php echo esc_html($settings['heading_title']); ?></p>
        </div>
    <?php } ?>
    <div class="wppt-plan">

        <div class="wppt-header">
            
            <span class="wbpt-main-pricing">
                <?php
                    if( isset($settings['pricing_currency']) && trim($settings['pricing_currency']) != '' ){
                        $pricing_currency_opening_tag = '<span class="wbpt-pricing-currency">';
                        $pricing_currency_closing_tag = '</span>';
                        switch ($settings['currency_vertical_position']) {
                            case 'superscript':
                                    $pricing_currency_opening_tag = '<sup class="wbpt-pricing-currency wppt-pricing-currency-sup">';
                                    $pricing_currency_closing_tag = '</sup>';
                                break;
                            case 'subscript':
                                    $pricing_currency_opening_tag = '<sub class="wbpt-pricing-currency wppt-pricing-currency-sub">';
                                    $pricing_currency_closing_tag = '</sub>';
                                break;
                            default:
                                    $pricing_currency_opening_tag = '<span class="wbpt-pricing-currency wppt-pricing-currency-default">';
                                    $pricing_currency_closing_tag = '</span>';
                                break;
                        }
                        echo $pricing_currency_opening_tag;
                            switch ($settings['pricing_currency']) {
                                case 'custom':
                                        echo esc_html($settings['custom_currency']);
                                    break;
                                case 'usd':
                                        echo esc_html('$');
                                    break;
                                case 'euro':
                                        echo esc_html('€');
                                    break;
                                case 'baht':
                                        echo esc_html('฿');
                                    break;
                                case 'franc':
                                        echo esc_html('₣');
                                    break;
                                case 'guilder':
                                        echo esc_html('ƒ');
                                    break;
                                case 'krona':
                                        echo esc_html('kr');
                                    break;
                                case 'lira':
                                        echo esc_html('₤');
                                    break;
                                case 'peseta':
                                        echo esc_html('₧');
                                    break;
                                case 'peso':
                                        echo esc_html('₱');
                                    break;
                                case 'pound-sterling':
                                        echo esc_html('£');
                                    break;
                                case 'real':
                                        echo esc_html('R$');
                                    break;
                                case 'ruble':
                                        echo esc_html('₽');
                                    break;
                                case 'rupee':
                                        echo esc_html('₨');
                                    break;
                                case 'indian-rupee':
                                        echo esc_html('₹');
                                    break;
                                case 'shekel':
                                        echo esc_html('₪');
                                    break;
                                case 'yen':
                                        echo esc_html('¥');
                                    break;
                                case 'won':
                                        echo esc_html('₩');
                                    break;
                                case 'bdt':
                                        echo esc_html('৳');
                                    break;
                                default:
                                    # code...
                                    break;
                            }
                        echo $pricing_currency_closing_tag;
                    }
                    if( isset($settings['main_price']) ){
                        echo '<span class="wppt-main-price-text">'.esc_html($settings['main_price']).'</span>';
                    }
                ?>
            </span>
            <?php
                if( isset($settings['positioning_price']) ){
                    $positional_price_opening_tag = '<sup class="wbpt-positional-price">';
                    $positional_price_closing_tag = '</sup>';
                    switch ($settings['positional_price_vertical_position']) {
                        case 'superscript':
                                $positional_price_opening_tag = '<sup class="wbpt-positional-price wppt-positional-price-sup">';
                                $positional_price_closing_tag = '</sup>';
                            break;
                        case 'subscript':
                                $positional_price_opening_tag = '<sub class="wbpt-positional-price wppt-positional-price-sub">';
                                $positional_price_closing_tag = '</sub>';
                            break;
                        
                        default:
                                $positional_price_opening_tag = '<sub class="wbpt-positional-price wppt-positional-price-sub">';
                                $positional_price_closing_tag = '</sub>';
                            break;
                    }
                    echo $positional_price_opening_tag.$settings['positioning_price'].$positional_price_closing_tag;
                }
            ?>
            <?php if( isset($settings['pricing_associate_text']) && trim($settings['pricing_associate_text']) ){ ?>
                <p class="wppt-pricing-helper-text"><?php echo esc_html($settings['pricing_associate_text']); ?></p>
            <?php } ?>
        </div>
        <?php if( $settings['pricing_feature_items'] ){ ?>
            <div class="wppt-content">
                <ul>
                    <?php
                        foreach ( $settings['pricing_feature_items'] as $item ) {
                            $title = ( isset($item['feature_item_name']) && trim($item['feature_item_name']) != '' ) ? $item['feature_item_name'] : '';
                    ?>
                            <li><?php echo esc_html($title); ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    
        <?php
            if( isset($settings['pricing_footer_link']) && !empty($settings['pricing_footer_link']) ){
                $target = $settings['pricing_footer_link']['is_external'] ? ' target="_blank"' : '';
                $nofollow = $settings['pricing_footer_link']['nofollow'] ? ' rel="nofollow"' : '';
                $url = $settings['pricing_footer_link']['url'] ? $settings['pricing_footer_link']['url'] : '';
            ?>
            <div class="wppt-bottom ">
                <a href="<?php echo esc_url($url); ?>" class="wppt-footer-btn" <?php echo $target.$nofollow; ?>>
                    <?php echo esc_html($settings['pricing_footer_link_text']); ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>