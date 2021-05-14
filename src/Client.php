<?php


namespace YaangVu\SisUserHelper;


class Client
{
    private static string $uri;

    /**
     * @param string $uri
     */
    public static function setClientUri(string $uri): void
    {
        self::$uri = $uri;
    }

    /**
     * @return string
     */
    public static function getClientUri(): string
    {
        return self::$uri;
    }
}
