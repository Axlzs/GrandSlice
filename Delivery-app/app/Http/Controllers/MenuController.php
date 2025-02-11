<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class MenuController extends Controller
{
    public function showmenu()
    {
        $data=food::all();
        return view("menu",compact("data"));
    }
}
