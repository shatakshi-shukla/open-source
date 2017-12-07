<?php
/**
 * Language: php
 * Name: Ahmed Dabak
 * Github: https://github.com/ahmeddabak/
 */


/**
 * Get the request urls details
 * @return array(scheme, host, port, user, pass, path, query, fragment)
 */
function get_request_details()
{
    return parse_url($_SERVER['REQUEST_URI']);
}