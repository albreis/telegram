<?php

namespace Albreis\Telegram;

trait Request {
    private static $apiUrl = "https://api.telegram.org/bot";
    
    private static $token;

    public static function setToken($token) {
        self::$token = $token;
        return new self;
    }

    public static function getToken() {
        if(self::$token) {
            return self::$token;
        }
        return Config::getToken();
    }

    /**
     * Envia uma requisição POST à API do Telegram.
     *
     * @param string $method Nome do método da API.
     * @param array $data Dados a serem enviados.
     * @return mixed Resposta da API.
     */
    public static function sendPostRequest(string $method, array $data = []): mixed {
        
        $url = self::$apiUrl . self::getToken() . '/' . $method;
        $curl = curl_init($url);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        
        $response = curl_exec($curl);
        curl_close($curl);

        if(self::$token) {
            self::$token = null;
        }

        return json_decode($response, true);
    }

    /**
     * Envia uma requisição GET à API do Telegram.
     *
     * @param string $method Nome do método da API.
     * @param array $data Dados a serem enviados como parâmetros de query.
     * @return mixed Resposta da API.
     */
    public static function sendGetRequest(string $method, array $data = []): mixed {
        $url = self::$apiUrl . self::getToken() . '/' . $method;
        $url .= '?' . http_build_query($data);

        $curl = curl_init($url);
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($curl);
        curl_close($curl);

        if(self::$token) {
            self::$token = null;
        }
        
        return json_decode($response, true);
    }
}
