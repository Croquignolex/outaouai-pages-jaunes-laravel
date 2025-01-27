<?php

use Illuminate\Support\Facades\Route;

if(!function_exists('active_page'))
{
    /**
     * @param string $route
     * @param string $class
     * @return string
     */
    function active_page(string $route, string $class = 'active'): string
    {
        return (Route::is($route)) ? $class : '';
    }
}

if(!function_exists('format_text'))
{
    /**
     * @param string $text
     * @param int $maxCharacters
     * @return string
     */
    function format_text(string $text, int $maxCharacters): string
    {
        return (strlen($text) > $maxCharacters)
            ? mb_substr($text, 0, $maxCharacters, 'utf-8') . '...'
            : $text;
    }
}


if(!function_exists('css_asset'))
{
    /**
     * @param string $name
     * @return string
     */
    function css_asset(string $name): string
    {
        return asset("assets/css/{$name}");
    }
}


if(!function_exists('js_asset'))
{
    /**
     * @param string $name
     * @return string
     */
    function js_asset(string $name): string
    {
        return asset("assets/js/{$name}");
    }
}

if(!function_exists('image_asset'))
{
    /**
     * @param string $name
     * @return string
     */
    function image_asset(string $name): string
    {
        return asset("storage/{$name}");
    }
}
