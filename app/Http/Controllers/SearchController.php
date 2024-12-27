<?php
namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            // Search for services by name or description
            $services = Service::where('name', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->get();
        } else {
            $services = [];
        }

        // Return JSON response
        return response()->json($services);
    }}
