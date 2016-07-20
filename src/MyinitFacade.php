<?php

namespace Teclaelvis\Myinit;
use Illuminate\Support\Facades\Facade;

class MyinitFacade extends Facade
{
    //
   protected static function getFacadeAccesor()
   {
   		return "Myinit";
   }
}
