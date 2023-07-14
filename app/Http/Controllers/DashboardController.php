<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\StockBarang;
use App\Models\Kategory;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $totalStocks = StockBarang::count();
        $totalKategories = Kategory::count();
        $totalUsers = User::count();
        return view('dashboard.main_dashboard', [
            'user' => $user,
            'totalStocks' => $totalStocks,
            'totalKategories' => $totalKategories,
            'totalUsers' => $totalUsers
        ]);
    }
}
