<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
class AuthorController extends Controller
{
    public function index(){
        return view('authors.index');
    }
}