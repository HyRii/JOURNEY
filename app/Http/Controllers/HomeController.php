<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $journals = Journal::where('id_user', $user->id)->get();
        return view('journals.index',[
            'journals' => $journals,
        ]);
    }
}
