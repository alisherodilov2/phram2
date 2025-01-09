<?php
if (!function_exists('my')) {
    function my()
    {
        return auth()->user();
    }
}
if (!function_exists('lang')) {
    function lang(string $text)
    {
      return  app()->getLocale() == 'uz' ? $text: $text."_" . app()->getLocale();
    }
}
 