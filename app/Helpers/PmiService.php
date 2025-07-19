<?php

namespace App\Helpers;

class PmiService
{
    /**
     * Menghasilkan URL asset CMS yang dikustom.
     *
     * @param string $uri
     * @return string
     */
    public static function url(string $uri = ''): string
    {
        $baseUrl = config('pmi.service_url', url('/')); // default ke base URL jika belum diset
        return $baseUrl.$uri;
    }
}
