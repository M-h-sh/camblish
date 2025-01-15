<?php

namespace App\Helpers;

class UrlHelper
{
    /**
     * Get the base URL from the environment variable or fallback to the default APP_URL.
     *
     * @param  string  $uri
     * @return string
     */
    public static function url($uri = "")
    {
        // Fallback to APP_URL in .env if no APP_HOST variable is set
        $host = env("APP_HOST", env("APP_URL", "http://localhost"));
        return rtrim($host, '/') . "/" . ltrim($uri, '/');
    }
}
