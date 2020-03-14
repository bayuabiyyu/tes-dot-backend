<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\RajaOngkirServices;

class RajaOngkirController extends Controller
{

    private $rajaOngkirService;

    /**
     * Constructor class
     *
     * @return void
     */
    public function __construct(RajaOngkirServices $rajaOngkirService)
    {
        $this->rajaOngkirService = $rajaOngkirService;
    }

    /**
     * Get province
     *
     * @return json
     */
    public function getProvince(Request $request)
    {
        $provinceID = $request->input('id');
        $res = $this->rajaOngkirService->getProvince($provinceID);
        return response()->json($res, $res['status_code']);
    }

    /**
     * Get city
     *
     * @return json
     */
    public function getCity(Request $request)
    {
        $provinceID = $request->input('provinceID');
        $cityID = $request->input('cityID');
        $res = $this->rajaOngkirService->getCity($provinceID, $cityID);
        return response()->json($res, $res['status_code']);
    }


}
