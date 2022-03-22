<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Supported Locales
    |--------------------------------------------------------------------------
    |
    | Here you need to assign supported languages of application.
    | Regional languages are sorted by their base language, so "British English" sorts as "English, British".
    |
    */

    'supportedLocales' => [
        'fr' => [
            'name' => 'French',
            'script' => 'Latn',
            'native' => 'français',
            'regional' => 'fr_FR'
        ],
        'tr' => [
            'name' => 'Turkish',
            'script' => 'Latn',
            'native' => 'Türkçe',
            'regional' => 'tr_TR'
        ],
        'ar' => [
            'name' => 'Arabic',
            'script' => 'Arab',
            'native' => 'العربية',
            'regional' => 'ar_AE'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Use Accept Language Header
    |--------------------------------------------------------------------------
    |
    | Automatically determine locale from browser (https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language)
    | on first call if it's not defined in the URL. Redirect user to computed localized url.
    | For example, if users browser language is `de`, and `de` is active in the array `supportedLocales`,
    | the `/about` would be redirected to `/de/about`.
    |
    | The locale will be stored in session and only be computed from browser
    | again if the session expires.
    |
    | If false, system will take app.php locale attribute
    |
    | Requires: LaravelSessionRedirect middleware!
    |
    */

    'useAcceptLanguageHeader' => true,

    /*
    |--------------------------------------------------------------------------
    | Hide Default Locale Prefix
    |--------------------------------------------------------------------------
    |
    | If `hideDefaultLocaleInURL` is true, then a url without locale is identical with the same url with default locale.
    |
    | For example, if `en` is default locale, then `/en/about` and `/about` would be identical.
    |
    | If in addition the middleware `LaravelLocalizationRedirectFilter` is active, then
    | every url with default locale is redirected to url without locale.
    |
    | For example, `/en/about` would be redirected to `/about`.
    | It is recommended to use `hideDefaultLocaleInURL` only in
    | combination with the middleware `LaravelLocalizationRedirectFilter`
    | to avoid duplicate content (SEO).
    |
    | If `useAcceptLanguageHeader` is true, then the first time
    | the locale will be determined from browser and redirect to that language.
    | After that, `hideDefaultLocaleInURL` behaves as usual.
    |
    */

    'hideDefaultLocaleInURL' => true,

    /*
    |--------------------------------------------------------------------------
    | Locales Order
    |--------------------------------------------------------------------------
    |
    | If you want to display the locales in particular order in the language selector you should write the order here.
    | CAUTION: Please consider using the appropriate locale code otherwise it will not work
    | Example: 'localesOrder' => ['es','en'],
    |
    */

    'localesOrder' => [
        'tr',
        'fr',
        'ar'
    ],

    /*
    |--------------------------------------------------------------------------
    | Locales Mapping
    |--------------------------------------------------------------------------
    |
    | If you want to use custom lang url segments like 'at' instead of 'de-AT'
    | you can use the mapping to tallow the LanguageNegotiator to assign the descired locales based on HTTP Accept Language Header.
    |
    | For example you want ot use 'at', so map HTTP Accept Language Header 'de-AT' to 'at' (['de-AT' => 'at']).
    |
    */

    'localesMapping' => [],

    /*
    |--------------------------------------------------------------------------
    | Urls Ignored
    |--------------------------------------------------------------------------
    |
    | URLs which should not be processed, e.g. '/nova', '/nova/*', '/nova-api/*' or specific application URLs
    | Defaults to []
    |
    */

    'urlsIgnored' => [],

    /*
    |--------------------------------------------------------------------------
    | Ignored HTTP Methods
    |--------------------------------------------------------------------------
    |
    | This methods are dont localized
    |
    */

    'httpMethodsIgnored' => [
        'POST',
        'PUT',
        'PATCH',
        'DELETE'
    ],

    /*
    |--------------------------------------------------------------------------
    | UTF8 Suffix
    |--------------------------------------------------------------------------
    |
    | Locale suffix for LC_TIME and LC_MONETARY
    | Defaults to most common ".UTF-8". Set to blank on Windows systems, change to ".utf8" on CentOS and similar.
    |
    */
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),
];
