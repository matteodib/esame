<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class ApiController extends Controller
{
    public function index() {
        return Todo::all();
    }
}
