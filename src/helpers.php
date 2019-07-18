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
    function guid($version = GuidInterface::FMT_STRING, $format = GuidInterface::UUID_RANDOM, $salt='', $namespace='')
    {
        return (new Guid())->generate($version, $format, $salt, $namespace);
    }
}