<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\searchController;

class ServiceController extends Controller
{
    // Show all services
    public function index()
    {
        $services = Service::all(); // Retrieve all services from the database
        return view('services.index', compact('services'));
    }

    // Show the form to create a new service
    public function create()
    {
        return view('services.create');
    }

    // Store a newly created service in the database
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->user_id = auth()->id(); // Assign the logged-in user's ID (admin)
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service created successfully!');
    }

    // Show the form to edit an existing service
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // Update an existing service
    public function update(Request $request, Service $service)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Update the service in the database
        $service->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    // Delete an existing service
    public function destroy(Service $service)
    {
        $service->delete(); // Delete the service
        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }

    // Search for services using AJAX
    public function search(Request $request)
    {
            $query = $request->get('query');
        
            // Fetch only services created by the admin
            $adminServices = Service::whereHas('user', function ($q) {
                $q->where('is_admin', true); // Assuming 'is_admin' column exists in the users table
            })
            ->where('name', 'like', '%' . $query . '%')
            ->get();
            $services = Service::all(); // Retrieve all services from the database
        
            return response()->json($adminServices);
        }
           
    }