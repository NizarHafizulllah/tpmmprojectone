<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('show_array'))
{
    function show_array($arr)
    {

    	echo '<pre>';
    	print_r($arr);
    	echo '<pre>';
        // return $var;
    }   
}