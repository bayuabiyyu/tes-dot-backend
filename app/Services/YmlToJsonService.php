<?php

namespace App\Services;

use Symfony\Component\Yaml\Yaml;

class YmlToJsonService
{

    /**
     * Read & parsing data yml from file service
     *
     */
    public function read()
    {
        // Get File From base_path() / diluar folder app
        $getFile = base_path('service.yml');
        // Parsing hasil yml
        $getFileParsing = Yaml::parse(file_get_contents($getFile));
        // Ambil data dari env
        $SQL_CLIENT     = env('SQL_CLIENT', 'default');
        $SQL_HOST       =  env('SQL_HOST', 'localhost');
        $SQL_PORT       =  env('SQL_PORT', '80');
        $SQL_USER       =  env('SQL_USER', 'root');
        $SQL_PASSWORD   =  env('SQL_PASSWORD', 'secret');
        $SQL_DATABASE   =  env('SQL_DATABASE', 'db_default');
        // Deklarasikan array mana saja yang mau di replace
        $replaceByArray = ['storages' =>
                            ['database' => [
                                    'client' => $SQL_CLIENT,
                                    'connection' => [
                                        'host' => $SQL_HOST,
                                        'port' => $SQL_PORT,
                                        'user' => $SQL_USER,
                                        'password' => $SQL_PASSWORD,
                                        'database' => $SQL_DATABASE
                                    ]
                                ]
                            ]
                        ];
        // Replace array berdasarkan yang sudah di deklarasikan
        $hasilReplace = array_replace($getFileParsing, $replaceByArray);
        return $hasilReplace;
    }

}
