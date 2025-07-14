<?php

namespace App\Routing;

use Illuminate\Routing\UrlGenerator as BaseUrlGenerator;

class ExportUrlGenerator extends BaseUrlGenerator
{
    public function to($path, $extra = [], $secure = null)
    {
        // Example custom logic
        $path = 'custom-prefix/'.ltrim($path, '/');

        return parent::to($path, $extra, $secure);
    }
}
