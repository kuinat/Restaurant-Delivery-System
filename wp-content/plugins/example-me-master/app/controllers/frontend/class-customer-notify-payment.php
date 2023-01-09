<?php
namespace Example_Me\App\Controllers\Frontend;

use Example_Me\Core\View;

/**
 * Controller that handles `Customer_Notify_Payment` Shortcode
 *
 * @since      1.0.0
 * @package    Example_Me
 * @subpackage Example_Me/Controllers/Frontend
 */
class Customer_Notify_Payment extends Base_Controller {

	/**
	 * Handle add_action & add_filter required for this module
	 *
	 * @ignore Blank Method
	 * @since 1.0.0
	 */
	protected function register_hook_callbacks(){}

	/**
	 * Registers the 'notify_payment` shortcode
	 *
	 * @return void
	 * @since 1.0.0
	 */
   
	public function register_shortcode() {
		add_shortcode( 'notify_payment', array( $this, 'notify_payment_callback' ) );
	}

    /**
	 * Callback to handle `notify_payment` shortcode
	 *
	 * @param array $atts Attributes passed to shortcode.
	 * @return string Html to rendered
	 */
	public function notify_payment_callback( $atts ) {
		return $this->get_view()->display_order_payment_form();
	}

    
}
