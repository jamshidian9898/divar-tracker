<?php

namespace App\Services\Requestor;

use Illuminate\Support\Facades\Http;

class Requestor
{
    public $config;

    public function __construct()
    {
        $this->config = config('services.requestor');
    }
    
    function create($user, $url, $minPrice, $maxPrice)
    {
        try {

            $response = Http::withHeaders($this->config['headers'])->post($this->config['api-url'], [
                'user' => $user->id,
                'url' => $url,
                'min' => $minPrice,
                'max' => $maxPrice,
            ]);

            return [
                'status' => true,
                'message' => 'your request registered successfully.',
                'data' => $response
            ];
        } catch (\Throwable $th) {
            return ['status' => false, 'message' => $th->getMessage()];
        }
    }
}
