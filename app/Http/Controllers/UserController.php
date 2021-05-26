<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
  public function create()
  {
    return Inertia::render('Components/Clients/CreateClientComponent');
  }

  public function dashboard()
  {
    return Inertia::render('Components/DashBoardComponent');
  }
}
