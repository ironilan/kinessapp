<?php

namespace App\Http\Controllers\dashboard\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        return view('dashboard.pagos.index');
    }
}
