<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->header('Accept') === 'application/json') {
            if (!$request->user()) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            $data = [
                'total_users' => 150,
                'total_orders' => 300,
                'revenue' => 5000,
            ];
            return response()->json($data);
        }
        return view('dashboard'); // Giữ cho web
    }
}