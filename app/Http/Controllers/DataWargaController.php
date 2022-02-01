<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapor;

class DataWargaController extends Controller
{
    function show()
    {
        $data = Lapor::all();
        return view('data', ['lapors'=>$data]);
    }

}