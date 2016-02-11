<?php

namespace CountryList;

class Data
{
    /**
     * @return string
     */
    public static function getDataPath()
    {
        return dirname(__DIR__) . '/data';
    }
}
