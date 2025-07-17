<?php

namespace App\Helpers;

class CmsAsset
{
    /**
     * Menghasilkan URL asset CMS yang dikustom.
     *
     * @param string $path
     * @return string
     */
    public static function url(string $path = ''): string
    {
        $baseUrl = config('cms.cms_url', url('/')); // default ke base URL jika belum diset
        return rtrim($baseUrl, '/') . '/storage/' . ltrim($path, '/');
    }
}
