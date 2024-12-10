<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmisiCarbon;

class DashboardController extends Controller
{
    public function index()
    {
        $emisi = EmisiCarbon::all(); // Ambil semua data EmisiCarbon
        return view('pages.dashboard', compact('emisi'));
    }
}
