<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:mahasiswa')->except('logout');
        $this->middleware('guest:dosen')->except('logout');
    }

    protected function Login(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->intended(route('dashboard'));
        }

        elseif(Auth::guard('mahasiswa')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->intended(route('mahasiswa'));
        }

        elseif(Auth::guard('dosen')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->intended(route('dosen'));
        }

        return redirect('/login')
        ->withInput($request->only('email', 'remember'))
        ->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
