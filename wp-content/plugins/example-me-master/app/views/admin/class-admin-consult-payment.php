<?php
namespace Example_Me\App\Views\Admin;

use Example_Me\Core\View;
use Example_Me as Example_Me;

if ( ! class_exists( __NAMESPACE__ . '\\' . 'Admin_Consult_payment' ) ) {
	/**
	 * View class to load all templates related to Plugin's Admin Settings Page
	 *
	 * @since      1.0.0
	 * @package    Example_Me
	 * @subpackage Example_Me/views/admin
	 */
	class Admin_Consult_payment extends View {
		/**
		 * Prints Settings Page.
		 *
		 * @param  array $args Arguments passed by `markup_settings_page` method from `Example_Me\App\Controllers\Admin\Admin_Consult_payment` controller.
		 * @return void
		 * @since 1.0.0
		 */
		public function Admin_Consult_payment_page( $args = [] ) {
			echo $this->render_template(
				'admin/page-admin-consult-payment-settings/page-admin-consult-payment-settings.php',
				$args
			); // WPCS: XSS OK.
		}

		/**
		 * Prints Section's Description.
		 *
		 * @param  array $args Arguments passed by `markup_section_headers` method from  `Example_Me\App\Controllers\Admin\Admin_Consult_payment` controller.
		 * @return void
		 * @since 1.0.0
		 */
		public function section_headers( $args = [] ) {
			echo $this->render_template(
				'admin/page-admin-consult-payment-settings/page-admin-consult-payment-section-headers.php',
				$args
			); // WPCS: XSS OK.
		}

		/**
		 * Prints text field
		 *
		 * @param  array $args Arguments passed by `markup_fields` method from `Example_Me\App\Controllers\Admin\Admin_Consult_payment` controller.
		 * @return void
		 * @since 1.0.0
		 */
		/*public function markup_fields( $args = [] ) {
			echo $this->render_template(
				'admin/page-settings/page-settings-fields.php',
				$args
			); // WPCS: XSS OK.
		}*/
	}
}
