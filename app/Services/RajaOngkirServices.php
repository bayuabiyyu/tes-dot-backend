<?php

namespace App\Services;

use GuzzleHttp\Client;

class RajaOngkirServices
{

    private $url, $key;
    private $httpGuzzle;

    public function __construct(Client $httpGuzzle)
    {
        $this->httpGuzzle = $httpGuzzle;
        $this->url = env("RAJAONGKIR_URL", "https://api.rajaongkir.com/starter/");
        $this->key = env("RAJAONGKIR_KEY", "123");
    }

    /**
     * Get province
     *
     * @param id_province
     * @return json
     */
    public function getProvince($id = null)
    {
        try{
            $param = "/province?id=".$id;
            $response = $this->httpGuzzle->request('GET', $this->url.$param, [
                'headers' => [
                    'key' => $this->key,
                ]
            ]);
            $res = [
                'status_code' => $response->getStatusCode(),
                'message' => 'Success get data',
                'data' => json_decode($response->getBody()->getContents())->rajaongkir->results
            ];
        }catch(\Exception $e){
            $res = [
                'status_code' => 500,
                'message' => $e->getMessage(),
            ];
        }
        return $res;
    }

    /**
     * Get city
     *
     * @param province_id,city_id
     * @return json
     */
    public function getCity($provinceID = null, $cityID = null)
    {
        try{
            $param = "/city?id=".$cityID."&"."province=".$provinceID;
            $response = $this->httpGuzzle->request('GET', $this->url.$param, [
                'headers' => [
                    'key' => $this->key,
                ]
            ]);
            $res = [
                'status_code' => $response->getStatusCode(),
                'data' => json_decode($response->getBody()->getContents())->rajaongkir->results
            ];
        }catch(\Exception $e){
            $res = [
                'status_code' => 500,
                'message' => $e->getMessage(),
            ];
        }
        return $res;
    }

}
