<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function contactForm()
  {
   return view('contact');
  }

   public function postForm(ContactRequest $request)
   {
     return view('confirm');
   }
}
