<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PexelsAPIClient
{
    public function __construct()
    {
//        TODO: Load from the env("SECRET") and api url
        $this->apiUrl = 'https://api.pexels.com';
        $this->apiKey = 'bLOho0PBlkIXGlCnTdFQq8Bt59qs33tRpusjtwmMwqGr2ARDKl2yi7qq';
    }

    public function getRandomImage(string $category, $page) : array | null
    {
        try{
            $response = Http::withHeaders([
                'Authorization' => $this->apiKey
            ])->get($this->apiUrl . '/v1/search?query=' . $category . '&page=' . $page . '&per_page=1');
            if($response->successful()){
                return $response->json();
            }

            throw new Exception('API request failed with status' . $response->status());
        }catch (Exception $exception){
            Log::error($exception);
        }
    }
}


