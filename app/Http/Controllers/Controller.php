<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Jobs\SendWelcomeMail; 

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * REQUISITOS:
     * - Migrar las tablas jobs & failed_jobs
     * - En .env: QUEUE_CONNECTION=database
     * - Configurar el servicio de correos
     */
    public function sendWelcomeMail()
    {
        $name = 'Sergio Luis';
        $email = 'sergio240196@gmail.com';

        $job = new SendWelcomeMail($name, $email);
        $this->dispatch($job);

        return response()->json([
            'ready' => true,
        ]);
    }
}
