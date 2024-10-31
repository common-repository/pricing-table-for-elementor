<?php
namespace WB_PT\PRICING_TABLE;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
/**
 * Elementor Pricing Table Widget.
 *
 * Main widget that create the Pricing Table widget
 *
 * @since 1.0.0
*/
class WB_PT_WIDGET extends \Elementor\Widget_Base
{

	/**
	 * Get widget name
	 *
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'wb-pricing-table';
	}

	/**
	 * Get widget title
	 *
	 * Retrieve the widget title.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html( 'WB Pricing Table', 'pricing-table-for-elementor' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-price-table';
	}

	/**
	 * Retrieve the widget category.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_categories() {
		return [ 'web-builder-element' ];
	}

	/**
	 * Retrieve the widget category.
	 *
	 * @since 1.1.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'template',
			[
				'label' => esc_html( 'Choose Template', 'pricing-table-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'template_style',
			[
				'label' => esc_html__( 'Template Style', 'pricing-table-for-elementor' ),
				'placeholder' => esc_html__( 'Choose Template from Here', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'basic',
				'label_block'	=>	false,
				'separator'	=>	'before',
				'options' => [
					'basic'  => esc_html__( 'Basic', 'pricing-table-for-elementor' ),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'heading',
			[
				'label' => esc_html( 'Header', 'pricing-table-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'heading_title',
			[
				'label' => esc_html__( 'Heading Text', 'pricing-table-for-elementor' ),
				// 'placeholder' => esc_html__( 'Choose Template from Here', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=>	false,
				'separator'	=>	'before',
				'default' => esc_html__('Standard', 'pricing-table-for-elementor'),
			]
		);

		$this->add_control(
			'pro_url_one',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'placeholder' => esc_html__( 'Choose Categories to Include', 'wpce' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'label_block' => false,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'pricing',
			[
				'label' => esc_html( 'Price', 'pricing-table-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'pricing_currency',
			[
				'label' => esc_html__( 'Currency', 'pricing-table-for-elementor' ),
				// 'placeholder' => esc_html__( 'Choose Template from Here', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'label_block'	=>	false,
				'separator'	=>	'before',
				'default' => 'usd',
				'options' => [
					'none'  => esc_html__( 'None', 'pricing-table-for-elementor' ),
					'usd'  => esc_html__( '$ USD', 'pricing-table-for-elementor' ),
					'euro'  => esc_html__( '€ Euro', 'pricing-table-for-elementor' ),
					'baht'  => esc_html__( '฿ Baht', 'pricing-table-for-elementor' ),
					'franc'  => esc_html__( '₣ Franc', 'pricing-table-for-elementor' ),
					'guilder'  => esc_html__( 'ƒ Guilder', 'pricing-table-for-elementor' ),
					'krona'  => esc_html__( 'kr Krona', 'pricing-table-for-elementor' ),
					'lira'  => esc_html__( '₤ Lira', 'pricing-table-for-elementor' ),
					'peseta'  => esc_html__( '₧ Peseta', 'pricing-table-for-elementor' ),
					'peso'  => esc_html__( '₱ Peso', 'pricing-table-for-elementor' ),
					'pound-sterling'  => esc_html__( '£ Pound Sterling', 'pricing-table-for-elementor' ),
					'real'  => esc_html__( 'R$ Real', 'pricing-table-for-elementor' ),
					'ruble'  => esc_html__( '₽ Ruble', 'pricing-table-for-elementor' ),
					'rupee'  => esc_html__( '₨ Rupee', 'pricing-table-for-elementor' ),
					'indian-rupee'  => esc_html__( '₹ Rupee (Indian)', 'pricing-table-for-elementor' ),
					'shekel'  => esc_html__( '₪ Shekel', 'pricing-table-for-elementor' ),
					'yen'  => esc_html__( '¥ Yen/Yuan', 'pricing-table-for-elementor' ),
					'won'  => esc_html__( '₩ Won', 'pricing-table-for-elementor' ),
					'bdt'  => esc_html__( '৳ BD Taka', 'pricing-table-for-elementor' ),
					'custom'  => esc_html__( 'Custom', 'pricing-table-for-elementor' ),
				],
			]
		);

		$this->add_control(
			'custom_currency',
			[
				'label' => esc_html__( 'Custom Symbol', 'pricing-table-for-elementor' ),
				// 'placeholder' => esc_html__( 'Choose Template from Here', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=>	false,
				'separator'	=>	'before',
				// 'default' => esc_html__('Standard', 'pricing-table-for-elementor'),
				'condition' => [
					'pricing_currency'	=>	'custom'
				],
			]
		);

		$this->add_control(
			'currency_vertical_position',
			[
				'label' => esc_html__( 'Currency Vertical Position', 'pricing-table-for-elementor' ),
				'description' => esc_html__( 'Select the postion of the currency whether it is placed top, bottom or default positon relative to the main price', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'default',
				'label_block'	=>	true,
				'separator'	=>	'before',
				'options' => [
					'default'  => esc_html__( 'Default', 'pricing-table-for-elementor' ),
					'superscript'  => esc_html__( 'Super Script', 'pricing-table-for-elementor' ),
					'subscript'  => esc_html__( 'Sub Script', 'pricing-table-for-elementor' ),
				],
				'conditions' => [
					'terms'	=>	[
						[
							'name'	=>	'pricing_currency',
							'value'	=>	'none',
							'operator'	=>	'!==',
						]
					],
					// 'relation'			=>	'!=',
				],
			]
		);

		$this->add_control(
			'main_price',
			[
				'label' => esc_html__( 'Main Price', 'pricing-table-for-elementor' ),
				'description' => esc_html__( 'Main price of the Table', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=>	true,
				'separator'	=>	'before',
				'default' => esc_html__('50', 'pricing-table-for-elementor'),
			]
		);

		$this->add_control(
			'positioning_price',
			[
				'label' => esc_html__( 'Positional Price', 'pricing-table-for-elementor' ),
				'description' => esc_html__( 'The Price which will be positioned at top or bottom at the main price', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=>	true,
				'separator'	=>	'before',
				'default' => esc_html__('45', 'pricing-table-for-elementor'),
			]
		);

		$this->add_control(
			'positional_price_vertical_position',
			[
				'label' => esc_html__( 'Positional Price Vertical Position', 'pricing-table-for-elementor' ),
				'description' => esc_html__( 'Select the postion of the positonal price whether it is placed at top or bottom positon relative to the main price', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'superscript',
				'label_block'	=>	true,
				'separator'	=>	'before',
				'options' => [
					'superscript'  => esc_html__( 'Super Script', 'pricing-table-for-elementor' ),
					'subscript'  => esc_html__( 'Sub Script', 'pricing-table-for-elementor' ),
				],
				'conditions' => [
					'terms'	=>	[
						[
							'name'	=>	'positioning_price',
							'value'	=>	'',
							'operator'	=>	'!=',
						]
					],
					// 'relation'			=>	'!=',
				],
			]
		);

		$this->add_control(
			'pricing_associate_text',
			[
				'label' => esc_html__( 'Helper Text', 'pricing-table-for-elementor' ),
				'placeholder'	=>	esc_html__('Monthly', 'pricing-table-for-elementor'),
				'description' => esc_html__( 'The text which will indicate the pricing Use or Name such as Monthly, yearly etc.', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=>	true,
				'separator'	=>	'before',
				'default' => esc_html__('Monthly', 'pricing-table-for-elementor'),
			]
		);

		$this->add_control(
			'pro_url_two',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'placeholder' => esc_html__( 'Choose Categories to Include', 'wpce' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'label_block' => false,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			]
		);

		/*$this->add_control(
			'helper_text_position',
			[
				'label' => esc_html__( 'Helper Text Position', 'pricing-table-for-elementor' ),
				'description' => esc_html__( 'Select the postion of the helper text whether it is placed as subscript, superscript, top or bottom positon of the main price', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'subscript',
				'label_block'	=>	true,
				'separator'	=>	'bottom',
				'options' => [
					'superscript'  => esc_html__( 'Super Script', 'pricing-table-for-elementor' ),
					'subscript'  => esc_html__( 'Sub Script', 'pricing-table-for-elementor' ),
					'top'  => esc_html__( 'Top', 'pricing-table-for-elementor' ),
					'bottom'  => esc_html__( 'Bottom', 'pricing-table-for-elementor' ),
				],
				'conditions' => [
					'terms'	=>	[
						[
							'name'	=>	'positioning_price',
							'value'	=>	'',
							'operator'	=>	'!=',
						]
					],
					// 'relation'			=>	'!=',
				],
			]
		);*/

