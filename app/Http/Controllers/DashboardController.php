<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $income = Transaction::where('transaction_status','SUCCES')->sum('transaction_total');
        $sales = Transaction::count();
        $items = Transaction::orderBy('id', 'DESC')->take(5)->get();

        $pie = [
            'pending' => Transaction::where('transaction_status', 'PEDNING')->count(),
            'succes' => Transaction::where('transaction_status', 'SUCCES')->count(),
            'failed' => Transaction::where('transaction_status', 'FAILED')->count()
        ];
        return view('Dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'items' => $items,
            'pie' => $pie
        ]);
    }
}
