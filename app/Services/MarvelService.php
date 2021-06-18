<?php


namespace App\Services;


use Carbon\Carbon;
use GuzzleHttp\Client;

class MarvelService
{
    /**
     * @var Client
     */
    private $client;

    /**
     * MarvelService constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    public function execute($params = [], $endPoint, $id = null)
    {
        $response = $this->client->request('GET', $this->montaUrl($params, $endPoint, $id));
        return json_decode($response->getBody()->getContents());
    }


    private function montaUrl(array $params = [], $endPoint, $id = null)
    {
        $url = config('services.api.url');
        $param = $this->setParams($params);
        if (empty($id)) {
            return "{$url}/{$endPoint}?$param";
        }
        return "{$url}/{$endPoint}/{$id}?$param";
    }

    private function montaHash()
    {
        $publiKey = config('services.api.apiPublicKey');
        $privateKey = config('services.api.apiPrivateKey');
        $times = Carbon::now()->timestamp;
        $hash = md5($times . $privateKey . $publiKey);

        return [
            "ts" => $times,
            "apikey" => $publiKey,
            "hash" => $hash
        ];
    }

    private function setParams(array $params = [])
    {
        $params = collect(array_merge($params, $this->montaHash()));
        $url = [];
        $params->each(function ($value, $key) use (&$url) {
            $url[] = "{$key}={$value}";
        });
        return collect($url)->implode('&');
    }
}
