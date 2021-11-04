<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Genus;
use App\Models\Species;
use App\Models\Suggestion;
use App\Models\Variety;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        
        $pendingSuggestions = $user->suggestions()->toBeApproved()->get();
    
        return view('dashboard', [
            'pendingSuggestions' => $pendingSuggestions,
            'recentAdditions' => [
                'families' => Family::orderByDesc('created_at')->take(5)->get(),
                'genera' => Genus::orderByDesc('created_at')->take(5)->get(),
                'species' => Species::orderByDesc('created_at')->take(5)->get(),
                'varieties' => Variety::orderByDesc('created_at')->take(5)->get()
            ]
        ]);
    }
}
