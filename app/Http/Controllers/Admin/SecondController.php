<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    public function printString(): string
    {
        return 'Hello world';
    }
}
