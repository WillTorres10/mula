<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MulaController extends Controller
{
    public function index()
    {
        return view('quem-eh-a-mula');
    }

    public function generateUrl(Request $request)
    {
        return redirect()->route('mula', $request->mulaNome);
    }

    public function aMula($mula)
    {
        return view('a-mula', compact('mula'));
    }
}
