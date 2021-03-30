<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getBooks(Request $request)
    {
        return redirect()->route('userRegister');
    }
}
