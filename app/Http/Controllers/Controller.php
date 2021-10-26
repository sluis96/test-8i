<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function tipoDeCambio()
    {
        $response = Http::get('https://api.apis.net.pe/v1/tipo-cambio-sunat');

        return response()->json([
            'ready' => true,
            'response' => $response->json(),
        ]);
    }
}
