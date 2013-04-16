<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (! function_exists('pre_print_r'))
{
	function pre_print_r($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
}
if (! function_exists('pre_var_dump'))
{
	function pre_var_dump($var)
	{
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	}
}

/* End of file set_global_obj_helper.php */