<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            //
        ];
    }

    public function rootView(Request $request)
    {
        if ($request->routeIs('auth.*')) {
            return 'layouts.auth';
        } else if ($request->routeIs('setup.*')) {
            return 'layouts.setup';
        } else {
            return 'layouts.app';
        }
    }
}
