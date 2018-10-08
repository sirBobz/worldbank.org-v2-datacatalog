<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application display.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transaction::all();

        return view('home', compact('data'));
    }


    /**
     * Show the specific data display.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewMore($id)
    {
        $data = Transaction::where('row_id', '=', $id)->get();

        return view('viewMore', compact('data'));
    }
}
