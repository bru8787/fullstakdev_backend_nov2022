<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function sayCiao()
    {
        //conne query pdf
        //class -> calcola lo stpnedio in basa $param
        echo "Ciao mondo!";
        //-> invio alla vista $result [array];
    }

    public function sayHello()
    {
        //elabora
        echo "Hello world!";
    }

    public function sayBuonasera()
    {
        echo "buonasera";
    }

    public function salutami($name)
    {
        return "Only name Hello $name";
    }

    public function saluta($name, $surname)
    {
        return "Two: Hello $name $surname";
    }
    
}
