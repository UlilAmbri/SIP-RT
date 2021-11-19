<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapor;

class LaporController extends Controller
{
    public function create()
    {
        return view('lapor.create', []);
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Lapor::insert($data);

        return redirect('/lapor')->with('success', 'Data telah disimpan.');
        return back()->with('insertError', 'Data gagal disimpan!');
    }
}
