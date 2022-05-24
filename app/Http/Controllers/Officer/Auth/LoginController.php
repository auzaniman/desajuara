<?php

namespace App\Http\Controllers\Officer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginOfficerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;
use App\Models\Officer;

class LoginController extends Controller
{
  public function index()
    {
      if(Auth::guard('officer')->check())
      {
          return redirect()->route('officer.dashboard');
      }
      return view('officer.auth.login');
    }

  public function login(LoginOfficerRequest $request)
  {
    if (Auth::guard('officer')->attempt($request->validated())) {
      try {
          return redirect()->route('officer.dashboard');
      } catch (Throwable $e) {
          report($e);

          return false;
      }
  }
  return redirect()->back();
  }

  public function logout()
  {
    Auth::guard('officer')->logout();

    return redirect()->route('/');
  }


}
