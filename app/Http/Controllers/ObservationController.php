<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ObservationController extends Controller
{
    public function getObservation()
    {
        $apiUrl = env('WEATHER_API');

        $response = Http::withoutVerifying()->get($apiUrl);

        if ($response->successful()) {
            $decodedResponse = $response->json();

            if ($decodedResponse !== null && isset($decodedResponse['observations'])) {
                $observations = $decodedResponse['observations'];

                return response()->json($observations);
            } else {
                return response()->json(["error" => "Failed to decode JSON"], 500);
            }
        } else {
            return response()->json(["error" => "Failed to fetch data"], $response->status());
        }
    }
}
