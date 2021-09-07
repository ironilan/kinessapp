<?php

namespace App\Http\Controllers\dashboard\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
     public function index()
    {
        return view('dashboard.perfil.index');
    }
}
