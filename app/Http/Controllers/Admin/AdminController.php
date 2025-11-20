<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index (){

          // User Statistics
        $newUsersCount = User::where('created_at', '>=', Carbon::now()->subDays(7))->count();
        $totalUsersCount = User::count();
    

         // Recent Activity
        $recentUsers = User::latest()->take(5)->get();


        return view('admin.dashboard', compact(
            'newUsersCount',
            'totalUsersCount',
           
            'recentUsers',
        ));
     
    }

}
