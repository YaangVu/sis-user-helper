<?php


namespace YaangVu\SisUserHelper;


use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use YaangVu\Exceptions\BaseException;

class HttpClient
{
    static function get(string $path, array $params = [], array $headers = [])
    {
        $url = Client::getClientUrl();
        Log::info("Call API to $url/$path with params: ", $params);
        $response = Http::withHeaders($headers)->get($url . $path, $params);

        $statusResponse = (int)$response->status();

        if ($statusResponse < 200 || $statusResponse >= 300) {
            throw new BaseException($response->body(), new Exception(), $statusResponse);
        }

        Log::info("Response from API $url/$path with body: " . $response->body());

        return json_decode($response->body(), true);
    }
}
