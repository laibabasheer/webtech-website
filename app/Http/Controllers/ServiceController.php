<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller; // Add this if not already present
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Display all services
    public function index()
    {
        $services = Service::all(); // Retrieve all services from the database
        return view('services', compact('services'));
    }

    // Store a new service
    public function store(Request $request)
    {
        

}   
}