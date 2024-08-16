<?php

namespace Albreis\Telegram;

class Config {

    private static $token;

    public static function setToken($token) {
        self::$token = $token;
    }

    public static function getToken() {
        return self::$token;
    }

}