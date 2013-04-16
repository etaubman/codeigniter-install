<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

if (! function_exists('post_obj'))
{
	function post_obj ($xss = FALSE)
	{
		$ci =& get_instance();
		$arr = $ci->input->post(NULL,$xss);
		return array_to_obj($arr);
	}
}

if (! function_exists('session_obj'))
{
	function session_obj ($xss = FALSE)
	{
		$ci =& get_instance();
		$arr = $ci->session->all_userdata();
		return array_to_obj($arr);
	}
}

if (! function_exists('array_to_obj'))
{
	function array_to_obj ($arr)
	{
		$obj = new stdClass;
		foreach ($arr as $k => $v)
		{
			if (is_array($v))
			{
				$obj->{$k} = array_to_obj($v);
			}
			else
			{
				$obj->{$k} = $v;
			}
		}
		return $obj;
	}
}

/* End of file set_global_obj_helper.php */