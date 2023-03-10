<?php

use Example_Me\Core\Route_Type as Route_Type;

/*
|---------------------------------------------------------------------------------------------------------
| Available Route Types:-
|
| NOTE - Except Late Frontend Routes, all other routes are triggerred on 'init' hook.
|
+----------------------------------------------+---------------------------------------------------------+
| ROUTE TYPE                                   | ROUTE DESCRIPTION                                       |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::ANY                              | To be used if model/controller is                       |
|                                              | required on all pages admin as well as frontend         |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::ADMIN                            | To be used if model/controller needs to be loaded on    |
|                                              | on admin pages only                                     |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::ADMIN_WITH_POSSIBLE_AJAX         | To be used if model/controller contains Ajax & needs    |
|                                              | to be loaded on admin pages only                        |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::AJAX                             | To be used if model/controller contains Ajax            |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::CRON                             | To be used if model/controller contains Cron            |
|                                              | functionality                                           |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::FRONTEND                         | To be used if model/controller needs to be loaded on    |
|                                              | frontend pages only                                     |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::FRONTEND_WITH_POSSIBLE_AJAX      | To be used if model/controller contains Ajax & needs    |
|                                              | to be loaded on frontend pages only                     |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::LATE_FRONTEND                    | To be used if model/controller needs to be loaded when  |
|                                              | specific conditions are matched                         |
+----------------------------------------------+---------------------------------------------------------+
| ROUTE_TYPE::LATE_FRONTEND_WITH_POSSIBLE_AJAX | To be used if model/controller contains Ajax & needs    |
|                                              | to be loaded when specific conditions are matched       |
+----------------------------------------------+---------------------------------------------------------+
*
* Possible Routes Combinations :-
*
* 1. $router->register_route_of_type(...)->with_controller(...)->with_model(...)->with_view(...);
* 2. $router->register_route_of_type(...)->with_controller(...)->with_model(...);
* 3. $router->register_route_of_type(...)->with_controller(...)->with_view(...);
* 4. $router->register_route_of_type(...)->with_controller(...);
* 5. $router->register_route_of_type(...)->with_just_model(...);
*
* with_controller, with_model, with_view, with_just_model methods accept either a string or
* a callback. But the callback must return respective Controller/Model or View name.
*
* with_controlller & with_just_model methods supports '@' in the Controller/Model passed to
* them allowing you to call a particular method. That method does not need to be a static
* method. It can be a public method.
*/

/*
|-------------------------------------------------------------------------------------------
| Simple Example - This example creates a admin route (triggered only when it is a dashboard)
|-------------------------------------------------------------------------------------------
|	$router
|		->register_route_of_type( ROUTE_TYPE::ADMIN )
|		>with_controller( 'Admin_Settings' ) // Resolved by Router to 'Example_Me\App\Controllers\Admin\Admin_Settings'.
|		->with_model( 'Admin_Settings' ) // Resolved by Router to 'Example_Me\App\Models\Admin\Admin_Settings'.
|		->with_view( 'Admin_Settings' ); // Resolved by Router to 'Example_Me\App\Views\Admin\Admin_Settings'.
|-------------------------------------------------------------------------------------------
*/

/*
|-------------------------------------------------------------------------------------------
| Routes with Full Class Names Example. Above route could also be written as :-
|-------------------------------------------------------------------------------------------
|	$router
|		->register_route_of_type( ROUTE_TYPE::ADMIN )
|		->with_controller( 'Example_Me\App\Controllers\Admin\Admin_Settings' )
|		->with_model( 'Example_Me\App\Models\Admin\Admin_Settings' )
|		->with_view( 'Example_Me\App\Views\Admin\Admin_Settings' );
|-------------------------------------------------------------------------------------------
*/

/*
|-------------------------------------------------------------------------------------------
| '@' Symbol Example :-
|
|  Again, @ is supported in with_controller & with_just_model methods only.
|-------------------------------------------------------------------------------------------
|	$router
|		->register_route_of_type( ROUTE_TYPE::LATE_FRONTEND )
|		->with_controller( 'Sample_Shortcode@register_shortcode' )
|		->with_model( 'Sample_Shortcode' )
|		->with_view( 'Sample_Shortcode' );
|-------------------------------------------------------------------------------------------
*/

/*
|-------------------------------------------------------------------------------------------
| Example of Loading controller if conditions match. Late Frontend Routes are triggerred on
| `wp` hook. Therefore, you should ideally be able to access template related functions
| in the callback passed to `with_controller` method below
|-------------------------------------------------------------------------------------------
|	$router
|		->register_route_of_type( ROUTE_TYPE::LATE_FRONTEND )
|		->with_controller(
|			function() {
|
|				if ( get_the_ID() == '3367' ) {
|					return 'Sample_Shortcode';
|				}
|
|				return false;
|			}
|		)
|		->with_view( 'Sample_Shortcode' );
|-------------------------------------------------------------------------------------------
*/

/*
|-------------------------------------------------------------------------------------------
| If you want to load only model for specific route, you can use with_just_model.
|
| Note: This type of route is referred as `Model Only` route.`Model Only` routes
| don't support Views. This type of route should ideally be used when you have
| to work at data layer but there is nothing to print on the screen.
|-------------------------------------------------------------------------------------------
|	$router
|		->register_route_of_type( ROUTE_TYPE::ADMIN )
|		->with_just_model('Example_Me_Model_Admin_Settings');
|-------------------------------------------------------------------------------------------
*/

/* That's all, start creating your own routes below this line! Happy coding. */

// Route for Settings Page.
$router
	->register_route_of_type( ROUTE_TYPE::ADMIN )
	->with_controller( 'Admin_Settings@register_hook_callbacks' ) // Resolved by Router to 'Example_Me\App\Controllers\Admin\Admin_Settings'.
	->with_model( 'Admin_Settings' ) // Resolved by Router to 'Example_Me\App\Models\Admin\Admin_Settings'.
	->with_view( 'Admin_Settings' ); // Resolved by Router to 'Example_Me\App\Views\Admin\Admin_Settings'.


//Route for Admin to consult the payment made
$router
	->register_route_of_type(ROUTE_TYPE::ADMIN)
	->with_controller( 'Admin_Consult_Payment@register_hook_callbacks' ) 
	->with_model( 'Admin_Consult_Payment' ) 
	->with_view( 'Admin_Consult_Payment' );


//Route for printing the list of posts 
$router
	->register_route_of_type( ROUTE_TYPE::FRONTEND )
	->with_controller( 'Print_Posts_Shortcode@register_shortcode' )
	->with_model( 'Print_Posts_Shortcode' )
	->with_view( 'Print_Posts_Shortcode' );


//Route for creating and hanling a page for customer to notify the have made payment for their delivery

$router
	->register_route_of_type( ROUTE_TYPE::FRONTEND )
	->with_controller( 'Customer_Notify_Payment@register_shortcode' )
	->with_model( 'Customer_Notify_Payment' )
	->with_view( 'Customer_Notify_Payment' );