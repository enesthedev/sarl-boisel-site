<?php

namespace App\Helpers;

use App\Http\Kernel;
use Illuminate\Support\Str;

class LocalizationHelper
{
    /**
     * Gets a array list of Localization Middleware names.
     *
     * @return array
     */
    public static function getLocalizationMiddlewares()
    {
        $middlewares = (new \App\Http\Kernel(app(), app('router')))
            ->getRouteMiddleware();

        return array_filter(
            array_map(
                array(self::class, 'isLocalizedMiddleware'),
                array_keys($middlewares)
            )
        );
    }

    /**
     * Checks a middleware if localized or not.
     *
     * @param string $middlewareName
     * @return string|null
     */
    private static function isLocalizedMiddleware(string $middlewareName)
    {
        return Str::endsWith($middlewareName, ['.localize'])
            ? $middlewareName
            : null;
    }
}
