<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class LocalizationHelper
{
    /**
     * List of default Localization middlewares.
     *
     * @var array|string[]
     */
    protected static array $defaultMiddlewareNames = [
        'session',
        'redirect',
        'view'
    ];

    /**
     * Gets a array list of Localization middleware names.
     *
     * @return array
     */
    public static function getLocalizationMiddlewares()
    {
        $middlewares = (new \App\Http\Kernel(app(), app('router')))
            ->getRouteMiddleware();

        return [...array_filter(
            array_map(
                array(self::class, 'isLocalizedMiddleware'),
                array_keys($middlewares)
            )
        )];
    }

    /**
     * Checks a middleware if localized or not.
     *
     * @param string $middlewareName
     * @return string|null
     */
    private static function isLocalizedMiddleware(string $middlewareName)
    {
        return (Str::endsWith($middlewareName, ['.localize']) && Str::contains($middlewareName, self::$defaultMiddlewareNames))
            ? $middlewareName
            : null;
    }
}
