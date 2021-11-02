<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $pendingSuggestions = $user->suggestions()->toBeApproved()->get();
        
        return view('dashboard', [
            'pendingSuggestions' => $pendingSuggestions
        ]);
    }
}
