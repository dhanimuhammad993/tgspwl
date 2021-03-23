<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuk;

class control extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Mohammad Dhani A.']);
    }
    public function index()
    {
        $data = cuk::all();
        return view('tgs\index', ['mahasiswa' => $data]);
        
    }

    
    
}

