<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** Smarty plugin* -------------------------------------------------------------*
 *  File:     modifier.helper.php* Type:     modifier* Name:     helper*
 *  Purpose:  Call CodeIgniter helpers from within Smarty.* ------------------------------------------------------------- */
function smarty_modifier_helper($string, $helper_file, $helper_func) {
    if (!function_exists("get_instance")) {
        return "Can't get CI instance";
    }

    if (!function_exists($helper_func)) {
        $CI = & get_instance();
        $CI->load->helper($helper_file);
        $params = func_get_args();
        $params[0] = $string;
        unset($params[1]);
        return call_user_func_array($helper_func, array_values($params));
    }
}

?>