		$this->end_controls_section();

		$this->start_controls_section(
			'features',
			[
				'label' => esc_html( 'Features', 'pricing-table-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$pricing_repeater_fields = [
			[
				'name' => 'feature_item_name',
				'label' => esc_html__( 'Title', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => '',
				'placeholder' => esc_html__('Item Name', 'pricing-table-for-elementor')
			],
			[
				'name' => 'pro_url_one',
				'label' => esc_html__( 'Icon', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			],
			[
				'name' => 'pro_url_two',
				'label' => esc_html__( 'Icon Color', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			],
			[
				'name' => 'pro_url_three',
				'label' => esc_html__( 'Highlighted Text', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			],
			[
				'name' => 'pro_url_four',
				'label' => esc_html__( 'Background Color', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			],
		];

		$this->add_control(
			'pricing_feature_items',
			[
				'label' => esc_html__( 'Features', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $pricing_repeater_fields,
				'default' => [
					[
						'feature_item_name'	=>	esc_html__('Feature Item One', 'pricing-table-for-elementor'),
					],
					[
						'feature_item_name'	=>	esc_html__('Feature Item Two', 'pricing-table-for-elementor'),
					],
					[
						'feature_item_name'	=>	esc_html__('Feature Item Three', 'pricing-table-for-elementor'),
					],
					[
						'feature_item_name'	=>	esc_html__('Feature Item Four', 'pricing-table-for-elementor'),
					],
				],
				'title_field' => '{{{ feature_item_name }}}',
			]
		);

		$this->add_control(
			'pro_url_three',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'placeholder' => esc_html__( 'Choose Categories to Include', 'wpce' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'label_block' => false,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'pricing_footer',
			[
				'label' => esc_html( 'Footer', 'pricing-table-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'pricing_footer_link_text',
			[
				'label' => esc_html__( 'Link Text', 'pricing-table-for-elementor' ),
				'placeholder'	=>	esc_html__('Buy Now', 'pricing-table-for-elementor'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'	=>	true,
				'separator'	=>	'before',
				'default' => esc_html__('Buy Now', 'pricing-table-for-elementor'),
			]
		);

		$this->add_control(
			'pricing_footer_link',
			[
				'label' => esc_html__( 'Link', 'pricing-table-for-elementor' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'pricing-table-for-elementor' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
				],
			]
		);

		$this->add_control(
			'pro_url_four',
			[
				'label' => __( 'Alignment', 'plugin-domain' ),
				'placeholder' => esc_html__( 'Choose Categories to Include', 'wpce' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'label_block' => false,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			]
		);

		$this->end_controls_section();

		// Container Style Section 
		$this->start_controls_section(
			'container_style_section',
			[
				'label' => esc_html( 'Container Style', 'news-ticker-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'container_border',
				'label' => __( 'Border', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-whole',
			]
		);

		$this->add_control(
			'container_border_radius',
			[
				'label' => __( 'Border Radius', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'conditions' => [
					'terms'	=>	[
						[
							'name'	=>	'container_border_border',
							'value'	=>	'',
							'operator'	=>	'!=',
						]
					],
				],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-whole' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'container_background',
				'label' => __( 'Background', 'pricing-table-for-elementor' ),
				'description'=> esc_html__('Background for the button', 'pricing-table-for-elementor'),
				'show_label'=> true,
				'label_block' => true,
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-whole',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'heading_style_section',
			[
				'label' => esc_html( 'Header Style', 'news-ticker-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_color',
			[
				'label' => __( 'Heading Color', 'news-ticker-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-type' => 'color: {{VALUE}}',
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-type p' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_label_typography',
				'label' => __( 'Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-type, {{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-type p',
			]
		);

		$this->add_control(
			'heading_padding',
			[
				'label' => __( 'Padding', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-type' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'heading_border',
				'label' => __( 'Border', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-type',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'heading_content_background',
				'label' => __( 'Background', 'plugin-domain' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-type',
			]
		);

		$this->end_controls_section();

		// Pricing Style Section 
		$this->start_controls_section(
			'main_pricing_style_section',
			[
				'label' => esc_html( 'Pricing Style', 'news-ticker-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'main_pricing_color',
			[
				'label' => __( 'Color', 'news-ticker-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header' => 'color: {{VALUE}}',
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header .wppt-pricing-helper-text' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'main_pricing_currency_typography',
				'label' => __( 'Currency Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header .wbpt-pricing-currency'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'main_pricing_label_typography',
				'label' => __( 'Main Price Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header .wppt-main-price-text',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'positional_pricing_currency_typography',
				'label' => __( 'Positional Price Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header .wbpt-positional-price'
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pricing_helper_text_currency_typography',
				'label' => __( 'Helper Text Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header .wppt-pricing-helper-text'
			]
		);

		$this->add_control(
			'pricing_padding',
			[
				'label' => __( 'Padding', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'main_pricing_border',
				'label' => __( 'Border', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'main_pricing_content_background',
				'label' => __( 'Background', 'plugin-domain' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-header',
			]
		);

		$this->end_controls_section();

		// Feature Items Style Section 
		$this->start_controls_section(
			'feature_items_style_section',
			[
				'label' => esc_html( 'Feature Items Style', 'news-ticker-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'feature_items_color',
			[
				'label' => __( 'Color', 'news-ticker-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-content ul li' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'feature_items_typography',
				'label' => __( 'Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-content ul li'
			]
		);

		$this->add_control(
			'feature_items_padding',
			[
				'label' => __( 'Padding', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-content ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'feature_items_border',
				'label' => __( 'Border', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-content ul li',
			]
		);

		$this->add_control(
			'feature_items_border_radius',
			[
				'label' => __( 'Border Radius', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'conditions' => [
					'terms'	=>	[
						[
							'name'	=>	'feature_items_border_border',
							'value'	=>	'',
							'operator'	=>	'!=',
						]
					],
				],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-content ul li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'feature_items_background',
				'label' => __( 'Background', 'pricing-table-for-elementor' ),
				'description'=> esc_html__('Background for the button', 'pricing-table-for-elementor'),
				'show_label'=> true,
				'label_block' => true,
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-content ul li',
			]
		);

		$this->end_controls_section();

		// Highlighted Button Style Section 
		$this->start_controls_section(
			'highlighted_text_style_section',
			[
				'label' => esc_html( 'Highlighted Text Style', 'news-ticker-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'pro_url_five',
			[
				'label' => __( 'Highlighted Text Color', 'plugin-domain' ),
				'placeholder' => esc_html__( 'Choose Categories to Include', 'wpce' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'label_block' => false,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			]
		);

		$this->add_control(
			'pro_url_six',
			[
				'label' => __( 'Highlighted Text Background', 'plugin-domain' ),
				'placeholder' => esc_html__( 'Choose Categories to Include', 'wpce' ),
				'type' => \Elementor\Controls_Manager::BUTTON,
				'label_block' => false,
				'button_type' => 'danger',
				'text' => __( '<a style="color: #fff; font-size: 12px; padding: 0 10px; height: 100%; display: block; line-height: 28px;" href="'.WB_PT_PRO_URL.'" target="_blank" >Buy Pro</a>', 'plugin-domain' ),
			]
		);

		$this->end_controls_section();

		// Footer Button Style Section 
		$this->start_controls_section(
			'footer_button_style_section',
			[
				'label' => esc_html( 'Footer Link/Button Style', 'news-ticker-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'footer_btn_color',
			[
				'label' => __( 'Color', 'news-ticker-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom .wppt-footer-btn' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'footer_btn_typography',
				'label' => __( 'Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom .wppt-footer-btn'
			]
		);

		$this->add_control(
			'footer_btn_padding',
			[
				'label' => __( 'Padding', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom .wppt-footer-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'footer_btn_border',
				'label' => __( 'Border', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom .wppt-footer-btn',
			]
		);

		$this->add_control(
			'footer_btn_border_radius',
			[
				'label' => __( 'Border Radius', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'conditions' => [
					'terms'	=>	[
						[
							'name'	=>	'footer_btn_border_border',
							'value'	=>	'',
							'operator'	=>	'!=',
						]
					],
				],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom .wppt-footer-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'footer_btn_background',
				'label' => __( 'Background', 'pricing-table-for-elementor' ),
				'description'=> esc_html__('Background for the button', 'pricing-table-for-elementor'),
				'show_label'=> true,
				'label_block' => true,
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom .wppt-footer-btn',
			]
		);

		$this->end_controls_section();

		// Footer Style Section 
		$this->start_controls_section(
			'footer_style_section',
			[
				'label' => esc_html( 'Footer Style', 'news-ticker-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'footer_color',
			[
				'label' => __( 'Color', 'news-ticker-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'footer_typography',
				'label' => __( 'Typography', 'plugin-domain' ),
				//'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom'
			]
		);

		$this->add_control(
			'footer_padding',
			[
				'label' => __( 'Padding', 'plugin-domain' ),
				'type' => Controls_Manager::DIMENSIONS,
				// 'size_units' => [ 'px', 'em', ],
				'selectors' => [
					'{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'Footer_border',
				'label' => __( 'Border', 'plugin-domain' ),
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'footer_background',
				'label' => __( 'Background', 'plugin-domain' ),
				'show_label'=> true,
				'description'=> esc_html__('Background for the footer section', 'pricing-table-for-elementor'),
				'label_block' => true,
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .wb-pt-wrapper.wb-pt-basic-template .wppt-bottom',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		$element_id = 'wb_pricing_table'.$this->get_id();

		$template_style = $settings['template_style'];

		if( $template_style === 'basic' ){
			echo '<div class="wb-pt-wrapper wb-pt-basic-template">';
			require( WB_PT_PATH . 'templates/basic/template.php' );
			echo "</div>";
		}
	}

}
