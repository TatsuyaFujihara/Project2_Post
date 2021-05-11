<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
// Todoタスク一覧
    public function index()
    {
        return view('test');
    }
}
