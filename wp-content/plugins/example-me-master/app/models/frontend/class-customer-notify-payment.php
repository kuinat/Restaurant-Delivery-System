<?php
namespace Example_Me\App\Models\Frontend;

use Example_Me\App\Models\Settings;

/**
 * Model to handle 'example_me_print_posts' shortcode
 *
 * @since      1.0.0
 * @package    Example_Me
 * @subpackage Example_Me/Models/Frontend
 */
class Customer_Notify_Payment extends Base_Model {

	/**
	 * Fetch Posts
	 *
	 * @param array $atts Attributes passed to shortcode.
	 * @return \WP_Query Returns found posts as WP_Query Object.
	 */

   /* public function payment_notified($table_name, $data)  
    {  
         $string = "INSERT INTO ".$table_name." (";            
         $string .= implode(",", array_keys($data)) . ') VALUES (';            
         $string .= "'" . implode("','", array_values($data)) . "')";  
         if(mysqli_query($this->con, $string))  
         {  
              return true;  
         }  
         else  
         {  
              echo mysqli_error($this->con);  
         }  
    }  */

	/*public function payment_notified_other( $order_id, $transaction_id ) {
		

		return "Thank you for your ordering";
	}*/
}