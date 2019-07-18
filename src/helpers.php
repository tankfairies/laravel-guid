<?php

use Tankfairies\Guid\Guid;
use Tankfairies\Guid\Libs\GuidInterface;
use Tankfairies\Guid\Libs\GuidException;

if (!function_exists('guid')) {
    /**
     * @param $version
     * @param $format
     * @param $salt
     * @param $namespace
     * @return string
     * @throws GuidException
     */
    function guid(
        $version = GuidInterface::UUID_RANDOM,
        $format = GuidInterface::FMT_STRING,
        $salt = null,
        $namespace = null
    ) {
        return (new Guid())->generate($version, $format, $salt, $namespace);
    }
}
