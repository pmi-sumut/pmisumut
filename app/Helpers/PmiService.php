<?php

namespace App\Helpers;

class PmiService
{
    /**
     * Menghasilkan url api service pmi.
     *
     * @param string $uri
     * @return string
     */
    public static function v1(string $uri = ''): string
    {
        $baseUrl = config('pmi.service_url', url('/')); // default ke base URL jika belum diset
        return $baseUrl.$uri;
    }
}
