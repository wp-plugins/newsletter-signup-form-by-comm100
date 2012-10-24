<?php
/*
Plugin Name: Email Newsletter Signup/Subscribe Form by Comm100 Email Marketing  
Plugin URI: http://emailmarketing.comm100.com/
Description: Put a newsletter signup form onto your WordPress site in seconds and watch your email list grow. Install it Now!
Author: Comm100 Email Marketing
Version: 1.0
Author URI: http://emailmarketing.comm100.com/
*/

if (is_admin())
{
	require_once(dirname(__FILE__).'/plugin_files/Comm100EmailMarketingAdmin.class.php');
	Comm100EmailMarketingAdmin::get_instance();
}
else
{
	require_once(dirname(__FILE__).'/plugin_files/Comm100EmailMarketing.class.php');
	Comm100EmailMarketing::get_instance();
}
