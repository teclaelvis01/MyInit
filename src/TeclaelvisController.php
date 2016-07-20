<?php

namespace Teclaelvis\Myinit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class TeclaelvisController extends Controller
{
    //
    public function index($msg = ",Gracias por venir !!!"){
    	return "Desde mi paquete ".$msg;
    }
}
