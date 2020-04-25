<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AdminLoginController extends Controller
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
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct(){
       $this->middleware('guest:admin')->except('adminLogout');
     }

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //validating user
        $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required|min:6'
        ]);
        //attempt to log the user in
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
            return redirect()->intended(route('home.index'));
        }

        //if successful, then redirect to their intended location
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function adminLogout(Request $request)
   {
       Auth::guard('admin')->logout();
       // return $this->loggedOut($request) ?: redirect('/');
       return redirect()->route('admin.login');
   }
}
