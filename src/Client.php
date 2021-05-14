<?php


namespace YaangVu\SisUserHelper;


class Client
{
    private static string $url;

    /**
     * @param string $url
     */
    public static function setClientUrl(string $url): void
    {
        self::$url = $url;
    }

    /**
     * @return string
     */
    public static function getClientUrl(): string
    {
        return self::$url;
    }
}
