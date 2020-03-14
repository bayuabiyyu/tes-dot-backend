<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\YmlToJsonService;


class YmlToJsonController extends Controller
{

    private $ymlToJson;

    /**
     * Init class
     *
     * @return void
     */
    public function __construct(YmlToJsonService $ymlToJson)
    {
        $this->ymlToJson = $ymlToJson;
    }

    // Read data yaml
    public function read()
    {
        $data = $this->ymlToJson->read();
        return $data;
    }

}
