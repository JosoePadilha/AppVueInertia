<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
  public function index()
  {
    return Inertia::render('Components/InitialComponent');
  }

  public function teste()
  {
    return Inertia::render('Components/Teste');
  }
}
