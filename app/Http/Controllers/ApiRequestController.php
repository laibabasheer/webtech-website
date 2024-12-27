<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiRequestController extends Controller
{

    public function fetchData()
            {
                $response = Http::withHeaders([
                    'X-User-Email' => 'laibabasheer54@gmail.com',
                ])->get('https://api.example.com/data');
        
                if ($response->successful()) {
                    return response()->json($response->json());
                } else {
                    return response()->json(['error' => 'Failed to fetch data from API'], $response->status());
                }
            }
        }
        


