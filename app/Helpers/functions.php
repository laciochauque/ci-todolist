<?php

if (!function_exists('asset')) {
    function asset($path = '')
    {
        return esc(base_url($path));
    }
}
