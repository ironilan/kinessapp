<?php

namespace App\Http\Controllers\dashboard\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return view('dashboard.configuracion.index');
    }
}
