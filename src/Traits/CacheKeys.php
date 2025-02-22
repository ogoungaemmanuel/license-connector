<?php

namespace Xslain\LicenseConnector\Traits;

trait CacheKeys
{
    /**
     * Get access token cache key
     *
     * @return string
     */
    private function getAccessTokenKey(string $licenseKey): string
    {
        return "license-connector:access-token-{$licenseKey}";
    }
}
