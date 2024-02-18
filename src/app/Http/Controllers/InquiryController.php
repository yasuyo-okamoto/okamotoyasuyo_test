<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
  public function register()
  {
    return view('register');
  }

  public function login()
  {
    return view('login');
  }

  public function contact()
  {
    return view('contact');
  }

  public function confirm()
  {
    return view('confirm');
  }

  public function admin()
  {
    return view('admin');
  }

  public function thanks()
  {
    return view('thanks');
  }
}
