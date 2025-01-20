<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapViewController extends Controller
{
  public function newDashboard()
  {
    return view('new-dashboard');
  }

  public function installation()
  {
    return view('installation');
  }

  public function oncall()
  {
    return view('oncall');
  }

  public function odn()
  {
    return view('odn');
  }

  public function ticket()
  {
    return view('ticket.index');
  }

  public function ticketCreate()
  {
    return view('ticket.create');
  }

  public function ticketShow()
  {
    return view('ticket.show');
  }
}
