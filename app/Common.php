<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter.com/user_guide/extending/common.html
 */

 if (!function_exists('asset')) {
    function asset($path = '')
    {
        return esc(base_url($path));
    }
}

if (!function_exists('auth')) {
    /** Check if has user session */
    function auth():bool
    {
        return !! session()->get("user_id");
    }
}

if (!function_exists('whenInvalid')) {
    /**
     * Check if a field as error and print is-invalid when true
     * @param string $field the field name to check error status
     * @param string $class the css class name for invalid form controls
     */
    function whenInvalid(string $field, string $class="is-invalid"):string
    {
        return session("errors")[$field]??'' != "" ? $class : "";
    }
}

if (!function_exists('getInvalidFeedback')) {
    /**
     * Check if a field as error and print the invalid feedback
     * @param string $field the field name to check error status
     * @param string $class the css class name for invalid form controls
     */
    function getInvalidFeedback(string $field, string $class = "invalid-feedback"):string
    {
        $message = session("errors")[$field]??'';
        return $message != "" ? "<div class='$class'> $message </div>" : "";
    }
}
if (!function_exists('abort')) {
    /**
     * Abort the execution and display error vie
     */
    function abort(Throwable $exception, string $description = "")
    {
        $data = ["exception"=>$exception,"description"=>$description];
        return view("error",$data);
    }
}
