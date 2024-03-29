<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)

    {   
        $input = $request->all();
        $this->validate($request, [
            'dni' => 'required',
            'password' => 'required',
        ]);

        $fieldType = filter_var($request->dni, FILTER_VALIDATE_EMAIL) ? 'email' : 'dni';

        if(auth()->attempt(array($fieldType => $input['dni'], 'password' => $input['password'])))
        {
            return redirect()->route('home');

        }else{
            return redirect()->route('login')
                ->with('error_login','Usted ha ingresado de manera incorrecta las credenciales por favor, vuelva a introducirlas');
        }
          
    }

}
